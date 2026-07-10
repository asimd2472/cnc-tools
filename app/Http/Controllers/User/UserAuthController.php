<?php

namespace App\Http\Controllers\User;

use App\Helpers\QuoteOrderHelper;
use App\Http\Controllers\Controller;
use App\Mail\SendUserPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserAuthController extends Controller
{
    public function index()
    {
        return view('frontend.login');
    }
    public function register()
    {
        return view('frontend.register');
    }
    

    public function login(Request $request)
    {
        // dd($request->all());
        try {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required', 'min:6'],
            ]);

            $remember = $request->has('remember');

            if (Auth::attempt([
                'email' => $credentials['email'],
                'password' => $credentials['password'],
                'user_type' => 2,
                'status' => 1
            ], $remember)) {

                $request->session()->regenerate();
                // $this->storePendingQuoteFromSession($request);
                $quoteRequest = session('cnc_quote_request');
                if ($quoteRequest) {
                    $this->storePendingQuoteFromSession(request());
                    return redirect()->route('user.order_success')->with('success', 'Order Successfully!');
                }

                return redirect()->route('user.profile')
                    ->with('success', 'Login successful!');
            }

            return back()->withErrors([
                'email' => 'Invalid credentials or not authorized as user',
            ])->withInput();

        } catch (ValidationException $e) {
            return back()
                ->withErrors($e->validator)
                ->withInput();

        } catch (\Exception $e) {
            return back()
                ->with('error', 'Something went wrong. Please try again.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')
            ->with('success', 'Logged out successfully!');
    }

    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
            $user = User::where('email', $googleUser->getEmail())->first();

            if ($user) {
                $user->update([
                    'google_id' => $googleUser->getId(),
                    'avatar' => $googleUser->getAvatar(),
                ]);
            } else {
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(), 
                    'avatar' => $googleUser->getAvatar(),
                    'password' => bcrypt(Str::random(16)),
                    'user_type' => 2,
                    'status' => 1,
                ]);
            }

            Auth::login($user, true);

            $quoteRequest = session('cnc_quote_request');
            if ($quoteRequest) {
                $this->storePendingQuoteFromSession(request());
                return redirect()->route('user.order_success')->with('success', 'Order Successfully!');
            }

            return redirect()->route('user.profile')
                ->with('success', 'Login with Google successful!');

        } catch (\Exception $e) {
            return redirect()->route('login')
                ->with('error', 'Google login failed!');
        }
    }


    public function signup(Request $request)
    {
        try {
            $validated = $request->validate([
                'firstName' => 'required|string|max:50',
                'lastName' => 'required|string|max:50',
                'email' => 'required|email|unique:users,email',
                'phone_number' => 'nullable|string|max:15',
                'password' => 'required|min:8|confirmed', 
                'agreeTerms' => 'required'
            ]);
            $user = User::create([
                'name' => $validated['firstName'] . ' ' . $validated['lastName'],
                'email' => $validated['email'],
                'phone_number' => $validated['phone_number'] ?? null,
                'password' => Hash::make($validated['password']),
                'user_type' => 2,
                'status' => 1,
            ]);
            Auth::login($user);
            // $this->storePendingQuoteFromSession($request);
            $quoteRequest = session('cnc_quote_request');
            if ($quoteRequest) {
                $this->storePendingQuoteFromSession(request());
                return redirect()->route('user.order_success')->with('success', 'Order Successfully!');
            }
            return redirect()->route('user.profile')
                ->with('success', 'Account created successfully!');
        } catch (ValidationException $e) {
            return back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong. Please try again.');
        }
    }

    protected function storePendingQuoteFromSession(Request $request): void
    {
        $sessionQuote = $request->session()->get('cnc_quote_request');
        $parts = (array) data_get($sessionQuote, 'parts', []);
        $leadTime = (string) data_get($sessionQuote, 'lead_time', '3-5');

        if (!Auth::check() || empty($parts)) {
            return;
        }

        QuoteOrderHelper::storeQuote($parts, Auth::id(), $leadTime);
        $request->session()->forget('cnc_quote_request');
    }

    public function forgot_password(){
        return view('frontend.forgot_password');
    }

    public function forgot_password_submit(Request $request){
        try {
            $request->validate([
                'email' => 'required|email|exists:users,email',
            ]);

            $user = User::where('email', $request->email)->where('user_type', '2')->first();
            
            if(!$user){
                return back()->with('error', 'User record not found.');     
            }

            $plainPassword = Str::random(8);
            $password = Hash::make($plainPassword);
            $user->update(['password' => $password]);


            
            Mail::raw("Your new pasword is: $plainPassword", function ($message) use ($user) {
                $message->to($user->email)
                        ->subject('Reset Password');
            });

            return redirect()->back()->with('success', 'Password reset successfully');
            

        } catch (ValidationException $e) {
            return back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong. Please try again.');
        }
    }
}

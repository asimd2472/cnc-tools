<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


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
            return redirect()->route('user.profile')
                ->with('success', 'Account created successfully!');
        } catch (ValidationException $e) {
            return back()->withErrors($e->validator)->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong. Please try again.');
        }
    }
}

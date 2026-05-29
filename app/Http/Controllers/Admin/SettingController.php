<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = \App\Models\Setting::first();
        return view('admin.setting.index', compact('setting'));
    }

    public function save(Request $request)
    {
        $data = $request->validate([
            'address' => 'nullable|string',
            'city' => 'nullable|string',
            'state' => 'nullable|string',
            'pin' => 'nullable|string',
            'gst' => 'nullable|string',
            'pan' => 'nullable|string',
            'key_id' => 'nullable|string',
            'key_secret' => 'nullable|string',
        ]);

        $setting = \App\Models\Setting::first();
        if ($setting) {
            $setting->update($data);
        } else {
            $setting = \App\Models\Setting::create($data);
        }

        return redirect()->route('admin.setting')->with('success', 'Settings updated successfully.');
    }
}

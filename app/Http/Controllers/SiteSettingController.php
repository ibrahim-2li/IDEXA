<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function edit()
    {
        $settings = SiteSetting::first() ?? new SiteSetting([
            'site_name' => 'E7 GROUP',
            'hero_title' => "TRUSTED \nSOLUTIONS FOR \nYOUR BUSINESS \nACROSS THE UAE",
            'contact_email' => 'info@e7group.ae',
            'contact_phone' => '+971 2 000 0000',
            'address' => "Abu Dhabi\nUnited Arab Emirates\nPO Box 123456",
            'footer_text' => 'Trusted solutions for your business across the UAE. We provide seamless integration from identity security to packaging and printing.'
        ]);

        return view('admin.settings.edit', compact('settings'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'site_name' => 'required|string|max:255',
            'hero_title' => 'required|string',
            'contact_email' => 'required|email|max:255',
            'contact_phone' => 'required|string|max:255',
            'address' => 'required|string',
            'footer_text' => 'required|string',
        ]);

        $settings = SiteSetting::first();
        if ($settings) {
            $settings->update($validated);
        } else {
            SiteSetting::create($validated);
        }

        return redirect()->back()->with('success', 'Site settings updated successfully.');
    }
}

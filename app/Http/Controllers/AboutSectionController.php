<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use Illuminate\Http\Request;

class AboutSectionController extends Controller
{
    public function edit()
    {
        $about = AboutSection::first() ?? new AboutSection([
            'title' => "From identity solutions to printing, packaging and delivery, we provide seamless integrated solutions",
            'p1' => "e7 Group is a driving force in progress, building long-term partnerships with the world's leading companies and governments. We go beyond solutions—we redefine industries, set new standards, and create a more secure, connected, and dynamic future. Innovation drives us. With a proven track record of quality, reliability, and cutting-edge expertise, we anticipate the evolving needs of businesses and institutions—keeping them ahead in a rapidly changing world.",
            'p2' => "From identity solutions and secure printing to packaging, education, and logistics, our seamless, integrated services work effortlessly together—designed for maximum efficiency and always focused on our clients' success.",
            'about_us_heading' => "INNOVATION AND EXCELLENCE IN EVERY SOLUTION",
            'about_us_p1' => "Based in Abu Dhabi, E7 Group builds on a legacy and strong track record of providing an innovative and diversified portfolio of printing, packaging, and distribution solutions that empower essential industries.",
            'about_us_p2' => "We cater to local and global clients by leveraging cutting-edge technology and best-in-class practices. Our legacy is built on a foundation of reliability and precision.",
            'about_us_highlight_title' => "Integrated Ecosystem",
            'about_us_highlight_text' => "We champion an \"All-in-One Partner\" approach, offering a fully integrated ecosystem from secure identity systems to high-quality printing, branding, packaging, and logistics. This seamless approach is designed to ensure every component works efficiently and securely together, serving both government institutions and businesses."
        ]);

        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'p1' => 'required|string',
            'p2' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'about_us_heading' => 'required|string',
            'about_us_p1' => 'required|string',
            'about_us_p2' => 'required|string',
            'about_us_highlight_title' => 'required|string',
            'about_us_highlight_text' => 'required|string',
            'about_us_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_landing_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $validated['image'] = '/images/' . $filename;
        }

        if ($request->hasFile('about_us_image')) {
            $file = $request->file('about_us_image');
            $filename = time() . '_about_us_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $validated['about_us_image'] = '/images/' . $filename;
        }

        $about = AboutSection::first();
        if ($about) {
            $about->update($validated);
        } else {
            AboutSection::create($validated);
        }

        return redirect()->back()->with('success', 'About section updated successfully.');
    }
}

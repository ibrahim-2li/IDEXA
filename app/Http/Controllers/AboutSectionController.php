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
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $validated['image'] = '/images/' . $filename;
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

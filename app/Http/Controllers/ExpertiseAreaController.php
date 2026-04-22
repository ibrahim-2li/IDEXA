<?php

namespace App\Http\Controllers;

use App\Models\ExpertiseArea;
use Illuminate\Http\Request;

class ExpertiseAreaController extends Controller
{
    public function index()
    {
        $expertise = ExpertiseArea::all();
        return view('admin.expertise.index', compact('expertise'));
    }

    public function create()
    {
        return view('admin.expertise.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description_1' => 'required|string',
            'description_2' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'link' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $validated['image'] = '/images/' . $filename;
        }

        ExpertiseArea::create($validated);

        return redirect()->route('admin.expertise.index')->with('success', 'Area of expertise created successfully.');
    }

    public function edit(ExpertiseArea $expertiseArea)
    {
        return view('admin.expertise.edit', compact('expertiseArea'));
    }

    public function update(Request $request, ExpertiseArea $expertiseArea)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description_1' => 'required|string',
            'description_2' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'link' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $validated['image'] = '/images/' . $filename;
        }

        $expertiseArea->update($validated);

        return redirect()->route('admin.expertise.index')->with('success', 'Area of expertise updated successfully.');
    }

    public function destroy(ExpertiseArea $expertiseArea)
    {
        $expertiseArea->delete();
        return redirect()->route('admin.expertise.index')->with('success', 'Area of expertise deleted successfully.');
    }
}

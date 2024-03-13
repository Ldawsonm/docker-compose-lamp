<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Adventure;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adventure.editor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Adventure $adventure)
    {
        $validatedData = $request->validate([
            'content' => 'required',
        ]);

        $slide = new Slide();
        $slide->adventure_id = $adventure->id;
        $slide->content = $validatedData['content'];
        $slide->save();

        return redirect()->route('adventures.editor', $adventure->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('slides.edit', compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $slide->content = $request->content;
        //$slide->css_path = $request->css_path;  // Handle file changes
        $slide->save();

        return redirect()->route('slides.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slide $slide)
    {
        $slide->delete();
        return back()->with('success', 'Slide deleted successfully');
    }
}

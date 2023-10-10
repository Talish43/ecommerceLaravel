<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::all();
        $data = [
            'title' => 'Banners',
            'createTitle' => 'Add Banner',
            'editTitle' => 'Edit Banner',
            'saveTitle' => 'Save Banner',
            'updateTitle' => 'Update Banner'
        ];
        return view('backend.banners.index', compact('banners','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Banners',
            'createTitle' => 'Create Banner',
            'saveTitle' => 'Save Banner',
        ];
        return view('backend.banners.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
        
        $banner = new Banner();
        
        $banner->title = $request->get('title');
        $banner->slug = Str::slug($request->get('title'));
        $banner->status = $request->get('status');
        if ($request->hasFile('file')) {
            $imageName = time().'.'.$request->file->extension();  
            $request->file->move(public_path('storage/uploads'), $imageName);
            $banner->photo = $imageName;
        }
          $banner->save();
        return redirect()->route('banners.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts=About::paginate(config('pagination.count'));
        return view('admin.abouts.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.abouts.create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAboutRequest $request)
    {
       $data = $request->validated();
        // image uploading 
        // 1- get image
        $image = $request->image;
        // 2- change it's current name
        $newImageName = time() . '-' . $image->getClientOriginalName();
        // 3- move image to my project
        $image->storeAs('abouts', $newImageName, 'public');
        // 4- save new name to database record
        $data['image'] = $newImageName;
       About::create($data);
       return to_route('admin.abouts.index')->with('success',__('keywords.created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        return view('admin.abouts.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('admin.abouts.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAboutRequest $request, About $about)
    {
        $data =$request->validated();
        if ($request->hasFile('image')) {
            // image uploading 
            // 0- delete old image
            Storage::delete("public/abouts/$about->image");
            // 1- get image
            $image = $request->image;
            // 2- change it's current name
            $newImageName = time() . '-' . $image->getClientOriginalName();
            // 3- move image to my project
            $image->storeAs('abouts', $newImageName, 'public');
            // 4- save new name to database record
            $data['image'] = $newImageName;
        }
        $about->update($data);
        return to_route('admin.abouts.index')->with('success',__('keywords.updated_successfully'));
    
   }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        Storage::delete("public/abouts/$about->image");
        $about->delete();
        return to_route('admin.abouts.index')->with('success',__('keywords.deleted_successfully'));
    }
}

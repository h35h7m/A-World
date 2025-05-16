<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs=Blog::paginate(config('pagination.count'));
        return view('admin.blogs.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
       $data = $request->validated();
       // image uploading 
        // 1- get image
        $image = $request->image;
        // 2- change it's current name
        $newImageName = time() . '-' . $image->getClientOriginalName();
        // 3- move image to my project
        $image->storeAs('blogs', $newImageName, 'public');
        // 4- save new name to database record
        $data['image'] = $newImageName;
       Blog::create($data);
       return to_route('admin.blogs.index')->with('success',__('keywords.created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('admin.blogs.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $data =$request->validated();
        if ($request->hasFile('image')) {
            // image uploading 
            // 0- delete old image
            Storage::delete("public/blogs/$blog->image");
            // 1- get image
            $image = $request->image;
            // 2- change it's current name
            $newImageName = time() . '-' . $image->getClientOriginalName();
            // 3- move image to my project
            $image->storeAs('blogs', $newImageName, 'public');
            // 4- save new name to database record
            $data['image'] = $newImageName;
        }
        $blog->update($data);
        return to_route('admin.blogs.index')->with('success',__('keywords.updated_successfully'));
    
}
        

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        Storage::delete("public/abouts/$$blog->image");
        $blog->delete();
        return to_route('admin.blogs.index')->with('success',__('keywords.deleted_successfully'));
    }
}

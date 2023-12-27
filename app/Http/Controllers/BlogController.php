<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Status;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Http\Request;
use File;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Blog::class);
    }   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $blog = Blog::where('name', 'LIKE', "%$keyword%")
            ->latest()->paginate($perPage);
        } else {
            $blog = Blog::latest()->paginate($perPage);
        }

        return view('admin.blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = '';
        $status = Status::whereNotNull('admin_status')->pluck('name','id');
        return view('admin.blog.create',compact('status'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogRequest $request)
    {
        $requestData = $request->all();
        
        if(!empty($request->image)){
            $folderPath = public_path('frontend/images/blog/');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, $mode = 0777, true, true);
            }      
          
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path('frontend/images/blog/'), $imageName);
            $requestData['image'] = "frontend/images/blog/".$imageName;
        }

        if(!empty($request->mobile_image)){
            $folderPath = public_path('frontend/images/mobile_blog/');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, $mode = 0777, true, true);
            }      
    
            $imageName = $request->mobile_image->getClientOriginalName();
            $request->mobile_image->move(public_path('frontend/images/mobile_blog/'), $imageName);
            $requestData['mobile_image'] = "frontend/images/mobile_blog/".$imageName ;
        }

        Blog::create($requestData);

        return redirect('admin/blog')->with('success', 'Blog added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('admin.blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $status = '';
        $status = Status::whereNotNull('admin_status')->pluck('name','id');
        return view('admin.blog.edit', compact('blog','status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogRequest  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $requestData = $request->all();
        
        if(!empty($request->image)){
            $folderPath = public_path('frontend/images/blog/');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, $mode = 0777, true, true);
            }      
          
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path('frontend/images/blog/'), $imageName);
            $requestData['image'] = "frontend/images/blog/".$imageName;
        }

        if(!empty($request->mobile_image)){
            $folderPath = public_path('frontend/images/mobile_blog/');
            if (!File::exists($folderPath)) {
                File::makeDirectory($folderPath, $mode = 0777, true, true);
            }      
    
            $imageName = $request->mobile_image->getClientOriginalName();
            $request->mobile_image->move(public_path('frontend/images/mobile_blog/'), $imageName);
            $requestData['mobile_image'] = "frontend/images/mobile_blog/".$imageName ;
        }

        Blog::create($requestData);

        return redirect('admin/blog')->with('success', 'Blog added!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect('admin/blog')->with('success', 'Blog deleted!');
    }
}

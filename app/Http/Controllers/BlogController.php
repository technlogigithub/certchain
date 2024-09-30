<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Blog::get();
        return view("admin.blog.list",compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.blog.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
            if($request->hasfile('image')){
                $destinationPath = public_path('media/blog');
                if ( ! File::exists( $destinationPath ) ) {
                    File::makeDirectory( $destinationPath, 0777, true, true );
                }
                    
                    $image = $request['image'];
                    $extension = $image->getClientOriginalExtension(); 
                    $fileName = time().'.'.$extension; 
                    $image->move($destinationPath, $fileName);
                }else{
                    $fileName = null;
                }
                Blog::create([
                    'name'=>$request->name,
                    'descrption'=>$request->descrption,
                    'image'=>$fileName,
            ]);
            return redirect('admin/blog')->withSuccess("Blog added successfully");
       
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
            $result = Blog::where('id',$id)->first();
            return view('admin.blog.edit', compact('result'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
    
        if($request->hasfile('image')){
            $destinationPath = public_path('media/blog');
            if ( ! File::exists( $destinationPath ) ) {
                File::makeDirectory( $destinationPath, 0777, true, true );
            }
                
                $image = $request['image'];
                $extension = $image->getClientOriginalExtension(); 
                $fileName = time().'.'.$extension; 
                $image->move($destinationPath, $fileName);
            }else{
                $fileName = null;
            }
            $id= $request->id;
            if ( !empty( $fileName ) ) {
            Blog::where('id', $id )->update([
                'name'=>$request->name,
                'descrption'=>$request->descrption,
                'image'=>$fileName,
        ]);
            }else{
                Blog::where('id', $id )->update([
                    'name'=>$request->name,
                    'descrption'=>$request->descrption,
                ]);

            }
        return redirect('admin/blog')->withSuccess("Blog update successfully");
   

}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Blog::where('id',$id)->delete();
        return redirect('admin/blog')->withSuccess("Blog delete successfully");

     }

}

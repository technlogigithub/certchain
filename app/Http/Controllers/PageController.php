<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\Gellery;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use File;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        $Blog_count = Blog::count();
        $Faq_count = Faq::count();
        $Gellery_count = Gellery::count();
        $Gellery_count = Gellery::count();
        return view("admin.dashboard",compact('Blog_count','Faq_count','Gellery_count','Gellery_count'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page = [
            "Banner",
            "Section",
            "Section2",
            "Section3",
            "Section4",
            "Section5",
            "Section6",
            "Section7",
        ];
        return view("admin.cms.home", compact('page'));
    }

    public function create_about()
    {
        $page = [
            "Banner",
            "Section",
            "Section2",
            "Section3",
            "Section4",
            "Section5",
        ];
        return view("admin.cms.about", compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->data;
        foreach ($data as $key => $value) {
            if(!empty($value['media'])){
             
                $destinationPath = public_path('media/home/').$value['page'];
                if (!File::exists($destinationPath)) {
                    File::makeDirectory($destinationPath, 0777, true, true);
                }
    
                $media = $value['media'];
                $extension = $media->getClientOriginalExtension();
                $mediaName = time().$key.'.' . $extension;
                $media->move($destinationPath, $mediaName);
               
            }else{
                $mediaName = null;
            }
            
            $exits = Page::where([ 'type'=>$value['type'], 'page'=>$value['page']])->first();
            if(!empty($exits)){
                Page::where('id', $exits->id)->update([
                    'title'=>$value['title'],
                    'description'=>$value['description'],
                ]);

                if(!empty($mediaName)){
                    Page::where('id', $exits->id)->update([
                        'media'=>$mediaName,
                    ]); 
                }
            }else{
                if(!empty($value['title']) || !empty($value['description'])){
                    Page::create([
                        'type'=>$value['type'],
                        'page'=>$value['page'],
                        'title'=>$value['title'],
                        'media'=>$mediaName,
                        'description'=>$value['description'],
                    ]);
                }
            }
            

        }

        return back()->withSuccess("Data saved successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }
}
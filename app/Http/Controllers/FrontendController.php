<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Gellery;
use App\Models\Faq;
use App\Models\Testimonial;


class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faq = Faq::where("status", "1")->get();
        $gellery = Gellery::where("status", "1")->get();
       return view("frontend.index", compact("faq", "gellery"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function about()
    {
        $testimonial_data = Testimonial::get();
        return view("frontend.about",compact('testimonial_data'));
    }
    public function contact()
    {
        return view("frontend.contact");
    }
    public function blog()
    {
        $result = Blog::get();
        return view("frontend.blog",compact('result'));
    }
    public function blog_details($id)
    {
        $bolg_detail = Blog::where('id',$id)->first();
        $bolg_detail = Blog::where('id',$id)->first();
        $bolg_detail = Blog::where('id',$id)->first();
        return view("frontend.blog_details",compact('bolg_detail'));
    }
    public function client()
    {
        return view("frontend.clients");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

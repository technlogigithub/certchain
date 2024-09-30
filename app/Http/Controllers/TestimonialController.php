<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $result = Testimonial::get();
        return view("admin.testimonial.list",compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view("admin.testimonial.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Testimonial::create([
            'name'=>$request->name,
            'post'=>$request->post,
            'descrption'=>$request->descrption,
            'company_name'=>$request->company_name,
            ]);

     return redirect('/admin/testimonial')->withSuccess("Testimonial added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
           $result = Testimonial::where('id',$id)->first();
            return view('admin.testimonial.edit', compact('result'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        Testimonial::where('id', $request->id )->update([
            'name'=>$request->name,
            'post'=>$request->post,
            'descrption'=>$request->descrption,
            'company_name'=>$request->company_name,
            ]);

     return redirect('/admin/testimonial')->withSuccess("Testimonial update successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Testimonial::where('id',$id)->delete();
        return redirect('/admin/testimonial')->withSuccess("Testimonial Delete successfully");

    }
}

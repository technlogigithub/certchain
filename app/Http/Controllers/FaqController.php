<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Faq::get();
        return view("admin.faq.list",compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.faq.add");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Faq::create([
            'question'=>$request->question,
            'answer'=>$request->answer,
            ]);

     return redirect('admin/faq')->withSuccess("Faq added successfully");
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $result = Faq::where('id',$id)->first();
        return view('admin.faq.edit', compact('result'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        Faq::where('id', $request->id )->update([
            'question'=>$request->question,
            'answer'=>$request->answer,
        ]);

     return redirect('admin/faq')->withSuccess("Faq Update successfully");
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Faq::where('id',$id)->delete();
        return redirect('admin/faq')->withSuccess("Faq Delete successfully");

    }
}

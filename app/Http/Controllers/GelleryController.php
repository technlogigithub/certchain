<?php

namespace App\Http\Controllers;

use App\Models\Gellery;
use Illuminate\Http\Request;
use File;


class GelleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Gellery::get();
        return view("admin.gellery.list",compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.gellery.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
            if($request->hasfile('image')){
                $destinationPath = public_path('media/gellery');
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
                Gellery::create([
                    'title'=>$request->title,
                    'image'=>$fileName,
                ]);
            return redirect('admin/gellery')->withSuccess("gellery added successfully");
       
    }
   

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $result = Gellery::where('id',$id)->first();
        return view('admin.gellery.edit', compact('result'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
    
        if($request->hasfile('image')){
            $destinationPath = public_path('media/gellery');
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
            Gellery::where('id', $request->id )->update([
                'title'=>$request->title,
            ]);
            if(!empty($fileName)){
                Gellery::where('id', $request->id )->update([
                    'image'=>$fileName,
                ]);
            }
           
        return redirect('admin/gellery')->withSuccess("gellery update successfully");
   
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Gellery::where('id',$id)->delete();
        return redirect('admin/gellery')->withSuccess("gellery delete successfully");
    }
}

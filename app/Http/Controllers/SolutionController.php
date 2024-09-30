<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use App\Models\Page;
use Illuminate\Http\Request;
use File;
class SolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Solution::get();
        return view("admin.solution.list", compact("result"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page = [
            ["name"=>"Banner", "media"=>true],
            ["name"=>"Section", "media"=>true],
            ["name"=>"Section2", "media"=>false],
            ["name"=>"Section3", "media"=>false],
            ["name"=>"Section4", "media"=>false],
            ["name"=>"Section5", "media"=>true],
            ["name"=>"Section6", "media"=>true],
            ["name"=>"Section7", "media"=>true],
            ["name"=>"Section8", "media"=>true],
        ];
        return view("admin.solution.add", compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->data;
        $exits_solution = Solution::where("name", $request->name)->first();
        if(empty($exits_solution)){
            Solution::create([
                "name"=>$request->name,
                "slug"=>str_replace(' ', '-', $request->name),
            ]);
        }
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
            
            $exits = Page::where([ "type"=>$request->name, 'page'=>$value['page']])->first();
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
                        'type'=>$request->name,
                        'page'=>$value['page'],
                        'title'=>$value['title'],
                        'media'=>$mediaName,
                        'description'=>$value['description'],
                    ]);
                }
               
            }
        }

        return redirect("admin/solution")->withSuccess("Data saved successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $result =  Solution::where('slug', $slug)->first();
        return view("frontend.clients", compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $page = [
            ["name"=>"Banner", "media"=>true],
            ["name"=>"Section", "media"=>true],
            ["name"=>"Section2", "media"=>false],
            ["name"=>"Section3", "media"=>false],
            ["name"=>"Section4", "media"=>false],
            ["name"=>"Section5", "media"=>true],
            ["name"=>"Section6", "media"=>true],
            ["name"=>"Section7", "media"=>true],
            ["name"=>"Section8", "media"=>true],
        ];

       $result =  Solution::where('id', $id)->first();
       return view("admin.solution.edit", compact("result", 'page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Solution $solution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Solution::where('id', $id)->delete();
        return back()->withSuccess("Data Deleted Successfully");
    }
}

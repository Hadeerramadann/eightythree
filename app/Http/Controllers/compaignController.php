<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\campaign;
use App\Models\images;
;


class compaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compaign=campaign::all();
        return view('show', compact('compaign'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $campaigns=campaign::create($request->except('image'));
       
        if($request->hasFile('image')) {
            foreach($request->file('image') as $image) {
                $destinationPath = 'content_images/';
                $filename = $image->getClientOriginalName();
                $image->move($destinationPath, $filename);
        
                $image = new images([
                    'name' => $filename,
                ]);
        
                $campaigns->image()->save($image);
            }
        }



         return redirect()->route('compaign.index')->withFlashSuccess('compaign created successfly');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compaigns=campaign::findOrFail($id);
        return view('edit', compact('compaigns'));
        
        
    }
    
    public function delete_image($id)
    {
        $image = images::find($id)->delete();
        
        // $compaigns=campaign::findOrFail($compaign_id);
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
        
        
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campaigns=campaign::where('id', $id)->update($request->except('image'));
        $campaign=campaign::findOrFail($id);
        if($request->hasFile('image')) {
            foreach($request->file('image') as $image) {
                $destinationPath = 'content_images/';
                $filename = $image->getClientOriginalName();
                $image->move($destinationPath, $filename);
        
                $image = new images([
                    'name' => $filename,
                ]);
        
                $campaign->image()->save($image);
            }
        }



         return redirect()->back()->withFlashSuccess('compaign updated successfly');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

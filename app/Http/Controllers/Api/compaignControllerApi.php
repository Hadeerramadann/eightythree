<?php

namespace App\Http\Controllers\Api;
use App\Models\campaign;
use App\Models\images;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class compaignControllerApi extends Controller
{
    public function index()
    {
        $compaign=campaign::get();
       

        return response()->json($compaign);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $compaign = campaign::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "compaign Created successfully!",
            'compaign' => $compaign
        ], 200);
    }

    public function update(Request $request)
    {
        $compaign=campaign::where('id', $request->id)->update($request->all());
       
        return response()->json([
            'status' => true,
            'message' => "compaign updated successfully!",
            'compaign' => $compaign
        ], 200);
    }
    public function destroy(Request $request)
    {
        $compaign=campaign::where('id', $request->id)->delete();
       
        return response()->json([
            'status' => true,
            'message' => "compaign deleted successfully!",
            
        ], 200);
    }
}

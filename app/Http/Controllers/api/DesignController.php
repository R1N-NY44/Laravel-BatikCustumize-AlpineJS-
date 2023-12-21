<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Design;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function getAllDesign()
    {
       try{
        $design = Design::latest()->get();
        return response()->json([
            'message' => 'Successfully get all design!',
            'data' => $design,
        ], 200);
       } catch (\Exception $e) {
        return response()->json([
            'message' => 'Failed get all design!',
            'error' => $e->getMessage(),
            'data' => [],
            'status' => 'error'
        ], 409);
       }
    }

    public function getDesignById($id)
    {
        try{
            $design = Design::find($id);
            return response()->json([
                'message' => 'Successfully get design by id!',
                'data' => $design,
            ], 200);
           } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed get design by id!',
                'error' => $e->getMessage(),
                'data' => [],
                'status' => 'error'
            ], 409);
           }
    }

    public function createDesign(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required|string',              
            ]);         
            $design = new Design([
                'name' => $request->title,
            ]);
            $design->save();
            return response()->json([
                'message' => 'Successfully created design!',
                'data' => $design,
            ], 201);
           } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed created design!',
                'error' => $e->getMessage(),
                'data' => [],
                'status' => 'error'
            ], 409);
           }
    }

    public function updateDesign(Request $request, $id)
    {
        try{
            $request->validate([
                'name' => 'required|string',              
            ]);         
            $design = Design::find($id);
            $design->name = $request->name;
            $design->save();
            return response()->json([
                'message' => 'Successfully updated design!',
                'data' => $design,
            ], 201);
           } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed updated design!',
                'error' => $e->getMessage(),
                'data' => [],
                'status' => 'error'
            ], 409);
           }
    }

    public function deleteDesign($id)
    {
        try{
            $design = Design::find($id);
            $design->delete();
            return response()->json([
                'message' => 'Successfully deleted design!',
                'data' => $design,
            ], 201);
           } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed deleted design!',
                'error' => $e->getMessage(),
                'data' => [],
                'status' => 'error'
            ], 409);
           }
    }

    public function getDesignByName($name)
    {
        try{
            $design = Design::where('name', 'like', '%'.$name.'%')->get();
            return response()->json([
                'message' => 'Successfully get design by name!',
                'data' => $design,
            ], 200);
           } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed get design by name!',
                'error' => $e->getMessage(),
                'data' => [],
                'status' => 'error'
            ], 409);
           }
    }
}

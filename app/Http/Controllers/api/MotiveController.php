<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Motive;
use Illuminate\Http\Request;

class MotiveController extends Controller
{
    public function getAllMotive()
    {
       try{
        $motive = Motive::latest()->get();
        return response()->json([
            'message' => 'Successfully get all motive!',
            'data' => $motive,
        ], 200);
       } catch (\Exception $e) {
        return response()->json([
            'message' => 'Failed get all motive!',
            'error' => $e->getMessage(),
            'data' => [],
            'status' => 'error'
        ], 409);
       }
    }

    public function getMotiveById($id)
    {
        try{
            $motive = Motive::find($id);
            return response()->json([
                'message' => 'Successfully get motive by id!',
                'data' => $motive,
            ], 200);
           } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed get motive by id!',
                'error' => $e->getMessage(),
                'data' => [],
                'status' => 'error'
            ], 409);
           }
    }

    public function createMotive(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required|string',              
            ]);         
            $motive = new Motive([
                'name' => $request->title,
            ]);
            $motive->save();
            return response()->json([
                'message' => 'Successfully created motive!',
                'data' => $motive,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed created motive!',
                'error' => $e->getMessage(),
                'data' => [],
                'status' => 'error'
            ], 409);
        }
    }

    public function updateMotive(Request $request, $id)
    {
        try{
            $request->validate([
                'name' => 'required|string',              
            ]);         
            $motive = Motive::find($id);
            $motive->name = $request->name;
            $motive->save();
            return response()->json([
                'message' => 'Successfully updated motive!',
                'data' => $motive,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed updated motive!',
                'error' => $e->getMessage(),
                'data' => [],
                'status' => 'error'
            ], 409);
        }
    }

    public function deleteMotive($id)
    {
        try{
            $motive = Motive::find($id);
            $motive->delete();
            return response()->json([
                'message' => 'Successfully deleted motive!',
                'data' => $motive,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed deleted motive!',
                'error' => $e->getMessage(),
                'data' => [],
                'status' => 'error'
            ], 409);
        }
    }

    public function getMotiveByName($name)
    {
        try{
            $motive = Motive::where('name', 'like', '%'.$name.'%')->get();
            return response()->json([
                'message' => 'Successfully get motive by name!',
                'data' => $motive,
            ], 200);
           } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed get motive by name!',
                'error' => $e->getMessage(),
                'data' => [],
                'status' => 'error'
            ], 409);
           }
    }

    
}

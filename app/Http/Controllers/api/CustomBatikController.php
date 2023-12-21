<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\CustomBatik;
use App\Models\Design;
use App\Models\Material;
use App\Models\Motive;
use Illuminate\Http\Request;

class CustomBatikController extends Controller
{
    public function getAllCustomBatik()
    {
       try{
        $customBatik = CustomBatik::latest()->get();
        return response()->json([
            'message' => 'Successfully get all custom batik!',
            'data' => $customBatik,
        ], 200);
       } catch (\Exception $e) {
        return response()->json([
            'message' => 'Failed get all custom batik!',
            'error' => $e->getMessage(),
            'data' => [],
            'status' => 'error'
        ], 409);
       }
    }

    public function getCustomBatikById($id)
    {
        try{
            $customBatik = CustomBatik::find($id);
            return response()->json([
                'message' => 'Successfully get custom batik by id!',
                'data' => $customBatik,
            ], 200);
           } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed get custom batik by id!',
                'error' => $e->getMessage(),
                'data' => [],
                'status' => 'error'
            ], 409);
           }
    }


// Teks penuh
// id
// name
// user_id
// design
// motive
// material

    public function createCustomBatik(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required|string',              
                'user_id' => 'required',
                'design' => 'required|string',
                'motive' => 'required|string',
                'material' => 'nullable|string',              
            ]);        
            
            if($request->material != null){
                $findMaterial = Material::where('name', $request->material)->value('id');
            }

            $customBatik = new CustomBatik([
                'name' => $request->title,
                'user_id' => $request->user_id,
                'design' => Design::where('name', $request->design)->value('id'),
                'motive' => Motive::where('name', $request->motive)->value('id'),
                'material' => $findMaterial ?? null,
            ]);
            $customBatik->save();
            return response()->json([
                'message' => 'Successfully created custom batik!',
                'data' => $customBatik,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed created custom batik!',
                'error' => $e->getMessage(),
                'data' => [],
                'status' => 'error'
            ], 409);
        }
    }

    public function updateCustomBatik(Request $request, $id)
    {
        try{
            $request->validate([
                'name' => 'required|string',              
                'user_id' => 'required',
                'design' => 'required|string',
                'motive' => 'required|string',
                'material' => 'nullable|string',              
            ]);        
            
            if($request->material != null){
                $findMaterial = Material::where('name', $request->material)->value('id');
            }

            $customBatik = CustomBatik::find($id);
            $customBatik->name = $request->name;
            $customBatik->user_id = $request->user_id;
            $customBatik->design = Design::where('name', $request->design)->value('id');
            $customBatik->motive = Motive::where('name', $request->motive)->value('id');
            $customBatik->material = $findMaterial ?? null;
            $customBatik->save();
            return response()->json([
                'message' => 'Successfully updated custom batik!',
                'data' => $customBatik,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed updated custom batik!',
                'error' => $e->getMessage(),
                'data' => [],
                'status' => 'error'
            ], 409);
        }
    }   

    public function deleteCustomBatik($id)
    {
        try{
            $customBatik = CustomBatik::find($id);
            $customBatik->delete();
            return response()->json([
                'message' => 'Successfully deleted custom batik!',
                'data' => $customBatik,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed deleted custom batik!',
                'error' => $e->getMessage(),
                'data' => [],
                'status' => 'error'
            ], 409);
        }
    }
}

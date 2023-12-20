<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomBatikRequest;
use App\Http\Requests\UpdateCustomBatikRequest;
use App\Models\CustomBatik;
use App\Models\Design;
use App\Models\Motive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomBatikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomBatikRequest $request)
    {
        try {
            // Start a database transaction
            DB::beginTransaction();
    
            // Validate the request
            $validatedData = $request->validated();
    
            // Find the design and motive IDs based on their names
            $designId = Design::where('name', $validatedData['design'])->value('id');
            $motiveId = Motive::where('name', $validatedData['motive'])->value('id');
    
            // Create a new CustomBatik instance
            $customBatik = new CustomBatik([
                'name' => $validatedData['name'],
                'user_id' => auth()->id(),
                'design' => $designId,
                'motive' => $motiveId,
            ]);
    
            // Save the custom batik
            $customBatik->save();
    
            // Commit the transaction
            DB::commit();
    
            // Redirect back with a success message
            return redirect()->back()->with('success', 'Custom batik stored successfully');
        } catch (\Exception $e) {
            // An error occurred, rollback the transaction
            dd($e);
            DB::rollBack();
    
            // Redirect back with an error message
            return redirect()->back()->with('error2', 'Error storing custom batik: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomBatik $customBatik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomBatik $customBatik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomBatikRequest $request, CustomBatik $batik)
    {        
        try {
            // Start a database transaction
            DB::beginTransaction();
    
            // Validate the request
            $validatedData = $request->validated();
    
            // Find the design and motive IDs based on their names
            $designId = Design::where('name', $validatedData['design'])->value('id');
            $motiveId = Motive::where('name', $validatedData['motive'])->value('id');
    
            // Update the custom batik
            $batik->update([
                'name' => $validatedData['name'],
                'design' => $designId,
                'motive' => $motiveId,
            ]);
    
            // Commit the transaction
            DB::commit();
    
            // Redirect back with a success message
            return redirect()->back()->with('success', 'Custom batik updated successfully');
        } catch (\Exception $e) {
            // An error occurred, rollback the transaction
            DB::rollBack();
    
            // Redirect back with an error message
            return redirect()->back()->with('error', 'Error updating custom batik: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomBatik $batik)
    {                        
        try {
            // Start a database transaction
            DB::beginTransaction();
    
            // Delete the custom batik
            $batik->delete();
    
            // Commit the transaction
            DB::commit();
    
            // Redirect back with a success message
            return redirect()->back()->with('success', 'Custom batik deleted successfully');
        } catch (\Exception $e) {
            // An error occurred, rollback the transaction
            DB::rollBack();
    
            // Redirect back with an error message
            return redirect()->back()->with('error', 'Error deleting custom batik: ' . $e->getMessage());
        }
    }
}

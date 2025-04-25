<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Wholesalers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WholesalerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wholesalers = Wholesalers::all();
        
        return response()->json(['wholesalers' => $wholesalers], 200);
    }



  
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:64',
            'gender' => 'required|in:male,female',
            'age' => 'required|integer|min:1,max:99',
            'customer_type' => 'required|in:wholesalers',
            'gst_no' => 'nullable|string',
            'address' => 'required|string|max:128',
            'state' => 'required|string|max:16',
            'postcode' => 'required|integer|digits:6',
            'business_name' => 'required|string|max:32',
            'adharcard_no' => 'required|integer|digits:12',
            'city' => 'required|string|max:32',
            'profile_img' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
      
        try {
            $wholesalers = Wholesalers::create($request->all());
            return response()->json(['wholesalers' => $wholesalers, 'message' => 'Wholesalers created successfully'], 201);
        } catch (\Exception $e) {
            // Log error message
             echo $e;
            // \Log::error("Error creating wholesaler: " . $e->getMessage());
            return response()->json(['error' => 'Something went wrong. Please try again later.'], 500);
        }
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Wholesalers $wholesalers)
    {
        {
            return response()->json(['wholesalers' => $wholesalers], 200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wholesalers $wholesalers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wholesalers $wholesalers)
    {

        $validator = Validator::make($request->all(), [
            'id'=>'required|number',
            'fullname' => 'sometimes|required|string|max:64',
            'gender' => 'sometimes|required|in:male,female',
            'age' => 'sometimes|required|integer|min:1,max:99',
            'customer_type' => 'sometimes|required|in:wholesalers',
            'gst_no' => 'nullable|string',
            'address' => 'sometimes|required|string|max:128',
            'state' => 'sometimes|required|string|max:16',
            'postcode' => 'sometimes|required|integer|digits:6',
            'business_name' => 'sometimes|required|string|max:32',
            'adharcard_no' => 'sometimes|required|integer|digits:12',
            'city' => 'sometimes|required|string|max:32',
            'profile_img' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        
        $wholesalers->update($request->all());
           
        return response()->json(['wholesaler' => $wholesalers, 'message' => 'Wholesaler updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wholesalers $wholesalers)
    {
    
    }
}

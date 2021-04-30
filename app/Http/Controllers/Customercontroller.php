<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;

class Customercontroller extends Controller
{
    //
    public function createData(Request $request)
    {
    	Customer::create([

    		'name' => $request->name,
    		'email' => $request->email,
    		'gender' => $request->gender,
    		'is_married' => $request->is_married,
    		'address' => $request->address

    	]);

    	return response()->json([

    			'status' => 'ok',
    			'code' => 200,
    			'response' => 'success',
    			'message' => 'example success create data customer',
    			'result' => ''

    	],200);
    }

    public function getData(){

    	$customers = customer::all();

    	return response()->json($customers);

    	
    }

    public function updateData(Request $request, $id)
    {

    	customer::findOrfail($id)->update([

    		'name' => $request->name,
    		'email' => $request->email,
    		'gender' => $request->gender,
    		'is_married' => $request->is_married,
    		'address' => $request->address

    	]);

    	return response()->json([

    		'status' => 'ok',
    			'code' => 200,
    			'response' => 'success',
    			'message' => 'example success Update data',
    			'result' => ''



    	],200);

    }

    public function deleteData($id)
    {

    	customer::destroy($id);
    	return response()->json([

    		'status' => 'ok',
    			'code' => 200,
    			'response' => 'success',
    			'message' => 'example success Delete data',
    			'result' => ''



    	],200);

    }



}

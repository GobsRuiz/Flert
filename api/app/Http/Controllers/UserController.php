<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public $rules = [
        "name"  => "required",
        "age"  => "required",
    ];

    public $messages = [
        "name.required" => "Campo nome é obrigatório!",
        "age.required" => "Campo idade é obrigatório!",
    ];


    public function index(){
        $data = User::all();

        return response()->json([
            "text_response" => "success",
            "data" => $data,
        ]);
    }

    public function store(Request $request){
        $data = $request->all();
        
        // Validate
        $validator = Validator::make($request->all(), $this->rules, $this->messages);
        
        
        // Check for error
        if ($validator->fails()) {
            return $validator->errors();
        }

        $user = User::create($data);
        
        return response()->json([
            "text_response" => "success",
            "data" => $user
        ]);
    }
}

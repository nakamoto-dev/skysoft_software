<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class backEnd extends Controller
{
    public function contact(Request $req){
        //return response($req);
        //Log::alert($req->name);
        DB::table('contactus')->insert([
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone_number,
            'message' => $req->message
        ]);
        return response('request sent successfully', 200);
    }

    public function messageus(Request $req){
      Log::alert($req);
    }
}

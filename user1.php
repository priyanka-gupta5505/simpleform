<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users1 extends Controller
{
    //
    public function submit(Request $request)
    {
        $request->validate([
            "user"=>"required",
            "phone"=>"min:10",
            "password"=>"min:5 | 
             max:15"

        ]);
        return $request->input();

}
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    public function index(Request $req)
    {
        print_r($req->query());
    // echo $req->query();
     
}
}
<?php

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadawController extends Controller
{
    //
    function index(Request $Req){
         return $Req->file('file')->store('docs');
         
    }
}

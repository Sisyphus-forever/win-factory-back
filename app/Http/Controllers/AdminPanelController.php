<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public static function index(){
        return view('adminPanel');
    }
}

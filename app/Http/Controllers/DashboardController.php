<?php

namespace App\Http\Controllers;

use App\Models\Introduction;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $user= User::find(1)->where('id',1)->first();
        return view('dashboard', compact('user') );
    }
}
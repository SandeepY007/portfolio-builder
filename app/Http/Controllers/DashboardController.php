<?php

namespace App\Http\Controllers;

use App\Models\Introduction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $user= User::find(Auth::id())->where('id',Auth::id())->first();
        return view('dashboard', compact('user') );
    }
}
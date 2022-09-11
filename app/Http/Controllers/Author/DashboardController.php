<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
	public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	return view('author.dashboard');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        Log::debug("got to index");
        // Check if the user is authenticated
        if (Auth::check()) {
            Log::debug("user is logged in");
            // Check if the user is an administrator
            if (Auth::user()->is_admin) {
                // Redirect the administrator to the admin dashboard page
                Log::debug('is admin');
                return view('dashboard');
            } else {
                // For regular users, show the home page
                Log::debug('going home');
                return view('home');
            }
        } else {
            // The user is not logged in, show the welcome page
            Log::debug('go to welcome');
            return view('welcome');
        }
    }

}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function loginForm()
    {

return view('backend.admin-login');

    }

public function logOut() 
{
    Auth::logout();
    return redirect('/admin/login');

}

}

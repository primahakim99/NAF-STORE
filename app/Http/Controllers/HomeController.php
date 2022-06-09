<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\Store;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function checkAdmin()
    {
        $admin = User::all();
        $isAdmin = False;
        for ($i = 0; $i < count($admin); $i++) {
            if (auth()->user()->role_as == '1') {
                $isAdmin = True;
                break;
            }

        }
        return $isAdmin;
    }

    public function checkOwner()
    {
        $owner = User::all();
        $isOwner = False;
        for ($i = 0; $i < count($owner); $i++) {
            if (auth()->user()->role_as == '2') {
                $isOwner = True;
                break;
            }

        }
        return $isOwner;
    }
    public function index()
    {
        if ($this->checkAdmin()) {
            return redirect()->route('admin.home');
        } else if ($this->checkOwner()) {
            return redirect()->route('owner.home');
        } else {
            return redirect()->route('customer.home');
        }
    }
    public function adminHome()
    {
        //return view('admin.home');
        return redirect()->route('welcomeAdmin');
    }
    public function ownerHome()
    {
        return redirect()->route('welcomeOwner');
    }
    public function customerHome()
    {
        //return view('customer.home');
        // return view('customer.welcome', [
        //     "title" => "NAF-STORE"
        // ]);
        return redirect()->route('welcome');
    }
    
}

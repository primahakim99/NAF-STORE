<?php

namespace App\Http\Controllers;

use App\Models\Admin;
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
        $admin = Admin::all();
        $isAdmin = False;
        for ($i = 0; $i < count($admin); $i++) {
            if (auth()->user()->id == $admin[$i]->ID_User) {
                $isAdmin = True;
                break;
            }
        }
        return $isAdmin;
    }
    public function checkStore()
    {
        $store = Store::all();
        $isStore = False;
        for ($i = 0; $i < count($store); $i++) {
            if (auth()->user()->id == $store[$i]->ID_User) {
                $isStore = True;
                break;
            }
        }
        return $isStore;
    }
    public function index()
    {
        if ($this->checkAdmin()) {
            return redirect()->route('admin.home');
        } else if ($this->checkStore()) {
            return redirect()->route('store.home');
        } else {
            return redirect()->route('customer.home');
        }
    }
    public function adminHome()
    {
        return view('admin.home');
    }
    public function storeHome()
    {
        return view('store.home');
    }
    public function customerHome()
    {
        return view('customer.home');
    }
}

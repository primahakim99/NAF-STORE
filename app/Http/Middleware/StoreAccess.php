<?php

namespace App\Http\Middleware;

use App\Models\Store;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $store = Store::all();
        $isStore = False;
        if (Auth::check()) {
            for ($i = 0; $i < count($store); $i++) {
                if (auth()->user()->id == $store[$i]->ID_User) {
                    $isStore = True;
                    break;
                }
            }
            if ($isStore) {
                return $next($request);
            } else {
                return redirect('home')->with('error', "You don't have branch access.");
            }
        } else {
            return redirect()->route('login');
        }
    }
}

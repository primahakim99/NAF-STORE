<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use App\Models\Branch;
use App\Models\DeliveryVehicle;
use App\Models\Store;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAccess
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
        $user = User::all();
        $admins = User::pluck('id')->all();
        $stores = Store::pluck('user_id')->all();
        $adminsStores = array_merge($admins, $stores);
        $isUser = False;
        if (Auth::check()) {
            $user = User::where('id', auth()->user()->id)
                ->whereNotIn('id', $adminsStores)->first();
            if ($user) {
                $isUser = True;
            }
            if ($isUser) {
                return $next($request);
            } else {
                return redirect('home')->with('error', "You don't have user access.");
            }
        } else {
            return redirect()->route('login');
        }
    }
}

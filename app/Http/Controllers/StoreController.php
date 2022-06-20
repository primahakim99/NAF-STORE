<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $store = Store::where('user_id', auth()->user()->id)->get();
        return view('owner.store.index',[
            "title" => "Store Owner",
            'store' => $store,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        $store = Store::where('user_id', auth()->user()->id)->get();
        return view('owner.store.edit', [
            'title' => 'Store Edit',
            'stores' => $store,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store, $id)
    {
        $store = Store::find($id);
        $user = User::find(auth()->user()->id);

        $store->storeName = $request->storeName;
        $store->address = $request->address;
        $store->description = $request->description;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;

        if ($request->hasFile('img')) {
            if ($store->img && file_exists(storage_path('app/public/'. $store->img))) {
                Storage::delete(['public/', $store->img]);
            }
            $image_name = $request->file('img')->store('store', 'public');
            $store->img = $image_name;
        }
        $store->save();
        $user->save();
        return redirect('/storeOwner')
                ->with('success', 'Store Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        //
    }
}

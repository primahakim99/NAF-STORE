<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owners = DB::table('users')->where('role_as', 'owner')->get();
        return view('admin.ownerData', compact('owners'),  [
            "title" => "NAF-STORE-Admin",

        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new User;
        return view(
            'admin.ownerCreate', 
            compact('model')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new User;
        $model->name = $request->name;
        $model->phone = $request->phone;
        $model->email = $request->email;
        $model->password = Hash::make($request['phone']);
        $model->address = $request->address;
        $model->postal_code = $request->postal_code;
        $model->role_as = $request->role_as;
        $model->save();

        return redirect('ownerData');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = User::find($id);
        return view(
            'admin.ownerDetail', 
            compact('model')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = User::find($id);
        return view(
            'admin.ownerEdit', 
            compact('model')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                //validate the data
                $request->validate([
                    'name' => 'required',
                    'phone' => 'required',
                    'email' => 'required',
                    // 'password' => 'required',
                    'address' => 'required',
                    'postal_code' => 'required', 
                    ]);
                    //Eloquent function to update the data
                $model = User::find($id);
                $model->name = $request->get('name');
                $model->phone = $request->get('phone');
                $model->email = $request->get('email');
                $model->password = $request->get('phone');
                $model->address = $request->get('address');
                $model->postal_code = $request->get('postal_code');
                $model->save();
        
                return redirect('ownerData');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('ownerData.index');
    }
}

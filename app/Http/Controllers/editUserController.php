<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;


class editUserController extends Controller
{
    public function index()
    {

        return view('editUser', [
            'title' => "Edit User Page",
            'submenu' => "No",
            'data' => User::all()
        ]);
    }


    public function delete(Request $request)
    {
        User::destroy($request->id);
        return redirect('/editUser');
    }

    public function edittest(Request $request)
    {
        $flights = User::find($request->id);
        $flights->name = 'Paris to London';
        $flights->save();
        return redirect('/editUser');
    }

    public function mengubah(Request $request)
    {
        return view('editUser.mengubah', [
            'title' => "Edit User Page",
            'submenu' => "No",
            'id' => $request->id,
            'data' => User::find($request->id)
        ]);
    }

    public function ubahdata(Request $request)
    {
        $flights = User::find($request->id);
        $flights->username = $request->username;
        $flights->name = $request->name;
        $flights->email = $request->email;
        $flights->password = bcrypt($request->password);
        $flights->save();
        return redirect('/editUser');
    }
}

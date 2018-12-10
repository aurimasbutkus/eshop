<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;


class UserController extends Controller
{


    public function getallUsers()
    {
        $users = \App\User::all();
        return view('allUsers')->with('users',$users);
    }
    public function editUser()
    {
        return view('home');
    }
    public function userWithOderList()
    {
        $usersWithOrders = \App\User::all()->each->orders;
        return view('exportbuyerList')->with('usersWithOrders',$usersWithOrders);
    }
    public function seePurchaseHistory(User $user)
    {
        $products = $user->orders->each->products;

        return view('seePurchaseHistory')->with('usersWithOrders',$products);
    }

    public function deleteUser($id)
    {
        DB::table('users')->delete(['id' => $id]);
        return redirect('allUsers');
    }

    public function editRedirect($id)
    {
        $user = DB::select("SELECT * FROM users WHERE id = '$id'");

        return redirect('editUser')->with('user', $user);
    }


}

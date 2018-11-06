<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


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
        $usersWithOrders = \App\User::all();
        return view('exportbuyerList')->with('usersWithOrders',$usersWithOrders);
    }
    public function seePurchaseHistory()
    {
        $usersWithOrders = \App\User::all();
        return view('seePurchaseHistory')->with('usersWithOrders',$usersWithOrders);
    }


}

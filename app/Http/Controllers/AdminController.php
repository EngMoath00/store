<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $contacts = contact::all();
        return view('admin.index', compact('contacts'));
    }


    public function showUsers()
    {
        $users = User::all();
        $contacts = contact::all();
        return view('admin.allUsers', compact('users', 'contacts'));
    }
}

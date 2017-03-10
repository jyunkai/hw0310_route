<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){
      $users = [
        '0' => [
          'first_name' => 'kai',
          'last_name' => 'jyun',
          'location' => 'TW'
        ],
        '1' => [
          'first_name' => 'shen',
          'last_name' => 'pei',
          'location' => 'TW'
        ]
      ];
      return view('admin.users.index',compact('users'));
    }
    public function create(){
      return view('admin.users.create');
    }
    public function store(Request $request){
      User::create($request->all());
      return 'success';
      return $request->all();
    }
}

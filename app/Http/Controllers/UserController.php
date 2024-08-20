<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    public function index()
    {

// $data = [
//     'username' =>'dika',
//     'nama' =>'dika',
//     'password' =>Hash::make('12345'),
//     'user_id' =>1,
//     'level_id' =>1
// ];
// UserModel::insert($data);

// $data=[
//     'nama'=>'antok'
// ];
// UserModel::where('username','dika')->update($data);
// UserModel::where('username','dika')->delete();

//         $user = UserModel::all(); 
//         return view('view', ['data' => $user]);


// $user = UserModel::with('level')->get();
// return view ('user',['data'=>$user]);

$breadcrump = (object)[
    'title' => 'Daftar User' ,
    'list' => ['Home','User']
];
    $page=(object)[
        'title' => 'Daftar User yang terdaftar dalam sistem'
    ];
    $activeMenu = 'user';
    return view('user.index',['breadcrump' =>$breadcrump , 'page' => $page, 'activeMenu' =>$activeMenu]);
    }

    
}
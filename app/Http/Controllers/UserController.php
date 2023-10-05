<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('users.index',[
            'users' => DB::table(table: 'users')->orderBy(column: 'name')->paginate(perPage: '5')
        ]);
    }

    public function edit($id){
        return view('users.edit',[
            'user' => User::findOrFail($id)
        ]);
    }

    public function update(Request $id){
        return 'update';
    }
}

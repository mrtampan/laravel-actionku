<?php

namespace App\Http\Controllers;

use App\Actions\GetOneUser;
use App\Actions\GetUser;
use App\Actions\RegisterNewUser;
use App\Actions\UpdateUser;
use App\Http\Requests\GetOneUserRequest;
use App\Http\Requests\GetUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(StoreUserRequest $request, RegisterNewUser $registerNewUser){
        $user = $registerNewUser->handle($request);

        if($user){
            return redirect()->route('index')->with('berhasil tambah user');
        }else{
            return redirect()->route('index')->withErrors("gagal tambah user");
        }
    }

    public function index(GetUserRequest $request, GetUser $getUser){
        $data['users'] = $getUser->handle($request);
        return view('welcome')->with($data);
    }

    public function create(){
        return view('createuser');
    }
    
    public function edit(GetOneUserRequest $request, GetOneUser $getOneUser){
        $data['user'] = $getOneUser->handle($request);

        return view('edituser')->with($data);
        
    }

    public function update(UpdateUserRequest $request, UpdateUser $updateUser){
        $user = $updateUser->handle($request);

        if($user){
            return redirect()->route('index')->with('berhasil update user');
        }else{
            return redirect()->route('index')->withErrors("gagal update user");
        }
    }


}

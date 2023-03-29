<?php
namespace App\Actions;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UpdateUser{
    public function handle(Request $request){

        $getuser = User::where(['id' => $request->id])->first();
        $user = User::where(['id' => $request->id]);

        $newPassword = '';
        if(password_verify($request->password, $getuser['password'])){
            $newPassword = $getuser['password'];
        }else{
            $newPassword = Hash::make($request->password);
        }

        return $user->update(['password' => $newPassword, 'name' => $request->name, 'email' => $request->email]);
    }
}
<?php
namespace App\Actions;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GetOneUser{
    public function handle(Request $request){
        return User::where(['id' => $request->userid])->first();
    }
}
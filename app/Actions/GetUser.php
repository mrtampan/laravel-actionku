<?php
namespace App\Actions;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GetUser{
    public function handle(Request $request){
        return User::all();
    }
}
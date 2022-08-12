<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'city' => 'required',
            'town' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validated){
            $user = User::create([
                'name' => $request->name,
                'surname' => $request->lastname,
                'email' => $request->email,
                'is_admin' => 0,
                'password' => bcrypt($request->password)
            ]);

            Customer::create([
                'user_id' => $user->id,
                'city' => $request->city,
                'town' => $request->town,
                'address' => $request->address,
                'phone' => $request->phone
            ]);
            return $user;
        }else{
            dd('başarılı');
        }
    }
}

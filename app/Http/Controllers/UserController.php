<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Signup API
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());

        return response()->json(['Account created successfully' => $user], 201);
    }

    /**
     * Login api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $users = User::all();

        $email = $request->input('email');
        $password = $request->input('password');
        $user = $users->where('email', 'like', $email)->where('password', 'like', $password);

        $login = json_decode($user, true);

        if ($login) {
            return response()->json('Logged successfully', 201);
        } else {
            return response()->json('Failer to login, email or password are invalid', 404);
        }
    }

    /**
     * Forgot password api
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function forgot(Request $request)
    {
        $users = User::all();

        $email = $request->input('email');

        $user = $users->where('email', 'like', $email)->first();

        $password = json_decode($user, true);

        if ($password) {
            return response()->json(['The password is: ' => $user->password], 201);
        } else {
            return response()->json('This user doesnt exist', 404);
        }
    }

    /**
     * change password of user
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changePassword(Request $request)
    {
        $user = User::find($request->input('email'));

        $user->password = $request->input('password');
        $login = json_decode($user, true);


        if (!$login) {
            return response()->json('This email doesnt exist', 404);
        } else {
            $user->update();
            return response()->json($user, 201);
        }

    }

     /**
     * change password of user
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function userEdit(Request $request)
    {
        $user = User::find($request->input('email'));

        $user->name = $request->input('name');
        if($request->input('phone')){
            $user->phone = $request->input('phone');
        }
        $user->email = $request->input('emailToChange');

        $login = json_decode($user, true);

        if (!$login) {
            return response()->json('This email doesnt exist', 404);
        } else {
            $user->update();
            return response()->json($user, 201);
        }
    }
}

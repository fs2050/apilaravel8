<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make(
            $input,
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'password2' => 'required|same:password',

            ]
        );
        if ($validator->fails()) {

            return $this->errorResponse('Validação com erro!', $validator->errors());
        }

        $checkEmail = User::where(['email', $input['email']])->first();

        if ($checkEmail) {
            return $this->errorResponse('E-mail já existe!');
        }

        $input['password'] = bcrypt($input['password']);


        $user = User::create($input);

        $response =
            [
                'token' => $user->createToken('fsCoding')->plainTextToken,
                'name' => $user->name,
                'email' => $user->email
            ];
        return $this->successResponse($response, "Usuario Registrado com sucesso!");
    }

    public function login(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make(
            $input,
            [

                'email' => 'required|email',
                'password' => 'required'
              ,

            ]
        );
        if ($validator->fails()) {
            return $this->errorResponse('Validation Error', $validator->errors());
        }
        if (Auth::attempt(
            [
                'email' => $request->email,
                'password' => $request->password
            ]
        )) {
            $user = Auth::user();
            $response =
                [
                    'token' => $user->createToken('fsCoding')->plainTextToken,
                    'name' => $user->name,
                    'email' => $user->email
                ];
            return $this->successResponse($response, "Login do Usuario com sucesso!");
        } else {
            return $this->errorResponse('Seu e-mail ou senha não é válido!');
        }
    }
}

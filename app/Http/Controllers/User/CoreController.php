<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoreController extends Controller
{
    public function registration(Request $request)
    {
        $request->flash();


        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'otchestvo' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'password-confirm' => 'required',
        ], [], [
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'otchestvo' => 'Отчество',
            'email' => 'Почта',
            'phone' => 'Телефон',
            'password' => 'Пароль',
            'password-confirm' => 'Подтверждение пароля',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->otchestvo = $request->input('otchestvo');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();

        if (Auth::attempt(['password' => $request->password, 'email' => $user->email])) {
            return redirect()->back();
        }
    }

    public function login(Request $request)
    {
        $request->flash();
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [], [
            'email' => 'Почта',
            'password' => 'Пароль',
        ]);
        if (Auth::attempt(['password' => $request->password, 'email' => $request->email], $request->remember)) {
            return redirect()->back();
        } else {
            return redirect()->back()->withErrors(['error' => 'Не удалось войти в аккаунт, убедитесь в правильности вводимых данных']);
        }
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
}

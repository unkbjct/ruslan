<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

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

    public function adminProductCreate(Request $request)
    {
        $request->flash();
        $product = new Product();

        // dd($request);


        foreach ($request->input() as $name => $input) {
            if ($name == '_token') continue;
            if (!empty($input)) $product->$name = $input;
        }

        $path = $request->file("image")->store('/img', 'public');

        $product->image = "public/storage/" . $path;

        $product->save();
        return redirect()->back();
    }

    public function adminProductRemove(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }

    function cartAdd(Product $product, Request $request)
    {
        $cart = json_decode(Cookie::get("cart", '[]'));
        $index = array_search($product->id, array_column($cart, 'id'));
        ($index !== false) ? $cart[$index]->count++ : array_push($cart, [
            'id' => $product->id,
            'count' => 1,
        ]);
        session()->flash('success', 'Товар успешно добалвен в корзину');
        return redirect()->back()->withCookie(cookie()->forever('cart', json_encode($cart)));
    }

    function cartEdit(Product $product, Request $request)
    {
        $cart = json_decode(Cookie::get("cart", '[]'));
        $cart[array_search($product->id, array_column($cart, 'id'))]->count = $request->count;
        session()->flash('success', 'Товар в корзине изменен успешно');
        return redirect()->back()->withCookie(cookie()->forever('cart', json_encode($cart)));
    }

    function cartRemove(Product $product, Request $request)
    {
        // Cookie::queue(Cookie::forget('cart'));
        $cart = json_decode(Cookie::get("cart", '[]'));
        array_splice($cart, array_search($product->id, array_column($cart, 'id')), 1);
        session()->flash('success', 'Товар успешно удален из корзины');
        return redirect()->back()->withCookie(cookie()->forever('cart', json_encode($cart)));
    }
}

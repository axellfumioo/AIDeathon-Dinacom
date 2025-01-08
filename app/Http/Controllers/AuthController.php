<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;



class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function login(Request $request): View
    {
        if ($request == "POST") {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6'
            ]);

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->to('/home');
            }

            return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
        }
        return view('landing.login.index');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function register(Request $request): View
    {
        if ($request == "POST") {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
            ]);

            $data = $request->all();
            $user = $this->create($data);

            Auth::login($user);

            header("Location: google.com");
        }
        return view('landing.try-for-free.index');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if (Auth::check()) {
            return view('app.index');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout(): RedirectResponse
    {
        Auth::logout();

        return Redirect('login');
    }
}

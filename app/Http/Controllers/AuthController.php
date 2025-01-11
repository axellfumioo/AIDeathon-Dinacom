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
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class AuthController extends Controller
{
    /**
     * Handle login request
     *
     * @param Request $request
     * @return View|RedirectResponse
     */
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                Alert::success('Berhasil', 'Login berhasil!');
                return redirect()->to('/home');
            } else {
                Alert::error('Gagal', 'Email atau kata sandi salah!');
            }

            return redirect()->back();
        }
        return view('landing.login.index');
    }

    /**
     * Handle registration request
     *
     * @param Request $request
     * @return View|RedirectResponse
     */
    public function register(Request $request)
    {
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
            ]);

            if ($validator->fails()) {
                // Ambil semua pesan error dan gabungkan dengan bullet points
                $errorMessage = "<ul>";
                foreach ($validator->errors()->all() as $error) {
                    $errorMessage .= "<li>{$error}</li>";
                }
                $errorMessage .= "</ul>";

                // Kirimkan pesan ke swal2
                Alert::html('Gagal!', $errorMessage, 'error');
                return redirect()->back();
            }

            $data = $request->all();
            $user = $this->create($data);

            Auth::login($user);

            return redirect()->to('/home')->with('success', 'Great! You have Successfully logged in');
        }

        return view('landing.try-for-free.index');
    }

    /**
     * Show dashboard
     *
     * @return View|RedirectResponse
     */
    public function dashboard()
    {
        if (Auth::check()) {
            return view('app.index');
        }

        return redirect()->route('login')->withErrors('Opps! You do not have access');
    }

    /**
     * Create a new user instance
     *
     * @param array $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    /**
     * Handle logout request
     *
     * @return RedirectResponse
     */
    public function logout(): RedirectResponse
    {
        Auth::logout();

        return redirect()->route('login');
    }
}

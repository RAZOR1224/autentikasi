<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Middleware 'guest' ensures that authenticated users cannot access login route
        $this->middleware('guest')->except('logout');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request): RedirectResponse
    {
        // Validating user input
        $input = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempting authentication
        if (auth()->attempt($input)) {
            // Redirecting based on user type
            switch (auth()->user()->type) {
                case 'admin':
                    return redirect()->route('admin.home');
                    break;
                case 'manager':
                    return redirect()->route('manager.home');
                    break;
                case 'superadmin':
                    return redirect()->route('superadmin.home');
                    break;
                case 'dosen':
                    return redirect()->route('dosen.home');
                    break;
                case 'mahasiswa':
                    return redirect()->route('mahasiswa.home');
                    break;
                case 'tendik':
                    return redirect()->route('tendik.home');
                    break;
                case 'adminakademik':
                    return redirect()->route('adminakademik.home');
                    break;
                case 'adminkeuangan':
                    return redirect()->route('adminkeuangan.home');
                    break;
                case 'direktur':
                    return redirect()->route('direktur.home');
                    break;
                case 'wakildirektur1':
                    return redirect()->route('wakildirektur1.home');
                    break;
                case 'wakildirektur2':
                    return redirect()->route('wakildirektur2.home');
                    break;
                case 'wakildirektur3':
                    return redirect()->route('wakildirektur3.home');
                    break;
                case 'adminlppm':
                    return redirect()->route('adminlppm.home');
                    break;
                case 'adminsdm':
                    return redirect()->route('adminsdm.home');
                    break;
                default:
                    return redirect()->route('home');
            }
        } 
        else {
            // Redirecting back to login with error message
            return redirect()->route('login')->with('error', 'Email-Address And Password Are Wrong.');
        }
    }
}

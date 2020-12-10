<?php

namespace App\Http\Controllers\Auth;

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Carbon\Carbon;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function showLoginForm()
    {
        $currentTime = Carbon::now()->timezone('Europe/Stockholm')->toDateTimeString();
        $startTime = Carbon::create('2020-12-11 21:45:00');

        if ($currentTime >= $startTime) $open = true;
        else $open = false;

        return view('auth.login', ['open' => $open]);
    }

    public function username()
    {
        return 'key';
    }

    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required|string',
        ]);
    }

    protected function credentials(Request $request)
    {
        return array_merge($request->only($this->username()));
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

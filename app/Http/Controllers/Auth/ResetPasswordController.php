<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Models\User;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard/client';

    // protected function authenticated(Request $request, $user)
    // {
    //     if ($user->role === 'Admin') {
    //         $this->redirectTo = route('dashboard.admin');
    //     } elseif ($user->role === 'Employe') {
    //         $this->redirectTo = route('dashboard.employe');
    //     } else {
    //         $this->redirectTo = route('dashboard.client');
    //     }
    // }
}

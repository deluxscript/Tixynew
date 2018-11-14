<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;

class UserLogoutController extends Controller
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Log a user out and redirect them
     *
     * @return mixed
     */
    public function doLogout()
    {
        $this->auth->logout();

        return redirect()->to('/?logged_out=yup');
    }
}

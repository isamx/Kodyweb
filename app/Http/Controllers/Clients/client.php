<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;

class Client extends Controller
{



    public function getClientName ()
    {
        return "Kody Kody";
    }
}

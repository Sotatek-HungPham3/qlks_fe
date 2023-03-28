<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class LoginController extends Controller
{
    public function ok(): JsonResponse
    {
        return 15;
    }
}

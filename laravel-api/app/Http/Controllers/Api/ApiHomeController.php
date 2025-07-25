<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ApiHomeController extends Controller
{
    public function user()
    {
        return response()->json(auth()->user());
    }
}

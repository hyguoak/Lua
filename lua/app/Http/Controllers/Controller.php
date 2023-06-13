<?php

namespace App\Http\Controllers;

use App\Models\graduation;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function show()
    {
        $graduations = graduation::all();
        return view('welcome', ['graduations' => $graduations]);
    }
}

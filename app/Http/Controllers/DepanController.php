<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepanController extends Controller
{
    public function depan()
    {
        return view('components.depan.index');
    }
}

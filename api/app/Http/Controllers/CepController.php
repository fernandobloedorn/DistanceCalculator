<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CepController extends Controller
{
    public function index() {
        return 'index in CepController';
    }

    public function show($id) {
        return 'showing id '.$id;
    }
}

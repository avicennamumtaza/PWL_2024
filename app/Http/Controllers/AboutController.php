<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function showIdentity() {
        $name = 'Avicenna Mumtaza';
        $nim = 2241720112;
        return "Nama\t: $name<br>Nim\t: $nim";
    }
}

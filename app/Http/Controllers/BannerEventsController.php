<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannerEventsController extends Controller
{
    public function banner()
    {
        return 'Aqui mostra o banner';
    }

    public function getNome()
    {
        return 'Danilo Augusto';
    }

    public function multiplicar($n1, $n2)
    {
        return $n1 * $n2;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    //
    function getData()
    {
        return ["name"=>"Abel", "email"=>"abeldomingos@gmail.com","telefone"=>"+244 927 038 823"];
    }
}

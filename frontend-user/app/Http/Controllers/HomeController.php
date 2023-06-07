<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    //Tampilan Home Utama User
    public function index()
    {
        $novels = Http::accept('application/json')->get(env('SERVER_API') . 'view');

        $novels = json_decode($novels)->Novel;
        $data = [
            "title" => "Home",
            "novels" => $novels
        ];

        return view("index", $data);
    }

    // Tampilan Detail
    // public function detail(String $parameter)
    // {
    //     // $data = Http::accept("application/json")->get(env('SERVER_API') . 'novels/'. $parameter)

    //     $data = json_decode($data);

    //     // return view('detail', $data)
    //     return view('detail')
    // }
}

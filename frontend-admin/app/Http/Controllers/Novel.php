<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class Novel extends Controller
{
    protected $client;
    //buat konstruktor
    function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    function index()
    {
        //echo "Ini Halaman Home";
        //echo env("API_URL");

        //buat url (service "GET" dari server)
        $url = env("API_URL")."view";

        //ambil service "GET" dari server
        $request = $this->client->get($url);

        //tampilkan hasil
        $response = $request->getBody();

        //$data = json_decode($response)->Novel;
        //echo $data;
        //foreach(json_decode($response)->Novel as $data)
        //{
            //echo $data->nama_novel."<br>";
        //}
        //echo $response;

        $data["result"] = json_decode($response)->novel;

        //panggil view "vw_Novel"
        return view("vw_novel",$data);
    }

    //buat fungsi untuk hapus data Novel
    function delete($kode)
    {
        $parameter = base64_encode($kode);
        //buat url (service "DELETE" dari server)
        $url = env("API_URL")."delete/".$parameter;

        //ambil service "DELETE" dari server
        $request = $this->client->delete($url);

        //tampilkan hasil
        $response = $request->getBody();

        //kirim ke "vw_novel" (fetch)
        echo $response;
    }

    // fungsi untuk tambah data Novel
    function add()
    {
        // tampilkan view "en_novel"
        return view("en_novel");
    }
}

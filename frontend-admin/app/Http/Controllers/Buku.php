<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class Buku extends Controller
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

        //$data = json_decode($response)->Buku;
        //echo $data;
        //foreach(json_decode($response)->Buku as $data)
        //{
            //echo $data->nama_Buku."<br>";
        //}
        //echo $response;

        $data["result"] = json_decode($response)->buku;

        //panggil view "vw_Buku"
        return view("vw_Buku",$data);
    }

    //buat fungsi untuk hapus data Buku
    function delete($kode)
    {
        $parameter = base64_encode($kode);
        //buat url (service "DELETE" dari server)
        $url = env("API_URL")."delete/".$parameter;

        //ambil service "DELETE" dari server
        $request = $this->client->delete($url);

        //tampilkan hasil
        $response = $request->getBody();

        //kirim ke "vw_Buku" (fetch)
        echo $response;
    }

    // fungsi untuk tambah data Buku
    function add()
    {
        // tampilkan view "en_Buku"
        return view("en_Buku");
    }
}

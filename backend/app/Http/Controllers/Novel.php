<?php

namespace App\Http\Controllers;
use App\Models\MNovel;
use Illuminate\Http\Request;

class Novel extends Controller
{
    function __construct()
    {
        $this->model = new MNovel();
    }

    function view()
    {
        // ambil fungsi viewData dari MNovel
        $data = $this->model->viewData();

        // tampilan hasil dari "tb_novel"
        return response([
            "Novel" => $data
        ],http_response_code());
    }

    function detail($parameter)
    {
        //ambil fungsi detail data(dari MNovel) tidak aman
        $data = $this->model->detailData($parameter);

        // tampilkan hasil dari "tb_novel"
        return response([
            "Novel" => $data
        ],http_response_code());
    }

    // buat fungsi hapus data
    function delete ($parameter)
    {
        // cek apakah data (seri) tersedia atau tidak
        $cek_data = $this->model->detailData($parameter);
        // jika data ditemukan
        if(count($cek_data) == 1)
        {
            // hapus data sesuai seri
            $this->model->deleteData($parameter);
            // buat pesan
            $status = 1;
            $pesan = "Data Berhasil Dihapus";
        }
        // jika data tidak ditemukan
        else {
            //  buat pesan
            $status = 0;
            $pesan = "Data Gagal Dihapus(Seri Novel Tidak Ditemukan !)";
        }
        // tampilkan hasil respon
        return response([
            "status" => $status,
            "pesan" => $pesan
        ],http_response_code());
    }

    //buat fungsi insert(simpan) data
    function insert(Request $req)
    {
        // ambil data dari hasil input
        $data = [
            "seri" => $req->seri_novel,
            "judul" => $req->judul_novel,
            "cover" => $req->cover_novel,
            "deskripsi" => $req->deskripsi_novel,
            "pdf" => $req->link_novel,
            // "parameter" => base64_encode($req->seri_novel)
        ];
        $parameter = base64_encode($data["seri"]);
        // cek apakah data Novel (seri) sudah pernah tersimpan atau belum
        // $check = $this->model->detailData($data["$parameter"]);

        $cek_data = $this->model->detailData($parameter);
        // jika data tidak ditemukan
        if(count($cek_data) == 0) {
        // lakukan proses penyimpanan funsgi data
            $this->model->saveData(
                $data["seri"],$data["judul"],
                $data["cover"],$data["deskripsi"],
                $data["pdf"]
            );

            $status = 1;
            $pesan = "Data Berhasil Disimpan";
        }

        else{

            $status = 0;
            $pesan = "Data Gagal Disimpan (Seri Novel Sudah ADA!)";
        }

        return response([
            "status" => $status,
            "pesan" => $pesan
        ], http_response_code());
    }

    // fungsi untuk ubah data
    function update($parameter, Request $req)
    {
         // ambil data dari hasil input
         $data = [
            "seri" => $req->seri_novel,
            "judul" => $req->judul_novel,
            "cover" => $req->cover_novel,
            "deskripsi" => $req->deskripsi_novel,
            "pdf" => $req->link_novel,
            // "parameter" => base64_encode($req->seri_novel)
        ];

        // cek apakah data seri novel sudah pernah tersimpan / belum tersimpan
        $cek_data = $this->model->checkUpdate($parameter, $data["seri"]);
        // jika data tidak ditemukan
        if(count($cek_data) == 0)
        {
            // update data
            $this->model->updateData(
                $data["seri"],$data["judul"],
                $data["cover"],$data["deskripsi"],
                $data["pdf"], $parameter
            );
            // buat pesan
            $status = 1;
            $pesan = "Data Berhasil Diubah";
        }
        // jika data tidak ditemukan
        else
        {
            // buat pesan
            $status = 0;
            $pesan = "Data Gagal Diubah (Seri novel Sudah Pernah Disimpan sebelumnya!)";
        }
        // tampilkan hasil respon
        return response([
            "status" => $status,
            "pesan" => $pesan
        ], http_response_code());
    }
}
?>

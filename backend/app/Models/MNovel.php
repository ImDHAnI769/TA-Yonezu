<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MNovel extends Model
{
    function viewData()
    {
        $query = DB::table('tb_novel')
        ->select(
            "seri AS seri_novel",
            "judul AS judul_novel",
            "deskripsi_singkat_novel AS deskripsi_singkat_novel",
            "cover AS cover_novel",
            "deskripsi AS deskripsi_novel",
            "pdf AS link_novel"
        )
        ->orderBy("seri_novel")
        ->get();

        return $query;
    }

    function detailData($parameter)
    {
        $query = DB::table('tb_novel')
        ->select("seri AS seri_novel","judul AS judul_novel","cover AS cover_novel",
        "deskripsi AS deskripsi_novel","pdf AS link_novel")

        ->where(DB::raw("TO_BASE64(seri)"),"=",
        $parameter)
        ->orderBy("seri")
        ->get();

        return $query;
    }

    // fungsi untuk delete data
    function deleteData($parameter)
    {
        DB::table('tb_novel')
        ->where(DB::raw("TO_BASE64(seri)"),"=",
        $parameter)
        ->delete();
    }

    // buat fungsi untuk simpan data
    function saveData($seri, $deskripsi_singkat, $judul, $cover, $deskripsi, $link)
    {
        DB::table('tb_novel')
        ->insert([
            "seri" => $seri,
            "deskripsi_singkat_novel" => $deskripsi_singkat,
            "judul" => $judul,
            "cover" => $cover,
            "deskripsi" => $deskripsi,
            "pdf" => $link,
        ]);
    }

    // fungsi untuk cek ubah data
    function checkUpdate($seri_lama, $seri_baru)
    {
        $query = DB::table('tb_novel')
        ->select("seri")
        ->where("seri", "=", $seri_baru)
        ->where(DB::raw("TO_BASE64(seri)"), "!=", $seri_lama)
        ->get();

        return $query;
    }

    // fungsi untuk ubah data
    function updateData($seri, $judul, $cover, $deskripsi, $link, $seri_lama)
    {
        DB::table('tb_novel')
        ->where(DB::raw("TO_BASE64(seri)"), "=", $seri_lama)
        ->update([
            "seri" => $seri,
            "judul" => $judul,
            "cover" => $cover,
            "deskripsi" => $deskripsi,
            "pdf" => $link,
        ]);
    }
}

@extends('template_buku')

@section('title_template')
    <title>Tambah Data Buku</title>
@endsection

@section('body_template')

<nav class="page-heading text-center mb-5">
    <h3>INPUT DATA BUKU DIGITAL</h3>
</nav>
    <!-- section baris pertama -->
    <section class="flex w-full">
        <!-- section untuk seri -->
        <section class="w-1/2 flex flex-col mr-2.5">
            <!-- label untuk judul -->
            <label for="txt_seri">
                 seri
            </label>
            <!-- object/komponen -->
            <input type="text" name="txt_seri" id="txt_seri" class="border-2 border-sky-500 rounded-lg h-8 focus:outline-none
            focus:ring focus:border-blue-500 my-2.5 px-2.5" maxlength="10">
            <!-- label untuk pesan error -->
            <label id="err_seri" class="text-rose-500 text-sm">seri Harus Diisi !</label>
        </section>
        <!--section untuk judul -->
        <section class="w-1/2 flex flex-col">
            <!-- label untuk judul -->
            <label for="txt_judul">
                judul
            </label>
            <!-- object/komponen -->
            <input type="text" name="txt_judul" id="txt_judul" class="border-2 border-sky-500 rounded-lg h-8 focus:outline-none
            focus:ring focus:border-blue-500 my-2.5 px-2.5" maxlength="10">
            <!-- label untuk pesan error -->
            <label id="err_judul" class="text-rose-500 text-sm">judul Harus Diisi !</label>
        </section>
    </section>

    <!-- section baris pertama -->
    <section class="flex w-full mt-2.5">
        <!-- section untuk cover -->
        <section class="w-1/2 flex flex-col mr-2.5">
            <!-- label untuk judul -->
            <label for="txt_cover">
               cover
            </label>
            <!-- object/komponen -->
            <input type="text" name="txt_cover" id="txt_cover" class="border-2 border-sky-500 rounded-lg h-8 focus:outline-none
            focus:ring focus:border-blue-500 my-2.5 px-2.5" maxlength="100">
            <!-- label untuk pesan error -->
            <label id="err_cover" class="text-rose-500 text-sm">cover Harus Diisi !</label>
        </section>
        <!--section untuk deskripsi -->
        <section class="w-1/2 flex flex-col">
            <!-- label untuk judul -->
            <label for="txt_deskripsi">
               deskripsi
            </label>
            <!-- object/komponen -->
            <input type="text" name="txt_deskripsi" id="txt_deskripsi" class="border-2 border-sky-500 rounded-lg h-8 focus:outline-none
            focus:ring focus:border-blue-500 my-2.5 px-2.5" maxlength="13">
            <!-- label untuk pesan error -->
            <label id="err_deskripsi" class="text-rose-500 text-sm" >deskripsi Harus Diisi ! </label>
        </section>
    </section>

    <!-- section baris pertama -->
    <section class="flex w-full">
        <!-- section untuk pdf -->
        <section class="w-1/2 flex flex-col mr-2.5">
            <!-- label untuk judul -->
            <label for="txt_pdf">
               pdf
            </label>
            <!-- object/komponen -->
            <input type="text" name="txt_pdf" id="txt_pdf" class="border-2 border-sky-500 rounded-lg h-8 focus:outline-none
            focus:ring focus:border-blue-500 my-2.5 px-2.5" maxlength="50">
            <!-- label untuk pesan error -->
            <label id="err_pdf" class="text-rose-500 text-sm">pdf Harus Diisi !</label>
        </section>
    </section>
    <br>
    <nav class="text-center mb-5">
        <button id="****" class="bg-blue-300 w-36 h-10 rounded-full border-2 border-blue-600">Tambah</button>
    </nav>

    <!-- custom js -->
    <script>
        //sembunyikan pesan error
        document.querySelector("#err_seri").style.display="none"
        document.querySelector("#err_judul").style.display="none"
        document.querySelector("#err_cover").style.display="none"
        document.querySelector("#err_deskripsi").style.display="none"
        document.querySelector("#err_pdf").style.display="none"
    </script>

@endsection

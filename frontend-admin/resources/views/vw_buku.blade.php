@extends('template_buku')

@section('title_template')
    <title>Tampil Data Buku</title>
@endsection

@section('body_template')

<!-- buat menu -->
    <nav class="page-heading text-center mb-5">
        <h3>DATA BUKU DIGITAL</h3>
    </nav>

    <!-- buat menu -->
    <nav class="text-center mb-5">
        <button id="btn_tambah" class="bg-blue-300 w-36 h-10 rounded-full border-2 border-blue-600" onclick="gotoAdd()">Tambah</button>
        <button id="btn_refresh" class="bg-blue-300 w-36 h-10 rounded-full border-2 border-blue-600">Refresh</button>
    </nav>

    <!-- buat table -->
     <table class="w-full">
        <!-- buat judul -->
        <thead>
            <tr class="bg-blue-400 h-10 text-white">
                <th class="border-2 border-blue-600 w-1/10">Aksi</th>
                <th class="border-2 border-blue-600 w-1/10">Seri</th>
                <th class="border-2 border-blue-600 w-2/10">Judul Buku</th>
                <th class="border-2 border-blue-600 w-2/10">Cover</th>
                <th class="border-2 border-blue-600 w-4/10">Deskripsi</th>
                <th class="border-2 border-blue-600 w-2/10">PDF</th>
            </tr>
        </thead>
        <!-- buat isi -->
        <tbody class="text-center">
            @foreach ($result as $output)
            <tr>
                <td class="text-center border-2 border-blue-600">
                    <button id="btn-ubah" class="bg-sky-600 w-10 h-10 text-white">
                         <i class="fa-solid fa-pencil"></i>
                     </button>
                    <button id="btn-hapus" class="bg-rose-600 w-10 h-10 text-white" onclick="gotoDelete('{{$output->kode_buku}}')">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </td>
                <td class="text-center border-2 border-blue-600">{{$output->kode_buku}}</p></td>
                <td class="text-justify border-2 border-blue-600 p-2.5">{{$output->judul_buku}}</p></td>
                <td class="text-justify border-2 border-blue-600 px-2.5">{{$output->cover_buku}}</p></td>
                <td class="text-center border-2 border-blue-600">{{$output->deskripsi_buku}}</p></td>
                <td class="text-justify border-2 border-blue-600 px-2.5">{{$output->pdf_buku}}</p></td>
            </tr>
            @endforeach
     </table>


     <!-- Custom javascript -->
     <script>
        // buat fungsi link untuk tambah data (js ke html/dom html)
        function gotoAdd()
        {
            location.href="{{url('/add')}}"
            // window.open("http://google.com")
        }

        // fungsi untuk refresh data (html ke js/dom js)
        document.querySelector("#btn_refresh").addEventListener('click',function(){
            location.href="{{url('/')}}"
        })

        // buat fungsi untuk hapus data
        function gotoDelete(kode)
        {
            //location.href="{{url('/delete')}}/"+kode
            if(confirm("Data "+kode+" Ingin Dihapus?") == true)
            {
                // buat variabel link
                const url = "{{url('/delete')}}/"+kode

                // asyncronous javascript (dengan fetch)
                fetch(url,{
                    method : "DELETE",
                    headers: {
                    'X-CSRF-Token': document.querySelector('meta[name="_token"]').content
                    }
                })
                // hasil respon dari url
                .then((response) => response.json())
                // menampilkan hasil response (dari "then" sebelumya)
                .then((result) => {
                    alert(result.pesan)
                    //panggil method dari btn_refresh
                    document.querySelector("#btn_refresh").click()
                })
                .catch((error) => alert("Data Gagal Dikirim !!"))
            }
        }
     </script>
@endsection

@section('sidebar_template')
<link rel="stylesheet" href="/dist/backend-assets/static/js/components/sidebar.js" />
<div id="sidebar">
    <div class="sidebar-wrapper active">
      <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">

          <div class="sidebar-toggler x">
            <a href="#" class="sidebar-hide d-xl-none d-block"
              ><i class="bi bi-x bi-middle"></i
            ></a>
          </div>
        </div>
      </div>
      <div class="sidebar-menu">
        <ul class="menu">
          <li class="sidebar-title">Menu</li>

          <li class="sidebar-item">
              <a href="/" class="sidebar-link">
              <i class="fa-solid fa-home"></i>
              <span>Beranda</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a href="/admin" class="sidebar-link">
            <i class="fa-solid fa-user"></i>
            <span>Kontak</span>
          </a>
        </li>
        <li class="sidebar-item">
            <a href="/logout" class="sidebar-link">
            <i class="fa-solid fa-gauge"></i>
            <span>Logout</span>
          </a>
        </li>

        </ul>
      </div>
    </div>
  </div>
@endsection



@section('footer_template')
<footer>
    <div class="footer clearfix mb-0 text-muted">
      <div class="float-start">
        <p>&copy; {{ date('Y') }} - Yonezu</p>
      </div>
    </div>
  </footer>
@endsection


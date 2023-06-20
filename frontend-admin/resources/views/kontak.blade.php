@extends('template_buku')

@section('title_template')
    <title>Tambah Data Buku</title>
@endsection


@section('body_template')

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
            <a href="/kontak" class="sidebar-link">
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

<h1>Kontak</h1>

@endsection

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1> Dashboard</h1>
@stop

@section('content')
<div class="main-part" style="margin-left: 60px">
    
        <div class="cpanel">
             <div class="icon-part">
                <i class="fa fa-home" aria-hidden="true"></i><br>
                    <small>CRUD</small>
                <p>Home</p>
             </div>
            <div class="card-content-part">
                <a href="/admin/home">Lihat Details </a>
            </div>
        </div>
        
        <div class="cpanel cpanel-green" style="margin-left: 10px">
            <div class="icon-part">
                <i class="fa fa-newspaper" aria-hidden="true"></i><br>
                    <small>CRUD</small>
                <p>News</p>
            </div>
            <div class="card-content-part" >
                <a href="admin/news">Lihat Details </a>
            </div>
         </div>

        <div class="cpanel cpanel-blue" style="margin-left: 11px" >
            <div class="icon-part">
                <i class="fa fa-building" aria-hidden="true"></i><br>
                    <small>CRUD</small>
                <p>Company</p>
            </div>
            <div class="card-content-part">
                <a href="admin/company">Lihat Details </a>
            </div>
         </div>
   
    </div>






@stop

@section('css')
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
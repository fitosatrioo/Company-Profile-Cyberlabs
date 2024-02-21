@extends('adminlte::page')

<title>Orders</title>
@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
      <div class="card-header">
        <h1>Orders</h1>
      </div>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="/admin/cetak" target="_blank" class="btn btn-success float-left">Cetak Order</a>
            <a style="margin-left: 10px" href="/admin/form-cetak" class="btn btn-warning float-left ms-">Filter Data Order</a>
        </div>
      <div class="card-body">
        <table style="margin-top: 8px" class="table table-responsive-sm table-bordered">
          <tr class="bg-info">
            <th >No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Produk</th>
            <th>Deadline</th>
            <th>Actions</th>
          </tr>

      
         
          @foreach ($datas as $item)
         
            <tr>
              <th>{{ ++$i }}</th>
              <th>{{ $item->nama}}</th>
              <th>{{ $item->email }}</th>
              <th>{{ $item->telepon }}</th>
              <th>{{ $item->produk }}</th>
              <th>{{date('d-m-Y', strtotime($item->deadline))  }}</th>
              <th>
               
               
                {{-- <a href="/admin/contact/{{ $item->id }}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a> --}}
                <a href="/admin/orders/{{ $item->id }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                <button class="btn btn-danger" onclick="handleRemoveNews({{ $item->id }})"><i class="fas fa-trash"></i></button>
                <form action="/admin/orders/{{ $item->id }}" method="POST" id="orders-form-{{ $item->id }}">
                  @csrf
                  @method('DELETE')
                  <input type="hidden" name="orders_id" value="{{ $item->id }}">
                </form>
              </th>
            </tr>
           
            @endforeach
        </table>
      </div>
    </div>
    
@stop

@push('js')
    <script>
      function handleRemoveNews(ordersId) {
        if(confirm('Delete this orders?') == true) {
          var form = document.getElementById('orders-form-' + ordersId);
          form.submit();
        }
      }
    </script>
@endpush
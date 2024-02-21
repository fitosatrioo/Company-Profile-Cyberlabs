@extends('adminlte::page')

<title>Show Abouts</title>
@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
      <div class="card-header">
        <h1>Show Orders</h1>
      </div>
    </div>
@stop

@section('content')


<form action="/admin/orders/{{ $order->id }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="card">
    <div class="card-body">
      <div class="form-group">
      
           
            <a href="/admin/orders" class="btn btn-success"><i class="fas fa-arrow-left"></i>&nbsp Back</a>
            <a href="/admin/orders/{{ $order->id }}/edit"  class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
            <button class="btn btn-danger" onclick="handleRemoveNews({{ $order->id }})"><i class="fas fa-trash"></i>&nbsp Delete</button>
            <form action="/admin/orders/{{ $order->id }}" method="POST" id="order-form-{{ $order->id }}">
              @csrf
              @method('DELETE')
              <input type="hidden" name="order_id" value="{{ $order->id }}">
            </form><br><br>

       
              {{-- <img style="width: 500px" src="/uploads/abouts/{{ $about->image }}" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">{{ $about->title }}</h5>
                <p class="card-text">{!! $about->content !!}</p>
              </div> --}}
              <h5>Nama : &nbsp<span>{{ $order->nama }}</span></h5>
              <h5>Email : &nbsp<span>{{ $order->email }}</span></h5>
              <h5>Telepon : &nbsp<span>{{ $order->telepon }}</span></h5>
              <h5>Produk : &nbsp<span>{{ $order->produk }}</span></h5>
              <h5>Deadline : &nbsp<span>{{ $order->deadline }}</span></h5>
              <h5>Pesan : &nbsp<span>{{ $order->pesan }}</span></h5>
          
           
    </div>
  </div>
</form>
@stop

@section('css')
  <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
@endsection

@push('js')
    <script>
      function handleRemoveNews(orderId) {
        if(confirm('Delete this Order?') == true) {
          var form = document.getElementById('order-form-' + orderId);
          form.submit();
        }
      }
    </script>
@endpush

@section('js')
<script>
  CKEDITOR.replace( 'content' );
</script>
@endsection
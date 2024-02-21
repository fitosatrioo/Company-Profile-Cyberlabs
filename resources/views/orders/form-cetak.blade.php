@extends('adminlte::page')

<title>Filter Data Order</title>
@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
      <div class="card-header">
        <h1>Filter Data Order</h1>
      </div>
    </div>
@stop

@section('content')


{{-- <form action="/admin/orders/{{ $order->id }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT') --}}
  <div class="card">
    <div class="card-body">
      <div class="form-group">
      
           
            {{-- <a href="/admin/orders" class="btn btn-success"><i class="fas fa-arrow-left"></i>&nbsp Back</a>
            <a href="/admin/orders/{{ $order->id }}/edit"  class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
            <button class="btn btn-danger" onclick="handleRemoveNews({{ $order->id }})"><i class="fas fa-trash"></i>&nbsp Delete</button>
            <form action="/admin/orders/{{ $order->id }}" method="POST" id="order-form-{{ $order->id }}">
              @csrf
              @method('DELETE')
              <input type="hidden" name="order_id" value="{{ $order->id }}">
            </form><br><br>  --}}

       <div class="input-group">
           <label for="label">Tanggal Awal</label>
           <input style="width: 1000px" type="date" name="tglawal" id="tglawal" class="form-control mb-3" required>
       </div>
       <div class="input-group">
           <label for="label">Tanggal Akhir</label>
           <input style="width: 1000px" type="date" name="tglakhir" id="tglakhir" class="form-control mb-3" required>
       </div>
            <div class="input-group">
                <a href="" target="_blank" onclick="this.href='/admin/cetak-order-pertanggal/' + document.getElementById('tglawal').value +'/' + document.getElementById('tglakhir').value"  class="btn btn-primary col-md-12">Cetak Data Order &nbsp<i class="fas fa-print"></i></a>
            </div>
           
    </div>
  {{-- </div>
</form> --}}
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
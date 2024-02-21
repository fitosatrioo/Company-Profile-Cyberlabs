@extends('adminlte::page')

<title>Show Home</title>
@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
      <div class="card-header">
        <h1>Show Home</h1>
      </div>
    </div>
@stop

@section('content')


<form action="/admin/home/{{ $Home->id }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="card">
    <div class="card-body">
      <div class="form-group">
      
           
            <a href="/admin/home" class="btn btn-success"><i class="fas fa-arrow-left"></i>&nbsp Back</a>
            <a href="/admin/home/{{ $Home->id }}/edit"  class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
            <button class="btn btn-danger" onclick="handleRemovehome({{ $Home->id }})"><i class="fas fa-trash"></i>&nbsp Delete</button>
            <form action="/admin/home/{{ $Home->id }}" method="POST" id="home-form-{{ $Home->id }}">
              @csrf
              @method('DELETE')
              <input type="hidden" name="home_id" value="{{ $Home->id }}">
            </form><br><br>

            <div class="card mb-2">
              <img style="width: 200px" src="/uploads/home/{{ $Home->image }}" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">{{ $Home->title }}</h5>
                <p class="card-text">{!! $Home->content !!}</p>
              </div>
            </div>
           
{{--       
        <label for="">Title</label><br>
      {{ $Home->title }}
      </div>
     
      <div class="form-group">
       
        {{ $Home->content }}
      </div> --}}
    
    </div>
  </div>
</form>
@stop

@section('css')
  <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
@endsection

@push('js')
    <script>
      function handleRemovehome(homeId) {
        if(confirm('Delete this home?') == true) {
          var form = document.getElementById('home-form-' + homeId);
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
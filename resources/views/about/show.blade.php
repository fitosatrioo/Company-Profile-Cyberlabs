@extends('adminlte::page')

<title>Show Abouts</title>
@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
      <div class="card-header">
        <h1>Show Abouts</h1>
      </div>
    </div>
@stop

@section('content')


<form action="/admin/abouts/{{ $about->id }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="card">
    <div class="card-body">
      <div class="form-group">
      
           
            <a href="/admin/abouts" class="btn btn-success"><i class="fas fa-arrow-left"></i>&nbsp Back</a>
            <a href="/admin/abouts/{{ $about->id }}/edit"  class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
            <button class="btn btn-danger" onclick="handleRemoveNews({{ $about->id }})"><i class="fas fa-trash"></i>&nbsp Delete</button>
            <form action="/admin/abouts/{{ $about->id }}" method="POST" id="news-form-{{ $about->id }}">
              @csrf
              @method('DELETE')
              <input type="hidden" name="news_id" value="{{ $about->id }}">
            </form><br><br>

            <div class="card mb-2">
              <img style="width: 500px" src="/uploads/abouts/{{ $about->image }}" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">{{ $about->title }}</h5>
                <p class="card-text">{!! $about->content !!}</p>
              </div>
            </div>
           
{{--       
        <label for="">Title</label><br>
      {{ $about->title }}
      </div>
     
      <div class="form-group">
       
        {{ $about->content }}
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
      function handleRemoveNews(newsId) {
        if(confirm('Delete this news?') == true) {
          var form = document.getElementById('news-form-' + newsId);
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
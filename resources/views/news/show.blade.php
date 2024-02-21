@extends('adminlte::page')

<title>Show News</title>
@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
      <div class="card-header">
        <h1>Show News</h1>
      </div>
    </div>
@stop

@section('content')


<form action="/admin/news/{{ $news->id }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="card">
    <div class="card-body">
      <div class="form-group">
      
           
            <a href="/admin/news" class="btn btn-success"><i class="fas fa-arrow-left"></i>&nbsp Back</a>
            <a href="/admin/news/{{ $news->id }}/edit"  class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
            <button class="btn btn-danger" onclick="handleRemoveNews({{ $news->id }})"><i class="fas fa-trash"></i>&nbsp Delete</button>
            <form action="/admin/news/{{ $news->id }}" method="POST" id="news-form-{{ $news->id }}">
              @csrf
              @method('DELETE')
              <input type="hidden" name="news_id" value="{{ $news->id }}">
            </form><br><br>
           
      <div class="card mb-2">
        <img style="width: 200px;" src="/uploads/news/{{ $news->image }}" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">{{ $news->title }}</h5>
          <p class="card-text">{!! $news->content !!}</p>
        </div>
      </div>
        {{-- <label for="">Title</label><br>
      {{ $news->title }}
      </div>
     
      <div class="form-group">
       
        <img src="uploads/news/{{ $news->image }}" alt="">
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
@extends('adminlte::page')

<title>Show Internship</title>
@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
      <div class="card-header">
        <h1>Show Internship</h1>
      </div>
    </div>
@stop

@section('content')


<form action="/admin/internship/{{ $internship->id }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="card">
    <div class="card-body">
      <div class="form-group">
      
           
            <a href="/admin/internship" class="btn btn-success"><i class="fas fa-arrow-left"></i>&nbsp Back</a>
            <a href="/admin/internship/{{ $internship->id }}/edit"  class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
            <button class="btn btn-danger" onclick="handleRemoveinternship({{ $internship->id }})"><i class="fas fa-trash"></i>&nbsp Delete</button>
            <form action="/admin/internship/{{ $internship->id }}" method="POST" id="internship-form-{{ $internship->id }}">
              @csrf
              @method('DELETE')
              <input type="hidden" name="internship_id" value="{{ $internship->id }}">
            </form><br><br>
           
      <div class="card mb-2">
        <img style="width: 200px;" src="/uploads/internship/{{ $internship->image }}" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">{{ $internship->title }}</h5>
          <p class="card-text">{!! $internship->content !!}</p>
        </div>
      </div>
        {{-- <label for="">Title</label><br>
      {{ $internship->title }}
      </div>
     
      <div class="form-group">
       
        <img src="uploads/internship/{{ $internship->image }}" alt="">
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
      function handleRemoveinternship(internshipId) {
        if(confirm('Delete this internship?') == true) {
          var form = document.getElementById('internship-form-' + internshipId);
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
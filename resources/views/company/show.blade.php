@extends('adminlte::page')

<title>Show Company</title>
@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
      <div class="card-header">
        <h1>Show Company</h1>
      </div>
    </div>
@stop

@section('content')


<form action="/admin/company/{{ $company->id }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="card">
    <div class="card-body">
      <div class="form-group">
      
           
            <a href="/admin/company" class="btn btn-success"><i class="fas fa-arrow-left"></i>&nbsp Back</a>
            <a href="/admin/company/{{ $company->id }}/edit"  class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
            <button class="btn btn-danger" onclick="handleRemoveCompany({{ $company->id }})"><i class="fas fa-trash"></i>&nbsp Delete</button>
            <form action="/admin/company/{{ $company->id }}" method="POST" id="company-form-{{ $company->id }}">
              @csrf
              @method('DELETE')
              <input type="hidden" name="company_id" value="{{ $company->id }}">
            </form><br><br>
           
      <div class="card mb-2">
        <img style="width: 200px;" src="/uploads/company/{{ $company->image }}" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">{{ $company->title }}</h5>
          <p class="card-text">{!! $company->content !!}</p>
        </div>
      </div>
        {{-- <label for="">Title</label><br>
      {{ $Company->title }}
      </div>
     
      <div class="form-group">
       
        <img src="uploads/Company/{{ $Company->image }}" alt="">
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
      function handleRemoveCompany(companyId) {
        if(confirm('Delete this Company?') == true) {
          var form = document.getElementById('company-form-' + companyId);
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
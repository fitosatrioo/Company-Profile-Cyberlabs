@extends('adminlte::page')

<title>Internship</title>
@section('title', 'Dashboard')

@section('content_header')

 
<div class="card">
    <div class="card-header">
      <h1>Internship</h1>
    </div>
  </div>
      
@stop

@section('content')
    <div class="card">
      <div class="card-header">
     
        <a href="/admin/internship/create" class="btn btn-primary float-right">Add Internship</a>
      </div>
      <div class="card-body">
        <table  class="table table-responsive-sm table-bordered table-striped">
          <tr class="bg-info">
            <th>No</th>
            <th>Title</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Actions</th>
          </tr>

     
         

          @foreach ($datas as $item)
            <tr>
              <th>{{ ++$i }}</th>
              <th>{{ $item->title }}</th>
              <th>{{ $item->created_at }}</th>
              <th>{{ $item->updated_at }}</th>
              <th>
               
                <a href="/admin/internship/{{ $item->id }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                <a href="/admin/internship/{{ $item->id }}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                <button class="btn btn-danger" onclick="handleRemoveinternship({{ $item->id }})"><i class="fas fa-trash"></i></button>
                <form action="/admin/internship/{{ $item->id }}" method="POST" id="internship-form-{{ $item->id }}">
                  @csrf
                  @method('DELETE')
                  <input type="hidden" name="internship_id" value="{{ $item->id }}">
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
      function handleRemoveinternship(internshipId) {
        if(confirm('Delete this internship?') == true) {
          var form = document.getElementById('internship-form-' + internshipId);
          form.submit();
        }
      }
    </script>
@endpush
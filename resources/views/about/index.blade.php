@extends('adminlte::page')

<title>Abouts</title>
@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
      <div class="card-header">
        <h1>Abouts</h1>
      </div>
    </div>
@stop

@section('content')
    <div class="card">
      <div class="card-header">
        <a href="/admin/abouts/create" class="btn btn-primary float-right">Add Abouts</a>
      </div>
      <div class="card-body">
        <table class="table table-responsive-sm table-bordered">
          <tr class="bg-info">
            <th >No</th>
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
               
                <a href="/admin/abouts/{{ $item->id }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                <a href="/admin/abouts/{{ $item->id }}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                <button class="btn btn-danger" onclick="handleRemoveNews({{ $item->id }})"><i class="fas fa-trash"></i></button>
                <form action="/admin/abouts/{{ $item->id }}" method="POST" id="abouts-form-{{ $item->id }}">
                  @csrf
                  @method('DELETE')
                  <input type="hidden" name="abouts_id" value="{{ $item->id }}">
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
      function handleRemoveNews(aboutsId) {
        if(confirm('Delete this abouts?') == true) {
          var form = document.getElementById('abouts-form-' + aboutsId);
          form.submit();
        }
      }
    </script>
@endpush
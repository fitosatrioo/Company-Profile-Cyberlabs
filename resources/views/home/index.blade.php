@extends('adminlte::page')

<title>Home</title>
@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
      <div class="card-header">
        <h1>Home</h1>
      </div>
    </div>
@stop

@section('content')
    <div class="card">
      <div class="card-header">
        <a href="/admin/home/create" class="btn btn-primary float-right">Add Home</a>
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
               
                <a href="/admin/home/{{ $item->id }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                <a href="/admin/home/{{ $item->id }}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                <button class="btn btn-danger" onclick="handleRemoveNews({{ $item->id }})"><i class="fas fa-trash"></i></button>
                <form action="/admin/home/{{ $item->id }}" method="POST" id="home-form-{{ $item->id }}">
                  @csrf
                  @method('DELETE')
                  <input type="hidden" name="home_id" value="{{ $item->id }}">
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
      function handleRemoveNews(homeId) {
        if(confirm('Delete this home?') == true) {
          var form = document.getElementById('home-form-' + homeId);
          form.submit();
        }
      }
    </script>
@endpush
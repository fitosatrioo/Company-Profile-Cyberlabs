@extends('adminlte::page')

<title>News</title>

@section('title', 'Dashboard')

@section('content_header')

 
     
      
@stop

@section('content')
    <div class="card">
      <div class="card-header">
     
        <a href="/admin/news/create" class="btn btn-primary float-left">Add News</a>
      </div>
      <div class="card-body">
        <table  class="table table-responsive-sm table-bordered table-striped" id="datatablesSimple">
          <tr class="bg-info">
            <th>No</th>
            <th>Title</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Actions</th>
          </tr>

     
         

          @foreach ($news as $item)
            <tr>
              <th>{{ ++$i }}</th>
              <th>{{ $item->title }}</th>
              <th>{{ $item->created_at }}</th>
              <th>{{ $item->updated_at }}</th>
              <th>
               
                <a href="{{ route('news.show',$item->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                <a href="/admin/news/{{ $item->id }}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                <button class="btn btn-danger" onclick="handleRemoveNews({{ $item->id }})"><i class="fas fa-trash"></i></button>
                <form action="/admin/news/{{ $item->id }}" method="POST" id="news-form-{{ $item->id }}">
                  @csrf
                  @method('DELETE')
                  <input type="hidden" name="news_id" value="{{ $item->id }}">
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
      function handleRemoveNews(newsId) {
        if(confirm('Delete this news?') == true) {
          var form = document.getElementById('news-form-' + newsId);
          form.submit();
        }
      }
     </script>
    
@endpush

 


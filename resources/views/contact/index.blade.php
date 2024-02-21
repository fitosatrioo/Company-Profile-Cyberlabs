@extends('adminlte::page')

<title>Contacts</title>
@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
      <div class="card-header">
        <h1>Contacts</h1>
      </div>
    </div>
@stop

@section('content')
    <div class="card">
    
      <div class="card-body">
        <table class="table table-responsive-sm table-bordered">
          <tr class="bg-info">
            <th >No</th>
            <th>Comment</th>
            <th>Subject</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
          </tr>

      
         

          @foreach ($datas as $item)
            <tr>
              <th>{{ ++$i }}</th>
              <th>{{ $item->comment }}</th>
              <th>{{ $item->subject }}</th>
              <th>{{ $item->name }}</th>
              <th>{{ $item->email }}</th>
              <th>
               
               
                {{-- <a href="/admin/contact/{{ $item->id }}/edit" class="btn btn-warning"><i class="fas fa-edit"></i></a> --}}
                <button class="btn btn-danger" onclick="handleRemoveNews({{ $item->id }})"><i class="fas fa-trash"></i></button>
                <form action="/admin/contact/{{ $item->id }}" method="POST" id="contact-form-{{ $item->id }}">
                  @csrf
                  @method('DELETE')
                  <input type="hidden" name="contact_id" value="{{ $item->id }}">
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
      function handleRemoveNews(contactId) {
        if(confirm('Delete this contact?') == true) {
          var form = document.getElementById('contact-form-' + contactId);
          form.submit();
        }
      }
    </script>
@endpush
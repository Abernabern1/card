@extends('layouts.admin')


@section('content')

<div class="layout-content">
  <div class="layout-content-body">
    <div class="doc">
      <!-- START OVERVIEW -->
      <div class="doc-section">
        <h1 id="overview" class="doc-heading">Messages</h1><br/>

        @if(session('status-success'))
          <div>
              <span class="status">{{ session('status-success') }}</span>
          </div><br>
        @endif
        <table class="table table-hover table-dark table-bordered">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First name</th>
              <th scope="col">Last name</th>
              <th scope="col">Email</th>
              <th scope="col">Subject</th>
              <th scope="col">Text</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($messages as $key=>$message)
            <tr>
              <td>{{ $key+1 }}</td>
              <td>{{ $message->first_name }}</td>
              <td>{{ $message->last_name }}</td>
              <td>{{ $message->email }}</td>
              <td>{{ $message->subject }}</td>
              <td>{{ $message->text }}</td>
              <td class="sssss">
                &nbsp&nbsp&nbsp
                <form class="table-form" action="{{ route('admin.message.delete', $message->id) }}" method="post">
                    <button class="table-button"><i class="fa fa-times-circle fa-lg red"></i></button>
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                </form>
            </tr>
            @endforeach

          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>

@stop

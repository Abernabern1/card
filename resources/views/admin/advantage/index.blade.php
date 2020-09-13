@extends('layouts.admin')


@section('content')

<div class="layout-content">
  <div class="layout-content-body">
    <div class="doc">
      <!-- START OVERVIEW -->
      <div class="doc-section">
        <h1 id="overview" class="doc-heading">Advantages</h1><br/>

        @if(session('status-success'))
          <div>
              <span class="status">{{ session('status-success') }}</span>
          </div><br>
        @endif
        <table class="table table-hover table-dark table-bordered">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Icon</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($advantages as $key=>$advantage)
            <tr>
              <td>{{ $key+1 }}</td>
              <td>{{ $advantage->title }}</td>
              <td>{{ $advantage->icon }}</td>
              <td class="sssss">
                &nbsp&nbsp&nbsp
                <a href="{{ route('admin.advantage.update', $advantage->id) }}">
                  <i class="fa fa-cog fa-lg" style="color: black;"></i>
                </a>
                <form class="table-form" action="{{ route('admin.advantage.delete', $advantage->id) }}" method="post">
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

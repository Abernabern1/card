@extends('layouts.admin')


@section('content')

<div class="layout-content">
  <div class="layout-content-body">
    <div class="doc">
      <!-- START OVERVIEW -->
      <div class="doc-section">
        <h1 id="overview" class="doc-heading">Courses</h1><br/>

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
                <th scope="col">Text</th>
                <th scope="col">Price</th>
                <th scope="col">Students</th>
                <th scope="col">Lessons</th>
                <th scope="col">Weeks</th>
                <th scope="col">Image</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($courses as $key=>$course)
            <tr>
              <td>{{ $key+1 }}</td>
              <td>{{ $course->title }}</td>
                <td>{{ $course->text }}</td>
                <td>{{ $course->price }}</td>
                <td>{{ $course->student_count }}</td>
                <td>{{ $course->lesson_count }}</td>
                <td>{{ $course->week_count }}</td>
                <td>{{ $course->image }}</td>
              <td class="sssss">
                &nbsp&nbsp&nbsp
                <a href="{{ route('admin.course.update', $course->id) }}">
                  <i class="fa fa-cog fa-lg" style="color: black;"></i>
                </a>
                <form class="table-form" action="{{ route('admin.course.delete', $course->id) }}" method="post">
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

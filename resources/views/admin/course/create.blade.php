@extends('layouts.admin')

@section('content')

<div class="layout-content">
    <div class="layout-content-body">
        <div class="doc">
            <!-- START OVERVIEW -->
            <div class="doc-section">
                <h1 id="overview" class="doc-heading">Menu</h1><br/>

                @if($errors->all())
                    <div class="errors">
                        @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                @if(session('status-success'))
                    <div>
                        <a class="status" href="{{ route('admin.course.index') }}">{{ session('status-success') }}</a>
                    </div>
                @endif

                <form class="form-horizontal" method="POST" action="{{ route('admin.course.create') }}"
                      enctype="multipart/form-data">

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-10">
                            @if(old('title'))
                                <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title') }}">
                            @else
                                <input type="text" class="form-control" name="title" placeholder="Title">
                            @endif
                        </div>
                    </div><br/>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Text</label>
                        <div class="col-sm-10">
                            @if(old('text'))
                                <input type="text" class="form-control" name="text" placeholder="Text" value="{{ old('text') }}">
                            @else
                                <input type="text" class="form-control" name="text" placeholder="Text">
                            @endif
                        </div>
                    </div><br/>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Price</label>
                        <div class="col-sm-10">
                            @if(old('price'))
                                <input type="text" class="form-control" name="price" placeholder="Price" value="{{ old('price') }}">
                            @else
                                <input type="text" class="form-control" name="price" placeholder="Price">
                            @endif
                        </div>
                    </div><br/>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Students</label>
                        <div class="col-sm-10">
                            @if(old('student_count'))
                                <input type="text" class="form-control" name="student_count" placeholder="Students" value="{{ old('student_count') }}">
                            @else
                                <input type="text" class="form-control" name="student_count" placeholder="Students">
                            @endif
                        </div>
                    </div><br/>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Lessons</label>
                        <div class="col-sm-10">
                            @if(old('lesson_count'))
                                <input type="text" class="form-control" name="lesson_count" placeholder="Lessons" value="{{ old('lesson_count') }}">
                            @else
                                <input type="text" class="form-control" name="lesson_count" placeholder="Lessons">
                            @endif
                        </div>
                    </div><br/>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Weeks</label>
                        <div class="col-sm-10">
                            @if(old('week_count'))
                                <input type="text" class="form-control" name="week_count" placeholder="Weeks" value="{{ old('week_count') }}">
                            @else
                                <input type="text" class="form-control" name="week_count" placeholder="Weeks">
                            @endif
                        </div>
                    </div><br/>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" name="image">
                        </div>
                    </div><br/>

                    <div class="form-group">
                        <button type="submit" class="btn btn-default" style="margin-left: 75px;">Подтвердить</button>
                    </div><br/>

                    {{ method_field('PUT') }}
                    {{ csrf_field() }}

                </form>

            </div>
        </div>
    </div>
</div>
@stop

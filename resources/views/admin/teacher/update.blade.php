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
                        <a class="status" href="{{ route('admin.teacher.index') }}">
                            {{ session('status-success') }}
                        </a>
                    </div>
                @endif

                <form class="form-horizontal" method="POST" action="{{ route('admin.teacher.update', $teacher->id) }}"
                      enctype="multipart/form-data">

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            @if(old('name'))
                                <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}">
                            @else
                                <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $teacher->name }}">
                            @endif
                        </div>
                    </div><br/>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Position</label>
                        <div class="col-sm-10">
                            @if(old('position'))
                                <input type="text" class="form-control" name="position" placeholder="Position" value="{{ old('position') }}">
                            @else
                                <input type="text" class="form-control" name="position" placeholder="Position" value="{{ $teacher->position }}">
                            @endif
                        </div>
                    </div><br/>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Text</label>
                        <div class="col-sm-10">
                            @if(old('text'))
                                <input type="text" class="form-control" name="text" placeholder="Text" value="{{ old('text') }}">
                            @else
                                <input type="text" class="form-control" name="text" placeholder="Text" value="{{ $teacher->text }}">
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

                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}

                </form>

            </div>
        </div>
    </div>
</div>
@stop

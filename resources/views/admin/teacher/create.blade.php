@extends('layouts.admin')

@section('content')

<div class="layout-content">
    <div class="layout-content-body">
        <div class="doc">
            <!-- START OVERVIEW -->
            <div class="doc-section">
                <h1 id="overview" class="doc-heading">Teachers</h1><br/>

                @if($errors->all())
                    <div class="errors">
                        @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                @if(session('status-success'))
                    <div>
                        <a class="status" href="{{ route('admin.teacher.index') }}">{{ session('status-success') }}</a>
                    </div>
                @endif

                <form class="form-horizontal" method="POST" action="{{ route('admin.teacher.create') }}"
                      enctype="multipart/form-data">

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            @if(old('name'))
                                <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}">
                            @else
                                <input type="text" class="form-control" name="name" placeholder="Name">
                            @endif
                        </div>
                    </div><br/>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Position</label>
                        <div class="col-sm-10">
                            @if(old('position'))
                                <input type="text" class="form-control" name="position" placeholder="Position" value="{{ old('position') }}">
                            @else
                                <input type="text" class="form-control" name="position" placeholder="Position">
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
                        <label class="col-sm-2 control-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" name="image">
                        </div>
                    </div><br/>

                    <div class="form-group">
                        <button type="submit" class="btn btn-default" style="margin-left: 75px;">Send</button>
                    </div><br/>

                    {{ method_field('PUT') }}
                    {{ csrf_field() }}

                </form>

            </div>
        </div>
    </div>
</div>
@stop

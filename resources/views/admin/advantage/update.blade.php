@extends('layouts.admin')

@section('content')

<div class="layout-content">
    <div class="layout-content-body">
        <div class="doc">
            <!-- START OVERVIEW -->
            <div class="doc-section">
                <h1 id="overview" class="doc-heading">Title</h1><br/>

                @if($errors->all())
                    <div class="errors">
                        @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                @if(session('status-success'))
                    <div>
                        <a class="status" href="{{ route('admin.advantage.index') }}">
                            {{ session('status-success') }}
                        </a>
                    </div>
                @endif

                <form class="form-horizontal" method="POST" action="{{ route('admin.advantage.update', $advantage->id) }}">

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-10">
                            @if(old('title'))
                                <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title') }}">
                            @else
                                <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $advantage->title }}">
                            @endif
                        </div>
                    </div><br/>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Icon</label>
                        <div class="col-sm-10">
                            @if(old('icon'))
                                <input type="text" class="form-control" name="icon" placeholder="Icon" value="{{ old('icon') }}">
                            @else
                                <input type="text" class="form-control" name="icon" placeholder="Icon" value="{{ $advantage->icon }}">
                            @endif
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

@extends('layouts.admin')

@section('content')

<div class="layout-content">
    <div class="layout-content-body">
        <div class="doc">
            <!-- START OVERVIEW -->
            <div class="doc-section">
                <h1 id="overview" class="doc-heading">Overview</h1><br/>

                <div class="errors">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>

{{--                <form class="form-horizontal" method="POST" action="{{ route('admin.index') }}">--}}

{{--                    <div class="form-group">--}}
{{--                        <label class="col-sm-2 control-label">Schedule</label>--}}
{{--                        <div class="col-sm-10">--}}
{{--                            @if($errors->has('schedule'))--}}
{{--                                <input type="text" class="form-control" name="schedule" placeholder="Schedule" value="{{ old('schedule') }}">--}}
{{--                            @else--}}
{{--                                <input type="text" class="form-control" name="schedule" placeholder="Schedule" value="{{ $schedule }}">--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div><br/>--}}

{{--                    <div class="form-group">--}}
{{--                        <label class="col-sm-2 control-label">Number</label>--}}
{{--                        <div class="col-sm-10">--}}
{{--                            @if($errors->has('phone'))--}}
{{--                                <input type="text" class="form-control" name="phone" placeholder="Schedule" value="{{ old('phone') }}">--}}
{{--                            @else--}}
{{--                                <input type="text" class="form-control" name="phone" placeholder="Number" value="{{ $number }}">--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div><br/>--}}

{{--                    <div class="form-group">--}}
{{--                        <label class="col-sm-2 control-label">Footer</label>--}}
{{--                        <div class="col-sm-10">--}}
{{--                            @if($errors->has('text'))--}}
{{--                                <input type="text" class="form-control" name="text" placeholder="Footer" value="{{ old('text') }}">--}}
{{--                            @else--}}
{{--                                <input type="text" class="form-control" name="text" placeholder="Footer" value="{{ $footer }}">--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div><br/>--}}

{{--                    <div class="form-group">--}}
{{--                        <button type="submit" class="btn btn-default" style="margin-left: 75px;">Подтвердить</button>--}}
{{--                    </div><br/>--}}

{{--                    {{ method_field('PATCH') }}--}}
{{--                    {{ csrf_field() }}--}}

{{--                </form>--}}

            </div>
        </div><!-- /.doc -->
    </div><!-- /.layout-content-body -->
</div><!-- /.layout-content -->
@stop

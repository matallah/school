@extends('layouts.master')
@section('content')
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div data-original-title="" class="box-header well">
                <h2><i class="glyphicon glyphicon-home"></i> Class Edit</h2>

            </div>
            <div class="box-content">
                @if (isset($class))
                <form role="form" action="/class/update" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id" value="{{$class->id }}">
                    <div class="form-group">
                        <label for="name">الاسم</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                            <input type="text" class="form-control" required name="name" value="{{$class->name}}"
                                   placeholder="الفصل">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">الوصف</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign blue"></i></span>
                            <textarea type="text" class="form-control" required name="description"
                                      placeholder="وصف الفصل">{{$class->description}}</textarea>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="form-group">
                        <button class="btn btn-primary pull-right" type="submit"><i
                                    class="glyphicon glyphicon-check"></i>تعديل
                        </button>
                        <br>
                    </div>
                </form>
                @else
                <div class="alert alert-danger">
                    <strong>Whoops!</strong>There is no such Class!<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

            </div>
        </div>
    </div>
</div>
@stop

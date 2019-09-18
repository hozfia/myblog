@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.postcrudmodel.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.postcrudmodels.store") }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            <label for="title">{{ trans('cruds.postcrudmodel.fields.title') }}*</label>
                            <input type="text" id="title" name="title" class="form-control" value="{{ old('title', isset($postcrudmodel) ? $postcrudmodel->title : '') }}" required>
                            @if($errors->has('title'))
                                <p class="help-block">
                                    {{ $errors->first('title') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.postcrudmodel.fields.title_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                            <label for="body">{{ trans('cruds.postcrudmodel.fields.body') }}*</label>
                            <input type="text" id="body" name="body" class="form-control" value="{{ old('body', isset($postcrudmodel) ? $postcrudmodel->body : '') }}" required>
                            @if($errors->has('body'))
                                <p class="help-block">
                                    {{ $errors->first('body') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.postcrudmodel.fields.body_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('user') ? 'has-error' : '' }}">
                            <label for="user">{{ trans('cruds.postcrudmodel.fields.user') }}*</label>
                            <input type="text" id="user" name="user" class="form-control" value="{{ old('user', isset($postcrudmodel) ? $postcrudmodel->user : '') }}" required>
                            @if($errors->has('user'))
                                <p class="help-block">
                                    {{ $errors->first('user') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.postcrudmodel.fields.user_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('pic_name') ? 'has-error' : '' }}">
                            <label for="pic_name">{{ trans('cruds.postcrudmodel.fields.pic_name') }}</label>
                            <input type="text" id="pic_name" name="pic_name" class="form-control" value="{{ old('pic_name', isset($postcrudmodel) ? $postcrudmodel->pic_name : '') }}">
                            @if($errors->has('pic_name'))
                                <p class="help-block">
                                    {{ $errors->first('pic_name') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.postcrudmodel.fields.pic_name_helper') }}
                            </p>
                        </div>
                        <div>
                            <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                        </div>
                    </form>


                </div>
            </div>

        </div>
    </div>
</div>
@endsection
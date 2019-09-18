@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.postcrudmodel.title') }}
                </div>
                <div class="panel-body">

                    <div class="form-group">
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.postcrudmodel.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $postcrudmodel->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.postcrudmodel.fields.title') }}
                                    </th>
                                    <td>
                                        {{ $postcrudmodel->title }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.postcrudmodel.fields.body') }}
                                    </th>
                                    <td>
                                        {{ $postcrudmodel->body }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.postcrudmodel.fields.user') }}
                                    </th>
                                    <td>
                                        {{ $postcrudmodel->user }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.postcrudmodel.fields.pic_name') }}
                                    </th>
                                    <td>
                                        {{ $postcrudmodel->pic_name }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                            {{ trans('global.back_to_list') }}
                        </a>
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>
@endsection
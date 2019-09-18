<?php

namespace App\Http\Requests;

use App\Postcrudmodel;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPostcrudmodelRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('postcrudmodel_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:postcrudmodels,id',
        ];
    }
}

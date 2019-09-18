<?php

namespace App\Http\Requests;

use App\Postcrudmodel;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdatePostcrudmodelRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('postcrudmodel_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'title' => [
                'min:20',
                'max:30',
                'required',
            ],
            'body'  => [
                'required',
            ],
            'user'  => [
                'required',
            ],
        ];
    }
}

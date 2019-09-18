<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostcrudmodelRequest;
use App\Http\Requests\UpdatePostcrudmodelRequest;
use App\Http\Resources\Admin\PostcrudmodelResource;
use App\Postcrudmodel;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostcrudmodelApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('postcrudmodel_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PostcrudmodelResource(Postcrudmodel::all());
    }

    public function store(StorePostcrudmodelRequest $request)
    {
        $postcrudmodel = Postcrudmodel::create($request->all());

        return (new PostcrudmodelResource($postcrudmodel))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Postcrudmodel $postcrudmodel)
    {
        abort_if(Gate::denies('postcrudmodel_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PostcrudmodelResource($postcrudmodel);
    }

    public function update(UpdatePostcrudmodelRequest $request, Postcrudmodel $postcrudmodel)
    {
        $postcrudmodel->update($request->all());

        return (new PostcrudmodelResource($postcrudmodel))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Postcrudmodel $postcrudmodel)
    {
        abort_if(Gate::denies('postcrudmodel_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $postcrudmodel->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

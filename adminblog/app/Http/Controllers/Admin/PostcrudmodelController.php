<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPostcrudmodelRequest;
use App\Http\Requests\StorePostcrudmodelRequest;
use App\Http\Requests\UpdatePostcrudmodelRequest;
use App\Postcrudmodel;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostcrudmodelController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('postcrudmodel_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $postcrudmodels = Postcrudmodel::all();

        return view('admin.postcrudmodels.index', compact('postcrudmodels'));
    }

    public function create()
    {
        abort_if(Gate::denies('postcrudmodel_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.postcrudmodels.create');
    }

    public function store(StorePostcrudmodelRequest $request)
    {
        $postcrudmodel = Postcrudmodel::create($request->all());

        return redirect()->route('admin.postcrudmodels.index');
    }

    public function edit(Postcrudmodel $postcrudmodel)
    {
        abort_if(Gate::denies('postcrudmodel_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.postcrudmodels.edit', compact('postcrudmodel'));
    }

    public function update(UpdatePostcrudmodelRequest $request, Postcrudmodel $postcrudmodel)
    {
        $postcrudmodel->update($request->all());

        return redirect()->route('admin.postcrudmodels.index');
    }

    public function show(Postcrudmodel $postcrudmodel)
    {
        abort_if(Gate::denies('postcrudmodel_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.postcrudmodels.show', compact('postcrudmodel'));
    }

    public function destroy(Postcrudmodel $postcrudmodel)
    {
        abort_if(Gate::denies('postcrudmodel_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $postcrudmodel->delete();

        return back();
    }

    public function massDestroy(MassDestroyPostcrudmodelRequest $request)
    {
        Postcrudmodel::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

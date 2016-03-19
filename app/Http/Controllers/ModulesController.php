<?php

namespace App\Http\Controllers;

use App\Module;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

use App\Http\Requests;

class ModulesController extends Controller
{
    public $base;

    public function __construct(BaseRepository $baseRepository)
    {
        $this->base = $baseRepository;

        parent::__construct();
    }

    public function index()
    {
        $modules = Module::orderBy('name')->get();

        return view('modules.index',compact('modules'));
    }

    public function create()
    {
        return view('modules.create');
    }

    public function store(Request $request)
    {
        Module::create($request->all());

        return redirect('/modules');
    }

    public function edit($id)
    {
        $module = $this->base->getByModuleId($id);

        return view('modules.edit', compact('module'));
    }

    public function update(Request $request, $id)
    {
        $module = $this->base->getByModuleId($id);
        $module->update($request->all());

        return redirect('/modules');
    }

    public function destroy($id)
    {
        $module = $this->base->getByModuleId($id);
        $module->delete();

        return back();
    }
}

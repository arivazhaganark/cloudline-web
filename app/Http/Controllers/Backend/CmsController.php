<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\CmsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Cms;
use Creitive\Breadcrumbs\Breadcrumbs;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Request;
use function redirect;
use function view;

class CmsController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index(CmsDataTable $dataTable) {
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->setListElement('breadcrumb-item');
        $data['breadcrumbs']->addCrumb('Home', 'admin');
        $data['breadcrumbs']->addCrumb('Cms', 'cms');
        $data['breadcrumbs']->setDivider('');
        return $dataTable->render('admin.cms.index', $data);
    }

    public function create() {
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->setListElement('breadcrumb-item');
        $data['breadcrumbs']->addCrumb('Home', 'admin');
        $data['breadcrumbs']->addCrumb('Cms', 'cms');
        $data['breadcrumbs']->addCrumb('Create', '');
        $data['breadcrumbs']->setDivider('');
        return view('admin.cms.create', $data);
    }

    public function store(Request $request) {
        $this->_validate($request);
        $model = new Cms();
        $data = $request->except(['_token']);
        $model->fill($data);
        $model->save();

        return redirect('admin/cms')->with('alert-success', 'successfully Created!');
    }

    protected function _validate($request) {
        $rules = [
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
        ];
        $this->validate($request, $rules);
    }
    
    public function edit($id) {
        $data['Cms'] = Cms::find($id);
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->setListElement('breadcrumb-item');
        $data['breadcrumbs']->addCrumb('Home', 'admin');
        $data['breadcrumbs']->addCrumb('Cms', 'cms');
        $data['breadcrumbs']->addCrumb('Edit Page', '');
        $data['breadcrumbs']->setDivider('');

        return view('admin.cms.edit', $data);
    }
    
    public function update(Request $request, $id) {
        $this->_validate($request);

        $model = Cms::find($id);
        $data = $request->except(['_token']);
        $model->fill($data);
        $model->save();

        return redirect('admin/cms')->with('alert-success', 'successfully updated!');
    }
    
    public function destroy($id) {
        $model = Cms::find($id)->delete();
        redirect('admin/cms')->with('alert-success', 'successfully deleted!');
    }

}

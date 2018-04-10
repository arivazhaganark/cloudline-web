<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\ProductDataTable;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Creitive\Breadcrumbs\Breadcrumbs;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Request;
use function redirect;
use function view;

class ProductController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index(ProductDataTable $dataTable) {
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->setListElement('breadcrumb-item');
        $data['breadcrumbs']->addCrumb('Home', 'admin');
        $data['breadcrumbs']->addCrumb('Products', 'products');
        $data['breadcrumbs']->setDivider('');
        return $dataTable->render('admin.products.index', $data);
    }

    public function create() {
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->setListElement('breadcrumb-item');
        $data['breadcrumbs']->addCrumb('Home', 'admin');
        $data['breadcrumbs']->addCrumb('Products', 'products');
        $data['breadcrumbs']->addCrumb('Create', '');
        $data['breadcrumbs']->setDivider('');
        return view('admin.products.create', $data);
    }

    public function store(Request $request) {
        $this->_validate($request);
        $model = new Product();
        $data = $request->except(['_token']);
        if ($request->icon) {
            $data['icon'] = Storage::disk('public')->putFile('uploads', $request->icon);
        }
        $model->fill($data);
        $model->save();

        return redirect('admin/products')->with('alert-success', 'successfully Created!');
    }

    protected function _validate($request) {
        $rules = [
            'title' => 'required',
            'description' => 'required',
        ];
        $this->validate($request, $rules);
    }

    public function edit($id) {
        $data['Products'] = Product::find($id);
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->setListElement('breadcrumb-item');
        $data['breadcrumbs']->addCrumb('Home', 'admin');
        $data['breadcrumbs']->addCrumb('Products', 'products');
        $data['breadcrumbs']->addCrumb('Edit Page', '');
        $data['breadcrumbs']->setDivider('');

        return view('admin.products.edit', $data);
    }

    public function update(Request $request, $id) {
        $this->_validate($request);

        $model = Product::find($id);
        $data = $request->except(['_token']);
        if ($request->icon) {
            $data['icon'] = Storage::disk('public')->putFile('uploads', $request->icon);
        }
        $model->fill($data);
        $model->save();

        return redirect('admin/products')->with('alert-success', 'successfully updated!');
    }

    public function destroy($id) {
        $model = Product::find($id)->delete();
        redirect('admin/products')->with('alert-success', 'successfully deleted!');
    }

}

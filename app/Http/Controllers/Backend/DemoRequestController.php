<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\DemoRequestDataTable;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\DemoRequest;
use Creitive\Breadcrumbs\Breadcrumbs;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use function view;

class DemoRequestController extends Controller {

    /**
     * Display a listing of the membership.
     *
     * @return Response
     */
    public function index(DemoRequestDataTable $dataTable) {
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->setListElement('breadcrumb-item');
        $data['breadcrumbs']->addCrumb('Home', 'admin');
        $data['breadcrumbs']->addCrumb('Demo Requests', '');
        $data['breadcrumbs']->setDivider('');
        return $dataTable->render('admin.demorequest.index', $data);
    }

    /**
     * Display the specified membership.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $view['data'] = Customer::find($id);
        $view['Demos'] = $view['data']->demorequests;
        $view['breadcrumbs'] = new Breadcrumbs;
        $view['breadcrumbs']->setListElement('breadcrumb-item');
        $view['breadcrumbs']->addCrumb('Home', 'admin');
        $view['breadcrumbs']->addCrumb('Demo Request', 'demorequests');
        $view['breadcrumbs']->addCrumb('View', '');
        $view['breadcrumbs']->setDivider('');
        return view('admin.demorequest.view', $view);
    }

    /**
     * Show the form for editing the specified membership.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified membership in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified membership from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //        
    }

}

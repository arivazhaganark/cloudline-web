<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\ContactUsDataTable;
use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Creitive\Breadcrumbs\Breadcrumbs;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use function redirect;
use function view;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the membership.
     *
     * @return Response
     */
    public function index(ContactUsDataTable $dataTable)
    {
        $data['breadcrumbs'] = new Breadcrumbs;
        $data['breadcrumbs']->setListElement('breadcrumb-item');
        $data['breadcrumbs']->addCrumb('Home', 'admin');
        $data['breadcrumbs']->addCrumb('Contact Us', '');
        $data['breadcrumbs']->setDivider('>');
        return $dataTable->render('admin.contactus.index',$data);
    }

    /**
     * Display the specified membership.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $contact['data'] = ContactUs::find($id);
        $contact['breadcrumbs'] = new Breadcrumbs;
        $contact['breadcrumbs']->setListElement('breadcrumb-item');
        $contact['breadcrumbs']->addCrumb('Home', 'admin');
        $contact['breadcrumbs']->addCrumb('Contact Us', 'contactus');
        $contact['breadcrumbs']->addCrumb('View', '');
        $contact['breadcrumbs']->setDivider('>');
        return view('admin.contactus.view',$contact);
    }

    /**
     * Show the form for editing the specified membership.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified membership in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
       //
    }

    /**
     * Remove the specified membership from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $model = ContactUs::find($id)->delete();
        
        redirect('admin/contactus')->with('alert-success', 'successfully deleted!');
    }
}

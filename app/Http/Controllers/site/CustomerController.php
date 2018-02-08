<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use function redirect;
use function view;

class CustomerController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    
    public function ruser()
    {
         $data['Model'] = new Customer();
         
        return view('site.customer.ruser',$data);
    }
    
    public function rstore(Request $request) {
        $this->_validate($request);

        $model = new Customer();
        $model->fill($request->except(['_token']));
        $model->save();

        return redirect()->to('registerusers')->with('message', 'Thanks for Registration!');
    }

    public function index()
    {
        return view('site.customer.index');
    }
    
     protected function _validate($request, $id = null) {
        $rules = [
            'name' => 'required',
            'company_name' => 'required',
            'email' => "required|email",
            'phone' => 'required',
        ];
        $this->validate($request, $rules);
    }
}

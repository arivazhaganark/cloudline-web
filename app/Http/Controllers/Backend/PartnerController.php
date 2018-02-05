<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Request;
use function view;

class PartnerController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index() {
        return view('admin.partner.index');
    }

    protected function _append_form_variables(&$data)
    {
        $data['types'] = Partner::$types;
        $data['focus'] = Partner::$focuses;
    }

    public function create() {
        $data['Model'] = new Partner();
        $this->_append_form_variables($data);

        return view('admin.partner.create', $data);
    }

    public function store(Request $request) {
        $this->_validate($request);

        $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'role' => 'P',
        ]);
        $data = $request->except(['_token','name','email','password']);
        $data['user_id'] = $user->id;

        Partner::create($data);

        return redirect()->to('backend/partners')->with('message', 'Thanks for Registration!');
    }

    public function edit($id)
    {
        $data['Model'] = Partner::find($id);
        $this->_append_form_variables($data);
        return view('admin.partner.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $this->_validate($request, $id);
        $model = Partner::find($id);

        return redirect('backend/partners')->with('alert-success', 'News was successful updated!');
    }

    protected function _validate($request, $id = null)
    {
        $rules = [
            'partner_type' => 'required',
            'company_name' => 'required',
            'name' => 'required',
            'email'  => "required|email|unique:users,email,{$id},id",
            'phone' => 'required',
            'address' => 'required',
            'state' => 'required',
            'years_business' => 'required',
            'no_of_sales' => 'required',
            'no_of_technical' => 'required',
            'annual_revenue' => 'required',
            'sales_territory' => 'required',
            'current_focus' => 'required',
            'products_offered' => 'required',
            'brands_deal' => 'required',
        ];
        if(!$id){
            $rules['password'] = 'required';
        }
        $this->validate($request,$rules);
    }

}

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

    public function create() {
        $partner_types = Partner::$types;
        $current_focuses = Partner::$focuses;
        return view('admin.partner.create', compact('partner_types', 'current_focuses'));
    }

    public function store(Request $request) {
        $request->validate([
            'partner_type' => 'required',
            'company_name' => 'required',
            'name' => 'required',
            'email' => 'required|email',
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
        ]);

        $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $request->password,
                    'role' => 'P',
        ]);
        $data = $request->except(['_token','name','email','password']);
        $data['user_id']=$user->id;
        $data['partner_type']='G';

        $partners = Partner::create($data);

        return redirect()->to('backend/partners')
                        ->with('message', 'Thanks for Registration!');
    }

}

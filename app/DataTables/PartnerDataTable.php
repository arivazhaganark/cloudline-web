<?php

namespace App\DataTables;

use App\Models\Partner;
use Yajra\DataTables\Services\DataTable;

class PartnerDataTable extends DataTable {

    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query) {
        return datatables($query)
                        ->addColumn('name', function ($partner) {
                            return $partner->user->name;
                        })
                        ->addColumn('email', function ($partner) {
                            return $partner->user->email;
                        })
                        ->addColumn('register_users', function ($partner) {
                            $count = $partner->customers()->rusers()->count();
                            return "<a href='" . url('admin/registerusers/') . "?pid={$partner->user_id}' class='label label-primary'>{$count}</a>";
                        })
                        ->addColumn('customers', function ($partner) {
                            $count = $partner->customers()->cusers()->count();
                            return "<a href='" . url('admin/customers/') . "?pid={$partner->user_id}' class='label label-primary'>{$count}</a>";
                        })
                        ->addColumn('action', function ($query) {
                            $action = '<a href="' . url('admin/partners/' . $query->id . '/edit') . '" class="btn btn-sm btn-warning btn-edit" type="button"><i class="la la-edit"></i> Edit</a>&nbsp;';
                            $action .= ' <button class="btn btn-sm btn-danger btn-delete" type="button" data-id="' . $query->id . '" data-model="partners" data-loading-text="<i class=\'fa fa-spin fa-spinner\'></i> Please Wait..."><i class="la la-trash"></i> Delete</a>';
                            return $action;
                        })
                        ->editColumn('partner_type', function ($type) {
                            return $type->partner_type();
                        })
                        ->filterColumn('partner_type', function($query, $keyword) {
                            $query->whereRaw("(CASE WHEN partner_type = 'G' THEN 'Gold' WHEN partner_type = 'S' THEN 'Silver' ELSE 'Express' END) like ?", ["%{$keyword}%"]);
                        })
                        ->rawColumns(['register_users', 'customers', 'action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Partner $model) {

        $Query = $model->with('user')->select('partners.*')->orderBy('partners.updated_at', 'desc');

//        if (!\Auth::user()->isAdmin) {
//            $Query->where('partners.user_id', '=', \Auth::user()->id)->orderBy('updated_at', 'desc');
//        }

        return $Query;
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html() {
        return $this->builder()
                        ->columns($this->getColumns())
                        ->minifiedAjax()
                        ->addAction(['width' => '250px'])
                        ->parameters([
                            'dom' => 'Bfrtip',
                            'buttons' => ['create'],
                            'select' => true,
                            'initComplete' => 'function () {
        var r = $("#datatable-buttons tfoot tr");
        $("#datatable-buttons thead") . append(r);
        this.api().columns([0,1,2,3,6]).every(function () {
        var column = this;        
        var input = document . createElement("input");
        $(input).addClass("form-control input-lg col-xs-12");
        $(input).appendTo($(column.footer()).empty())
        .on("change", function () {

            column.search($(this).val(), false, false, true).draw();
        });
        });
        }'
        ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns() {
        return [
            'partner_type',
            'company_name',
            'name' => ['name' => 'user.name'],
            'email' => ['name' => 'user.email'],
            'register_users',
            'customers',
            'phone',
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename() {
        return 'partnersdatatable_' . time();
    }

}

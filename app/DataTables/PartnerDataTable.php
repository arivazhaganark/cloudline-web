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
                        ->addColumn('status', function ($status) {
                            if ($status->confirmation_code == null && $status->status == null) {
                                $action = '<button class="btn btn-sm btn-success" id="btn-ok" type="button" data-id="' . $status->id . '" data-model="partners"><i class="glyphicon glyphicon-ok"></i></button>&nbsp;';
                                $action .= '<button class="btn btn-sm btn-danger" id="btn-remove" type="button"  data-id="' . $status->id . '" data-model="partner"><i class="glyphicon glyphicon-remove"></i></button>&nbsp;';
                                return $action;
                            } elseif ($status->confirmation_code == null && $status->status == 1) {
                                $action = "<span class='label label-default'>Approved</span>&nbsp;";
                                $action .= '<button class="label label-danger" id="btn-remove" type="button"  data-id="' . $status->id . '" data-model="partner">Declined</button>&nbsp;';
                                return $action;
                            } elseif ($status->confirmation_code == null && $status->status == 2) {
                                $action = "<span class='label label-default'>Declined</span>&nbsp;";
                                $action .= '<button class="label label-success" id="btn-ok" type="button" data-id="' . $status->id . '" data-model="partners">Approved</button>&nbsp;';
                                return $action;
                            } else {
                                return '<span class="label label-default">NOT VERIFIED</span>';
                            }
                        })
                        ->addColumn('action', function ($query) {
                            $action = '<a href="' . url('admin/partners/' . $query->id . '/edit') . '" class="btn btn-sm btn-warning btn-edit" type="button"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;';
                            $action .= ' <button class="btn btn-sm btn-danger btn-delete" type="button" data-id="' . $query->id . '" data-model="partners" data-loading-text="<i class=\'fa fa-spin fa-spinner\'></i> Please Wait..."><i class="glyphicon glyphicon-trash"></i></a>';

                            return $action;
                        })
                        ->editColumn('partner_type', function ($type) {
                            if ($type->partner_type == 'G') {
                                return "Gold";
                            } elseif ($type->partner_type == 'S') {
                                return "Silver";
                            } else {
                                return "Express";
                            }
                        })
                        ->filterColumn('partner_type', function($query, $keyword) {
                            $query->whereRaw("(CASE WHEN partner_type = 'G' THEN 'Gold' WHEN partner_type = 'S' THEN 'Silver' ELSE 'Express' END) like ?", ["%{$keyword}%"]);
                        })
                        ->rawColumns(['register_users', 'customers', 'status', 'action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Partner $model) {

        $Query = $model->select(['partners.*'])->with('user')->leftJoin('users', 'users.id', '=', 'partners.user_id');
        $Query->orderBy('updated_at', 'desc');

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
//                            'dom' => 'Bfrtip',
//                            'buttons' => [['extend' => 'create', 'className' => 'btn btn-success', 'text' => 'Create Partner', 'init' => 'function(api, node, config) {
//       $(node).removeClass("dt-button buttons-create btn-default")
//    }']],
                            'select' => true,
                            'initComplete' => 'function () {
        var r = $("#datatable-buttons tfoot tr");
        $("#datatable-buttons thead") . append(r);
        this.api().columns([0,1,2,3]).every(function () {
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
            'status' => ['title' => 'Approve/Decline'],
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

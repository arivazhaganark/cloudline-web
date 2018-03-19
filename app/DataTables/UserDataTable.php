<?php

namespace App\DataTables;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Builder as Builder2;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTableAbstract;
use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\Services\DataTable;
use function datatables;
use function request;
use function url;

class UserDataTable extends DataTable {

    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return DataTableAbstract
     */
    public function dataTable($query) {
        return datatables($query)
                        ->addColumn('demo_request_status', function ($customer) {
                            $count = $customer->demorequests()->count();
                            return $count ? "Requested" : '<a href="' . url('demorequest/' . $customer->access_token) . '" class="btn btn-sm btn-success" type="button"> Demo Request Form </a>';
                        })
                        ->addColumn('type', function($type) {
                            if ($type->status == 1) {
                                return "Register User";
                            } elseif ($type->status == 2) {
                                return "Customer";
                            }
                        })
                        ->addColumn('action', function ($query) {
                            $action = '<a href="' . url('partner/registerusers/' . $query->id) . '" class="btn btn-sm btn-secondary" type="button"><i class="ion-eye"></i></a>&nbsp;';
                            $action .= '<a href="' . url('partner/registerusers/' . $query->id . '/edit') . '" class="btn btn-sm btn-warning btn-edit" type="button"><i class="far fa-edit"></i></a>&nbsp;';
                            $action .= ' <button class="btn btn-sm btn-danger btn-delete" type="button" data-id="' . $query->id . '" data-model="registerusers" data-toggle="tooltip" data-placement="top" data-loading-text="<i class=\'fa fa-spin fa-spinner\'></i> Please Wait..."><i class="ion-trash-a"></i></a>';
                            return $action;
                        })
                        ->rawColumns(['demo_request_status', 'type', 'action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return Builder2
     */
    public function query(Customer $model) {
        $Query = $model->newQuery();
//        $pid = @request()->pid;
        $Query->where('customers.created_by', '=', \Auth::user()->id);
//        if ($pid) {
//            $cid = ($pid) ?: Auth::user()->id;
//            $Query->where('created_by', $cid);
//        }
        return $Query;
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return Builder
     */
    public function html() {
        $table = $this->builder()
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
        return $table;
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns() {
        return $columns = [
            'name',
            'type',
            'email',
            'phone',
            'demo_request_status'];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename() {
        return 'usersdatatable_' . time();
    }

}

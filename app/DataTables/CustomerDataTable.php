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

class CustomerDataTable extends DataTable {

    public $rUsersOnly = false;
    public $CUserOnly = false;

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
                            return $count ? "Requested" : "Not Requested";
                        })
                        ->addColumn('action', function ($query) {
                            $action = '<a href="' . url('backend/demorequest/' . $query->id) . '" class="btn btn-sm btn-default" type="button"><i class="la la-eye"></i> View </a>&nbsp;';
                            $action .= '<a href="' . url('backend/registerusers/' . $query->id . '/edit') . '" class="btn btn-sm btn-warning btn-edit" type="button"><i class="la la-edit"></i> Edit</a>&nbsp;';
                            $action .= ' <button class="btn btn-sm btn-danger btn-delete" type="button" data-id="' . $query->id . '" data-model="registerusers" data-loading-text="<i class=\'fa fa-spin fa-spinner\'></i> Please Wait..."><i class="la la-trash"></i> Delete</a>';
                            return $action;
                        })
                        ->addColumn('upgrade_to_customer', function ($customer) {
                            $action = '<a href="' . url('backend/upgrade_customer/' . $customer->id) . '" class="btn btn-sm btn-primary" type="button"> Upgrade to Customer </a>&nbsp;';
                            return $action;
                        })
                        ->rawColumns(['upgrade_to_customer', 'view', 'action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return Builder2
     */
    public function query(Customer $model) {
        $Query = $model->newQuery();
        $pid = @request()->pid;
        if (!Auth::user()->isAdmin || $pid) {
            $cid = ($pid) ?: Auth::user()->id;
            $Query->where('created_by', $cid);
        }
        if ($this->rUsersOnly) {
            $Query->rusers();
        }

        if ($this->CUserOnly) {
            $Query->cusers();
        }
        return $Query;
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return Builder
     */
    public function html() {
        return $this->builder()
                        ->columns($this->getColumns())
                        ->minifiedAjax()
                        ->addAction(['width' => '250px'])
                        ->parameters($this->getBuilderParameters());
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns() {
        $columns = [
            'name',
            'company_name',
            'email',
            'phone',
            'demo_request_status'];
        if ($this->rUsersOnly) {
            $columns[] = 'upgrade_to_customer';
        }
        return $columns;
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename() {
        return 'customersdatatable_' . time();
    }

}

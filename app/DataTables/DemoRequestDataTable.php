<?php

namespace App\DataTables;

use App\Models\Customer;
use Yajra\DataTables\Services\DataTable;

class DemoRequestDataTable extends DataTable {

    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query) {
        return datatables($query)
                        ->addColumn('status', function ($status) {
                            return $status->display_type();
                        })
                        ->addColumn('action', function ($query) {
                            $action = '<a href="' . url('admin/demorequests/' . $query->id) . '" class="btn btn-sm btn-default" type="button"><i class="glyphicon glyphicon-eye-open"></i></a>&nbsp;';
                            return $action;
                        });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Customer $model) {
        $Query = $model->newQuery();
        $Query->select('customers.*')->join('demorequests', 'customers.id', '=', 'demorequests.customer_id')
                ->where('status', '=', 1)
                ->orWhere('status', '=', 2)
                ->orderBy('updated_at', 'desc')->get();
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
                        ->parameters(['printable' => false]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns() {
        return [
            'name',
            'email',
            'phone',
            'status' => ['title' => 'Type'],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename() {
        return 'demorequestsdatatable_' . time();
    }

}

<?php

namespace App\DataTables;

use App\Models\ContactUs;
use Yajra\DataTables\Services\DataTable;

class ContactUsDataTable extends DataTable {

    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query) {
        return datatables($query)
                        ->addColumn('action', function ($query) {
                            $action = '<a href="' . url('admin/contactus/' . $query->id) . '" class="btn btn-sm btn-default" type="button"><i class="glyphicon glyphicon-eye-open"></i></a>&nbsp;';
                            $action .= ' <button class="btn btn-sm btn-danger btn-delete" type="button" data-id="' . $query->id . '" data-model="contactus" data-loading-text="<i class=\'fa fa-spin fa-spinner\'></i> Please Wait..."><i class="glyphicon glyphicon-trash"></i></a>';
                            return $action;
                        });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ContactUs $model) {

        $Query = $model->newQuery();

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
//                            'buttons' => ['export'],
                            'select' => true,
                            'initComplete' => 'function () {
        var r = $("#datatable-buttons tfoot tr");
        $("#datatable-buttons thead") . append(r);
        this.api().columns().every(function () {
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
            'name',
            'email',
            'phone',
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename() {
        return 'contactusesdatatable_' . time();
    }

}

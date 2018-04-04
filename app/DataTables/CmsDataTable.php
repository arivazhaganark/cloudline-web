<?php

namespace App\DataTables;

use App\Models\Cms;
use Illuminate\Database\Eloquent\Builder as Builder2;
use Yajra\DataTables\DataTableAbstract;
use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\Services\DataTable;
use function datatables;
use function url;

class CmsDataTable extends DataTable {

    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return DataTableAbstract
     */
    public function dataTable($query) {
        return datatables($query)
                        ->addColumn('action', function ($query) {
                            $action = '<a target="_blank" href="' . url($query->slug) . '" class="btn btn-sm btn-default" type="button"><i class="glyphicon glyphicon-eye-open"></i> View</a>&nbsp;';
                            $action .= '<a href="' . url('admin/cms/' . $query->id . '/edit') . '" class="btn btn-sm btn-warning btn-edit" type="button"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
                            $action .= ' <button class="btn btn-sm btn-danger btn-delete" type="button" data-id="' . $query->id . '" data-model="cms" data-loading-text="<i class=\'fa fa-spin fa-spinner\'></i> Please Wait..."><i class="glyphicon glyphicon-trash"></i> Delete</a>';
                            return $action;
                        });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return Builder2
     */
    public function query(Cms $model) {
        return $model->newQuery();
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
                        ->parameters([
                'dom' => 'Bfrtip',
                'buttons' => [['extend' => 'create', 'className' => 'btn btn-success', 'text' => 'Create', 'init' => 'function(api, node, config) {
       $(node).removeClass("dt-button buttons-create btn-default")
    }']]]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns() {
        return [
            'title',
            'slug',
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename() {
        return 'cmsdatatable_' . time();
    }

}

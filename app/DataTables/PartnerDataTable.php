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
                        ->addColumn('action', function ($query) {
                            $action = '<a href="' . url('backend/partners/' . $query->id . '/edit') . '" class="btn btn-sm btn-warning btn-edit" type="button"><i class="la la-edit"></i> Edit</a>&nbsp;';
                            $action .= ' <button class="btn btn-sm btn-danger btn-delete" type="button" data-id="' . $query->id . '" data-model="partners" data-loading-text="<i class=\'fa fa-spin fa-spinner\'></i> Please Wait..."><i class="la la-trash"></i> Delete</a>';
                            return $action;
                        });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Partner $model) {
        return $model->newQuery()->join('users','partners.user_id','=','users.id')
                ->select(['partners.id','partners.partner_type', 'partners.company_name','users.name', 'users.email', 'partners.phone', 'partners.annual_revenue','partners.current_focus']);
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
                        ->parameters($this->getBuilderParameters());
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
            'name',
            'email',
            'phone',
            'annual_revenue',
            'current_focus',
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

@extends('admin.layouts.app')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Customers</h3>
                    <div class="box-body">
                        {!! $dataTable->table(['class' => 'table table-striped table-bordered', 'id' => 'datatable-buttons']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@include('admin.partials.datatable_scripts')
@push('scripts')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('/vendor/datatables/buttons.server-side.js') }}"></script>
{!! $dataTable->scripts() !!}

<script type="text/javascript">
    $(document).ready(function () {
        $('body').on('click', '.btn-delete', function () {
            var conf = confirm('Are you sure to delete ?');
            if (conf) {
                $this = $(this);
                $.ajax({
                    method: 'DELETE',
                    url: '/admin/' + $this.data('model') + '/' + $this.data('id'),
                    beforeSend: function () {
                        $this.button('loading')
                    },
                    complete: function () {
                        $this.button('reset')
                    },
                    success: function () {
                        $('#datatable-buttons').DataTable().draw(false);
                    },
                    error: function () {
                        alert('Failed');
                    }
                });
            }
        });
    });
</script>
@endpush
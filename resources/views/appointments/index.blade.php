@extends('layouts.master')

@section('title')
    Events List
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Events List</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <button onclick="addForm('{{ route('events.store') }}')" class="btn btn-success btn-flat"><i class="fa fa-plus-circle"></i> Add New Event</button>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-stiped table-bordered table-hover">
                    <thead>
                        <th width="5%">#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th width="15%"><i class="fa fa-cog"></i></th>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- visit "codeastro" for more projects! -->

@includeIf('events.form')
@endsection

@push('scripts')
<script>
    let table;

    $(function () {
        table = $('.table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            autoWidth: false,
            ajax: {
                url: '{{ route('events.data') }}',
            },
            columns: [
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'event_name'},
                {data: 'description'},
                {data: 'image'},
                {data: 'event_status',
                render: function (data, type, row) {
                if (data === 0) {
                    return '<span style="color: red;">pending</span>';
                } else {
                    return '<span style="color: green;">Active</span>';
                }
                }},
                {data: 'action', searchable: false, sortable: false},
            ]
        });

        $('#modal-form').validator().on('submit', function (e) {
            if (! e.preventDefault()) {
                $.post($('#modal-form form').attr('action'), $('#modal-form form').serialize())
                    .done((response) => {
                        $('#modal-form').modal('hide');
                        table.ajax.reload();
                    })
                    .fail((errors) => {
                        alert('Unable to save data');
                        return;
                    });
            }
        });
    });

    function addForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Add Event');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('post');
        $('#modal-form [name=event_name]').focus();
        $('#modal-form [name=description]').focus();
        $('#modal-form [name=event_status]').focus();
        $('#modal-form [name=image]').focus();
    }

    function editForm(url) {
        $('#modal-form').modal('show');
        $('#modal-form .modal-title').text('Edit Category');

        $('#modal-form form')[0].reset();
        $('#modal-form form').attr('action', url);
        $('#modal-form [name=_method]').val('put');
        $('#modal-form [name=event_name]').focus();
        $('#modal-form [name=description]').focus();
        $('#modal-form [name=event_status]').focus();
        $('#modal-form [name=image]').focus();

        $.get(url)
            .done((response) => {
                $('#modal-form [name=event_name]').val(response.event_name);
                $('#modal-form [name=description]').val(response.description);
                $('#modal-form [name=event_status]').val(response.event_status);
                $('#modal-form [name=image]').val(response.image);
                $('.tampil-logo').html(`<img src="{{ url('/') }}${response.image}" width="200">`);

            })
            .fail((errors) => {
                alert('Unable to display data');
                return;
            });
    }

    function deleteData(url) {
        if (confirm('Are you sure you want to delete selected data?')) {
            $.post(url, {
                    '_token': $('[name=csrf-token]').attr('content'),
                    '_method': 'delete'
                })
                .done((response) => {
                    table.ajax.reload();
                })
                .fail((errors) => {
                    alert('Cannot delete data');
                    return;
                });
        }
    }
</script>
@endpush
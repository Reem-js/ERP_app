@extends('layouts.app', ['activePage' => 'all-suppliers', 'titlePage' => __('translation.website.sidebar.Suppliers')])
@push('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-mode">
                        <div class="card-header card-header-text card-header-primary">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.all Suppliers') }}</h4>
                            </div>
                        </div>
                        @include('messages.print-crud-message')
                        <div class="card-body">
                            <div class="col-lg-12 text-right">
                                <a href="{{ route('suppliers.create') }}" rel="tooltip"
                                    title="{{ __('translation.title.create Supplier') }}"
                                    class="btn btn-primary btn-round mb-3"><i class="fa fa-plus-circle"
                                        aria-hidden="true"></i>
                                    {{ __('translation.website.crud.create') }}</a>
                            </div>
                            <table class="table" id="data-table">
                                <thead>
                                    <tr>
                                        <th class="text-center">{{ __('translation.suppliers.ID') }}</th>
                                        <th>{{ __('translation.suppliers.Name') }}</th>
                                        <th>{{ __('translation.suppliers.Nickname') }}</th>
                                        <th>{{ __('translation.suppliers.Phone') }}</th>
                                        <th>{{ __('translation.suppliers.Address') }}</th>
                                        <th>{{ __('translation.suppliers.Actions') }}</th>
                                    </tr>
                                </thead>
                            </table>
                            <form method='post' class='d-inline' action="{{ route('suppliers.destroy', 1) }}" id='delete'>
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- DataTables -->
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    // Button extension
    // Buttons for export excel / csv
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    // Button for PDF export
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> --}}
    <script type="text/javascript" src="{{url('material/js/datatable/pdfMake/pdfmake.min.js')}}"></script>
    <script type="text/javascript" src="{{url('material/js/datatable/pdfMake/vfs_fonts.js')}}"></script>
    // Button for print
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    // Button column visability
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#data-table').DataTable({
                processing: true,
                serverSide: true,
                lengthChange: true,
                pageLength: 10,
                lengthMenu: [
                    [10, 25, 50, -1],
                    [10, 25, 50, "{{ __('translation.website.datatable.All') }}"]
                ],
                dom: 'lBfrtip',
                language: {
                    url: '{{ url('material/js/datatable/' . app()->getLocale() . '-datatable.json') }}',
                },
                ajax: '{!! route('suppllier.data') !!}',
                lengthChange: true,
                // pageLength: 10,
                // lengthMenu: [ 5, 10, 25, 50, 75, 100 ],
                columns: [{
                        data: 'id',
                        name: 'id',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'name',
                        name: 'name',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'nickname',
                        name: 'nickname',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'phone',
                        name: 'phone',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'address',
                        name: 'address',
                        orderable: true,
                        searchable: true
                    }, {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },

                ],
                buttons: [{
                        extend: 'collection',
                        text: '{{ __('translation.website.datatable.Options') }}', // Label
                        className: '', // class name
                        buttons: [{
                                extend: 'excelHtml5', // Export to excel button
                                className: '', // class name
                                exportOptions: {
                                    columns: ':visible' // Only visible columns available for export
                                }
                            },
                            {
                                extend: 'csvHtml5', // Export to CSV button
                                className: '', // class name
                                exportOptions: {
                                    columns: ':visible' // Only visible columns available for export
                                }
                            },
                            {
                                extend: 'pdfHtml5', // Export to PDF button
                                orientation: 'landscape',
                                pageSize: 'A4',
                                className: '', // class name
                                exportOptions: {
                                    columns: ':visible', // Only visible columns available for export
                                    orthogonal: "myExport",
                                },
                                customize: function (doc) {
                                    pdfMake.fonts = {
                                                        DroidKufi: {
                                                            normal: 'DroidKufi-Regular.ttf',
                                                            bold: 'DroidKufi-Regular.ttf',
                                                            italics: 'DroidKufi-Regular.ttf',
                                                            bolditalics: 'DroidKufi-Regular.ttf'
                                                        }
                                                    };
                                    doc.defaultStyle.font = 'DroidKufi';
                                    doc.styles.tableBodyEven.alignment = "center";
                                    doc.styles.tableBodyEven.direction = "rtl";
                                    doc.styles.tableBodyOdd.alignment = "center";
                                    doc.styles.tableBodyOdd.direction = "rtl";
                                    doc.styles.tableHeader.alignment = "center";
                                    doc.styles.tableHeader.direction = "rtl";
                                    // console.log(doc);
                                    // i stopped into rtl in pdf and english and rtl in print errors
                                }

                            },
                            {
                                extend: 'print', // Print button
                                className: '', // class name
                                exportOptions: {
                                    columns: ':visible' // Only visible columns available for export
                                },
                                customize: function(win) {
                                    $(win.document.body).find('th').addClass('display').css(
                                        'text-align', 'center');
                                    $(win.document.body).find('table').addClass('display').css(
                                        'font-size', '16px');
                                    $(win.document.body).find('table').addClass('display').css(
                                        'text-align', 'center');
                                    $(win.document.body).find('tr:nth-child(odd) td').each(
                                        function(index) {
                                            $(this).css('background-color', '#D0D0D0');
                                        });
                                    $(win.document.body).find('h1').css('text-align', 'center');

                                }
                            }
                        ]
                    },

                    {
                        extend: 'colvis', // Manage column visibity
                        className: '', // class name
                        text: '{{ __('translation.website.datatable.Columns') }}' // Label
                    }
                ],
                columnDefs: [
                {
                    targets: '_all',
                    targets: "hiddenCols", visible: false,
                    render: function(data, type, row) {
                        if (type = 'myExport') {
                             return data.split(' ').reverse().join(' ');
                        }
                             return data;
                    }
                }
                ],
                initComplete: function(settings, json) {
                    $('.delete-button').on('click', function() {
                        if (confirm('Are You Sure')) {
                            // get slug from button
                            let slug = $(this).attr('data');
                            // get action from form
                            let action = $('#delete').attr('action');
                            // convert action into array
                            let actionArray = action.split('/');
                            // get last index of array to replace it with current slug
                            let lastIndex = actionArray.length - 1;
                            actionArray[lastIndex] = slug;
                            // reverse array to string again
                            action = actionArray.join('/');
                            // pass new action to form
                            $('#delete').attr('action', action);
                            // submit form
                            $('#delete').submit();
                        } else {
                            return false;
                        }

                    });
                },
                "createdRow": function(row, data, dataIndex) {
                //    $(row).children(":first").html(dataIndex+1);
                },
            });
        });
    </script>
@endpush

@include('include.header')

<head>
    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    {{-- DataTables Css --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.css" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Sweet Alerts 2 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>
</head>

<body>

    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        @include('include/sidebar')
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            @include('include/header_area')
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left"> Order Report</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>Order Report</span></li>
                            </ul>
                        </div>
                    </div>
                    @include('include.managerBar')
                </div>
            </div>
            <!-- page title area end -->
            <div class="container">

                <!-- Button Add and Update modal -->
                <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    id="add">
                    Add Users
                </button>
                <div class="card p-4">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Users</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="form">
                                @csrf
                                <input type="hidden" name="id" id="id">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Insert Your Name"
                                        name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="phone"
                                        placeholder="Insert Your Number Phone" name="phone">
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea class="form-control" id="address" placeholder="Insert Your Address"
                                        name="address"></textarea>
                                </div>
                                <button type="button" class="btn btn-secondary" id="close"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" id="save">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        @include('include/footer')
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    @include('include/offset')
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>


    @push('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
                        isi()
                    });
        
                    function isi() {
                        $('#table1').DataTable({
                            serverside: true,
                            responseive: true,
                            ajax: {
                                url: "{{ route('data') }}"
                            },
                            columns: [{
                                    "data": null,
                                    "sortable": false,
                                    render: function(data, type, row, meta) {
                                        return meta.row + meta.settings._iDisplayStart + 1
                                    }
                                },
                                {
                                    data: 'name',
                                    name: 'name'
                                },
                                {
                                    data: 'phone',
                                    name: 'phone'
                                },
                                {
                                    data: 'address',
                                    name: 'address'
                                },
                                {
                                    data: 'aksi',
                                    name: 'aksi'
                                },
                            ]
                        });
                    }
    </script>
    <script>
        $('#save').on('click', function() {
                        if ($(this).text() === 'Update Data') {
                            edit()
                        } else {
                            add()
                        }
                    })
        
                    $(document).on('click', '.edit', function() {
                        let id = $(this).attr('id')
                        $('#add').click()
                        $('#save').text('Update Data')
        
                        $.ajax({
                            url: "{{ route('data.edit') }}",
                            type: 'post',
                            data: {
                                id: id,
                                _token: "{{ csrf_token() }}"
                            },
                            success: function(res) {
                                $('#id').val(res.data.id)
                                $('#name').val(res.data.name)
                                $('#phone').val(res.data.phone)
                                $('#address').val(res.data.address)
                            }
                        })
                    })
        
                    function add() {
                        $.ajax({
                            url: "{{ route('data.store') }}",
                            type: "post",
                            data: {
                                name: $('#name').val(),
                                phone: $('#phone').val(),
                                address: $('#address').val(),
                                // "_token": "{{ csrf_token() }}"
                            },
                            success: function(res) {
                                console.log(res.data)
                                Swal.fire(
                                    'Successfully Add Data!',
                                    'Click ok to continue',
                                    'success'
                                )
                                $('#close').click()
                                $('#form')[0].reset()
                                $('#table1').DataTable().ajax.reload()
                            },
                            error: function(xhr) {
                                alert(xhr.responJson.message)
                            }
                        })
                    }
        
                    function edit() {
                        $.ajax({
                            url: "{{ route('data.update') }}",
                            type: "post",
                            data: {
                                id: $('#id').val(),
                                name: $('#name').val(),
                                phone: $('#phone').val(),
                                address: $('#address').val(),
                                "_token": "{{ csrf_token() }}"
                            },
                            success: function(res) {
                                console.log(res.data)
                                Swal.fire(
                                    'Successfully Update Data!',
                                    'Click ok to continue',
                                    'success'
                                )
                                $('#close').click()
                                $('#form')[0].reset()
                                $('#save').text('submit')
                                $('#table1').DataTable().ajax.reload()
                            },
                            error: function(xhr) {
                                alert(xhr.responJson.message)
                            }
                        })
                    }
        
                    $(document).on('click', '.delete', function() {
                        Swal.fire({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, delete it!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                let id = $(this).attr('id')
                                $.ajax({
                                    url: "{{ route('data.delete') }}",
                                    type: 'post',
                                    data: {
                                        id: id,
                                        "_token": "{{ csrf_token() }}"
                                    },
                                    success: function(res) {
                                        Swal.fire(
                                            'Deleted!',
                                            'Your file has been deleted.',
                                            'success'
                                        )
                                        $('#table1').DataTable().ajax.reload()
                                    }
                                })
                            }
                        })
                    })
    </script>
    @endpush
</body>

</html>
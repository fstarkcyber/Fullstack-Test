<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Data Formulir</title>
    <link rel="stylesheet" href="{{ asset('dist/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>

</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="bootstrap" viewBox="0 0 118 94">
            <title>Bootstrap</title>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z">
            </path>
        </symbol>
        <symbol id="home" viewBox="0 0 16 16">
            <path
                d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
        </symbol>
        <symbol id="speedometer2" viewBox="0 0 16 16">
            <path
                d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
            <path fill-rule="evenodd"
                d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
        </symbol>
        <symbol id="table" viewBox="0 0 16 16">
            <path
                d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
        </symbol>
        <symbol id="people-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd"
                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </symbol>
        <symbol id="grid" viewBox="0 0 16 16">
            <path
                d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
        </symbol>
    </svg>


    <header class="p-3 mb-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 link-secondary">Overview</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Inventory</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Customers</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Products</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>

                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32"
                            class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title">Data</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Kumpulan data formulir</h6>
                            </div>

                            <div class="col-4">
                                {{-- <label for="search">Cari Nama</label> --}}
                                <input type="text" class="form-control" id="search" placeholder="Cari Nama ..."
                                    name="search">
                            </div>
                        </div>
                        <table class="table table-borderless">
                            <thead>
                                <th>No</th>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Email</th>
                                {{-- <th>Telpon</th> --}}
                                <th>Action</th>
                            </thead>

                            <tbody id="data-body">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Data</h5>
                        <h6 class="card-subtitle mb-3 text-muted">Formulir digunakan untuk tambah dan ubah data.</h6>
                        <form action="{{ route('api.data.store') }}" id="form-data" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name">Nama</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="telp">Telpon</label>
                                <input type="text" id="telp" name="telp" class="form-control">
                            </div>

                            <button type="submit" id="btn-form" class="btn btn-primary">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="{{ asset('dist/app.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(function() {
        get();

        if (getCookie('name').length > 0) {
            alert(getCookie('name'));
        }

        function notification(status, message) {
            var title = '';
            var icon = '';

            if (status == 'error') {
                icon = 'error';
                title = 'Oops...'
            }

            if (status == 'success') {
                icon = 'success';
                title = 'Horee...'
            }

            Swal.fire({
                icon: icon,
                title: title,
                text: message,
                showConfirmButton: false,
                timer: 1000
            });
        }

        function get(search = null) {
            $.ajax({
                type: "GET",
                url: "{{ route('api.data') }}",
                data: {
                    search: search
                },
                // async: false,
                dataType: "JSON",
                beforeSend: function() {
                    $('#data-body').html(
                        '<tr class="text-center"><td colspan="6" >Loading ...</td></tr>');
                },
                success: function(response) {
                    var html = '';
                    // console.log(response);
                    var no = 1;
                    $.each(response, function(i, val) {
                        html +=
                            '<tr>' +
                            '   <td>' + no++ + '</td>' +
                            '   <td>' + val.id + '</td>' +
                            '   <td>' + val.name + '</td>' +
                            '   <td>' + val.email + '</td>' +
                            '   <td>' +
                            '      <div class="d-grid gap-2 d-md-block">' +
                            '          <button class="btn btn-warning btn-sm btn-edit" data-id="' +
                            val.id + '"><span class="bi bi-pen"></span></button>' +
                            '          <button class="btn btn-danger btn-sm btn-delete" data-id="' +
                            val.id + '"><span class="bi bi-trash"></span></button>' +
                            '      </div>' +
                            '   </td>' +
                            '</tr>';
                    });

                    $('#data-body').html(html);
                }
            });
        }

        function getById(id) {
            $.ajax({
                type: "GET",
                url: "{{ url('api/data') }}/" + id,
                dataType: "JSON",
                success: function(response) {

                    if (response.success === false) {
                        notification('error', response.message);
                    }

                    $('#form-data').append('<input type="hidden" name="id">');

                    $('[name="id"]').val(response.data.id);
                    $('[name="name"]').val(response.data.name);
                    $('[name="email"]').val(response.data.email);
                    $('[name="telp"]').val(response.data.telp);

                    $("#form-data").prop('id', "form-update");
                    $("#btn-form").html('Ubah');
                    $("#btn-form").addClass('btn-warning');
                    $("#btn-form").removeClass('btn-primary');
                }
            });

            return false;
        }

        function deleteCookie(name) {
            var d = new Date();
            d.setTime(d.getTime() - (60 * 60 * 1000));
            var expires = "expires=" + d.toGMTString();
            document.cookie = name + "=;" + expires + ";path=/";
        }

        function setCookie(cookName, cookValue, expiry) {
            var dt = new Date();
            dt.setTime(dt.getTime() + (expiry * 24 * 60 * 60 * 1000));
            var expires = "expires=" + dt.toUTCString();
            document.cookie = cookName + "=" + cookValue + ";" + expiry + ";path=/";
        }

        function getCookie(name) {
            var cname = name + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(cname) == 0) {
                    return c.substring(cname.length, c.length);
                }
            }
            return "";
        }

        $(document).on('submit', '#form-data', function() {
            var data = $(this).serialize();

            var cookieName = getCookie('name');
            var cookieEmail = getCookie('email');
            var cookieTelp = getCookie('telp');

            const arrayName = cookieName.split(',');
            const arrayEmail = cookieEmail.split(',');
            const arrayTelp = cookieTelp.split(',');

            arrayName.push($('#form-data [name="name"]').val());
            arrayEmail.push($('#form-data [name="email"]').val());
            arrayTelp.push($('#form-data [name="telp"]').val());

            setCookie('name', arrayName, 365);
            setCookie('email', arrayEmail, 365);
            setCookie('telp', arrayTelp, 365);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "{{ route('api.data.store') }}",
                data: data,
                dataType: "JSON",
                success: function(response) {
                    if (response.success === false) {
                        notification('error', response.message);
                    }

                    notification('success', response.message);
                    $('#form-data')[0].reset();
                    get();
                }
            });

            return false;
        });

        $(document).on('submit', '#form-update', function() {
            var id = $('#form-update [name="id"]').val();
            var data = $(this).serialize();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "PUT",
                url: "{{ url('api/data/update') }}/" + id,
                data: data,
                dataType: "JSON",
                success: function(response) {
                    if (response.success === false) {
                        notification('error', response.message);
                    }

                    notification('success', response.message);

                    $('#form-update')[0].reset();

                    $("#form-update").prop('id', "form-data");
                    $("#btn-form").html('Tambah');
                    $("#btn-form").addClass('btn-primary');
                    $("#btn-form").removeClass('btn-warning');
                    get();
                }
            });

            return false;
        });

        $('#data-body').on('click', '.btn-delete', function() {
            var id = $(this).data('id');
            var token = $('meta[name="csrf-token"]').attr('content');

            Swal.fire({
                title: 'Are you sure?',
                text: "Apakah anda yakin ingin menghapus data ini ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: "{{ url('api/data/delete') }}/" + id,
                        data: {
                            _token: token
                        },
                        dataType: "JSON",
                        success: function(response) {
                            if (response.success === false) {
                                notification('error', response.message);
                            }

                            notification('success', response.message);
                            get();
                        }
                    });

                    return false;
                }
            })
        })

        $('#data-body').on('click', '.btn-edit', function() {
            var id = $(this).data('id');
            getById(id);
        });

        $('#search').on('keyup', function() {
            var data = $(this).val();
            get(data);
        })
    });
</script>

</html>

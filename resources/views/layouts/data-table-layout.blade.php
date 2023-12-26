<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- bootstrap cdn start --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- bootstrap cdn end --}}
    {{-- jquery cdn --}}
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> --}}
    {{-- jquery cdn --}}
    <!-- Add DataTables CSS -->
    {{--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.css">--}}





    <!-- Add DataTables JS -->
    {{--<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.js"></script>--}}

</head>

<body>
    <div class="container">
        {{-- Nav bar start --}}
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        {{-- Nav bar end --}}
        <div class="col">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="fa-pull-right mb-2 mt-3">
                    <a class="btn btn-success" onclick="add()" href="javascript:void(0)" data-bs-toggle="modal"
                        data-bs-target="#userModal">Create User</a>
                </div>
                <div class="col-2">
                    <input id="userSearch" class="form-control me-2" type="search" placeholder="Search"
                        aria-label="Search">
                </div>
                {{-- modal area start --}}


                <!-- Modal -->
                <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="userModal">User Information</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('create_user') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" name="phone" class="form-control" id="phone"
                                            value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" name="address" class="form-control" id="address"
                                            value="{{ old('address') }}">
                                        @error('address')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" id="password" class="form-control"
                                            id="" value="{{ old('password') }}">
                                        @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <!-- Change this button type to "submit" -->
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- modal area end --}}
                <div class="col-12 mx-auto text-center">
                    <table id="userTable" class="table table-success table-striped-columns"></table>
                </div>
                <div class="col-12 mx-auto text-center">
                    <table id="userTable" class="table table-success table-striped-columns">
                        <tr>
                            <td>SL</td>
                            <td>Name</td>
                            <td>Address</td>
                            <td>Phone</td>
                            <td>Email</td>
                            <td>Action</td>
                        </tr>

                       
                    </table>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

        <!-- Add DataTables JS -->
        {{--<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.js"></script>--}}
        <script type="text/javascript">
            // Your JavaScript code goes here
            console.log('Hello, this is JavaScript!');
        </script>
        <script>
            $(document).ready(function() {
                $('#userTable').DataTable({
                    processing: true,
                    serverSide: true,
                    //serverside: true,
                    ajax: {
                        url: "{{ url('/') }}"
                    },
                    columns: [{
                            data: 'name',
                            name: 'name',
                        },
                        {
                            data: 'address',
                            name: 'address',
                        },
                        {
                            data: 'phone',
                            name: 'phone',
                        },
                        {
                            data: 'email',
                            name: 'email',
                        },
                    ]
                })


                // DataTable Initialization
                //var userTable = $('#userTable').DataTable({
                //    "paging": true,
                //    "ordering": true,
                //    "searching": true // Enable search bar
                //});

                //// Optional: Add a separate search input
                //$('#userSearch').on('keyup', function () {
                //    userTable.search($(this).val()).draw();
                //});
            });
        </script>
    </div>
</body>

</html>

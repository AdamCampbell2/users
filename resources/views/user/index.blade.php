@extends('layouts.app')

@section('content')
    
    <div class="container-fluid">
        <p><a href="{{ route('users.create') }}" class="btn btn-primary btn-md form-btn" data-title="<i class='fa fa-users'></i> Add User">Add a Contact</a></p>

        <div class="nav-tabs-custom">
            <div class="tab-content">
                <div class="tab-pane active" id="bseda">
                    <div class="table-responsive">
                        <table id="bseda-table" class="table table-bordered table-hover dataTable">
                            <thead>
                                <tr>
                                    <th aria-sort="ascending">Name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $user)
                                <tr>
                                    <td><a href="{{ route('users.show', ['user' => $user->id]) }}">{{ $user->name }}</a></td>

                                    <td><a href="/mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                                    

                                    <td><a href="{{ route('users.edit', ['user' => $user->id]) }}" class="form-btn" data-title="<i class='fa fa-users'></i> Edit User"><i class="fa fa-lg fa-pencil"></i></a>
                                    <a href="{{ route('users.destroy', ['user' => $user->id]) }}" class="delete-btn"><i class="fa fa-lg fa-trash"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <p><a href="{{ route('users.create') }}" class="btn btn-primary btn-sm form-btn" data-title="<i class='fa fa-users'></i> Add User">Add A User</a></p>

    </div>
@endsection
@section('scripts')
    <script>
        $(function() {
            $('#bseda-table, #bsedc-table').DataTable({
                "paging":true,
                "lengthChange":true,
                "searching":true,
                "ordering":true,
                "info":false,
                "autoWidth": false,
                "lengthMenu": [[10, 25, 58, -1], [10, 25, 50, "All"]]
            });
        });
    </script>
@endsection
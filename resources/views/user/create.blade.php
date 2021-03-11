@extends('layouts.app')


@section('content')

<form id="crmForm" action="{{ route('users.store') }}" method="POST">
    @csrf 
    <div class="row">
        <div class="col-md-12">
            <p>First Name<br />
            <input type="text" class="form-control" name="name" required></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>Email<br />
            <input type="text" class="form-control" name="email" required></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>Password<br />
            <input type="text" class="form-control password" name="password" required></p>
        </div>
    </div>

    <hr />
    <p><input type="submit" class="btn btn-primary" value="Submit"></p>

</form>

        

@endsection
@section('scripts')

@endsection

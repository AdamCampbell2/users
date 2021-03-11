@extends('layouts.app')

@section('content')

<form id="crmForm" action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">
    @csrf 
    @method('PUT')
    <div class="row">
        <div class="col-md-12">
            <p>First Name<br />
            <input type="text" class="form-control" name="name" value="{{ $user->name }}" required></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>Email<br />
            <input type="text" class="form-control" name="email" value="{{ $user->email }}" required></p>
        </div>
    </div>

    <hr />
    <p><input type="submit" class="btn btn-primary" value="Submit"></p>

</form>
@endsection
@section('scripts')

@endsection
@extends('layouts.app')

@section('content')

<div class="row">
            <div class="col-md-6">
                <div class="section-content">
                    <h2 class="section-heading">User Information</h2>
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <p>Name<br />
                                <strong>{{ $user->name }}</strong></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <p>Email<br /><strong><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></strong></p>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            
        </div>

        <hr />
            <p><a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-primary form-btn" data-title="<i class='fa fa-users'></i> Edit User">Edit this User</a></p>

    </div>
@endsection
@section('scripts')

@endsection
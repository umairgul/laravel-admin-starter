@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ $pageTitle ?? __('Dashboard') }}</div>

                    <div class="card-body">
                        <form action="{{ route('admin.password.update') }}" method="POST" class="row">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Old Password</label>
                                <input type="password" class="form-control" name="old_password"
                                    placeholder="Enter Old Name" required/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">New Password</label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Enter New Password" required/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation"
                                    placeholder="Enter New Password Again" required/>
                            </div>

                            <div class="text-end">
                                <button class="btn btn-outline-primary">Update</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

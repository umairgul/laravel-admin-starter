@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ $pageTitle ?? __('Dashboard') }}</div>

                    <div class="card-body">
                        <form action="{{ route('admin.profile.update') }}" method="POST" class="row">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                    value="{{ $user->name }}" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter Email"
                                    value="{{ $user->email }}" />
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

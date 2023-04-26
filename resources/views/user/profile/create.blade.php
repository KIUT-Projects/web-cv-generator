@extends('layouts.user_type.auth')

@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <h5 class="mb-0">All Users</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <form method="POST" acction="{{ route('profile.store') }}">
                            Create User Form

                            <div class="card-footer" style="display: flex; justify-content: end;">
                                <a href="{{ route('profile.index') }}" class="btn btn-secondary mx-2">{{ __('Cancel') }}</a>
                                <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

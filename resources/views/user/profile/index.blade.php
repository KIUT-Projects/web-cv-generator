@extends('layouts.user_type.auth')

@section('content')

    @php
        $profiles = [
            [],
            [],
            [],
            [],
            [],
            [],
        ];
    @endphp

    <div class="container-fluid">
        <div class="row">

            @foreach($profiles as $profile)
                <div class="col-12 col-md-6 col-lg-4 my-3">
                    <div class="card">
                        <div class="card-header pb-0 px-3">
                            <h6 class="mb-0">{{ __('Umarov Kamoliddin') }}</h6>
                        </div>
                        <div class="card-body pt-4 p-3">
                            <ul style="list-style-type: none; padding: 0;">
                                <li><i class="fal fa-user-edit"></i> Name: Kamoliddin</li>
                                <li><i class="fal fa-user-edit"></i> Surname: Umarov</li>
                                <li><i class="fal fa-calendar"></i> Birthday: {{ now()->format('d.m.Y') }}</li>
                                <li><i class="fal fa-pen"></i> Updated at: {{ now()->format('d.m.Y') }}</li>
                            </ul>

                            <div class="row">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary"><i class="fas fa-trash"></i></button>
                                    <button type="button" class="btn btn-secondary"><i class="fas fa-pen"></i></button>
                                    <button type="button" class="btn btn-primary"><i class="fas fa-clipboard-check"></i> Make</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

                <div class="col-4 my-3">
                    <a href="#">
                        <div class="card">
                            <div class="card-body p-4" style="align-self: center;">
                                <i class="fal fa-plus-circle" style="font-size: 4rem"></i>
                            </div>
                        </div>
                    </a>
                </div>

        </div>
    </div>

@endsection

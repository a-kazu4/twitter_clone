@extends('layouts.app')

@section('content')
    <div class="container pt-4">
        <div class="row">
            <div class="col-lg-3">
                <div class="card card-profile mb-4">
                    <div class="card-header bg-danger"></div>
                    <div class="card-block text-center">
                        <a href="#">
                            <img class="card-profile-img" src="{{ asset('images/no-thumb.png') }}">
                        </a>

                        <div class="card-title my-2">
                            <a class="font-weight-bold text-inherit d-block" href="#">Dave Gamache</a>
                            &#64;dave_gamche
                        </div>

                        <p class="mb-4">I wish i was a little bit taller, wish i was a baller, wish i had a girl…
                            also.</p>

                        <ul class="card-profile-stats">
                            <li class="card-profile-stat">
                                <a href="#" class="text-inherit">
                                    Friends
                                    <strong class="d-block">9</strong>
                                </a>
                            </li>
                            <li class="card-profile-stat">
                                <a href="#" class="text-inherit">
                                    Enemies
                                    <strong class="d-block">8</strong>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                @include('pieces.about')
            </div>

            <div class="col-lg-6">
                <ul class="list-group media-list-stream mb-4">
                    <li class="media list-group-item p-4">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Message">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-secondary">
                                    <span class="icon icon-camera"></span>
                                </button>
                            </div>
                        </div>
                    </li>
                    @for($i = 0; $i < 5; $i++)
                        <li class="media list-group-item p-4">
                            @include('pieces.tweet')
                        </li>
                    @endfor
                </ul>
            </div>

            <div class="col-lg-3">
                @include('pieces.footer')
            </div>
        </div>
    </div>
@endsection

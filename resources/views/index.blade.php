@extends('layouts.default')
@section('title', 'Trainsignal Backchannel')


@section('content')

    <div class="front-page container">
        <section class="inner">
            @include('widget.messages.errors')

            <div class="col">
                <div class="brand">
                    {{ @config('app.name') }}
                </div>
            </div>

            <div class="col">
                @include('widget.login.form')
            </div>
        </section>
    </div>


@endsection

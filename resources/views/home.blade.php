@extends('layouts.admin')
@section('title', __('pages.home.title'))

@section('content')
<div class="tile">
    <header>
        <h2>Tile header</h2>
    </header>

    <div class="body">
        This is a body area.
    </div>


</div>

    <div class="tile">
        <header>
            <h2>Tile header 2</h2>
        </header>

        <div class="body">
            This is a body area.
        </div>
    </div>
@endsection

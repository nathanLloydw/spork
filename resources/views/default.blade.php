@extends('layouts.base')

@section('content')

    @includeIf('layouts.navigation')

    <div class="content flex-grow">
        <component></component>
    </div>

    @includeIf('layouts.footer')

@endsection

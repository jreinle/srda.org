@extends('layout')

@section('main_content')
    @if(view()->exists('pages.generic.'.$page))
    @include('pages.generic.'.$page)
    @else
        @include('pages.generic.default')
    @endif
@endsection

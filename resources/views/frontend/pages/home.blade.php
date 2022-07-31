@extends('frontend.layouts.master')

@section('content')

@include('frontend.components.banner')

@include('frontend.components.events.categories.index')

@include('frontend.components.events.upcomingEvent')

@include('frontend.components.events.pastEvent')

@include('frontend.components.home.sponsors')


@endsection
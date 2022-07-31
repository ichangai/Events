@extends('frontend.layouts.master')         

@section('content')

@include('frontend.components.events.eventDetails.banner')

@include('frontend.components.events.eventDetails.about')

@include('frontend.components.events.eventDetails.ticket')

@include('frontend.components.events.eventDetails.venue')

@include('frontend.components.events.eventDetails.hotels')

@include('frontend.components.events.eventDetails.related')
            
@endsection
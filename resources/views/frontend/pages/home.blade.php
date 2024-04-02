@extends('layouts.guest.layout')

@section('page_style')
@endsection

@section('page_content')
    @include('frontend.pages.partials.hero')
    @include('frontend.pages.partials.about')
    @include('frontend.pages.partials.services')
    @include('frontend.pages.partials.work')
    @include('frontend.pages.partials.pricing')
    @include('frontend.pages.partials.chat')
@endsection

@section('paage_script')
@endsection

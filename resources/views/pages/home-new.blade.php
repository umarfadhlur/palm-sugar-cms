@extends('layouts.app')

@section('title', 'Home')

@section('content')

    {{-- ======================== HERO ======================== --}}
    @include('components-new.hero')
    {{-- /Hero --}}

    {{-- ======================== ABOUT (SINGKAT) ======================== --}}
    @include('components-new.about-us')
    {{-- /About --}}


    {{-- ======================== OUR PRODUCTS ======================== --}}
    @include('components-new.products')
    {{-- /Products --}}


    {{-- ======================== TESTIMONIALS ======================== --}}
    @include('components-new.testimonials')
    {{-- /Testimonials --}}


    {{-- ======================== RECENT POSTS / BLOG ======================== --}}
    @include('components-new.blog')
    {{-- /Blog --}}


    {{-- ======================== CONTACT ======================== --}}
    @include('components-new.contact')
    {{-- /Contact --}}

@endsection

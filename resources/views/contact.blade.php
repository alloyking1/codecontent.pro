@extends('layouts.app')

@section('title', 'CodeContent.pro | Developer Education That Helps Startups Grow')
@section('meta_description', 'CodeContent.pro is a developer education agency helping startups and SaaS teams improve onboarding, activation, and developer adoption through content, documentation, and learning systems.')

@section('content')

<x-custom.hero-two 
    yellowDot="true" 
    yellowDotText="GET IN TOUCH"
    title="Let’s Engineer Your Next Technical Solution"
    description="
    Fill out the scoping form below or pick a time directly on our calendar. We’ll review your stack and requirements before our call so we can jump straight into strategy.
    "
    btnOneLink="https://calendly.com/moses-codecontent/30min"
    btnOneText="Book a Discovery Call"
    btnTwoLink="#services"
    btnTwoText="View Engineering Use Cases"
    image="{{ asset('Questions-pana.png') }}"
    showButton="false"
>
</x-custom.hero-two>

{{-- <div class="site-shell pb-[10rem]"> --}}
    
{{-- </div> --}}




<x-custom.call-to-action></x-custom.call-to-action>
@endsection
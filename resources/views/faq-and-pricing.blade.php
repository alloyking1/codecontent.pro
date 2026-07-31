@extends('layouts.app')

@section('title', 'CodeContent.pro | Developer Education That Helps Startups Grow')
@section('meta_description', 'CodeContent.pro is a developer education agency helping startups and SaaS teams improve onboarding, activation, and developer adoption through content, documentation, and learning systems.')

@section('content')

<x-custom.hero-two 
    yellowDot="true" 
    yellowDotText="Portfolio"
    title="Proven Technical Results"
    description="
    We bridge the gap between complex engineering and human understanding. Explore how our precise technical interventions drive measurable growth.
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
    {{-- <x-custom.portfolio-grid /> --}}

    <x-custom.pricing-models />
    <x-custom.engineering-rigor />
    <x-custom.engineering-faq />
{{-- </div> --}}




<x-custom.call-to-action></x-custom.call-to-action>
@endsection
@extends('layouts.app')

@section('title', 'CodeContent.pro | Developer Education That Helps Startups Grow')
@section('meta_description', 'CodeContent.pro is a developer education agency helping startups and SaaS teams improve onboarding, activation, and developer adoption through content, documentation, and learning systems.')

@section('content')

<x-custom.hero-two 
    yellowDot="true" 
    yellowDotText="Documentation Services"
    title="Documentation for Developer Tools, and Engineering Teams"
    description="Without clear documentation, even the best products can fail to reach their potential. We help teams create educational experiences that reduce friction, improve onboarding, and help developers get value from products faster."
    btnOneLink="https://calendly.com/moses-codecontent/30min"
    btnOneText="Book a Discovery Call"
    btnTwoLink="#services"
    btnTwoText="Explore Developer Education"
    image="{{ asset('Questions-pana.png') }}"
>
</x-custom.hero-two>



<x-custom.service-list-two
    title="What we can do for you"
    yellowDotText="Documentation for Engineering Teams"
    description="We offer a range of services to help you create compelling technical content that resonates with developers and drives engagement. "
>
@foreach ($docsServices as $service)
<x-custom.card-two 
    title="{{ $service['title'] }}" 
    description="{{ $service['description'] }}"
/>
@endforeach
</x-custom.service-list-two>




<x-custom.who-we-help></x-custom.who-we-help>
<x-custom.call-to-action></x-custom.call-to-action>


@endsection
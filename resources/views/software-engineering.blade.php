@extends('layouts.app')

@section('title', 'CodeContent.pro | Developer Education That Helps Startups Grow')
@section('meta_description', 'CodeContent.pro is a developer education agency helping startups and SaaS teams improve onboarding, activation, and developer adoption through content, documentation, and learning systems.')

@section('content')

<x-custom.hero-two 
    yellowDot="true" 
    yellowDotText="Software Engineering"
    title="Software and AI Engineering Service"
    description="Our team of professional software developers can handle your software development needs, from building custom applications to integrating AI solutions. We help companies create educational experiences that reduce friction, improve onboarding, and help developers get value from products faster."
    btnOneLink="https://calendly.com/moses-codecontent/30min"
    btnOneText="Book a Discovery Call"
    btnTwoLink="#services"
    btnTwoText="Explore Software Engineering"
    image="{{ asset('Questions-pana.png') }}"
>
</x-custom.hero-two>


<x-custom.service-list-two
    title="What we can do for you"
    yellowDotText="Services"
    description="From software development to AI integration, we offer a range of services to help you create compelling technical solutions that resonate with developers and drive engagement. "
>
    @foreach ($services as $service)
        <x-custom.card-two 
            title="{{ $service['title'] }}" 
            description="{{ $service['description'] }}"
        />
    @endforeach
</x-custom.service-list-two>


<x-custom.who-we-help></x-custom.who-we-help>


<x-custom.call-to-action></x-custom.call-to-action>
@endsection
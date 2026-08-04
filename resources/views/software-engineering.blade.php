@extends('layouts.app')

@section('title', 'CodeContent.pro | Developer Education That Helps Startups Grow')
@section('meta_description', 'CodeContent.pro is a developer education agency helping startups and SaaS teams improve onboarding, activation, and developer adoption through content, documentation, and learning systems.')

@section('content')

<x-custom.hero-two 
    yellowDot="true" 
    yellowDotText="ENGINEERING & AUTOMATION"
    title="Custom Software & AI Automation Built for Operational Velocity"
    description="We engineer bespoke internal tools, scalable backend services, and AI-driven workflow automations that eliminate operational bottlenecks—allowing your team to ship faster and scale without friction."
    btnOneLink="https://calendly.com/moses-codecontent/30min"
    btnOneText="Book a Discovery Call"
    btnTwoLink="#services"
    btnTwoText="View Engineering Use Cases"
    image="{{ asset('Questions-pana.png') }}"
>
</x-custom.hero-two>
<x-custom.service-trust-badge/>

<div>
    <x-custom.why-choose-us
        yellowDotText="THE CHALLENGE"
        title="Your Engineering Team Should Be Building Your Core Product—Not Admin Dashboards"
        description="Growing companies face a common dilemma: off-the-shelf software lacks flexibility, but using core dev teams to build internal scripts and manual admin panels delays key product roadmap milestones."
        :body="[
            [
                'title' => 'Core Roadmap Distraction',
                'description' => 'Diverting senior engineers to patch together internal admin panels slows feature releases.',
            ],
            [
                'title' => 'Fragile No-Code Tools Failure',
                'description' => 'Zapier and Make setups break as data volumes scale, leaving teams with missing records and broken workflows.',
            ],
            [
                'title' => 'Manual Operational Bloat',
                'description' => 'Repetitive data transformations, manual reports, and disjointed APIs consume hundreds of team hours weekly.',
            ],  
            ]"
    />
</div>

<x-custom.service-list-two
    title="Engineering Capabilities Built for Scale"
    yellowDotText="WHAT WE BUILD"
    description="From software development to AI integration, we offer a range of services to help you create compelling technical solutions that resonate with developers and drive engagement. "
>
    @foreach ($services as $service)
        <x-custom.card-two 
            title="{{ $service['title'] }}" 
            description="{{ $service['description'] }}"
        />
    @endforeach
</x-custom.service-list-two>


<x-custom.who-we-help>
</x-custom.who-we-help>

<x-custom.service-portfolio
    title="Engineered Solutions. Proven Outcomes."
    yellowDotText="PROOF OF WORK"
    description="We let production code, deployed AI architectures, and measurable technical outcomes speak for us."
>
    <div class="">
        <div class="">
            
            <x-custom.portfolio-card
            :works="[
                [
                    'title' => 'Pimlytics',
                    'description' => 'A web application for learning and training data professionals through tutorials and downloadable resources',
                    'img' => asset('primlytics_1.png'),
                ],
            ]"
        />
        </div>
    </div>
</x-custom.service-portfolio>

<x-custom.service-testimony/>

<x-custom.service-delivery-workflow
    title="From Technical Brief to Published Docs"
    yellowDotText="THE PROCESS"
    description="We let production code, deployed AI architectures, and measurable technical outcomes speak for us."
>
</x-custom.service-delivery-workflow>


<x-custom.call-to-action></x-custom.call-to-action>
@endsection
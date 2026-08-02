@extends('layouts.app')

@section('title', 'CodeContent.pro | Developer Education That Helps Startups Grow')
@section('meta_description', 'CodeContent.pro is a developer education agency helping startups and SaaS teams improve onboarding, activation, and developer adoption through content, documentation, and learning systems.')

@section('content')

<x-custom.hero-two 
    yellowDot="true" 
    yellowDotText="EDTECH & COURSE ENGINEERING"
    title="Interactive Technical Curriculum & Course Development Built for Real Learning"
    description="We design, author, and engineer SCORM-compliant courses, interactive learning modules, and corporate training programs using Articulate 360 and custom LMS platforms—turning complex technical topics into engaging, outcome-driven learning experiences."
    btnOneLink="https://calendly.com/moses-codecontent/30min"
    btnOneText="Book a Discovery Call"
    btnTwoLink="#services"
    btnTwoText="Explore Education Technology"
    image="{{ asset('Questions-pana.png') }}"
>
</x-custom.hero-two>
<x-custom.service-trust-badge
    :badges="[
        [
            'name' => 'SCORM & xAPI Compliant',
        ],
        [
            'name' => 'Articulate 360 Experts',
        ],
        [
            'name' => 'Engineer-Led Instructional Design',
        ],
    ]"
/>

<div>
    <x-custom.why-choose-us
        yellowDotText="THE CHALLENGE"
        title="Boring, Text-Heavy Courses Fail to Train Developers and Retain Learners"
        description="Creating technical courses requires more than just slides and voiceovers. Without hands-on exercises, structured learning paths, and robust instructional design, completion rates plunge and learners fail to retain complex concepts."
        :body="[
            [
                'title' => 'Low Engagement & High Churn',
                'description' => 'Passive video lectures without interactive assessments lead to low course completion rates and frustrated learners.',
            ],
            [
                'title' => 'Instructional Design Gaps',
                'description' => 'Subject matter experts often lack the pedagogical framework needed to structure complex technical concepts into logical learning modules.',
            ],
            [
                'title' => 'Format & LMS Compatibility Issues',
                'description' => 'Building interactive modules that fail to sync properly with enterprise Learning Management Systems (LMS) creates compliance and tracking headaches',
            ],  
            ]"
    />
</div>

<x-custom.service-list-two
    title="End-to-End EdTech Development Capabilities"
    yellowDotText="WHAT WE DESIGN & ENGINEER"
    description="We offer a range of services to help you create compelling technical content that resonates with developers and drives engagement."
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
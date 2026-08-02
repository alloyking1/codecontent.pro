<?php

namespace App\Enums;

enum DigitalLearningServiceEnum: string
{
    case ARTICULATE_360 = 'articulate-360';
    case TECHNICAL_CURRICULUM = 'technical-curriculum';
    case LMS_CONTENT_ENGINEERING = 'lms-content-engineering';
    case TECHNICAL_ONBOARDING = 'technical-onboarding';

    public function title(): string
    {
        return match ($this) {
            self::ARTICULATE_360 =>
                'Interactive, SCORM-Compliant E-Learning Modules',

            self::TECHNICAL_CURRICULUM =>
                'Structured Learning Paths for Complex Technical Topics',

            self::LMS_CONTENT_ENGINEERING =>
                'Turnkey Course Packages Ready for Any LMS',

            self::TECHNICAL_ONBOARDING =>
                'Accelerate Time-to-Productivity for Engineering Teams',
        };
    }

    public function description(): string
    {
        return match ($this) {
            self::ARTICULATE_360 =>
                'We engineer rich, interactive e-learning modules using Articulate Storyline 360 and Rise 360. Complete with interactive decision scenarios, custom UI components, knowledge checks, and seamless LMS integration.',

            self::TECHNICAL_CURRICULUM =>
                'We apply proven instructional design frameworks (ADDIE, Bloom’s Taxonomy) to translate deep technical subject matter—like cloud architecture, software engineering, and AI automation—into structured, progressive curricula.',

            self::LMS_CONTENT_ENGINEERING =>
                'Whether you run a public platform like Codecademy, an internal enterprise LMS (Canvas, Moodle, Absorb), or a custom web app, we deliver plug-and-play course assets engineered for reliable tracking and gradebook syncing.',

            self::TECHNICAL_ONBOARDING =>
                'Reduce the time it takes for new engineers, developers, or clients to master your software stack. We build self-paced training portals and interactive onboarding courses tailored to your proprietary tools and workflows.',
        };
    }

    public function deliverables(): array
    {
        return match ($this) {
            self::ARTICULATE_360 => [
                'Articulate Storyline 360',
                'Rise 360',
                'SCORM 1.2 / 2004 Packaging',
                'xAPI (Experience API)',
                'Branching Scenarios',
                'Interactive Assessments',
            ],

            self::TECHNICAL_CURRICULUM => [
                'Technical Curriculum Mapping',
                'Learning Objectives Alignment',
                'Rubric Development',
                'Practical Lab Exercises',
                'Competency-Based Assessments',
            ],

            self::LMS_CONTENT_ENGINEERING => [
                'Custom LMS Integration',
                'SCORM/xAPI Testing',
                'Enterprise Employee Onboarding Modules',
                'Platform Data Tracking',
                'Custom Web Component Embeds',
            ],

            self::TECHNICAL_ONBOARDING => [
                'Developer Onboarding Courses',
                'SaaS Customer Enablement',
                'Enterprise Upskilling Programs',
                'Interactive Code Walkthroughs',
            ],
        };
    }

    public static function all(): array
    {
        return array_map(
            fn (self $service) => [
                'slug' => $service->value,
                'title' => $service->title(),
                'description' => $service->description(),
                'deliverables' => $service->deliverables(),
            ],
            self::cases()
        );
    }
}
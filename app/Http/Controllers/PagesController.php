<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $featuredPost = \App\Models\Post::where('is_featured', true)->latest()->first();
        return view('home', ['featuredPost' => $featuredPost]);
    }

    public function services()
    {
        return view('services');
    }

    public function technicalContentCreation()
    {
        $services = [
            [
                'title' => 'Technical Blog Posts',
                'description' => 'Grow your developer audience with technically accurate blog posts that improve search visibility, educate developers, and showcase your product. We create developer content that builds authority, drives organic traffic, and supports long-term developer adoption.',
            ],
            [
                'title' => 'Technical Tutorials',
                'description' => 'Help developers learn by doing with hands-on tutorials, implementation guides, and step-by-step walkthroughs. Our tutorials simplify complex concepts, accelerate onboarding, and help developers successfully build with your product.',
            ],
            [
                'title' => 'Technical Case Studies',
                'description' => 'Demonstrate real-world impact through compelling technical case studies that highlight implementation details, customer success stories, and measurable business outcomes. Build trust with prospects using authentic developer success stories.',
            ],
            [
                'title' => 'Product Launch Content',
                'description' => 'Launch new features with confidence through technical announcements, feature deep dives, release articles, and educational content that clearly communicate value and encourage developer adoption from day one.',
            ],
            [
                'title' => 'Technical Newsletters',
                'description' => 'Keep your developer community informed and engaged with newsletters that share product updates, tutorials, best practices, and industry insights. Build lasting relationships while keeping your product top of mind.',
            ],
            [
                'title' => 'Technical Video Scripts',
                'description' => 'Transform technical concepts into engaging video scripts for product demos, tutorials, webinars, and developer education. Create content that helps developers understand your product faster and increases engagement across multiple channels.',
            ],
        ];
        return view('developer-content',[
            'services' => $services
        ]);
    }

    public function documentationEngineering()
    {
        $services = [
            [
                'title' => 'Documentation Audits',
                'description' => 'Uncover gaps in your developer documentation with a comprehensive documentation audit. We evaluate your onboarding experience, information architecture, API documentation, and developer journey to identify opportunities that improve developer adoption and reduce support requests.',
            ],
            [
                'title' => 'Documentation Strategy',
                'description' => 'Build a documentation strategy that scales with your product and engineering team. We define documentation standards, content architecture, governance, and workflows that create a consistent, high-quality developer experience.',
            ],
            [
                'title' => 'API Documentation',
                'description' => 'Empower developers to integrate with confidence through clear, accurate, and developer-friendly API documentation. We create technical documentation that simplifies implementation, accelerates onboarding, and improves developer adoption.',
            ],
            [
                'title' => 'Docs-as-Code Implementation',
                'description' => 'Modernize your documentation workflow with Docs-as-Code. We implement Git-based documentation, automated publishing, version control, and collaborative review processes that help engineering teams create and maintain documentation efficiently.',
            ],
            [
                'title' => 'Developer Portals & Onboarding',
                'description' => 'Create exceptional first impressions with developer portals, quickstarts, onboarding guides, tutorials, and learning resources that help developers discover, understand, and successfully build with your product.',
            ],
            [
                'title' => 'Documentation Maintenance',
                'description' => 'Keep your documentation accurate as your product evolves. We provide ongoing documentation maintenance to ensure every release, feature update, and API change is reflected in your documentation, giving developers reliable and up-to-date guidance.',
            ],
        ];
        return view('developer-documentation', ['docsServices' => $services]);
    }

    public function about()
    {
        return view('about');
    }
}

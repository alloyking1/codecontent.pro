@props([
    'projects' => [
        [
            'category' => 'software-ai',
            'label' => 'SOFTWARE & AI',
            'title' => 'Enterprise AI Automation',
            'challenge' => 'Manual workflows and fragmented systems were slowing down internal teams and creating unnecessary operational overhead.',
            'solution' => 'Designed and implemented an AI-powered workflow that connected existing systems and automated repetitive operational tasks.',
            'outcome' => '60%',
            'outcomeLabel' => 'Reduction in manual processing time.',
            'visual' => 'code',
            'code' => <<<'CODE'
{
    "workflow": {
        "trigger": "new_request",
        "agent": "workflow-agent",
        "actions": [
            "classify",
            "process",
            "notify"
        ]
    }
}
CODE
        ],

        [
            'category' => 'technical-writing',
            'label' => 'TECHNICAL WRITING',
            'title' => 'API Documentation Series',
            'challenge' => 'A growing API had become difficult for developers to navigate, increasing support requests and slowing adoption.',
            'solution' => 'Created a structured documentation system with practical examples, task-based guides, and clear API references.',
            'outcome' => '50%',
            'outcomeLabel' => 'Increase in developer adoption.',
            'visual' => 'code',
            'code' => <<<'CODE'
# API Reference

GET /v1/resources

Parameters:
- `limit`: Integer
- `cursor`: String
- `filter`: Optional

Response: 200 OK

{
    "status": "success",
    "data": [...]
}
CODE
        ],

        [
            'category' => 'edtech',
            'label' => 'EDTECH',
            'title' => 'Interactive Learning Programme',
            'challenge' => 'Course completion was low because learners were presented with too much theory and not enough practical application.',
            'solution' => 'Redesigned the learning experience around practical exercises, interactive modules, and scenario-based assessments.',
            'outcome' => '85%',
            'outcomeLabel' => 'Course completion rate after redesign.',
            'visual' => 'code',
            'code' => <<<'CODE'
/* Learning Module */

const lesson = {
    objective: "Build a working API",
    activity: "Hands-on exercise",
    assessment: "Practical task",
    feedback: "Instant"
};

return lesson;
CODE
        ],

        [
            'category' => 'software-ai',
            'label' => 'SOFTWARE & AI',
            'title' => 'Internal Engineering Tool',
            'challenge' => 'Engineering teams were spending significant time performing repetitive tasks that could be handled automatically.',
            'solution' => 'Built an internal tool that streamlined the workflow and gave teams a central interface for managing the process.',
            'outcome' => '40%',
            'outcomeLabel' => 'Reduction in workflow time.',
            'visual' => 'code',
            'code' => <<<'CODE'
const workflow = await automation.run({
    input: request,
    validate: true,
    execute: true,
    notify: true
});

return workflow.result;
CODE
        ],

        [
            'category' => 'technical-writing',
            'label' => 'TECHNICAL WRITING',
            'title' => 'Developer Onboarding System',
            'challenge' => 'New developers struggled to understand the product and move from their first interaction to a successful implementation.',
            'solution' => 'Created a structured onboarding journey combining quickstarts, tutorials, reference material, and practical examples.',
            'outcome' => '35%',
            'outcomeLabel' => 'Reduction in onboarding friction.',
            'visual' => 'code',
            'code' => <<<'CODE'
# Quickstart

1. Install the SDK
2. Configure your API key
3. Create your first resource
4. Test the response

You're ready to build.
CODE
        ],

        [
            'category' => 'edtech',
            'label' => 'EDTECH',
            'title' => 'Technical Training Programme',
            'challenge' => 'Learners needed a practical way to apply technical concepts rather than simply consume course material.',
            'solution' => 'Developed a hands-on learning programme using interactive lessons, exercises, assessments, and real-world scenarios.',
            'outcome' => '80%',
            'outcomeLabel' => 'Learner engagement achieved.',
            'visual' => 'code',
            'code' => <<<'CODE'
// Practical Exercise

const challenge = {
    scenario: "Real-world problem",
    task: "Build a solution",
    review: "Evaluate result"
};

complete(challenge);
CODE
        ],
    ],
])

<div
    x-data="{
        activeTab: 'all',
        tabs: [
            { id: 'all', label: 'All' },
            { id: 'software-ai', label: 'Software & AI' },
            { id: 'technical-writing', label: 'Technical Writing & Docs' },
            { id: 'edtech', label: 'EdTech Courses' },
        ],
        projects: @js($projects),

        filteredProjects() {
            if (this.activeTab === 'all') {
                return this.projects;
            }

            return this.projects.filter(
                project => project.category === this.activeTab
            );
        }
    }"
    class="w-full"
>

    {{-- Tabs --}}
    <div class="border-b border-[#D9D9D9]">
        <div class="flex gap-8 overflow-x-auto">

            <template x-for="tab in tabs" :key="tab.id">
                <button
                    type="button"
                    @click="activeTab = tab.id"
                    class="relative shrink-0 pb-4 text-sm font-medium transition-colors"
                    :class="activeTab === tab.id
                        ? 'text-[#0A0A0A]'
                        : 'text-[#525252] hover:text-[#0A0A0A]'"
                >
                    <span x-text="tab.label"></span>

                    <span
                        x-show="activeTab === tab.id"
                        x-transition
                        class="absolute bottom-[-1px] left-0 h-[2px] w-full bg-[#0A0A0A]"
                    ></span>
                </button>
            </template>

        </div>
    </div>


    {{-- Portfolio Grid --}}
    <div
        class="mt-8 grid gap-x-10 gap-y-16 md:grid-cols-2"
    >

        <template
            x-for="(project, index) in filteredProjects()"
            :key="project.title"
        >

            <article
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-3"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="group"
            >

                {{-- Project Visual --}}
                <div
                    class="relative mb-5 flex min-h-[260px] items-center overflow-hidden border border-[#D9D9D9] bg-[#0B0B0B] p-6"
                >

                    {{-- Code --}}
                    <pre
                        class="w-full overflow-hidden font-mono text-[11px] leading-5 text-[#8F7D38] sm:text-xs"
                    ><code x-text="project.code"></code></pre>


                    {{-- Category --}}
                    <div
                        class="absolute bottom-4 left-4 bg-[#FACC15] px-3 py-1 text-[9px] font-bold uppercase tracking-wide text-black"
                        x-text="project.label"
                    ></div>

                </div>


                {{-- Title --}}
                <h3
                    class="font-heading text-3xl font-semibold leading-tight tracking-tight text-[#0A0A0A]"
                    x-text="project.title"
                ></h3>


                {{-- Challenge --}}
                <div class="mt-6">

                    <p class="mb-2 text-[10px] font-bold uppercase tracking-[0.18em] text-[#A58A00]">
                        Challenge
                    </p>

                    <p
                        class="text-sm leading-6 text-[#525252]"
                        x-text="project.challenge"
                    ></p>

                </div>


                {{-- Solution --}}
                <div class="mt-5">

                    <p class="mb-2 text-[10px] font-bold uppercase tracking-[0.18em] text-[#A58A00]">
                        Solution
                    </p>

                    <p
                        class="text-sm leading-6 text-[#525252]"
                        x-text="project.solution"
                    ></p>

                </div>


                {{-- Outcome --}}
                <div class="mt-6 flex items-center gap-4 border-t border-[#D9D9D9] pt-5">

                    <span
                        class="font-heading text-4xl font-semibold tracking-tight text-[#0A0A0A]"
                        x-text="project.outcome"
                    ></span>

                    <div>
                        <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-[#A58A00]">
                            Outcome
                        </p>

                        <p
                            class="text-sm text-[#525252]"
                            x-text="project.outcomeLabel"
                        ></p>
                    </div>

                </div>

            </article>

        </template>

    </div>

</div>
@extends('_layouts.master')

@section('body')
<section class="container mx-auto grid grid-cols-e gap-24">
    <main class="col-span-4 lg:col-span-2 pt-32">
        <h1 class="text-2xl text-gray-600 font-light mb-12 max-w-lg">
            <span class="font-bold">APRED</span> is a map-based tool for exploring the 
            disaster resilience and vulnerability profiles
            of counties across the United States.
        </h1>

        <a href="https://ctil.iu.edu/projects/apred/#">
            <x-button>
                Get Started >
            </x-button>
        </a>
    </main>

    <aside class="col-span-4 col-start-1 lg:col-span-2 lg:col-start-3 bg-cream">
        <div class="px-4 py-12 mx-auto flex justify-between space-x-4">
            <aside class="px-6">
                <x-checkmark />
            </aside>

            <div>
                <header class="text-xl font-semibold mb-6">
                    Business Vulnerability Index
                </header>

                <main>
                    View percentage of businesses within a county 
                    that might be vulnerable to disasters.
                </main>
            </div>
        </div>

        <div class="px-4 py-12 mx-auto flex justify-between space-x-4">
            <aside class="px-6">
                <x-checkmark />
            </aside>

            <div>
                <header class="text-xl font-semibold mb-6">
                    Disaster Resilience Index
                </header>

                <main>
                    Evaluate the capacity of a particular county to
                    recover from disaster events with minimal losses.
                </main>
            </div>
        </div>

        <div class="px-4 py-12 mx-auto flex justify-between space-x-4">
            <aside class="px-6">
                <x-checkmark />
            </aside>

            <div>
                <header class="text-xl font-semibold mb-6">
                    FEMA Disaster Declarations
                </header>

                <main>
                    View information on FEMA Disaster Declarations
                    for a particular county.
                </main>
            </div>
        </div>
    </aside>
</section>

<section class="bg-cream-thick py-12 lg:-mt-32 -mx-4 lg:-mx-8">
    <div class="container mx-auto lg:grid lg:grid-cols-2 lg:gap-24">
        <main class="lg:col-span-1 py-24">
            <header class="text-3xl font-normal">
                Use Cases
            </header>

            <p class="">
                Practitioners and policy makers involved with disaster resilience 
                and economic development can use APRED to visualize and 
                drill-down into resilience metrics for a particular county. 
                <a href="{{ $page->baseUrl }}/docs/getting-started" class="custom-decoration text-burgundy">
                    Learn more about use cases.
                </a>
            </p>
        </main>

        <aside class="hidden lg:mt-24 lg:block lg:col-span-1">
            <x-shape/>
        </aside>
    </div>
</section>

@endsection

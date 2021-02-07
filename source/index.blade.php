@extends('_layouts.master')

@section('body')
<section class="container mx-auto grid grid-cols-4 gap-24 pb-16">
    <main class="col-span-4 lg:col-span-2 pt-32">
        <h1 class="text-3xl font-light mb-24 tracking-normal leading-10">
            <span class="font-bold">APRED</span> is a map-based tool for exploring the 
            disaster resilience and vulnerability profiles
            of counties across the United States.
        </h1>

        <a href="https://ctil.iu.edu/projects/apred/#">
            <x-button>
                OPEN APRED
            </x-button>
        </a>
    </main>

    <aside class="col-span-4 col-start-1 lg:col-span-2 lg:col-start-3 bg-cool-gray pl-2 pr-6 py-10 lg:mt-12 lg:mr-8 border border-gray-300 shadow-md">
        <div class="py-4 space-x-4 flex justify-start">
            <aside class="px-6">
                <x-checkmark />
            </aside>

            <div>
                <header class="text-xl font-semibold mb-6">
                    Business Vulnerability Index
                </header>

                <main class="font-light">
                    View percentage of businesses within a county 
                    that might be vulnerable to disasters.
                </main>
            </div>
        </div>

        <div class="py-4 space-x-4 flex justify-start">
            <aside class="px-6">
                <x-checkmark />
            </aside>

            <div>
                <header class="text-xl font-semibold mb-6">
                    Disaster Resilience Index
                </header>

                <main class="font-light">
                    Evaluate the capacity of a particular county to
                    recover from disaster events with minimal losses.
                </main>
            </div>
        </div>

        <div class="py-4 space-x-4 flex justify-start">
            <aside class="px-6">
                <x-checkmark />
            </aside>

            <div>
                <header class="text-xl font-semibold mb-6">
                    FEMA Disaster Declarations
                </header>

                <main class="font-light">
                    View information on FEMA Disaster Declarations
                    for a particular county.
                </main>
            </div>
        </div>
    </aside>
</section>

<section class="bg-cream-thick py-12 -mx-4 px-4 lg:-mx-8 lg:px-8">
    <div class="container mx-auto lg:grid lg:grid-cols-2 lg:gap-24">
        <section class="lg:col-span-1 py-24">
            <header class="text-4xl font-normal">
                <span class="border-b border-red-800">
                    What is APRED
                </span>
            </header>

            <p class="text-xl font-light leading-9">
                APRED is a map-based platform that provides practitioners with information on 
                the disaster resilience and vulnerability profile of all the counties across 
                the United States.
            </p>
        </section>

        <section class="lg:col-span-1 py-24">
            <header class="text-4xl font-normal">
                <span class="border-b border-gray-700">
                    Why APRED?
                </span>
            </header>

            <p class="text-xl font-light leading-9">
                Practitioners and policy makers involved with disaster resilience 
                and economic development can use APRED to visualize and 
                drill-down into resilience metrics for a particular county. 
            </p>
        </section>
    </div>
</section>

@endsection

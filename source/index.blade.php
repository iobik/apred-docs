@extends('_layouts.master')

@section('body')
<section class="container mx-auto grid grid-cols-2 py-16 gap-24">
    <main class="col-span-2 xl:col-span-1 py-32">
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

    <aside class="col-span-2 xl:col-span-1">
        <div class="bg-cream px-4 py-12 mx-auto flex justify-between space-x-4">
            <aside class="px-6">
                <x-checkmark />
            </aside>

            <div>
                <header class="text-xl font-semibold mb-6">
                    Use Cases
                </header>

                <main>
                    Practitioners and policy makers involved with 
                    disaster resilience and economic development 
                    can use APRED to visualize and drill-down into 
                    resilience metrics for a particular county. 
                    <a href="{{ $page->baseUrl }}/docs/getting-started" class="custom-decoration text-burgundy">Learn more about use cases.</a>
                </main>
            </div>
        </div>

        <div class="bg-cream-thick px-4 py-12 mx-auto flex justify-between space-x-4">
            <aside class="px-6">
                <x-checkmark />
            </aside>

            <div>
                <header class="text-xl font-semibold mb-6">
                    Why APRED?
                </header>

                <main>
                    Practitioners and policy makers involved with 
                    disaster resilience and economic development 
                    can use APRED to visualize and drill-down into 
                    resilience metrics for a particular county. 
                    Learn more about use cases.
                </main>
            </div>
        </div>
    </aside>
</section>

<section class="bg-cream py-12 -mx-4 lg:-mx-8">
    <div class="container mx-auto lg:grid lg:grid-cols-2 lg:gap-24">
        <main class="lg:col-span-1 py-16">
            <header class="text-2xl font-normal">
                Overview
            </header>

            <p class="">
                The annual cost of disasters to the U.S. economy is immense, 
                with natural disasters such as
                hurricanes, earthquakes, flooding 
                and tornados costing often hundreds of billions of dollars a
                year. 
                With a significant increase in the number and cost of declared 
                disasters in the
                U.S. over the last decade, there is strong interest 
                in techniques for quantifying the risk of certain
                kinds of hazardous 
                events... <a href="{{ $page->baseUrl }}/docs/getting-started" class="custom-decoration text-burgundy">Read more</a>
            </p>
        </main>

        <aside class="hidden lg:mt-16 lg:block lg:col-span-1">
            <x-shape/>
        </aside>
    </div>
</section>

@endsection

@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div class="mt-8">
            <h1 id="intro-docs-template" class="text-xl text-gray-600 font-thin">
                Welcome to <span class="font-semibold">{{ $page->siteName }}</span>
            </h1>

            <p class="mt-12 max-w-xl">
                APRED provides information on the Major Disaster Declarations declared under the Robert T. Stafford Disaster 
                Relief and Emergency Assistance Act that may support eligibility for investment assistance from 
                EDA (the U.S. Economic Development Administration).The EDA provides investment assistance to communities 
                and regions to device and implement long-term economic recovery strategies through a variety of 
                construction and non-construction projects.
            </p>   
            
            <p class="mt-4 max-w-xl">
                APRED also allows economic development practitioners to explore the disaster resilience 
                scores of their county, likewise, the number of businesses within their county that 
                could be more vulnerable to hazards and disasters because of the nature of the business, 
                i.e., low infrastructure mobility, high reliance on public utilities like water and electricity, etc. 
                Further, the end-users can also use APRED to review the storm history of the given county.
            </p>

            <div class="flex flex-wrap space-y-4 md:space-y-0 mt-20 mb-10">
                <a href="/docs/getting-started" title="{{ $page->siteName }} getting started" class="w-full text-center btn md:flex-1">
                    Learn how to use APRED
                </a>

                <a href="https://ctil.iu.edu/projects/apred/#/" class="w-full text-center md:flex-1 btn primary">
                    Start Using APRED
                </a>
            </div>
        </div>
    </div>

    <section class="block my-10">
        
    </section>

    <section class="block mt-10 hidden">
        <header class="mb-6 text-3xl font-thin">
            How we measure eligibility: 
        </header>

        <main class="flex flex-wrap">
            <div class="w-full mb-20 lg:w-1/3">
                <header class="font-semibold">
                    Comparing to existing EDA Disaster Declarations
                </header>

                <p>
                    View current and historical information on disaster supplemental appropriation.
                    The platform combines text mining techniques and 
                    data sets on EDA expenditures on disaster supplemental funding
                    to categorize expenditures according to counties and expenditure type. 
                </p>

                <footer clas="pt-6">
                    <p class="block text-gray-600">
                        Powered by EDA Data & Text-mining
                    </p>
                </footer>
            </div>

            <div class="w-full mb-20 lg:w-1/3">
                <header class="font-semibold">
                    Disaster Resilience Index
                </header>

                <p>
                    View any location's resilience
                </p>

                <footer class="pt-6">
                    <p class="block text-gray-600">
                        Powered by BRICS - Baseline Resilience Indicators for Communities
                    </p>
                </footer>
            </div>

            <div class="w-full mb-20 lg:w-1/3">
                <header class="font-semibold">
                    Business Vulnerability Index (BVI)
                </header>

                <p>
                    View how vulnerable businesses contained in 
                    any given area are. 
                </p>

                <footer clas="pt-6">
                    <p class="block text-gray-600">
                        Powered by NAICS Census code
                    </p>
                </footer>
            </div>
        </main>
    </section>

    <hr class="block my-8 border lg:hidden">

    
</section>
@endsection

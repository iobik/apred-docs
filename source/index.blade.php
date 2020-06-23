@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div class="mt-8">
            <h1 id="intro-docs-template" class="text-lg font-thin">
                Welcome to the <span class="font-semibold">{{ $page->siteName }}</span>
            </h1>

            <p id="intro-powered-by-jigsaw" class="text-2xl mt-12 max-w-xl">
                {{ $page->siteDescription }}
            </p>

            <div class="flex flex-wrap space-y-4 md:space-y-0 mt-20 mb-10">
                <a href="/docs/getting-started" title="{{ $page->siteName }} getting started" class="w-full md:flex-1 bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded shadow-lg mr-4 py-2 px-6">
                    Learn how to use this tool
                </a>

                <a href="" title="Jigsaw by Tighten" class="w-full md:flex-1 bg-gray-400 hover:bg-gray-600 text-blue-900 font-normal hover:text-white rounded shadow-lg py-2 px-6">
                    Visit the Declaration Evaluator
                </a>
            </div>
        </div>
    </div>

    <hr class="block my-8 border lg:hidden">

    
</section>
@endsection

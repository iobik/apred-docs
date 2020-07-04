<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:site_name" content="{{ $page->siteName }}"/>
        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}"/>
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:image" content="/assets/img/logo.png"/>
        <meta property="og:type" content="website"/>

        <meta name="twitter:image:alt" content="{{ $page->siteName }}">
        <meta name="twitter:card" content="summary_large_image">

        @if ($page->docsearchApiKey && $page->docsearchIndexName)
            <meta name="generator" content="tighten_jigsaw_doc">
        @endif

        <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">

        @stack('meta')

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

        @if ($page->docsearchApiKey && $page->docsearchIndexName)
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
        @endif
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-gray-100 text-gray-800 leading-normal font-sans">
    @unless( $page->getPath() == '') 
        <header class="flex items-center shadow bg-white border-b h-24 mb-8 py-4" role="banner">
            <div class="container flex justify-between items-center max-w-8xl mx-auto px-4 lg:px-8">
                <div class="flex items-center justify-start">
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                        <img class="h-8 md:h-10 mr-3 hidden" src="/assets/img/logo.svg" alt="{{ $page->siteName }} logo" />

                        <h1 class="text-lg md:text-xl text-blue-900 font-thin hover:text-blue-600 my-0 pr-4">
                            <span class="text-red-700">
                                APRED
                            </span>
                            Analysis Platform for Risk, Resilience and Expenditure in Disasters
                        </h1>
                    </a>
                </div>
                <div class="justify-end hidden lg:flex lg:flex-1">
                    <a href="https://ctil.iu.edu/projects/apred/#/" class="btn primary">
                        Start Using APRED
                    </a>
                </div>
                <div class="hidden flex flex-1 justify-end items-center text-right md:pl-10">
                    @if ($page->docsearchApiKey && $page->docsearchIndexName)
                        @include('_nav.search-input')
                    @endif
                </div>
            </div>

            @yield('nav-toggle')
        </header>
    @endunless

        <main role="main" class="w-full flex-auto">
            @yield('body')
        </main>

        <script src="{{ asset('js/main.js') }}"></script>

        @stack('scripts')

        <footer id="site-footer" class="mt-12 py-48" role="contentinfo">
            <ul class="container max-w-4xl mx-auto px-6">
                <li class="block mb-12">
                    <p>
                        This platform brings data science to decision-makers dealing with the economics of disaster mitigation, analysis, and recovery activities. 
                    </p>

                    <p>
                        This publication was prepared by the CTIL and IBRC at Indiana University using Federal funds 
                        awarded to the Trustees of Indiana University and as a sub-component under award number 
                        ED17HDQ3120040 from the U.S. Economic Development Administration, U.S. Department of Commerce. 
                        The statements, findings, conclusions, and recommendations are those of the author(s) and 
                        do not necessarily reflect the views of the Economic Development Administration or the U.S. Department 
                        of Commerce. 
                    </p>
                </li>
                
                <li class="inline-block">
                    CTIL
                    <a class="underline" href="https://ctil.iu.edu" title="CTIL website">
                        Crisis Technologies Innovation Lab
                    </a> 
                </li>

                <li class="inline-block float-right md:pl-4">
                    <a href="mailto:ctil@iu.edu">
                        clil@iu.edu
                    </a> | 
                    <a href="mailto:ctil@iu.edu">
                        Contact Us
                    </a>
                </li> 

                <li class="block mt-4">
                    <a href="https://www.iu.edu/copyright/index.html">
                        Copyright
                    </a> &copy; {{ date('Y') }} The Trustees of 
                    <a href="https://www.iu.edu/">
                        Indiana University
                    </a>
                </li>

            </ul>
        </footer>
    </body>
</html>

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

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        @if ($page->docsearchApiKey && $page->docsearchIndexName)
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
        @endif
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-gray-100 text-gray-800 leading-normal font-sans">
    @unless( $page->getPath() == '') 
        <header class="flex items-center shadow bg-white border-b h-24 mb-8 py-4" role="banner">
            <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
                    <div class="flex items-center">
                        <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                            <img class="h-8 md:h-10 mr-3 hidden" src="/assets/img/logo.svg" alt="{{ $page->siteName }} logo" />

                            <h1 class="text-lg md:text-xl text-blue-900 font-thin hover:text-blue-600 my-0 pr-4">{{ $page->siteName }}</h1>
                        </a>
                    </div>

                <div class="flex flex-1 justify-end items-center text-right md:pl-10">
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

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')

        <footer class="bg-gray-200 text-center text-sm mt-12 py-4" role="contentinfo">
            <ul class="flex flex-wrap justify-center">
                <li>
                    <p class="max-w-xl text-gray-600">
                        This publication was prepared by the CTIL and IBRC at Indiana University using Federal funds awarded to the Trustees of Indiana University and as a sub-component under award number ED17HDQ3120040 from the U.S. Economic Development Administration, U.S. Department of Commerce. The statements, findings, conclusions, and recommendations are those of the author(s) and do not necessarily reflect the views of the Economic Development Administration or the U.S. Department of Commerce. 
                    </p>
                </li>
                <li class="w-full mb-4">
                    <a href="https://www.iu.edu/copyright/index.html">
                        Copyright
                    </a> &copy; {{ date('Y') }} The Trustees of 
                    <a href="https://www.iu.edu/">
                        Indiana University
                    </a>
                </li>
                <li class="md:mr-2 w-full">
                    <a class="underline text-gray-800" href="https://ctil.iu.edu" title="CTIL website">
                        Crisis Technologies Innovation Lab
                    </a> 
                </li>

            </ul>
        </footer>
    </body>
</html>

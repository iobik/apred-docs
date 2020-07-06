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

        <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/build/css/main.css">

        @if ($page->docsearchApiKey && $page->docsearchIndexName)
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
        @endif
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-gray-100 text-gray-800 leading-normal font-sans">
        <header class="flex items-center shadow bg-white border-b h-10 mb-8 py-8" role="banner">
            <div class="container flex justify-between items-center max-w-8xl mx-auto px-4 lg:px-8">
                <div class="flex items-center ml-10 md:ml-0">
                    <a href="{{ $page->baseUrl }}/" title="{{ $page->siteName }} home" class="inline-flex items-center relative">
                        <img class="h-8 md:h-10 mr-3 hidden" src="/assets/img/logo.svg" alt="{{ $page->siteName }} logo" />

                        <span style="background-color: rgb(144, 147, 153);
                            border-bottom-color: rgb(144, 147, 153);
                            border-bottom-left-radius: 4px;
                            border-bottom-right-radius: 4px;
                            border-bottom-style: solid;
                            border-bottom-width: 1px;
                            border-left-color: rgb(144, 147, 153);
                            border-left-style: solid;
                            border-left-width: 1px;
                            border-right-color: rgb(144, 147, 153);
                            border-right-style: solid;
                            border-right-width: 1px;
                            border-top-color: rgb(144, 147, 153);
                            border-top-left-radius: 4px;
                            border-top-right-radius: 4px;
                            border-top-style: solid;
                            border-top-width: 1px;
                            box-sizing: border-box;
                            color: rgb(255, 255, 255);
                            display: block;
                            font-family: Avenir, Helvetica, Arial, sans-serif;
                            font-size: 12px;
                            height: 20px;
                            left: -45px;
                            line-height: 19px;
                            margin-left: 10px;
                            padding-bottom: 0px;
                            padding-left: 5px;
                            padding-right: 5px;
                            padding-top: 0px;
                            position: absolute;
                            top: -3px;
                            opacity: 0.3;
                            transform: matrix(0.906308, -0.422618, 0.422618, 0.906308, 0, 0);
                            white-space: nowrap;
                            -moz-osx-font-smoothing: grayscale;">
                            <b style="color: rgb(255, 255, 255);
                                font-family: Avenir, Helvetica, Arial, sans-serif;
                                font-size: 12px;
                                line-height: 19px;
                                white-space: nowrap;
                                -moz-osx-font-smoothing: grayscale;">
                                BETA
                            </b>
                        </span>

                        <h1 class="text-xl text-blue-900 font-bold hover:text-blue-600 my-0 pr-4">
                            <span class="text-red-700">
                                APRED
                            </span>

                            <span class="font-light text-sm hidden md:inline">
                                Analysis Platform for Risk, Resilience and Expenditure in Disasters
                            </span>
                        </h1>
                    </a>
                </div>
                @unless( $page->getPath() == '') 
                    <div class="justify-end hidden lg:flex lg:flex-1">
                        <a href="https://ctil.iu.edu/projects/apred/#/" class="btn primary">
                            Start Using APRED
                        </a>
                    </div>
                @else 
                    <div class="justify-end hidden md:flex items-center">
                        <span class="inline-block text-xl pr-4">
                            CTIL
                        </span> 
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIEAAACWCAIAAAB2EXwkAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAmBJREFUeNrs3T1OG0EAgFE7QqF1kcYcgBqJA3i3D2fAVWrfAI5ASyr7CAj3LA21EZ2rrZIGJCSqpCEToYjIkGCS2WF29b4SiWWGJ8/+aOXpH/f0xr3zL2AgBgzEgIEYMBADBmLAQAwYiAEDMWAgBgz0TBsZjun9YPBhZ6eJI18vFt9vbxm8XAD4eHbWxJHnZfmlqqxFYsBADBiIAQM9X78t711/ur9/7a987vd9DsSAgRgw0NpFeG66V1XD0SjusBq6pPmHi6u/9/X8/LQofA6sRWLAQAwYiIH7g19dTCabg8HvP9kej7f399c/wnI2W06nCWY7L8u44/wW402ZCAY3i8XKT4avvG25q+s0r5ys/JVMxmktcj4QAwZiwEAMGIgBAzFgIAYMxICBGDAQAwZiwEAMGIgBAzFgIAYMxICBGDAQAwZiwEAMGIgBA61fFvuAbBVF7/Aw+mF3Xzrm1n9/FV13DIajUfRvJfxpcHBgLRIDBmLAQG9rkOFefDnPqxGDq6Oj5WzWMYAwozCvNq1F1XjcJYYwlzCj9p0POsPQKEDj5+QOMDQNkOK6qNUMCQASXZteTCY3l5etA6hPThIAJDIIl3SnRdEuhjDaNADp7tHaxRDGGUab7C4n3X1yWxgSA6R+VpE/Q3qAnv0yc8gzOwZiwEAMGIgBAzFgoMc28hzWboxXgJ8eZDmd3tV1bpPN9HlR9A2/H5qXZZrN8KxFzgdiwEAMGIgBAzFoaZk+q1jZ+D5W10+2nWfwxzJ8omAtYiAGDMSAgRgwEAMGYsBADBiIAQMxYCAGDJS2HwIMAK+RvsulC4ZHAAAAAElFTkSuQmCC" 
                        class="h-16 inline-block">
                    </div>
                @endunless
                <div class="hidden flex flex-1 justify-end items-center text-right md:pl-10">
                    @if ($page->docsearchApiKey && $page->docsearchIndexName)
                        @include('_nav.search-input')
                    @endif
                </div>
            </div>

            @yield('nav-toggle')
        </header>

        <main role="main" class="w-full flex-auto">
            @yield('body')
        </main>

        <script src="{{ $page->baseUrl }}/assets/build/js/main.js"></script>

        @stack('scripts')

        <footer id="site-footer" class="mt-12 py-48" role="contentinfo">
            <ul class="container max-w-8xl mx-auto px-6">
                <li class="block mb-12">
                    <p class="max-w-4xl">
                        This platform brings data science to decision-makers dealing with the economics of disaster mitigation, analysis, and recovery activities. 
                    </p>

                    <p class="max-w-4xl">
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

                <li class="block mt-4 lg:mt-2">
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

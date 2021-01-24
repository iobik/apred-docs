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

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 


        <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/build/css/main.css">

        @if ($page->docsearchApiKey && $page->docsearchIndexName)
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
        @endif
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-gray-100 text-gray-800 leading-normal font-sans mx-4 lg:mx-0">
        <header class="flex items-center h-10 mb-8 py-12" role="banner">
            <div class="container flex justify-between items-center mx-auto">
                <div class="flex items-center">
                    <a href="{{ $page->baseUrl }}/" title="{{ $page->siteName }} home" class="inline-flex items-center relative">
                        <h1 class="text-3xl font-bold hover:text-red-600 my-0 pr-4">
                            <span class="text-burgundy">
                                APRED
                            </span>
                        </h1>
                    </a>
                </div>
                @unless( $page->getPath() == '') 
                    <div class="justify-end hidden lg:flex lg:flex-1">
                        <a href="https://ctil.iu.edu/projects/apred/#/">
                            <x-button>
                                Start Using APRED
                            </x-button>
                        </a>
                    </div>
                @else 
                    <div class="justify-end hidden md:flex items-center space-x-16">   
                        <nav class="flex space-x-6">
                            <a class="text-gray-700 text-xl font-light inline-block custom-decoration" href="{{ $page->baseUrl }}/docs/getting-started">
                                Use Cases
                            </a>  

                            <a class="text-gray-700 text-xl font-light inline-block custom-decoration" href="{{ $page->baseUrl }}/docs/getting-started">
                                About
                            </a> 
                        </nav> 

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

        <footer class="pt-16 bg-burgundy text-white -mx-4 lg:-mx-8" role="contentinfo">
            <main class="container grid grid-cols-2 mx-auto gap-32 mb-16">
                <section class="col-span-2 lg:col-span-1 inline-block align-middle">
                    <p>
                        This publication was prepared by the CTIL and IBRC at Indiana University using Federal funds 
                        awarded to the Trustees of Indiana University and as a sub-component under award number 
                        ED17HDQ3120040 from the U.S. Economic Development Administration, U.S. Department of Commerce. 
                        The statements, findings, conclusions, and recommendations are those of the author(s) and 
                        do not necessarily reflect the views of the Economic Development Administration or the U.S. Department 
                        of Commerce.
                    </p>

                    <div>
                        <span class="font-bold">
                            Email: 
                        </span>
                        <a href="mailto:ctil@iu.edu" class="custom-decoration">
                            clil@iu.edu
                        </a>
                    </div>
                </section>
                <section class="col-span-2 lg:col-span-1">
                    <header class="font-bold mb-6">
                        Supported By:
                    </header>

                    <main class="space-y-4">
                        <div>
                            <a class="undecorated" target="_blank" href="https://www.eda.gov/">
                                <img class="w-16 inline-block mr-12" src="/assets/img/eda-seal.png" />
                            </a>
                            <a class="custom-decoration" target="_blank" href="https://www.eda.gov/">
                                U.S. Economic Development Administration
                            </a>
                        </div>
                        <div>
                            <a class="undecorated" target="_blank" href="https://ibrc.kelley.iu.edu/">
                                <img class="w-20 inline-block mr-8" src="/assets/img/ibrc-white-logo.png" />
                            </a>
                            <a class="custom-decoration" target="_blank" href="https://ibrc.kelley.iu.edu/">
                                Indiana Business Research Center
                            </a>
                        </div>
                        <div>
                            <a class="undecorated" target="_blank"  href="https://ctil.iu.edu/index.html">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIEAAACWCAIAAAB2EXwkAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAmBJREFUeNrs3T1OG0EAgFE7QqF1kcYcgBqJA3i3D2fAVWrfAI5ASyr7CAj3LA21EZ2rrZIGJCSqpCEToYjIkGCS2WF29b4SiWWGJ8/+aOXpH/f0xr3zL2AgBgzEgIEYMBADBmLAQAwYiAEDMWAgBgz0TBsZjun9YPBhZ6eJI18vFt9vbxm8XAD4eHbWxJHnZfmlqqxFYsBADBiIAQM9X78t711/ur9/7a987vd9DsSAgRgw0NpFeG66V1XD0SjusBq6pPmHi6u/9/X8/LQofA6sRWLAQAwYiIH7g19dTCabg8HvP9kej7f399c/wnI2W06nCWY7L8u44/wW402ZCAY3i8XKT4avvG25q+s0r5ys/JVMxmktcj4QAwZiwEAMGIgBAzFgIAYMxICBGDAQAwZiwEAMGIgBAzFgIAYMxICBGDAQAwZiwEAMGIgBA61fFvuAbBVF7/Aw+mF3Xzrm1n9/FV13DIajUfRvJfxpcHBgLRIDBmLAQG9rkOFefDnPqxGDq6Oj5WzWMYAwozCvNq1F1XjcJYYwlzCj9p0POsPQKEDj5+QOMDQNkOK6qNUMCQASXZteTCY3l5etA6hPThIAJDIIl3SnRdEuhjDaNADp7tHaxRDGGUab7C4n3X1yWxgSA6R+VpE/Q3qAnv0yc8gzOwZiwEAMGIgBAzFgoMc28hzWboxXgJ8eZDmd3tV1bpPN9HlR9A2/H5qXZZrN8KxFzgdiwEAMGIgBAzFoaZk+q1jZ+D5W10+2nWfwxzJ8omAtYiAGDMSAgRgwEAMGYsBADBiIAQMxYCAGDJS2HwIMAK+RvsulC4ZHAAAAAElFTkSuQmCC" 
                                class="w-12 inline-block mr-16">
                            </a>
                            <a class="custom-decoration" target="_blank"  href="https://ctil.iu.edu/index.html">
                                CTIL | Indiana University, Bloomington
                            </a>
                        </div>
                    </main>
                </section>
            </main>

            <aside class="border-t border-gray-200 py-10">
                <div class="container mx-auto">
                    Copyright © 2021 The Trustees of Indiana University |
                    <a href="https://ctil.iu.edu/contact-us/index.html" class="custom-decoration">
                        Contact Us
                    </a>
                </div>
            </aside>
        </footer>
    </body>
</html>

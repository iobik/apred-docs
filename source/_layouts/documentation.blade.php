@extends('_layouts.master')

@section('nav-toggle')
    @include('_nav.menu-toggle')
@endsection

@section('body')

<section class="container mx-auto px-4 py-4 lg:grid lg:grid-cols-8 lg:space-x-4 relative">
    <div id="docs-content" class="DocSearch-content break-words pb-16 lg:col-span-6" v-pre>
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-12 mt-0">
            {{ $page->title }}
        </h1>
        
        @yield('content')

        <footer class="flex justify-end mt-20 items-center">
            <a href="#docs-content" class="pr-8 underline">
                Back to Top of Page
            </a>
            <a href="https://ctil.iu.edu/projects/apred/#/">
                <x-button>
                    Start Using APRED
                </x-button>
            </a>
        </footer>
    </div>

    <nav class="hidden lg:block lg:col-span-2">
        @include('_nav.menu', ['items' => $page->navigation])
    </nav>
</section>
@endsection

@extends('_layouts.master')

@section('nav-toggle')
    @include('_nav.menu-toggle')
@endsection

@section('body')

<section class="container max-w-8xl mx-auto px-6 md:px-8 py-4">
    <div class="flex flex-col lg:flex-row">
        <nav id="js-nav-menu" class="nav-menu hidden lg:block">
            @include('_nav.menu', ['items' => $page->navigation])

            <section class="pt-10 block flex flex-wrap lg:hidden">
                <a href="https://ctil.iu.edu/projects/apred/#/" class="btn primary text-sm w-full text-center">
                    Start Using APRED
                </a>
            </section>
        </nav>

        <div id="docs-content" class="DocSearch-content w-full lg:w-3/5 break-words pb-16 lg:pl-4" v-pre>
            <h1>
                {{ $page->title }}
            </h1>
            
            @yield('content')

            <footer class="flex justify-end mt-20 items-center">
                <a href="#docs-content" class="pr-8 underline">
                    Back to Top of Page
                </a>
                <a href="https://ctil.iu.edu/projects/apred/#/" class="btn primary">
                    Start Using APRED
                </a>
            </footer>
        </div>
    </div>
</section>
@endsection

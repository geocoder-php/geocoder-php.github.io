@extends('_layouts.master')

@section('body')
<section class="container max-w-2xl mx-auto px-6 py-10 md:py-12">
    <nav id="js-nav-menu" class="nav-menu hidden lg:hidden">
        @include('_nav.menu', ['items' => $page->navigation])
    </nav>
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div class="mt-4">
            <h1 id="intro-docs-template">{{ $page->siteName }}</h1>

            <h2 id="intro-powered-by-jigsaw" class="font-light mt-4">{{ $page->siteDescription }}</h2>

            <p class="text-lg">
                Geocoder is a PHP library which helps you build geo-aware applications by providing a powerful abstraction layer for geocoding manipulations.
            </p>

            <div class="flex my-10">
                <a href="/docs" title="{{ $page->siteName }} getting started" class="bg-blue hover:bg-blue-dark font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Documentation</a>

                <a href="{{ $page->repoUrl }}" title="Geocoder on Github" class="bg-grey-light hover:bg-grey-dark text-blue-darkest font-normal hover:text-white rounded py-2 px-6">View on Github</a>
            </div>
        </div>

        <img src="/assets/img/world.svg" alt="{{ $page->siteName }} world map" style="height: 350px" class="mx-auto pl-3 mb-6 lg:mb-0 ">
    </div>

    <hr class="block my-8 border lg:hidden">

    <div class="md:flex -mx-2 -mx-4">
        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-window.svg" class="h-12 w-12" alt="window icon">

            <h3 id="intro-swappable" class="text-2xl text-blue-darkest mb-0">30+ Swappable Providers</h3>

            <p>
                Geocoder support a wide range of third-party services, providing a consistent, swappable interface for use in your projects.
            </p>
        </div>

        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-terminal.svg" class="h-12 w-12" alt="terminal icon">

            <h3 id="intro-tests" class="text-2xl text-blue-darkest mb-0">Extensive Test Coverage</h3>

            <p>
                Geocoder has an extensive test suite with unit tests covering all of common logic, plus detailed integration tests for every provider.
            </p>
        </div>

        <div class="mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-stack.svg" class="h-12 w-12" alt="stack icon">

            <h3 id="intro-frameworks" class="text-2xl text-blue-darkest mb-0">Framework Support</h3>

            <p>
                Geocoder has excellent frameworks integrations to implement in your project.
                Check out our <a href="https://github.com/geocoder-php/GeocoderLaravel">Laravel Package</a>
                and our <a href="https://github.com/geocoder-php/BazingaGeocoderBundle">Symfony Bundle</a>.
            </p>
        </div>
    </div>
</section>
@endsection

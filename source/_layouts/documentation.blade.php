@extends('_layouts.master')

@section('body')
<section class="container max-w-4xl mx-auto px-6 md:px-8 py-4">
    <div class="flex flex-col lg:flex-row">
        <nav id="js-nav-menu" class="nav-menu hidden lg:block">
            @include('_nav.menu', ['items' => $page->navigation])
        </nav>

        <div class="w-full lg:w-2/3 break-words pb-16 lg:pl-4" v-pre>
            @yield('content')
        </div>
    </div>
</section>
@endsection

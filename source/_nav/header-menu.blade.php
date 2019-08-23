<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }}" href="/"
       class="ml-6 text-grey-darker hover:text-blue-600 {{ $page->isActive('/') ? 'active text-blue-600' : '' }}">
        Home
    </a>

    <a title="{{ $page->siteName }} Documentation" href="/docs"
       class="ml-6 text-grey-darker hover:text-blue-600 {{ $page->isActive('/docs/getting-started') ? 'active text-blue-600' : '' }}">
        Documentation
    </a>

    <a title="{{ $page->siteName }} Github" href="{{ $page->repoUrl }}"
       class="ml-6 text-grey-darker hover:text-blue-600 {{ $page->isActive('/about') ? 'active text-blue-600' : '' }}">
        Github
    </a>
</nav>

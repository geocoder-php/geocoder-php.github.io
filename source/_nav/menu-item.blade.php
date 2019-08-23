<li class="list-reset pl-4">
    @if ($url = is_string($item) ? $item : $item->url)
        @if(\Illuminate\Support\Str::startsWith($url, '#'))
            {{-- Menu item with URL--}}
            <a href="{{ $url }}"
               class="{{ 'lvl' . $level }} {{ $page->isActiveParent($item) ? 'lvl' . $level . '-active' : '' }}  nav-menu__item hover:text-blue"
            >
                {{ $label }}
            </a>
        @else
            {{-- Menu item with URL--}}
            <a href="{{ $page->url($url) }}"
               class="{{ 'lvl' . $level }} {{ $page->isActiveParent($item) ? 'lvl' . $level . '-active' : '' }} {{ $page->isActive($url) ? 'active font-semibold text-blue' : '' }} {{ ($item['mobile'] ?? false) ? 'lg:hidden' : '' }}  nav-menu__item hover:text-blue"
            >
                {{ $label }}
            </a>
        @endif
    @else
        {{-- Menu item without URL--}}
        <p class="nav-menu__item text-grey-dark">{{ $label }}</p>
    @endif

    @if (! is_string($item) && $item->children)
        {{-- Recursively handle children --}}
        @include('_nav.menu', ['items' => $item->children, 'level' => ++$level])
    @endif
</li>

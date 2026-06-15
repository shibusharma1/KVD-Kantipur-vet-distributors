@if ($paginator->hasPages())
    <div class="mt-8 flex justify-center reveal">
        <nav class="flex items-center gap-3" aria-label="Pagination">

            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span
                    class="w-11 h-11 rounded-2xl border border-gray-200 flex items-center justify-center text-gray-400 cursor-not-allowed">
                    <i class="fa-solid fa-angle-left"></i>
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}"
                    rel="prev"
                    class="w-11 h-11 rounded-2xl border border-gray-200 flex items-center justify-center text-primary hover:bg-primary hover:text-white transition duration-300">
                    <i class="fa-solid fa-angle-left"></i>
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)

                {{-- Three Dots Separator --}}
                @if (is_string($element))
                    <span
                        class="w-11 h-11 rounded-2xl border border-gray-200 flex items-center justify-center text-gray-500">
                        {{ $element }}
                    </span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)

                        @if ($page == $paginator->currentPage())
                            <span
                                class="w-11 h-11 rounded-2xl bg-primary text-white flex items-center justify-center font-semibold">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}"
                                class="w-11 h-11 rounded-2xl border border-gray-200 flex items-center justify-center text-primary hover:bg-primary hover:text-white transition duration-300">
                                {{ $page }}
                            </a>
                        @endif

                    @endforeach
                @endif

            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                    rel="next"
                    class="w-11 h-11 rounded-2xl border border-gray-200 flex items-center justify-center text-primary hover:bg-primary hover:text-white transition duration-300">
                    <i class="fa-solid fa-angle-right"></i>
                </a>
            @else
                <span
                    class="w-11 h-11 rounded-2xl border border-gray-200 flex items-center justify-center text-gray-400 cursor-not-allowed">
                    <i class="fa-solid fa-angle-right"></i>
                </span>
            @endif

        </nav>
    </div>
@endif
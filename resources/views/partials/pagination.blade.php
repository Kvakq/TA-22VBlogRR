<nav class="flex justify-center my-6">
    <div class="join space-x-3">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a aria-disabled="true" aria-label="@lang('pagination.previous')" class="join-item btn btn-disabled text-lg bg-gray-700 text-gray-400 px-4 py-2 rounded-md">«</a>
        @else
            <a rel="prev" aria-label="@lang('pagination.previous')" href="{{ $paginator->previousPageUrl() }}" class="join-item btn text-lg bg-gray-700 hover:bg-gray-600 text-gray-300 px-4 py-2 rounded-md">«</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <a aria-disabled="true" class="join-item btn btn-disabled text-lg bg-gray-700 text-gray-400 px-4 py-2 rounded-md">{{ $element }}</a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a aria-current="page" class="join-item btn btn-active bg-gray-600 text-white text-lg px-4 py-2 rounded-md">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}" class="join-item btn text-lg bg-gray-700 hover:bg-gray-600 text-gray-300 px-4 py-2 rounded-md">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')" class="join-item btn text-lg bg-gray-700 hover:bg-gray-600 text-gray-300 px-4 py-2 rounded-md">»</a>
        @else
            <a aria-disabled="true" aria-label="@lang('pagination.next')" class="join-item btn btn-disabled text-lg bg-gray-700 text-gray-400 px-4 py-2 rounded-md">»</a>
        @endif
    </div>
</nav>

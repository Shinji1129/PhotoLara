@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="pagination--item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="pagination--link" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                </li>
            @else
                <li class="pagination--item">
                    <a class="pagination--link pagination--action" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="fas fa-chevron-left"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="pagination--item disabled" aria-disabled="true"><span class="pagination--link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="pagination--item active" aria-current="page"><span class="pagination--link">{{ $page }}</span></li>
                        @else
                            <li class="pagination--item"><a class="pagination--link pagination--action" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="pagination--item">
                    <a class="pagination--link pagination--action" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="fas fa-chevron-right"></i></a>
                </li>
            @else
                <li class="pagination--item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="pagination--link" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                </li>
            @endif
        </ul>
    </nav>
@endif

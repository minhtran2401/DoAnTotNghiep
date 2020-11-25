@if ($paginator->hasPages())
    <nav>
        <ul class="panigation-contain">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                {{-- <li class="link-page disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li> --}}
            @else
            <li><a href="{{ $paginator->previousPageUrl() }}"  rel="next" class="link-page next"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>

                {{-- <li class="link-page">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li> --}}
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="link-page disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                        <li><span class="current-page">{{ $page }}</span></li>
                        @else
                            <li class="link-page"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}"  rel="next" class="link-page next"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                
            @else

              

              
            @endif
        </ul>
    </nav>
@endif

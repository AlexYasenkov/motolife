@if ($paginator->hasPages())
    <ul class="pagination pagination-lg justify-content-end">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link"><i class="fas fa-arrow-left"></i></span></li>
        @else
            <li class="page-item"><a class="page-link text-info" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fas fa-arrow-left"></i></a></li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link text-info" href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fas fa-arrow-right"></i></a></li>
        @else
            <li class="page-item disabled"><span class="page-link"><i class="fas fa-arrow-right"></i></span></li>
        @endif
    </ul>
@endif

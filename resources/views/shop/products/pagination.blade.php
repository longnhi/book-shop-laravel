<div class="col-lg-12 text-center">
    <div class="pagination__option">
        @if($books->currentPage() != 1)
            <a href="{{ $books->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a>
        @endif

        @for($i=1; $i<=$books->lastPage();$i++)
            @if($i==$books->currentPage())
                <a href="{{ $books->url($books->currentPage()) }}" class="active">{{ $books->currentPage() }}</a>
            @else
            <a href="{{ $books->url($i) }}">{{ $i }}</a>
            @endif
        @endfor

        @if($books->currentPage() != $books->lastPage())
            <a href="{{ $books->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a>
        @endif
    </div>
</div>
@extends('shop.layouts.app')

@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="{{URL::TO('/home')}}"><i class="fa fa-home"></i>Home</a>
                    <span>Author</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Shop Section Begin -->
<section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row">
                    @foreach($authors as $key=>$author)
                        <div class="col-lg-3 col-md-3">
                            <div class="product__item">
                                <a href="{{URL::TO('/author/detail/'.$author->id)}}">
                                    <div class="product__item__pic set-bg" data-setbg="{{asset($author->avatar) }}"></div>
                                    <div class="product__item__text">
                                        <h6>{{ $author->name }}</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-lg-12 text-center">
                        <div class="pagination__option">
                            
                            @if($authors->currentPage() != 1)
                                <a href="{{ $authors->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a>
                            @endif

                            @for($i=1; $i<=$authors->lastPage();$i++)
                                @if($i==$authors->currentPage())
                                    <a href="{{ $authors->url($authors->currentPage()) }}" class="active">{{ $authors->currentPage() }}</a>
                                @else
                                    <a href="{{ $authors->url($i) }}">{{ $i }}</a>
                                @endif
                            @endfor

                            @if($authors->currentPage() != $authors->lastPage())
                                <a href="{{ $authors->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section End -->
@endsection
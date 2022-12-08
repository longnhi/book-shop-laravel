<div class="product__item">
    <div class="product__item__pic set-bg" data-setbg="{{asset($book->image) }}">
        <ul class="product__hover">
            <li><a href="{{asset('/product/detail/'.$book->id)}}"><span class="arrow_expand"></span></a></li>
            @if(!Auth::check())
                <li>
                    <a href="{{URL::to('/login')}}">
                        <span class="icon_heart_alt"></span>
                    </a>
                </li>
            @elseif(Auth::check() && App\Models\Wishlist::where('id_book',$book->id)->where('id_user',Auth::user()->id)->get()->count()>0)
                <li>
                    @php
                        $wishlist = App\Models\Wishlist::where('id_book',$book->id)->where('id_user',Auth::user()->id)->get()
                    @endphp
                    
                    <a href="#" onclick="event.preventDefault(); 
                        document.getElementById('remove_from_wishlist_{{$book->id}}').submit();">
                        <span class="icon_heart"></span>
                    </a>
                    <form id="remove_from_wishlist_{{$book->id}}" action="{{URL::to('/remove-from-wishlist/'.$wishlist[0]->id)}}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                    </form>
                </li>
            @else
                <li>
                    <a href="#" onclick="event.preventDefault(); 
                        document.getElementById('add_to_wishlist_{{$book->id}}').submit();">
                        <span class="icon_heart_alt"></span>
                    </a>
                    <form id="add_to_wishlist_{{$book->id}}" action="{{URL::to('/add-to-wishlist')}}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        <input type="text" name="id_book" value="{{$book->id}}">
                    </form>
                </li>
            @endif
            <li><a href="#" onclick="event.preventDefault();document.getElementById('add_to_card_{{$book->id}}').submit();"><span class="icon_cart_alt"></span></a>
        
                <form id="add_to_card_{{$book->id}}" action="{{URL::to('/add-to-carts')}}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    <input type="text" name="id" value="{{$book->id}}">
                </form>
            </li>
        </ul>
    </div>
    <div class="product__item__text">
        <h6><a href="{{asset('/product/detail/'.$book->id)}}">{{ $book->name }}</a></h6>
        <div class="product__price">$ {{ $book->price }}</div>
    </div>
</div>
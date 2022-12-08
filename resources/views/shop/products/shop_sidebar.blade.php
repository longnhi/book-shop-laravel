<div class="shop__sidebar">
    <div class="sidebar__categories">
        <div class="section-title">
            <h4>Book</h4>
        </div>
        <div class="categories__accordion">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-heading active">
                        <a data-toggle="collapse" data-target="#collapseOne">Category</a>
                    </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                @foreach($categorys as $key=>$category)
                                <li><a href="{{URL::to('/products-by-category/'.$category->id)}}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-heading">
                        <a data-toggle="collapse" data-target="#collapseTwo">Publisher</a>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                @foreach($publishers as $key=>$publisher)
                                <li><a href="{{URL::to('/products-by-publisher/'.$publisher->id)}}">{{ $publisher->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-heading">
                        <a data-toggle="collapse" data-target="#collapseThree">Author</a>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                @foreach($authors as $key=>$author)
                                    <li><a href="{{URL::to('/products-by-author/'.$author->id)}}">{{ $author->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
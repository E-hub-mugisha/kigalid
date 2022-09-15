<div class="sidebar">

    <!-- Search Start -->
    <div class="sidebar-widget widget-search">
        <form method="post">
            <div class="andro_search-adv-input">
                <input type="text" class="form-control" placeholder="Look for  Crafted Wine, Auto Bottles " name="search" value="">
                <button type="submit" name="button"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- Search End -->

    <!-- Filter: Categories Start -->
    <div class="sidebar-widget">
        <h5 class="widget-title"> Category </h5>
        <ul class="sidebar-widget-list">
            @forelse($shop_categories_menu as $category)
            <li>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <a href="{{ route('shop.index', $category->slug) }}" class="custom-control-label" for="customCheck1">{{ $category->name }}</a>
                </div>
                @forelse($category->appearedChildren as $sub_category)
            <li class="mb-2">
                <a class="reset-anchor" href="{{ route('shop.index', $sub_category->slug) }}">
                    {{ $sub_category->name }}
                </a>
            </li>
            @empty
            @endforelse
            </li>
            @empty
            @endforelse
        </ul>

    </div>
    <!-- Filter: Categories End -->

    <!-- Filter: Condition Start -->
    <div class="sidebar-widget">
        <h5 class="widget-title"> Condition </h5>
        <ul class="sidebar-widget-list">
            @foreach($shop_tags_menu as $tag)
            <li>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck7">
                    <a href="{{ route('shop.tag', $tag->slug) }}" class="custom-control-label" for="customCheck7">{{ $tag->name }}
                        ({{ $tag->products_count }})</a>
                </div>
            </li>
            @endforeach
        </ul>

    </div>
    <!-- Filter: Condition End -->

    <!-- Filter: State Start -->
    <div class="sidebar-widget">
        <h5 class="widget-title"> RECENT REVIEWS </h5>
        <ul class="sidebar-widget-list">
            @foreach($recent_reviews as $recent_review)
            <li>
                <div class="post-wrapper d-flex">
                    <div class="mb-2">
                        <img src="{{ get_gravatar($recent_review->email, 50) }}" alt="{{ $recent_review->name }}">
                    </div>
                    <div class="ml-3 p-0">
                        @if(isset($recent_review->product->slug))
                        <p>
                            <span class="">{{ $recent_review->user->full_name }}</span>
                            <small> review on :
                                {{ $recent_review->product->name }}
                            </small>
                        </p>
                        <p>{!! \Illuminate\Support\Str::limit($recent_review->review, 30, '...') !!}</p>
                        @else

                        <h6><span class="text-success">{{ $recent_review->name }}</span>
                            <small> review : </small>
                        </h6>
                        <p>{!! \Illuminate\Support\Str::limit($recent_review->review, 30, '...') !!}</p>

                        @endif
                    </div>
                </div>
            </li>
            @endforeach
        </ul>

    </div>
    <!-- Filter: State End -->

    <!-- Filter: Newness Start -->
    <div class="sidebar-widget">
        <h5 class="widget-title"> Newness </h5>
        <input type="text" class="js-range-slider" name="freshness_range" value="" data-type="double" data-min="0" data-max="10" data-from="4" data-to="6" data-grid="true" data-postfix=" days" />
    </div>
    <!-- Filter: Newness End -->

    <!-- Filter: Price Start -->
    <div class="sidebar-widget">
        <h5 class="widget-title"> Price </h5>
        <input type="text" class="js-range-slider" name="freshness_range" value="" data-type="double" data-min="0" data-max="500" data-from="10" data-to="100" data-grid="true" data-postfix=" $" />
    </div>
    <!-- Filter: Price End -->

</div>
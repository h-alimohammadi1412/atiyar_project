<nav class="js-breadcrumb ">
    <ul vocab="https://schema.org/" typeof="BreadcrumbList" class="c-breadcrumb">
        <li property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                                            href="/"><span
                    property="name">آتی یار</span></a>
            <meta property="position" content="1">
        </li>
        <li property="itemListElement" typeof="ListItem">
            <a property="item" typeof="WebPage"
               href="{{$product->category->link}}"><span
                    property="name">{{$product->category->title}}</span></a>
            <meta property="position" content="2">
        </li>
        <li property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                                            href="/search{{$product->subcategory->link}}"><span
                    property="name">{{$product->subcategory->title}}</span></a>
            <meta property="position" content="3">
        </li>
        <li property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
             href="/search{{$product->childcategory->link}}"><span
                    property="name">{{$product->childcategory->title}}</span></a>
            <meta property="position" content="4">
        </li>
        @if ($product->categorylevel4_id != null)
            <li property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                href="/search{{$product->categorylevel4->link}}"><span
                        property="name">{{$product->categorylevel4->title}}</span></a>
                <meta property="position" content="5">
            </li>
        @endif

        <li><span
                property="name">{{$product->title}}	</span>
        </li>
    </ul>
</nav>
<div class="c-product__ext-links"><a
        href="/landings/seller-introduction/"
        class="c-product__ext-link c-product__ext-link--seller"
        data-snt-event="dkProductPageClick"
        data-snt-params="{&quot;item&quot;:&quot;seller-registration&quot;,&quot;item_option&quot;:null}"
        data-event="seller_reg_link" data-event-category="product_page"
        data-event-label="dkp: 3048126 - current_seller: آتی یار"
        title="کالای خود را در آتی یار بفروشید" target="_blank">کالای خود را در آتی یار
        بفروشید</a></div>
</div>

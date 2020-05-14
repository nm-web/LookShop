<form class="search-form" method="get" action="<?php echo home_url( '/' ) ?>" role="search">
    <button class="btn-search" type="button">
        <svg class="svg-sprite-icon icon-search">
            <use xlink:href="<?php bloginfo( 'template_url' ); ?>/assets/images/svg/symbol/sprite.svg#search"></use>
        </svg>
    </button>
    <div class="text-input-box">
        <div class="text-input">
            <input class="text-input__control" type="text" placeholder="Search...." value="<?php echo get_search_query() ?>" name="s">
            <button class="btn-find" type="submit">find</button>
        </div>
    </div>
</form>

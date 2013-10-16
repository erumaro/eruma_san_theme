    <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
        <input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Sök', 'erumasan' ); ?>" />
        <input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Sök', 'erumasan' ); ?>" />
    </form>
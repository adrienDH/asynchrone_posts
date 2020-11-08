<?php
    $args = array(
        'post_type'      => "post",
        'post_status'    => "publish",
        'posts_per_page' => 3,
        'order'          => "DESC",
    );
    $posts = new WP_Query($args);
?>

<?php $postIn = array() ?>
<div class="full-width list-post">
    <?php while ($posts->have_posts()): $posts->the_post(); ?>
        <?php require(PLUGIN_VIEWS_THUMBNAILS . "thumbnail1.php"); ?>
        <?php $postIn[] = get_the_ID() ?>
    <?php endwhile; wp_reset_postdata(); ?>
</div>

<div class="button-more-post-wrapper">
    <button
        class="ajax-more-post more-post"
        data-ajax-url="<?php echo admin_url('admin-ajax.php') ?>"
        data-post-not-in="<?php echo json_encode($postIn) ?>"
    >
        VOIR PLUS
    </button>
</div>
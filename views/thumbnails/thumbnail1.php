<?php
    $categories = get_the_category();
    $urlPicture = get_the_post_thumbnail_url();
?>

<div class="thumbnail-post-wrapper">
    <a href="<?php echo get_permalink(get_the_ID()) ?>" title="<?php echo get_the_title() ?>" class="thumbnail-post">
        <?php if(!empty($urlPicture)): ?>
            <div class="img" style="background-image: url('<?php echo $urlPicture ?>')"></div>
        <?php endif; ?>
        <div class="content-post">
            <div class="title-post"><?php echo get_the_title() ?></div>
            <div class="categories">
                <?php foreach($categories as $category): ?>
                    <strong><?php echo mb_strtoupper($category->name) ?></strong>
                <?php endforeach; ?>
                <div class="font-light">
                    <?php echo get_the_date("d/m/Y") ?>
                </div>
            </div>
        </div>
    </a>
</div>


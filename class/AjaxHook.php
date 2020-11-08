<?php

namespace Dhermy;

class AjaxHook {
    public function init() {
        add_action('wp_ajax_add_more_posts', array($this, 'add_more_posts'));
        add_action('wp_ajax_nopriv_add_more_posts', array($this, 'add_more_posts'));
    }

    function add_more_posts() {
        $postNotIn = array();
        if(isset($_POST['post__not_in'])) {
            $postNotIn = json_decode($_POST['post__not_in']);
        }

        $args = array(
            'post_type' => "post",
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'post__not_in' => $postNotIn,
        );

        $ajax_query = new \WP_Query($args);

        if($ajax_query->have_posts()):
            while ($ajax_query->have_posts()) : $ajax_query->the_post();
                require(PLUGIN_VIEWS_THUMBNAILS . "thumbnail1.php");
            endwhile;
        endif;

        die;
    }
}

?>
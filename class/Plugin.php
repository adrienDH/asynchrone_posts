<?php

namespace Dhermy;

class Plugin {
    public function __construct() {
        add_action('admin_menu', array($this, 'asynchrone_posts_menu'));
        add_shortcode('asynchrone_posts', array($this, "asynchrone_posts"));
        $this->addScripts();
        $this->addCss();
        (new \Dhermy\AjaxHook())->init();
    }

    public function asynchrone_posts_menu() {
        add_menu_page ('Asynchrone Posts', 'Asynchrone Posts', 'manage_options', 'asynchrone-osts-menu', [__CLASS__, "add_front_back_office"]);
    }

    public function addScripts() {
        wp_enqueue_script("asynchrone-posts-js", PLUGIN_URI . "asynchrone-posts/assets/js/ajax.js", array(), "1.0.0", true);
    }

    public function addCss() {
        wp_enqueue_style("asynchrone-posts-css", PLUGIN_URI . 'asynchrone-posts/assets/css/main.min.css', array(), "0.0.1");
    }

    public function asynchrone_posts() {
        ob_start();
        require_once(PLUGIN_VIEWS . "posts-list.php");
        return ob_get_clean();
    }

    public function add_front_back_office() {
        ?>
        <h1>Ajouter vos articles sans recharcher votre page !</h1>
        <?php
    }
}

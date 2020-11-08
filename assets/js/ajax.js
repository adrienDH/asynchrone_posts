/**
 * Theme functions file.
 */

( function(window, $, document ) {
    'use strict';

    var AjaxWidget = function (element) {
        this.element = element;
        this.$element = $(element);
        this.$ajaxMorePosts = this.$element.find(".ajax-more-post");

        this.init();
    };

    AjaxWidget.prototype = {
        init: function () {
            this.bindListeners();
        },

        bindListeners: function () {
            this.$ajaxMorePosts.on("click", this.AddPostsAjax.bind(this));
        },

        AddPostsAjax: function(e) {
            var ajaxUrl = $(e.currentTarget).attr('data-ajax-url');
            var postNotIn = $(e.currentTarget).attr('data-post-not-in');

            $.post(
                ajaxUrl,
                {
                    'action': 'add_more_posts',
                    'post__not_in': postNotIn,
                },
                function(response){
                    var $listPost = $('.list-post');
                    $listPost.append($(response).hide().fadeIn());
                    $(".ajax-more-post").remove();

                    $(document).trigger("refresh-posts");
                }
            );
        },
    };

    var initialize = function (context) {
        $('body', context).each(function (index, item) {
            var $element = $(item);

            if (!$element.data('ajax_widget')) {
                $element.data('ajax_widget', new AjaxWidget(item));
            }
        });
    };

    $(function () {
        initialize(document);
    });

})(window, window.jQuery, window.document);
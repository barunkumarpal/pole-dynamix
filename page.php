<?php get_header(); ?>

<div class="container mb-4" style="margin-top: 200px">
    <?php 
    if(have_posts()){
        while(have_posts()){
            the_post();
            the_content();
        }
    }
    ?>
</div>

<?php get_footer(); ?>
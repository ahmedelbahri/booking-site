1<?php
    get_header();
?>
<section>
    <div class="container">
        <?php
            if (have_posts())
            {
                while (have_posts())
                {
                    the_post();
                    get_template_part('template-parts/content', 'article');
                }
            }
        ?>
    </div>
</section>
<?php
    get_footer();
?>

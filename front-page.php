<?php
get_header(); ?>

<div class="site-content clearfix">

                <div class="home-columns clearfix">
                  <div class="container">
                    <div class="row">

                        <?php  // Opnion post loop begins here
                        $homePosts = new WP_Query('cat=3');

                        if ($homePosts->have_posts()) :

                            while ($homePosts->have_posts()) : $homePosts->the_post(); ?>
                                  <a href="<?php the_permalink(); ?>">
                                    <div class="col span_3 destaquehome">
                                      <h2><?php the_title(); ?></h2>
                                    </div>
                                  </a>
                                <!-- texto conteudo <?php the_excerpt(); ?> -->
                            <?php endwhile;

                            else :
                                echo '<p>  No content found </p>';
                            endif;
                            wp_reset_postdata(); ?>

                    </div>
                  </div>

                    <div class="row">

                        <?php  // Opnion post loop begins here
                        $contentPosts = new WP_Query('cat=5');

                        if ($contentPosts->have_posts()) :

                            while ($contentPosts->have_posts()) : $contentPosts->the_post(); ?>
                              <div class="col span_12 content-intro">
                                <h1><?php the_title(); ?></h1>
                                <?php the_excerpt(); ?>
                              </div>
                            <?php endwhile;

                            else :
                                echo '<p>  No content found </p>';
                            endif;
                            wp_reset_postdata(); ?>
                    </div>

                    <div class="row">

                        <?php  // Opnion post loop begins here
                        $contentPage = new WP_Query('page_id=13');

                        if ($contentPage->have_posts()) :

                            while ($contentPage->have_posts()) : $contentPage->the_post(); ?>
                              <div class="col span_12 content-intro">
                                <h1><?php the_title(); ?></h1>
                                <?php the_excerpt(); ?>
                              </div>
                            <?php endwhile;

                            else :
                                echo '<p>  No content found </p>';
                            endif;
                            wp_reset_postdata(); ?>
                    </div>
<div class="container">
                    <div class="row">

                        <?php  // Opnion post loop begins here
                        $galeria01Page = new WP_Query('page_id=32');

                        if ($galeria01Page->have_posts()) :

                            while ($galeria01Page->have_posts()) : $galeria01Page->the_post(); ?>
                              <a href="<?php the_permalink(); ?>">
                                <div class="col span_3 content-galeria">
                                  <h1><?php the_title(); ?></h1>
                                  <?php the_excerpt(); ?>
                                </div>
                              </a>
                            <?php endwhile;

                            else :
                                echo '<p>  No content found </p>';
                            endif;
                            wp_reset_postdata(); ?>

                            <?php  // Opnion post loop begins here
                            $galeria01Page = new WP_Query('page_id=34');

                            if ($galeria01Page->have_posts()) :

                                while ($galeria01Page->have_posts()) : $galeria01Page->the_post(); ?>
                                  <div class="col span_3 content-galeria">
                                    <h1><?php the_title(); ?></h1>
                                    <?php the_excerpt(); ?>
                                  </div>
                                <?php endwhile;

                                else :
                                    echo '<p>  No content found </p>';
                                endif;
                                wp_reset_postdata(); ?>

                                <?php  // Opnion post loop begins here
                                $galeria01Page = new WP_Query('page_id=36');

                                if ($galeria01Page->have_posts()) :

                                    while ($galeria01Page->have_posts()) : $galeria01Page->the_post(); ?>
                                      <div class="col span_3 content-galeria">
                                        <h1><?php the_title(); ?></h1>
                                        <?php the_excerpt(); ?>
                                      </div>
                                    <?php endwhile;

                                    else :
                                        echo '<p>  No content found </p>';
                                    endif;
                                    wp_reset_postdata(); ?>

                                    <?php  // Opnion post loop begins here
                                    $galeria01Page = new WP_Query('page_id=38');

                                    if ($galeria01Page->have_posts()) :

                                        while ($galeria01Page->have_posts()) : $galeria01Page->the_post(); ?>
                                          <div class="col span_3 content-galeria">
                                            <h1><?php the_title(); ?></h1>
                                            <?php the_excerpt(); ?>
                                          </div>
                                        <?php endwhile;

                                        else :
                                            echo '<p>  No content found </p>';
                                        endif;
                                        wp_reset_postdata(); ?>
                    </div>
                  </div>
              </div>






</div>

    <?php get_footer();

?>

<?php get_header(); ?>


        <div class="carusell">
            <img src="<?php header_image(); ?>" alt="Headerimage" />
        </div> <!-- End of carusell -->
        <div class="content">

        <?php get_sidebar('left'); ?>

            <section class="main">
               <?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?> 
               <article class="post"> 
                    <header class="post">
                        <section class="entry-title">
                            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"
                                rel="bookmark"><?php the_title(); ?></a></h2>
                        </section> <!-- End of entry-title -->

                        <section class="entry-meta">
                            <p>Written by <?php the_author_posts_link(); ?>
                            on <?php the_time ('j F Y'); ?>
                            in <?php the_category (', '); ?>.
                            <?php if (comments_open()) {
                                echo '<span class="comments-link"><a href="' . get_comments_link() . '">Comment!</a></span>';
                            }
                        ?>
                        </p>
                </section><!-- End of entry-meta -->
                    </header> <!-- End of article post -->

                
                <section class="entry-content">
                    <?php the_content (); ?>
                </section><!-- End of entry-content -->

                <footer class="post">

                </footer><!-- End of footer post -->


               </article> <!-- End of post -->
               <!-- avslutar while loopen -->
               <?php endwhile; else: ?>
                <section class="entry-title">
                    <h2>Doh!</h2>
                </section><!-- End of entry-title -->
                <section class="entry-content">
                    <p>There is nothing in here...</p>
                </section><!-- End of entry-content -->
                <!-- avslutar if satsen -->
                <?php endif; ?>


            </section> <!-- End of section.main -->

            <?php get_sidebar('right'); ?>

        </div> <!-- End of content -->

        <?php get_footer(); ?>
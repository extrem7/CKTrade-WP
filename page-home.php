<?php
/* Template Name: Главная */
get_header(); ?>
<main>
    <div class="container">
        <div class="row align-items-start justify-content-between">
            <div class="content col-md-8">
                <h1 class="title"><?php the_title() ?></h1>
                <p><? echo apply_filters( 'the_content', get_post_field( 'post_content', $id ) ); ?></p>
            </div>
            <aside class="sidebar col-xl-3 col-md-4">
                <div class="news">
                    <p class="title">Новости</p>
					<?php
					$temp     = $wp_query;
					$wp_query = null;
					$wp_query = new WP_Query();
					$wp_query->query( [ 'cat' => '6', 'posts_per_page' => 2 ] );
					while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                        <article>
                            <img src="<?php the_post_thumbnail_url() ?>" alt="<?php get_the_post_thumbnail_caption() ?>"
                                 class="pic">
                            <div class="short">
                                <span class="date"><?php echo get_the_date('d.m.Y') ?></span>
                                <p class="text"><?php echo $post->post_excerpt ?></p>
                                <a href="<?php the_permalink() ?>">Подробнее</a>
                            </div>
                        </article>
					<?php endwhile;
					$wp_query = null;
					$wp_query = $temp;
					wp_reset_query(); ?>
                </div>
                <div class="useful">
                    <p class="title">Полезное</p>
					<?php
					$temp     = $wp_query;
					$wp_query = null;
					$wp_query = new WP_Query();
					$wp_query->query( [ 'cat' => '7', 'posts_per_page' => 2 ] );
					while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                        <article>
                            <img src="<?php the_post_thumbnail_url() ?>"
                                 alt="<?php echo get_the_post_thumbnail_caption() ?>"
                                 class="pic">
                            <div class="short">
                                <p class="text"><?php echo $post->post_excerpt ?></p>
                                <a href="<?php the_permalink() ?>">Подробнее</a>
                            </div>
                        </article>
					<?php endwhile;
					$wp_query = null;
					$wp_query = $temp;
					wp_reset_query(); ?>
                </div>
            </aside>
        </div>
    </div>
</main>
<section class="tools">
    <div class="container">
        <div class="row justify-content-center">
			<?php while ( have_rows( 'tools-row' ) ) : the_row(); ?>
                <div class="col-lg-3 col-md-4">
                    <div class="item">
                        <a href="<?php the_sub_field( 'link' ) ?>">
                            <img <?php repeater_image( 'image' ) ?>>
                            <p><?php the_sub_field( 'text' ) ?></p>
                        </a>
                    </div>
                </div>
			<?php endwhile; ?>
        </div>
        <h2 class="title"><?php the_field( 'title-tools' ) ?></h2>
    </div>
</section>
<section class="advantages">
    <h2 class="title"><?php the_field( 'benefit-title' ) ?></h2>
    <div class="container">
        <div class="row">
			<?php while ( have_rows( 'benefit-row' ) ) : the_row(); ?>
                <div class="col-md-4 col-sm-6">
                    <div class="item">
                        <div class="icon">
                            <img <?php repeater_image( 'image' ) ?>>
                        </div>
                        <p><?php the_sub_field( 'text' ) ?></p>
                    </div>
                </div>
			<?php endwhile; ?>
        </div>
        <button class="button orange" data-toggle="modal" data-target="#order-2"><?php the_field( 'benefit-btn' ) ?>
        </button>
    </div>
</section>
<?php get_footer(); ?>

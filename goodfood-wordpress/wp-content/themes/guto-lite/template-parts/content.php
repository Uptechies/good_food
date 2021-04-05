<?php
/**
 * Guto Lite post content
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$post_image_size	    = guto_lite_option('post_image_size');
$by_text	            = guto_lite_option('guto_lite_by_text');
$read_text	            = guto_lite_option('read_text');
$get_author_id          = get_the_author_meta('ID');
$get_author_gravatar    = get_avatar_url($get_author_id, array('size' => 50));

if(!has_post_thumbnail()) {
    $post_class = 'single-blog-post without-image';
}else{
    $post_class = 'single-blog-post';
}

$post_tags = get_the_tags();
?>

<div <?php post_class(); ?>>
    <div class="<?php echo esc_attr($post_class); ?>">
        <?php if(has_post_thumbnail()) { ?>
            <div class="image">
                <a href="<?php the_permalink() ?>">
                    <img src="<?php the_post_thumbnail_url($post_image_size); ?>" alt="<?php the_title_attribute(); ?>">
                </a>

                <div class="user d-flex align-items-center">
                    <img src="<?php echo esc_url($get_author_gravatar); ?>" alt="<?php echo esc_attr( get_the_author() ); ?>">

                    <div class="info">
                        <span><?php echo esc_html( $by_text ); ?> <?php echo esc_html( get_the_author() ); ?></span>
                        <?php echo esc_html(get_the_date()); ?>
                    </div>
                </div>

                <a href="<?php the_permalink() ?>" class="link-btn"></a>
            </div>
        <?php } ?>

        <div class="content">
            <?php if($post_tags || $read_text): ?>
                <ul class="meta">
                    <?php if($post_tags): ?>
                        <li><i class="bx bx-purchase-tag"></i>
                            <?php
                            $count = 0; $sep = '';
                            if ( $post_tags ) {
                                foreach( $post_tags as $post_tag ) {
                                    $count++;
                                    echo '<a href="'.esc_url(get_tag_link($post_tag->term_id)).'">'.esc_html($post_tag->name).'</a>';
                                    if( $count > 0 ) break;
                                }
                            }
                            ?>
                        </li>
                    <?php endif; ?>

                    <?php if($read_text): ?>
                        <li>
                            <i class="bx bx-time"></i>
                            <?php echo esc_html(guto_lite_reading_time()) ?>
                            <?php echo esc_html($read_text); ?>
                        </li>
                    <?php endif; ?>

                    <li>
                        <i class='bx bx-calendar'></i>
                        <a href="<?php the_permalink() ?>"><?php echo esc_html(get_the_date()); ?></a>
                    </li>

                </ul>
            <?php endif; ?>

            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

            <?php if(!has_post_thumbnail()): ?>
                <?php the_excerpt(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
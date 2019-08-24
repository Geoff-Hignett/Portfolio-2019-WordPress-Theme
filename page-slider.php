<?php get_header(); ?>

<section class="slider" id="slider">
    <header class="slider__head">
        <div class="container">
            <h2 class="heading-secondary mb-3">Slider</h2>
            <p class="section-sub-heading">Here is a slider version of my portfolio.</p>
        </div>
    </header>
    <div class="slider__content container">


        <?php if (have_rows('slider')) : ?>

        <?php while (have_rows('slider')) : the_row();

                // vars
                $title = get_sub_field('slider_title');
                $image = get_sub_field('slider_image');
                $text = get_sub_field('slider_text');
                $link = get_sub_field('slider_link');

                ?>

        <div class="slider__card-wrapper">

            <div class="slider__card-image">
                <?php if (!empty($image)) : ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
            </div>

            <?php if ($title) : ?>

            <div class="slider__card-title">
                <h3><?php echo $title; ?></h3>
            </div>
            <?php endif; ?>

            <div class="slider__card-text">
                <p><?php echo $text; ?></p>
            </div>

            <div class="slider__card-link">
                <?php
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                <a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            </div>
            <?php endif; ?>


        </div>

        <?php endwhile; ?>

        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>
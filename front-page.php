<?php get_header(); ?>

<main>

    <!-- INFO -->
    <?php $hero = get_field('hero');
    $main_title = $hero['main_title'];
    $sub_title = $hero['sub_title'];
    $link_text = $hero['link_text'];
    ?>

    <div class="header__info-box">
        <h1 class="heading-primary mb-3"><?php echo $main_title; ?></h1>
        <p class="sub-heading mb-4">
            <?php echo $sub_title; ?>
        </p>
        <a href="#portfolio" class="btn btn__primary btn--animated"><?php echo $link_text; ?></a>
    </div>

    <!-- PORTFOLIO -->
    <?php $portfolio = get_field('portfolio');
    $portfolio_header = $portfolio['portfolio_header'];
    $portfolio_text = $portfolio['portfolio_text'];
    ?>

    <section class="portfolio" id="portfolio">
        <header class="portfolio__head">
            <div class="container">
                <h2 class="heading-secondary mb-3"><?php echo $portfolio_header; ?></h2>
                <p class="section-sub-heading"><?php echo $portfolio_text; ?></p>
            </div>
        </header>

        <?php if (have_rows('example')) : ?>

        <?php while (have_rows('example')) : the_row(); ?>

        <?php //vars
                $example_header = get_sub_field('example_link');
                $example_text = get_sub_field('example_text');
                $example_link_text = get_sub_field('example_link_text');
                $image = get_sub_field('example_image');

                ?>

        <div class="portfolio__content container">
            <div class="portfolio__item">
                <div class="portfolio__info">

                    <a href="<?php echo $example_header; ?>" class="portfolio__head-link" target="_blank">
                        <h3 class="heading-tertiary mb-3"><?php the_sub_field('example_link_text'); ?></h3>
                    </a>
                    <p class="portfolio__description mb-1"><?php the_sub_field('example_text'); ?></p>
                    <div class="portfolio__skills-container mb-6">

                        <?php if (have_rows('example_skills')) : ?>

                        <?php while (have_rows('example_skills')) : the_row(); ?>

                        <div class="portfolio__skill"><?php the_sub_field('example_skill'); ?></div>

                        <?php endwhile; ?>

                        <?php endif; ?>

                    </div>
                </div>
                <div class="portfolio__img-container">
                    <a href="<?php the_sub_field('example_link_2'); ?>" class="portfolio__img-link" target="_blank">
                        <?php if (!empty($image)) : ?>
                        <img class="portfolio__img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                    </a>
                </div>
            </div>
        </div>
        <hr class="portfolio__divider" />
        <?php endwhile; ?>

        <?php endif; ?>

    </section>

    <!-- ABOUT -->
    <section class="about" id="about">
        <div class="container">
            <div class="heading-secondary heading-secondary--white mb-6">
                About
            </div>
            <div class="about__features">
                <div class="about__features-box">
                    <i class="fas fa-tachometer-alt about__features-icon mb-3"></i>
                    <div class="about__features-heading mb-1">Fast</div>
                    <p class="about__features-text">
                        Minimal loading times for the best load times.
                    </p>
                </div>
                <div class="about__features-box">
                    <i class="fas fa-align-justify about__features-icon mb-3"></i>
                    <div class="about__features-heading mb-1">Clean</div>
                    <p class="about__features-text">
                        Modern looking websites that suit the 21st century.
                    </p>
                </div>
                <div class="about__features-box">
                    <i class="fas fa-cogs about__features-icon mb-3"></i>
                    <div class="about__features-heading mb-1">Responsive</div>
                    <p class="about__features-text">
                        My websites look great on all devices.
                    </p>
                </div>
            </div>
            <div class="about__info">
                <div class="about__details">
                    <h3 class="about__features-heading mb-3">Who am I?</h3>
                    <p>
                        A self-taught front-end web developer who loves learning new
                        technologies. I have always enjoyed problem solving and
                        algorithms.
                        <br /><br />I use online courses to build my knowledge and then
                        practise what I have learnt by building exciting projects.
                        <br /><br />My background is in teaching modern languages
                        (another hobby of mine) which has proved a great experience for
                        assimilating the syntax of programming languages. <br />
                        <br />When I'm not practising web development I can be found
                        strumming away on my guitar or watching films/tv.
                    </p>
                </div>
                <div class="about__skills">
                    <div class="about__skills-list">
                        <div class="about__skills-item">HTML</div>
                        <div class="about__skills-item">CSS</div>
                        <div class="about__skills-item">JavaScript</div>
                        <div class="about__skills-item">jQuery</div>
                        <div class="about__skills-item">SCSS</div>
                        <div class="about__skills-item">Bootstrap 4</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <?php $contact  = get_field('contact');
    $contact_header = $contact['contact_header'];
    $contact_text = $contact['contact_text'];
    ?>

    <section class="contact" id="contact">
        <div class="container">
            <h2 class="heading-secondary mb-3"><?php echo $contact_header ?></h2>
            <p class="section-sub-heading mb-3"><?php echo $contact_text ?></p>
            <div class="contact__form">
                <form action="https://formspree.io/geoffhignett@hotmail.com" method="POST" method="POST" class="contact__form-items">
                    <input type="text" name="name" placeholder="Your name" class="contact__form-item" required />
                    <input type="email" name="email" placeholder="Your email" class="contact__form-item" required />
                    <textarea name="message" placeholder="Type message here..." cols="30" rows="5" class="contact__form-item" required></textarea>
                    <input type="submit" class="btn btn__form" value="Send Message" />
                </form>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>
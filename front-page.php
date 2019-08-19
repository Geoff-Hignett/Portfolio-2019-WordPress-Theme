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

        <div class="portfolio__content container">

        <?php 

          if( have_rows('example') ):

            while( have_rows('example') ): the_row();

                //vars
                $example_header = get_sub_field('example_header'); 
                $example_text = get_sub_field('example_text');
                $example_image = get_sub_field('example_image');
        ?>

            <div class="portfolio__item">
                <div class="portfolio__info">
                    <a href="https://experiencep2p.co.uk" class="portfolio__head-link" target="_blank">
                        <h3 class="heading-tertiary mb-3">EXPERIENCE P2P</h3>
                    </a>
                    <p class="portfolio__description mb-1">
                        Experience P2P is a multi-page alternative investment site. It
                        was the first site I built using Bootstrap 4. I focussed on
                        making a clean, informative website and got a good grounding of
                        how to use classes to create a responsive design.
                    </p>
                    <div class="portfolio__skills-container mb-6">
                        <div class="portfolio__skill">HTML5</div>
                        <div class="portfolio__skill">CSS3</div>
                        <div class="portfolio__skill">Bootstrap 4</div>
                    </div>
                </div>
                <div class="portfolio__img-container">
                    <a href="https://experiencep2p.co.uk" class="portfolio__img-link" target="_blank">
                        <img src="<?php bloginfo('template_directory') ?>/img/p2p.jpg" alt="Experience P2P website" class="portfolio__img" />
                    </a>
                </div>
            </div>
        </div>
        <hr class="portfolio__divider" />
        <div class="portfolio__content container">
            <div class="portfolio__item">
                <div class="portfolio__info">
                    <a href="https://10britishquestions.co.uk" class="portfolio__head-link" target="_blank">
                        <h3 class="heading-tertiary mb-3">10 British Questions</h3>
                    </a>
                    <p class="portfolio__description mb-1">
                        10 British Questions is a random quiz app. It is rendered almost
                        entirely using JavaScript/jQuery with almost no HTML. This was a
                        great opportunity for practising DOM manipulation as well as
                        working with data structures and logic in JavaScript.
                    </p>
                    <div class="portfolio__skills-container mb-6">
                        <div class="portfolio__skill">HTML5</div>
                        <div class="portfolio__skill">CSS3</div>
                        <div class="portfolio__skill">JavaScript</div>
                        <div class="portfolio__skill">jQuery</div>
                    </div>
                </div>
                <div class="portfolio__img-container">
                    <a href="https://10britishquestions.co.uk" class="portfolio__img-link" target="_blank">
                        <img src="<?php bloginfo('template_directory') ?>/img/british.jpg" alt="10 British Questions website" class="portfolio__img" />
                    </a>
                </div>
            </div>
        </div>
        <hr class="portfolio__divider" />
        <div class="portfolio__content container">
            <div class="portfolio__item">
                <div class="portfolio__info">
                    <a href="https://geoff-hignett.co.uk/riff-world" class="portfolio__head-link" target="_blank">
                        <h3 class="heading-tertiary mb-3">Riff World</h3>
                    </a>
                    <p class="portfolio__description mb-1">
                        Riff World is a landing page for a guitar tuition/events
                        organisation. I used the Materialize CSS framework for this
                        project. I also practised jQuery skills to enable the Scrollfire
                        plugin and Slilder carousel feature.
                    </p>
                    <div class="portfolio__skills-container mb-6">
                        <div class="portfolio__skill">HTML5</div>
                        <div class="portfolio__skill">CSS3</div>
                        <div class="portfolio__skill">Bootstrap 4</div>
                    </div>
                </div>
                <div class="portfolio__img-container">
                    <a href="https://geoff-hignett.co.uk/riff-world" class="portfolio__img-link" target="_blank">
                        <img src="<?php bloginfo('template_directory') ?>/img/riff.jpg" alt="Riff World website" class="portfolio__img" />
                    </a>
                </div>
            </div>
        </div>
        <hr class="portfolio__divider" />
        <div class="portfolio__content container">
            <div class="portfolio__item">
                <div class="portfolio__info">
                    <a href="https://geoff-hignett.co.uk/typing-training/play.html" class="portfolio__head-link" target="_blank">
                        <h3 class="heading-tertiary mb-3">Typing Trainer</h3>
                    </a>
                    <p class="portfolio__description mb-1">
                        Typing trainer is a game which tests the typing speed of the
                        player. After a certain number of points score the difficulty
                        intensifies. It was a good exercise for practising logic in
                        JavaScript. After getting the functionality down I used
                        Bootstrap 4 to help out with styling.
                    </p>
                    <div class="portfolio__skills-container mb-6">
                        <div class="portfolio__skill">HTML5</div>
                        <div class="portfolio__skill">CSS3</div>
                        <div class="portfolio__skill">Bootstrap 4</div>
                        <div class="portfolio__skill">JavaScript</div>
                    </div>
                </div>
                <div class="portfolio__img-container">
                    <a href="https://geoff-hignett.co.uk/typing-training/play.html" class="portfolio__img-link" target="_blank">
                        <img src="<?php bloginfo('template_directory') ?>/img/typing.jpg" alt="Typing Trainer website" class="portfolio__img" />
                    </a>
                </div>
            </div>
        </div>
        <hr class="portfolio__divider" />
        <div class="portfolio__content container">
            <div class="portfolio__item">
                <div class="portfolio__info">
                    <a href="https://hignettsrockinghorses.co.uk" class="portfolio__head-link" target="_blank">
                        <h3 class="heading-tertiary mb-3">Hignett's Rocking Horses</h3>
                    </a>
                    <p class="portfolio__description mb-1">
                        Hignett's Rocking Horses is a historical single-page website
                        made in Bootstrap 4. Since it is not a commercial site I used a
                        more traditional style inspired by newspaper styles. It also
                        makes use of the Scrollspy and SmoothScroll extentions.
                    </p>
                    <div class="portfolio__skills-container mb-6">
                        <div class="portfolio__skill">HTML5</div>
                        <div class="portfolio__skill">CSS3</div>
                        <div class="portfolio__skill">Bootstrap 4</div>
                        <div class="portfolio__skill">JavaScript</div>
                        <div class="portfolio__skill">jQuery</div>
                    </div>
                </div>
                <div class="portfolio__img-container">
                    <a href="https://hignettsrockinghorses.co.uk" class="portfolio__img-link" target="_blank">
                        <img src="<?php bloginfo('template_directory') ?>/img/hignett.jpg" alt="Hignetts Rocking Horses website" class="portfolio__img" />
                    </a>
                </div>
            </div>
        </div>
        <hr class="portfolio__divider" />
        <div class="portfolio__content container">
            <div class="portfolio__item">
                <div class="portfolio__info">
                    <a href="https://codepen.io/geoff-hignett/pen/OZZWdj" class="portfolio__head-link" target="_blank">
                        <h3 class="heading-tertiary mb-3">Movie Quote Generator</h3>
                    </a>
                    <p class="portfolio__description mb-1">
                        Movie Quote Generator was one of the first apps I made while
                        working through the freeCodeCamp Front-End programme. It makes
                        AJAX calls to retrieve the quotes from an API on the Mashape
                        market.
                    </p>
                    <div class="portfolio__skills-container mb-6">
                        <div class="portfolio__skill">HTML5</div>
                        <div class="portfolio__skill">CSS3</div>
                        <div class="portfolio__skill">JavaScript</div>
                        <div class="portfolio__skill">AJAX</div>
                    </div>
                </div>
                <div class="portfolio__img-container">
                    <a href="https://codepen.io/geoff-hignett/pen/OZZWdj" class="portfolio__img-link" target="_blank">
                        <img src="<?php bloginfo('template_directory') ?>/img/movie.jpg" alt="Movie Quote Generator website" class="portfolio__img" />
                    </a>
                </div>
            </div>
        </div>
        <hr class="portfolio__divider" />
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
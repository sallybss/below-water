<?php get_header(); ?>

<main> <!-- I Added <main> to wrap the main content area -->
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>

        <?php
            $herovideo = get_field("video");
            $herovideoFileUrl = $herovideo['url'];
            $herotext = get_field("hero-text");
            $introtext = get_field("intro");
            $mission = get_field("mission");
            $missiontext = get_field("mission-text");
            $missionimg = get_field("mission-img");
            $banner = get_field("banner");
            $action = get_field("action");
            $learn = get_field("learn");
            $fact1 = get_field("fact1");
            $fact2 = get_field("fact2");
            $fact3 = get_field("fact3");
            $fact4 = get_field("fact4");
            $fact5 = get_field("fact5");
            $fact6 = get_field("fact6");
            $fact7 = get_field("fact7");
            $fact8 = get_field("fact8");
            $fact9 = get_field("fact9");
            $fact10 = get_field("fact10");
            $factstitle = get_field("factstitle");
        ?>

        <section class="hero"> <!-- Here <section> for the hero section -->
            <?php if ($herovideo): ?>
                <div class="videooverlay">
                    <video autoplay loop muted playsinline>
                        <source src="<?php echo esc_url($herovideoFileUrl); ?>" type="video/mp4">
                    </video>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="overlay-text col-lg-6">
                            <h1><?php echo esc_html($herotext); ?></h1> <!-- Main title -->
                            <p><?php echo esc_html($introtext); ?></p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </section>

        <section id="mission"> <!-- 2. Used <section> for mission section -->
            <div class="container">
                <h2><?php echo __('Your Mission Title', 'text-domain'); ?></h2> <!-- 3. Changed to <h2> for subtitle -->
                <div class="row">
                    <div class="col-lg-8">
                        <p><?php echo esc_html($missiontext); ?></p>
                    </div>
                    <div class="col-lg-4">
                        <?php if ($missionimg): ?>
                            <img src="<?php echo esc_url($missionimg['url']); ?>" alt="<?php echo esc_attr(__('An image of a turtle carrying a plastic bag', 'text-domain')); ?>" class="img-fluid" width="650">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section id="learn"> 
            <h2><?php echo esc_html($factstitle); ?></h2> <!-- Changed to <h2> for subtitle -->
            <div class="row">
                <div class="col-md-6">
                    <p>
                        <i class="fas fa-lightbulb"></i> <?php echo esc_html($fact1); ?> <br/>
                        <i class="fas fa-lightbulb"></i> <?php echo esc_html($fact2); ?> <br/>
                        <i class="fas fa-lightbulb"></i> <?php echo esc_html($fact3); ?> <br/>
                        <i class="fas fa-lightbulb"></i> <?php echo esc_html($fact4); ?> <br/>
                        <i class="fas fa-lightbulb"></i> <?php echo esc_html($fact5); ?> <br/>
                    </p>
                </div>
                <div class="col-md-6">
                    <p>
                        <i class="fas fa-lightbulb"></i> <?php echo esc_html($fact6); ?> <br/>
                        <i class="fas fa-lightbulb"></i> <?php echo esc_html($fact7); ?> <br/>
                        <i class="fas fa-lightbulb"></i> <?php echo esc_html($fact8); ?> <br/>
                        <i class="fas fa-lightbulb"></i> <?php echo esc_html($fact9); ?> <br/>
                        <i class="fas fa-lightbulb"></i> <?php echo esc_html($fact10); ?> <br/>
                    </p>
                </div>
            </div>
        </section>

        <!-- Article Loop -->
        <?php
        $articleLoop = new WP_Query(array(
            "post_type" => "article",
            "posts_per_page" => -1
        ));

        $i = 0; // Counter to alternate layout
        ?>

        <?php if ($articleLoop->have_posts()): ?>
            <?php while ($articleLoop->have_posts()): $articleLoop->the_post(); ?>
                <?php
                $articleImage = get_field("article-img");
                $articleText = get_field("article-text");
                $articleTitle = get_field("article-title");
                $articleLink = get_field("article-link");
                $i++;
                ?>

                <div class="container mb-5">
                    <div class="row">
                        <?php if ($i % 2 == 0): // Even index (Image on the right) ?>
                            <div class="col-md-6">
                                <div>
                                    <h2><?php echo esc_html($articleTitle); ?></h2> <!-- 3. Changed to <h2> for subtitle -->
                                    <p><?php echo esc_html($articleText); ?></p>
                                    <div class="mx-auto text-center"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <?php if ($articleImage): ?>
                                    <img src="<?php echo esc_url($articleImage['url']); ?>" class="img-fluid" alt="image of deign books">
                                <?php endif; ?>
                            </div>
                        <?php else: ?>
                            <div class="col-md-6">
                                <?php if ($articleImage): ?>
                                    <img src="<?php echo esc_url($articleImage['url']); ?>" class="img-fluid" alt="bookstore image">
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <h2><?php echo esc_html($articleTitle); ?></h2> <!-- 3. Changed to <h2> for subtitle -->
                                    <p><?php echo esc_html($articleText); ?></p>
                                    <div class="mx-auto text-center"></div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>

        <!-- ACTION LOOP -->

        <!-- Card Section -->
        <section class="wrapper"> <!-- 2. Used <section> for actions card section -->
            <div class="container">
                <div class="row justify-content-center">

                    <!-- Loop for Action Projects -->
                    <?php
                    $actionLoop = new WP_Query(array (
                        "post_type" => "actionloop",
                        "posts_per_page" => -1
                    ));
                    ?>

                    <?php if($actionLoop->have_posts()): ?>
                        <?php while($actionLoop->have_posts()): $actionLoop->the_post(); ?>

                        <?php 
                        $actionimg = get_field("actionimg_");
                        $actiontitle = get_field("actiontitle");
                        $actiontext = get_field("actiontext");
                        $actionlink = get_field("actionlink");
                        ?>

                        <div class="col-md-6 col-lg-4" id="action">
                            <div class="custom-card">
                                <img src="<?php echo esc_url($actionimg["url"]);?>" class="card-img-top img-fluid mx-auto" alt="">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo esc_html($actiontitle); ?></h5> <!-- 3. Changed to <h5> for subtitle -->
                                    <p class="card-text"><?php echo esc_html($actiontext); ?></p>
                                    <div class="mx-auto text-center">
                                        <a href="<?php echo esc_url($actionlink); ?>" target="_blank" class="btn btn-outline">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>

                </div>
            </div>
        </section> <!-- 2. Closed the <section> for actions card section -->

        <?php endwhile; ?>
    <?php endif; ?>
</main>

<footer> <!-- 4. Wrapped footer content in a <footer> tag -->
    <?php get_footer(); ?>
</footer>
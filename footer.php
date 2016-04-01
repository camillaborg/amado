<footer>
    <div class="container" id="contact">
        <?php if( have_rows('footer') ): ?>

            <?php while( have_rows('footer') ): the_row();

                $address = get_sub_field('address');
                $email = get_sub_field('email');
                $phonenumber = get_sub_field('phonenumber');
                $logo = get_sub_field('logo');
                $contact = get_sub_field('contact');
                $visit = get_sub_field('visit');
                $snailmail = get_sub_field('post');
                $snailadress = get_sub_field('post_address');

                ?>

                <div class="item one">
                    <h4><?php echo $contact ?></h4>
                    <?php if( $email ): ?>
                        <a href="mailto:per@amadoagency.se"><?php echo $email ?></a>
                    <?php endif; ?>
                    <?php if( $phonenumber ): ?>
                        <p><?php echo $phonenumber ?></p>
                    <?php endif; ?>
                </div>
                <div class="item two">
                    <h4><?php echo $snailmail?></h4>
                    <?php if( $snailadress ): ?>
                        <p><?php echo $snailadress; ?></p>
                    <?php endif; ?>
                </div>

                <div class="item three">
                    <h4><?php echo $visit ?></h4>
                    <?php if( $address ): ?>
                        <p><?php echo $address; ?></p>
                    <?php endif; ?>
                </div>
                <div class="item four">
                    <?php if( $logo ): ?>
                        <a href="https://www.google.se/maps/place/Engelbrektsgatan+31,+114+32+Stockholm/@59.3423726,18.0689289,17z/data=!3m1!4b1!4m2!3m1!1s0x465f9d42406d894b:0x6eda3eb0f165f952" target="_blank"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt'] ?>" class="footer-logo" /></a>
                    <?php endif; ?>
                </div>




            <?php endwhile; ?>

        <?php endif; ?>
    </div>
    <div class="row">
        <div class="twelve columns">
            <p class="copy">&copy; <?php bloginfo('author');?> <?php the_time('Y');?></p>
        </div>
    </div>
</footer>
     <?php wp_footer(); ?>
    </body>
</html>

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

                ?>

                <div class="item">
                    <h4><?php echo $visit ?></h4>
                    <?php if( $address ): ?>
                        <p><?php echo $address; ?></p>
                    <?php endif; ?>
                </div>
                <div class="item">
                     <?php if( $logo ): ?>
                         <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt'] ?>" class="footer-logo" />
                     <?php endif; ?>
                </div>
                <div class="item">
                    <h4><?php echo $contact ?></h4>
                    <?php if( $email ): ?>
                        <a href="mailto:per@amadoagency.se"><?php echo $email ?></a>
                    <?php endif; ?>
                     <?php if( $phonenumber ): ?>
                         <p><?php echo $phonenumber ?></p>
                     <?php endif; ?>
                </div>




            <?php endwhile; ?>

        <?php endif; ?>
    </div>
    <div class="row">
        <div class="twelve columns">
            <p>&copy; <?php bloginfo('author');?> <?php the_time('Y');?></p>
        </div>
    </div>
</footer>
     <?php wp_footer(); ?>
    </body>
</html>

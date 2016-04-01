<?php get_header(); ?>

<?php
if(have_posts()) :
while (have_posts()) : the_post(); ?>

<?php global $post;

//get the content of the current post inside the loop
$content = get_the_content();

?>
    <main>
    <div class="about" id="about">
        <?php the_content();?>
    </div>
        <div class="cases">
    <?php if( have_rows('cases') ): ?>

            <?php while( have_rows('cases') ): the_row();

                $image = get_sub_field('image');
                $case = get_sub_field('case');
                $content = get_sub_field('content');
                $header = get_sub_field('header');
                $video = get_sub_field('video');
                $radio = get_sub_field('radio');
                $banner = get_sub_field('banner');
                $ad = get_sub_field('ad');

                ?>

            <?php if( $case ): ?>
                <h2><?php echo $case; ?></h2>
            <?php endif; ?>
            <div class="twelve columns item">
                <?php if( $header ): ?>
                    <h3><?php echo $header; ?></h3>
                <?php endif; ?>
                <p class="content"><?php echo $content; ?></p>
            </div>
            <div class="item" id="cases">
                <div class="row container">
                    <div class="six columns item image">
                        <?php if( $image ): ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" class="case-img" />
                        <?php endif; ?>
                    </div>
                        <div class="six columns item">
                        <?php if( $video ): ?>
                        <div class="embed-container"><?php echo $video ?></div>
                        <?php endif; ?>
                        </div>
                    </div>

                <div class="row container">
                    <div class="six columns item image">
                        <?php if( $banner ): ?>
                            <img src="<?php echo $banner['url']; ?>" alt="<?php echo $banner['alt'] ?>" class="case-img" />
                        <?php endif; ?>
                        <?php if ($radio):?>
                            <audio controls class="audio">
                                <source src="<?php echo $radio['url']; ?>" type="audio/wav">
                            </audio>
                        <?php endif; ?>
                    </div>
                        <div class="six columns item image">
                            <?php if( $ad ): ?>
                                <img src="<?php echo $ad['url']; ?>" alt="<?php echo $ad['alt'] ?>" class="case-img ad" />
                            <?php endif; ?>
                        </div>
                </div>

            </div>


            <?php endwhile; ?>

    <?php endif; ?>
        </div>


    </main>
    <?php
    endwhile;


    else :
        echo "No content available!";

    endif;



    get_footer(); ?>

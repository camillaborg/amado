<?php get_header(); ?>

<?php
    if(have_posts()) :
        while (have_posts()) : the_post(); ?>

<?php global $post;

    //get the content of the current post inside the loop
    $content = get_the_content();

?>
<div class="header">

</div>

<?php
$pages = get_pages(array('child_of'=> $post->ID ,'sort_order'=> 'asc', 'sort_column' => 'menu_order'));
?>
<div class="container">

    <?php


    // Get the page as an Object
    $news =  get_page_by_title('Nyheter');

    //replace post_parent value with your portfolio page id:
    $args=array(
        'post_type' => 'page',
        'post_parent' => $news->ID,
        'post_status' => 'publish',
        'posts_per_page' => 4,
        'caller_get_posts'=> 1
    );
    $my_query = null;
    $my_query = new WP_Query($args);
    ?>
    <div class="news-container">
    <?php
        //echo "<pre>"; print_r($my_query); echo "</pre>";
        if( $my_query->have_posts() ) { ?>
            <div class="row">
            <?php echo''; // Här kan man skriva en rubrik
            while ($my_query->have_posts()) : $my_query->the_post(); ?>


                

                    </div>

             <?php
            endwhile;

        }
        wp_reset_query();  // Restore global post data stomped by the_post().
        ?>
        </div>
    </div>
    <div class="row">
        <div class="twelve columns text-divider3">
            <?php
            //print the text without images:
            the_content();
              ?>

        </div>
    </div>

    <div class="projects-container">
        <?php
        $project =  get_page_by_title('Projekt');
        //replace post_parent value with your portfolio page id:
        $args=array(
            'post_type' => 'page',
            'post_parent' => $project->ID,
            'post_status' => 'publish',
            'posts_per_page' => 4,
            'caller_get_posts'=> 1
        );
        $my_query = null;
        $my_query = new WP_Query($args);
        //echo "<pre>"; print_r($my_query); echo "</pre>";
        if( $my_query->have_posts() ) {
            echo''; // Här kan man skriva en rubrik
            ?>
            <div class="row">
            <?php
            while ($my_query->have_posts()) : $my_query->the_post(); ?>

                    <div class="three columns project">
                        <div class="project-icon">
                            <?php echo get_the_post_thumbnail( $page->ID, array(60, 60)  ); ?>
                        </div>
                                <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
                                <?php
                                global $more; $more = false;
                                ?>
                                <?php the_content('Read on....');?>
                    </div>


                <?php
                endwhile;

            }
            wp_reset_query();  // Restore global post data stomped by the_post().
            ?>
        </div>
        </div>

        <div class="row fixed-image-section">
            <div class="picture-divider">
                <div class="fixed-image">
                    <?php

                    //get the images and print them
                    $images = get_the_images($content);
                    foreach($images as $image) {
                        echo $image[0];
                    }
                    ?>
                </div>
        </div>



        <?php
        // Set up the objects needed
        $my_wp_query = new WP_Query();
        $all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'posts_per_page' => -1 ));

        // Get the page as an Object
        $cases =  get_page_by_title('Cases');
        $casesPage = get_post($cases);

        // Filter through all pages and find Portfolio's children
        $cases_children = get_page_children( $cases->ID, $all_wp_pages );
        ?>

</div>

<?php
    endwhile;

else :
    echo "No content available!";

endif;


get_footer(); ?>

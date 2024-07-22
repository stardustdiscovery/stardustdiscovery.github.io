<?php

// Load WordPress header template
get_header();

// Astronomy themed content starts here
?>
<div class="astronomy-container">
    <h1>Welcome to the Astronomy Hub</h1>
    <p>This website is dedicated to physics teachers, students, and the general public who have a passion for astronomy.</p>

    <!-- Latest Astronomy News Section -->
    <section class="astronomy-news">
        <h2>Latest Astronomy News</h2>
        <?php
        // Fetch and display the latest posts from the 'astronomy' category
        $args = array(
            'category_name' => 'astronomy',
            'posts_per_page' => 5
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                ?>
                <article class="astronomy-post">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?></p>
                </article>
                <?php
            endwhile;
            wp_reset_postdata();
        else :
            ?>
            <p>No astronomy news found.</p>
        <?php endif; ?>
    </section>

    <!-- Educational Resources Section -->
    <section class="astronomy-resources">
        <h2>Educational Resources</h2>
        <p>Explore our collection of educational resources tailored for physics teachers and students.</p>
        <!-- Add links or resources here -->
    </section>

    <!-- Public Engagement Section -->
    <section class="astronomy-public">
        <h2>Public Engagement</h2>
        <p>Discover events and activities designed for the general public to foster a love for astronomy.</p>
        <!-- Add event details or activities here -->
    </section>
</div>

<?php
// Load WordPress footer template
get_footer();

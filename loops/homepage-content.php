<?php
/*
 * The Home Page Content Loop
 */
?>

<!-- Home Page Banner -->
<div class="banner-wapper">
    <div class="container-fluid col-xxl-8 px-4">
    
        <div class="row flex-lg-row-reverse align-items-center g-5 py-3 mt-0">
            <div class="col-10 col-sm-8 col-lg-5 px-5 mt-3">
              <img src="http://tribe-pheromones.local/wp-content/uploads/2024/03/tribe_pheromone_bottles.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-7">
              <h1 class="display-5 fw-bold lh-1 mb-3">Attract Your Tribe with <br/>Tribe Pheromones</h1>
              <p class="lead"><strong>Embrace Your Unique Aura – Craft Unforgettable Impressions.</strong><br/> Dive into the world of Tribe Pheromones, where each scent is a key to unlock the door to a more confident and captivating you. Our bespoke collection of perfumes and colognes is designed with you at the center, offering the power to not only attract the attention you desire but to hold it, creating moments that last. </p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="#featured-3"><button type="button" class="btn btn-primary btn-lg px-4 me-md-2 sketchyRegular">Shop Pheromones</button></a>
                <a href="/small-talk/"><button type="button" class="btn btn-outline-secondary btn-lg px-4 sketchyRegular">Learn More</button></a>
              </div>
            </div>
        </div>
    </div>
</div>
<!-- Home Page Banner End -->

<!-- Featured Products -->
<div class="container-fluid px-5 py-2" id="featured-3">
    <?php echo do_shortcode('[products limit="5" columns="5" visibility="featured"]'); ?>
</div>
<!-- Featured Products End -->

<!-- List -->
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
  <div class="row align-items-center g-lg-5 py-2">
  <div class="col-lg-7 text-center text-lg-start">
    <article class="sketchyRegular">
      <img src="http://tribe-pheromones.local/wp-content/uploads/2024/03/CaptureadA-1.jpg" alt="">
    </article>
    </div>
    <div class="col-md-10 mx-auto col-lg-5">
      <ul class="specialList">
        <li><strong>Be More Attractive:</strong> Pheromones make you more appealing to others, boosting your charm in any setting.</li>

        <li><strong>Feel Confident:</strong> Wearing pheromone products increases your confidence, helping you stand out.</li>

        <li><strong>Easy to Use:</strong> Our products are simple to apply and work with your body to enhance your natural vibe.</li>

        <li><strong>For Everyone:</strong> Whether you're going to work, on a date, or out with friends, we have a scent that fits.</li>

        <li><strong>Get Noticed:</strong> Our special formulas make sure you're the center of attention the moment you walk in.</li>

        <li><strong>For All Genders:</strong> Our range suits everyone, celebrating individuality and personal style.</li>

        <li><strong>Make Every Day Special:</strong> Turn ordinary moments into memorable experiences with just a few sprays.</li>

        <li><strong>Join Our Community:</strong> Be part of a group that values real connections and genuine interactions.</li>

        <li><strong>Shop With Ease:</strong> Enjoy a hassle-free shopping experience, quick delivery, and products that you'll love.</li>

        <li><strong>Unlock Your Best Self:</strong> Embrace the power of pheromones to be the best version of yourself, effortlessly. to unlock the power of pheromones, opening up new possibilities for enhanced communication, deeper relationships, and a heightened sense of self.</li>
      </ul>
    </div>
  </div>
</div>
<!-- List End -->

<!-- Email Signup -->
<div style="background-color:#ececec;">
  <div class="container col-xl-10 col-xxl-8 px-4 py-2">
      <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
          <h1 class="display-4 fw-bold lh-1 mb-3">Join the Tribe and unlock the secret to enhancing your natural allure </h1>
          <p class="col-lg-10 fs-4"> with a monthly subscription to Tribe Pheromones you have the power to captivate and charm, delivered directly to your doorstep every month. With our subscription, enjoy the convenience of a seamless supply, ensuring you're always equipped with the essence of attraction.</p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5 ">
          <?php
            // Check if the user is already logged in
if ( is_user_logged_in() ) {
  echo '<p>You are already registered and logged in!</p>';
} else {
  // Registration form HTML
  ?>
  <form id="registration_form" class="p-4 p-md-5 rounded-3 bg-light" action="<?php echo esc_url($_SERVER['REQUEST_URI']) ?>" method="post">

      <div class="form-floating mb-3">
          
          <input type="email" name="email" id="email"  class="form-control" placeholder="name@example.com" required>
          <label for="email">Email Address</label>
          </div>
      <div class="form-floating mb-3">
          
          <input type="password" name="password" id="password"  class="form-control" placeholder="Password" required>
          <label for="password">Password</label>
          </div>
      <input class="w-100 btn btn-lg btn-primary" type="submit" name="submit" value="Sign up">
      <hr class="my-4">
            <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
  </form>
  <?php
  // Handle form submission
  if ( 'POST' == $_SERVER['REQUEST_METHOD'] ) {
      $username = sanitize_user($_POST['username']);
      $password = esc_attr($_POST['password']);
      $email = sanitize_email($_POST['email']);
      
      $userdata = array(
          'user_login' => $username,
          'user_pass' => $password,
          'user_email' => $email,
      );
      
      $user_id = wp_insert_user($userdata);
      
      // On successful registration
      if ( !is_wp_error($user_id) ) {
          echo '<p>Registration successful!</p>';
      } else {
          // Error handling
          echo '<p>Failed to register.</p>';
      }
  }
}
          ?>
        </div>
      </div>
  </div>
</div>
<!-- Email Signup End -->

<!-- Wordpress Page Content -->
<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class("mb-5")?>>
    <header class="container py-5 text-center">
      <h1 class="display-2 my-5">
        <?php the_title()?>
      </h1>
    </header>
    <section class="wrap-md pb-5 entry-content">
      <?php the_content()?>
      <?php wp_link_pages(); ?>
    </section>
  </article>
<?php
  endwhile;
  else :
    get_template_part('loops/404');
  endif;
?>
<!-- Wordpress Page Content End -->


<?php
  $args = array(
      'post_type' => 'post', // Fetch blog posts.
      'posts_per_page' => 6, // Limit to the latest 6 posts.
      'category_name' => 'small-talk', // Replace 'your-category-slug' with your actual category slug.
      'orderby' => 'date', // Order by post date.
      'order' => 'DESC' // Latest posts first.
  );

  $latest_posts_query = new WP_Query($args);

  if ($latest_posts_query->have_posts()) {
      echo '<div class="latest-posts-container container-fluid px-5"><h2 class="text-center">Small Talk</h2><div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">';
      echo '<div class="col">'; // Optional: Customize the title.
      while ($latest_posts_query->have_posts()) {
          $latest_posts_query->the_post();
          echo '<div class="latest-post">';
          echo '<h3><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>'; // Post title with link.
          echo '<p>' . get_the_excerpt() . '</p>'; // Post excerpt.
          echo '</div>';
      }
      echo '</div></div></div>';
      wp_reset_postdata(); // Reset the global post object.
  } else {
      echo '<p>No recent posts available.</p>';
  }
?>

<?php
/*
 * The Home Page Content Loop
 */
?>
<style>
  
</style>
<!-- Home Page Banner -->
<div class="banner-wapper">
    <div class="container-fluid col-xxl-8 px-4">
    
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6 px-5">
              <img src="http://tribe-pheromones.local/wp-content/uploads/2024/03/tribe_pheromone_bottles.png" class="d-block mx-lg-auto img-fluid px-5" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
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


<div class="container px-4 py-5" id="featured-3">
    <h2 class="text-center">Our Pheromones</h2>
    <?php echo do_shortcode('[products limit="4" columns="4" visibility="featured"]'); ?>
  </div>

<script>
document.addEventListener("DOMContentLoaded", function () {
  console.log("I am Ready!");

  // Select all <li> elements with class "product" inside the element with ID "featured-3"
  var products = document.querySelectorAll("#featured-3 li.product");

  // Add the class "sketchyRegular" to each selected element
  products.forEach(function (product) {
    product.classList.add("sketchyRegular");
  });
});

</script>

<div class="container col-xl-10 col-xxl-8 px-4 py-5">
  <div class="row align-items-center g-lg-5 py-5">
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

<div style="background-color:#ececec;">
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Join the Tribe: Discover the Secret to Unleashing Your Charm</h1>
        <p class="col-lg-10 fs-4">Don't miss out on the simplest way to enhance your allure and confidence! Sign up for our Tribe Pheromones newsletter today and step into a world where you effortlessly attract, command attention, and navigate social landscapes with ease. By joining our tribe, you'll receive exclusive updates, insider tips, and special discounts directly to your inbox. </p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5 ">
        <form class="p-4 p-md-5 rounded-3 bg-light sketchyRegular">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
          <hr class="my-4">
          <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
        </form>
      </div>
    </div>
</div>
</div>


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

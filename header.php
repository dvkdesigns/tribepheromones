<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<a class="visually-hidden-focusable d-inline-block p-1" href="#site-main">Skip to main content</a>

<?php b5st_navbar_before();?>
<div class="container-fluid px-5">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <h3 class="mb-0">Tribe Pheromones</h3>
      </a>

      <nav id="site-navbar" class="navbar navbar-expand-md ">
        <div class="container-xxl">

          

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>



        </div>
      </nav>

      <div class="col-md-3 text-end">
      <?php if (is_user_logged_in()) { ?>
          <a href="<?php echo wp_logout_url(); ?>">Logout</a>
      <?php } else { ?>
          <a href="<?php echo wp_login_url(get_permalink()); ?>">Login</a>
      <?php } ?>

        <i class="bi bi-cart3"></i>

      </div>
    </header>
  </div>

  
</div>

<?php b5st_navbar_after();?>

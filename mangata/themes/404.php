<?php get_header('404'); ?>
<style>
    @font-face {
        font-family: 'Futura';
        src: url('<?php echo get_template_directory_uri(); ?>/fonts/futura.woff2') format('woff2'),
             url('<?php echo get_template_directory_uri(); ?>/fonts/futura.woff') format('woff');
        font-weight: normal;
        font-style: normal;
    }

    body, p, h1, a {
        font-family: Futura, sans-serif;
    }
</style>
<div class="bg-white">
  <div class="mx-auto w-full max-w-7xl px-6 pt-10 pb-16 sm:pb-24 lg:px-8">
    <div class="mx-auto mt-20 max-w-2xl text-center sm:mt-24">
      <p class="text-base font-semibold leading-8 text-pink-600">404</p>
      <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">This page does not exist</h1>
      <p class="mt-4 text-base leading-7 text-gray-600 sm:mt-6 sm:text-lg sm:leading-8">Sorry but the page you requested could not be found on our website. Feel free to make a search, or go to our home page.</p>
    </div>
    <div class="mt-10 flex justify-center items-center">
      <img src="<?php echo get_template_directory_uri(); ?>/images/404.png" alt="Arrow Image" class="mx-auto"> <!-- Centered image -->
    </div>
    <div class="mt-10 flex justify-center items-center">
      <a href="index.php" class="text-sm font-semibold leading-6 text-pink-500 font-futura text-gray-700">
        Back to home
      </a>
    </div>
  </div>
</div>

<?php get_footer('simple'); ?>

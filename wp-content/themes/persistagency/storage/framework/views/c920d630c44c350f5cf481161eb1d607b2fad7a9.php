<footer class="page-footer relative bg-bottom bg-repeat-x" style="background-image:url(<?= \Roots\asset('images/footer-bg.png'); ?>)">
  <div class="container mx-auto">

    <div class="flex flex-col md:flex-row md:space-x-10 md:space-y-0 pt-24 px-4 py-8 space-y-10">

      <div class="md:w-1/3 space-y-10"> 
        <a href="<?php echo e(home_url('/')); ?>"
           class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
          <img src="<?php echo e($header_logo_black['url']); ?>" alt="logo" class="h-auto w-full">
        </a>
      </div>

      <div class="md:w-1/3 space-y-10">
        <?php dynamic_sidebar('sidebar-footer1') ?>
      </div>

      <div class="md:w-1/3 space-y-10">
        <?php dynamic_sidebar('sidebar-footer2') ?>
      </div>

      <div class="md:w-1/3 space-y-10">
        <?php dynamic_sidebar('sidebar-footer3') ?>
      </div>

    </div>
  </div> 

  <div class="container mb-16 mx-auto px-4">
    <div class="flex justify-between items-center">

      <div class="">
        <?php dynamic_sidebar('sidebar-subfooter-left') ?>
      </div>

      <div class="">
        <?php dynamic_sidebar('sidebar-subfooter-right') ?>
      </div>

    </div>

  </div>

</footer>
<?php /**PATH /Applications/MAMP/htdocs/persist/wp-content/themes/persistagency/resources/views/partials/footer.blade.php ENDPATH**/ ?>
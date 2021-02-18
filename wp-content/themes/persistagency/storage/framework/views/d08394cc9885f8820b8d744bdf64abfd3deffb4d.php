<div class="scratch-black bg-black scratch-black__up scratch-black__down text-white <?php echo e($class); ?>">
  <div class="container mx-auto px-4 py-16 text-center">

    <?php if(!empty($title)): ?>
      <h2 class="font-brushup pb-2 text-5xl uppercase xl:text-7xl">
        <?php echo e($title); ?>

      </h2>
    <?php endif; ?>

    <?php if(!empty($link)): ?>
      <div class="text-center">
        <a class="btn btn-secondary px-16" href="<?php echo e($link['url']); ?>" target="<?php echo e($link['target']); ?>"><?php echo e($link['title']); ?></a>
      </div>
    <?php endif; ?>

  </div>
</div>
<?php /**PATH /Applications/MAMP/htdocs/persist/wp-content/themes/persistagency/resources/views/partials/block-footer-cta.blade.php ENDPATH**/ ?>
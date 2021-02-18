<div class="<?php echo e($class); ?> relative block-hero overflow-hidden block-hero">

  <?php if($background): ?>
    <?php echo wp_get_attachment_image($background['id'], 'full', false, ['class' => 'absolute w-full h-full object-cover']); ?>

  <?php endif; ?>

  <div class="mx-auto py-32 relative">

    <?php if(!empty($header)): ?>
      <h2 class="block-hero__header -rotate-8 font-brushuptoo lg:mt-32 lg:text-6xl md:text-5xl mt-20 px-3 text-3xl text-center text-white transform xl:mb-24 xl:mt-64 xl:text-8xl">
        <?php echo $header; ?>

      </h2>
    <?php endif; ?>

  </div>

</div>
<?php /**PATH /Applications/MAMP/htdocs/persist/wp-content/themes/persistagency/resources/views/blocks/block-hero.blade.php ENDPATH**/ ?>
<div class="<?php echo e($class); ?> z-20 block-cta-scratch bg-black scratch scratch-black__up scratch-black__down anim-section">
  <div class="container mx-auto px-4 py-32 text-center xl:py-56">

    <?php if(!empty($text1)): ?>
      <div class="font-bold lg:text-lg text-white xl:text-xl"><?php echo e($text1); ?></div>
    <?php endif; ?>

    <?php if(!empty($text2)): ?>
      <h2 class="bg-fill font-brushup inline-block leading-none lg:px-20 lg:text-8xl md:px-12 md:text-6xl mt-5 pb-2 px-10 relative text-4xl text-black uppercase xl:mt-12 xl:px-24 xl:text-9xl z-10" style="background-image:url('<?= \Roots\asset('images/brush-yellow-big.png'); ?>')">
        <?php echo e($text2); ?>

      </h2>
    <?php endif; ?>

  </div>
</div>
<?php /**PATH C:\xampp\htdocs\persist\wp-content\themes\persistagency\resources\views/blocks/block-cta-scratch.blade.php ENDPATH**/ ?>
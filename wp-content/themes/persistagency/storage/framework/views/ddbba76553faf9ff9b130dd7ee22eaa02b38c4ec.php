<div class="<?php echo e($class); ?> relative block-who-we-are scroll-fade-in fade-in anim-in"  style="--index: 0;">
  <div class="container md:py-12 mx-auto px-4 py-8 xl:pb-24 xl:pt-20">

    <?php if(!empty($header)): ?>
      <h2 class="bg-fill font-brushup inline-block leading-none pb-2 px-6 text-4xl text-white uppercase fade-in-element" style="--index: 1; background-image:url('<?= \Roots\asset('images/brush-red.png'); ?>')">
        <?php echo e($header); ?>

      </h2>
    <?php endif; ?>

    <?php if(!empty($title)): ?>
      <h3 class="leading-loose max-w-4xl md:text-3xl mt-5 mx-auto text-2xl text-blue xl:mt-6 xl:text-4xl fade-in-element" style="--index: 2;">
        <?php echo e($title); ?>

      </h3>
    <?php endif; ?>

    <?php if(!empty($content)): ?>
      <div class="leading-loose max-w-4xl mt-2 mt-6 mx-auto prose text-xl xl:mt-10 fade-in-element" style="--index: 3;"><?php echo $content; ?></div>
    <?php endif; ?>

  </div>
</div>
<?php /**PATH C:\xampp\htdocs\persist\wp-content\themes\persistagency\resources\views/blocks/block-who-we-are.blade.php ENDPATH**/ ?>
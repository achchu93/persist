<div class="<?php echo e($class); ?> relative overflow-hidden block-hero-small anim-section">

  <?php if($background): ?>
    <?php echo wp_get_attachment_image($background['id'], 'full', false, ['class' => 'absolute w-full h-full object-cover']); ?>

  <?php endif; ?>

  <div class="mx-auto py-48 relative">

    <h2 class="-rotate-8 font-brushuptoo lg:text-6xl md:text-5xl px-3 text-4xl text-center text-white transform xl:text-8xl">
      <?php if(!empty($header)): ?>
        <div class="xl:-ml-40">
          <?php echo $header; ?>

        </div>
      <?php endif; ?>
      <?php if(!empty($header2)): ?>
        <div class="xl:-mr-40">
          <?php echo $header2; ?>

        </div>
      <?php endif; ?>
    </h2>

  </div>

</div>
<?php /**PATH C:\xampp\htdocs\persist\wp-content\themes\persistagency\resources\views/blocks/block-hero-small.blade.php ENDPATH**/ ?>
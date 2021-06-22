<div class="<?php echo e($class); ?> block-header-title-text-illustration anim-section">
  <div class="container max-w-screen-xl mx-auto px-4 py-32">

    <?php if(!empty($header)): ?>
      <h2 class="bg-fill font-brushup inline-block leading-none pb-2 px-6 text-4xl text-white uppercase" style="background-image:url('<?= \Roots\asset('images/brush-red.png'); ?>')">
        <?php echo e($header); ?>

      </h2>
    <?php endif; ?>

    <?php if(!empty($title)): ?>
      <h3 class="font-bold leading-none max-w-screen-md mt-12 mx-auto text-5xl xl:text-6xl">
        <?php echo e($title); ?>

      </h3>
    <?php endif; ?>

    <div class="flex flex-col justify-center max-w-screen-md md:flex-row md:space-x-5 mx-auto space-x-0">

      <?php if(!empty($text)): ?>
        <div class="leading-loose mt-6 relative text-xl z-10 flex-1">
          <?php echo $text; ?>

        </div>
      <?php endif; ?>

      <?php if(!empty($text2)): ?>
        <div class="leading-loose mt-6 relative text-xl z-10 flex-1">
          <?php echo $text2; ?>

        </div>
      <?php endif; ?>

    </div>

    <?php if($image): ?>
      <div class="mt-24">
        <?php echo wp_get_attachment_image($image['id'], 'full', false, ['class' => 'h-auto mx-auto w-full']); ?>

      </div>
    <?php endif; ?>

  </div>
</div>
<?php /**PATH C:\xampp\htdocs\persist\wp-content\themes\persistagency\resources\views/blocks/block-header-title-text-illustration.blade.php ENDPATH**/ ?>
<div class="<?php echo e($class); ?> block-text-image anim-section">
  <div class="container mx-auto px-4">

    <div class="<?php echo e($reverse ? 'md:flex-row-reverse md:space-x-reverse' : 'md:flex-row '); ?> flex flex-col md:space-x-12 justify-center w-full h-full py-4">

      <div class="md:w-6/12">

        <div class="flex flex-col space-y-5">

          <?php if(!empty($icon)): ?>
            <div class="">
              <?php echo wp_get_attachment_image($icon['id'], 'full', false, ['class' => 'h-10 w-10 relative z-10']); ?>

            </div>
          <?php endif; ?>

          <?php if(!empty($title)): ?>
            <h3 class="font-bold leading-none text-5xl relative z-10">
              <a href="<?php echo e($url); ?>">
                <?php echo e($title); ?>

              </a>
            </h3>
          <?php endif; ?>

          <?php if(!empty($text)): ?>
            <div class="leading-loose text-xl relative z-10">
              <?php echo $text; ?>

            </div>
          <?php endif; ?>

        </div>

      </div>

      <?php if($image): ?>
        <div class="md:w-6/12 relative">
          <?php echo wp_get_attachment_image($image['id'], 'full', false, ['class' => 'wp-thumbnail']); ?>

        </div>
      <?php endif; ?>

    </div>

  </div>
</div>
<?php /**PATH C:\xampp\htdocs\persist\wp-content\themes\persistagency\resources\views/blocks/block-text-image.blade.php ENDPATH**/ ?>
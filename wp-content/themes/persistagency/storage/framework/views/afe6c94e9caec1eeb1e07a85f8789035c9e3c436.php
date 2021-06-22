<div class="<?php echo e($class); ?> bg-black text-white scratch scratch-black__up scratch-black__down block-services-black anim-section">
  <div class="container lg:px-8 max-w-screen-lg mx-auto px-4 py-16 xl:py-20">

    <div class="flex flex-col items items-center lg:flex-row lg:items-start lg:justify-between lg:space-x-5 lg:space-y-0 space-x-0 space-y-20">
      <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php if(!empty($items)): ?>
          <div class="flex flex-col items max-w-md space-y-20">
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="item">

                <?php if(!empty($item['icon'])): ?>
                  <?php echo wp_get_attachment_image($item['icon']['id'], 'full', false, ['class' => 'h-16 relative z-10']); ?>

                <?php endif; ?>

                <?php if(!empty($item['title'])): ?>
                  <h3 class="font-bold leading-none text-5xl relative z-10 mt-4">
                    <?php echo e($item['title']); ?>

                  </h3>
                <?php endif; ?>

                <?php if(!empty($item['text'])): ?>
                  <div class="leading-loose mt-4 relative text-xl z-10">
                    <?php echo $item['text']; ?>

                  </div>
                <?php endif; ?>

              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        <?php endif; ?>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</div>
<?php /**PATH C:\xampp\htdocs\persist\wp-content\themes\persistagency\resources\views/blocks/block-services-black.blade.php ENDPATH**/ ?>
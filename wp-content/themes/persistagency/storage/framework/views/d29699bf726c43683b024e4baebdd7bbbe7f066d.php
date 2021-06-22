<div class="<?php echo e($class); ?> block-work-with scroll-fade-in anim-in">
  <div class="container mx-auto pb-24 pt-20 px-4 xl:pb-32">

    <?php if(!empty($header)): ?>
      <h2 class="bg-fill font-brushup inline-block leading-none pb-2 px-6 text-4xl text-white uppercase" style="background-image:url('<?= \Roots\asset('images/brush-red.png'); ?>')">
        <?php echo e($header); ?>

      </h2>
    <?php endif; ?>

    <?php if(!empty($items)): ?>
      <div class="gap-4 grid grid-cols-2 justify-center lg:grid-cols-3 max-w-5xl mt-6 mx-auto xl:gap-x-10 xl:gap-y-5 xl:mt-16">

        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="flex items-center justify-center fade-in-element" style="--index: <?php echo e($key); ?>;">

            <?php if(!empty($item['image'])): ?>
              <?php echo wp_get_attachment_image($item['image']['id'], 'full', false, ['class' => '']); ?>

            <?php endif; ?>

          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    <?php endif; ?>

  </div>
</div>
<?php /**PATH C:\xampp\htdocs\persist\wp-content\themes\persistagency\resources\views/blocks/block-work-with.blade.php ENDPATH**/ ?>
<div class="<?php echo e($class); ?> block-our-team scroll-fade-in anim-in fade-in"  style="--index: 0;">
  <div class="container mx-auto pb-24 pt-20 px-4 xl:pb-32">

    <?php if(!empty($header)): ?>
      <h2 class="bg-fill font-brushup inline-block leading-none pb-2 px-6 text-4xl text-white uppercase fade-in-element" style="--index: 1; background-image:url('<?= \Roots\asset('images/brush-red.png'); ?>')">
        <?php echo e($header); ?>

      </h2>
    <?php endif; ?>

    <?php if(!empty($content)): ?>
      <div class="leading-loose max-w-4xl mt-2 mt-6 mx-auto prose text-xl xl:mt-10 fade-in-element" style="--index: 2;"><?php echo $content; ?></div>
    <?php endif; ?>

    <?php if(!empty($items)): ?>
      <div class="gap-4 grid grid-cols-2 justify-center lg:grid-cols-4 max-w-5xl md:lg:grid-cols-3 mt-6 mx-auto xl:gap-x-10 xl:gap-y-20 xl:grid-cols-5 xl:mt-16">

        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class=" fade-in-element" style="--index: <?php echo e($key); ?>;">

            <?php if(!empty($item['image'])): ?>
              <?php echo wp_get_attachment_image($item['image']['id'], 'full', false, ['class' => 'border-2 border-secondary h-auto w-full']); ?>

            <?php endif; ?>

            <?php if(!empty($item['name'])): ?>
              <div class="font-bold leading-none mt-2 text-xl xl:mt-4"><?php echo e($item['name']); ?></div>
            <?php endif; ?>

            <?php if(!empty($item['position'])): ?>
              <div class="italic leading-none mt-1"><?php echo e($item['position']); ?></div>
            <?php endif; ?>

            <?php if(!empty($item['from'])): ?>
              <div class="leading-none mt-1 text-red text-sm"><?php echo e($item['from']); ?></div>
            <?php endif; ?>

          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    <?php endif; ?>

  </div>
</div>
<?php /**PATH C:\xampp\htdocs\persist\wp-content\themes\persistagency\resources\views/blocks/block-our-team.blade.php ENDPATH**/ ?>
<div data-animation="reusable-our-work-bg" data-animationdelay="0" class="<?php echo e($class); ?> block-our-work anim-in fade-in anim-section relative overflow-hidden">
	<div class="section-bg absolute w-full h-full object-cover"></div>

  <div class="container relative mx-auto pb-32 pt-12 px-4 py-8">

    <?php if(!empty($header)): ?>
      <h2 class="bg-fill font-brushup inline-block leading-none pb-2 pt-1 px-6 text-4xl text-white uppercase" style="background-image:url('<?= \Roots\asset('images/brush-red.png'); ?>')">
        <?php echo e($header); ?>

      </h2>
    <?php endif; ?>

    <?php if(!empty($items)): ?>
      <ul class="work-items gap-6 grid items-center justify-center md:grid-cols-3 mt-20 xl:gap-x-24 xl:gap-y-12">

        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="work-item fade-in-element" style="--index: <?php echo e(++$key); ?>;">

            <?php if(!empty($item['image'])): ?>
              <?php if(!empty($item['link'])): ?>
                <a class="" href="<?php echo e($item['link']['url']); ?>" target="<?php echo e($item['link']['target']); ?>">
              <?php endif; ?>
              <?php echo wp_get_attachment_image($item['image']['id'], 'full', false, ['class' => 'w-full h-auto']); ?>

              <?php if(!empty($link)): ?>
                </a>
              <?php endif; ?>
            <?php endif; ?>

            <?php if(!empty($item['title'])): ?>
              <h4 class="mt-2 uppercase xl:mt-3 px-4">

                <?php if(!empty($item['link'])): ?>
                  <a class="" href="<?php echo e($item['link']['url']); ?>" target="<?php echo e($item['link']['target']); ?>">
                <?php endif; ?>

                <?php echo e($item['title']); ?>


                <?php if(!empty($item['link'])): ?>
                  </a>
                <?php endif; ?>

              </h4>
            <?php endif; ?>

            <?php if(!empty($item['subtitle'])): ?>
              <h5 class="italic text-red text-sm px-4">
                <?php echo e($item['subtitle']); ?>

              </h5>
            <?php endif; ?>

          </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    <?php endif; ?>

  </div>

</div>
<?php /**PATH C:\xampp\htdocs\persist\wp-content\themes\persistagency\resources\views/blocks/block-our-work.blade.php ENDPATH**/ ?>
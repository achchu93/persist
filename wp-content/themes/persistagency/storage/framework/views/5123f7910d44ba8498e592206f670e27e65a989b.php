<div data-animation="home-case-studies-bg" class="work-slider relative <?php echo e($class); ?> block-work-slider anim-in fade-in anim-section h-screen">
  <div class="section-bg absolute w-full h-full object-cover"> </div>
	

	<div class="w-screen mx-auto px-4 py-8">

    <?php if(!empty($title)): ?>
		<div class="max-w-screen-xl mx-auto fade-in-element relative">
      <h2 class="bg-fill font-brushup inline-block leading-none pb-2 px-6 text-4xl uppercase" style="background-image:url('<?= \Roots\asset('images/brush-yellow.png'); ?>')">
        <?php echo e($title); ?>

      </h2>
			</div>
    <?php endif; ?>

    <?php if($items): ?>
      <div class="work-slider__slider">

        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="item">
            <div class="
<?php echo e($item['custom_class'] ? $item['custom_class'] : ''); ?>

<?php echo e($item['reverse'] ? 'md:flex-row-reverse' : 'md:flex-row '); ?>

              flex flex-col flex-wrap justify-center w-full h-full relative max-w-screen-xl mx-auto">

              <?php if($item['illustration']): ?>
                <div class="md:w-7/12 relative slide-from-left">
                  <?php echo wp_get_attachment_image($item['illustration']['id'], 'full', false, ['class' => 'wp-thumbnail']); ?>

                </div>
              <?php endif; ?>

              <div class="md:w-5/12 slide-from-right delay-25">

                <?php if(!empty($item['icons'])): ?>
                  <div class="flex flex-row items-center space-x-4">
                    <?php $__currentLoopData = $item['icons']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <img src="<?php echo e($icon['url']); ?>" class="w-10 h-10" />
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                <?php endif; ?>

                <?php if(!empty($item['title'])): ?>

                  <h3 class="font-bold leading-tight text-6xl mt-2 relative">
                    <a href="<?php echo e($item['url']); ?>">
                      <?php echo e($item['title']); ?>

                    </a>
                  </h3>
                <?php endif; ?>

                <?php if(!empty($item['excerpt'])): ?>
                  <div class="leading-loose mt-2 text-xl relative">
                    <?php echo e($item['excerpt']); ?>

                  </div>
                <?php endif; ?>

                <div class="mt-10">

                  <a href="<?php echo e($item['url']); ?>" class="btn btn-primary relative">
                    View case Study
                  </a>

                </div>

              </div>

            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>

    <?php endif; ?>

    <?php if(!empty($link)): ?>
      <a class="block flex font-bold items-center justify-end space-x-1 text-lg uppercase" href="<?php echo e($link['url']); ?>" target="<?php echo e($link['target']); ?>">
        <span>View all work</span>
        <img src="<?= \Roots\asset('images/arrow-right.png'); ?>" alt="arrow" />
      </a>
    <?php endif; ?>

  </div>
</div>
<?php /**PATH C:\xampp\htdocs\persist\wp-content\themes\persistagency\resources\views/blocks/block-work-slider.blade.php ENDPATH**/ ?>
<div data-animation="home-our-values" class="<?php echo e($class); ?> relative block-values anim-in anim-section fade-in h-screen overflow-hidden">
	<div class="section-bg absolute w-full h-full object-cover"> </div>
  <?php if($background): ?>
    
		
  <?php endif; ?>

  <div class="container mx-auto px-4 py-32 relative fade-in-element">

    <?php if(!empty($header)): ?>
      <h2 class="bg-fill font-brushup inline-block leading-none pb-2 px-6 text-4xl text-white uppercase" style="background-image:url('<?= \Roots\asset('images/brush-red.png'); ?>')">
        <?php echo e($header); ?>

      </h2>
    <?php endif; ?>

    <?php if($items): ?>
      <div x-data="{ tab: '<?php echo e($items[0]['id']); ?>' }">

        <div class="items lg:max-w-4xl mx-auto xl:max-w-5xl">

          <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div x-show="tab === '<?php echo e($item['id']); ?>'" id="<?php echo e($item['id']); ?>">

              <div class="flex items-center md:space-x-8 mt-24 space-x-4 text-primary">

                <?php if(!empty($item['icon'])): ?>
                  <?php echo get_svg($item['icon'], 'fill-current h-16 md:h-24 w-auto'); ?>

                <?php endif; ?>

                <?php if(!empty($item['title'])): ?>
                  <div class="md:text-8xl text-5xl"><?php echo $item['title']; ?></div>
                <?php endif; ?>

              </div>

              <?php if(!empty($item['text'])): ?>
                <div class="md:text-5xl mt-5 text-3xl text-white"><?php echo $item['text']; ?></div>
              <?php endif; ?>

            </div>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="flex justify-center mt-24 space-x-8 text-white ">

          <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div :class="{ 'text-primary': tab =='<?php echo e($item['id']); ?>' }" @click="tab = '<?php echo e($item['id']); ?>'" class="block-values__control hover:text-primary cursor-pointer" data-target="<?php echo e($item['id']); ?>">

              <?php if(!empty($item['icon'])): ?>
                <?php echo get_svg($item['icon'], 'fill-current'); ?>

              <?php endif; ?>

            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

      </div>
    <?php endif; ?>

    <?php if(!empty($link)): ?>
      <div class="">
        <a class="block mt-10 flex font-bold text-white items-center hover:text-primary justify-end space-x-1 text-lg uppercase" href="<?php echo e($link['url']); ?>" target="<?php echo e($link['target']); ?>">
          <span><?php echo e($link['title']); ?></span>
          <img src="<?= \Roots\asset('images/arrow-right.png'); ?>" alt="arrow" />
        </a>
      </div>
    <?php endif; ?>

  </div>
</div>
<?php /**PATH C:\xampp\htdocs\persist\wp-content\themes\persistagency\resources\views/blocks/block-values.blade.php ENDPATH**/ ?>
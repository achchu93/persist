<div data-animation="home-what-wedo" class="<?php echo e($class); ?> relative text-black block-what-we-do anim-in fade-in anim-section h-screen">
	<div class="section-bg absolute w-full h-full object-cover"> </div>
  <div class="container mx-auto px-4 py-32 relative fade-in-element stagger-1">

    <?php if(!empty($header)): ?>
      <h2 class="bg-fill font-brushup inline-block leading-none pb-2 px-6 text-4xl text-white uppercase" style="background-image:url('<?= \Roots\asset('images/brush-red.png'); ?>')">
        <?php echo e($header); ?>

      </h2>
    <?php endif; ?>

    <?php if($pieces): ?>
      <div class="flex flex-col md:flex-row space-y-10 md:space-y-0 justify-between mt-12">
        <?php $__currentLoopData = $pieces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          

          <?php if($items): ?>
            <div class="gap-12 grid justify-between">

              <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex flex-col items-center relative anim-in anim-mask-from-left stagger-250">

                  <?php if($item['titleLines'] && count($item['titleLines'])): ?>
                    <?php $__currentLoopData = $item['titleLines']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                      <div class="inline-flex items-center px-5 py-1 space-x-3" style="background-image:url('<?= \Roots\asset('images/brush-white.png'); ?>');background-size: 100% 100%">

                        <?php if(!empty($item['icon'])): ?>
                          <?php echo get_svg($item['icon'], ''); ?>

                          <?php unset($item['icon']) ?>
                        <?php endif; ?>

                        <div class="font-brushup leading-none md:text-4xl text-3xl xl:text-5xl anim-in anim-fade-in"><?php echo $title; ?></div>

                      </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  <?php endif; ?>

                </div>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

          <?php endif; ?>

          
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    <?php endif; ?>


    <?php if(!empty($link)): ?>
      <div class="">
        <a class="block flex font-bold hover:text-gray-700 items-center justify-end mt-10 space-x-1 text-black text-lg uppercase" href="<?php echo e($link['url']); ?>" target="<?php echo e($link['target']); ?>">
          <span><?php echo e($link['title']); ?></span>
          <img src="<?= \Roots\asset('images/arrow-right.png'); ?>" alt="arrow" />
        </a>
      </div>
    <?php endif; ?>

  </div>
</div>
<?php /**PATH C:\xampp\htdocs\persist\wp-content\themes\persistagency\resources\views/blocks/block-what-we-do.blade.php ENDPATH**/ ?>
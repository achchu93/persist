<div class="<?php echo e($class); ?> block-story-stats relative">

  <?php if($image): ?>
    <?php echo wp_get_attachment_image($image['id'], 'full', false, ['class' => 'h-full w-full object-cover wp-thumbnail absolute']); ?>

  <?php endif; ?>

  <div class="container mx-auto px-4 py-20 relative xl:py-48">

    <?php if(!empty($header)): ?>
      <h2 class="bg-fill font-brushup mt-5 inline-block leading-none pb-2 px-6 text-4xl uppercase relative z-10 text-white" style="background-image:url('<?= \Roots\asset('images/brush-red.png'); ?>')">
        <?php echo e($header); ?>

      </h2>
    <?php endif; ?>

    <div class="flex flex-col lg:space-x-20 lg:space-y-0 md:flex-row my-12 space-y-16 xl:my-20 xl:px-12 xl:space-x-24">

      <div class="lg:w-6/12">

        <?php if(!empty($title)): ?>
          <h3 class="font-bold leading-none relative text-5xl text-blue xl:text-6xl z-10">
            <?php echo e($title); ?>

          </h3>
        <?php endif; ?>

        <?php if(!empty($text)): ?>
          <div class="font-bold mt-6 prose-xl relative xl:mt-12 z-10">
            <?php echo $text; ?>

          </div>
        <?php endif; ?>

      </div>

      <?php if(!empty($stats)): ?>
        <div class="flex flex-col lg:w-6/12 space-y-16 xl:space-y-24">
          <?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="">

              <?php if(!empty($stat['title'])): ?>
                <div class="font-bold leading-5 max-w-xs text-2lg uppercase"><?php echo e($stat['title']); ?></div>
              <?php endif; ?>

              <?php if(!empty($stat['number'])): ?>
                <div class="bg-fill font-brushup inline-block leading-none mt-4 px-6 relative text-7xl text-yellow uppercase xl:text-12xl z-10" style="background-image:url('<?= \Roots\asset('images/brush-red-big.png'); ?>')">
                  <div class="xl:-translate-y-5 transform xl:translate-x-3"><?php echo e($stat['number']); ?></div>
                </div>
              <?php endif; ?>

            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      <?php endif; ?>

    </div>

  </div>

</div>
<?php /**PATH /Applications/MAMP/htdocs/persist/wp-content/themes/persistagency/resources/views/blocks/block-story-stats.blade.php ENDPATH**/ ?>
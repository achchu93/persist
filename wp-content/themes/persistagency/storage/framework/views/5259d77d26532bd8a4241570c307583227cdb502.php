<div class="<?php echo e($class); ?> block-case-study-intro bg-gray2 scratch scratch-gray__down">
  <div class="container mx-auto px-4 py-8 xl:py-20">

    <div class="item">

      <div class="<?php echo e($reverse ? 'lg:flex-row-reverse' : 'lg:flex-row '); ?> flex flex-col flex-wrap justify-center w-full h-full py-4">

        <?php if($image): ?>
          <div class="lg:w-7/12 relative">
            <?php echo wp_get_attachment_image($image['id'], 'full', false, ['class' => 'wp-thumbnail']); ?>

          </div>
        <?php endif; ?>

        <div class="lg:w-5/12">

          <div class="flex flex-col space-y-5">

          <?php if(!empty($icons)): ?>
            <div class="flex flex-row items-center space-x-5">
              <?php $__currentLoopData = $icons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(!empty($icon['icon'])): ?>
                  <?php echo wp_get_attachment_image($icon['icon']['id'], 'full', false, ['class' => 'w-10 h-10']); ?>

                <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          <?php endif; ?>

          <?php if(!empty($title)): ?>
            <h3 class="font-bold leading-none lg:text-6xl relative text-5xl z-10">
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

      </div>
    </div>

  </div>
</div>
<?php /**PATH /Applications/MAMP/htdocs/persist/wp-content/themes/persistagency/resources/views/blocks/block-case-study-intro.blade.php ENDPATH**/ ?>
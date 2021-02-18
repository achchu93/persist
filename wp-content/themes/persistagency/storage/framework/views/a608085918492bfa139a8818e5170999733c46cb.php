<div class="<?php echo e($class); ?> block-case-studies-list">
  <div class="container md:py-20 mx-auto px-4 py-16 xl:py-24">

    <?php if(!empty($title)): ?>
      <h2 class="bg-cover font-brushup inline-block leading-none mx-16 pb-2 px-6 text-4xl uppercase" style="background-image:url('<?= \Roots\asset('images/brush-yellow.png'); ?>')">
        <?php echo e($title); ?>

      </h2>
    <?php endif; ?>

    <?php if($items): ?>
      <div class="flex flex-col lg:mt-16 md:mt-10 mt-8 space-y-16 xl:mt-20 xl:space-y-24">

        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="<?php echo e($item['class']); ?> item">

            <div class="<?php echo e($item['reverse']?'md:flex-row-reverse':'md:flex-row '); ?> flex flex-col flex-wrap justify-center w-full h-full py-4">

              <?php if($item['illustration']): ?>
                <div class="md:w-7/12 relative">
                  <?php echo wp_get_attachment_image($item['illustration']['id'], 'full', false, ['class' => 'w-full h-auto']); ?>

                </div>
              <?php endif; ?>

              <div class="md:w-5/12">

                <?php if(!empty($item['title'])): ?>

                  <h3 class="font-bold leading-tight text-6xl">
                    <a href="<?php echo e($item['url']); ?>">
                      <?php echo e($item['title']); ?>

                    </a>
                  </h3>
                <?php endif; ?>

                <?php if(!empty($item['excerpt'])): ?>
                  <div class="leading-loose mt-2 text-xl">
                    <?php echo e($item['excerpt']); ?>

                  </div>
                <?php endif; ?>

                <div class="mt-10">

                  <a href="<?php echo e($item['url']); ?>" class="btn btn-primary">
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
<?php /**PATH /Applications/MAMP/htdocs/persist/wp-content/themes/persistagency/resources/views/blocks/block-case-studies-list.blade.php ENDPATH**/ ?>
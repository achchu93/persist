<div class="<?php echo e($class); ?> block-background-and-story">

  <div class="py-20">

    <?php if($image): ?>
      <?php echo wp_get_attachment_image($image['id'], 'full', false, ['class' => 'h-auto w-full wp-thumbnail']); ?>

    <?php endif; ?>

    <div class="container lg:-mt-48 md:-mt-32 mx-auto px-4 xl:-mt-64">

      <?php if(!empty($header)): ?>
        <h2 class="bg-fill font-brushup mt-5 inline-block leading-none pb-2 px-6 text-4xl uppercase relative z-10 text-white" style="background-image:url('<?= \Roots\asset('images/brush-red.png'); ?>')">
          <?php echo e($header); ?>

        </h2>
      <?php endif; ?>

      <div class="flex flex-col md:flex-row space-x-2 xl:space-x-16 my-12">
      
        <div class="lg:w-7/12 xl:w-8/12">

      <?php if(!empty($title)): ?>
        <h3 class="font-bold leading-none lg:text-6xl relative text-5xl z-10">
          <a href="<?php echo e($url); ?>">
            <?php echo e($title); ?>

          </a>
        </h3>
      <?php endif; ?>

      <?php if(!empty($text)): ?>
        <div class="leading-loose mt-6 text-xl relative z-10">
          <?php echo $text; ?>

        </div>
      <?php endif; ?>
          
        </div>


      <?php if(!empty($links)): ?>
        <div class="flex flex-col lg:w-5/12 space-y-4 xl:4/12 xl:space-y-10">
          <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="">
              <a class="font-bold lg:text-2xl text-red text-xl uppercase xl:text-3xl" href="<?php echo e($link['url']); ?>" target="<?php echo e($link['target']); ?>"><?php echo e($link['title']); ?></a>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      <?php endif; ?>


      </div> 


    </div>
  </div>
</div>
<?php /**PATH /Applications/MAMP/htdocs/persist/wp-content/themes/persistagency/resources/views/blocks/block-poster-content-links.blade.php ENDPATH**/ ?>
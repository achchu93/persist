<div class="<?php echo e($class); ?> z-20 block-cta
     <?php echo e($variant == 'black' ? 'bg-black scratch scratch-black__up scratch-black__down text-white' : ''); ?>

     <?php echo e($variant == 'blue' ? 'bg-blue scratch scratch-blue-small__up scratch-blue-small__down text-white' : ''); ?>

     <?php echo e($variant == 'blue-yellow' ? 'bg-blue scratch scratch-blue-small__up scratch-blue-small__down text-white' : ''); ?>

     <?php echo e($variant == 'red' ? 'bg-red scratch scratch-red__up scratch-red__down text-white' : ''); ?>

     ">
  <div class="container max-w-screen-lg mx-auto px-4 py-16 text-center">

    <?php if(!empty($text)): ?>
      <h2 class="pb-2 text-5xl uppercase xl:text-7xl
     <?php echo e($variant == 'blue-yellow' ? 'font-brushuptoo' : 'font-brushup'); ?>

     <?php echo e($variant == 'blue-yellow' ? 'text-yellow' : ''); ?>

        ">
        <?php echo e($text); ?>

      </h2>
    <?php endif; ?>
    
    <?php if(!empty($author)): ?>
    <div class="font-bold text-lg text-right uppercase"><?php echo e($author); ?></div>
    <?php endif; ?>

    <?php if(!empty($link)): ?>
      <div class="mt-4 text-center">
        <a class="btn px-16
                  <?php echo e($variant == 'black' ? 'btn-red' : ''); ?>

                  <?php echo e($variant == 'blue' ? 'btn-yellow' : ''); ?>

                  <?php echo e($variant == 'red' ? 'btn-blue' : ''); ?>

                  " href="<?php echo e($link['url']); ?>" target="<?php echo e($link['target']); ?>"><?php echo e($link['title']); ?></a>
      </div>
    <?php endif; ?>

  </div>
</div>
<?php /**PATH /Applications/MAMP/htdocs/persist/wp-content/themes/persistagency/resources/views/blocks/block-cta.blade.php ENDPATH**/ ?>
<div class="<?php echo e($class); ?> block-header-scratch">
  <div class="container mx-auto px-4">

    <?php if(!empty($header)): ?>
      <h2 class="bg-fill font-brushup inline-block leading-none pb-2 px-6 text-4xl uppercase relative z-10
                 <?php echo e($variant == 'yellow' ? 'text-black' : 'text-white'); ?>

                 " style="background-image:url('<?= \Roots\asset($scratch); ?>')">
        <?php echo e($header); ?>

      </h2>
    <?php endif; ?>

  </div>
</div>
<?php /**PATH C:\xampp\htdocs\persist\wp-content\themes\persistagency\resources\views/blocks/block-header-scratch.blade.php ENDPATH**/ ?>
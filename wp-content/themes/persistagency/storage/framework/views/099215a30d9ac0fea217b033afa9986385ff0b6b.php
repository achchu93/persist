<div class="<?php echo e($class); ?> block-big-image">

  <?php if(!empty($image)): ?>
   <?php echo wp_get_attachment_image($image['id'], 'full', false, ['class' => 'w-full h-auto']); ?> 
  <?php endif; ?>

</div> 
<?php /**PATH C:\xampp\htdocs\persist\wp-content\themes\persistagency\resources\views/blocks/block-big-image.blade.php ENDPATH**/ ?>
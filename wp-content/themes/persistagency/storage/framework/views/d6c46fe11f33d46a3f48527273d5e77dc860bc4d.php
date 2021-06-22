<div class="page-header hidden">
  <h1><?php echo $title; ?></h1>
</div>
 <?php if (isset($component)) { $__componentOriginal97f6b4fb35ffe6b36cf32715e64e93fb41b427da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Featured::class, ['post' => get_post()]); ?>
<?php $component->withName('featured'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginal97f6b4fb35ffe6b36cf32715e64e93fb41b427da)): ?>
<?php $component = $__componentOriginal97f6b4fb35ffe6b36cf32715e64e93fb41b427da; ?>
<?php unset($__componentOriginal97f6b4fb35ffe6b36cf32715e64e93fb41b427da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>  
<?php /**PATH C:\xampp\htdocs\persist\wp-content\themes\persistagency\resources\views/partials/page-header.blade.php ENDPATH**/ ?>
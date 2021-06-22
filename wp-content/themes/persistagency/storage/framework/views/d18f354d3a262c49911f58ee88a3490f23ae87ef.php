 <?php if (isset($component)) { $__componentOriginalceda543b5f7595e97d0e3d5b8492056f2c6d35d9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\MobileNavigation::class, []); ?>
<?php $component->withName('mobile-navigation'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginalceda543b5f7595e97d0e3d5b8492056f2c6d35d9)): ?>
<?php $component = $__componentOriginalceda543b5f7595e97d0e3d5b8492056f2c6d35d9; ?>
<?php unset($__componentOriginalceda543b5f7595e97d0e3d5b8492056f2c6d35d9); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main class="main flex-1 animation-content">
  <?php echo $__env->yieldContent('content'); ?>
</main>

<?php if(!$hide_call_to_action_in_footer): ?>
  <?php echo $__env->make('partials.block-footer-cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\persist\wp-content\themes\persistagency\resources\views/layouts/app.blade.php ENDPATH**/ ?>
<header id="pageHeader" class="absolute w-full z-10 fade-in slide-from-top-stagger">
  <div class="container flex flex-col items-start justify-between md:flex-row md:py-2 mx-auto px-5">
    <a href="<?php echo e($home_url); ?>" title="<?php echo e($site_name); ?>" class="md:ml-0 md:mt-0 md:px-0 md:w-auto mt-3 px-3 w-64 slide hidden sm:block" style="--index: 0;">
      <?php if($header_style == 'black' && $header_logo_black): ?>
        <img src="<?php echo e($header_logo_black['url']); ?>" alt="logo" class="h-auto w-full">
      <?php elseif($header_style == 'white' && $header_logo_white): ?>
        <img src="<?php echo e($header_logo_white['url']); ?>" alt="logo" class="h-auto w-full">
      <?php else: ?>
        <?php echo e($site_name); ?>

      <?php endif; ?>
    </a>

     <?php if (isset($component)) { $__componentOriginale50e17b184145c8d671bd4a72ac0d887f47f1a0e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Navigation::class, ['style' => $header_style]); ?>
<?php $component->withName('navigation'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginale50e17b184145c8d671bd4a72ac0d887f47f1a0e)): ?>
<?php $component = $__componentOriginale50e17b184145c8d671bd4a72ac0d887f47f1a0e; ?>
<?php unset($__componentOriginale50e17b184145c8d671bd4a72ac0d887f47f1a0e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

    <?php if($say_hello_url): ?>
      <div class="font-semibold font-title hidden items-center justify-center md:block md:ml-auto py-5 text-base slide" style="--index: 4;">
        <a href="<?php echo e($say_hello_url); ?>" class="<?php echo e($header_style == 'black' ? 'bg-yellow text-black ' : 'bg-black text-white'); ?> font-bold inline-block leading-none px-4 py-2 rounded-full select-none uppercase" data-id="<?php echo e($item->dbId); ?>">
          Say hello
        </a>
      </div>
    <?php endif; ?>

    <svg class="<?php echo e($header_style == 'black' ? 'text-black' : 'text-white'); ?> mobile-menu__toggle md:hidden absolute cursor-pointer h-5 mr-5 mt-20 right-0 w-5" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
      <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
    </svg>

  </div>
</header>
<?php /**PATH C:\xampp\htdocs\persist\wp-content\themes\persistagency\resources\views/partials/header.blade.php ENDPATH**/ ?>
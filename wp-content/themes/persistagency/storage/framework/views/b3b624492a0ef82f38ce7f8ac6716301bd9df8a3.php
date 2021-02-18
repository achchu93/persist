<div class="bg-black bg-cover duration-500 ease-in-out fixed flex flex-col h-screen mobile-menu overflow-hidden overflow-y-scroll right-0 text-white top-0 transform w-100 z-50 w-screen p-4 translate-x-full" style="background-image:url('<?php echo e($mobile_navigation_background['url']); ?>')">

  <svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" class="mobile-menu__toggle absolute h-6 mr-5 right-0 w-6 cursor-pointer text-white mt-16">
    <path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
  </svg>

  <a href="<?php echo e($home_url); ?>" title="<?php echo e($site_name); ?>" class="flex title-font font-medium items-center text-white mt-2 lg:mt-0 px-3 lg:px-0 mx-auto lg:ml-0">
    <?php if($header_logo_white): ?>
      <img src="<?php echo e($header_logo_white['url']); ?>" alt="logo" class="w-48 h-auto mx-auto">
    <?php else: ?>
      <?php echo e($site_name); ?>

    <?php endif; ?>
  </a>

  <ul class="flex flex-col font-semibold font-title items-center pt-10 px-10 space-y-4 text-lg flex-1">
    <?php $__currentLoopData = $navigation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li class="text-center <?php echo e($item->classes ?? ''); ?> <?php echo e($item->active ? 'active' : ''); ?> <?php echo e($item->children ? 'menu-item-has-children' : ''); ?>">
        <a class="text-yellow " href="<?php echo e($item->url); ?>" data-toggle="<?php echo e($item->objectId); ?>">
          <?php echo $item->label; ?>

        </a>

        <?php if($item->children): ?>
          <ul class="mt-2 menu-child-menu space-y-4 text-md flex flex-col items-center" id="<?php echo e($item->objectId); ?>">
            <?php $__currentLoopData = $item->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="menu-child-item <?php echo e($item->classes ?? ''); ?> <?php echo e($child->active ? 'active' : ''); ?>">
                <a href="<?php echo e($child->url); ?>">
                  <?php echo $child->label; ?>

                </a>
              </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        <?php endif; ?>
      </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ul>

  <div class="flex flex-col items-center space-y-5">
    <?php if($say_hello_url): ?>
    <a href="<?php echo e($say_hello_url); ?>" class="bg-yellow text-black font-bold inline-block leading-none px-4 py-2 rounded-full select-none uppercase">
      Say hello
    </a>
    <?php endif; ?>

     <?php if (isset($component)) { $__componentOriginal2c64e97bd7bd91688086782e8b8c296b11113cb7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SocialIcons::class, []); ?>
<?php $component->withName('social-icons'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal2c64e97bd7bd91688086782e8b8c296b11113cb7)): ?>
<?php $component = $__componentOriginal2c64e97bd7bd91688086782e8b8c296b11113cb7; ?>
<?php unset($__componentOriginal2c64e97bd7bd91688086782e8b8c296b11113cb7); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

    <div class="flex space-x-4">

      <div class="">
        <?php dynamic_sidebar('sidebar-subfooter-left') ?>
      </div>

      <div class="">
        <?php dynamic_sidebar('sidebar-subfooter-right') ?>
      </div>

    </div>

  </div>

</div>
<?php /**PATH /Applications/MAMP/htdocs/persist/wp-content/themes/persistagency/resources/views/components/mobile-navigation.blade.php ENDPATH**/ ?>
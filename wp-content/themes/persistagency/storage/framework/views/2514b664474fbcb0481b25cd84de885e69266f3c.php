<ul class="font-medium font-title hidden items-center justify-center md:flex md:ml-auto py-6 text-base">
  <?php $__currentLoopData = $navigation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <li class="navigation relative inline-block sm:mx-2 md:mx-4 lg:mx-8 xl:mx-16 <?php echo e($item->classes ?? ''); ?> <?php echo e($item->active ? 'active' : ''); ?> <?php echo e($item->children? 'navigation__has-submenu':''); ?>"> 
      <a 
        href="<?php echo e($item->url); ?>"
        target="<?php echo e($item->target); ?>"
        class="
               <?php if($item->active): ?>
                 <?php if($style=="black"): ?>
                   text-red
                 <?php else: ?>
                   text-yellow
                 <?php endif; ?>
               <?php else: ?>
                 <?php if($style=="black"): ?>
                   text-gray-900 hover:text-red
                 <?php else: ?>
                   text-white hover:text-yellow
                 <?php endif; ?>
               <?php endif; ?>
               leading-none inline-flex items-center justify-between px-2 py-1 font-medium transition-all duration-500 rounded-md focus:outline-none uppercase" 
        data-id="<?php echo e($item->dbId); ?>"
        >
        <span class="flex-shrink-0">
          <?php echo e($item->label); ?> 
        </span> 
      </a>
      <?php if($item->children): ?>
        <div style="display:none" class="navigation__submenu absolute pt-2 transition duration-150 ease-in ease-out transform -translate-y-3 scale-95 opacity-0 ">
          <div class="relative py-1">
            <ul class="relative"> 
              <?php $__currentLoopData = $item->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li
                  class="block w-full px-4 py-2 focus:shadow-outline transition duration-300 ease-in-out <?php echo e($child->classes ?? ''); ?> <?php echo e($child->active ? 'active' : ''); ?>"> 
                  <a 
                  class="
                         <?php if($child->active): ?>
                           <?php if($style=="black"): ?>
                             text-red
                           <?php else: ?>
                             text-yellow
                           <?php endif; ?>
                         <?php else: ?>
                           <?php if($style=="black"): ?>
                             text-gray-900 hover:text-red
                           <?php else: ?>
                             text-white hover:text-yellow
                           <?php endif; ?>
                         <?php endif; ?>
                         font-medium whitespace-no-wrap focus:outline-none uppercase"
                  href="<?php echo e($child->url); ?>"
                  target="<?php echo e($item->target); ?>"
                  >
                  <?php echo e($child->label); ?>

                  </a> 
                </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>
        </div> 
      <?php endif; ?>
    </li> 
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</ul>
<?php /**PATH /Applications/MAMP/htdocs/persist/wp-content/themes/persistagency/resources/views/components/navigation.blade.php ENDPATH**/ ?>
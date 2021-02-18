<div class="<?php echo e($class); ?> block-background-and-story relative bg-gray-900">

  <?php if($image): ?>
    <?php echo wp_get_attachment_image($image['id'], 'full', false, ['class' => 'wp-thumbnail absolute object-cover w-full h-full']); ?>

  <?php endif; ?>

  <div class="container max-w-screen-sm mx-auto px-4 py-32 relative xl:max-w-screen-md xl:py-56">

    <?php if(!empty($title)): ?>
      <h2 class="font-bold leading-none relative text-5xl text-white z-10">
        <?php echo e($title); ?>

      </h2>
    <?php endif; ?>

    <?php if(!empty($subtitle)): ?>
      <h3 class="font-semibold italic leading-none mt-2 relative text-3xl text-red z-10">
        <?php echo e($subtitle); ?>

      </h3>
    <?php endif; ?>

    <?php if(!empty($text)): ?>
      <div class="mt-8 prose-lg md:prose-xl font-bold text-white"><?php echo $text; ?></div>
    <?php endif; ?>

  </div>

</div>
<?php /**PATH /Applications/MAMP/htdocs/persist/wp-content/themes/persistagency/resources/views/blocks/block-background-and-story.blade.php ENDPATH**/ ?>
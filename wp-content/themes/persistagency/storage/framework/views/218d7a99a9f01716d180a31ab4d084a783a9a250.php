<?php if(!empty($email) && $show_email): ?>
  <div class="floating-icons__email fixed z-40 hidden md:block">
    <a class="<?php echo e($email_style=='black'?'text-black':'text-yellow'); ?> " href="<?php echo antispambot('mailto:'.$email); ?>" target="_blank"><?php echo antispambot($email); ?></a>
  </div>
<?php endif; ?>

<?php if($show_floating_social_icons): ?>
  <div class="floating-icons__social fixed z-40 flex flex-col items-center mr-8 right-0 space-y-5 hidden md:block">
    <?php if(!empty($instagram)): ?>
      <a class="block" href="<?php echo $instagram; ?>" rel="noopener" target="_blank">

        <svg class="" id="Grupo_51" data-name="Grupo 51" xmlns="http://www.w3.org/2000/svg" width="29.878" height="29.877" viewBox="0 0 29.878 29.877">
          <path id="Trazado_907" data-name="Trazado 907" d="M192.688,260.847h0a14.939,14.939,0,0,1-14.939-14.939h0a14.939,14.939,0,0,1,14.939-14.939h0a14.939,14.939,0,0,1,14.939,14.939h0A14.939,14.939,0,0,1,192.688,260.847Z" transform="translate(-177.749 -230.97)" fill="#0d1115" />
          <g id="Grupo_50" data-name="Grupo 50" transform="translate(6.748 6.748)">
          <path id="Trazado_908" data-name="Trazado 908"
                                 d="M194.536,241.042c2.187,0,2.446.008,3.31.048a4.529,4.529,0,0,1,1.521.282,2.713,2.713,0,0,1,1.554,1.554,4.524,4.524,0,0,1,.282,1.521c.039.864.048,1.123.048,3.31s-.009,2.446-.048,3.31a4.524,4.524,0,0,1-.282,1.521,2.713,2.713,0,0,1-1.554,1.554,4.544,4.544,0,0,1-1.521.283c-.864.039-1.123.047-3.31.047s-2.446-.008-3.31-.047a4.533,4.533,0,0,1-1.521-.283,2.711,2.711,0,0,1-1.555-1.554,4.565,4.565,0,0,1-.282-1.521c-.039-.864-.048-1.123-.048-3.31s.009-2.446.048-3.31a4.565,4.565,0,0,1,.282-1.521,2.711,2.711,0,0,1,1.555-1.554,4.519,4.519,0,0,1,1.521-.282c.864-.04,1.123-.048,3.31-.048m0-1.476c-2.225,0-2.5.009-3.377.049a6.033,6.033,0,0,0-1.988.381,4.193,4.193,0,0,0-2.4,2.4,6.018,6.018,0,0,0-.381,1.988c-.04.874-.049,1.152-.049,3.377s.009,2.5.049,3.377a6.018,6.018,0,0,0,.381,1.988,4.193,4.193,0,0,0,2.4,2.4,6.013,6.013,0,0,0,1.988.381c.874.04,1.152.049,3.377.049s2.5-.009,3.377-.049a6.022,6.022,0,0,0,1.988-.381,4.189,4.189,0,0,0,2.4-2.4,6,6,0,0,0,.381-1.988c.04-.874.049-1.152.049-3.377s-.009-2.5-.049-3.377a6,6,0,0,0-.381-1.988,4.189,4.189,0,0,0-2.4-2.4,6.042,6.042,0,0,0-1.988-.381c-.874-.039-1.152-.049-3.377-.049"
                                 transform="translate(-186.345 -239.566)" fill="#f0f0f2" />
          <path id="Trazado_909" data-name="Trazado 909" d="M195.628,244.642a4.206,4.206,0,1,0,4.206,4.206,4.207,4.207,0,0,0-4.206-4.206m0,6.936a2.73,2.73,0,1,1,2.73-2.73,2.73,2.73,0,0,1-2.73,2.73" transform="translate(-187.436 -240.657)" fill="#f0f0f2" />
          <path id="Trazado_910" data-name="Trazado 910" d="M203.063,244.161a.983.983,0,1,1-.983-.983.983.983,0,0,1,.983.983" transform="translate(-189.517 -240.343)" fill="#f0f0f2" />
          </g>
        </svg>
      </a>
    <?php endif; ?>

    <?php if(!empty($twitter)): ?>
      <a class="block" href="https://twitter.com/<?php echo $twitter; ?>" rel="noopener" target="_blank">

        <svg class="" id="Grupo_45" data-name="Grupo 45" xmlns="http://www.w3.org/2000/svg" width="29.878" height="29.877" viewBox="0 0 29.878 29.877">
          <path id="Trazado_901" data-name="Trazado 901" d="M250.914,260.847h0a14.939,14.939,0,0,1-14.939-14.939h0a14.939,14.939,0,0,1,14.939-14.939h0a14.939,14.939,0,0,1,14.939,14.939h0A14.939,14.939,0,0,1,250.914,260.847Z" transform="translate(-235.975 -230.97)" fill="#0d1115" />
          <path id="Trazado_902" data-name="Trazado 902" d="M244.866,253.23a9.289,9.289,0,0,0,14.289-8.248,6.636,6.636,0,0,0,1.63-1.691,6.525,6.525,0,0,1-1.876.514A3.267,3.267,0,0,0,260.345,242a6.527,6.527,0,0,1-2.073.793,3.269,3.269,0,0,0-5.566,2.979,9.269,9.269,0,0,1-6.731-3.412,3.27,3.27,0,0,0,1.011,4.361,3.256,3.256,0,0,1-1.481-.409,3.271,3.271,0,0,0,2.62,3.244,3.28,3.28,0,0,1-1.474.056,3.268,3.268,0,0,0,3.051,2.268A6.567,6.567,0,0,1,244.866,253.23Z" transform="translate(-237.887 -233.29)" fill="#f0f0f2" />
        </svg>

      </a>
    <?php endif; ?>

    <?php if(!empty($facebook)): ?>
      <a class="block" href="<?php echo $facebook; ?>" rel="noopener" target="_blank">
        <svg class="" id="Grupo_49" data-name="Grupo 49" xmlns="http://www.w3.org/2000/svg" width="29.878" height="29.878" viewBox="0 0 29.878 29.878">
          <rect id="Rectángulo_10" data-name="Rectángulo 10" width="29.878" height="29.878" rx="14.939" fill="#0d1115" />
          <path id="Trazado_906" data-name="Trazado 906" d="M309.813,256.557h3.636V247.45h2.538l.27-3.049h-2.808v-1.736c0-.719.144-1,.84-1h1.968V238.5h-2.518c-2.706,0-3.926,1.192-3.926,3.473V244.4h-1.892v3.087h1.892Z" transform="translate(-297.15 -232.588)" fill="#f0f0f2" />
        </svg>
      </a>
    <?php endif; ?>

    <?php if(!empty($linkedin)): ?>
      <a class="block" href="<?php echo $linkedin; ?>" rel="noopener" target="_blank">

        <svg class="" id="Grupo_48" data-name="Grupo 48" xmlns="http://www.w3.org/2000/svg" width="29.878" height="29.877" viewBox="0 0 29.878 29.877">
          <path id="Trazado_903" data-name="Trazado 903" d="M367.365,260.847h0a14.939,14.939,0,0,1-14.939-14.939h0a14.939,14.939,0,0,1,14.939-14.939h0A14.939,14.939,0,0,1,382.3,245.909h0A14.939,14.939,0,0,1,367.365,260.847Z" transform="translate(-352.426 -230.97)" fill="#0d1115" />
          <g id="Grupo_47" data-name="Grupo 47" transform="translate(7.867 6.614)">
          <g id="Grupo_46" data-name="Grupo 46">
          <rect id="Rectángulo_9" data-name="Rectángulo 9" width="3.092" height="9.988" transform="translate(0.297 4.994)" fill="#f0f0f2" />
          <path id="Trazado_904" data-name="Trazado 904" d="M364.276,243.082a1.843,1.843,0,1,0-1.828-1.844A1.836,1.836,0,0,0,364.276,243.082Z" transform="translate(-362.448 -239.396)" fill="#f0f0f2" />
          </g>
          <path id="Trazado_905" data-name="Trazado 905" d="M372.249,250.419c0-1.4.647-2.24,1.884-2.24,1.137,0,1.683.8,1.683,2.24v5.244h3.077v-6.325c0-2.675-1.516-3.969-3.634-3.969a3.483,3.483,0,0,0-3.01,1.651v-1.346h-2.966v9.988h2.966Z" transform="translate(-363.917 -240.68)" fill="#f0f0f2" />
          </g>
        </svg>

      </a>
    <?php endif; ?>

  </div>

<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\persist\wp-content\themes\persistagency\resources\views/partials/floating-icons.blade.php ENDPATH**/ ?>
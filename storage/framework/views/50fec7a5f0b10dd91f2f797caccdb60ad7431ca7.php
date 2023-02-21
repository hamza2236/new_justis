<!doctype html>
<html class="no-js" lang="zxx">
<head>
<?php echo $__env->make('layouts.links-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body>

<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->yieldContent('main-container'); ?>


<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->make('layouts.links-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>

</html>


<?php /**PATH /home/justiscalluk/public_html/resources/views/layouts/main.blade.php ENDPATH**/ ?>
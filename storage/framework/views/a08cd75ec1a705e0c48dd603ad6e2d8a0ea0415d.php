<?php $__env->startSection('title', 'Buat Post Baru'); ?>
<?php $__env->startSection('content'); ?>
<div class="wrapper">
  <h1>Buat Post Baru</h1>

  <?php if(session('success')): ?>
  <div class="alert-success">
    <p><?php echo e(session('success')); ?></p>
  </div>
  <?php endif; ?>

  <?php if($errors->any()): ?>
  <div class="alert-danger">
    <ul>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li><?php echo e($error); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
  <?php endif; ?>

  <form method="POST" action="<?php echo e(url('posts')); ?>">
    <?php echo csrf_field(); ?>
    <input name="title" type="text" placeholder="Title...">
    <input name="body" type="text" placeholder="Body...">
    <button class="btn-blue">Submit</button>
  </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/rizky/B/file lama/kampus/SMT6/Rekayasa Web/praktikum/laravel-CreateRead/resources/views/post/create.blade.php ENDPATH**/ ?>
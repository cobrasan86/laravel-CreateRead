<?php $__env->startSection('title', 'Semua Post - Contoh Create dan Read'); ?>
<?php $__env->startSection('content'); ?>
<div class="wrapper">
  <h1 style="text-align: center;">Semua Post<br>Contoh Create dan Read</h1>
  <p><button onclick="location.href='create'" class="btn-blue">Tambah</button></td>
  <table style="width:100%">
    <thead>
      <tr>
        <th>Title</th>
        <th>Body</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td style="width: 200px" ><?php echo e($post->title); ?></td>
        <td style="width: 500px" ><?php echo e($post->body); ?></td>
        <td style="width: 100px"><button class="btn-green">Edit</button></td>
        <td style="width: 100px"><button class="btn-red">Hapus</button></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  <p align="center"r>Dalam Praktikum ini sementara Hanya Create dan Read saja.
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/rizky/B/file lama/kampus/SMT6/Rekayasa Web/praktikum/laravel-CreateRead/resources/views/post/index.blade.php ENDPATH**/ ?>








<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Show Student Table</h2>
          
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>University ID</th>
        <th>Name</th>
        <th>Surname</th>
         <th>Gender</th>
           <th>MidTerm Marks</th>
             <th>FinalTerm Marks</th>
               <th>Project Marks</th>
      </tr>
    </thead>
    <tbody>
       <?php $__currentLoopData = $student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
      <tr>
        <td><?php echo e($items['id']); ?></td>
        <td><?php echo e($items['name']); ?></td>
        <td><?php echo e($items['surname']); ?></td>
            <td><?php echo e($items['gender']); ?></td>
             <td><?php echo e($items['mmarks']); ?></td>
        <td><?php echo e($items['fmarks']); ?></td>
            <td><?php echo e($items['pmarks']); ?></td>
      </tr>
      
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
   <button type="submit" class="btn btn-primary"><a href="/" style="color: white">Back</a></button>
</div>


 
</body>
</html>
<?php /**PATH C:\Users\Hassan\Desktop\Student Project Runing\SE Project - Running\SE-Student-Project - Running\SE-Project-FULL-File\resources\views/show.blade.php ENDPATH**/ ?>
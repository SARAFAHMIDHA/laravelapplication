

<?php $__env->startSection('content'); ?>
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>name of student</th>
            <th>parent name</th>
            <th>optedcourse</th>
            <th>enable/disable</th>
        </tr>
</thead>
        <?php if(!empty($parenttables)): ?>
        <?php $__currentLoopData = $parenttables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($parent->id); ?></td>
            <td><?php echo e($parent->name); ?></td>
            <td><?php echo e($parent->name); ?></td>
            <td><?php echo e($parent->name); ?></td>
            <td><input type="checkbox" data-toggle="toggle" data-on="Enabled" data-off="Disabled"></td>
</tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
</tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'Enabled',
      off: 'Disabled'
    });
  })
</script>


<script>
    $('.toggle-class').on('change', function() {
        var status = $(this).prop('checked') == true ? 1 : 0;
        var user_id = $(this).data('id');
        $.ajax({
            type: 'GET',
            dataType: 'JSON',
            url: '<?php echo e(route('changeStatus')); ?>',
            data: {
                'status': status,
                'user_id': user_id
            },
            success:function(data) {
                $('#notifDiv').fadeIn();
                $('#notifDiv').css('background', 'green');
                $('#notifDiv').text('Status Updated Successfully');
                setTimeout(() => {
                    $('#notifDiv').fadeOut();
                }, 3000);
            }
        });
    });
</script>


<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fahmi\OneDrive\Desktop\laraval\project\resources\views/parent.blade.php ENDPATH**/ ?>
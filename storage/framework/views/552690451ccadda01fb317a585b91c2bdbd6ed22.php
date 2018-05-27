<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">User Details</div>
                        <div class="panel-body">
                        <b>Name:</b> <?php echo e($data->name); ?><br/>
                        <b>Email:</b> <?php echo e($data->email); ?>

                        </div>
                    <div class="panel-heading">Account Details</div>
                    <div class="panel-body">
                        <b>Account Number:</b> <?php echo e($account->account_number); ?><br/>
                        <b>Bank Name:</b> <?php echo e($account->bank_name); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
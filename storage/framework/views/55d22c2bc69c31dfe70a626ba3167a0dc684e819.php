<div class="flash.message">
                    <?php $__currentLoopData = ['danger', 'warning', 'success', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(Session::has('allert-'.$msg)): ?>
                            <p class="alert alert-<?php echo e($msg); ?>">
                                <?php echo e(Session::get('alert-'.$msg)); ?> 
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            </p>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?><?php /**PATH C:\xampp\htdocs\Team9\resources\views/errors/message.blade.php ENDPATH**/ ?>


<?php $__env->startSection('judul'); ?>
Riwayat Pendidikan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainds'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-7 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Riwayat Pendidikan</h4>
                        <div class="table-responsive">                          
                            <form action="/riwayat-pendidikan" method="POST">
                                    ini halaman Riwayat
                                    
                            </form>
                        </div>
                        <a href="/"><button type="button" class="btn btn-primary float-right">Save</button></a>
                                    <a href="<?php echo e(url('/dashboard/addCV')); ?>"><button type="button" class="btn btn-primary float-left">Previous</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.tempDashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Faras\Proyek 3\Team9\resources\views/dashboard/addCV/riwayatPendidikan.blade.php ENDPATH**/ ?>
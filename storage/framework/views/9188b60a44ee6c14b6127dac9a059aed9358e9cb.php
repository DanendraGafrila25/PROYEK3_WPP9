<?php
    if(old())
    {
        $Pengalaman_pekerjaan = old('Pengalaman_pekerjaan');
        $Pengalaman_organisasi = old('Pengalaman_organisasi');
        $Perguruan_tinggi = old('Perguruan_tinggi');
        $SMA = old('SMA');
        $SMP = old('SMP');
    } else {
        $Pengalaman_pekerjaan = null;
        $Pengalaman_organisasi = null;
        $Perguruan_tinggi = null;
        $SMA = null;
        $SMP = null;
    }
?>



<?php $__env->startSection('judul'); ?>
Create-New
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainds'); ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-7 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Riwayat Diri</h4>

                        <?php echo $__env->make('errors.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <div class="table-responsive">                            
                            <form method="POST" action="/addRiwayat-store" onsubmit="return confirmSubmit()">

                                <?php echo csrf_field(); ?>
                                 <div class="form-group">
                                    <label for="nama">Data Diri:</label>
                                    <select name="id_diri" class="form-control" required>
                                        <?php $__currentLoopData = $v; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($t->id); ?>"><?php echo e($t->nama); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Pengalaman Pekerjaan:</label>
                                    <input type="text" name="Pengalaman_pekerjaan" class="form-control" value="" required>
                                </div>
                                

                                <div class="form-group">
                                    <label for="alamat">Pengalaman Organisasi:</label>
                                    <input type="text" name="Pengalaman_organisasi" class="form-control" value="<?php echo e($Pengalaman_organisasi); ?>" required>
                                </div>
                                    <div class="form-group">
                                        <label for="telepon">Perguruan Tinggi</label>
                                        <input type="text" name="Perguruan_tinggi" class="form-control" value="<?php echo e($Perguruan_tinggi); ?>" required>
                                    </div>
                                    <div class="form-group">
                                    <label for="email">SMA</label>
                                        <input type="text" name="SMA" class="form-control" value="<?php echo e($SMA); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_lahir">SMP</label>
                                    <input type="text" class="form-control" id="tgl_lahir" name="SMP" value="<?php echo e($SMP); ?>">
                                </div>
                                <div class="form-group">
                                    <div class="btn-group">
                                     <button type="submit" name="submit" class="btn btn-primary float-right">Save</button>
                                    </div>
                                </div>                                                                           
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    

<script>
    function confirmSubmit()
    {
        var r = confirm('Lanjutkan penyimpanan data?')

        if(r)
        {
            return true;
        } else {
            return false;
        }
    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.tempDashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Team9\resources\views/dashboard/addCV/createriwayat.blade.php ENDPATH**/ ?>
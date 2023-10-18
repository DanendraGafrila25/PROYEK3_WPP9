

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
                                <div class="form-group">
                                    <label for="nama">Pengalaman Pekerjaan:</label>
                                    <input type="text" name="Pengalaman_pekerjaan" class="form-control" value="<?php echo e($Detail->Pengalaman_pekerjaan); ?>">
                                </div>
                                

                                <div class="form-group">
                                    <label for="alamat">Pengalaman Organisasi:</label>
                                    <input type="text" name="Pengalaman_organisasi" class="form-control" value="<?php echo e($Detail->Pengalaman_organisasi); ?>">
                                </div>
                                    <div class="form-group">
                                        <label for="telepon">Perguruan Tinggi</label>
                                        <input type="text" name="Perguruan_tinggi" class="form-control" value="<?php echo e($Detail->Perguruan_tinggi); ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="email">SMA</label>
                                        <input type="text" name="SMA" class="form-control" value="<?php echo e($Detail->SMA); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="tgl_lahir">SMP</label>
                                    <input type="text" class="form-control" id="tgl_lahir" name="SMP" value="<?php echo e($Detail->SMP); ?>">
                                </div>
                                 
                                <div class="form-group">
                                    <div class="btn-group">
                                      
                                     <a href="<?php echo e(url('detail-edit/'.$Detail->id)); ?>" name="submit" class="btn btn-primary float-right">Edit</a>
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <div class="btn-group">
                                     <a name="submit" href="/cv-dashboard"class="btn btn-danger float-right">Kembali</a>
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
<?php echo $__env->make('layouts.tempDashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Team9\resources\views/dashboard/addCV/detail.blade.php ENDPATH**/ ?>
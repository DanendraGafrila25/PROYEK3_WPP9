

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
                        <h4 class="card-title text-center">Data Diri</h4>
                        <div class="table-responsive">
                            
                            <form action="/data-diri" method="POST">
                                <div class="form-group">
                                    <label for="nama">Nama:</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat:</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat">
                                </div>

                                <div class="row">  
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <select class="form-control" name="provinsi" id="provinsi" required="">
                                            <option>Pilih</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label>Kab/Kota</label>
                                        <select class="form-control" name="kab" id="kab" required="">
                                        <option>Pilih</option>
                                        </select>
                                    </div>
                                </div>
                        
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <select class="form-control" name="kec" id="kec" required="">
                                        <option>Pilih</option>
                                        </select>
                                    </div>
                                </div>
                        
                            </div>
                                    <div class="form-group">
                                <div class="form-group d-flex">
                                    <div class="flex-grow-1 mr-2">
                                        <label for="telepon">No Telepon/Whatsapp:</label>
                                        <input type="text" class="form-control" id="telepon" name="no_telepon">
                                    </div>
                                    <div class="flex-grow-1">
                                        <label for="email">Alamat Email:</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_lahir">Tanggal Lahir:</label>
                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin:</label>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="laki" name="jenis_kelamin" value="Laki-laki">
                                        <label class="form-check-label" for="laki">Laki-laki</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="perempuan" name="jenis_kelamin" value="Perempuan">
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>

                                    <a href="<?php echo e(url('/dashboard/create-new/riwayatPendidikan')); ?>"><button type="button" class="btn btn-primary float-right">Next</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.tempDashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Faras\Proyek 3\Team9\resources\views/dashboard/create-new/dataDiri.blade.php ENDPATH**/ ?>
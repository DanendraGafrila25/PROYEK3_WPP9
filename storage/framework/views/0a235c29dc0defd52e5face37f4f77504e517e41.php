

<?php $__env->startSection('judul'); ?>
Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mainds'); ?>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
              <div class="row">
                  <div class="col-12 grid-margin">
                      <div class="card">
                          <div class="card-body">
                              <h4 class="card-title text-center">CV Saya</h4>
                              <div class="table-responsive">
                                  <form>
                                  <div class="clearfix">
                                            &nbsp
                                            <a href="/addCV-create" class="btn btn-danger">add cv</a>
                                            <button type="button" class="btn btn-primary float-left">Previous</button>
                                            <button type="button" class="btn btn-primary float-right">Next</button>
                                        </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
        </div>
        
        <div class="main-panel">
            <div class="content-wrapper">
              <div class="row">
                  <div class="col-12 grid-margin">
                      <div class="card">
                          <div class="card-body">
                          <table class="table table-striped table-responsive">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Email</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <?php $__currentLoopData = $v; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($data->nama); ?></td>
                <td><?php echo e($data->alamat); ?></td>
                <td><?php echo e($data->no_telepon); ?></td>
                <td><?php echo e($data->email); ?></td>
                <td><?php echo e($data->tgl_lahir); ?></td>
                <td><?php echo e($data->jenis_kelamin); ?></td>
                <td><a class="fas fa-pencil" href="<?php echo e(url('addCV-edit/'.$data->id)); ?>"></a></td>
                <td><form method="POST" action="<?php echo e(route('addCV-delete-cv',$data->id)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="fas fa-trash-alt"></button>
                </form></td>
                <td><a class="fas fa-magnifying-glass" href="<?php echo e(url('addCV-detail/'.$data->id)); ?>"></a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
                          </div>
                      </div>
                  </div>
              </div>
        </div>
        
      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.tempDashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Team9\resources\views/dashboard/addCV/index.blade.php ENDPATH**/ ?>
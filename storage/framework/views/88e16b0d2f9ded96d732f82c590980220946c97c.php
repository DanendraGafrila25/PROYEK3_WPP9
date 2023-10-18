

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
      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.tempDashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH\SEMESTER_3\PROYEK 3\WPP\Team9\Team9\resources\views/dashboard/addCV/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>



    <div class="container-fluid app-body">
        <h3>Recent Post Sent To Buffer</h3>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover buffer-posting table-bordered">
                    <thead>
                    <tr><th>Group Name</th>
                        <th>Group Type</th>
                        <th>Account Name</th>
                        <th>Post Text</th>
                        <th>Time</th> </tr>
                    </thead>
                    <tbody>

                    <?php $__currentLoopData = $socialusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socialuser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if( $socialuser['type'] != 'google' ): ?>
                            <tr>
                                <td width="350">
                                    <div class="media">
                                        <div class="media-body media-middle" style="width: 180px;">
                                            <h4 class="media-heading"><?php echo e($socialuser['name']); ?></h4>
                                        </div>
                                    </div>
                                </td>

                                <td width="350">
                                    <div class="media">
                                        <div class="media-body media-middle" style="width: 180px;">
                                            <h4 class="media-heading"><?php echo e($socialuser['type']); ?></h4>
                                        </div>
                                    </div>
                                </td>

                                <td width="350">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="">
                                                <span class="fa fa-<?php echo e($socialuser['avatar']); ?>"></span>
                                                <img width="50" class="media-object img-circle" src="<?php echo e($socialuser['avatar']); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body media-middle" style="width: 180px;">
                                        <h4 class="media-heading"><?php echo e($socialuser['name']); ?></h4>
                                        </div>
                                    </div>
                                </td>
                                

                                    
                                        
                                            
                                                
                                            
                                        
                                    
                                    
                                        
                                            
                                                
                                            
                                        
                                    


                            
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
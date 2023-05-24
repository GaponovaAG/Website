<?php $__env->startSection('content'); ?>
<div class="div2_lk">
    <div class="head2">
                Вы в личном кабинете
    </div>
    

<div class="head2">       
    <ul class="navbar-nav ml-auto">
    
        <?php if(auth()->guard()->guest()): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('')); ?></a>
            </li>
            <?php if(Route::has('register')): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('')); ?></a>
                </li>
            <?php endif; ?>
        <?php else: ?>
        
                

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="a_b" href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        <?php echo e(__('Выйти')); ?>

                    </a>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            
        <?php endif; ?>
    </ul>
    </div>    
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
            <div class="card">

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                     <p>Вы зашли под учеткой </p><?php echo e(Auth::user()->name); ?><br><?php echo e(Auth::user()->email); ?>

                </div>
                
        </div>
    </div>
</div>
<div class="none"></div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\v\resources\views/home.blade.php ENDPATH**/ ?>
<!--ЭТО ВЕРХНЯЯ ПАНЕЛЬ ВИДНА НА ВСЕХ СТРАНИЦАХ-->
<?php $__env->startSection('header'); ?>
<div class="header">
    <div ><button onclick="location.href='/'" class="bt bt1 butt">Главная</button></div>
    
    <div ><button onclick="no_auth();" id="no_auth" class="bt bt1 butt1">Информация для пациентов</button></div>
    <!--<div ><button onclick="location.href='account'" class="bt bt1 butt2">Личный кабинет</button></div>-->
    <?php if(Route::has('login')): ?>
        <div >
            <?php if(auth()->guard()->check()): ?>
                <a class="bt bt1 butt2" href="<?php echo e(url('/home')); ?>">Личный кабинет</a>
            <?php else: ?>
                <a class="bt bt1 butt2" href="<?php echo e(route('login')); ?>">Вход</a>

                <?php if(Route::has('register')): ?>
                    <a class="bt bt1 butt2" href="<?php echo e(route('register')); ?>">Регистрация</a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <div class="buttons">
        <div ><button id="light" class="bt butt1" title="Ночная тема"><img src="/images/sun_moon.png" ></button></div>
        <div ><button  id="theme" class="bt " title="Версия для слабовидящих"><img src="/images/eye.png" ></button></div>
    </div>
</div><?php /**PATH C:\OSPanel\domains\torpat\resources\views/includes/header.blade.php ENDPATH**/ ?>
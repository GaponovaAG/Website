<?php $__env->startSection('content'); ?>
        <!--<div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>-->

        <div class="body">
        <!--НАЗВАНИЕ И ОКНО ВХОДА-->
        <div class="welcome">
            <p class="head_text_main">Добро пожаловать в <strong>систему мониторинга и обратной связи операционных пациентов</strong> торакального отделения </p>
            <div class="signin">
                <div class="head_text_plane">
                    <form action="header" ><div class="form_header">
                        <p class="regular_text3">Чтобы продолжить, пожалуйста, авторизуйтесь!</p>
                        <div><input type="text" placeholder="Логин" autofocus></div>
                        <!-- <div><input type="text" placeholder="Имя" ></div>
                        <div><input type="email" placeholder="Емейл" ></div>-->
                        <div> <input type="password" placeholder="Пароль"> </div>

                    </div>
                    </form>
                </div>
                <div class="b_start"><button onclick="location.href='index1.html'" class="bt butt1"><img src="/images/butt_start.png"><p class="p_start">Продолжить</p></button></div>
            </div>

        </div>
        <!--ОПИСАНИЕ САЙТА-->
        <div class="intro">
            <p class="p regular_text">Операция - это важный этап в жизни человека. Пациенты часто волнуются сильнее из-за неизвестности: какие документы
                собирать, что будет в послеоперационном периоде, какие симптомы нормальны, а при каких срочно обраться к лечащему врачу. 
                Данное приложение предназначено для осведомления операционных пациентов торакального отделения. 
            </p>
            <!--Кнопка записаться на консультацию к торакальному хирургу-->
                
            
                
            <div class="question_plane_all">
            <form action="send" method="post" >
                <div class="question_plane">
                    <div class="form_question">
                        <div><input type="text" name="surname" placeholder="Фамилия" autofocus required></div>
                        <div><input type="text" name="name" placeholder="Имя" required></div>
                        <div><input type="email" name="email" placeholder="Электронная почта" required></div>
                        <div> <input type="text" name="text_problem" maxlength="200" placeholder="Опишите вашу проблему"> </div>
                        <div><input type="file"  id="add_file" multiple>
                            <label for="add_file">
                                <span class="add_file_text">Добавить файл</span>

                            </label>
                        </div>

                    </div>
                </div>
                <p class="p regular_text5">Вам ответят на указанную вами почту в течение 3 дней, не считая праздников и выходных.</p>
                <input type="submit" value="Отправить">
                <div class="b_start"><button onclick="summary();" class="bt butt1"><img src="/images/butt_start.png"><p class="p_start">Задать вопрос</p></button></div>
            </form>
            </div>

            <!--ОПИСАНИЕ САЙТА-->
            <p class="head_text">Что вы найдете на нашем сайте? </p>
            <div class="number_about_all">
                <div class="number_about">
                    <img class="number" src="/images/p1.png">
                    <p class="regular_text2">Какие документы собирать</p>
                </div>
                <div class="number_about">
                    <img class="number" src="/images/p2.png">
                    <p class="regular_text2">Чего ожидать от операции</p>
                </div>
            </div>
            <div class="number_about_all">
                <div class="number_about">
                    <img class="number" src="/images/p3.png">
                    <p class="regular_text2">Кому противопаказано делать ту или иную операцию</p>
                </div>
                <div class="number_about">
                    <img class="number" src="/images/p4.png">
                    <p class="regular_text2">Пройти тесты и посмотреть статистику по другим пациентам</p>
                </div>
            </div>
            <p class="head_text">Перечень пациентов для направления на консультацию торакального хирурга</p>
            <div class="p head_text_plane_perech"><ul>
                <li>Опухоли лёгких различной природы</li>
                <li>Опухоли средостения, вилочковой железы</li>
                <li>Опухоли грудной стенки</li>
                <li>Опухоли пищевода и кардиального отдела желудка</li>
                <li>Дивертикулы пищевода</li>
                <li>Стенозы пищевода</li>
                <li>Грыжи пищеводного отверстия диафрагмы</li>
                <li>Другие диафрагмальные грыжи</li>
                <li>Буллезная болезнь легких</li>
                <li>Диссеминация легких неясного гнезда</li>
                <li>Внутригрудная лимфоаденопатия</li>
                <li>Гипергидроз (повышенная потливость ладоней)</li>
                <li>Болезнь Рейно (ангиотрофоневроз верхних конечностей)</li>
                <li>Последствия операция на органах грудной полости</li>
                <li>Последствия травм грудной клетки</li>
                <li>Плевриты различной природы</li>
                <li>Пневмоторакс</li>
            </ul></div>
            
            

            
            <!--СТАТИСТИКА ТУТ-->
            <p class="head_text">Статистика торакального отделения</p>


            <div class="adaptivny-slayder">
                <input type="radio" name="kadoves" id="slaid1" checked>
                <input type="radio" name="kadoves" id="slaid2">
                <input type="radio" name="kadoves" id="slaid3">
                <input type="radio" name="kadoves" id="slaid4">
                
                <div class="kadoves">
                    <label for="slaid1"></label>
                    <label for="slaid2"></label>
                    <label for="slaid3"></label>
                    <label for="slaid4"></label>
                </div>
                
                <div class="adaptivny-slayder-lasekun">
                    <div class="abusteku-deagulus">
                        <img src="stat3.png"/>
                        <img src="stat3.png"/>
                        <img src="stat3.png"/>
                        <img src="stat3.png"/>
                    </div>
                </div>
            </div>



        </div>
 
        <?php $__env->stopSection(); ?>
            
        
        

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\torpat\resources\views/index.blade.php ENDPATH**/ ?>
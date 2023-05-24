

@extends('layouts.app')

@section('content')
        <!--<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>-->

        <div class="intro">
        
    
        <div class="div2">
            <div class="div_main">
                Добро пожаловать на сайт о южнокорейском музыканте Ким Тэхёне
            </div>
            <div class="div2_2">
                <img class="img1" src="http://file3.instiz.net/data/file3/2018/02/15/b/6/9/b696cde894db5303655085f4b1dd0b7b.jpg">
            </div>
        </div>
        <div class="textAll">
            
            <div class="head" id="bio">Биография</div>

            <div class="div1">
                Ким Тэхён родился 30 декабря 1995 года в Тэгу, Южная Корея, и вырос в уезде Кочхан.
                 У него в семье, помимо родителей, есть младшие брат и сестра. <br><br>
                 Впервые Тэхён заинтересовался карьерой профессионального певца в начальной школе, и даже брал уроки игры на саксофоне в средней школе.
                  После прохождения прослушивания в Тэгу он стал трейни <a class="a" href="https://ibighit.com/">Big Hit Entertainment.</a> <br><br>

                В 2014 году окончил Корейскую школу искусств, и после поступил в Сеульский кибер-университет.
            </div>
        </div>

        <div class="div2">
            <div class="div2_2">
                <img class="img2" src="https://avatars.dzeninfra.ru/get-zen_doc/3723909/pub_6419273a8107e547c684300e_64192de0daa80a70c9bc3945/scale_1200">
            </div>
            <div class="div2_2">
                <img class="img2" src="https://avatars.dzeninfra.ru/get-zen_doc/9196493/pub_6419a31a56c4b061b595ef93_6419a99e3df84b65026a004f/scale_1200">
            </div>
        </div>

        <div class="textAll">

            <div class="head" id="start">Начало карьеры</div>

            <div class="div1">
                13 июня 2013 года Тхэхён дебютировал как один из четырёх вокалистов бойз-бенда BTS с синглом «No More Dream».
                 Компания предложила три варианта выбора сценического псевдонима: Сикс (англ. Six), Лекс (англ. Lex) и Ви (англ. V).
                  
            </div>
        </div>

        <div class="div2">

            <div class="div2_2">
                <img class="img3" src="https://i.pinimg.com/originals/24/94/79/249479b922315ecd748f5d8453278ed2.jpg">
            </div>

            <div class="div1_1">
                
                Впервые Ви попробовал себя в создании музыки в 2015 году во время работы над первым альбомом трилогии «Юности»,
                 где стал одним из авторов и композиторов трека «Hold Me Tight».<br><br>
                  Для второго альбома трилогии Ви участвовал в создании заглавного трека «Run», для которого написал музыку.<br><br>
                   В 2016 году он выпустил сольную композицию «Stigma», которая дебютировала в топ-30 синглового чарта <a class="a" href="https://circlechart.kr/">Gaon </a>  
                   и в топ-10 мирового синглового чарта <a class="a" href="https://www.billboard.com/">Billboard.</a>  
                    

               
            </div>
        </div>

        <div class="textAll_au">
            <figure>
                <figcaption>Hold Me Tight</figcaption>
                <audio
                    controls
                    src="/music/Hold_Me_Tight.mp3">
                        <a href="/music/Hold_Me_Tight.mp3">
                            Скачать
                        </a>
                </audio>
            </figure>

            <figure>
                <figcaption>Run</figcaption>
                <audio
                    controls
                    src="/music/Run.mp3">
                        <a href="/music/Run.mp3">
                            Скачать
                        </a>
                </audio>
            </figure>

            <figure>
                <figcaption>Stigma</figcaption>
                <audio
                    controls
                    src="/music/Stigma.mp3">
                        <a href="/music/Stigma.mp3">
                            Скачать
                        </a>
                </audio>
            </figure>
            
        </div>

        <div class="textAll">

            <div class="head" id="solo">Сольная деятельность</div>

            
        </div>

        <div class="div2">

            <div class="div1_1">
                В 2016 году Ви дебютировал как актёр в исторической дораме <a class="a" href="https://www.kinopoisk.ru/series/973053/">«Хваран: Начало»</a>, и использовал своё настоящее имя вместо сценического псевдонима.
                 Специально для проекта он записал саундтрек «It’s Definitely You».<br><br>
                  8 июня 2017 года в честь празднования четвёртой годовщины BTS он выпустил песню «4 O’Clock», которую спродюсировал вместе с лидером группы RM.
                  
            </div>

            <div class="div2_2">
                <img class="img3" src="https://avatars.dzeninfra.ru/get-zen_doc/169683/pub_610c061b39c76766dd502662_610c136e9d5d4d71cb75d7da/scale_1200">
            </div>

           
        </div>

        <div class="textAll">

            <div class="div1">
                30 января 2019 года Ви выпустил свою первую сольную песню вне деятельности BTS — «Scenery» для свободного прослушивания на <a class="a" href="https://soundcloud.com/">SoundCloud.</a>
                 Впервые песня была объявлена на <a class="a" href="https://www.seoulmusicawards.com/">Seoul Music Awards</a>, затем на официальной странице группы в Твиттере.<br><br>
                  
                 
            </div>
        </div>


        <div class="div2">
            <div class="div2_2">
                <img class="img2" src="https://i.pinimg.com/originals/93/7b/45/937b45091c7840ca86d9c6c1db93f80d.jpg">
            </div>
            <div class="div2_2">
                <img class="img2" src="https://avatars.dzeninfra.ru/get-zen_doc/3488572/pub_641af6633b9008768a4b9c88_641af8965e0afe7b4da6bd92/scale_1200">
            </div>
        </div>

        <div class="textAll">

            <div class="div1">
                
                  Композиция была написана самим Ви, он также стал композитором и создал обложку. 
                  Продюсером стал Docskim, в создании также участвовали PDogg и Hiss Noise.<br><br>
                   За первые сутки «Scenery» набрала более 372 тысяч лайков, что стало рекордом на SoundCloud, а за пять дней прослушивания составили более 30 миллионов.
                 
            </div>
        </div>

        <div class="textAll_au">
            <figure>
                <figcaption>It’s Definitely You</figcaption>
                <audio
                    controls
                    src="/music/Its_Definitely_You.mp3">
                        <a href="/music/Its_Definitely_You.mp3">
                            Скачать
                        </a>
                </audio>
            </figure>

            <figure>
                <figcaption>4 O’Clock</figcaption>
                <audio
                    controls
                    src="/music/Zero_OClock.mp3">
                        <a href="/music/Zero_OClock.mp3">
                            Скачать
                        </a>
                </audio>
            </figure>

            <figure>
                <figcaption>Scenery</figcaption>
                <audio
                    controls
                    src="/music/Scenery.mp3">
                        <a href="/music/Scenery.mp3">
                            Скачать
                        </a>
                </audio>
            </figure>

            
        </div>


        <div class="textAll">

            <div class="div1">

                 Семь месяцев спустя он выпустил свою вторую сольную песню — это также была его первая полностью англоязычная работа — «Winter Bear» через SoundCloud, 
                 сопровождаемую самостоятельно срежиссированным Ви музыкальным видео на YouTube канале BTS 9 августа 2019.
                  
            </div>
        </div>

        <div class="div2">
            
            <div class="div2_2">
                <img class="img4" src="https://avatars.mds.yandex.net/get-kinopoisk-image/1704946/b2fbfab9-566f-460b-93cb-1066067f0353/3840x">
            </div>
        </div>

      

        <!--УРА ПОДВАЛ!-->

        
 
        @endsection
            
        
        

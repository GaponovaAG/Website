<!--ЭТО ВЕРХНЯЯ ПАНЕЛЬ ВИДНА НА ВСЕХ СТРАНИЦАХ-->
@section('header')
<div class="header">
    <div ><button onclick="location.href='/'" class="bt bt1 butt">Главная</button></div>
    
    <div ><button onclick="no_auth();" id="no_auth" class="bt bt1 butt1">Информация для пациентов</button></div>
    <!--<div ><button onclick="location.href='account'" class="bt bt1 butt2">Личный кабинет</button></div>-->
    @if (Route::has('login'))
        <div >
            @auth
                <a class="bt bt1 butt2" href="{{ url('/home') }}">Личный кабинет</a>
            @else
                <a class="bt bt1 butt2" href="{{ route('login') }}">Вход</a>

                @if (Route::has('register'))
                    <a class="bt bt1 butt2" href="{{ route('register') }}">Регистрация</a>
                @endif
            @endauth
        </div>
    @endif
    <div class="buttons">
        <div ><button id="light" class="bt butt1" title="Ночная тема"><img src="/images/sun_moon.png" ></button></div>
        <div ><button  id="theme" class="bt " title="Версия для слабовидящих"><img src="/images/eye.png" ></button></div>
    </div>
</div>
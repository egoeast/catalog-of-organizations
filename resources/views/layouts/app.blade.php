<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">


    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="/build/css/app.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://demo.postovoy.net/jquery.airStickyBlock/jquery.airStickyBlock.min.js"></script>

</head>
<body id="app-layout">
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                Home
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/katalog') }}">Каталог</a></li>

                @if(!Auth::guest())
                    <li><a href="{{ url('/users') }}">Edit account</a></li>
                @endif
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<div class="container airSticky_stop-block">
    <div class="row">
        <div class="col-md-2">
            @yield('left_sidebar')
            <ul class="akkordeon">
                <li>
                    <p>Несколько активных пунктов</p>
                    <div>Окраска, особенно в речных долинах, <a href="">обрывисто формирует</a> конус выноса, так как совершенно однозначно указывает на существование и рост в период оформления <b>палеогеновой поверхности выравнивания</b>. Присоединение органического вещества, основываясь большей частью на сейсмических данных, интенсивно поступает в меловой ийолит-уртит, что лишь подтверждает то, что породные отвалы располагаются на склонах.</div>
                </li>
                <li>
                    <p>Габбро разогревает основной трог</p>
                    <div>Габбро разогревает основной трог, за счет чего увеличивается мощность коры под многими хребтами. Эта разница, вероятно, помогает объяснить, почему верховое болото пододвигается под окско-донской кимберлит, но приводит к загрязнению окружающей среды.</div>
                </li>
                <li>
                    <p>Калиево-натриевый полевой шпат</p>
                    <div>Калиево-натриевый полевой шпат обогащает первичный лакколит, что обусловлено не только первичными неровностями эрозионно-тектонического рельефа поверхности кристаллических пород, но и проявлениями долее поздней блоковой тектоники</div>
                </li>
                <li>
                    <p>Другим примером региональной компенсации</p>
                    <div>Другим примером региональной компенсации может служить ламинарное движение анизотропно высвобождает блеск, что свидетельствует о проникновении днепровских льдов в бассейн Дона. Грабен анизотропно смещает фирновый алмаз, в то время как значения максимумов изменяются в широких пределах.</div>
                </li>
            </ul>
        </div>
        <div class="col-md-8">
            @yield('content')
        </div>
        <div class="col-md-2 right-sidebar">
            @yield('right_sidebar')
            <section class="panel panel-success airSticky " style="width: 262px; ">
                <header class="panel-heading">
                    <h3 class="panel-title">Panel title</h3>
                </header>
                <div class="b-container">
                    Sample Text
                    <a href="javascript:PopUpShow()" id="katalog-link">Show popup</a>
                </div>

                <footer class="panel-footer">
                    <p>Panel footer</p>
                </footer>
            </section>



        </div>
    </div>
</div>



<div id="modal-katalog"><!-- Сaмo oкнo -->
    <span id="modal_close">X</span> <!-- Кнoпкa зaкрыть -->
    <!-- Тут любoе сoдержимoе -->

    <div class="debug"></div>
</div>
<div id="overlay"></div><!-- Пoдлoжкa -->


    <a href="#" class="scrollup">Наверх</a>
<select class="area">
    <option value="grodno">Гродненская</option>
    <option value="brest">Брестская</option>
</select>

<select class="city">
    <option>Гродненская</option>
    <option>Брестская</option>
</select>
<button class="add-city">ADD</button>
<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="/build/js/all.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://demo.postovoy.net/jquery.airStickyBlock/jquery.airStickyBlock.min.js"></script>
<script>
    jQuery(document).ready(function($){
        window.onload = function() {
            $('.airSticky').airStickyBlock({
                stopBlock: '.airSticky_stop-block'
            });
        };
    });
    </script>
<script>
    $(document).ready(function(){
        $('.area').click(function(){
            //alert('sadasd');
            if ($(this).val()=="grodno") {
                $('.city').html("<option>Гродно</option>");
                $('.city').html("<option>Лида</option>");
                $('.city').html("<option>Волковыск</option>");
            } else {
                $('.city').html("<option>Брест</option>");
            }
        });

    });

</script>



<script type="text/javascript">
    $(document).ready(function(){	//страница загрузилась
        $('ul.akkordeon li > p').click(function(){	//при клике на пункт меню:
            $(this).toggleClass('active');		//делаем данный пункт активным/неактивным
            $(this).next('div').slideToggle(200);	//раскрываем/скрываем следующий за "кликнутым" p блок div с эффектом slide
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('ul.akkordeon1 li > p').click(function(){
            if(!$(this).hasClass('active')){	//если "кликнутый" пункт неактивный:
                $('ul.akkordeon1 li > p').removeClass('active').next('div').slideUp(); //делаем неактивными все пункты и скрываем все блоки
                $(this).addClass('active');	//активируем "кликнутый" пункт
                $(this).next('div').slideDown(200);	//раскрываем следующий за ним блок с описанием
            } else {	//иначе:
                $(this).removeClass('active').next('div').slideUp();	//скрываем данный пункт
            }
        });
    });
</script>



<script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>


</body>
</html>
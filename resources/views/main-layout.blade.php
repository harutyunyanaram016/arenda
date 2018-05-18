
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="yandex-verification" content="76108bafa555283c" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>{{$title}}</title>

    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <script type="text/javascript" src="{!! asset('js/jquery.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/parallax.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/js.js') !!}"></script>


</head>
<body >

<div class="over">

    <div class="overlay"></div>
    <div class="popup">
        <div class="close">X</div>
        <div class="popup_form">
            <p>Заказать звонок</p>
            {!! Form::open(['url'=>route('sendMail'), 'method'=>'POST', 'id'=>'form',]) !!}
            <input type="text" name="name" id="name" placeholder="Ваше имя" onfocus="$(this).attr('placeholder', '')" onblur="$(this).attr('placeholder', 'Ваше имя')"/>
            <input type="text" name="phone" id="phone" placeholder="Ваш телефон" onfocus="$(this).attr('placeholder', '')" onblur="$(this).attr('placeholder', 'Ваш телефон')" required/>
            <input type="hidden" name="usl" class="usl">
            <span><input type="checkbox" name="policy" required ><a href="{{route('rules')}}" target="_blank" title="">Соглашение об использовании веб-сайта</a></span>
            <input type="submit" id="submit" value="Отправить"/>
            <!-- <input type="submit" id="submit" value="Отправить" onclick="yaCounter45440928.reachGoal('zakaz'); return true;"/> -->

            {!! Form::close() !!}
        </div>
    </div>



    <div class="header">
        <div class="logo">
            <a href="/" title="">АвтоСпецТехника</a>
            <div class="slogan">
                <span>аренда в Омске</span>
            </div>
        </div>

        <div class="main_menu">
            <ul id = "menu-main_menu" class = "menu">
                <li id="menu-item-77" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-77 act ">
                    <a href="{{route('home')}}">Главная</a>
                </li>
                <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64">
                    <a href="{{route('contact')}}">Контакты</a>
                </li>
                <li id="menu-item-67" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67">
                    <a href="{{route('price-list')}}">Прайс лист</a>
                </li>
                @if(Auth::user())
                    <li id="menu-item-67" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67">
                        <a href="{{route('categories')}}">Панель управления</a>
                    </li>
                @endif
            </ul>
        </div>

        <div class="telefon">
            8 (3812) 98 40 48<br />
            8 983 568 40 48<br />
            <a href="mailto:spectehneka@mail.ru" title="">spectehneka@mail.ru</a>
        </div>

        <div class="call">
            ЗАКАЗАТЬ
        </div>

    </div>


    <div class="main_block">
        <div data-offset="0" class="poster">
            <div class="ekskol_cont">
                <div data-offset="50" class="layer-1 landscape1">
                    <div class="ekskol"></div>
                </div>
            </div>
            <div data-offset="0"  class="layer-2 yellow">

            </div>
            <div class="call">
                ЗАКАЗАТЬ
            </div>
            <div class="kovsh_cont">
                <div data-offset="50" class="layer-4 landscape1">
                    <div class="kovsh_shadow"><img src="{{route('home')}}/images/kovsh_shadow.png" alt=""/></div>
                </div>
            </div>
            <div data-offset="0" class="layer-3 ramka"></div>
            <div data-offset="50" class="layer-4 landscape1">
                <div class="kovsh"><img src="{{route('home')}}/images/kovsh.png" alt=""/></div>
            </div>
            <div data-offset="20" class="layer-5 dust"></div>
        </div>
    </div>


    <div class="left">
        <div class="left_height">
            <div class="menu_cat">
                <div class="left_titile">
                    Каталог техники
                </div>

                <ul>
                    @foreach($menus as $menu)

                    <li class="main-link"><a href="javascript:void(0)">{{$menu['name']}}</a>
                        <ul>


                            @foreach($menu['sub_cat'] as $sub_cat)
                            <li><a href="{{route('home')}}/{{$menu['link']}}/{{$sub_cat->link}}">{{$sub_cat->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="menu_cat">

                <div class="left_titile">
                    Услуги
                </div>
                <ul>
                    @foreach($allServise as $item)
                        <li><a href="{{route('home')}}/uslugi/{{$item->link}}">{{$item->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>


        <div class="skroll_bl">
            <section id="title_portf" data-speed="0" data-type="background" style="background: url({{route('home')}}/images/skroll_bl.jpg) 0 0 no-repeat fixed;">

                <div class="metr">
                    <!-- Yandex.Metrika informer -->
                    <a href="https://metrika.yandex.ru/stat/?id=45440928&amp;from=informer"
                       target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/45440928/3_0_FFFFFFFF_EFEFEFFF_0_pageviews"
                                                           style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="45440928" data-lang="ru" /></a>
                    <!-- /Yandex.Metrika informer -->

                    <!-- Yandex.Metrika counter -->
                    <script type="text/javascript" >
                        (function (d, w, c) {
                            (w[c] = w[c] || []).push(function() {
                                try {
                                    w.yaCounter45440928 = new Ya.Metrika({
                                        id:45440928,
                                        clickmap:true,
                                        trackLinks:true,
                                        accurateTrackBounce:true,
                                        webvisor:true
                                    });
                                } catch(e) { }
                            });

                            var n = d.getElementsByTagName("script")[0],
                                s = d.createElement("script"),
                                f = function () { n.parentNode.insertBefore(s, n); };
                            s.type = "text/javascript";
                            s.async = true;
                            s.src = "https://mc.yandex.ru/metrika/watch.js";

                            if (w.opera == "[object Opera]") {
                                d.addEventListener("DOMContentLoaded", f, false);
                            } else { f(); }
                        })(document, window, "yandex_metrika_callbacks");
                    </script>
                    <noscript><div><img src="https://mc.yandex.ru/watch/45440928" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
                    <!-- /Yandex.Metrika counter -->
                </div>

                <div class="logo2">
                    АвтоСпецТехника
                    <span>Аренда спецтехники в Омске</span>
                </div>
                <div class="razrab">
                    <a href="http://Oceanweb.ru/" target="_blank" title="">
                        <span>Сделано в</span>
                        Oceanweb.ru
                    </a>
                </div>
            </section>
        </div>
    </div>


    <div class="right">

        @yield('content')

        <div class="vk">
            <script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>

            <!-- VK Widget -->
            <div id="vk_groups"></div>
            <script type="text/javascript">
                VK.Widgets.Group("vk_groups", {mode: 0, width: "680", height: "200", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 68167880);
            </script>
        </div>


    </div>














</div>

<!-- PARALLAX-POSTER -->
<script src="{{route('home')}}/js/parallax-poster.js"></script>


<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-103431672-1', 'auto');
    ga('send', 'pageview');

</script>

</body>
</html>

@extends('main-layout', array('title'=>$page['title'], 'allServise'=>$page['allServise'], 'menus'=>$page['menu']))
@section('content')
        <div class="titles">
            Часто заказываемые
        </div>

        <div class="bl_cont">

            <div class="bl_res">
                <div class="block">
                    <div class="block_padd">
                        <div class="block_img">
                            <img width="305" height="215" src="{{route('home')}}/uploads/2014/11/autovychka_bg_01.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="autovychka_bg_01" srcset="{{route('home')}}/uploads/2014/11/autovychka_bg_01.jpg 305w, {{route('home')}}/uploads/2014/11/autovychka_bg_01-300x211.jpg 300w" sizes="(max-width: 305px) 100vw, 305px" />						</div>
                    </div>
                    <div class="block_zakaz">
                        ЗАКАЗАТЬ
                    </div>
                    <div class="block_title">
                        <a href="{{route('home')}}/podemno-transportnaya/avtovyshka-v-omske" title="">Автовышка в омске</a>
                    </div>
                </div>
            </div>



            <div class="bl_res">
                <div class="block">
                    <div class="block_padd">
                        <div class="block_img">
                            <img width="305" height="215" src="{{route('home')}}/uploads/2014/11/excavator-1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="excavator-1" srcset="{{route('home')}}/uploads/2014/11/excavator-1.jpg 305w, {{route('home')}}/uploads/2014/11/excavator-1-300x211.jpg 300w" sizes="(max-width: 305px) 100vw, 305px" />						</div>
                    </div>
                    <div class="block_zakaz">
                        ЗАКАЗАТЬ
                    </div>
                    <div class="block_title">
                        <a href="{{route('home')}}/zemleroynaya/arenda-ekskavatora-v-omske" title="">Аренда экскаватора в омске</a>
                    </div>
                </div>
            </div>



            <div class="bl_res">
                <div class="block">
                    <div class="block_padd">
                        <div class="block_img">
                            <img width="305" height="215" src="{{route('home')}}/uploads/2014/11/1471517819277.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="1471517819277" srcset="{{route('home')}}/uploads/2014/11/1471517819277.jpg 305w, {{route('home')}}/uploads/2014/11/1471517819277-300x211.jpg 300w" sizes="(max-width: 305px) 100vw, 305px" />						</div>
                    </div>
                    <div class="block_zakaz">
                        ЗАКАЗАТЬ
                    </div>
                    <div class="block_title">
                        <a href="{{route('home')}}/podemno-transportnaya/zakazat-kran-v-omske" title="">Заказать кран в омске</a>
                    </div>
                </div>
            </div>



            <div class="bl_res">
                <div class="block">
                    <div class="block_padd">
                        <div class="block_img">
                        </div>
                    </div>
                    <div class="block_zakaz">
                        ЗАКАЗАТЬ
                    </div>
                    <div class="block_title">
                        <a href="{{route('home')}}/podemno-transportnaya/avtovyshka-gidromanipulyator-14m-26m." title="">Автовышка/гидроподъемник/мех.рука 14м-30м</a>
                    </div>
                </div>
            </div>





        </div>

        <div class="main_text">
            <p>Служба заказа и аренды «ООО АвтоСпецТехника» была основана 20 февраля 2005 года.<br />
                Наша компания оказывает услуги по аренде строительной, землеройной спецтехники и перевозке габаритных/негабаритных грузов. Нашими клиентами на сегодняшний день являются как крупные строительные и производственные компании Омска и Омской области, представители среднего и малого бизнеса, так и частные заказчики.<br />
                Автотранспорт и спецтехника базируются в нескольких районах г. Омска, что позволяет осуществить подачу до объекта с минимальной затратой времени. В случае непредвиденной ситуации, транспорт будет заменен максимально быстро.<br />
                Услуги аренды автоспецтехники в г.Омске могут быть предоставлены на любой интересующий Вас срок — от одного минимального заказа до нескольких месяцев и даже лет. Вся техника, представленная в нашем автопарке, имеет высокое качество и надежность, это гарантирует ее бесперебойную деятельность во время выполнения работ любого уровня сложности.</p>
            <p>В аренду спецтехники входит: предоставление техники, заправка техники ГСМ и работа машиниста.<br />
                Подробную информацию о стоимости перевозки, подборе нужного вида транспорта, доп., услугах Вам с удовольствием предоставят наши менеджеры. Произведут расчет стоимости перевозок, по области и России исходя из километража.<br />
                Для удобства наших клиентов мы предлагаем различные формы оплаты. Для корпоративных заказчиков предусмотрены скидки.<br />
                Экономьте свое время с нами! Зная только наш телефонный номер, Вы сможете полностью удовлетворить потребность во всех видах автотранспорта!<br />
                Для Вас работает команда профессионалов!</p>
            <p>P.S. Позвоните нам и убедитесь сами! Аренда спецтехники в Омске</p>
            <p>8 (3812) 98 40 48 и 8 983 568 40 48</p>
        </div>
@endsection
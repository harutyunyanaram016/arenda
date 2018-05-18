@extends('layout',  array('title'=>$page['title'], 'allServise'=>$page['allServise'], 'menus'=>$page['menu']))
@section('content')
    <h1>Прайс лист</h1>

    <div class="page_text">
        <p>Прайс лист<span id="more-48"></span><b>Автокраны</b></p>
        <table border="\&quot;1\&quot;" cellspacing="\&quot;0\&quot;" cellpadding="\&quot;0\&quot;">
            <tbody>
            <tr>
                <td><b>Характеристика</b></td>
                <td><b>Марка</b></td>
                <td><b>Длина стрелы</b></td>
                <td><b>Стоимость часа *, руб</b></td>
                <td><b>Стоимость подачи *,руб</b></td>
                <td><b>Стоимость подачи за город *, руб/км</b></td>
                <td><b>Минимальное время закза, часы</b></td>
            </tr>
            <tr>
                <td>Автокран 5т</td>
                <td>Isuzu/Tadano</td>
                <td>21м</td>
                <td>1000</td>
                <td>500</td>
                <td>60</td>
                <td>3</td>
            </tr>
            <tr>
                <td>Автокран 14т</td>
                <td>МаЗ/Ивановец</td>
                <td>14м</td>
                <td>1000</td>
                <td>500</td>
                <td>60</td>
                <td>3</td>
            </tr>
            <tr>
                <td>Автокран 16т</td>
                <td>КамаЗ/Ивановец</td>
                <td>18м</td>
                <td>1300</td>
                <td>500</td>
                <td>60</td>
                <td>3</td>
            </tr>
            <tr>
                <td>Автокран 16т</td>
                <td>КамаЗ/Клинцы</td>
                <td>21м</td>
                <td>1300</td>
                <td>500</td>
                <td>60</td>
                <td>3</td>
            </tr>
            <tr>
                <td>Автокран 25т</td>
                <td>КамаЗ/Машека</td>
                <td>28м</td>
                <td>1500</td>
                <td>700</td>
                <td>90</td>
                <td>4</td>
            </tr>
            <tr>
                <td>Автокран 25т (вездеход)</td>
                <td>Урал/Юргинец</td>
                <td>21м</td>
                <td>1500</td>
                <td>700</td>
                <td>100</td>
                <td>4</td>
            </tr>
            <tr>
                <td>Автокран 25т</td>
                <td>XCMG</td>
                <td>32м; Гусек-9м</td>
                <td>2200</td>
                <td>1000</td>
                <td>120</td>
                <td>4</td>
            </tr>
            <tr>
                <td>Автокран 25т (самоходный)</td>
                <td>Kobelko/КАТО</td>
                <td>42м</td>
                <td>2500</td>
                <td>2000</td>
                <td>150</td>
                <td>4</td>
            </tr>
            </tbody>
        </table>
        <p><b>Экскаваторы</b></p>
        <table border="\&quot;1\&quot;" cellspacing="\&quot;0\&quot;" cellpadding="\&quot;1\&quot;">
            <tbody>
            <tr>
                <td><b>Характеристика</b></td>
                <td><b>Марка</b></td>
                <td><b>Глубина копания</b></td>
                <td><b>Стоимость часа *, руб</b></td>
                <td><b>Стоимость подачи *,руб</b></td>
                <td><b>Стоимость подачи за город *, руб/км</b></td>
                <td><b>Минимальное время закза, часы</b></td>
            </tr>
            <tr>
                <td>Экскаватор v-0.25м3</td>
                <td>ЮМЗ/МТЗ</td>
                <td>3.5м</td>
                <td>1000</td>
                <td>500</td>
                <td>60</td>
                <td>4</td>
            </tr>
            <tr>
                <td>Экскаватор-погрузчикv-0.25м3/1м3т</td>
                <td>JCB/Komatsu</td>
                <td>5.5м</td>
                <td>1300</td>
                <td>500</td>
                <td>60</td>
                <td>4</td>
            </tr>
            <tr>
                <td>Экскаватор колесный v-0,65м3</td>
                <td>ЕК-12/Doosan-160</td>
                <td>5.5м</td>
                <td>1500</td>
                <td>1000</td>
                <td>100</td>
                <td>4</td>
            </tr>
            <tr>
                <td>Экскаватор колесный v-0,85м3</td>
                <td>ЕК-14/Doosan-180</td>
                <td>6м</td>
                <td>1800</td>
                <td>1000</td>
                <td>100</td>
                <td>4</td>
            </tr>
            <tr>
                <td>Экскаватор гусеничный v-1м3</td>
                <td>Hitachi-240</td>
                <td>7м</td>
                <td>1800</td>
                <td>6000</td>
                <td>120</td>
                <td>8</td>
            </tr>
            <tr>
                <td>Экскаватор гусеничныйv-1.2м3</td>
                <td>Hynday-290</td>
                <td>7.5м</td>
                <td>2400</td>
                <td>6000</td>
                <td>120</td>
                <td>8</td>
            </tr>
            </tbody>
        </table>
        <p><b>Фронтальные погрузчики</b></p>
        <table border="\&quot;1\&quot;" cellspacing="\&quot;0\&quot;" cellpadding="\&quot;1\&quot;">
            <tbody>
            <tr>
                <td><b>Характеристика</b></td>
                <td><b>Марка</b></td>
                <td><b>Грузоподъ<br />емность</b></td>
                <td><b>Стоимость часа *, руб</b></td>
                <td><b>Стоимость подачи *,руб</b></td>
                <td><b>Стоимость подачи за город *, руб/км</b></td>
                <td><b>Минимальное время закза, часы</b></td>
            </tr>
            <tr>
                <td>Фронтальный погрузчик v-1м3</td>
                <td>ЮМЗ/МТЗ</td>
                <td>1т</td>
                <td>1000</td>
                <td>500</td>
                <td>60</td>
                <td>4</td>
            </tr>
            <tr>
                <td>Экскаватор-погрузчик v-0.25м3/1м3т</td>
                <td>JCB/Komatsu</td>
                <td>1.5т</td>
                <td>1500</td>
                <td>500</td>
                <td>60</td>
                <td>4</td>
            </tr>
            <tr>
                <td>Фронтальный погрузчик v-1.8м3</td>
                <td>ТО-18</td>
                <td>3т</td>
                <td>1300</td>
                <td>500</td>
                <td>60</td>
                <td>4</td>
            </tr>
            <tr>
                <td>Фронтальный погрузчик v-1.8м3</td>
                <td>XCMG LW-300</td>
                <td>3т</td>
                <td>1300</td>
                <td>500</td>
                <td>60</td>
                <td>4</td>
            </tr>
            <tr>
                <td>Фронтальный погрузчик v-3м3</td>
                <td>LG</td>
                <td>5т</td>
                <td>1700</td>
                <td>1000</td>
                <td>60</td>
                <td>4</td>
            </tr>
            </tbody>
        </table>
        <p><b>Полуприцепы</b></p>
        <table border="\&quot;1\&quot;" cellspacing="\&quot;0\&quot;" cellpadding="\&quot;1\&quot;">
            <tbody>
            <tr>
                <td><b>Характеристика</b></td>
                <td><b>Марка</b></td>
                <td><b>Грузоподъемность</b></td>
                <td><b>Стоимость часа *, руб</b></td>
                <td><b>Стоимость подачи *, руб</b></td>
                <td><b>Стоимость подачи за город *, руб/км</b></td>
                <td><b>Минимальное время заказа *, часы</b></td>
            </tr>
            <tr>
                <td>Длинномер 9м</td>
                <td>Камаз/Урал</td>
                <td>20т</td>
                <td>900</td>
                <td>500</td>
                <td>60</td>
                <td>3</td>
            </tr>
            <tr>
                <td>Длинномер 12м</td>
                <td>Камаз/Урал</td>
                <td>20т</td>
                <td>1000</td>
                <td>500</td>
                <td>60</td>
                <td>3</td>
            </tr>
            <tr>
                <td>Длинномер (негабарит) 12м</td>
                <td>Камаз/Урал</td>
                <td>20т</td>
                <td>1500</td>
                <td>500</td>
                <td>60</td>
                <td>3</td>
            </tr>
            <tr>
                <td>Трал 9м v-1.8м3</td>
                <td>Камаз/Урал</td>
                <td>20т</td>
                <td>1500</td>
                <td>500</td>
                <td>60</td>
                <td>3</td>
            </tr>
            <tr>
                <td>Трал 12м</td>
                <td>Камаз/Урал</td>
                <td>60т</td>
                <td>2000</td>
                <td>500</td>
                <td>60</td>
                <td>4</td>
            </tr>
            </tbody>
        </table>
        <p><b>*</b> Цены указаны без НДС. НДС начисляется сверху.</p>
    </div>
@endsection
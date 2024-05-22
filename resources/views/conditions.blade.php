@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="wrapper">
                <div class="condition-block">
                    <div class="title-block">
                        <span>КАК ЗАПЛАТИТЬ ?</span>
                        <h2 class="title">УСЛОВИЯ ОПЛАТЫ</h2>
                    </div>
                    <div class="condition">
                        <div class="condition-information">
                            <div class="condition-title">
                                <img src="img/payment1.png" alt="payment1">
                                <span>В ПРЕДЕЛАХ ГОРОДА</span>
                            </div>
                            <span class="line"></span>
                            <ul class="condition-ul">
                                <li>Предоплата 10% до начала сборки</li>
                                <li>Переводом в Банк</li>
                                <li>По расчетному счету</li>
                                <li>Онлайн-перевод</li>
                                <li>Наличный расчет</li>
                                <li>Кредит/рассрочка</li>
                            </ul>
                        </div>
                        <div class="condition-information">
                            <div class="condition-title">
                                <img src="img/payment2.png" alt="payment2">
                                <span>ПО РОССИИ И СНГ</span>
                            </div>
                            <span class="line"></span>
                            <ul class="condition-ul">
                                <li>Полная предоплата до начала сборки</li>
                                <li>Переводом в Банк</li>
                                <li>По расчетному счету</li>
                                <li>Онлайн-перевод</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="condition-block">
                    <div class="title-block">
                        <span>КАК ДОСТАВЯТ ?</span>
                        <h2 class="title">УСЛОВИЯ ДОСТАВКИ</h2>
                    </div>
                    <div class="condition">
                        <div class="condition-information">
                            <div class="condition-title">
                                <img src="img/delivery1.png" alt="delivery1">
                                <span>В ПРЕДЕЛАХ ГОРОДА</span>
                            </div>
                            <span class="line"></span>
                            <ul class="condition-ul">
                                <li>Бесплатная доставка по городу</li>
                                <li>За город цена договорная</li>
                            </ul>
                        </div>
                        <div class="condition-information">
                            <div class="condition-title">
                                <img src="img/delivery2.png" alt="delivery2">
                                <span>ПО РОССИИ И СНГ</span>
                            </div>
                            <span class="line"></span>
                            <ul class="condition-ul">
                                <li>Бесплатная доставка по России</li>
                                <li>Любая удобная вам транспортная компания</li>
                                <li>Надежная упаковка</li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection

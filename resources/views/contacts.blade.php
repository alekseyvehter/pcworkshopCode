@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="wrapper">
            <div class="contacts-block">
                <div class="title-block">
                    <span>КАК С НАМИ СВЯЗАТЬСЯ ?</span>
                    <h2 class="title">НАШИ КОНТАКТЫ</h2>
                </div>
                <div class="contacts">
                    <div class="contact-information">
                        <p>По-любым вопросам можете обратиться по телефону, или заказать обратный звонок. Наши менеджеры
                            с
                            радостью вам помогут</p>
                    </div>
                    <div class="contact-list">
                        <div class="contact">
                            <img src="img/contact1.png" alt="contact1">
                            <p>+7 (913) 149-70-37</p>
                        </div>
                        <div class="contact">
                            <img src="img/contact1.png" alt="contact1">
                            <p>+7 (3812) 90-30-37</p>
                        </div>
                        <div class="contact">
                            <img src="img/contact2.png" alt="contact2">
                            <p>pcworkshopstudio<br class="d-none">@yandex.ru</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="branches-block">
                <div class="title-block">
                    <span>ГДЕ НАС НАЙТИ ?</span>
                    <h2 class="title">НАШИ ФИЛИАЛЫ</h2>
                </div>
                <div class="branches">
                    <div class="branch">
                        <div class="branch-information">
                            <h2>МЫ В МОСКВЕ</h2>
                            <p>ул. Дубининская, 76<br>Вход с торца, 2 этаж<br>Пн-Вс: с 12:00 до 20:00</p>
                        </div>
                        <div class="branch-map">
                            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5e0416e8913d43631af9fe9667f80632f6b0f82f63c3a828719b14444364e884&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                    </div>
                    <div class="branch">
                        <div class="branch-information">
                            <h2>МЫ В ОМСКЕ</h2>
                            <p>Проспект Карла Маркса, 41/1<br>Главный вход, 5 этаж, Бутик 539<br>Пн-Вс: с 11:00 до 20:00
                            </p>
                        </div>
                        <div class="branch-map">
                            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A11521e1b995803d911fd0ebb3a56cccc3bc34a2eeaabce065f046386ad07a197&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                    </div>
                    <div class="branch">
                        <div class="branch-information">
                            <h2>МЫ В КАЗАНИ</h2>
                            <p>ул. Пушкина, 52<br>Главный вход, 3 этаж, Бутик 305<br>Пн-Вс: с 11:00 до 20:00</p>
                        </div>
                        <div class="branch-map">
                            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A05200ad7a2ffe5ee9b5abe529126965dffea7a120b35f91fc8f0096c3c048d60&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                    </div>
                    <div class="branch">
                        <div class="branch-information">
                            <h2>МЫ В ТЮМЕНИ</h2>
                            <p>ул. Республики, 26<br>Главный вхож, 3 этаж, Офис 310<br>Пн-Вс: с 11:00 до 20:00</p>
                        </div>
                        <div class="branch-map">
                            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aead9612b4a4ce031dfc0728bf6b36e6b0de3bc4058640c65209cb162b936f85f&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

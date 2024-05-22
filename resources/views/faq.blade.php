@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="wrapper">
            <div class="faq-block">
                <div class="title-block">
                    <span>ОСТАЛИСЬ ВОПРОСЫ?</span>
                    <h2 class="title">ЧАСТЫЕ ВОПРОСЫ КЛИЕНТОВ</h2>
                </div>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                Как происходит оформление рассрочки?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                             aria-labelledby="flush-headingOne"
                             data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>Рассрочка и кредит оформляются у нас в офисе. С собой только
                                        паспорт.
                                    </li>
                                    <li>Рассрочку и кредит предоставляют банки: Тинькофф Банк, МТС Банк, Кредит Европа
                                        Банк,
                                        Восточный Экспресс Банк.
                                    </li>
                                    <li>Переплата по рассрочке, зависит от срока. Дается на срок до 12 месяцев
                                        (включительно).
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                Предоставляете ли вы гарантию?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                             aria-labelledby="flush-headingTwo"
                             data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        Мы гарантируем качество наших товаров до трех лет.
                                    </li>
                                    <li>Наша гарантия поддерживается единым гарантийным талоном, охватывающим все
                                        комплектующие.
                                    </li>
                                    <li>
                                        Мы стоим за нашу продукцию и стремимся обеспечить беззаботное использование
                                        наших
                                        товаров в течение длительного времени.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                Можно ли принести свой ПК и получить скидку?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                             aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        По программе trade-in вы можете получить скидку взамен на ваш
                                        старый ПК или же иную технику.
                                    </li>
                                    <li>
                                        Скидка складывается из совокупности рентабельности, рыночной стоимости и
                                        состояния
                                        вашего
                                        оборудования.
                                    </li>
                                    <li>
                                        По программе trade-in предоставляемая нами скидка не может превышать 50% от
                                        стоимости
                                        приобретаемого вами ПК.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                Что нужно что бы приобрести у вас компьютер?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                             aria-labelledby="flush-headingFour"
                             data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>Обсудить сборку и стоимость (приехать в
                                        офис/написать/позвонить).
                                    </li>
                                    <li>Внести предоплату в размере 10% от стоимости ПК.</li>
                                    <li>Забрать ПК.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                Вы занимаетесь чисткой, обслуживанием, диагностикой компьютеров?
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse"
                             aria-labelledby="flush-headingFive"
                             data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        Мы оказываем широкий спектр услуг по чистке, обслуживанию и диагностике
                                        компьютеров.
                                    </li>
                                    <li>Просто привезите свой компьютер к нам, и мы с удовольствием поможем вам.</li>
                                    <li>При этом диагностика осуществляется абсолютно бесплатно, так что вы можете быть
                                        уверены в том, что получите профессиональную оценку состояния вашего устройства
                                        без
                                        каких-либо дополнительных расходов.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                Можно ли приобрести у вас монитор и периферию?
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse"
                             aria-labelledby="flush-headingSix"
                             data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        Мы рады предложить вам широкий ассортимент мониторов, клавиатур, мышей и
                                        других аксессуаров для вашего ПК.
                                    </li>
                                    <li>У нас есть все необходимое для удобной и эффективной работы вашего компьютера, а
                                        также для создания комфортной и продуктивной рабочей среды.
                                    </li>
                                    <li>Не стесняйтесь обращаться к нам для выбора и приобретения необходимых
                                        компонентов и
                                        аксессуаров.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                    aria-controls="flush-collapseSeven">
                                Где вы находитесь и какой у вас график работы?
                            </button>
                        </h2>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse"
                             aria-labelledby="flush-headingSeven"
                             data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        Москва, ул. Дубининская, 76
                                        Вход с торца, 2 этаж,
                                        Пн-Вс: с 12:00 до 20:00
                                    </li>
                                    <li>
                                        Омск, Проспект Карла Маркса, 41/1
                                        Главный вход, 5 этаж, Бутик 539,
                                        Пн-Вс: с 11:00 до 20:00
                                    </li>
                                    <li>
                                        Казань, ул. Пушкина, 52
                                        Главный вход, 3 этаж, Бутик 305,
                                        Пн-Вс: с 11:00 до 20:00
                                    </li>
                                    <li>
                                        Тюмень, ул. Республики, 26
                                        Главный вхож, 3 этаж, Офис 310,
                                        Пн-Вс: с 11:00 до 20:00
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

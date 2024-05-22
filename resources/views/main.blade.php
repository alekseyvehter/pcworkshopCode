@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="wrapper">
            {{--Slogan-block--}}
            <div class="slogan-block">
                <div class="slogan-information">
                    <h1><span>PC</span>WORKSHOP</h1>
                    <p>Готовы погрузиться в мир игровых возможностей с PSWORKSHOP ?</p>
                    <p>Создайте свой идеальный игровой ПК прямо сейчас с и погрузитесь в невероятные приключения без
                        границ!</p>
                    <a class="slogan-button">ОСТАВИТЬ ЗАЯВКУ</a>
                </div>
            </div>
            {{--About-block--}}
            <div class="about-block">
                <div class="about-information">
                    <div class="title-block">
                        <span>ПОЧЕМУ МЫ?</span>
                        <h2 class="title">НЕМНОГО О НАС</h2>
                    </div>
                    <p>PCWORKSHOP - не просто магазин, мы настоящая мастерская, где каждый может создать свой идеальный
                        игровой ПК любой сложности. И не важно, где ты находишься - мы доставим твой заказ в любую точку
                        России и стран СНГ.</p>
                    <p>С 2015 года мы являемся лидерами в сфере компьютерных технологий, завоевав доверие тысяч
                        довольных
                        клиентов и успешно выполнив такое же количество сборок. Создай свой идеальный мир игровых
                        впечатлений вместе с PCWORKSHOP!</p>
                </div>
                <div class="about-img">
                    <img src="{{ asset('img/pc-about.png') }}" alt="pc-about-image">
                </div>
            </div>
            {{--Avdantages-block--}}
            <div class="advantages-page">
                <h2 class="title w-100">НАШИ ПРЕИМУЩЕСТВА</h2>
                <div class="advantages-block">
                    <div class="advantage">
                        <img src="{{ asset('img/advantage1.png') }}" alt="advantage-img-1">
                        <p>Индивидуальный подход</p>
                    </div>
                    <div class="advantage">
                        <img src="{{ asset('img/advantage2.png') }}" alt="advantage-img-2">
                        <p>Установка ОС и драйверов</p>
                    </div>
                    <div class="advantage">
                        <img src="{{ asset('img/advantage3.png') }}" alt="advantage-img-3">
                        <p>Бесплатная доставка</p>
                    </div>
                    <div class="advantage">
                        <img src="{{ asset('img/advantage4.png') }}" alt="advantage-img-4">
                        <p>Лучшие комплектующие</p>
                    </div>
                </div>
            </div>
            {{--Best-pc-block--}}
            @if(session('success-order'))
                <div class="modal fade" id="orderSuccessModal" tabindex="-1"
                     aria-labelledby="orderSuccessModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="success-body">
                                <p>Ваш заказ был успешно сформирован и отправлен. В ближайшее время с вами свяжутся наши
                                    менеджеры. Спасибо!</p>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Закрыть</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="best-pc-block">
                <h2 class="title w-100">ЛУЧШИЕ МОДЕЛИ</h2>
                <div class="multiple-card-slider">
                    <div id="carouselExampleControls" class="carousel" data-bs-ride="false">
                        <div class="carousel-inner">
                            @foreach($randomComputers as $key => $view)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <div class="card">
                                        <img class="img-pc" src="{{ asset('img/ready_models/' . $view['img']) }}"
                                             alt="pc1">
                                        <div class="card-body">
                                            <span class="title-card">{{ $view['name'] }}</span>
                                            <div class="specification">
                                                <img src="{{asset('img/cpu.png')}}" alt="cpu">
                                                <span>{{ $view['cpu'] }}</span>
                                            </div>
                                            <div class="specification">
                                                <img src="{{asset('img/gpu.png')}}" alt="gpu">
                                                <span>{{ $view['gpu'] }}</span>
                                            </div>
                                            <div class="specification">
                                                <img src="{{asset('img/motherboard.png')}}" alt="motherboard">
                                                <span>{{ $view['motherboard'] }}</span>
                                            </div>
                                            <div class="specification">
                                                <img src="{{asset('img/ram.png')}}" alt="ram">
                                                <span>{{ $view['ram'] }}</span>
                                            </div>
                                            <span class="card-price">{{ $view['price'] }} ₽</span>
                                            <div class="card-button">
                                                <a class="detailed-btn"
                                                   href="{{ route('computerDetail', ['category' => $view['category'], 'id' => $view->id]) }}">ПОДРОБНЕЕ</a>
                                                <button type="button" class="order-btn" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalOrder"
                                                        data-id="{{ $view['id'] }}"
                                                        data-name="{{ $view['name'] }}"
                                                        data-cpu="{{ $view['cpu'] }}"
                                                        data-gpu="{{ $view['gpu'] }}"
                                                        data-motherboard="{{ $view['motherboard'] }}"
                                                        data-ram="{{ $view['ram'] }}"
                                                        data-price="{{ $view['price'] }}">
                                                    ЗАКАЗАТЬ
                                                </button>
                                                <div class="modal fade" id="exampleModalOrder" tabindex="-1"
                                                     aria-labelledby="exampleModalLabelOrder" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header pb-3">
                                                                <span class="title-modal" id="exampleModalLabel">Характеристики вашего пк:</span>
                                                                <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body modal-body-order">
                                                                <div class="d-flex flex-column gap-2 pb-3">
                                                                    <div id="modalComputerName" class="green"></div>
                                                                    <div id="modalComputerCPU"></div>
                                                                    <div id="modalComputerGPU"></div>
                                                                    <div id="modalComputerMotherboard"></div>
                                                                    <div id="modalComputerRAM"></div>
                                                                    <div id="modalComputerPrice"></div>
                                                                </div>
                                                                <form action="{{ route('submitOrder') }}" method="POST"
                                                                      class="modal-form custom-form">
                                                                    @csrf
                                                                    <input type="hidden" name="computer_id"
                                                                           id="computer_id" value="">
                                                                    <label for="name" class="d-none"></label>
                                                                    <input type="text" name="name" id="name"
                                                                           placeholder="Ваше имя*" required>
                                                                    <label for="city" class="d-none"></label>
                                                                    <input type="text" name="city" id="city"
                                                                           placeholder="Ваш город*" required>
                                                                    <label for="phone_number" class="d-none"></label>
                                                                    <input type="text" name="phone_number"
                                                                           id="phone_number"
                                                                           placeholder="Ваш номер телефона*" required
                                                                           class="phone-mask">
                                                                    <label for="comment" class="d-none"></label>
                                                                    <textarea class="form-control" id="comment"
                                                                              name="comment"
                                                                              placeholder="Комментарии к заказу"
                                                                              rows="3"></textarea>
                                                                    <button type="submit" class="btn btn-primary">
                                                                        Отправить заказ
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev">
                            <img src="{{asset('img/prev.png')}}" alt="prev">
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="next">
                            <img src="{{asset('img/next.png')}}" alt="next">
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            {{--Feedback-block--}}
            @if(session('success-application'))
                <div class="modal fade" id="orderSuccessModal" tabindex="-1"
                     aria-labelledby="orderSuccessModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                Ваш заявка была успешно отправлена. В ближайшее время с вами свяжутся наши
                                менеджеры. Спасибо!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Закрыть
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="feedback-block" id="feedback-block">
                <div class="title-block">
                    <span>ЗАИНТЕРЕСОВАЛИСЬ?</span>
                    <h2 class="title">ПОДБЕРЕМ КОМПЬЮТЕР</h2>
                </div>
                <div class="feedback-form">
                    <form action="{{ route('submitApplication') }}" method="post" class="custom-form">
                        @csrf
                        <span class="title-form">Соберите компьютер вашей мечты вместе с <span
                                class="green">PCWORKSHOP</span></span>
                        <label for="name_client" class="d-none"></label>
                        <input type="text" name="name_client" id="name_client" placeholder="Имя*" required>
                        <label for="phone_number_client" class="d-none"></label>
                        <input type="text" name="phone_number_client" id="phone_number_client"
                               placeholder="Номер телефона*" class="phone-mask" required>
                        <label for="budget_client" class="d-none"></label>
                        <input type="text" name="budget_client" id="budget_client"
                               placeholder="Какой бюджет ?*" required>
                        <label for="purpose_client" class="d-none"></label>
                        <input type="text" name="purpose_client" id="purpose_client"
                               placeholder="Для каких целей компьютер?*" required>
                        <label for="wishes_client" class="d-none"></label>
                        <input type="text" name="wishes_client" id="wishes_client"
                               placeholder="Пожелания к компьютеру (если есть)">
                        <span class="agree">Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь с нашей <a
                                href="{{ url('/agree') }}" class="green">политикой конфиденциальности</a> сайта.</span>
                        <button type="submit">ОТПРАВИТЬ ЗАЯВКУ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/slider.js')}}"></script>
    <script src="{{asset('js/scroll-main.js')}}"></script>
    <script src="{{asset('js/success.js')}}"></script>
    <script src="{{asset('js/detailed.js')}}"></script>
@endsection

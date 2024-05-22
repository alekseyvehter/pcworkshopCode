<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{asset('img/shortcut.png')}}">


    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/general_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ready_models_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/services_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/conditions_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reviews_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contacts_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/faq_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/computer_detail_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media_request_style.css') }}">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>

</head>
<body class="body">
<div id="app">
    <header class="header" id="header">
        <div class="container">
            <div class="header-top">
                <div class="header-logo d-flex align-items-center justify-content-between w-100">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{asset('img/logo.png')}}" alt="logo"></a>
                    </div>
                    <input type="checkbox" id="burger-checkbox" class="burger-checkbox">
                    <label for="burger-checkbox" class="burger p-0 m-0"></label>
                    <ul class="menu-list">
                        <li><a href="{{ url('/') }}" class="menu-item">ГЛАВНАЯ</a></li>
                        <li><a href="{{ url('/gamerModels') }}" class="menu-item">ИГРОВЫЕ СБОРКИ</a></li>
                        <li><a href="{{ url('/budgetModels') }}" class="menu-item">БЮДЖЕТНЫЕ СБОРКИ</a></li>
                        <li><a href="{{ url('/workstations') }}" class="menu-item">РАБОЧИЕ СТАНЦИИ</a></li>
                        <li><a href="{{ url('/services') }}" class="menu-item">УСЛУГИ</a></li>
                        <li><a href="{{ url('/conditions') }}" class="menu-item">ОПЛАТА И ДОСТАВКА</a></li>
                        <li><a href="{{ url('/reviews') }}" class="menu-item">ОТЗЫВЫ</a></li>
                        <li><a href="{{ url('/contacts') }}" class="menu-item">КОНТАКТЫ</a></li>
                    </ul>
                </div>
                <div class="header-information">
                    <div class="header-information-item">
                        <span>+7 (913) 149-70-37</span>
                    </div>
                    <div class="header-information-item">
                        <span>pcshop@yandex.ru</span>
                    </div>
                    <div class="header-information-item">
                        <button type="button" class="header-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            ОСТАВИТЬ ЗАЯВКУ
                        </button>
                    </div>
                </div>
                @if(session('success-application'))
                    <div class="modal fade" id="orderSuccessModal" tabindex="-1"
                         aria-labelledby="orderSuccessModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="success-body">
                                    <p>Ваша заявка была успешно отправлена. В ближайшее время с вами свяжутся наши
                                        менеджеры. Спасибо!</p>
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Закрыть
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                        <span class="title-modal" id="exampleModalLabel">Соберите компьютер вашей мечты вместе с <span
                                                class="green">PCWORKSHOP</span></span>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('submitApplication') }}" method="post"
                                      class="custom-form modal-form">
                                    @csrf
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
            </div>
            <div class="header-bottom">
                <nav class="header-nav">
                    <ul class="header-nav-ul">
                        <li><a href="{{ url('/') }}" class="header-url">ГЛАВНАЯ</a></li>
                        <li>
                            <a class="header-url" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                               aria-expanded="false">ГОТОВЫЕ МОДЕЛИ</a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start dropdown-menu-custom"
                                    aria-labelledby="dropdownMenuButton1">
                                <li><a class="header-url" href="{{ url('/gamerModels') }}">ИГРОВЫЕ МОДЕЛИ</a></li>
                                <li><a class="header-url" href="{{ url('/budgetModels') }}">БЮДЖЕТНЫЕ МОДЕЛИ</a></li>
                                <li><a class="header-url" href="{{ url('/workstations') }}">РАБОЧИЕ СТАНЦИИ</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/services') }}" class="header-url">УСЛУГИ</a></li>
                        <li><a href="{{ url('/conditions') }}" class="header-url">ОПЛАТА И ДОСТАВКА</a></li>
                        <li><a href="{{ url('/reviews') }}" class="header-url">ОТЗЫВЫ</a></li>
                        <li><a href="{{ url('/contacts') }}" class="header-url">КОНТАКТЫ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main class="main-content">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-top">
                <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" alt="logo"></a>
                <div class="footer-nav">
                    <ul class="footer-nav-ul">
                        <li><a href="{{ url('/faq') }}" class="footer-url">ВОПРОСЫ ПОКУПАТЕЛЕЙ</a></li>
                        <li><a href="{{ url('/conditions') }}" class="footer-url">УСЛОВИЯ ДОСТАВКИ</a></li>
                    </ul>
                    <ul class="footer-nav-ul">
                        <li><a href="{{ url('/agree') }}" class="footer-url">ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ</a></li>
                        <li><a href="{{ url('/contacts') }}" class="footer-url">КОНТАКТЫ</a></li>
                    </ul>
                </div>
                <a class="footer-btn">НАВЕРХ</a>
            </div>
            <div class="footer-bottom">
                <div class="footer-icon">
                    <a href="" class="box"><img src="{{ asset('img/vk.png') }}" alt="vk"></a>
                    <a href="" class="box"><img src="{{ asset('img/inst.png') }}" alt="inst"></a>
                    <a href="" class="box"><img src="{{ asset('img/tg.png') }}" alt="tg"></a>
                    <a href="" class="box"><img src="{{ asset('img/whatsapp.png') }}" alt="whatsapp"></a>
                    <a href="" class="box"><img src="{{ asset('img/youtube.png') }}" alt="youtube"></a>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/scroll-footer.js') }}"></script>
        <script src="{{ asset('js/success.js') }}"></script>
        <script src="{{ asset('js/phone.js') }}"></script>
    </footer>
</div>
</body>
</html>

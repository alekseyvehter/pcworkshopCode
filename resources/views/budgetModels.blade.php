@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="wrapper">
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
            <div class="models-block">
                <div class="title-block">
                    <span>ЛУЧШЕЕ ЗА СВОИ ДЕНЬГИ</span>
                    <h2 class="title">БЮДЖЕТНЫЕ МОДЕЛИ</h2>
                </div>
                <div class="models-list">
                    @foreach($budgetModelsView as $view)
                        <div class="model-card">
                            <img class="img-pc" src="{{ asset('img/ready_models/' . $view['img']) }}" alt="pc1">
                            <div class="card-body">
                                <span class="title-card">{{ $view['name'] }}</span>
                                <div class="specification">
                                    <img src="img/cpu.png" alt="cpu">
                                    <span>{{ $view['cpu'] }}</span>
                                </div>
                                <div class="specification">
                                    <img src="img/gpu.png" alt="gpu">
                                    <span>{{ $view['gpu'] }}</span>
                                </div>
                                <div class="specification">
                                    <img src="img/motherboard.png" alt="motherboard">
                                    <span>{{ $view['motherboard'] }}</span>
                                </div>
                                <div class="specification">
                                    <img src="img/ram.png" alt="ram">
                                    <span>{{ $view['ram'] }}</span>
                                </div>
                                <span class="card-price">{{ $view['price'] }} ₽</span>
                                <div class="card-button">
                                    <a class="detailed-btn"
                                       href="{{ route('computerDetail', ['category' => $category, 'id' => $view->id]) }}">ПОДРОБНЕЕ</a>
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
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                                            <label for="comment" class="d-none">
                                            </label><textarea class="form-control" id="comment"
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
    <script src="{{asset('js/success.js')}}"></script>
    <script src="{{asset('js/detailed.js')}}"></script>
@endsection

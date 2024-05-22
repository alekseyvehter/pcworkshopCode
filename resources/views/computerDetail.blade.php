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
            <div>
                <div class="specifications-block">
                    <div class="img-detail">
                        <img src="{{ asset('img/ready_models/' . $computer->img) }}" alt="computer">
                    </div>
                    <div class="specifications-details">
                        <div class="title-block">
                            <h2 class="title">{{ $computer->name }}</h2>
                        </div>
                        <div class="specification-detail specification-price">
                            <p>{{ $computer->price }} ₽</p>
                        </div>
                        <div class="specification-detail">
                            <span>Процессор</span>
                            <div class="detail">
                                <img src="{{ asset('img/cpu.png') }}" alt="cpu">
                                <p>{{ $computer->cpu }}</p>
                            </div>
                        </div>
                        <div class="specification-detail">
                            <span>Видеокарта</span>
                            <div class="detail">
                                <img src="{{ asset('img/gpu.png') }}" alt="gpu">
                                <p>{{ $computer->gpu }}</p>
                            </div>
                        </div>
                        <div class="specification-detail">
                            <span>Материнская плата</span>
                            <div class="detail">
                                <img src="{{ asset('img/motherboard.png') }}" alt="motherboard">
                                <p>{{ $computer->motherboard }}</p>
                            </div>
                        </div>
                        <div class="specification-detail">
                            <span>Оперативная память</span>
                            <div class="detail">
                                <img src="{{ asset('img/ram.png') }}" alt="ram">
                                <p>{{ $computer->ram }}</p>
                            </div>
                        </div>
                        <button type="button" class="order-detail-btn" data-bs-toggle="modal"
                                data-bs-target="#exampleModalOrder"
                                data-id="{{ $computer['id'] }}"
                                data-name="{{ $computer['name'] }}"
                                data-cpu="{{ $computer['cpu'] }}"
                                data-gpu="{{ $computer['gpu'] }}"
                                data-motherboard="{{ $computer['motherboard'] }}"
                                data-ram="{{ $computer['ram'] }}"
                                data-price="{{ $computer['price'] }}">
                            ЗАКАЗАТЬ
                        </button>
                        <div class="modal fade" id="exampleModalOrder" tabindex="-1"
                             aria-labelledby="exampleModalLabelOrder" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header pb-3">
                                        <span class="title-modal"
                                              id="exampleModalLabel">Характеристики вашего пк:</span>
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
                <div class="description-block">
                    <div class="title-block">
                        <h2 class="title">ОПИСАНИЕ</h2>
                    </div>
                    <div class="description-information">
                        <div class="description">
                            <p>{{ $computer->description }}</p>
                        </div>
                        <ul class="ul-description">
                            <li><p>Охлаждение: {{ $computer->cooling }}</p></li>
                            <li><p>Накопитель: {{ $computer->hdd }}</p></li>
                            <li><p>Блок питания: {{ $computer->power }}</p></li>
                            <li><p>Корпус: {{ $computer->body }}</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/success.js')}}"></script>
    <script src="{{asset('js/detailed.js')}}"></script>
@endsection

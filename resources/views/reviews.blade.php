@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="wrapper">
            @if(session('success-review'))
                <div class="modal fade" id="orderSuccessModal" tabindex="-1"
                     aria-labelledby="orderSuccessModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="success-body">
                                <p>Спасибо за ваше мнение, ваш отзыв очень важен для нас. После проверки ваш отзыв будет опубликован на сайте.</p>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Закрыть</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="reviews-block">
                <div class="title-block">
                    <span>ЧТО О НАС ДУМАЮТ?</span>
                    <h2 class="title">ОТЗЫВЫ КЛИЕНТОВ</h2>
                </div>
                <div class="review-btn-block">
                    <span class="line"></span>
                    <button type="button" class="review-btn" data-bs-toggle="modal"
                            data-bs-target="#exampleModalReviews">
                        ОСТАВИТЬ ОТЗЫВ
                    </button>
                    <span class="line"></span>
                    <div class="modal fade" id="exampleModalReviews" tabindex="-1"
                         aria-labelledby="exampleModalLabelReviews" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <span class="title-modal" id="exampleModalLabel">Ваше мнение самое важное для нас, оставьте пару слов.</span>
                                    <button type="button" class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('submitReview') }}" method="post" class="custom-form modal-form">
                                        @csrf
                                        <label for="name_client_review" class="d-none"></label>
                                        <input type="text" name="name_client_review" id="name_client_review" placeholder="Имя*">
                                        <label for="grade_client_review" class="d-none"></label>
                                        <input type="number" name="grade_client_review" id="grade_client_review" min="1"
                                               max="10" placeholder="Оценка* (1/10)">
                                        <label for="comment_client_review" class="d-none"></label>
                                        <textarea class="form-control" id="comment_client_review"
                                                  name="comment_client_review"
                                                  placeholder="Комментарии*"
                                                  rows="3"></textarea>
                                        <button type="submit">Отправить</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reviews">
                    @foreach($showReview as $show)
                        <div class="review">
                            <div class="review-title">
                                <div class="review-name">
                                    <p>{{ $show['name_client_review'] }}</p>
                                    <span>{{ $show['created_at']->format('Y-m-d') }}</span>
                                </div>
                                <div class="review-grade">
                                    <span class="grade-base">{{ $show['grade_client_review'] }}</span>
                                    <span class="grade-max">/ 10</span>
                                </div>
                            </div>
                            <span class="line"></span>
                            <div class="review-description">
                                <p>{{ $show['comment_client_review'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script src="js/reviews.js"></script>
@endsection

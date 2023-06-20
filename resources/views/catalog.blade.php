@extends('layouts.main')

@section('title')
    Каталог
@endsection

@section('main')
    <div class="container my-5">
        <h1 class="mb-4">Каталог</h1>
        <div class="row">
            <div class="col-lg-2">
                <div class="border shadow-sm p-3 rounded-1">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Поиск</label>
                        <input type="email" class="form-control form-control-sm" placeholder="по наименованию">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Бренд:</label>
                        <select class="form-select form-select-sm" aria-label="Default select example">
                            <option selected value="">Выбрать</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Размер:</label>
                        <select class="form-select form-select-sm" aria-label="Default select example">
                            <option selected value="">Выбрать</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Отверстия:</label>
                        <select class="form-select form-select-sm" aria-label="Default select example">
                            <option selected value="">Выбрать</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Цвет:</label>
                        <select class="form-select form-select-sm" aria-label="Default select example">
                            <option selected value="">Выбрать</option>
                        </select>
                    </div>
                    <button class="btn btn-sm btn-primary mb-3">Применить</button>
                    <button class="btn btn-sm btn-light">Сбросить</button>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="border shadow-sm p-2 rounded-1 p-4">
                    <div class="row g-4">
                        @foreach ($products as $product)
                            <div class="col-lg-6">
                                <a href="{{ route('product', ['product' => $product->id]) }}" class="text-decoration-none">
                                    <div class="product-card">
                                        <div class="d-flex justify-content-between mb-3">
                                            <div>
                                                <h5 class="">{{ $product->title }}</h5>
                                                <h6 class="text-secondary">{{ $product->model }}</h6>
                                            </div>
                                            <div>
                                                <span>от <span
                                                        class="fs-5 text-danger fw-bold">{{ number_format($product->price, 0, 0, ' ') }}
                                                        ₽</span></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <img class="w-100 mb-2" src="{{ asset($product->image) }}" alt="">
                                                <div class="hstack text-secondary justify-content-between">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                            height="10" fill="currentColor" class="bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                        </svg>
                                                    @endfor
                                                </div>
                                            </div>
                                            <div class="col-10 text-secondary">
                                                <div>
                                                    <small>Размер: {{ $product->size }}</small>
                                                </div>
                                                <div>
                                                    <small>Вылет: {{ $product->vilet }}</small>
                                                </div>
                                                <div>
                                                    <small>Диаметр стелицы: {{ $product->diament }}</small>
                                                </div>
                                                <div>
                                                    <small>Модель: {{ $product->model }}</small>
                                                </div>
                                                <div>
                                                    <small>Цвет производителя: {{ $product->color }}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

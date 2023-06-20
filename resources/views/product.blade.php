@extends('layouts.main')

@section('title')
    {{ $product->title }}
@endsection

@section('main')
    <div class="container my-5">
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <div class="">
                    <div class="d-flex justify-content-start align-items-center mb-3">
                        <h4 class="me-3 mb-0">{{ $product->title }}</h4>
                        <div class="hstack text-secondary justify-content-between">
                            @for ($i = 1; $i <= 5; $i++)
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                    class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            @endfor
                        </div>
                    </div>
                    <div class="mb-4 text-secondary">
                        <small>
                            Диск колёсный литой "{{ $product->model }} {{ $product->size }}, {{ $product->vilet }}, ET39,
                            {{ $product->diament }}, {{ $product->color }}"
                        </small>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <img class="w-100 mb-2 border shadow-sm" src="{{ asset($product->image) }}" alt="">
                        </div>
                        <div class="col-1"></div>
                        <div class="col-9 text-secondary">
                            <div class="d-flex align-items-center mb-4">
                                <span class="me-5">чт. 18:00</span>
                                <div class="d-flex align-items-center">
                                    <span class="me-3">от <span
                                            class="fs-5 text-danger fw-bold">{{ number_format($product->price, 0, 0, ' ') }}
                                            ₽</span></span>
                                    <form action="{{ route('core.product.cart.add', ['product' => $product->id]) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-warning">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <span><a href="{{ route('catalog') }}" class="text-decoration-none">Аналоги и другие
                                    предложения</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-body p-4 shadow-sm">
            <h4 class="mb-3">Параметры</h4>
            <div class="">
                <div class="row">
                    <div class="col-sm-8">
                        <div class=" card card-body rounded-0 bg-warning-subtle">
                            <div class="row gy-4">
                                <div class="col-sm-3 border-bottom ">Размер:</div>
                                <div class="col-sm-9">{{ $product->size }}</div>
                                <div class="col-sm-3 border-bottom ">Вылет:</div>
                                <div class="col-sm-9">{{ $product->vilet }}</div>
                                <div class="col-sm-3 border-bottom ">Диаметр стелицы:</div>
                                <div class="col-sm-9">{{ $product->diament }}</div>
                                <div class="col-sm-3 border-bottom ">Модель:</div>
                                <div class="col-sm-9">{{ $product->model }}</div>
                                <div class="col-sm-3 border-bottom ">Цвет производителя:</div>
                                <div class="col-sm-9">{{ $product->color }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

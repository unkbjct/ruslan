@extends('layouts.main')

@section('title')
    Exist.site
@endsection

@section('main')
    <div class="container my-5">

        <div class="bg-success-subtle border-start border-5 border-success rounded-1 p-3 mb-4">
            <div class="row">
                <div class="col-sm-1">
                    <img class="d-none d-sm-block" src="{{ asset('public/storage/slider-tools.svg') }}" alt="">
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-6">
                    <h4 class="text-success">Каталог инструментов</h4>
                    <p>Ручной, пневматический и электроинструмент</p>
                </div>
                <div class="col-sm-4 d-flex flex-column">
                    <div class="mt-auto">
                        <button class="btn btn-success btn-sm">Перейти в каталог</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="border rounded-1 shadow-sm p-3 mb-4">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <p>Запчасти для технического обслуживания</p>
                    <h4>Запчасти для технического <br> обслуживания</h4>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <img class="w-100" src="{{ asset('public/storage/avto-banner.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="mb-4">
            <div class="row">
                <div class="col-md-3">
                    <div class="px-xl-5 py-3 border shadow-sm">
                        <div class="px-lg-5 py-2 d-flex">
                            <img class="mx-auto" height="123px" src="{{ asset('public/storage/trans-oil.png') }}"
                                alt="">
                        </div>
                        <h5 class="text-center">Тормозные жидкости</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-warning px-5 py-3 border shadow-sm">
                        <div class="px-5 py-2 d-flex">
                            <img class="mx-auto" height="123px" src="{{ asset('public/storage/oil.png') }}" alt="">
                        </div>
                        <h5 class="text-center">Моторные масла</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="h-100 shadow-sm rounded">
                        <ul class="list-group d-flex flex-column">
                            <li class="list-group-item">
                                <a class="text-decoration-none" href="">Трансмиссионные масла</a>
                            </li>
                            <li class="list-group-item">
                                <a class="text-decoration-none" href="">Автокосметика</a>
                            </li>
                            <li class="list-group-item">
                                <a class="text-decoration-none" href="">Охлаждающие жидкости</a>
                            </li>
                            <li class="list-group-item">
                                <a class="text-decoration-none" href="">Жидкости для омывателя стекла</a>
                            </li>
                            <li class="list-group-item">
                                <a class="text-decoration-none" href="">Вся автохимия</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="border shadow-sm p-4">
            <h4 class="">Новости</h4>
            <hr class="mb-5">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-3">
                            <img class="w-100" src="{{ asset('public/storage/avto.png') }}" alt="">
                        </div>
                        <div class="col-9">
                            <code>08/06</code>
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis maiores iure sint
                                    mollitia reiciendis dolorem magni, vel quibusdam enim consectetur delectus ipsam eveniet
                                    natus, ducimus illo! Porro corporis earum tempora.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-3">
                            <img class="w-100" src="{{ asset('public/storage/avto.png') }}" alt="">
                        </div>
                        <div class="col-9">
                            <code>08/06</code>
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis maiores iure sint
                                    mollitia reiciendis dolorem magni, vel quibusdam enim consectetur delectus ipsam eveniet
                                    natus, ducimus illo! Porro corporis earum tempora.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-3">
                            <img class="w-100" src="{{ asset('public/storage/avto.png') }}" alt="">
                        </div>
                        <div class="col-9">
                            <code>08/06</code>
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis maiores iure sint
                                    mollitia reiciendis dolorem magni, vel quibusdam enim consectetur delectus ipsam eveniet
                                    natus, ducimus illo! Porro corporis earum tempora.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-3">
                            <img class="w-100" src="{{ asset('public/storage/avto.png') }}" alt="">
                        </div>
                        <div class="col-9">
                            <code>08/06</code>
                            <div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis maiores iure sint
                                    mollitia reiciendis dolorem magni, vel quibusdam enim consectetur delectus ipsam eveniet
                                    natus, ducimus illo! Porro corporis earum tempora.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

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
                <div class="border shadow-sm p-2 rounded-1">
                    asd
                </div>
            </div>
        </div>
    </div>
@endsection

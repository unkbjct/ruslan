@extends('layouts.main')

@section('main')
    <div class="container my-5">
        <h3 class="mb-4">Товары</h3>
        <button class="btn btn-sm btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modal-create">
            Добавить товар
        </button>
        <form action="" class="d-flex">
            <div class="me-3">
                <input type="email" class="form-control form-control-sm" name="id" placeholder="идентификатор">
            </div>
            <div>
                <input type="email" class="form-control form-control-sm" name="name" placeholder="Название">
            </div>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Категория</th>
                    <th scope="col">Цена</th>
                    <th scope="col">Обновлено</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>
                            <form action="{{ route('core.admin.product.remove', ['product' => $product->id]) }}"
                                method="post">
                                @csrf
                                <button class="btn btn-sm btn-danger">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <div class="modal fade" id="modal-create">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Добавление товара</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-4" method="POST" action="{{ route('core.admin.product.create') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-6">
                            <div>
                                <label class="form-label">Название</label>
                                <input name="title" required type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <label class="form-label">Категория</label>
                                <input name="category" required type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div>
                                <label class="form-label">Изображение</label>
                                <input name="image" required type="file" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div>
                                <label class="form-label">Цена</label>
                                <input name="price" required type="number" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div>
                                <label class="form-label">Модель</label>
                                <input name="model" required type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div>
                                <label class="form-label">Размер</label>
                                <input name="size" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div>
                                <label class="form-label">Вылет</label>
                                <input name="vilet" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div>
                                <label class="form-label">Диаметр стулицы</label>
                                <input name="diament" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div>
                                <label class="form-label">Цвет производителя</label>
                                <input name="color" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div>
                                <button class="btn btn-sm btn-primary">Добавить товар</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

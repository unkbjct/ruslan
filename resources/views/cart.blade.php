@extends('layouts.main')

@section('title')
    Корзина
@endsection

@section('main')
    <div class="container my-5">
        <h1>Корзина</h1>
        <table class="table border">
            <thead>
                <tr>
                    <th scope="col" style="background-color: #cfe2ff">Наименования</th>
                    <th scope="col" style="background-color: #cfe2ff"></th>
                    <th scope="col" style="background-color: #cfe2ff">кол-во</th>
                    <th scope="col" style="background-color: #cfe2ff">цена</th>
                    <th scope="col" style="background-color: #cfe2ff">итого</th>
                    <th scope="col" style="background-color: #cfe2ff"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr class="border-bottom">
                        <td class="bg-success-subtle">{{ $product->title }}</td>
                        <td class="bg-success-subtle"></td>
                        <td class="bg-success-subtle">
                            <form action="{{ route('core.product.cart.edit', ['product' => $product->id]) }}"
                                method="POST">
                                @csrf
                                <div class="input-group input-group-sm">
                                    <input type="text" style="max-width: 60px"
                                        class="text-end pe-3 form-control form-control-sm count-input" name="count"
                                        value="{{ $product->count }}">
                                    <span class="input-group-text">шт.</span>
                                </div>
                            </form>
                        </td>
                        <td class="bg-success-subtle">{{ $product->price }}</td>
                        <td class="bg-success-subtle">{{ $product->amount }}</td>
                        <td class="bg-success-subtle">
                            <form action="{{ route('core.product.cart.remove', ['product' => $product->id]) }}"
                                method="POST">
                                @csrf
                                <button class="btn btn-sm btn-danger d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <td colspan="10" class="bg-success-subtle text-center p-2 text-secondary">на данный момент у вас нет товаров в корзине</td>
                @endforelse
            </tbody>
        </table>
    </div>
    <script>
        document.querySelectorAll(".count-input").forEach(e => {
            e.addEventListener("change", function() {
                // console.log()
                this.parentElement.parentElement.submit()
            })
        })
    </script>
@endsection

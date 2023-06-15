<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('public/css/main.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>@yield('title')</title>
</head>

<body>
    <div class="wrapper">
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container align-items-end">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('public/storage/logo.svg') }}" alt="Logo" width="150" height="75"
                            class="d-inline-block align-text-top">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse pb-lg-3 mt-4 mt-lg-0" id="navbarSupportedContent">
                        {{-- <div class="py-lg-3 mt-4 mt-lg-0 d-flex"> --}}
                        <form class="d-flex mb-3 mb-lg-0 me-auto" role="search">
                            <div class="input-group">
                                <input class="form-control border-secondary-subtle" type="search"
                                    placeholder="Поиск по сайту" aria-label="Search">
                                <button class="btn btn-light bg-white border-start-0 border-secondary-subtle"
                                    type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item mb-3 mb-lg-0 me-2">
                                <a class="btn btn-secondary d-flex align-items-center">
                                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                                        <path
                                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                    </svg>
                                    <span>Корзина</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3 mb-lg-0 me-2">
                                @if (Auth::check())
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown">
                                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20"
                                                height="20" fill="currentColor" class="bi bi-person-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                            </svg>
                                            <span>{{ Auth::user()->name }}</span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ route('user') }}">Личный кабинет</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('core.user.logout') }}">Выйти</a></li>
                                        </ul>
                                    </div>
                                @else
                                    <button data-bs-toggle="modal" data-bs-target="#modal-login"
                                        class="btn btn-secondary d-flex align-items-center">
                                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20"
                                            height="20" fill="currentColor" class="bi bi-person-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                        </svg>
                                        <span>Войти</span>
                                    </button>
                                @endif
                            </li>
                        </ul>
                        {{-- </div> --}}
                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg bg-primary">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            {{-- <li class="nav-item me-4 dropdown">
                                <a class="nav-link text-white d-flex align-items-center" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                    </svg>
                                    <span>Каталог</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li> --}}
                            <li class="nav-item me-4">
                                <a class="nav-link text-white d-flex align-items-center" href="{{ route('catalog') }}">
                                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                    </svg>
                                    <span>Каталог</span>
                                </a>
                            </li>
                            <li class="nav-item me-4">
                                <a class="nav-link text-white" aria-current="page" href="#">Запрос по VIN</a>
                            </li>
                            <li class="nav-item me-4">
                                <a class="nav-link text-white" href="#">Автоточки</a>
                            </li>
                            <li class="nav-item me-4">
                                <a class="nav-link text-white" href="#">Форум</a>
                            </li>
                            <li class="nav-item me-4">
                                <a class="nav-link text-white" href="#">Клуб</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            @yield('main')

            @guest
                <div class="modal fade" id="modal-login">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h1 class="modal-title fs-5 mb-4">Личный кабинет</h1>
                                <form action="{{ route('core.user.login') }}" method="POST">
                                    @csrf
                                    <input class="mb-3 form-control" type="text" placeholder="Почта" name="email">
                                    <input class="mb-3 form-control" type="password" name="password" placeholder="*****"
                                        name="password">

                                    <div class="d-flex justify-content-between">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember">
                                            <label class="form-check-label" for="remember">
                                                Запомнить
                                            </label>
                                        </div>
                                        <button class="btn btn-primary">Войти</button>
                                    </div>
                                </form>
                                <hr>
                                <p class="text-center">Нет аккаунта, <a data-bs-toggle="modal"
                                        data-bs-target="#modal-registration" href="">создайте его</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modal-registration">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h1 class="modal-title fs-5 mb-4">Регистрация</h1>
                                <form action="{{ route('core.user.registration') }}" method="POST">
                                    @csrf
                                    <input class="mb-3 form-control" type="text" placeholder="Почта" name="email">
                                    <input class="mb-3 form-control" type="text" placeholder="Телефон"
                                        name="phone">
                                    <input class="mb-3 form-control" type="text" placeholder="Имя" name="name">
                                    <input class="mb-3 form-control" type="text" placeholder="Фамилия"
                                        name="surname">
                                    <input class="mb-3 form-control" type="text" placeholder="Отчество"
                                        name="otchestvo">
                                    <input class="mb-3 form-control" type="password" name="password"
                                        placeholder="Пароль" name="password">
                                    <input class="mb-3 form-control" type="password" name="password-confirm"
                                        placeholder="Подтверждение пароля" name="password">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            С <a href="">условиями использования</a> ресурсов exist.ru ознакомлен и
                                            согласен
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-primary">Создать аккаунт</button>
                                    </div>
                                </form>
                                <hr>
                                <p class="text-center">Есть аккаунт, <a data-bs-toggle="modal"
                                        data-bs-target="#modal-login" href="">войдите в него</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endguest

            <div class="modal fade" id="modal-errors">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="d-flex align-items-center mb-4">
                                <svg class="me-2 text-danger" xmlns="http://www.w3.org/2000/svg" width="30"
                                    height="30" fill="currentColor" class="bi bi-exclamation-triangle-fill"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>
                                <h1 class="modal-title fs-5">Ошибка</h1>
                            </div>
                            <hr>
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </main>
        <footer style="background: #d9e5e8">
            <div class="container">
                <div class="pt-5">
                    <div class="row">
                        <div class="col-6 col-md-2 mb-3">
                            <h5>О компании</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">О компании</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Об Exist.ru</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Адреса офисов</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Связаться с нами</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Вакансии</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Новости</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Статистика</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Правовая информация</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-md-2 mb-3">
                            <h5>Интернет магазин</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Поиск автозапчастей и аксессуаров</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Доставка заказа</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Как оплатить заказ</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Условия возврата и гарантии</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Стать клиентом</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Восстановить пароль</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Форумы</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Помощь</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-md-2 mb-3">
                            <h5>Каталог товаров</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Каталоги автозапчастей</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Все для автосервиса</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Шины, диски</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Масла и ГСМ</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Аккумуляторы</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Аксессуары</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Мотокаталоги</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Автолитература</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Автоэлектроника</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-2 mb-3">
                            <h5>Партнерство</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Как стать партнером</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Таблица скидок</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Регионам</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Поставщикам</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Юридическим лицам</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Производителям</a></li>
                                <li class="nav-item mb-2"><a href="#"
                                        class="nav-link p-0 text-body-secondary">Партнерские программы</a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="d-flex flex-column flex-sm-row justify-content-between pt-4 my-4 border-top">
                        <p>© Exist.ru 1998—2023.</p>
                        <ul class="list-unstyled d-flex">
                            <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi"
                                        width="24" height="24">
                                        <use xlink:href="#twitter"></use>
                                    </svg></a></li>
                            <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi"
                                        width="24" height="24">
                                        <use xlink:href="#instagram"></use>
                                    </svg></a></li>
                            <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi"
                                        width="24" height="24">
                                        <use xlink:href="#facebook"></use>
                                    </svg></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    @if ($errors->any())
        <script>
            const modalErrors = new bootstrap.Modal('#modal-errors')
            modalErrors.show();
        </script>
    @endif
</body>

</html>

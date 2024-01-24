@extends('admin.layouts.master')
@section('admin.title', 'Панель администратора - Заказы')

@section('admin.content')
    <div class="card">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h2>Заказы</h2>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main') }}">Главная страница</a></li>
                            <li class="breadcrumb-item active">Заказы</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <div class="card-body pt-0">

            {{-- поиск--}}
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="col-sm-12 d-flex justify-content-end p-0">
                    <form action="{{ route('admin.orders') }}" method="GET">
                        <div id="example1_filter" class="dataTables_filter">
                            <label>Поиск:<input type="search" class="form-control form-control-sm " name="keyword" placeholder="Введите телефон" aria-controls="example1" value="{{ old('keyword', $keyword) }}"></label>
                            <button type="submit" class="btn btn-primary btn-sm mb-1">Искать</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Телефон</th>
                                <th scope="col">Когда отправлен</th>
                                <th scope="col">Сумма</th>
                                <th scope="col">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    {{--                   // @dd($product)--}}
                                    <th scope="row">{{ $order->id }}</th>
                                    <td>{{ $order->phone }}</td>
                                    <td>{{ $order->created_at->format('H:i d/m/Y') }}</td>
                                    <td>{{ $order->calculateFullSum() }}  ₽</td>
                                    <td>
                                        <a href="{{ route('admin.orders.show', $order) }}" class="btn btn-primary">Открыть</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                        <div id="pagination" class="d-flex justify-content-start mt-3">
                            {{ $orders->links() }}
                        </div>



                </div>
            </div>
        </div>

    </div>
@endsection




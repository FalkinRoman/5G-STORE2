@extends('admin.layouts.master')
@section('admin.title', 'Панель администратора - Главная')

@section('admin.content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Главная</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a>Главная</a></li>
                    </ol>
                </div>
            </div>
        </div>

    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Боксы вверху -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $orderCount }}</h3>

                            <p>Заказы</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{ route('admin.orders') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $productCount}}<sup style="font-size: 20px"></sup></h3>

                            <p>Продукты</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{ route('admin.products.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $userCount }}</h3>

                            <p>Пользователи</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{ route('admin.users.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{$reviewCount}}</h3>

                            <p>Отзывы</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>

            //календарь
            <div class="card bg-gradient-success">
                <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">
                        <i class="far fa-calendar-alt"></i>
                        Calendar
                    </h3>

                    <div class="card-tools">

                        <div class="btn-group show">
                            <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52" aria-expanded="true">
                                <i class="fas fa-bars"></i>
                            </button>
                            <div class="dropdown-menu show" role="menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-52px, 31px, 0px);">
                                <a href="#" class="dropdown-item">Add new event</a>
                                <a href="#" class="dropdown-item">Clear events</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">View calendar</a>
                            </div>
                        </div>
                        <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                </div>

                <div class="card-body pt-0">

                    <div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">January 2024</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="12/31/2023" class="day old weekend">31</td><td data-action="selectDay" data-day="01/01/2024" class="day">1</td><td data-action="selectDay" data-day="01/02/2024" class="day">2</td><td data-action="selectDay" data-day="01/03/2024" class="day">3</td><td data-action="selectDay" data-day="01/04/2024" class="day">4</td><td data-action="selectDay" data-day="01/05/2024" class="day">5</td><td data-action="selectDay" data-day="01/06/2024" class="day weekend">6</td></tr><tr><td data-action="selectDay" data-day="01/07/2024" class="day weekend">7</td><td data-action="selectDay" data-day="01/08/2024" class="day">8</td><td data-action="selectDay" data-day="01/09/2024" class="day">9</td><td data-action="selectDay" data-day="01/10/2024" class="day">10</td><td data-action="selectDay" data-day="01/11/2024" class="day">11</td><td data-action="selectDay" data-day="01/12/2024" class="day">12</td><td data-action="selectDay" data-day="01/13/2024" class="day weekend">13</td></tr><tr><td data-action="selectDay" data-day="01/14/2024" class="day weekend">14</td><td data-action="selectDay" data-day="01/15/2024" class="day">15</td><td data-action="selectDay" data-day="01/16/2024" class="day">16</td><td data-action="selectDay" data-day="01/17/2024" class="day">17</td><td data-action="selectDay" data-day="01/18/2024" class="day">18</td><td data-action="selectDay" data-day="01/19/2024" class="day">19</td><td data-action="selectDay" data-day="01/20/2024" class="day weekend">20</td></tr><tr><td data-action="selectDay" data-day="01/21/2024" class="day weekend">21</td><td data-action="selectDay" data-day="01/22/2024" class="day">22</td><td data-action="selectDay" data-day="01/23/2024" class="day">23</td><td data-action="selectDay" data-day="01/24/2024" class="day active today">24</td><td data-action="selectDay" data-day="01/25/2024" class="day">25</td><td data-action="selectDay" data-day="01/26/2024" class="day">26</td><td data-action="selectDay" data-day="01/27/2024" class="day weekend">27</td></tr><tr><td data-action="selectDay" data-day="01/28/2024" class="day weekend">28</td><td data-action="selectDay" data-day="01/29/2024" class="day">29</td><td data-action="selectDay" data-day="01/30/2024" class="day">30</td><td data-action="selectDay" data-day="01/31/2024" class="day">31</td><td data-action="selectDay" data-day="02/01/2024" class="day new">1</td><td data-action="selectDay" data-day="02/02/2024" class="day new">2</td><td data-action="selectDay" data-day="02/03/2024" class="day new weekend">3</td></tr><tr><td data-action="selectDay" data-day="02/04/2024" class="day new weekend">4</td><td data-action="selectDay" data-day="02/05/2024" class="day new">5</td><td data-action="selectDay" data-day="02/06/2024" class="day new">6</td><td data-action="selectDay" data-day="02/07/2024" class="day new">7</td><td data-action="selectDay" data-day="02/08/2024" class="day new">8</td><td data-action="selectDay" data-day="02/09/2024" class="day new">9</td><td data-action="selectDay" data-day="02/10/2024" class="day new weekend">10</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2024</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month active">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year active">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

@endsection




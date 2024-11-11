{{-- START --}}
<div class="container text-center content-container">
    <div class="row mb-5">
        {{-- START OF SIDE BAR --}}
        <div class="col-lg-1"></div>
        <div class="col-lg-1">
            <div class="container">
                <div class="row">
                    @include('general.kuwago-one.sidebar')
                </div>
            </div>
        </div>
        {{-- END OF SIDE BAR --}} {{-- START OF CONTENTS--}}
        <div class="col-lg-9 p-3 kuwago1Main">
            <div class="row">
                <div class="col-lg-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 card-boxKuwago1">
                                <div class="col-lg-12 d-flex align-items-center mt-2">
                                    <i class="fa-solid fa-money-bill-trend-up kuwago1Icons">
                                        <span style="font-family: serif; font-size: 18px;">Total Sales</span>
                                    </i>
                                </div>
                                <div class="col-lg-12d-flex align-items-center mt-3" style="font-size: 25px; font-weight: bold;">
                                    <p>₱{{$totalSales}}</p>
                                </div>
                            </div>

                            <div class="col-lg-6 card-boxKuwago1">
                                <div class="col-lg-12 d-flex align-items-center mt-2">
                                    <i class="fa-solid fa-hand-holding-dollar kuwago1Icons">
                                        <span style="font-family: serif; font-size: 18px;">Total Profit</span>
                                    </i>
                                </div>
                                <div class="col-lg-12d-flex align-items-center mt-3" style="font-size: 25px; font-weight: bold;">
                                    <p>₱{{$totalProfit}}</p>
                                </div>
                            </div>

                            <div class="col-lg-6 card-boxKuwago1">
                                <div class="col-lg-12 d-flex align-items-center mt-2">
                                    <i class="fa-brands fa-shopify kuwago1Icons">
                                        <span style="font-family: serif; font-size: 18px;">Total Expenses</span>
                                    </i>
                                </div>
                                <div class="col-lg-12d-flex align-items-center mt-3" style="font-size: 25px; font-weight: bold;">
                                    <p>₱{{$totalExpenses}}</p>
                                </div>
                            </div>

                            <div class="col-lg-6 card-boxKuwago1">
                                <div class="col-lg-12 d-flex align-items-center mt-2">
                                    <i class="fa-solid fa-cart-shopping kuwago1Icons">
                                        <span style="font-family: serif; font-size: 18px;">Total Orders</span>
                                    </i>
                                </div>
                                <div class="col-lg-12d-flex align-items-center mt-3" style="font-size: 25px; font-weight: bold;">
                                    <p>{{$totalOrders}}</p>
                                </div>
                            </div>

                            <div class="col-lg-12 card-targetSales">
                                <div class="col-lg-12 d-flex align-items-center mt-2">
                                    <i class="fa-solid fa-piggy-bank kuwago1Icons">
                                        <span style="font-family: serif; font-size: 18px;">Target Sales</span>
                                    </i>
                                </div>
                                <div class="col-lg-12d-flex align-items-center mt-3" style="font-size: 25px; font-weight: bold;">
                                    <p><i class="fa-solid fa-peso-sign"></i>5,000.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 chartsKuwago1" style="height: 265px; position: relative;">
                                <canvas id="myChart"></canvas>
                                <form action="{{ route('refresh.data') }}" method="GET" style="position: absolute; top: 1px; right: 10px;">
                                    <button type="submit" class="btn btn-link p-0" style="color: #007bff;">
                                        <i class="fas fa-sync-alt fa-lg"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-start" style="color: #fff; font-weight: bold;">
                            <p>Compare With</p>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 compare">
                                <div class="glass-bg">
                                    <select id="dateFilterLeft" onchange="handleFilterChangeleft()">
                                        <option value="thisweek" selected>This Week</option>
                                        <option value="today">Today</option>
                                        <option value="yesterday">Yesterday</option>
                                        <option value="last3days">Last 3 Days</option>
                                        <option value="last5days">Last 5 Days</option>
                                        <option value="last7days">Last 7 Days</option>
                                        <option value="lastweek">Last Week</option>
                                        <option value="thismonth">This Month</option>
                                        <option value="lastmonth">Last Month</option>
                                        <option value="thisyear">This Year</option>
                                        <option value="lastyear">Last Year</option>
                                        <option value="overall">Overall</option>
                                        <option value="custom">Custom</option>
                                    </select>
                                </div>
                                <div class="mt-2"><i class="fas fa-dollar-sign"></i> Total Profit: ₱ 000,000</div>
                                <div><i class="fas fa-chart-line"></i> Total Sales: ₱ 000,000</div>
                                <div><i class="fas fa-money-bill-wave"></i> Total Expenses: ₱ 000,000</div>
                                <div><i class="fas fa-shopping-cart"></i> Total Orders:</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
    {{-- END OF CONTENTS--}}
</div>
{{-- END--}}

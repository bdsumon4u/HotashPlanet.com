<x-app-layout>
    <x-slot name="header">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2 text-center text-sm-left">
            <div class="flex-sm-fill">
                <h1 class="h3 font-w700 mb-2">
                    Main Dashboard
                </h1>
                <h2 class="h6 font-w500 text-muted mb-0">
                    Welcome <a class="font-w600" href="javascript:void(0)">Adam</a>, everything looks great.
                </h2>
            </div>
            <div class="mt-3 mt-sm-0 ml-sm-3">
                <button type="button" class="btn btn-sm btn-alt-primary">
                    <i class="fa fa-cog"></i>
                </button>
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-sm btn-alt-primary" id="dropdown-analytics-overview" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-calendar-alt"></i>
                        Last 30 days
                        <i class="fa fa-fw fa-angle-down"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right font-size-sm" aria-labelledby="dropdown-analytics-overview">
                        <a class="dropdown-item font-w500" href="javascript:void(0)">This Week</a>
                        <a class="dropdown-item font-w500" href="javascript:void(0)">Previous Week</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item font-w500" href="javascript:void(0)">This Month</a>
                        <a class="dropdown-item font-w500" href="javascript:void(0)">Previous Month</a>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="row row-deck">
        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700">32</dt>
                        <dd class="text-muted mb-0">Pending Orders</dd>
                    </dl>
                    <div class="item item-rounded bg-body">
                        <i class="fa fa-shopping-cart font-size-h3 text-primary"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                    <a class="font-w500 d-flex align-items-center" href="javascript:void(0)">
                        View all orders
                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700">124</dt>
                        <dd class="text-muted mb-0">New Customers</dd>
                    </dl>
                    <div class="item item-rounded bg-body">
                        <i class="fa fa-users font-size-h3 text-primary"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                    <a class="font-w500 d-flex align-items-center" href="javascript:void(0)">
                        View all customers
                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700">45</dt>
                        <dd class="text-muted mb-0">Messages</dd>
                    </dl>
                    <div class="item item-rounded bg-body">
                        <i class="fa fa-inbox font-size-h3 text-primary"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                    <a class="font-w500 d-flex align-items-center" href="javascript:void(0)">
                        View all messages
                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700">4.5%</dt>
                        <dd class="text-muted mb-0">Conversion Rate</dd>
                    </dl>
                    <div class="item item-rounded bg-body">
                        <i class="fa fa-chart-line font-size-h3 text-primary"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                    <a class="font-w500 d-flex align-items-center" href="javascript:void(0)">
                        View statistics
                        <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8 d-flex flex-column">
            <div class="block block-rounded flex-grow-1 d-flex flex-column">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Earnings Summary</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option">
                            <i class="si si-settings"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full flex-grow-1 d-flex align-items-center">
                    <canvas class="js-chartjs-earnings"></canvas>
                </div>
                <div class="block-content bg-body-light">
                    <div class="row items-push text-center w-100">
                        <div class="col-sm-4">
                            <dl class="mb-0">
                                <dt class="font-size-h3 font-w700">
                                    <i class="fa fa-arrow-up font-size-lg text-success"></i> 2.5%
                                </dt>
                                <dd class="text-muted mb-0">Customer Growth</dd>
                            </dl>
                        </div>
                        <div class="col-sm-4">
                            <dl class="mb-0">
                                <dt class="font-size-h3 font-w700">
                                    <i class="fa fa-arrow-up font-size-lg text-success"></i> 3.8%
                                </dt>
                                <dd class="text-muted mb-0">Page Views</dd>
                            </dl>
                        </div>
                        <div class="col-sm-4">
                            <dl class="mb-0">
                                <dt class="font-size-h3 font-w700">
                                    <i class="fa fa-arrow-up font-size-lg text-success"></i> 1.7%
                                </dt>
                                <dd class="text-muted mb-0">New Products</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 d-flex flex-column">
            <div class="row row-deck flex-grow-1">
                <div class="col-md-6 col-xl-12">
                    <div class="block block-rounded d-flex flex-column">
                        <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between">
                            <dl class="mb-0">
                                <dt class="font-size-h2 font-w700">570</dt>
                                <dd class="text-muted mb-0">Total Orders</dd>
                            </dl>
                            <div>
                                <div class="d-inline-block px-2 py-1 rounded-lg font-size-sm font-w600 text-danger bg-danger-light">
                                    <i class="fa fa-caret-down mr-1"></i>
                                    2.2%
                                </div>
                            </div>
                        </div>
                        <div class="block-content p-1 text-center overflow-hidden">
                            <span class="js-sparkline" data-type="line"
                                  data-points="[33,29,32,37,38,30,34,28,43,45,26,45,49,39]"
                                  data-width="100%"
                                  data-height="70px"
                                  data-chart-range-min="20"
                                  data-line-color="rgba(210, 108, 122, .4)"
                                  data-fill-color="rgba(210, 108, 122, .15)"
                                  data-spot-color="transparent"
                                  data-min-spot-color="transparent"
                                  data-max-spot-color="transparent"
                                  data-highlight-spot-color="#D26C7A"
                                  data-highlight-line-color="#D26C7A"
                                  data-tooltip-suffix="Orders"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-12">
                    <div class="block block-rounded d-flex flex-column">
                        <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between">
                            <dl class="mb-0">
                                <dt class="font-size-h2 font-w700">$5,234.21</dt>
                                <dd class="text-muted mb-0">Total Earnings</dd>
                            </dl>
                            <div>
                                <div class="d-inline-block px-2 py-1 rounded-lg font-size-sm font-w600 text-success bg-success-light">
                                    <i class="fa fa-caret-up mr-1"></i>
                                    4.2%
                                </div>
                            </div>
                        </div>
                        <div class="block-content p-1 text-center oveflow-hidden">
                            <span class="js-sparkline" data-type="line"
                                  data-points="[716,1185,750,1365,956,890,1200,968,1158,1025,920,1190,720,1352]"
                                  data-width="100%"
                                  data-height="70px"
                                  data-chart-range-min="300"
                                  data-line-color="rgba(70,195,123, .4)"
                                  data-fill-color="rgba(70,195,123, .15)"
                                  data-spot-color="transparent"
                                  data-min-spot-color="transparent"
                                  data-max-spot-color="transparent"
                                  data-highlight-spot-color="#46C37B"
                                  data-highlight-line-color="#46C37B"
                                  data-tooltip-prefix="$"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="block block-rounded d-flex flex-column">
                        <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between">
                            <dl class="mb-0">
                                <dt class="font-size-h2 font-w700">264</dt>
                                <dd class="text-muted mb-0">New Customers</dd>
                            </dl>
                            <div>
                                <div class="d-inline-block px-2 py-1 rounded-lg font-size-sm font-w600 text-success bg-success-light">
                                    <i class="fa fa-caret-up mr-1"></i>
                                    9.3%
                                </div>
                            </div>
                        </div>
                        <div class="block-content p-1 text-center oveflow-hidden">
                            <span class="js-sparkline" data-type="line"
                                  data-points="[25,15,36,14,29,19,36,41,28,26,29,33,23,41]"
                                  data-width="100%"
                                  data-height="70px"
                                  data-chart-range-min="0"
                                  data-line-color="rgba(70,195,123, .4)"
                                  data-fill-color="rgba(70,195,123, .15)"
                                  data-spot-color="transparent"
                                  data-min-spot-color="transparent"
                                  data-max-spot-color="transparent"
                                  data-highlight-spot-color="#46C37B"
                                  data-highlight-line-color="#46C37B"
                                  data-tooltip-prefix="$"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Recent Orders</h3>
            <div class="block-options">
                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="class-toggle" data-target="#one-dashboard-search-orders" data-class="d-none">
                    <i class="fa fa-search"></i>
                </button>
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-sm btn-alt-primary" id="dropdown-recent-orders-filters" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-flask"></i>
                        Filters
                        <i class="fa fa-angle-down ml-1"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right font-size-sm" aria-labelledby="dropdown-recent-orders-filters">
                        <a class="dropdown-item font-w500 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                            Pending..
                            <span class="badge badge-primary badge-pill">35</span>
                        </a>
                        <a class="dropdown-item font-w500 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                            Processing
                            <span class="badge badge-primary badge-pill">15</span>
                        </a>
                        <a class="dropdown-item font-w500 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                            For Delivery
                            <span class="badge badge-primary badge-pill">20</span>
                        </a>
                        <a class="dropdown-item font-w500 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                            Canceled
                            <span class="badge badge-primary badge-pill">72</span>
                        </a>
                        <a class="dropdown-item font-w500 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                            Delivered
                            <span class="badge badge-primary badge-pill">890</span>
                        </a>
                        <a class="dropdown-item font-w500 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                            All
                            <span class="badge badge-primary badge-pill">997</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="one-dashboard-search-orders" class="block-content border-bottom d-none">
            <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                <div class="form-group push">
                    <div class="input-group">
                        <input type="text" class="form-control" id="one-ecom-orders-search" name="one-ecom-orders-search" placeholder="Search recent orders..">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="block-content">
            <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 120px;">Order ID</th>
                        <th class="d-none d-sm-table-cell">Created</th>
                        <th class="d-none d-xl-table-cell">Customer</th>
                        <th>Status</th>
                        <th class="d-none d-xl-table-cell text-center">Products</th>
                        <th class="d-none d-sm-table-cell text-center">Profit</th>
                        <th class="d-none d-sm-table-cell text-right">Value</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">
                                <strong>ORD.00965</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">6 min ago</td>
                        <td class="d-none d-xl-table-cell font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">Brian Cruz</a>
                        </td>
                        <td>
                            <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-success-light text-success">Delivered</span>
                        </td>
                        <td class="d-none d-xl-table-cell text-center font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">6</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                            <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">14%</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-right font-size-sm">
                            <strong>$566,21</strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">
                                <strong>ORD.00964</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">4 min ago</td>
                        <td class="d-none d-xl-table-cell font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">Ryan Flores</a>
                        </td>
                        <td>
                            <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-warning-light text-warning">Processing</span>
                        </td>
                        <td class="d-none d-xl-table-cell text-center font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">4</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                            <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">7%</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-right font-size-sm">
                            <strong>$1550,89</strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">
                                <strong>ORD.00963</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">15 min ago</td>
                        <td class="d-none d-xl-table-cell font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">Helen Jacobs</a>
                        </td>
                        <td>
                            <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-info-light text-info">For delivery</span>
                        </td>
                        <td class="d-none d-xl-table-cell text-center font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">1</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                            <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">10%</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-right font-size-sm">
                            <strong>$687,57</strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">
                                <strong>ORD.00962</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">10 min ago</td>
                        <td class="d-none d-xl-table-cell font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">Amber Harvey</a>
                        </td>
                        <td>
                            <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-warning-light text-warning">Processing</span>
                        </td>
                        <td class="d-none d-xl-table-cell text-center font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">5</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                            <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">5%</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-right font-size-sm">
                            <strong>$38,51</strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">
                                <strong>ORD.00961</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">7 min ago</td>
                        <td class="d-none d-xl-table-cell font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">Ralph Murray</a>
                        </td>
                        <td>
                            <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-warning-light text-warning">Processing</span>
                        </td>
                        <td class="d-none d-xl-table-cell text-center font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">3</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                            <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">21%</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-right font-size-sm">
                            <strong>$447,35</strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">
                                <strong>ORD.00960</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">3 min ago</td>
                        <td class="d-none d-xl-table-cell font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">Laura Carr</a>
                        </td>
                        <td>
                            <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-danger-light text-danger">Canceled</span>
                        </td>
                        <td class="d-none d-xl-table-cell text-center font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">8</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                            <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">6%</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-right font-size-sm">
                            <strong>$1879,15</strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">
                                <strong>ORD.00959</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">16 min ago</td>
                        <td class="d-none d-xl-table-cell font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">Jesse Fisher</a>
                        </td>
                        <td>
                            <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-success-light text-success">Delivered</span>
                        </td>
                        <td class="d-none d-xl-table-cell text-center font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">6</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                            <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">20%</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-right font-size-sm">
                            <strong>$756,18</strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">
                                <strong>ORD.00958</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">8 min ago</td>
                        <td class="d-none d-xl-table-cell font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">Helen Jacobs</a>
                        </td>
                        <td>
                            <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-success-light text-success">Delivered</span>
                        </td>
                        <td class="d-none d-xl-table-cell text-center font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">5</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                            <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">13%</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-right font-size-sm">
                            <strong>$1961,46</strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">
                                <strong>ORD.00957</strong>
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">11 min ago</td>
                        <td class="d-none d-xl-table-cell font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">Carol Ray</a>
                        </td>
                        <td>
                            <span class="font-size-sm font-w600 px-2 py-1 rounded  bg-success-light text-success">Delivered</span>
                        </td>
                        <td class="d-none d-xl-table-cell text-center font-size-sm">
                            <a class="font-w600" href="javascript:void(0)">7</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                            <span class="font-size-sm font-w600 px-2 py-1 rounded bg-body-dark">3%</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-right font-size-sm">
                            <strong>$2056,89</strong>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <nav aria-label="Photos Search Navigation">
                <ul class="pagination pagination-sm justify-content-end mt-2">
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                            Prev
                        </a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="javascript:void(0)">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)" aria-label="Next">
                            Next
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js"></script>
        <script src="{{ asset('js/dashboard.min.js') }}"></script>
        <script>jQuery(function(){ One.helpers(['sparkline']); });</script>
    @endpush
</x-app-layout>

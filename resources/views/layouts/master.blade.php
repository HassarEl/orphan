<!DOCTYPE html>
<html lang="en" dir="ltr">

@include('layouts.head')

<body class="layout-default">

    @include('layouts.header')

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">

            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
                <div class="mdk-drawer-layout__content page">




                    <div class="container-fluid  page__heading-container">
                        <div class="page__heading">

                            <div class="d-flex align-items-center">
                                <div>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb mb-0">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                        </ol>
                                    </nav>
                                    <h1 class="m-0">Dashboard</h1>
                                </div>
                                <div class="ml-auto">
                                    <a href="" class="btn btn-light"><i class="material-icons icon-16pt text-muted mr-1">settings</i> Settings</a>
                                </div>
                            </div>
                        </div>
                    </div>











                    <div class="container-fluid page__container">
                        <div class="row card-group-row">
                            <div class="col-lg-3 col-md-4 card-group-row__col">
                                <div class="card card-group-row__card card-shadow">
                                    <div class="p-2 d-flex flex-row align-items-center">
                                        <div class="avatar avatar-xs mr-2">
                                            <span class="avatar-title rounded-circle text-center bg-primary">
                                                <i class="material-icons text-white icon-18pt">business</i>
                                            </span>
                                        </div>
                                        <a href="#" class="text-dark">
                                            <strong>Companies</strong>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 card-group-row__col">
                                <div class="card card-group-row__card card-shadow">
                                    <div class="p-2 d-flex flex-row align-items-center">
                                        <div class="avatar avatar-xs mr-2">
                                            <span class="avatar-title rounded-circle text-center">
                                                <i class="material-icons text-white icon-18pt">person_add</i>
                                            </span>
                                        </div>
                                        <a href="#" class="text-dark">
                                            <strong>Create New User</strong>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 card-group-row__col">
                                <div class="card card-group-row__card card-shadow">
                                    <div class="p-2 d-flex flex-row align-items-center">
                                        <div class="avatar avatar-xs mr-2">
                                            <span class="avatar-title rounded-circle text-center bg-success">
                                                <i class="material-icons text-white icon-18pt">receipt</i>
                                            </span>
                                        </div>
                                        <a href="#" class="text-dark">
                                            <strong>Manage Invoices</strong>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 card-group-row__col">
                                <div class="card card-group-row__card card-shadow">
                                    <div class="p-2 d-flex flex-row align-items-center">
                                        <div class="avatar avatar-xs mr-2">
                                            <span class="avatar-title rounded-circle text-center bg-info">
                                                <i class="material-icons text-white icon-18pt">monetization_on</i>
                                            </span>
                                        </div>
                                        <a href="#" class="text-dark">
                                            <strong>Earnings</strong>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 card-group-row__col">
                                <div class="card card-group-row__card card-shadow">
                                    <div class="p-2 d-flex flex-row align-items-center">
                                        <div class="avatar avatar-xs mr-2">
                                            <span class="avatar-title rounded-circle text-center bg-purple">
                                                <i class="material-icons text-white icon-18pt">shop</i>
                                            </span>
                                        </div>
                                        <a href="#" class="text-dark">
                                            <strong>Products</strong>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 card-group-row__col">
                                <div class="card card-group-row__card card-shadow">
                                    <div class="p-2 d-flex flex-row align-items-center">
                                        <div class="avatar avatar-xs mr-2">
                                            <span class="avatar-title rounded-circle text-center bg-warning">
                                                <i class="material-icons text-white icon-18pt">account_balance</i>
                                            </span>
                                        </div>
                                        <a href="#" class="text-dark">
                                            <strong>Account Balance</strong>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 card-group-row__col">
                                <div class="card card-group-row__card card-shadow">
                                    <div class="p-2 d-flex flex-row align-items-center">
                                        <div class="avatar avatar-xs mr-2">
                                            <span class="avatar-title rounded-circle text-center bg-primary">
                                                <i class="material-icons text-white icon-18pt">assignment</i>
                                            </span>
                                        </div>
                                        <a href="#" class="text-dark">
                                            <strong>Assignments</strong>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 card-group-row__col">
                                <div class="card card-group-row__card card-shadow">
                                    <div class="p-2 d-flex flex-row align-items-center">
                                        <div class="avatar avatar-xs mr-2">
                                            <span class="avatar-title rounded-circle text-center bg-danger">
                                                <i class="material-icons text-white icon-18pt">phone</i>
                                            </span>
                                        </div>
                                        <a href="#" class="text-dark">
                                            <strong>Calls</strong>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header card-header-large bg-white d-flex align-items-center">
                                <h4 class="card-header__title flex mb-0">Earnings</h4>
                                <div class="d-flex align-items-center">
                                    <label for="chart-switch-toggle" class="mb-0">Show affiliate:</label>
                                    <div class="custom-control custom-checkbox-toggle ml-2">
                                        <input checked="" aria-checked="true" type="checkbox" id="chart-switch-toggle" class="custom-control-input" role="switch" data-toggle="chart" data-target="#ordersChartSwitch" data-add='{"data":{"datasets":[{"data":[15,10,20,12,7,0,8,16,18,16,10,22],"backgroundColor":"#4EB4A5","label":"Affiliate","barPercentage":"0.5","barThickness":"20"}]}}'>
                                        <label class="custom-control-label" for="chart-switch-toggle"><span class="sr-only">Show affiliate</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <canvas id="ordersChartSwitch" class="chart-canvas"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header card-header-large bg-white">
                                        <h4 class="card-header__title">Top Companies</h4>
                                    </div>

                                    <table class="table table-striped border-bottom mb-0">

                                        <tr>
                                            <td style="width: 40px;">1.</td>
                                            <td style="width: 200px;">
                                                <div>
                                                    <a href="#" class="text-15pt d-flex align-items-center"><i class="material-icons icon-16pt mr-1">business</i> <strong>Moon Ltd</strong></a>
                                                </div>
                                                <small class="text-muted">(2 invoices)</small>
                                            </td>
                                            <td class="text-right" style="width: 100px">
                                                3% <i class="material-icons icon-16pt text-success">arrow_upward</i>
                                            </td>
                                            <td class="text-right" style="width: 60px">
                                                <div class="badge badge-soft-success">PAID</div>
                                            </td>
                                            <td class="text-right" style="width: 80px">
                                                $32,124
                                            </td>
                                        </tr>


                                        <tr>
                                            <td style="width: 40px;">2.</td>
                                            <td style="width: 200px;">
                                                <div>
                                                    <a href="#" class="text-15pt d-flex align-items-center"><i class="material-icons icon-16pt mr-1">business</i> <strong>Blue Space Ltd</strong></a>
                                                </div>
                                                <small class="text-muted">(3 invoices)</small>
                                            </td>
                                            <td class="text-right" style="width: 100px">
                                                5% <i class="material-icons icon-16pt text-success">arrow_upward</i>
                                            </td>
                                            <td class="text-right" style="width: 60px">
                                                <div class="badge badge-soft-success">PAID</div>
                                            </td>
                                            <td class="text-right" style="width: 80px">
                                                $13,593
                                            </td>
                                        </tr>


                                        <tr>
                                            <td style="width: 40px;">3.</td>
                                            <td style="width: 200px;">
                                                <div>
                                                    <a href="#" class="text-15pt d-flex align-items-center"><i class="material-icons icon-16pt mr-1">business</i> <strong>Visual Design</strong></a>
                                                </div>
                                                <small class="text-muted">(4 invoices)</small>
                                            </td>
                                            <td class="text-right" style="width: 100px">
                                                12% <i class="material-icons icon-16pt text-success">arrow_upward</i>
                                            </td>
                                            <td class="text-right" style="width: 60px">
                                                <div class="badge badge-soft-danger">DUE</div>
                                            </td>
                                            <td class="text-right" style="width: 80px">
                                                $2,229
                                            </td>
                                        </tr>


                                        <tr>
                                            <td style="width: 40px;">4.</td>
                                            <td style="width: 200px;">
                                                <div>
                                                    <a href="#" class="text-15pt d-flex align-items-center"><i class="material-icons icon-16pt mr-1">business</i> <strong>Fox Technologies</strong></a>
                                                </div>
                                                <small class="text-muted">(5 invoices)</small>
                                            </td>
                                            <td class="text-right" style="width: 100px">
                                                54% <i class="material-icons icon-16pt text-success">arrow_upward</i>
                                            </td>
                                            <td class="text-right" style="width: 60px">
                                                <div class="badge badge-soft-success">PAID</div>
                                            </td>
                                            <td class="text-right" style="width: 80px">
                                                $41,139
                                            </td>
                                        </tr>


                                        <tr>
                                            <td style="width: 40px;">5.</td>
                                            <td style="width: 200px;">
                                                <div>
                                                    <a href="#" class="text-15pt d-flex align-items-center"><i class="material-icons icon-16pt mr-1">business</i> <strong>JMS Ltd</strong></a>
                                                </div>
                                                <small class="text-muted">(6 invoices)</small>
                                            </td>
                                            <td class="text-right" style="width: 100px">
                                                5% <i class="material-icons icon-16pt text-success">arrow_upward</i>
                                            </td>
                                            <td class="text-right" style="width: 60px">
                                                <div class="badge badge-soft-danger">DUE</div>
                                            </td>
                                            <td class="text-right" style="width: 80px">
                                                $3,002
                                            </td>
                                        </tr>


                                        <tr>
                                            <td style="width: 40px;">6.</td>
                                            <td style="width: 200px;">
                                                <div>
                                                    <a href="#" class="text-15pt d-flex align-items-center"><i class="material-icons icon-16pt mr-1">business</i> <strong>Langston Corp</strong></a>
                                                </div>
                                                <small class="text-muted">(7 invoices)</small>
                                            </td>
                                            <td class="text-right" style="width: 100px">
                                                9% <i class="material-icons icon-16pt text-success">arrow_upward</i>
                                            </td>
                                            <td class="text-right" style="width: 60px">
                                                <div class="badge badge-soft-success">PAID</div>
                                            </td>
                                            <td class="text-right" style="width: 80px">
                                                $2,884
                                            </td>
                                        </tr>


                                        <tr>
                                            <td style="width: 40px;">7.</td>
                                            <td style="width: 200px;">
                                                <div>
                                                    <a href="#" class="text-15pt d-flex align-items-center"><i class="material-icons icon-16pt mr-1">business</i> <strong>Compare Solutions</strong></a>
                                                </div>
                                                <small class="text-muted">(8 invoices)</small>
                                            </td>
                                            <td class="text-right" style="width: 100px">
                                                3% <i class="material-icons icon-16pt text-success">arrow_upward</i>
                                            </td>
                                            <td class="text-right" style="width: 60px">
                                                <div class="badge badge-soft-success">PAID</div>
                                            </td>
                                            <td class="text-right" style="width: 80px">
                                                $15,844
                                            </td>
                                        </tr>


                                        <tr>
                                            <td style="width: 40px;">8.</td>
                                            <td style="width: 200px;">
                                                <div>
                                                    <a href="#" class="text-15pt d-flex align-items-center"><i class="material-icons icon-16pt mr-1">business</i> <strong>Hill Enterprises</strong></a>
                                                </div>
                                                <small class="text-muted">(9 invoices)</small>
                                            </td>
                                            <td class="text-right" style="width: 100px">
                                                12% <i class="material-icons icon-16pt text-success">arrow_upward</i>
                                            </td>
                                            <td class="text-right" style="width: 60px">
                                                <div class="badge badge-soft-success">PAID</div>
                                            </td>
                                            <td class="text-right" style="width: 80px">
                                                $9,772
                                            </td>
                                        </tr>


                                    </table>

                                    <div class="card-footer text-center border-0">
                                        <a class="text-muted" href="">View All (391)</a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header card-header-large bg-white d-flex align-items-center">
                                        <h4 class="card-header__title flex m-0">Recent Activity</h4>
                                        <div data-toggle="flatpickr" data-flatpickr-wrap="true" data-flatpickr-static="true" data-flatpickr-mode="range" data-flatpickr-alt-format="d/m/Y" data-flatpickr-date-format="d/m/Y">
                                            <a href="javascript:void(0)" class="link-date" data-toggle>13/03/2018 <span class="text-muted mx-1">to</span> 20/03/2018</a>
                                            <input class="d-none" type="hidden" value="13/03/2018 to 20/03/2018" data-input>
                                        </div>
                                    </div>
                                    <div class="card-header card-header-tabs-basic nav" role="tablist">
                                        <a href="#activity_all" class="active" data-toggle="tab" role="tab" aria-controls="activity_all" aria-selected="true">All</a>
                                        <a href="#activity_purchases" data-toggle="tab" role="tab" aria-controls="activity_purchases" aria-selected="false">Purchases</a>
                                        <a href="#activity_emails" data-toggle="tab" role="tab" aria-controls="activity_emails" aria-selected="false">Emails</a>
                                        <a href="#activity_quotes" data-toggle="tab" role="tab" aria-controls="activity_quotes" aria-selected="false">Quotes</a>
                                    </div>
                                    <div class="list-group tab-content list-group-flush">
                                        <div class="tab-pane active show fade" id="activity_all">


                                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  bg-purple">
                                                        <i class="material-icons">monetization_on</i>
                                                    </span>
                                                </div>


                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>


                                                        <strong class="text-15pt mr-1">Jenell D. Matney</strong>
                                                    </div>
                                                    <small class="text-muted">4 days ago</small>
                                                </div>
                                                <div>$573</div>


                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  bg-teal">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                </div>


                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>


                                                        <strong class="text-15pt mr-1">Sherri J. Cardenas</strong>
                                                    </div>
                                                    <small>Improve spacings on Projects page</small>
                                                </div>
                                                <small class="text-muted">3 days ago</small>


                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  ">
                                                        <i class="material-icons">monetization_on</i>
                                                    </span>
                                                </div>


                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_jeremy-banks-798787-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>


                                                        <strong class="text-15pt mr-1">Joseph S. Ferland</strong>
                                                    </div>
                                                    <small class="text-muted">2 days ago</small>
                                                </div>
                                                <div>$244</div>


                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  ">
                                                        <i class="material-icons">monetization_on</i>
                                                    </span>
                                                </div>


                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_joao-silas-636453-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>


                                                        <strong class="text-15pt mr-1">Bryan K. Davis</strong>
                                                    </div>
                                                    <small class="text-muted">1 day ago</small>
                                                </div>
                                                <div>$664</div>


                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  ">
                                                        <i class="material-icons">description</i>
                                                    </span>
                                                </div>


                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>


                                                        <strong class="text-15pt mr-1">Kaci M. Langston</strong>
                                                    </div>
                                                    <small class="text-muted">just now</small>
                                                </div>
                                                <div>$631</div>


                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="card-footer text-center border-0">
                                                <a class="text-muted" href="">View All (54)</a>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="activity_purchases">

                                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  bg-purple">
                                                        <i class="material-icons">monetization_on</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Sherri J. Cardenas</strong>

                                                    </div>
                                                    <small class="text-muted">4 days ago</small>
                                                </div>
                                                <div>$573</div>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  bg-purple">
                                                        <i class="material-icons">monetization_on</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Joseph S. Ferland</strong>

                                                    </div>
                                                    <small class="text-muted">3 days ago</small>
                                                </div>
                                                <div>$612</div>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  bg-purple">
                                                        <i class="material-icons">monetization_on</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_jeremy-banks-798787-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Bryan K. Davis</strong>

                                                    </div>
                                                    <small class="text-muted">2 days ago</small>
                                                </div>
                                                <div>$244</div>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle ">
                                                        <i class="material-icons">monetization_on</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_joao-silas-636453-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Kaci M. Langston</strong>

                                                    </div>
                                                    <small class="text-muted">1 day ago</small>
                                                </div>
                                                <div>$664</div>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle ">
                                                        <i class="material-icons">monetization_on</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1"></strong>

                                                    </div>
                                                    <small class="text-muted">just now</small>
                                                </div>
                                                <div>$631</div>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                        </div>
                                        <div class="tab-pane" id="activity_emails">

                                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  bg-teal">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Jenell D. Matney</strong>

                                                    </div>
                                                    <small>Confirmation required for design</small>
                                                </div>
                                                <small class="text-muted">4 days ago</small>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  bg-teal">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Sherri J. Cardenas</strong>

                                                    </div>
                                                    <small>Improve spacings on Projects page</small>
                                                </div>
                                                <small class="text-muted">3 days ago</small>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle  bg-teal">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_jeremy-banks-798787-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Joseph S. Ferland</strong>

                                                    </div>
                                                    <small>You unlocked a new Badge</small>
                                                </div>
                                                <small class="text-muted">2 days ago</small>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle ">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_joao-silas-636453-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Bryan K. Davis</strong>

                                                    </div>
                                                    <small>Meeting on Friday</small>
                                                </div>
                                                <small class="text-muted">1 day ago</small>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-center  bg-light ">
                                                <div class="avatar avatar-xs mr-3">
                                                    <span class="avatar-title rounded-circle ">
                                                        <i class="material-icons">email</i>
                                                    </span>
                                                </div>

                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <div class="avatar avatar-xxs mr-1">
                                                            <img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                        <strong class="text-15pt mr-1">Kaci M. Langston</strong>

                                                    </div>
                                                    <small>Design a new Brochure</small>
                                                </div>
                                                <small class="text-muted">just now</small>
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </div>

                                        </div>
                                        <div class="tab-pane" id="activity_quotes"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <!-- // END drawer-layout__content -->

                <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
                    <div class="mdk-drawer__content">
                        <div class="sidebar sidebar-light sidebar-left" data-perfect-scrollbar>
                            <div class="sidebar-heading sidebar-m-t">Menu</div>
                            <ul class="sidebar-menu">

                                <li class="sidebar-menu-item active">
                                    <a class="sidebar-menu-button" href="index.html">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">view_compact</i>
                                        <span class="sidebar-menu-text">Dashboard</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="app-chat.html">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">question_answer</i>
                                        <span class="sidebar-menu-text">Messages</span>
                                    </a>
                                </li>




                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="companies.html">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">business_center</i>
                                        <span class="sidebar-menu-text">Companies</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item ">
                                    <a class="sidebar-menu-button" href="company.html">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">business_center</i>
                                        <span class="sidebar-menu-text">Company</span>
                                    </a>
                                </li>



                                <li class="sidebar-menu-item ">
                                    <a class="sidebar-menu-button" href="employees.html">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">people</i>
                                        <span class="sidebar-menu-text">Employees</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item ">
                                    <a class="sidebar-menu-button" href="staff.html">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">report</i>
                                        <span class="sidebar-menu-text">Reports</span>
                                    </a>
                                </li>








                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#layouts_menu">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">view_compact</i>
                                        <span class="sidebar-menu-text">Layouts</span>
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse" id="layouts_menu">
                                        <li class="sidebar-menu-item active">
                                            <a class="sidebar-menu-button" href="index.html">
                                                <span class="sidebar-menu-text">Default</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="fluid-dashboard.html">
                                                <span class="sidebar-menu-text">Full Width Navs</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="fixed-dashboard.html">
                                                <span class="sidebar-menu-text">Fixed Navs</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="mini-dashboard.html">
                                                <span class="sidebar-menu-text">Mini Sidebar + Navs</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="sidebar-heading">UI Components</div>
                            <div class="sidebar-block p-0">
                                <ul class="sidebar-menu" id="components_menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-buttons.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">mouse</i>
                                            <span class="sidebar-menu-text">Buttons</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-alerts.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">notifications</i>
                                            <span class="sidebar-menu-text">Alerts</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-avatars.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person</i>
                                            <span class="sidebar-menu-text">Avatars</span>
                                            <span class="badge badge-primary ml-auto">NEW</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-modals.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">aspect_ratio</i>
                                            <span class="sidebar-menu-text">Modals</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-charts.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">pie_chart_outlined</i>
                                            <span class="sidebar-menu-text">Charts</span>
                                            <span class="badge badge-warning ml-auto">PRO</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-icons.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">brush</i>
                                            <span class="sidebar-menu-text">Icons</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-forms.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">text_format</i>
                                            <span class="sidebar-menu-text">Forms</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-range-sliders.html">
                                            <!-- tune or low_priority or linear_scale or space_bar or swap_calls -->
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tune</i>
                                            <span class="sidebar-menu-text">Range Sliders</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-datetime.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">event_available</i>
                                            <span class="sidebar-menu-text">Time &amp; Date</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-tables.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dns</i>
                                            <span class="sidebar-menu-text">Tables</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-tabs.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tab</i>
                                            <span class="sidebar-menu-text">Tabs</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-loaders.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">refresh</i>
                                            <span class="sidebar-menu-text">Loaders</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-drag.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">control_point</i>
                                            <span class="sidebar-menu-text">Drag &amp; Drop</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-pagination.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">last_page</i>
                                            <span class="sidebar-menu-text">Pagination</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="ui-vector-maps.html">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">location_on</i>
                                            <span class="sidebar-menu-text">Vector Maps</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="sidebar-p-a sidebar-b-y">
                                    <div class="d-flex align-items-top mb-2">
                                        <div class="sidebar-heading m-0 p-0 flex text-body js-text-body">Progress</div>
                                        <div class="font-weight-bold text-success">60%</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-p-a">
                                <a href="https://themeforest.net/item/stack-admin-bootstrap-4-dashboard-template/22959011" class="btn btn-outline-primary btn-block">Purchase &dollar;35</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- // END drawer-layout -->

        </div>
        <!-- // END header-layout__content -->

    </div>
    <!-- // END header-layout -->

    <!-- App Settings FAB -->
    <div id="app-settings">
        <app-settings layout-active="default" :layout-location="{
      'default': 'index.html',
      'fixed': 'fixed-dashboard.html',
      'fluid': 'fluid-dashboard.html',
      'mini': 'mini-dashboard.html'
    }"></app-settings>
    </div>

    @include('layouts.script')

</body>

</html>
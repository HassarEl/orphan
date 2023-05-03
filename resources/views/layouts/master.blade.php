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
                        

                    </div>


                </div>
                <!-- // END drawer-layout__content -->

                @include('layouts.main-sidebar')

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
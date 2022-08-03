<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ URL::asset ('admin/assets/images/logo.svg') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset ('admin/assets/images/logo-dark.png') }}" alt="" height="17">
                    </span>
                </a>

                <a href="index" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ URL::asset ('admin/assets/images/logo-light.svg') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset ('admin/assets/images/logo-light.png') }}" alt="" height="19">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light"
                    data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="('.Search')">
                    <span class="bx bx-search-alt"></span>
                </div>
            </form>

            <div class="dropdown dropdown-mega d-none d-lg-block ml-2">
                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                        aria-haspopup="false" aria-expanded="false">
                    <span key="t-megamenu">('.Mega_Menu')</span>
                    <i class="mdi mdi-chevron-down"></i>
                </button>
                <div class="dropdown-menu dropdown-megamenu">
                    <div class="row">
                        <div class="col-sm-8">

                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0"
                                        key="t-ui-components">('.UI_Components')</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);"
                                               key="t-lightbox">('.Lightbox')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                               key="t-range-slider">('.Range_Slider')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                               key="t-sweet-alert">('.Sweet_Alert')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-rating">('.Rating')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-forms">('.Forms')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-tables">('.Tables')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-charts">('.Charts')</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0"
                                        key="t-applications">('.Applications')</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);"
                                               key="t-ecommerce">('.Ecommerce')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                               key="t-calendar">('.Calendar')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-email">('.Email')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                               key="t-projects">('.Projects')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-tasks">('.Tasks')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                               key="t-contacts">('.Contacts')</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <h5 class="font-size-14 mt-0"
                                        key="t-extra-pages">('.Extra_Pages')</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);"
                                               key="t-light-sidebar">('.Light_Sidebar')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                               key="t-compact-sidebar">('.Compact_Sidebar')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                               key="t-horizontal">('.Horizontal_layout')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                               key="t-maintenance">('.Maintenance')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                               key="t-coming-soon">('.Coming_Soon')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                               key="t-timeline">('.Timeline')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-faqs">('.FAQs')</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5 class="font-size-14 mt-0"
                                        key="t-ui-components">('.UI_Components')</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);"
                                               key="t-lightbox">('.Lightbox')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                               key="t-range-slider">('.Range_Slider')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                               key="t-sweet-alert">('.Sweet_Alert')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-rating">('.Rating')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-forms">('.Forms')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-tables">('.Tables')</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" key="t-charts">('.Charts')</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-sm-5">
                                    <div>
                                        <img src="{{ URL::asset ('admin/assets/images/megamenu-img.png') }}" alt=""
                                             class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ml-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                     aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="('.Search')"
                                       aria-label="Search input">

                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                s
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @switch(Session::get('lang'))
                        @case('ru')
                            <img src="{{ URL::asset('admin/assets/images/flags/russia.jpg')}}" alt="Header Language"
                                 height="16"> <span class="align-middle">Russian</span>
                            @break
                        @case('it')
                            <img src="{{ URL::asset('admin/assets/images/flags/italy.jpg')}}" alt="Header Language"
                                 height="16"> <span class="align-middle">Italian</span>
                            @break
                        @case('de')
                            <img src="{{ URL::asset('admin/assets/images/flags/germany.jpg')}}" alt="Header Language"
                                 height="16"> <span class="align-middle">German</span>
                            @break
                        @case('es')
                            <img src="{{ URL::asset('admin/assets/images/flags/spain.jpg')}}" alt="Header Language"
                                 height="16"> <span class="align-middle">Spanish</span>
                            @break
                        @default
                            <img src="{{ URL::asset('admin/assets/images/flags/us.jpg')}}" alt="Header Language"
                                 height="16">
                            <span class="align-middle">English</span>
                    @endswitch
                </button>
                <div class="dropdown-menu dropdown-menu-end">

                    <!-- item-->
                    <a href="{{ url('index/en') }}" class="dropdown-item notify-item language" data-lang="eng">
                        <img src="{{ URL::asset ('admin/assets/images/flags/us.jpg') }}" alt="user-image" class="me-1"
                             height="12"> <span class="align-middle">English</span>
                    </a>
                    <!-- item-->
                    <a href="{{ url('index/es') }}" class="dropdown-item notify-item language" data-lang="sp">
                        <img src="{{ URL::asset ('admin/assets/images/flags/spain.jpg') }}" alt="user-image"
                             class="me-1"
                             height="12"> <span class="align-middle">Spanish</span>
                    </a>

                    <!-- item-->
                    <a href="{{ url('index/de') }}" class="dropdown-item notify-item language" data-lang="gr">
                        <img src="{{ URL::asset ('admin/assets/images/flags/germany.jpg') }}" alt="user-image"
                             class="me-1"
                             height="12"> <span class="align-middle">German</span>
                    </a>

                    <!-- item-->
                    <a href="{{ url('index/it') }}" class="dropdown-item notify-item language" data-lang="it">
                        <img src="{{ URL::asset ('admin/assets/images/flags/italy.jpg') }}" alt="user-image"
                             class="me-1"
                             height="12"> <span class="align-middle">Italian</span>
                    </a>

                    <!-- item-->
                    <a href="{{ url('index/ru') }}" class="dropdown-item notify-item language" data-lang="ru">
                        <img src="{{ URL::asset ('admin/assets/images/flags/russia.jpg') }}" alt="user-image"
                             class="me-1"
                             height="12"> <span class="align-middle">Russian</span>
                    </a>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-customize"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <div class="px-lg-2">
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ URL::asset ('admin/assets/images/brands/github.png') }}" alt="Github">
                                    <span>GitHub</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ URL::asset ('admin/assets/images/brands/bitbucket.png') }}"
                                         alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ URL::asset ('admin/assets/images/brands/dribbble.png') }}"
                                         alt="dribbble">
                                    <span>Dribbble</span>
                                </a>
                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ URL::asset ('admin/assets/images/brands/dropbox.png') }}"
                                         alt="dropbox">
                                    <span>Dropbox</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ URL::asset ('admin/assets/images/brands/mail_chimp.png') }}"
                                         alt="mail_chimp">
                                    <span>Mail Chimp</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ URL::asset ('admin/assets/images/brands/slack.png') }}" alt="slack">
                                    <span>Slack</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect"
                        id="page-header-notifications-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-bell bx-tada"></i>
                    <span class="badge bg-danger rounded-pill">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                     aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0" key="t-notifications"> ('.Notifications') </h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small" key="t-view-all"> ('.View_All')</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="bx bx-cart"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1"
                                        key="t-your-order">('.Your_order_is_placed')</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1"
                                           key="t-grammer">('.If_several_languages_coalesce_the_grammar')</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span
                                                key="t-min-ago">('.3_min_ago')</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <img src="{{ URL::asset ('admin/assets/images/users/avatar-3.jpg') }}"
                                     class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">('.James_Lemire')</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1"
                                           key="t-simplified">('.It_will_seem_like_simplified_English')</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span
                                                key="t-hours-ago">('.1_hours_ago')</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="bx bx-badge-check"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1" key="t-shipped">('.Your_item_is_shipped')</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1"
                                           key="t-grammer">('.If_several_languages_coalesce_the_grammar')</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span
                                                key="t-min-ago">('.3_min_ago')</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <img src="{{ URL::asset ('admin/assets/images/users/avatar-4.jpg') }}"
                                     class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">('.Salena_Layfield')</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1"
                                           key="t-occidental">
                                            ('.As_a_skeptical_Cambridge_friend_of_mine_occidental')</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span
                                                key="t-hours-ago">('.1_hours_ago')</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                            <i class="mdi mdi-arrow-right-circle me-1"></i> <span
                                key="t-view-more">('.View_More')</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src=""
                         alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1" key="t-henry"></span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="contacts-profile"><i
                            class="bx bx-user font-size-16 align-middle me-1"></i> <span
                            key="t-profile">('.Profile')</span></a>
                    <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span
                            key="t-my-wallet">('.My_Wallet')</span></a>
                    <a class="dropdown-item d-block" href="#" data-bs-toggle="modal"
                       data-bs-target=".change-password"><span class="badge bg-success float-end">11</span><i
                            class="bx bx-wrench font-size-16 align-middle me-1"></i> <span
                            key="t-settings">('.Settings')</span></a>
                    <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i>
                        <span key="t-lock-screen">('.Lock_screen')</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="javascript:void();"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                            class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span
                            key="t-logout">('.Logout')</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="bx bx-cog bx-spin"></i>
                </button>
            </div>

        </div>
    </div>
</header>

<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button"
                        >
                            <i class="bx bx-home-circle me-2"></i><span
                                key="t-dashboards">('.Dashboards')</span>
                            <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-dashboard">

                            <a href="index" class="dropdown-item" key="t-default">('.Default')</a>
                            <a href="dashboard-saas" class="dropdown-item" key="t-saas">('.Saas')</a>
                            <a href="dashboard-crypto" class="dropdown-item"
                               key="t-crypto">('.Crypto')</a>
                            <a href="dashboard-blog" class="dropdown-item" key="t-blog">('.Blog')</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button"
                        >
                            <i class="bx bx-tone me-2"></i>
                            <span key="t-ui-elements"> ('.UI_Elements')</span>
                            <div class="arrow-down"></div>
                        </a>

                        <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl"
                             aria-labelledby="topnav-uielement">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div>
                                        <a href="ui-alerts" class="dropdown-item"
                                           key="t-alerts">('.Alerts')</a>
                                        <a href="ui-buttons" class="dropdown-item"
                                           key="t-buttons">('.Buttons')</a>
                                        <a href="ui-cards" class="dropdown-item"
                                           key="t-cards">('.Cards')</a>
                                        <a href="ui-carousel" class="dropdown-item"
                                           key="t-carousel">('.Carousel')</a>
                                        <a href="ui-dropdowns" class="dropdown-item"
                                           key="t-dropdowns">('.Dropdowns')</a>
                                        <a href="ui-grid" class="dropdown-item"
                                           key="t-grid">('.Grid')</a>
                                        <a href="ui-images" class="dropdown-item"
                                           key="t-images">('.Images')</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <a href="ui-lightbox" class="dropdown-item"
                                           key="t-lightbox">('.Lightbox')</a>
                                        <a href="ui-modals" class="dropdown-item"
                                           key="t-modals">('.Modals')</a>
                                        <a href="ui-rangeslider" class="dropdown-item"
                                           key="t-range-slider">('.Range_Slider')</a>
                                        <a href="ui-session-timeout" class="dropdown-item"
                                           key="t-session-timeout">('.Session_Timeout')</a>
                                        <a href="ui-progressbars" class="dropdown-item"
                                           key="t-progress-bars">('.Progress_Bars')</a>
                                        <a href="ui-sweet-alert" class="dropdown-item"
                                           key="t-sweet-alert">('.Sweet_Alert')</a>
                                        <a href="ui-tabs-accordions" class="dropdown-item"
                                           key="t-tabs-accordions">('.Tabs_&_Accordions')</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <a href="ui-typography" class="dropdown-item"
                                           key="t-typography">('.Typography')</a>
                                        <a href="ui-video" class="dropdown-item"
                                           key="t-video">('.Video')</a>
                                        <a href="ui-general" class="dropdown-item"
                                           key="t-general">('.General')</a>
                                        <a href="ui-colors" class="dropdown-item"
                                           key="t-colors">('.Colors')</a>
                                        <a href="ui-rating" class="dropdown-item"
                                           key="t-rating">('.Rating')</a>
                                        <a href="ui-notifications" class="dropdown-item"
                                           key="t-notifications">('.Notifications')</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button"
                        >
                            <i class="bx bx-customize me-2"></i><span key="t-apps">('.Apps')</span>
                            <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-pages">

                            <a href="calendar" class="dropdown-item" key="t-calendar">('.Calendar')</a>
                            <a href="chat" class="dropdown-item" key="t-chat">('.Chat')</a>
                            <a href="apps-filemanager" class="dropdown-item"
                               key="t-file-manager">('.File_Manager')</a>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email"
                                   role="button">
                                    <span key="t-email">('.Email')</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-email">
                                    <a href="email-inbox" class="dropdown-item"
                                       key="t-inbox">('.Inbox')</a>
                                    <a href="email-read" class="dropdown-item"
                                       key="t-read-email">('.Read_Email')</a>

                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-blog"
                                           role="button">
                                            <span key="t-email-templates">('.Templates')</span>
                                            <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-blog">
                                            <a href="email-template-basic" class="dropdown-item"
                                               key="t-basic-action">('.Basic_Action')</a>
                                            <a href="email-template-alert" class="dropdown-item"
                                               key="t-alert-email">('.Alert_Email')</a>
                                            <a href="email-template-billing" class="dropdown-item"
                                               key="t-bill-email">('.Billing_Email')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce"
                                   role="button">
                                    <span key="t-ecommerce">('.Ecommerce')</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                    <a href="ecommerce-products" class="dropdown-item"
                                       key="t-products">('.Products')</a>
                                    <a href="ecommerce-product-detail" class="dropdown-item"
                                       key="t-product-detail">('.Product_Detail')</a>
                                    <a href="ecommerce-orders" class="dropdown-item"
                                       key="t-orders">('.Orders')</a>
                                    <a href="ecommerce-customers" class="dropdown-item"
                                       key="t-customers">('.Customers')</a>
                                    <a href="ecommerce-cart" class="dropdown-item"
                                       key="t-cart">('.Cart')</a>
                                    <a href="ecommerce-checkout" class="dropdown-item"
                                       key="t-checkout">('.Checkout')</a>
                                    <a href="ecommerce-shops" class="dropdown-item"
                                       key="t-shops">('.Shops')</a>
                                    <a href="ecommerce-add-product" class="dropdown-item"
                                       key="t-add-product">('.Add_Product')</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-crypto"
                                   role="button">
                                    <span key="t-crypto">('.Crypto')</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-crypto">
                                    <a href="crypto-wallet" class="dropdown-item"
                                       key="t-wallet">('.Wallet')</a>
                                    <a href="crypto-buy-sell" class="dropdown-item"
                                       key="t-buy">('.Buy_Sell')</a>
                                    <a href="crypto-exchange" class="dropdown-item"
                                       key="t-exchange">('.Exchange')</a>
                                    <a href="crypto-lending" class="dropdown-item"
                                       key="t-lending">('.Lending')</a>
                                    <a href="crypto-orders" class="dropdown-item"
                                       key="t-orders">('.Orders')</a>
                                    <a href="crypto-kyc-application" class="dropdown-item"
                                       key="t-kyc">('.KYC_Application')</a>
                                    <a href="crypto-ico-landing" class="dropdown-item"
                                       key="t-ico">('.ICO_Landing')</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-project"
                                   role="button">
                                    <span key="t-projects">('.Projects')</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-project">
                                    <a href="projects-grid" class="dropdown-item"
                                       key="t-p-grid">('.Projects_Grid')</a>
                                    <a href="projects-list" class="dropdown-item"
                                       key="t-p-list">('.Projects_List')</a>
                                    <a href="projects-overview" class="dropdown-item"
                                       key="t-p-overview">('.Project_Overview')</a>
                                    <a href="projects-create" class="dropdown-item"
                                       key="t-create-new">('.Create_New')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-task"
                                   role="button">
                                    <span key="t-tasks">('.Tasks')</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-task">
                                    <a href="tasks-list" class="dropdown-item"
                                       key="t-task-list">('.Task_List')</a>
                                    <a href="tasks-kanban" class="dropdown-item"
                                       key="t-kanban-board">('.Kanban_Board')</a>
                                    <a href="tasks-create" class="dropdown-item"
                                       key="t-create-task">('.Create_Task')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-contact"
                                   role="button">
                                    <span key="t-contacts">('.Contacts')</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-contact">
                                    <a href="contacts-grid" class="dropdown-item"
                                       key="t-user-grid">('.User_Grid')</a>
                                    <a href="contacts-list" class="dropdown-item"
                                       key="t-user-list">('.User_List')</a>
                                    <a href="contacts-profile" class="dropdown-item"
                                       key="t-profile">('.Profile')</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-blog"
                                   role="button">
                                    <span key="t-blog">('.Blog')</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-blog">
                                    <a href="blog-list" class="dropdown-item"
                                       key="t-blog-list">('.Blog_List')</a>
                                    <a href="blog-grid" class="dropdown-item"
                                       key="t-blog-grid">('.Blog_Grid')</a>
                                    <a href="blog-details" class="dropdown-item"
                                       key="t-blog-details">('.Blog_Details')</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button"
                        >
                            <i class="bx bx-collection me-2"></i><span
                                key="t-components">('.Components')</span>
                            <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-components">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                   role="button">
                                    <span key="t-forms">('.Forms')</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-form">
                                    <a href="form-elements" class="dropdown-item"
                                       key="t-form-elements">('.Form_Elements')</a>
                                    <a href="form-layouts" class="dropdown-item"
                                       key="t-form-layouts">('.Form_Layouts')</a>
                                    <a href="form-validation" class="dropdown-item"
                                       key="t-form-validation">('.Form_Validation')</a>
                                    <a href="form-advanced" class="dropdown-item"
                                       key="t-form-advanced">('.Form_Advanced')</a>
                                    <a href="form-editors" class="dropdown-item"
                                       key="t-form-editors">('.Form_Editors')</a>
                                    <a href="form-uploads" class="dropdown-item"
                                       key="t-form-upload">('.Form_File_Upload')</a>
                                    <a href="form-xeditable" class="dropdown-item"
                                       key="t-form-xeditable">('.Form_Xeditable')</a>
                                    <a href="form-repeater" class="dropdown-item"
                                       key="t-form-repeater">('.Form_Repeater')</a>
                                    <a href="form-wizard" class="dropdown-item"
                                       key="t-form-wizard">('.Form_Wizard')</a>
                                    <a href="form-mask" class="dropdown-item"
                                       key="t-form-mask">('.Form_Mask')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                   role="button">
                                    <span key="t-tables">('.Tables')</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-table">
                                    <a href="tables-basic" class="dropdown-item"
                                       key="t-basic-tables">('.Basic_Tables')</a>
                                    <a href="tables-datatable" class="dropdown-item"
                                       key="t-data-tables">('.Data_Tables')</a>
                                    <a href="tables-responsive" class="dropdown-item"
                                       key="t-responsive-table">('.Responsive_Table')</a>
                                    <a href="tables-editable" class="dropdown-item"
                                       key="t-editable-table">('.Editable_Table')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts"
                                   role="button">
                                    <span key="t-charts">('.Charts')</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                    <a href="charts-apex" class="dropdown-item"
                                       key="t-apex-charts">('.Apex_Charts')</a>
                                    <a href="charts-echart" class="dropdown-item"
                                       key="t-e-charts">('.E_Charts')</a>
                                    <a href="charts-chartjs" class="dropdown-item"
                                       key="t-chartjs-charts">('.Chartjs_Charts')</a>
                                    <a href="charts-flot" class="dropdown-item"
                                       key="t-flot-charts">('.Flot_Charts')</a>
                                    <a href="charts-tui" class="dropdown-item"
                                       key="t-ui-charts">('.Toast_UI_Charts')</a>
                                    <a href="charts-knob" class="dropdown-item"
                                       key="t-knob-charts">('.Jquery_Knob_Charts')</a>
                                    <a href="charts-sparkline" class="dropdown-item"
                                       key="t-sparkline-charts">('.Sparkline_Charts')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons"
                                   role="button">
                                    <span key="t-icons">('.Icons')</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                    <a href="icons-boxicons" class="dropdown-item"
                                       key="t-boxicons">('.Boxicons')</a>
                                    <a href="icons-materialdesign" class="dropdown-item"
                                       key="t-material-design">('.Material_Design')</a>
                                    <a href="icons-dripicons" class="dropdown-item"
                                       key="t-dripicons">('.Dripicons')</a>
                                    <a href="icons-fontawesome" class="dropdown-item"
                                       key="t-font-awesome">('.Font_awesome')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map"
                                   role="button">
                                    <span key="t-maps">('.Maps')</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-map">
                                    <a href="maps-google" class="dropdown-item"
                                       key="t-g-maps">('.Google_Maps')</a>
                                    <a href="maps-vector" class="dropdown-item"
                                       key="t-v-maps">('.Vector_Maps')</a>
                                    <a href="maps-leaflet" class="dropdown-item"
                                       key="t-l-maps">('.Leaflet_Maps')</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button"
                        >
                            <i class="bx bx-file me-2"></i><span
                                key="t-extra-pages">('.Extra_Pages')</span>
                            <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-invoice"
                                   role="button">
                                    <span key="t-invoices">('.Invoices')</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-invoice">
                                    <a href="invoices-list" class="dropdown-item"
                                       key="t-invoice-list">('.Invoice_List')</a>
                                    <a href="invoices-detail" class="dropdown-item"
                                       key="t-invoice-detail">('.Invoice_Detail')</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth"
                                   role="button">
                                    <span key="t-authentication">('.Authentication')</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                    <a href="auth-login" class="dropdown-item"
                                       key="t-login">('.Login')</a>
                                    <a href="auth-login-2" class="dropdown-item"
                                       key="t-login-2">('.Login') 2</a>
                                    <a href="auth-register" class="dropdown-item"
                                       key="t-register">('.Register')</a>
                                    <a href="auth-register-2" class="dropdown-item"
                                       key="t-register-2">('.Register') 2</a>
                                    <a href="auth-recoverpw" class="dropdown-item"
                                       key="t-recover-password">('.Recover_Password')</a>
                                    <a href="auth-recoverpw-2" class="dropdown-item"
                                       key="t-recover-password-2">('.Recover_Password') 2</a>
                                    <a href="auth-lock-screen" class="dropdown-item"
                                       key="t-lock-screen">('.Lock_Screen')</a>
                                    <a href="auth-lock-screen-2" class="dropdown-item"
                                       key="t-lock-screen-2">('.Lock_Screen') 2</a>
                                    <a href="auth-confirm-mail" class="dropdown-item"
                                       key="t-confirm-mail">('.Confirm_Mail')</a>
                                    <a href="auth-confirm-mail-2" class="dropdown-item"
                                       key="t-confirm-mail-2">('.Confirm_Mail') 2</a>
                                    <a href="auth-email-verification" class="dropdown-item"
                                       key="t-email-verification">('.Email_verification')</a>
                                    <a href="auth-email-verification-2" class="dropdown-item"
                                       key="t-email-verification-2">('.Email_verification') 2</a>
                                    <a href="auth-two-step-verification" class="dropdown-item"
                                       key="t-two-step-verification">('.Two_step_verification')</a>
                                    <a href="auth-two-step-verification-2" class="dropdown-item"
                                       key="t-two-step-verification-2">('.Two_step_verification') 2</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility"
                                   role="button">
                                    <span key="t-utility">('.Utility')</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                    <a href="pages-starter" class="dropdown-item"
                                       key="t-starter-page">('.Starter_Page')</a>
                                    <a href="pages-maintenance" class="dropdown-item"
                                       key="t-maintenance">('.Maintenance')</a>
                                    <a href="pages-comingsoon" class="dropdown-item"
                                       key="t-coming-soon">('.Coming_Soon')</a>
                                    <a href="pages-timeline" class="dropdown-item"
                                       key="t-timeline">('.Timeline')</a>
                                    <a href="pages-faqs" class="dropdown-item"
                                       key="t-faqs">('.FAQs')</a>
                                    <a href="pages-pricing" class="dropdown-item"
                                       key="t-pricing">('.Pricing')</a>
                                    <a href="pages-404" class="dropdown-item"
                                       key="t-error-404">('.Error_404')</a>
                                    <a href="pages-500" class="dropdown-item"
                                       key="t-error-500">('.Error_500')</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button"
                        >
                            <i class="bx bx-layout me-2"></i><span key="t-layouts">('.Layouts')</span>
                            <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-layout">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-verti"
                                   role="button">
                                    <span key="t-vertical">('.Vertical')</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-layout-verti">
                                    <a href="layouts-light-sidebar" class="dropdown-item"
                                       key="t-light-sidebar">('.Light_Sidebar')</a>
                                    <a href="layouts-compact-sidebar" class="dropdown-item"
                                       key="t-compact-sidebar">('.Compact_Sidebar')</a>
                                    <a href="layouts-icon-sidebar" class="dropdown-item"
                                       key="t-icon-sidebar">('.Icon_Sidebar')</a>
                                    <a href="layouts-boxed" class="dropdown-item"
                                       key="t-boxed-width">('.Boxed_Width')</a>
                                    <a href="layouts-preloader" class="dropdown-item"
                                       key="t-preloader">('.Preloader')</a>
                                    <a href="layouts-colored-sidebar" class="dropdown-item"
                                       key="t-colored-sidebar">('.Colored_Sidebar')</a>
                                    <a href="layouts-scrollable" class="dropdown-item"
                                       key="t-scrollable">('.Scrollable')</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-hori"
                                   role="button">
                                    <span key="t-horizontal">('.Horizontal')</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-layout-hori">
                                    <a href="layouts-horizontal" class="dropdown-item"
                                       key="t-horizontal">('.Horizontal')</a>
                                    <a href="layouts-hori-topbar-light" class="dropdown-item"
                                       key="t-topbar-light">('.Topbar_Light')</a>
                                    <a href="layouts-hori-boxed-width" class="dropdown-item"
                                       key="t-boxed-width">('.Boxed_Width')</a>
                                    <a href="layouts-hori-preloader" class="dropdown-item"
                                       key="t-preloader">('.Preloader')</a>
                                    <a href="layouts-hori-colored-header" class="dropdown-item"
                                       key="t-colored-topbar">('.Colored_Header')</a>
                                    <a href="layouts-hori-scrollable" class="dropdown-item"
                                       key="t-scrollable">('.Scrollable')</a>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>

<!--  Change-Password example -->
<div class="modal fade change-password" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" id="change-password">
                    @csrf
                    <input type="hidden" value="" id="data_id">
                    <div class="mb-3">
                        <label for="current_password">Current Password</label>
                        <input id="current-password" type="password"
                               class="form-control @error('current_password') is-invalid @enderror"
                               name="current_password" autocomplete="current_password"
                               placeholder="Enter Current Password" value="{{ old('current_password') }}">
                        <div class="text-danger" id="current_passwordError" data-ajax-feedback="current_password"></div>
                    </div>

                    <div class="mb-3">
                        <label for="newpassword">New Password</label>
                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror" name="password"
                               autocomplete="new_password" placeholder="Enter New Password">
                        <div class="text-danger" id="passwordError" data-ajax-feedback="password"></div>
                    </div>

                    <div class="mb-3">
                        <label for="userpassword">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                               autocomplete="new_password" placeholder="Enter New Confirm password">
                        <div class="text-danger" id="password_confirmError" data-ajax-feedback="password-confirm"></div>
                    </div>

                    <div class="mt-3 d-grid">
                        <button class="btn btn-primary waves-effect waves-light UpdatePassword" data-id=""
                                type="submit">Update Password
                        </button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

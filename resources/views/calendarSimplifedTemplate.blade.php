
<!DOCTYPE html>
<html lang="en">


    <head>
        <base href="" />
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="TZuXYMfhqGQug9oSxXLGd0tPMERhWbgQDfu6MaDc">

        <title>AatroX Laravel 8+ & Tailwind Admin Dashboard Template | Dashboard V1
</title>
        <link rel="apple-touch-icon" sizes="180x180" href="https://aatrox.herokuapp.com/images/favicons/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="https://aatrox.herokuapp.com/images/favicons/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="https://aatrox.herokuapp.com/images/favicons/favicon-16x16.png" />
        <link rel="manifest" href="https://aatrox.herokuapp.com/images/favicons/site.webmanifest" />
        <link rel="mask-icon" href="https://aatrox.herokuapp.com/images/favicons/safari-pinned-tab.svg" color="#5bbad5" />
        <meta name="msapplication-TileColor" content="#da532c" />
        <meta name="theme-color" content="#ffffff" />

        <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />



        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />


        <link rel="stylesheet" href="https://aatrox.herokuapp.com/css/vendors.bundle.min.css" />

        <!--Page Level Styles -->
        <link rel="stylesheet" href="https://aatrox.herokuapp.com/css/pages/app/event-calendar.css" />



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/styles/github.min.css" />


<script>
    console.log('No custom Styles available.')
</script>


        <link rel="stylesheet" href="https://aatrox.herokuapp.com/css/main.bundle.css" />





        <link href="https://aatrox.herokuapp.com/vendors/fullcalendar/main.css" rel="stylesheet" type="text/css" />

    <body>
        <div class="loadscreen" id="preloader">
    <div class="loader spinner-bubble spinner-bubble-primary"></div>
</div>        <div class="app-admin-wrap-layout-2 layout-sidebar-large">
            <div class="header-2-wrapper">
    <div class="flex items-center">
        <div class="logo"><img class="w-14 h-14 m-auto" src="{{url('img/logo_branch.svg')}}" /></div>
        <div class="mx-0 sm:mx-3"><button
                class="material-icons menu-toggle cursor-pointer text-gray-500 align-middle focus:outline-none "
                type="button">menu</button></div>
        <div class="ul-dropdown mega-menu mr-3" id="dropdownWrapper"><button
                class="btn-sm mx-3 focus:outline-none dropdown-button" data-toggle="dropdown">
                <div class="flex items-center">
                    <p class="mr-2">Mega Menu</p><i class="i-Arrow-Down"></i>
                </div>
            </button>
            <div class="dropdown-menu">
                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-4 bg-gradient-to-r from-purple-500 to-purple-900">
                        <div class="p-4">
                            <p class="text-2xl text-white font-semibold mb-3">Mega Menu Sidebar</p>
                            <p class="text-white mb-4">Mega Menu Sidebar description</p>><button
                                class="btn btn-warning-outline rounded-full mr-2" type="button">Learn More</button>
                        </div>
                    </div>
                    <div class="col-span-4">
                        <div class="p-4">
                            <p class="text-primary-500 border-b border-primary-500 inline-block mb-4">Mega Sub Menu Sidebar1</p>
                            <div class="menu-icon-grid flex justify-between flex-wrap"><a
                                    class="hover:bg-primary-500 p-5 inline-flex flex-col items-center rounded w-24"
                                    href="#"><i class="i-Shop-4 text-2xl"> </i>MSMS1 A</a><a
                                    class="hover:bg-primary-500 p-5 inline-flex flex-col items-center rounded w-24"
                                    href="#"><i class="i-Library text-2xl"></i>MSMS1B</a><a
                                    class="hover:bg-primary-500 p-5 inline-flex flex-col items-center rounded w-24"
                                    href="#"><i class="i-Drop text-2xl"></i>MSMS1C</a><a
                                    class="hover:bg-primary-500 p-5 inline-flex flex-col items-center rounded w-24"
                                    href="#"><i class="i-File-Clipboard-File--Text text-2xl"> </i>MSMS1D</a><a
                                    class="hover:bg-primary-500 p-5 inline-flex flex-col items-center rounded w-24"
                                    href="#"><i class="i-Checked-User text-2xl"></i>MSMS1E</a><a
                                    class="hover:bg-primary-500 p-5 inline-flex flex-col items-center rounded w-24"
                                    href="#"><i class="i-Ambulance text-2xl"></i>MSMS1F</a></div>
                        </div>
                    </div>
                    <div class="col-span-4">
                        <div class="p-4">
                            <p class="text-primary-500 border-b border-primary-500 inline-block mb-4">Mega Sub Menu Sidebar2</p>
                            <ul class="links">
                                <li> <a class="hover:text-primary-500" href="#">MSMS2A </a></li>
                                <li> <a class="hover:text-primary-500" href="#">MSMS2B </a></li>
                                <li> <a class="hover:text-primary-500" href="#">MSMS2C </a></li>
                                <li> <a class="hover:text-primary-500" href="#">MSMS2D </a></li>
                                <li> <a class="hover:text-primary-500" href="#">MSMS2E </a></li>
                                <li> <a class="hover:text-primary-500" href="#">MSMS2F </a></li>
                                <li> <a class="hover:text-primary-500" href="#">MSMS2G </a></li>
                                <li> <a class="hover:text-primary-500" href="#">MSMS2H </a></li>
                                <li> <a class="hover:text-primary-500" href="#">MSMS2I </a></li>
                                <li> <a class="hover:text-primary-500" href="#">MSMS2J </a></li>
                                <li> <a class="hover:text-primary-500" href="#">MSMS2K </a></li>
                                <li> <a class="hover:text-primary-500" href="#">MSMS2L </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative text-gray-600 search-bar mx-3"><input
                class=" bg-gray-100 h-10 px-5 pr-10 rounded-full text-sm focus:outline-none" type="search" name="search"
                placeholder="Search" /><button class="absolute right-0 top-0 mt-2 mr-4 focus:outline-none"
                type="submit"><span class="material-icons text-gray-300">search</span></button></div>
        <div>
    <div class="search-ui">
        <div class="container-fluid">
            <div class="flex justify-between justify-items-center mb-3"><img class="avatar-md"
                    src="https://aatrox.herokuapp.com/images/logo.png" alt="" />
                <div class="text-right"><button class="search-ui-close btn" type="button"><i
                            class="i-Close-Window text-xl text-gray-600"></i></button></div>
            </div><input class="search-input  text-5xl md:text-6xl font-semibold" type="text" placeholder="Type here" />
            <div>
                <h6 class="mt-5 mb-4">Search Result</h6>
                <div class="card overflow-hidden flex-row mb-6 shadow-md">
                    <div class="flex"><img class="w-24 object-cover" src="https://aatrox.herokuapp.com/images/products/headphone-1.jpg"
                            alt="" /></div>
                    <div class="flex pl-2 flex-grow">
                        <div class="card-body flex flex-col self-center justify-between lg:items-center lg:flex-row">
                            <a class="hover:text-primary-500" href=""> Headphone 1</a>
                            <p>Gadget</p>
                            <p class="mr-2 text-gray-500">$300 <span class="line-through">$400</span></p><span
                                class="badge text-white bg-danger-500">Sale</span>
                        </div>
                    </div>
                </div>
                <div class="card overflow-hidden flex-row mb-6 shadow-md">
                    <div class="flex"><img class="w-24 object-cover" src="https://aatrox.herokuapp.com/images/products/headphone-2.jpg"
                            alt="" /></div>
                    <div class="flex pl-2 flex-grow">
                        <div class="card-body flex flex-col self-center justify-between lg:items-center lg:flex-row">
                            <a class="hover:text-primary-500" href=""> Headphone 1</a>
                            <p>Gadget</p>
                            <p class="mr-2 text-gray-500">$300 <span class="line-through">$400</span></p><span
                                class="badge text-white bg-primary-500">New</span>
                        </div>
                    </div>
                </div>
                <div class="card overflow-hidden flex-row mb-6 shadow-md">
                    <div class="flex"><img class="w-24 object-cover" src="https://aatrox.herokuapp.com/images/products/headphone-4.jpg"
                            alt="" /></div>
                    <div class="flex pl-2 flex-grow">
                        <div class="card-body flex flex-col self-center justify-between lg:items-center lg:flex-row">
                            <a class="hover:text-primary-500" href=""> Headphone 1</a>
                            <p>Gadget</p>
                            <p class="mr-2 text-gray-500">$300 <span class="line-through">$400</span></p><span
                                class="badge text-white bg-primary-500">New</span>
                        </div>
                    </div>
                </div>
                <div class="card overflow-hidden flex-row mb-6 shadow-md">
                    <div class="flex"><img class="w-24 object-cover" src="https://aatrox.herokuapp.com/images/products/headphone-4.jpg"
                            alt="" /></div>
                    <div class="flex pl-2 flex-grow">
                        <div class="card-body flex flex-col self-center justify-between lg:items-center lg:flex-row">
                            <a class="hover:text-primary-500" href=""> Headphone 1</a>
                            <p>Gadget</p>
                            <p class="mr-2 text-gray-500">$300 <span class="line-through">$400</span></p><span
                                class="badge text-white bg-primary-500">New</span>
                        </div>
                    </div>
                </div>
                <div class="card overflow-hidden flex-row mb-6 shadow-md">
                    <div class="flex"><img class="w-24 object-cover" src="https://aatrox.herokuapp.com/images/products/headphone-3.jpg"
                            alt="" /></div>
                    <div class="flex pl-2 flex-grow">
                        <div class="card-body flex flex-col self-center justify-between lg:items-center lg:flex-row">
                            <a class="hover:text-primary-500" href=""> Headphone 1</a>
                            <p>Gadget</p>
                            <p class="mr-2 text-gray-500">$300 <span class="line-through">$400</span></p><span
                                class="badge text-white bg-primary-500">New</span>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <nav class="relative z-0 inline-flex shadow-sm">
                        <div><a class="pagination-link pagination-icon text-primary-600 hover:border hover:border-primary-600 hover:bg-primary-600 hover:text-white"
                                href="#" aria-label="Previous"><span
                                    class="material-icons">keyboard_arrow_left</span></a></div>
                        <div><a class="pagination-link active text-primary-600 hover:border hover:border-primary-600 hover:bg-primary-600 hover:text-white"
                                href="#">1</a><a
                                class="pagination-link text-primary-600 hover:border hover:border-primary-600 hover:bg-primary-600 hover:text-white"
                                href="#">2</a><a
                                class="pagination-link text-primary-600 hover:border hover:border-primary-600 hover:bg-primary-600 hover:text-white"
                                href="#">3</a></div>
                        <div><a class="pagination-link pagination-icon text-primary-600 hover:border hover:border-primary-600 hover:bg-primary-600 hover:text-white"
                                href="#" aria-label="Next"><span class="material-icons">keyboard_arrow_right</span></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>    </div>
    <div class="flex items-center"><button class="hidden mr-0 btn btn-sm hover:bg-gray-100 sm:block rounded p-1 md:mr-2"
            data-toggle="dropdown"><i class="i-Full-Screen text-gray-800 text-xl"></i></button>
        <div class="mr-0 ul-dropdown md:mr-2" id="dropdownWrapper"><button
                class="btn btn-sm hover:bg-gray-100 rounded p-1 mr-2" data-toggle="dropdown"><i
                    class="i-Safe-Box text-gray-800 text-xl"></i></button>
            <div class="dropdown-menu">
                <div class="menu-icon-grid flex justify-between flex-wrap"><a
                        class="hover:bg-primary-500 p-4 inline-flex flex-col items-center rounded w-20" href="#"><i
                            class="i-Shop-4 text-2xl"> </i>Drop2A</a><a
                        class="hover:bg-primary-500 p-4 inline-flex flex-col items-center rounded w-20" href="#"><i
                            class="i-Library text-2xl"></i>Drop2B</a><a
                        class="hover:bg-primary-500 p-4 inline-flex flex-col items-center rounded w-20" href="#"><i
                            class="i-Drop text-2xl"></i>Drop2C</a><a
                        class="hover:bg-primary-500 p-4 inline-flex flex-col items-center rounded w-20" href="#"><i
                            class="i-File-Clipboard-File--Text text-2xl"> </i>Drop2D</a><a
                        class="hover:bg-primary-500 p-4 inline-flex flex-col items-center rounded w-20" href="#"><i
                            class="i-Checked-User text-2xl"></i>Drop2E</a><a
                        class="hover:bg-primary-500 p-4 inline-flex flex-col items-center rounded w-20" href="#"><i
                            class="i-Ambulance text-2xl"></i>Drop2F</a></div>
            </div>
        </div>
        <div class="mr-0 ul-dropdown md:mr-2" id="dropdownWrapper"><button
                class="btn btn-sm hover:bg-gray-100 rounded-pill badge-top-container p-1" data-toggle="dropdown"><span
                    class="badge-count text-white bg-primary-500">3</span><i
                    class="i-Bell text-xl header-icon text-gray-800"></i></button>
            <div class="dropdown-menu">
                <div class="max-h-64 relative" data-perfect-scrollbar="" data-suppress-scroll-x="true"><a
                        class="flex justify-between justify-items-center p-3 hover:bg-gray-100 hover:text-gray-700"
                        href="#">
                        <div>
                            <p class="text-sm">New Message A</p>
                            <p class="text-xs">How Are You A?</p>
                        </div>
                        <p class="text-xs text-gray-500">10s A</p>
                    </a><a class="flex justify-between justify-items-center p-3 hover:bg-gray-100 hover:text-gray-700"
                        href="#">
                        <div>
                            <p class="text-sm">New Message B</p>
                            <p class="text-xs">How Are You? B</p>
                        </div>
                        <p class="text-xs text-gray-500">10s B</p>
                    </a><a class="flex justify-between justify-items-center p-3 hover:bg-gray-100 hover:text-gray-700"
                        href="#">
                        <div>
                            <p class="text-sm">New Message C</p>
                            <p class="text-xs">How Are You ? C</p>
                        </div>
                        <p class="text-xs text-gray-500">10s C</p>
                    </a><a class="flex justify-between justify-items-center p-3 hover:bg-gray-100 hover:text-gray-700"
                        href="#">
                        <div>
                            <p class="text-sm">New Message D</p>
                            <p class="text-xs">How Are You ? D</p>
                        </div>
                        <p class="text-xs text-gray-500">10s D</p>
                    </a><a class="flex justify-between justify-items-center p-3 hover:bg-gray-100 hover:text-gray-700"
                        href="#">
                        <div>
                            <p class="text-sm">New Message E</p>
                            <p class="text-xs">How Are You ? E</p>
                        </div>
                        <p class="text-xs text-gray-500">10s E</p>
                    </a><a class="flex justify-between justify-items-center p-3 hover:bg-gray-100 hover:text-gray-700"
                        href="#">
                        <div>
                            <p class="text-sm">New Message F</p>
                            <p class="text-xs">How Are You ? F</p>
                        </div>
                        <p class="text-xs text-gray-500">10s F</p>
                    </a><a class="flex justify-between justify-items-center p-3 hover:bg-gray-100 hover:text-gray-700"
                        href="#">
                        <div>
                            <p class="text-sm">New Message G</p>
                            <p class="text-xs">How Are You ? G</p>
                        </div>
                        <p class="text-xs text-gray-500">10s G</p>
                    </a></div>
            </div>
        </div>
        <div class="mr-0 ul-dropdown md:mr-2" id="dropdownWrapper"><button class="btn btn-sm"
                data-toggle="dropdown"><img class="avatar rounded-full"
                    src="img/circle_gecko.svg" /></button>
            <div class="dropdown-menu"><a class="dropdown-item" href="#"> Account Settings</a><a class="dropdown-item"
                    href="#"> Billing History</a><a class="dropdown-item" href="#"> Sign Out</a></div>
        </div>
    </div>
</div>
            <div class="main-content-wrap">
                <div class="side-content-wrap">
    <div class="sidebar-left open" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item " data-item="dashboard"><a
                    class="nav-item-hold" href="#"><i class="i-Bar-Chart text-3xl"></i>
                    <p>Sidebar1</p>
                </a></li>
            <li class="nav-item active" data-item="apps"><a class="nav-item-hold"
                    href="#"><i class="i-Computer-Secure text-3xl"></i>
                    <p>Sidebar2</p>
                </a></li>
            <li class="nav-item " data-item="components"><a
                    class="nav-item-hold" href="#"><i class="i-Wallet text-3xl"></i>
                    <p>Sidebar3</p>
                </a></li>
            <li class="nav-item " data-item="widgets"><a
                    class="nav-item-hold" href="#"><i class="i-Atom text-3xl"></i>
                    <p>Sidebar4</p>
                </a></li>
            <li class="nav-item " data-item="pages"><a class="nav-item-hold"
                    href="#"><i class="i-Find-User text-3xl"></i>
                    <p>Sidebar5</p>
                </a></li>
            <li class="nav-item" data-item="sessions"><a class="nav-item-hold" href="#"><i
                        class="i-Administrator text-3xl"></i>
                    <p>Sidebar6</p>
                </a></li>
            <li class="nav-item " data-item="charts"><a
                    class="nav-item-hold" href="#"><i class="i-Pie-Chart-2 text-3xl"></i>
                    <p>Sidebar7</p>
                </a></li>
            <li class="nav-item"><a class="nav-item-hold" href="#"><i class="i-Pie-Chart-2 text-3xl"></i>
                    <p>Sidebar8</p>
                </a></li>
        </ul>
    </div>
    <div class="sidebar-left-secondary shadow" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <ul class="mb-4 childNav" data-parent="dashboard"
            style="display:none">
            <li class=""><a href="https://aatrox.herokuapp.com/dashboard/v1"><i
                        class="nav-icon i-Clock-3 text-base mr-2"></i><span class="item-name">Sidebar1a</span></a>
            </li>
            <li class=""><a href="https://aatrox.herokuapp.com/dashboard/v2"><i
                        class="nav-icon i-Clock-4 text-base mr-2"></i><span class="item-name">Sidebar1b</span></a>
            </li>
            <li class=""><a href="https://aatrox.herokuapp.com/dashboard/v3"><i
                        class="nav-icon i-Over-Time text-base mr-2"></i><span class="item-name">Sidebar1c</span></a>
            </li>
            <li class=""><a href="https://aatrox.herokuapp.com/dashboard/v4"><i
                        class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Sidebar1d </span></a>
            </li>
            <li class=""><a href="https://aatrox.herokuapp.com/dashboard/v5"><i
                        class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Sidebar1e</span></a>
            </li>
        </ul>
        <ul class="mb-4 childNav" data-parent="apps"
            style="display:block">
            <li class="active"><a class="flex"
                    href="https://aatrox.herokuapp.com/apps/calendar"><i class="nav-icon i-Calendar-4 text-base mr-2"></i><span
                        class="item-name">Sidebar2A</span></a>
            </li>
            <li class=""><a class="flex"
                    href="https://aatrox.herokuapp.com/apps/chat"><i class="nav-icon i-Book text-base mr-2"></i><span
                        class="item-name">Sidebar2B</span></a></li>
            <li class="dropdown-sidemenu"><a class="submenuLi"><i
                        class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Sidebar2C</span><i
                        class="dd-arrow i-Arrow-Down"></i></a>
                <ul class="submenu">
                    <li class="hover:bg-gray-100 "><a
                            class="hover:text-primary-500 flex items-center" href="https://aatrox.herokuapp.com/apps/contact/table"> <span
                                class="material-icons text-xs text-gray-800 mr-2">radio_button_unchecked</span>
                            <p>Sidebar2Ci</p>
                        </a></li>
                    <li class="hover:bg-gray-100 "><a
                            class="hover:text-primary-500 flex items-center" href="https://aatrox.herokuapp.com/apps/contact/list"> <span
                                class="material-icons text-xs text-gray-800 mr-2">radio_button_unchecked</span>
                            <p>Sidebar2Cii</p>
                        </a></li>
                    <li class="hover:bg-gray-100 "><a
                            class="hover:text-primary-500 flex items-center" href="https://aatrox.herokuapp.com/apps/contact/grid"> <span
                                class="material-icons text-xs text-gray-800 mr-2">radio_button_unchecked</span>
                            <p>Sidebar2Ciii</p>
                        </a></li>
                </ul>
            </li>
            <li class="dropdown-sidemenu"><a class="submenuLi"><i
                        class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Sidebar2D</span><i
                        class="dd-arrow i-Arrow-Down"></i></a>
                <ul class="submenu">
                    <li class="hover:bg-gray-100 "><a
                            class="hover:text-primary-500 flex items-center" href="https://aatrox.herokuapp.com/apps/ecommerce/shop"> <span
                                class="material-icons text-xs text-gray-800 mr-2">radio_button_unchecked</span>
                            <p>Sidebar2D</p>
                        </a></li>
                    <li class="hover:bg-gray-100 "><a
                            class="hover:text-primary-500 flex items-center" href="https://aatrox.herokuapp.com/apps/ecommerce/cart"> <span
                                class="material-icons text-xs text-gray-800 mr-2">radio_button_unchecked</span>
                            <p>Sidebar2Dii</p>
                        </a></li>
                    <li class="hover:bg-gray-100 ">
                        <a class="hover:text-primary-500 flex items-center" href="https://aatrox.herokuapp.com/apps/ecommerce/checkout">
                            <span class="material-icons text-xs text-gray-800 mr-2">radio_button_unchecked</span>
                            <p>Sidebar2Diii</p>
                        </a></li>
                </ul>
            </li>
            <li class=""><a class="flex"
                    href="https://aatrox.herokuapp.com/apps/inbox"><i class="nav-icon i-Add-Cart text-base mr-2"></i><span
                        class="item-name">Sidebar2E</span></a></li>
            <li class="dropdown-sidemenu"><a class="submenuLi"><i
                        class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Sidebar2F</span><i
                        class="dd-arrow i-Arrow-Down"></i></a>
                <ul class="submenu">
                    <li class="hover:bg-gray-100 "><a
                            class="hover:text-primary-400 flex items-center" href="https://aatrox.herokuapp.com/apps/invoice/create"> <span
                                class="material-icons text-xs text-gray-800 mr-2">radio_button_unchecked</span>
                            <p>Sidebar2Fi</p>
                        </a></li>
                    <li class="hover:bg-gray-100 ">
                        <a class="hover:text-primary-400 flex items-center" href="https://aatrox.herokuapp.com/apps/invoice/print"> <span
                                class="material-icons text-xs text-gray-800 mr-2">radio_button_unchecked</span>
                            <p>Sidebar2Fii</p>
                        </a></li>
                    <li class="hover:bg-gray-100 "><a
                            class="hover:text-primary-400 flex items-center" href="https://aatrox.herokuapp.com/apps/invoice/list"> <span
                                class="material-icons text-xs text-gray-800 mr-2">radio_button_unchecked</span>
                            <p>Sidebar2Fi</p>
                        </a></li>
                </ul>
            </li>
            <li class=""><a class="flex"
                    href="https://aatrox.herokuapp.com/apps/todo"><i class="nav-icon i-Book text-base mr-2"></i><span class="item-name">Todo
                        List</span></a></li>
        </ul>
        <ul class="mb-4 childNav" data-parent="components"
            style="display:none">
            <li class=""><a href="https://aatrox.herokuapp.com/components/animation"><i
                        class="nav-icon i-Clock-4 text-base mr-2"></i><span class="item-name">Sidebar3A</span></a></li>
            <li class=""><a href="https://aatrox.herokuapp.com/components/alert"><i
                        class="nav-icon i-Over-Time text-base mr-2"></i><span class="item-name">Sidebar3B</span></a></li>
            <li class=""><a href="https://aatrox.herokuapp.com/components/avatar"><i
                        class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Sidebar3C</span></a></li>
            <li class=""><a href="https://aatrox.herokuapp.com/components/badge"><i
                        class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Sidebar3D</span></a></li>
            <li class=""><a href="https://aatrox.herokuapp.com/components/buttons"><i
                        class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Sidebar3E</span></a></li>
            <li class=""><a href="https://aatrox.herokuapp.com/components/dropdown"><i
                        class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Sidebar3F</span></a></li>
            <li class=""><a href="https://aatrox.herokuapp.com/datatables/datatable"><i
                        class="nav-icon i-Clock-3 text-base mr-2"></i><span class="item-name">Sidebar3G</span></a>
            </li>
            <li class=""><a href="https://aatrox.herokuapp.com/components/forms"><i
                        class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Sidebar3H</span></a></li>
            <li class=""><a href="https://aatrox.herokuapp.com/components/modal"><i
                        class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Sidebar3I</span></a></li>
            <li class=""><a
                    href="https://aatrox.herokuapp.com/components/pagination"><i class="nav-icon i-Clock text-base mr-2"></i><span
                        class="item-name">Sidebar3J</span></a></li>
            <li class=""><a
                    href="https://aatrox.herokuapp.com/components/progressbar"><i class="nav-icon i-Clock text-base mr-2"></i><span
                        class="item-name">Sidebar3K</span></a></li>
        </ul>
        <ul class="mb-4 childNav" data-parent="widgets"
            style="display:none">
            <li class=""><a
                    href="https://aatrox.herokuapp.com/widgets/charts"><i class="nav-icon i-Clock-3 text-base mr-2"></i><span
                        class="item-name">Sidebar4A</span></a></li>
            <li class=""><a
                    href="https://aatrox.herokuapp.com/widgets/general"><i class="nav-icon i-Clock-3 text-base mr-2"></i><span
                        class="item-name">Sidebar4B</span></a></li>
        </ul>
        <ul class="mb-4 childNav" data-parent="pages"
            style="display:none">
            <li class=""><a
                    href="https://aatrox.herokuapp.com/pages/profile/profile.v1"><i class="nav-icon i-Find-User text-base mr-2"></i><span
                        class="item-name">Sidebar5A
                        1.0</span></a></li>
            <li class=""><a
                    href="https://aatrox.herokuapp.com/pages/profile/profile.v2"><i class="nav-icon i-Find-User text-base mr-2"></i><span
                        class="item-name">Sidebar5B
                        2.0</span></a></li>
        </ul>
        <ul class="mb-4 childNav" data-parent="sessions"
            style="display:none">
            <li class=""><a href="https://aatrox.herokuapp.com/pages/session/signin.v1"><i
                        class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">Sidebar6A</span></a>
            </li>
            <li class=""><a href="https://aatrox.herokuapp.com/pages/session/signin.v2"><i
                        class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">Sidebar6B</span></a>
            </li>
            <li class=""><a href="https://aatrox.herokuapp.com/pages/session/signin.v3"><i
                        class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">Sidebar6C</span></a>
            </li>
            <li class=""><a href="https://aatrox.herokuapp.com/pages/session/signin.v4"><i
                        class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">Sidebar6D</span></a>
            </li>
            <li class=""><a href="https://aatrox.herokuapp.com/pages/session/signup.v1"><i
                        class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">Sidebar6E</span></a>
            </li>
            <li class=""><a href="https://aatrox.herokuapp.com/pages/session/signup.v2"><i
                        class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">Sidebar6F</span></a>
            </li>
            <li class=""><a href="https://aatrox.herokuapp.com/pages/session/signup.v3"><i
                        class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">Sidebar6G</span></a>
            </li>
            <li class=""><a href="https://aatrox.herokuapp.com/pages/session/signup.v4"><i
                        class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">Sidebar6H</span></a>
            </li>
            <li class=""><a href="https://aatrox.herokuapp.com/pages/session/error-404"><i
                        class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">Sidebar6I</span></a></li>
            <li class=""><a
                    href="https://aatrox.herokuapp.com/pages/session/forgot-password"><i class="nav-icon i-Checked-User text-base mr-2"></i><span
                        class="item-name">Sidebar6J</span></a>
            </li>
        </ul>
        <ul class="mb-4 childNav" data-parent="charts"
            style="display:none">
            <li class=" "><a href="https://aatrox.herokuapp.com/charts/bar"><i
                        class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Sidebar7A</span></a></li>
            <li class=""><a href="https://aatrox.herokuapp.com/charts/bubble"><i
                        class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Sidebar7B</span></a></li>
            <li class=""><a href="https://aatrox.herokuapp.com/charts/area"><i
                        class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Sidebar7C</span></a></li>
            <li class=""><a
                    href="https://aatrox.herokuapp.com/charts/candlestick"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span
                        class="item-name">Sidebar7D</span></a></li>
            <li class=""><a href="https://aatrox.herokuapp.com/charts/column"><i
                        class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Sidebar7E</span></a></li>
            <li class=""><a href="https://aatrox.herokuapp.com/charts/line"><i
                        class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Sidebar7F</span></a></li>
            <li class=""><a href="https://aatrox.herokuapp.com/charts/pie"><i
                        class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Sidebar7G</span></a></li>
            <li class=""><a href="https://aatrox.herokuapp.com/charts/radar"><i
                        class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Sidebar7H</span></a></li>
            <li class=""><a href="https://aatrox.herokuapp.com/charts/radialbar"><i
                        class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Sidebar7I</span></a>
            </li>
            <li class=""><a href="https://aatrox.herokuapp.com/charts/sparkline"><i
                        class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Sidebar7J</span></a>
            </li>
            <li class=""><a href="https://aatrox.herokuapp.com/charts/scatter"><i
                        class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Sidebar7K</span></a>
            </li>
            <li class="dropdown-sidemenu"><a href="#"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span
                        class="item-name">Scatter</span><i class="dd-arrow i-Arrow-Down"></i></a>
                <ul class="submenu">
                    <li class=""><a
                            class="hover:text-primary-500" href="#">Submneu One</a></li>
                    <li class=""><a
                            class="hover:text-primary-500" href="#">Submneu Two</a></li>
                </ul>
            </li>
            <li class="dropdown-sidemenu"><a href="#"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span
                        class="item-name">Scatter</span><i class="dd-arrow i-Arrow-Down"></i></a>
                <ul class="submenu">
                    <li class=""><a
                            class="hover:text-primary-500" href="#">test One</a></li>
                    <li class=""><a
                            class="hover:text-primary-500" href="#">test Two</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>                <!-- Start:: content body-->
                <div class="main-content-body pt-10 px-4 flex flex-col sm:px-8">
                    <!-- Start:: content (Your custom content)-->

                    <div class="container mx-auto">
    <div class="breadcrumb flex items-center border-b border-gray-300 pb-4 mb-6">
        <p class="text-xl mr-1 font-semibold">Calendar</p>
        <ul>
            <li class="border-r border-gray-400"><a class="hover:text-gray-800" href="">head1</a></li>
            <li class="border-r border-gray-400"><a class="hover:text-gray-800" href="">head2</li>
            <li class="border-r border-gray-400"><a class="hover:text-gray-800" href="">head3</a></li>
            <li>                                 <a class="hover:text-gray-800" href="">head4</li>
        </ul>
    </div>
</div>

                    <div class="container mx-auto">

<div class="card">
    <div class="card-body">
        <div id="calendar"></div>
    </div>
</div>

                    </div>

                    <!-- Start:: content (Your custom content)-->
                    <!-- Start:: Footer-->
                    <!-- Start:: Footer-->
<div class="flex-grow mt-16"></div>
<div
    class="footer bg-white shadow-md shadow-red-400 rounded-t-xl px-8 py-6 flex justify-between items-center flex-wrap shadow-6dp">
    <a class="btn btn-flat btn-primary">Buy Aatrox</a>
    <p class="text-muted m-0">All rights reserved &copy; UI Lib 2021</p>
</div><!-- End:: Footer-->                    <!-- End:: Footer-->
                </div>
                <!-- End:: content body-->
            </div>


        </div>



        <div class="ul-sidebar-panel-overlay"></div>
        <script src="https://aatrox.herokuapp.com/js/vendors.bundle.min.js"></script>
        <script src="https://aatrox.herokuapp.com/js/layout2-main-bundle.js"></script>
        <script src="https://aatrox.herokuapp.com/js/pages/dropdown.js"></script>
        <script src="https://aatrox.herokuapp.com/js/pages/modal.js"></script>


<script src="https://aatrox.herokuapp.com/vendors/fullcalendar/main.min.js"></script>
        <script src="https://aatrox.herokuapp.com/js/pages/app/event-calendar.js"></script>




<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/highlight.min.js"></script>
<script src="https://aatrox.herokuapp.com/js/pages/doc.script.js"></script>




<script>
    console.log('No custom Styles available.')
</script>



    </body>

</html>

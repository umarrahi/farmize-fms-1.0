@extends('backend.layouts.app')

@section('title')
Dashboard - Farmize Management Syestem
@endsection

@section('content')
<!-- Start Page Content here -->
<div class="app-content">

    <!-- Top Bar -->
    @include('backend.layouts.topbar', ['title' => 'Dashboard'])

    <main class="p-6">

        <div class="grid xl:grid-cols-4 md:grid-cols-2 gap-6 mb-6">
            <div class="card">
                <div class="p-5 flex items-center justify-between">
                    <span>
                        <span class="text-slate-400 font-semibold block">Total Livestock</span>
                        <span class="text-xl font-semibold"><span>4564</span></span>
                    </span>

                    <span
                        class="flex justify-center items-center h-14 w-14 bg-blue-600/5 shadow shadow-blue-600/5 text-blue-600">
                        <i class="uil uil-user text-xl"></i>
                    </span>
                </div>

                <!-- <div class="px-5 py-4 bg-slate-50">
                            <a href=""
                                class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-blue-600 hover:text-blue-600 after:bg-blue-600">
                                View data <i class="uil uil-arrow-right"></i></a>
                        </div> -->
            </div>
            <!--end-->

            <div class="card">
                <div class="p-5 flex items-center justify-between">
                    <span>
                        <span class="text-slate-400 font-semibold block">Monthly Revenue</span>
                        <span class="text-xl font-semibold">$<span>15,400</span></span>
                    </span>

                    <span
                        class="flex justify-center items-center h-14 w-14 bg-blue-600/5 shadow shadow-blue-600/5 text-blue-600">
                        <i class="uil uil-dollar-sign-alt text-xl"></i>
                    </span>
                </div>

                <!-- <div class="px-5 py-4 bg-slate-50">
                            <a href=""
                                class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-blue-600 hover:text-blue-600 after:bg-blue-600">View
                                data <i class="uil uil-arrow-right"></i></a>
                        </div> -->
            </div>
            <!--end-->

            <div class="card">
                <div class="p-5 flex items-center justify-between">
                    <span>
                        <span class="text-slate-400 font-semibold block">Product Orders</span>
                        <span class="text-xl font-semibold"><span>450</span>+</span>
                    </span>

                    <span
                        class="flex justify-center items-center h-14 w-14 bg-blue-600/5 shadow shadow-blue-600/5 text-blue-600">
                        <i class="uil uil-shopping-bag text-xl"></i>
                    </span>
                </div>

                <!-- <div class="px-5 py-4 bg-slate-50">
                            <a href=""
                                class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-blue-600 hover:text-blue-600 after:bg-blue-600">View
                                data <i class="uil uil-arrow-right"></i></a>
                        </div> -->
            </div>
            <!--end-->

            <div class="card">
                <div class="p-5 flex items-center justify-between">
                    <span>
                        <span class="text-slate-400 font-semibold block">Harvested Items</span>
                        <span class="text-xl font-semibold"><span>356</span></span>
                    </span>

                    <span
                        class="flex justify-center items-center h-14 w-14 bg-blue-600/5 shadow shadow-blue-600/5 text-blue-600">
                        <i class="uil uil-store text-xl"></i>
                    </span>
                </div>

                <!-- <div class="px-5 py-4 bg-slate-50">
                            <a href=""
                                class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-blue-600 hover:text-blue-600 after:bg-blue-600">View
                                data <i class="uil uil-arrow-right"></i></a>
                        </div> -->
            </div>
            <!--end-->
        </div>

        <div class="grid lg:grid-cols-3 gap-6 mb-6">

            <div class="lg:col-span-2">
                <div class="card">
                    <div class="p-5">

                        <div class="grid lg:grid-cols-3 gap-5">
                            <div class="lg:col-span-2">
                                <div class="flex justify-between items-center">
                                    <h4 class="card-title mb-4">Statistics</h4>

                                    <div class="relative">
                                        <button class="hs-dropdown-toggle text-lg text-gray-600 p-2" type="button">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </button>

                                        <div
                                            class="hs-dropdown-menu hidden z-10 bg-white w-44 shadow rounded border p-2 transition-all duration-300 hs-dropdown-open:translate-y-0 translate-y-3">
                                            <a class="flex items-center py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-stone-100"
                                                href="javascript:void(0)">
                                                Action
                                            </a>
                                            <a class="flex items-center py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100"
                                                href="javascript:void(0)">
                                                Another action
                                            </a>
                                            <a class="flex items-center py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100"
                                                href="javascript:void(0)">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div id="morris-bar-example" class="morris-chart" style="height: 330px;"></div>
                            </div>

                            <div>
                                <h4 class="card-title mb-4">Stock</h4>

                                <div class="mx-auto text-center">
                                    <input data-plugin="knob" data-width="175" data-height="175" data-linecap=round
                                        data-fgColor="#7a08c2" value="45" data-skin="tron" data-angleOffset="180"
                                        data-readOnly=true data-thickness=".15" />
                                    <h5 class="text-gray-400 mt-5">Total sales made today</h5>
                                </div>


                                <div class="text-center w-full">
                                    <p class="text-gray-400 w-75 mx-auto line-clamp-2">Traditional heading
                                        elements are
                                        designed to work best in the meat of your page content.</p>
                                </div>

                                <div class="flex gap-4 text-center mt-3">
                                    <div class="w-1/2">
                                        <p class="text-gray-400 text-xl mb-1 truncate">Target</p>
                                        <h4><i class="fas fa-arrow-up text-success mr-1"></i>$7.8k</h4>

                                    </div>
                                    <div class="w-1/2">
                                        <p class="text-gray-400 text-xl mb-1 truncate">Last week</p>
                                        <h4><i class="fas fa-arrow-down text-danger mr-1"></i>$1.4k</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card">
                <div class="p-5">
                    <div class="flex justify-between items-center">
                        <h4 class="card-title mb-4">Total Revenue</h4>

                        <div class="relative">
                            <button class="hs-dropdown-toggle text-lg text-gray-600 p-2" type="button">
                                <i class="mdi mdi-dots-vertical"></i>
                            </button>

                            <div
                                class="hs-dropdown-menu hidden z-10 bg-white w-44 shadow rounded border p-2 transition-all duration-300 hs-dropdown-open:translate-y-0 translate-y-3">
                                <a class="flex items-center py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-stone-100"
                                    href="javascript:void(0)">
                                    Action
                                </a>
                                <a class="flex items-center py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100"
                                    href="javascript:void(0)">
                                    Another action
                                </a>
                                <a class="flex items-center py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100"
                                    href="javascript:void(0)">
                                    Something else here
                                </a>
                            </div>
                        </div>
                    </div>

                    <div id="morris-line-example" class="morris-chart" style="height: 265px;"></div>

                    <div class="flex text-center mt-4">
                        <div class="w-1/2">
                            <h4 class="text-xl">$7841.12</h4>
                            <p class="text-gray-400">Total Revenue</p>
                        </div>
                        <div class="w-1/2">
                            <h4 class="text-xl">17</h4>
                            <p class="text-gray-400">Open Compaign</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid xl:grid-cols-2 gap-6">
            <div class="card overflow-hidden">
                <div class="card-header flex justify-between items-center">
                    <h4 class="card-title">Recent Buyers</h4>
                    <a href="javascript:void(0);" class="btn btn-sm bg-light !text-sm text-gray-800 ">Export</a>
                </div>

                <div class="overflow-x-auto">
                    <div class="min-w-full inline-block align-middle whitespace-nowrap">
                        <div class="overflow-hidden">
                            <table class="min-w-full">
                                <thead class="bg-light/40 border-b border-gray-200">
                                    <tr>
                                        <th class="px-6 py-3 text-start">Product</th>
                                        <th class="px-6 py-3 text-start">Customers</th>
                                        <th class="px-6 py-3 text-start">Categories</th>
                                        <th class="px-6 py-3 text-start">Popularity</th>
                                        <th class="px-6 py-3 text-start">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-6 py-3">Eggs</td>
                                        <td class="px-6 py-3">John's Market </td>
                                        <td class="px-6 py-3">
                                            <span
                                                class="px-2 py-1 bg-success/10 text-success text-xs rounded">Organic</span>
                                        </td>
                                        <td class="px-6 py-3">
                                            <div class="flex w-full h-1.5 bg-light rounded-full overflow-hidden">
                                                <div class="progress-bar progress-bar-striped bg-success"
                                                    role="progressbar" aria-valuenow="85" aria-valuemin="20"
                                                    aria-valuemax="100" style="width:85%"></div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-3">$ 1200.00</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-6 py-3">Milk</td>
                                        <td class="px-6 py-3">Dairy Delights</td>
                                        <td class="px-6 py-3">
                                            <span
                                                class="px-2 py-1 bg-success/10 text-success text-xs rounded">Dairy</span>
                                        </td>
                                        <td class="px-6 py-3">
                                            <div class="flex w-full h-1.5 bg-light rounded-full overflow-hidden">
                                                <div class="progress-bar progress-bar-striped bg-success"
                                                    role="progressbar" aria-valuenow="72" aria-valuemin="20"
                                                    aria-valuemax="100" style="width:72%"></div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-3">$ 488</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-6 py-3">Corn</td>
                                        <td class="px-6 py-3">Green Grocers </td>
                                        <td class="px-6 py-3">
                                            <span
                                                class="px-2 py-1 bg-success/10 text-success text-xs rounded">Grain</span>
                                        </td>
                                        <td class="px-6 py-3">
                                            <div class="flex w-full h-1.5 bg-light rounded-full overflow-hidden">
                                                <div class="progress-bar progress-bar-striped bg-success"
                                                    role="progressbar" aria-valuenow="43" aria-valuemin="20"
                                                    aria-valuemax="100" style="width:43%"></div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-3">$ 99</td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-6 py-3">Wheat </td>
                                        <td class="px-6 py-3">Farmers' Choice</td>
                                        <td class="px-6 py-3">
                                            <span
                                                class="px-2 py-1 bg-success/10 text-success text-xs rounded">Grain</span>
                                        </td>
                                        <td class="px-6 py-3">
                                            <div class="flex w-full h-1.5 bg-light rounded-full overflow-hidden">
                                                <div class="progress-bar progress-bar-striped bg-success"
                                                    role="progressbar" aria-valuenow="37" aria-valuemin="20"
                                                    aria-valuemax="100" style="width:37%"></div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-3">$ 115</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card-->

            <div class="card overflow-hidden">
                <div class="card-header flex justify-between items-center">
                    <h4 class="card-title">Account Transactions</h4>
                    <a href="javascript:void(0);" class="btn btn-sm bg-light !text-sm text-gray-800 ">Export</a>
                </div>

                <div class="overflow-x-auto">
                    <div class="min-w-full inline-block align-middle whitespace-nowrap">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-sm">
                                <tbody>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-6 py-3">
                                            <div class="font-medium">4257 **** **** 7852</div>
                                            <div class="text-xs">11 April 2023</div>
                                        </td>
                                        <td class="px-6 py-3">
                                            <div class="font-medium">$79.49</div>
                                            <div class="text-xs">Amount</div>
                                        </td>
                                        <td class="px-6 py-3">
                                            <div class="font-medium">Visa</div>
                                            <div class="text-xs">Card</div>
                                        </td>
                                        <td class="px-6 py-3">
                                            <div class="font-medium">Helen Warren</div>
                                            <div class="text-xs">Pay</div>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-6 py-3">
                                            <div class="font-medium">4427 **** **** 4568</div>
                                            <div class="text-xs">28 Jan 2023</div>
                                        </td>
                                        <td class="px-6 py-3">
                                            <div class="font-medium">$1254.00</div>
                                            <div class="text-xs">Amount</div>
                                        </td>
                                        <td class="px-6 py-3">
                                            <div class="font-medium">Visa</div>
                                            <div class="text-xs">Card</div>
                                        </td>
                                        <td class="px-6 py-3">
                                            <div class="font-medium">Kayla Lambie</div>
                                            <div class="text-xs">Pay</div>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-6 py-3">
                                            <div class="font-medium">4265 **** **** 0025</div>
                                            <div class="text-xs">08 Dec 2022</div>
                                        </td>
                                        <td class="px-6 py-3">
                                            <div class="font-medium">$784.25</div>
                                            <div class="text-xs">Amount</div>
                                        </td>
                                        <td class="px-6 py-3">
                                            <div class="font-medium">Master</div>
                                            <div class="text-xs">Card</div>
                                        </td>
                                        <td class="px-6 py-3">
                                            <div class="font-medium">Hugo Lavarack</div>
                                            <div class="text-xs">Pay</div>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-200">
                                        <td class="px-6 py-3">
                                            <div class="font-medium">7845 **** **** 5214</div>
                                            <div class="text-xs">03 Dec 2022</div>
                                        </td>
                                        <td class="px-6 py-3">
                                            <div class="font-medium">$485.24</div>
                                            <div class="text-xs">Amount</div>
                                        </td>
                                        <td class="px-6 py-3">
                                            <div class="font-medium">Stripe</div>
                                            <div class="text-xs">Card</div>
                                        </td>
                                        <td class="px-6 py-3">
                                            <div class="font-medium">Amber Scurry</div>
                                            <div class="text-xs">Pay</div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-->
        </div>

    </main>

</div>
<!-- End Page content -->
@endsection


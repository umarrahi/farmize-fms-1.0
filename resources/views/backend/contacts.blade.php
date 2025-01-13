@extends('backend.layouts.app')

@section('title')
    Contacts - Farmize Management Syestem
@endsection

@section('content')
    <!-- Start Page Content here -->
    <div class="app-content">

        <!-- Top Bar -->
        @include('backend.layouts.topbar', ['title' => 'Contact List'])

        <main class="p-6">

            {{-- @include('backend.layouts.page-title') --}}

            <div class="">
                <!-- <h4 class="card-title">Selection</h4> -->
                <div class="card bg-white overflow-hidden">
                    <div
                        class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6 flex items-center flex-wrap gap-3 justify-between">
                        <div class="flex items-center flex-wrap gap-3">
                            <span class="text-base font-medium text-secondary-light mb-0">Show</span>
                            <select class="form-select form-select-sm w-auto">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                            <form class="navbar-search mb-0">
                                <input type="text" class="form-input w-auto" name="search" placeholder="Search here...">
                            </form>
                        </div>
                        <div>
                            <button type="button" data-hs-overlay="#hs-slide-up-animation-modal"
                            class="py-2 px-4 inline-flex justify-center items-center gap-2 border font-medium border-transparent bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                            <span><i class="uil uil-plus"></i></span>
                            <span>Add Contact</span>
                        </button>
                        </div>
                        
                    </div>

                    <div class="card-body p-4">
                        <div class="overflow-x-auto">
                            <div class="min-w-full inline-block align-middle">
                                <div class="border rounded-lg overflow-hidden">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col" class="py-3 ps-4">
                                                    <div class="flex items-center h-5">
                                                        <input id="table-checkbox-all" type="checkbox"
                                                            class="form-checkbox rounded">
                                                        <label for="table-checkbox-all" class="sr-only">Checkbox</label>
                                                    </div>
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-start text-sm text-gray-500">
                                                    Name</th>
                                                <th scope="col" class="px-6 py-3 text-start text-sm text-gray-500">
                                                    Title</th>
                                                <th scope="col" class="px-6 py-3 text-start text-sm text-gray-500">
                                                    Email</th>
                                                <th scope="col" class="px-6 py-3 text-end text-sm text-gray-500">
                                                    Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200">
                                            <tr>
                                                <td class="py-3 ps-4">
                                                    <div class="flex items-center h-5">
                                                        <input id="table-checkbox-1" type="checkbox"
                                                            class="form-checkbox rounded">
                                                        <label for="table-checkbox-1" class="sr-only">Checkbox</label>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                    Lindsay Walton</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                    Front-end Developer </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                    lindsay.walton@example.com</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                    <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="py-3 ps-4">
                                                    <div class="flex items-center h-5">
                                                        <input id="table-checkbox-2" type="checkbox"
                                                            class="form-checkbox rounded">
                                                        <label for="table-checkbox-2" class="sr-only">Checkbox</label>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                    Courtney Henry</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                    Designer</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                    courtneyhenry@example.com</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                    <a class="text-primary hover:text-sky-700" href="#">Delete</a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>

            {{-- Modal Box (START) --}}
            <div id="hs-slide-up-animation-modal"
                class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto h-[calc(100%-1rem)] max-h-full">
                <div
                    class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-14 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                    <div class="flex flex-col bg-white border shadow-sm rounded-xl">

                        {{-- Modal Header  --}}
                        <div class="flex justify-between items-center py-3 px-4 border-b">
                            <h3 class="font-bold text-gray-800">
                                Contact Details
                            </h3>
                            <button type="button"
                                class="hs-dropup-toggle inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-gray-500 hover:text-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-sm"
                                data-hs-overlay="#hs-slide-up-animation-modal">
                                <span class="sr-only">Close</span>
                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                        fill="currentColor" />
                                </svg>
                            </button>
                        </div>

                        {{-- Modal Body  --}}
                        <div>
                            <!-- Tabs Navigation -->
                            <nav class="flex flex-wrap items-center justify-around bg-gray-100 p-3 gap-2" aria-label="Tabs"
                                role="tablist">
                                <button type="button"
                                    class="hs-tab-active:font-semibold hs-tab-active:bg-primary w-full sm:w-40 flex justify-center py-2 items-center gap-2 border border-gray-300 transition-all text-sm whitespace-nowrap text-gray-700 active"
                                    id="tabs-item-1" data-hs-tab="#tabs-1" aria-controls="tabs-1" role="tab">
                                    Business Details
                                </button>
                                <button type="button"
                                    class="hs-tab-active:font-semibold hs-tab-active:bg-primary w-full sm:w-40 flex justify-center py-2 items-center gap-2 border border-gray-300 transition-all text-sm whitespace-nowrap text-gray-700"
                                    id="tabs-item-2" data-hs-tab="#tabs-2" aria-controls="tabs-2" role="tab">
                                    Personal Details
                                </button>
                                <button type="button"
                                    class="hs-tab-active:font-semibold hs-tab-active:bg-primary w-full sm:w-40 flex justify-center py-2 items-center gap-2 border border-gray-300 transition-all text-sm whitespace-nowrap text-gray-700"
                                    id="tabs-item-3" data-hs-tab="#tabs-3" aria-controls="tabs-3" role="tab">
                                    Address
                                </button>
                                <button type="button"
                                    class="hs-tab-active:font-semibold hs-tab-active:bg-primary w-full sm:w-40 flex justify-center py-2 items-center gap-2 border border-gray-300 transition-all text-sm whitespace-nowrap text-gray-700"
                                    id="tabs-item-4" data-hs-tab="#tabs-4" aria-controls="tabs-4" role="tab">
                                    Additional Details
                                </button>
                            </nav>

                            <!-- Tabs Content -->
                            <div class="mt-3 overflow-hidden">
                                <!-- Tab 1 Content -->
                                <div id="tabs-1" class="hidden transition-all duration-300 transform" role="tabpanel"
                                    aria-labelledby="tabs-item-1">

                                    <div class="card border-none">
                                        <div class="card-header">
                                            <h4 class="card-title text-primary ">Business Details</h4>
                                        </div>
                                        <div class="card-body p-6">
                                            <form action="#" class="space-y-5">
                                                <!-- Business Details  Section -->
                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                                    <div>
                                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Business Name</label>
                                                        <input type="text" name="" id="" value="" placeholder="Enter business name" class="form-input">
                                                    </div>

                                                    <div>
                                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Types*</label>
                                                        <select id="" name="age-class" required class="form-select cursor-pointer">
                                                            <option value="">Select type</option>
                                                            <option value="vender">Vender</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Save Button -->
                                                <div class="mt-5">
                                                    <button type="submit" class="btn bg-primary text-white">Save</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                </div>

                                <!-- Tab 2 Content -->
                                <div id="tabs-2" class="hidden transition-all duration-300 transform" role="tabpanel"
                                    aria-labelledby="tabs-item-2">

                                    <div class="card border-none">
                                        <div class="card-header border-b border-neutral-200">
                                            <h4 class="card-title text-primary">Personal Details</h4>
                                        </div>
                                        <div class="p-6">
                                            <form action="#" class="">

                                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                                    <div>
                                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">First Name</label>
                                                        <input type="text" name="" id="" value="" placeholder="Enter first name" class="form-input">
                                                    </div>
                                                    <div>
                                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Last Name</label>
                                                        <input type="text" name="" id="" value="" placeholder="Enter last name" class="form-input">
                                                    </div>
                                                    <div>
                                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Email</label>
                                                        <input type="text" name="" id="" value="" placeholder="Enter email" class="form-input">
                                                    </div>
                                                    <div>
                                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Phone</label>
                                                        <input type="text" name="" id="" value="" placeholder="Enter phone" class="form-input">
                                                    </div>
                                                </div>

                                                <!-- Save Button -->
                                                <div class="mt-4">
                                                    <button type="submit" class="btn bg-primary text-white">Save</button>
                                                </div>

                                            </form>

                                        </div>
                                    </div>

                                </div>

                                <!-- Tab 3 Content -->
                                <div id="tabs-3" class="hidden transition-all duration-300 transform" role="tabpanel"
                                    aria-labelledby="tabs-item-2">

                                    <div class="card border-none">
                                        <div class="card-header border-b border-neutral-200">
                                            <h4 class="card-title text-primary">Address</h4>
                                        </div>
                                        <div class="p-6">
                                            <form action="#" class="">
                                                <div class="grid grid-cols-1 md:grid-cols-1 gap-6">
                                                    <div>
                                                        <div>
                                                            <label class="text-gray-800 text-sm font-medium inline-block mb-2">Address</label>
                                                            <input type="text" name="" id="" value="" placeholder="Enter address" class="form-input">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Save Button -->
                                                <div class="mt-4">
                                                    <button type="submit" class="btn bg-primary text-white">Save</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                </div>

                                <!-- Tab 4 Content -->
                                <div id="tabs-4" class="hidden transition-all duration-300 transform" role="tabpanel"
                                    aria-labelledby="tabs-item-2">

                                    <div class="card border-none">
                                        <div class="card-header border-b border-neutral-200">
                                            <h4 class="card-title text-primary">Management Group</h4>
                                        </div>
                                        <div class="p-6">
                                            <form action="#" class="">
                                                <div class="grid grid-cols-1 md:grid-cols-1 gap-6">
                                                        <div>
                                                            <label class="text-gray-800 text-sm font-medium inline-block mb-2">Tax Identification Number (TIN)</label>
                                                            <input type="text" name="" id="" value="" placeholder="Enter Tax ID" class="form-input">
                                                        </div>
                                                        <div>
                                                            <label class="text-gray-800 text-sm font-medium inline-block mb-2">Alternate Phone</label>
                                                            <input type="tel" name="" id="" value="" placeholder="Enter alternate contact number" class="form-input">
                                                        </div>
                                                        <div>
                                                            <label class="text-gray-800 text-sm font-medium inline-block mb-2">Website URL</label>
                                                            <input type="text" name="" id="" value="" placeholder="Enter website link" class="form-input">
                                                        </div>
                                                        <div>
                                                            <label class="text-gray-800 text-sm font-medium inline-block mb-2">Notes/Remarks</label>
                                                            <textarea rows="4" name="" placeholder="Enter any additional notes or remarks" class="form-textarea ltr:rounded-l-none rtl:rounded-r-none"></textarea>
                                                        </div>
                                                   
                                                </div>

                                                <!-- Save Button -->
                                                <div class="mt-4">
                                                    <button type="submit" class="btn bg-primary text-white">Save</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        {{-- Modal Footer  --}}
                        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                            <button type="button"
                                class="hs-dropup-toggle py-2 px-4 inline-flex justify-center items-center gap-2 border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm"
                                data-hs-overlay="#hs-slide-up-animation-modal">
                                Close
                            </button>
                            <a class="py-2 px-4 inline-flex justify-center items-center gap-2 border border-transparent font-medium bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm"
                                href="#">
                                Save Changes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Modal Box (END) --}}
        </main>

    </div>
    <!-- End Page content -->
@endsection

<script>
    // JavaScript for Tab Switching
    document.addEventListener("DOMContentLoaded", function() {
        const tabButtons = document.querySelectorAll('[role="tab"]');
        const tabPanels = document.querySelectorAll('[role="tabpanel"]');

        // Add click event listener to each tab button
        tabButtons.forEach((button) => {
            button.addEventListener("click", () => {
                const targetId = button.getAttribute(
                    "data-hs-tab"); // Get the target tab content ID

                // Deactivate all tabs and hide their content
                tabButtons.forEach((btn) => btn.classList.remove("text-white", "bg-primary"));
                tabPanels.forEach((panel) => panel.classList.add("hidden"));

                // Activate the clicked tab and show its content
                button.classList.add("text-white", "bg-primary");
                document.querySelector(targetId).classList.remove("hidden");
            });
        });

        // Initialize the first tab as active by default
        tabButtons[0].classList.add("text-white", "bg-primary");
        tabPanels[0].classList.remove("hidden");
    });
</script>
@extends('backend.layouts.app')

@section('title')
    Add Livestock - Farmize Management System
@endsection

@section('content')
    <!-- Start Page Content here -->
    <div class="app-content">

        <!-- Top Bar -->
        @include('backend.layouts.topbar', ['title' => 'Add Livestock'])

        <main class="p-6">

            <div class="card border-none">
                <div class="card-header">
                    <h4 class="card-title text-primary ">New Livestock Treatment Inventory Details</h4>
                </div>
                <div class="card-body p-6">
                    <form action="#" class="space-y-5">
                        <!-- Details Section -->
                        <div class="card">
                            <div class="card-header bg-slate-200">
                                <h5 class="card-title text-blue-950 ">Details</h5>
                            </div>
                            <div class="card-body p-6">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Type*</label>
                                        <select id="" name="" required
                                            class="form-select cursor-pointer shadow-sm">
                                            <option value="">Select type</option>
                                            <option value="1">Vaccine 1</option>
                                            <option value="2">Vaccine 2</option>ٖ
                                        </select>
                                    </div>
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Title*</label>
                                        <select id="" name="" required
                                            class="form-select cursor-pointer shadow-sm">
                                            <option value="">Select option</option>
                                            <option value="1">Product 1</option>
                                            <option value="2">Product 2</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Container
                                            Unit</label>
                                        <select id="" name="" class="form-select cursor-pointer">
                                            <option value="">Select unit</option>
                                            <option value="1">Liter</option>
                                            <option value="2">Milliliters</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Container Size
                                            *</label>
                                        <div class="flex rounded-md shadow-sm -space-x-px">
                                            <input type="number" class="form-input rounded-s">
                                            <span
                                                class="px-4 inline-flex items-center rounded rounded-s-none border border-gray-200 bg-gray-50 text-sm text-gray-500">
                                                L
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Withholding -
                                            Meat *</label>
                                        <div class="flex rounded-md shadow-sm -space-x-px">
                                            <input type="text" class="form-input rounded-s">
                                            <span
                                                class="px-4 inline-flex items-center rounded rounded-s-none border border-gray-200 bg-gray-50 text-sm text-gray-500">
                                                Days
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Withholding -
                                            ESI</label>
                                        <div class="flex rounded-md shadow-sm -space-x-px">
                                            <input type="text" class="form-input rounded-s">
                                            <span
                                                class="px-4 inline-flex items-center rounded rounded-s-none border border-gray-200 bg-gray-50 text-sm text-gray-500">
                                                Days
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Dosage</label>
                                        <div class="flex rounded-md shadow-sm -space-x-px">
                                            <input type="text" class="form-input rounded-s">
                                            <span
                                                class="px-4 inline-flex items-center rounded rounded-s-none border border-gray-200 bg-gray-50 text-sm text-gray-500">
                                                ml
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Dosage Rate
                                            *</label>
                                        <select id="" name="" class="form-select cursor-pointer">
                                            <option value="">Select rate</option>
                                            <option value="1">Per head</option>
                                            <option value="2">Per head 2</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Cost Per
                                            Container</label>
                                        <div class="flex rounded-md shadow-sm -space-x-px">
                                            <span
                                                class="px-4 inline-flex items-center rounded-s border border-gray-200 bg-gray-50 text-sm text-gray-500">$</span>
                                            <input type="text" class="form-input rounded-s">
                                            <span
                                                class="px-6 inline-flex items-center rounded rounded-s-none border border-gray-200 bg-gray-50 text-sm text-gray-500">
                                                /Container
                                            </span>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- Container Details Section -->
                        <div class="card">
                            <div class="card-header bg-slate-200">
                                <h5 class="card-title text-blue-950 ">Container Details</h5>
                            </div>
                            <div class="card-body p-6 grid gap-6">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Remaining</label>
                                        <div class="flex rounded-md shadow-sm -space-x-px">
                                            <input type="number" class="form-input rounded-s">
                                            <span
                                                class="px-4 inline-flex items-center rounded rounded-s-none border border-gray-200 bg-gray-50 text-sm text-gray-500">
                                                L
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Remaining Accurate As of Date *</label>
                                        <p class="mb-2">Treatments recorded before this date will not affect the remaining amount.</p>
                                        <input type="date" name="" id="" class="form-input shadow-sm">
                                    </div>
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Batch Number</label>
                                        <input type="text" name="" id="" placeholder="Enter batch no" class="form-input shadow-sm">
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Manufacture Data</label>
                                        <input type="date" name="" id="" class="form-input shadow-sm">
                                    </div>
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Expiry Data</label>
                                        <input type="date" name="" id="" class="form-input shadow-sm">
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 gap-6">
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Description</label>
                                        <textarea rows="4" name="" placeholder="Write description here..." class="form-textarea shadow-sm ltr:rounded-l-none rtl:rounded-r-none"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>

                         <!-- Purchase Details Section -->
                         <div class="card">
                            <div class="card-header bg-slate-200">
                                <h5 class="card-title text-blue-950 ">Purchase Details</h5>
                            </div>
                            <div class="card-body p-6 grid gap-6">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Purchase Date</label>
                                        <input type="date" name="" id="" class="form-input shadow-sm">
                                    </div>
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Recieved Date</label>
                                        <input type="date" name="" id="" class="form-input shadow-sm">
                                    </div>
                                   
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Purchae Order Number</label>
                                        <input type="text" name="" id="" placeholder="Enter order number" class="form-input shadow-sm">
                                    </div>
                                </div>


                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Supplier Contact</label>
                                        <select id="" name="" required
                                            class="form-select cursor-pointer shadow-sm">
                                            <option value="">Select contact</option>
                                            <option value="1">contact 1</option>
                                            <option value="2">contact 2</option>ٖ
                                        </select>
                                    </div>
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Supplier Name</label>
                                        <input type="text" name="" id="" placeholder="Enter supplier name" class="form-input shadow-sm">
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 gap-6">
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Address</label>
                                        <input type="text" name="" id="" placeholder="Enter address" class="form-input shadow-sm">
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Town</label>
                                        <input type="text" name="" id="" placeholder="Enter town" class="form-input shadow-sm">
                                    </div>
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Zip</label>
                                        <input type="text" name="" id="" placeholder="Enter zip code" class="form-input shadow-sm">
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Country</label>
                                        <select id="" name="" required
                                            class="form-select cursor-pointer shadow-sm">
                                            <option value="">Select country</option>
                                            <option value="1">Pakistan</option>
                                            <option value="2">India</option>ٖ
                                            <option value="3">Turkey</option>ٖ
                                        </select>
                                    </div>
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Zip</label>
                                        <input type="text" name="" id="" placeholder="Enter zip code" class="form-input shadow-sm">
                                    </div>
                                </div>

                            </div>
                        </div>


                        <!-- Save Button -->
                        <div class="mt-5 flex item-center gap-3">
                            <button type="submit"
                                class="py-2 px-4 inline-flex justify-center items-center gap-2 border font-medium border-transparent bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                                Add
                            </button>
                            <a class="py-2 px-4 inline-flex justify-center items-center gap-2 border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm"
                                href="{{ url('livestock') }}">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>



            </div>

            <!-- end card -->

        </main>

    </div>
    <!-- End Page content -->
@endsection

{{-- <div id="google_translate_element"></div> --}}

{{-- <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"> </script> --}}

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

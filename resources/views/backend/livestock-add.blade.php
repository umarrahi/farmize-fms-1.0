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
                    <h4 class="card-title text-primary ">Animal Details</h4>
                </div>
                <div class="card-body p-6">
                    <form action="#" class="space-y-5">
                        <!-- Animal Details  Section -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <!-- Species -->
                            <div>
                                <label class="text-gray-800 text-sm font-medium inline-block mb-2">Species
                                    *</label>
                                <div class="flex items-center gap-2">
                                    <div class="form-check">
                                        <input type="radio" class="form-radio text-primary" name="formRadio"
                                            id="formRadio01" checked="">
                                        <label class="ml-2" for="formRadio01">Cattle</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-radio text-primary" name="formRadio"
                                            id="formRadio02">
                                        <label class="ml-2" for="formRadio02">Sheep</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Breed -->
                            <div>
                                <label for="breed"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Breed</label>
                                <select id="breed" name="breed" required class="form-select cursor-pointer">
                                    <option value="">Make a selection</option>
                                    <option value="breed1">Breed 1</option>
                                    <option value="breed2">Breed 2</option>ٖ
                                </select>
                            </div>

                            <!-- Age Class -->
                            <div>
                                <label for="breed" class="text-gray-800 text-sm font-medium inline-block mb-2">Age
                                    Class</label>
                                <select id="age-class" name="age-class" required class="form-select cursor-pointer">
                                    <option value="">Make a selection</option>
                                    <option value="young">Young</option>
                                    <option value="adult">Adult</option>
                                </select>
                            </div>

                            <!-- Date of Birth -->
                            <div>
                                <label for="" class="text-gray-800 text-sm font-medium inline-block mb-2">Date of
                                    Birth *</label>
                                <p class="mb-2">Select a day, month, or year of birth for your animal.</p>
                                <div class="flex items-center gap-2 mb-2">
                                    <label><input type="radio" name="dob-option"
                                            class="form-radio text-primary value="day"> Day</label>
                                    <label><input type="radio" name="dob-option"
                                            class="form-radio text-primary value="month"> Month</label>
                                    <label><input type="radio" name="dob-option"
                                            class="form-radio text-primary value="year" checked>
                                        Year</label>
                                    <label><input type="radio" name="dob-option"
                                            class="form-radio text-primary value="not-track"> Do not
                                        track</label>
                                </div>
                                <input type="date" name="dob" id="dob" class="form-input">
                            </div>

                            <!-- Hide Color -->
                            <div>
                                <label for="hide-color" class="text-gray-800 text-sm font-medium inline-block mb-2">Hide
                                    Color</label>
                                <select id="hide-color" name="hide-color" required class="form-select cursor-pointer">
                                    <option value="">Make a selection</option>
                                    <option value="color1">Color 1</option>
                                    <option value="color2">Color 2</option>
                                </select>
                            </div>

                        </div>

                        <!-- Identification Section -->
                        <div class="card">
                            <div class="card-header bg-slate-200">
                                <h5 class="card-title text-blue-950 ">Identification</h5>
                            </div>
                            <div class="card-body p-6">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                    <!-- Name -->
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Name</label>
                                        <input type="text" id="" placeholder="Name" class="form-input">
                                    </div>
                                    <!-- Tatto -->
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Tatto</label>
                                        <input type="text" id="" placeholder="Tatto" class="form-input">
                                    </div>
                                    <!-- Brand -->
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Brand</label>
                                        <input type="text" id="" placeholder="Brand" class="form-input">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Percentage Section -->
                        <div class="card">
                            <div class="card-header bg-slate-200">
                                <h5 class="card-title text-blue-950 ">Percentage</h5>
                            </div>
                            <div class="card-body p-6">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                    <!-- Dam -->
                                    <div>
                                        <label class="text-gray-800 text-sm font-medium inline-block mb-2">Dam</label>
                                        <div class="flex items-center gap-4 mb-3">
                                            <label class="flex items-center gap-2 text-gray-700">
                                                <input type="radio" name="dam" value="list"
                                                    class="form-radio text-primary">
                                                Select from individuals list
                                            </label>
                                            <label class="flex items-center gap-2 text-gray-700">
                                                <input type="radio" name="dam" value="manual"
                                                    class="form-radio text-primary" checked>
                                                Manual entry
                                            </label>
                                        </div>
                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                            <div>
                                                <label class="text-gray-800 text-sm font-medium inline-block mb-2">Visual
                                                    ID</label>
                                                <input type="text" id="visualID" placeholder="Visual ID"
                                                    class="form-input">
                                            </div>
                                            <div>
                                                <label
                                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Name</label>
                                                <input type="text" id="name" placeholder="Name"
                                                    class="form-input">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Surrogate -->
                                    <div>
                                        <label
                                            class="text-gray-800 text-sm font-medium inline-block mb-2">Surrogate</label>
                                        <div class="flex items-center gap-4 mb-3">
                                            <label class="flex items-center gap-2 text-gray-700">
                                                <input type="radio" name="surrogate" value="list"
                                                    class="form-radio text-primary">
                                                Select from individuals list
                                            </label>
                                            <label class="flex items-center gap-2 text-gray-700">
                                                <input type="radio" name="surrogate" value="manual"
                                                    class="form-radio text-primary">
                                                Manual entry
                                            </label>
                                        </div>
                                        <button type="button"
                                            class="btn border border-gray-300 bg-white text-gray-700 hover:bg-gray-100 px-4 py-2 rounded-md text-sm">
                                            Select from individuals list
                                        </button>
                                    </div>

                                    <!-- Sire -->
                                    <div>
                                        <h3 class="text-sm font-medium mb-2">Sire</h3>
                                        <div class="flex items-center gap-4 mb-3">
                                            <label class="flex items-center gap-2 text-gray-700">
                                                <input type="radio" name="sire" value="list"
                                                    class="form-radio text-primary">
                                                Select from individuals list
                                            </label>
                                            <label class="flex items-center gap-2 text-gray-700">
                                                <input type="radio" name="sire" value="manual"
                                                    class="form-radio text-primary">
                                                Manual entry
                                            </label>
                                        </div>
                                        <button type="button"
                                            class="btn border border-gray-300 bg-white text-gray-700 hover:bg-gray-100 px-4 py-2 rounded-md text-sm">
                                            Select from individuals list
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Save Button -->
                        <div class="mt-5">
                            <button type="submit" class="btn bg-primary text-white">Save</button>
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

@extends('backend.layouts.app')

@section('title')
   Add Animals - Farmize Management Syestem
@endsection

@section('content')
    <!-- Start Page Content here -->
    <div class="app-content">

        <!-- Top Bar -->
        @include('backend.layouts.topbar', ['title' => 'Animals Add'])

        <main class="p-6">

            <div class="card">
                <div>
                    <!-- Tabs Navigation -->
                    <nav class="flex flex-wrap items-center justify-around bg-gray-100 p-3 gap-2" aria-label="Tabs"
                        role="tablist">
                        <button type="button"
                            class="hs-tab-active:-semibold hs-tab-active:bg-primary w-full sm:w-40 flex justify-center py-2 items-center gap-2 border border-gray-300 transition-all text-sm whitespace-nowrap text-gray-700 active"
                            id="tabs-item-1" data-hs-tab="#tabs-1" aria-controls="tabs-1" role="tab">
                            Animal Details
                        </button>
                        <button type="button"
                            class="hs-tab-active:-semibold hs-tab-active:bg-primary w-full sm:w-40 flex justify-center py-2 items-center gap-2 border border-gray-300 transition-all text-sm whitespace-nowrap text-gray-700"
                            id="tabs-item-2" data-hs-tab="#tabs-2" aria-controls="tabs-2" role="tab">
                            Farm Entry
                        </button>
                        <button type="button"
                            class="hs-tab-active:-semibold hs-tab-active:bg-primary w-full sm:w-40 flex justify-center py-2 items-center gap-2 border border-gray-300 transition-all text-sm whitespace-nowrap text-gray-700"
                            id="tabs-item-3" data-hs-tab="#tabs-3" aria-controls="tabs-3" role="tab">
                            Tag
                        </button>
                        <button type="button"
                            class="hs-tab-active:-semibold hs-tab-active:bg-primary w-full sm:w-40 flex justify-center py-2 items-center gap-2 border border-gray-300 transition-all text-sm whitespace-nowrap text-gray-700"
                            id="tabs-item-4" data-hs-tab="#tabs-4" aria-controls="tabs-4" role="tab">
                            Management Group
                        </button>
                        <button type="button"
                            class="hs-tab-active:-semibold hs-tab-active:bg-primary w-full sm:w-40 flex justify-center py-2 items-center gap-2 border border-gray-300 transition-all text-sm whitespace-nowrap text-gray-700"
                            id="tabs-item-5" data-hs-tab="#tabs-5" aria-controls="tabs-5" role="tab">
                            Weight
                        </button>
                        <button type="button"
                            class="hs-tab-active:-semibold hs-tab-active:bg-primary w-full sm:w-40 flex justify-center py-2 items-center gap-2 border border-gray-300 transition-all text-sm whitespace-nowrap text-gray-700"
                            id="tabs-item-6" data-hs-tab="#tabs-6" aria-controls="tabs-6" role="tab">
                            Conditional Score
                        </button>
                        <button type="button"
                            class="hs-tab-active:-semibold hs-tab-active:bg-primary w-full sm:w-40 flex justify-center py-2 items-center gap-2 border border-gray-300 transition-all text-sm whitespace-nowrap text-gray-700"
                            id="tabs-item-7" data-hs-tab="#tabs-7" aria-controls="tabs-7" role="tab">
                            Movement
                        </button>
                    </nav>

                    <!-- Tabs Content -->
                    <div class="mt-3 overflow-hidden">
                        <!-- Tab 1 Content -->
                        <div id="tabs-1" class="hidden transition-all duration-300 transform" role="tabpanel"
                            aria-labelledby="tabs-item-1">

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
                                                        <input type="radio" class="form-radio text-primary"
                                                            name="formRadio" id="formRadio01" checked="">
                                                        <label class="ml-2" for="formRadio01">Cattle</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-radio text-primary"
                                                            name="formRadio" id="formRadio02">
                                                        <label class="ml-2" for="formRadio02">Sheep</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Breed -->
                                            <div>
                                                <label for="breed"
                                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Breed</label>
                                                <select id="breed" name="breed" required
                                                    class="form-select cursor-pointer">
                                                    <option value="">Make a selection</option>
                                                    <option value="breed1">Breed 1</option>
                                                    <option value="breed2">Breed 2</option>ٖ
                                                </select>
                                            </div>

                                            <!-- Age Class -->
                                            <div>
                                                <label for="breed"
                                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Age
                                                    Class</label>
                                                <select id="age-class" name="age-class" required
                                                    class="form-select cursor-pointer">
                                                    <option value="">Make a selection</option>
                                                    <option value="young">Young</option>
                                                    <option value="adult">Adult</option>
                                                </select>
                                            </div>

                                            <!-- Date of Birth -->
                                            <div>
                                                <label for=""
                                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Date of
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
                                                <label for="hide-color"
                                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Hide
                                                    Color</label>
                                                <select id="hide-color" name="hide-color" required
                                                    class="form-select cursor-pointer">
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
                                                        <label
                                                            class="text-gray-800 text-sm font-medium inline-block mb-2">Name</label>
                                                        <input type="text" id="" placeholder="Name"
                                                            class="form-input">
                                                    </div>
                                                    <!-- Tatto -->
                                                    <div>
                                                        <label
                                                            class="text-gray-800 text-sm font-medium inline-block mb-2">Tatto</label>
                                                        <input type="text" id="" placeholder="Tatto"
                                                            class="form-input">
                                                    </div>
                                                    <!-- Brand -->
                                                    <div>
                                                        <label
                                                            class="text-gray-800 text-sm font-medium inline-block mb-2">Brand</label>
                                                        <input type="text" id="" placeholder="Brand"
                                                            class="form-input">
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
                                                    <!-- Name -->
                                                    <div>
                                                        <label
                                                            class="text-gray-800 text-sm font-medium inline-block mb-2">Name</label>
                                                        <input type="text" id="" placeholder="Name"
                                                            class="form-input">
                                                    </div>
                                                    <!-- Tatto -->
                                                    <div>
                                                        <label
                                                            class="text-gray-800 text-sm font-medium inline-block mb-2">Tatto</label>
                                                        <input type="text" id="" placeholder="Tatto"
                                                            class="form-input">
                                                    </div>
                                                    <!-- Brand -->
                                                    <div>
                                                        <label
                                                            class="text-gray-800 text-sm font-medium inline-block mb-2">Brand</label>
                                                        <input type="text" id="" placeholder="Brand"
                                                            class="form-input">
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

                        </div>

                        <!-- Tab 2 Content -->
                        <div id="tabs-2" class="hidden transition-all duration-300 transform" role="tabpanel"
                            aria-labelledby="tabs-item-2">

                            <div class="card border-none">
                                <div class="card-header border-b border-neutral-200">
                                    <h4 class="card-title text-primary">Animal Details</h4>
                                </div>
                                <div class="p-6">
                                    <form action="#" class="">
                                        <div class="grid grid-cols-1 md:grid-cols-2  gap-6">

                                            <div class="flex items-center gap-2">
                                                <div class="form-check">
                                                    <input type="radio" class="form-radio text-primary"
                                                        name="formRadio" id="formRadio01" checked="">
                                                    <label class="ml-2" for="formRadio01">Cattle</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" class="form-radio text-primary"
                                                        name="formRadio" id="formRadio02">
                                                    <label class="ml-2" for="formRadio02">Sheep</label>
                                                </div>
                                            </div>

                                            <div>
                                                <label for="inputEmail4"
                                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Email</label>
                                                <input type="email" class="form-input" id="inputEmail4"
                                                    placeholder="Email">
                                            </div>
                                        </div>

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
                                    <h4 class="card-title text-primary">Animal Details</h4>
                                </div>
                                <div class="p-6">
                                    <form action="#" class="">
                                        <div class="grid grid-cols-1 md:grid-cols-2  gap-6">

                                            <div class="flex items-center gap-2">
                                                <div class="form-check">
                                                    <input type="radio" class="form-radio text-primary"
                                                        name="formRadio" id="formRadio01" checked="">
                                                    <label class="ml-2" for="formRadio01">Cattle</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" class="form-radio text-primary"
                                                        name="formRadio" id="formRadio02">
                                                    <label class="ml-2" for="formRadio02">Sheep</label>
                                                </div>
                                            </div>

                                            <div>
                                                <label for="inputEmail4"
                                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Email</label>
                                                <input type="email" class="form-input" id="inputEmail4"
                                                    placeholder="Email">
                                            </div>
                                        </div>

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
                                    <h4 class="card-title text-primary">Animal Details</h4>
                                </div>
                                <div class="p-6">
                                    <form action="#" class="">
                                        <div class="grid grid-cols-1 md:grid-cols-2  gap-6">

                                            <div class="flex items-center gap-2">
                                                <div class="form-check">
                                                    <input type="radio" class="form-radio text-primary"
                                                        name="formRadio" id="formRadio01" checked="">
                                                    <label class="ml-2" for="formRadio01">Cattle</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" class="form-radio text-primary"
                                                        name="formRadio" id="formRadio02">
                                                    <label class="ml-2" for="formRadio02">Sheep</label>
                                                </div>
                                            </div>

                                            <div>
                                                <label for="inputEmail4"
                                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Email</label>
                                                <input type="email" class="form-input" id="inputEmail4"
                                                    placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <button type="submit" class="btn bg-primary text-white">Save</button>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>

                        <!-- Tab 5 Content -->
                        <div id="tabs-5" class="hidden transition-all duration-300 transform" role="tabpanel"
                            aria-labelledby="tabs-item-2">

                            <div class="card border-none">
                                <div class="card-header border-b border-neutral-200">
                                    <h4 class="card-title text-primary">Animal Details</h4>
                                </div>
                                <div class="p-6">
                                    <form action="#" class="">
                                        <div class="grid grid-cols-1 md:grid-cols-2  gap-6">

                                            <div class="flex items-center gap-2">
                                                <div class="form-check">
                                                    <input type="radio" class="form-radio text-primary"
                                                        name="formRadio" id="formRadio01" checked="">
                                                    <label class="ml-2" for="formRadio01">Cattle</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" class="form-radio text-primary"
                                                        name="formRadio" id="formRadio02">
                                                    <label class="ml-2" for="formRadio02">Sheep</label>
                                                </div>
                                            </div>

                                            <div>
                                                <label for="inputEmail4"
                                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Email</label>
                                                <input type="email" class="form-input" id="inputEmail4"
                                                    placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <button type="submit" class="btn bg-primary text-white">Save</button>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>

                        <!-- Tab 5 Content -->
                        <div id="tabs-5" class="hidden transition-all duration-300 transform" role="tabpanel"
                            aria-labelledby="tabs-item-2">

                            <div class="card border-none">
                                <div class="card-header border-b border-neutral-200">
                                    <h4 class="card-title text-primary">Animal Details</h4>
                                </div>
                                <div class="p-6">
                                    <form action="#" class="">
                                        <div class="grid grid-cols-1 md:grid-cols-2  gap-6">

                                            <div class="flex items-center gap-2">
                                                <div class="form-check">
                                                    <input type="radio" class="form-radio text-primary"
                                                        name="formRadio" id="formRadio01" checked="">
                                                    <label class="ml-2" for="formRadio01">Cattle</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" class="form-radio text-primary"
                                                        name="formRadio" id="formRadio02">
                                                    <label class="ml-2" for="formRadio02">Sheep</label>
                                                </div>
                                            </div>

                                            <div>
                                                <label for="inputEmail4"
                                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Email</label>
                                                <input type="email" class="form-input" id="inputEmail4"
                                                    placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <button type="submit" class="btn bg-primary text-white">Save</button>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>

                        <!-- Tab 5 Content -->
                        <div id="tabs-6" class="hidden transition-all duration-300 transform" role="tabpanel"
                            aria-labelledby="tabs-item-2">

                            <div class="card border-none">
                                <div class="card-header border-b border-neutral-200">
                                    <h4 class="card-title text-primary">Animal Details</h4>
                                </div>
                                <div class="p-6">
                                    <form action="#" class="">
                                        <div class="grid grid-cols-1 md:grid-cols-2  gap-6">

                                            <div class="flex items-center gap-2">
                                                <div class="form-check">
                                                    <input type="radio" class="form-radio text-primary"
                                                        name="formRadio" id="formRadio01" checked="">
                                                    <label class="ml-2" for="formRadio01">Cattle</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" class="form-radio text-primary"
                                                        name="formRadio" id="formRadio02">
                                                    <label class="ml-2" for="formRadio02">Sheep</label>
                                                </div>
                                            </div>

                                            <div>
                                                <label for="inputEmail4"
                                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Email</label>
                                                <input type="email" class="form-input" id="inputEmail4"
                                                    placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <button type="submit" class="btn bg-primary text-white">Save</button>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>

                        <!-- Tab 7 Content -->
                        <div id="tabs-7" class="hidden transition-all duration-300 transform" role="tabpanel"
                            aria-labelledby="tabs-item-2">

                            <div class="card border-none">
                                <div class="card-header border-b border-neutral-200">
                                    <h4 class="card-title text-primary">Animal Details</h4>
                                </div>
                                <div class="p-6">
                                    <form action="#" class="">
                                        <div class="grid grid-cols-1 md:grid-cols-2  gap-6">

                                            <div class="flex items-center gap-2">
                                                <div class="form-check">
                                                    <input type="radio" class="form-radio text-primary"
                                                        name="formRadio" id="formRadio01" checked="">
                                                    <label class="ml-2" for="formRadio01">Cattle</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" class="form-radio text-primary"
                                                        name="formRadio" id="formRadio02">
                                                    <label class="ml-2" for="formRadio02">Sheep</label>
                                                </div>
                                            </div>

                                            <div>
                                                <label for="inputEmail4"
                                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Email</label>
                                                <input type="email" class="form-input" id="inputEmail4"
                                                    placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <button type="submit" class="btn bg-primary text-white">Save</button>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div id="google_translate_element"></div>


            </div>
            <!-- end card -->

        </main>

    </div>
    <!-- End Page content -->
@endsection


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

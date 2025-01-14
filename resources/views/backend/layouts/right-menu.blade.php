<div class="profile-menu">
    <div class="flex flex-col items-center h-full gap-4 py-10 px-3">
        <!-- Profile Link -->
        <a href="#" type="button" class="flex flex-col items-center gap-1">
            <img src="{{ asset('assets/images/users/avatar-6.jpg') }}" alt="user-image" class="rounded-full h-8 w-8">
            <span class="font-medium text-base">Umar Rahi</span>
            <span class="text-sm">Admin</span>
        </a>

        <!-- Search Modal Button -->
        <button type="button" data-hs-overlay="#search-modal" class="bg-white rounded-full shadow-md p-2">
            <span class="sr-only">Search</span>
            <span class="flex items-center justify-center h-6 w-6">
                <i class="uil uil-search text-2xl"></i>
            </span>
        </button>

        <!-- Fullscreen Toggle Button -->
        <div class="flex">
            <button data-toggle="fullscreen" type="button" class="bg-white rounded-full shadow-md p-2">
                <span class="sr-only">Fullscreen Mode</span>
                <span class="flex items-center justify-center h-6 w-6">
                    <i class="uil uil-focus text-2xl"></i>
                </span>
            </button>
        </div>
    </div>
</div>



<div id="search-modal"
    class="hs-overlay hidden w-full h-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto pointer-events-none">
    <div
        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
        <div
            class="flex flex-col bg-white shadow-sm rounded-xl pointer-events-auto overflow-hidden">
            <div class="relative z-[60]">
                <input type="search" id="search-input" class="form-input ps-10">
                <span class="absolute start-3 top-1.5">
                    <i class="uil uil-search text-lg"></i>
                </span>
    
                <span class="absolute end-3 top-1.5">
                    <button data-hs-overlay="#search-modal">
                        <i class="uil uil-times text-lg"></i>
                    </button>
                </span>
            </div>
            
        </div>
    </div>
</div>
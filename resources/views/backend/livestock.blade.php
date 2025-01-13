@extends('backend.layouts.app')

@section('title')
    Livestock - Farmize Management System
@endsection

@section('content')
<!-- Start Page Content here -->
<div class="app-content">

    <!-- Top Bar -->
    @include('backend.layouts.topbar', ['title' => 'Livestock List'])

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
                        <form class="navbar-search">
                            <input type="text" class="form-input w-auto" name="search" placeholder="Search here...">
                        </form>
                    </div>
                    <a href="{{ url('animals/add') }}" class="btn bg-primary text-white">
                        <span class=""><i class="uil uil-plus"></i></span>
                       Add Animals  
                    </a>
                </div>

                <div class="p-4">
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

    </main>

</div>
<!-- End Page content -->
@endsection

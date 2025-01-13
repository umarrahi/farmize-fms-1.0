@extends('backend.layouts.app')

@section('title')
    Animals - Farmize Management Syestem
@endsection

@section('content')
    <!-- Start Page Content here -->
    <div class="app-content">

        <!-- Top Bar -->
        @include('backend.layouts.topbar', ['title' => 'Animals List'])

        <main class="p-6">

            {{-- @include('backend.layouts.page-title') --}}

            <div class="card p-6">
                <div
                    class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 text-end">
                    <button type="button" data-hs-overlay="#hs-slide-up-animation-modal"
                        class="py-2 px-4 inline-flex justify-center items-center gap-2 border font-medium border-transparent bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                        <span><i class="uil uil-plus"></i></span>
                        <span> Create</span>
                    </button>
                  
                </div>
                <div class="card-body">
                    <div id="calendar"></div>
                </div>
            </div>

            {{-- Modal Box --}}
            <div id="hs-slide-up-animation-modal"
                class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
                <div
                    class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-14 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                    <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                        
                        {{-- Modal Header  --}}
                        <div class="flex justify-between items-center py-3 px-4 border-b">
                            <h3 class="font-bold text-gray-800">
                               Add New Task
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
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-4 overflow-y-auto ">
                            
                            <div>
                                <label
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Task Name</label>
                                <input type="text" name="" id="" value="" placeholder="Enter task" class="form-input">
                            </div>
                            <div>
                                <label class="text-gray-800 text-sm font-medium inline-block mb-2">Assginee</label>
                                <select id="" name="" required
                                    class="form-select cursor-pointer">
                                    <option value="">Not Assign</option>
                                    <option value="">Assign 1</option>
                                    <option value="">Assign 2</option>ٖ
                                </select>
                            </div>
                            <div>
                                <label class="text-gray-800 text-sm font-medium inline-block mb-2">Due Date</label>
                                <input type="datetime-local" name="" id="" value="" class="form-input">
                            </div>
                            <div>
                                <label class="text-gray-800 text-sm font-medium inline-block mb-2">Category</label>
                                <select id="" name="" required
                                    class="form-select cursor-pointer">
                                    <option value="">No category</option>
                                    <option value="">Category 1</option>
                                    <option value="">Category 2</option>ٖ
                                </select>
                            </div>
                            <div>
                                <label class="text-gray-800 text-sm font-medium inline-block mb-2">Location</label>
                                <select id="" name="" required
                                    class="form-select cursor-pointer">
                                    <option value="">No location</option>
                                    <option value="">location 1</option>
                                    <option value="">location 2</option>ٖ
                                </select>
                            </div>
                            <div>
                                <label class="text-gray-800 text-sm font-medium inline-block mb-2">Priority*</label>
                                <select id="" name="" required
                                    class="form-select cursor-pointer">
                                    <option value="">Select option</option>
                                    <option value="">Medium</option>
                                    <option value="">Large</option>ٖ
                                </select>
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



        </main>

    </div>
    <!-- End Page content -->
@endsection

<script>
    class Calendar {
        constructor() {
            (this.body = document.body),
            (this.calendar = document.getElementById("calendar")),
            (this.formEvent = document.getElementById("forms-event")),
            (this.btnNewEvent = document.getElementById("btn-new-event")),
            (this.btnSaveEvent = document.getElementById("btn-save-event")),
            (this.modalTitle = document.getElementById("modal-title")),
            (this.calendarObj = null),
            (this.selectedEvent = null),
            (this.newEventData = null);
        }
        onEventClick(e) {
            this.formEvent?.reset(),
                this.formEvent.classList.remove("was-validated"),
                (this.newEventData = null),
                (this.modalTitle.text = "Edit Event"),
                this.modal.show(),
                (this.selectedEvent = e.event),
                (document.getElementById("event-title").value =
                    this.selectedEvent.title),
                (document.getElementById("event-category").value =
                    this.selectedEvent.classNames[0]);
        }
        onSelect(e) {
            this.formEvent?.reset(),
                this.formEvent?.classList.remove("was-validated"),
                (this.selectedEvent = null),
                (this.newEventData = e),
                (this.modalTitle.text = "Add New Event"),
                this.modal.show(),
                this.calendarObj.unselect();
        }
        init() {
            var e = new Date();
            const t = this;
            e = [{
                    title: "Interview - Backend Engineer",
                    start: e,
                    end: e,
                    className: "bg-primary",
                },
                {
                    title: "Meeting with CT Team",
                    start: new Date(Date.now() + 13e6),
                    end: e,
                    className: "bg-warning",
                },
                {
                    title: "Meeting with Mr. Shield",
                    start: new Date(Date.now() + 308e6),
                    end: new Date(Date.now() + 338e6),
                    className: "bg-info",
                },
                {
                    title: "Interview - Frontend Engineer",
                    start: new Date(Date.now() + 6057e4),
                    end: new Date(Date.now() + 153e6),
                    className: "bg-secondary",
                },
                {
                    title: "Phone Screen - Frontend Engineer",
                    start: new Date(Date.now() + 168e6),
                    className: "bg-success",
                },
                {
                    title: "Buy Design Assets",
                    start: new Date(Date.now() + 33e7),
                    end: new Date(Date.now() + 3308e5),
                    className: "bg-primary",
                },
                {
                    title: "Setup Github Repository",
                    start: new Date(Date.now() + 1008e6),
                    end: new Date(Date.now() + 1108e6),
                    className: "bg-danger",
                },
                {
                    title: "Meeting with Mr. Shreyu",
                    start: new Date(Date.now() + 2508e6),
                    end: new Date(Date.now() + 2508e6),
                    className: "bg-dark",
                },
            ];
            (t.calendarObj = new FullCalendar.Calendar(t.calendar, {
                plugins: [],
                slotDuration: "00:30:00",
                slotMinTime: "07:00:00",
                slotMaxTime: "19:00:00",
                themeSystem: "default",
                buttonText: {
                    today: "Today",
                    month: "Month",
                    week: "Week",
                    day: "Day",
                    list: "List",
                    prev: "Prev",
                    next: "Next",
                },
                initialView: "dayGridMonth",
                handleWindowResize: !0,
                height: window.innerHeight - 300,
                headerToolbar: {
                    left: "prev,next today",
                    center: "title",
                    right: "dayGridMonth,timeGridWeek,timeGridDay,listMonth",
                },
                initialEvents: e,
                editable: !0,
                droppable: !0,
                selectable: !0,
                dateClick: function(e) {
                    t.onSelect(e);
                },
                eventClick: function(e) {
                    t.onEventClick(e);
                },
            })),
            t.calendarObj.render();
        }
    }
    document.addEventListener("DOMContentLoaded", function(e) {
        new Calendar().init();
    });
</script>

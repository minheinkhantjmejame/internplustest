
@extends('layouts.hr.hrLayout')


@section('styles')
    <style rel="stylesheet" type="text/css">
                body {
                    background-color: #fff;
                    height: 100%;
                }
                .main-container {
                    display: flex;
                    align-items: stretch; /* Ensures both sidebar & content stretch equally */
                }
                .sidebar {
                    background-color: #F3F5FC;
                    padding-top: 10px;
                    padding-left: 20px;
                    height: auto; /* Allows it to stretch dynamically */

                    
                }
                /* Default styling for sidebar links */
            /* Default sidebar link styling */
            .nav-link {
            display: flex;
            align-items: center;
            padding: 10px;
            text-decoration: none;
            color: black;
            border-left: 3px solid transparent; /* No border by default */
            transition: border-left 0.3s ease-in-out, background-color 0.3s ease-in-out;
            }

            /* Add border-left only when clicked */
            .nav-link.active {
            border-left: 4px solid black; /* Highlight color */
            background-color: #EDEFF7; /* Optional: Background change */
            }

            /* dashboard content  */

            .dashboard-content {
                padding: 20px;
            }

            .badge-box{
                    background-color:#B1BBE7;
                    border-radius:4px;
                }

            /* dashboard content  */

            /* tab design  */

            .container {
                    background-color: #F3F5FC;
                    padding: 20px;
                    border-radius: 4px;
                    width:100%;
                    height:auto;
                    margin:0;
                }
                    .nav-tabs {
                                border-bottom: 2px solid #ddd;
                            }
                    .nav-tabs .nav-link {
                        color: #C8C8C8;
                        font-weight: bold;
                        border: none;
                        padding: 12px 20px;
                    }
                    .nav-tabs .nav-link.active {
                    border-bottom:3px solid #474BC2;
                    background-color:transparent;
                    
                }

            /* tab design  */

            /* task tab  */
            .dropdown {
            position: relative;
            display: inline-block;
            }

            .calendar_btn{
            border:2px solid black;
            border-radius:4px;
            }

            .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
            }

            .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 200px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            }

            .calendar {
            padding: 10px;
            border-radius: 4px;
            }

            .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            }

            .header button {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 16px;
            }

            .days, .dates {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
            }

            .dates span {
            text-align: center;
            padding: 5px;
            cursor: pointer;
            }

            .dates span.today {
            background-color: #D1D1F0;
            border-radius: 4px;
            }

            .dates span:hover {
            background-color: #ddd;
            }

            .show {
            display: block;
            }

            /* task tab table  */
            .table{
            border-radius: 4px !important;
            }
            .table thead tr {
            background-color: white !important;
            font-weight: bold;
            }

            .table tbody tr td {
            background-color: transparent !important;

            }
            /* Status badges */
            .badge-pending {
            background-color: #FFE819 !important;
            color: #B2A211 !important;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
            }

            .badge-completed {
            background-color: #9FE392 !important;
            color: #359C22 !important;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
            }

            .badge-not-started {
            background-color: #FFB9B9 !important;
            color: #980C0C !important;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
            }

            /* Approval Styles */
            .approval-approved {
            background-color: #6DD52D !important;  /* Green Background */
            color: white !important;  /* White Text */
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            }

            .approval-rejected {
            background-color: #DD3D3D !important;  /* Red Background */
            color: white !important;  /* White Text */
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            }

            /* Icons inside approval */
            .approval-approved i {
            color: white !important;
            }

            .approval-rejected i {
            color: white !important;
            }



            .page-link{
            background-color:transparent !important;
            color:black;
            border:1px solid #C8C8C8 !important;
            margin:10px;
            border-radius:4px !important;

            }

            .pagination .page-item.active .page-link {
            background-color: #474BC2 !important; /* Purple Background */
            border:none !important;
            color: white !important; /* White Text */
            }
            /* task tab table  */
            /* task tab  */

            /* assgignment tab  */
            /* assignment cards  */
            .assignment-details-panel {
            position: fixed;
            top: 0;
            right: -400px;
            width: 400px;
            height: 100%;
            background-color: white;
            box-shadow: -2px 0 5px rgba(0,0,0,0.2);
            transition: right 0.3s ease-in-out;
            overflow-y: auto;
            z-index: 1050;
            }
            .details-content {
            padding: 20px;
            }
            .close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            border: none;
            background: none;
            font-size: 24px;
            cursor: pointer;
            }
            /* assignment cards  */
            /* assignment tab  */



    </style>
@endsection


    
@section('content')
    @include('layouts.hr.navbar')

    <div class="row main-container" >
            
            @include('layouts.hr.sidebar')

            <div class="col-md-9 dashboard-content" id="dashboardContent">

                <div class="d-flex justify-content-between mb-3">
                    <h2 class="mb-0" data-translate="Assignment Sheet">Assignment Sheet</h2>
                    <!-- Summary Badges -->
                    <div class="d-flex gap-3">
                        <div class="badge-box p-3  text-start d-flex flex-column justify-content-center" style="width: auto; height: 80px;">
                            <p class="mb-1" data-translate="Completed">Completed</p>
                            <h4 class="mb-0">202</h4>
                        </div>
                        <div class="badge-box p-3  text-start d-flex flex-column justify-content-center" style="width: auto; height: 80px;">
                            <p class="mb-1" data-translate="Pending">Pending</p>
                            <h4 class="mb-0">26</h4>
                        </div>
                        <div class="badge-box p-3  text-start d-flex flex-column justify-content-center" style="width: auto; height: 80px;">
                            <p class="mb-1" data-translate="Not Started">Not Started</p>
                            <h4 class="mb-0">4</h4>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <!-- tab pane -->
                    <ul class="nav nav-tabs" id="assignmentTabs">
                        <li class="nav-item">
                            <a class="nav-link active" id="tasks-tab" data-bs-toggle="tab" href="#tasks">
                                <i class="bi bi-clipboard-data-fill" style="margin-right:5px;"></i> <span data-translate="Tasks">Tasks</span> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="assignments-tab" data-bs-toggle="tab" href="#assignments">
                                <i class="bi bi-file-earmark-text-fill" style="margin-right:5px;"></i><span data-translate="Assignments">Assignments</span> 
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content mt-3">
                        <!-- Tasks Tab -->
                        <div class="tab-pane fade show active" id="tasks">
                            <div class="w-100 d-flex justify-content-between mb-5">
                                <h3 data-translate="Tasks">Tasks</h3>
                                <div>
                                    <div class="dropdown">
                                        <button class="btn calendar_btn" type="button" id="dateButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="../assets/icon/calendar.png" alt="">
                                            <span id="selectedDate"></span>
                                            <img src="../assets/icon/down_arrow.png" alt="">
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dateButton" id="calendarDropdown">
                                            <div class="calendar">
                                                <div class="header">
                                                    <button id="prevMonth" style="background-color: #B1BBE7;border-radius:4px;"><img src="../assets/icon/less_than.png" alt=""></button>
                                                    <span id="monthYear"></span>
                                                    <button id="nextMonth" style="background-color: #B1BBE7;border-radius:4px;"><img src="../assets/icon/greater_than.png" class="fw-bold" alt=""></button>
                                                </div>
                                                <div class="days">
                                                    <span>Sun</span>
                                                    <span>Mon</span>
                                                    <span>Tue</span>
                                                    <span>Wed</span>
                                                    <span>Thu</span>
                                                    <span>Fri</span>
                                                    <span>Sat</span>
                                                </div>
                                                <div class="dates" id="dates"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn " style="background-color: #474BC2; color:white; border-radius: 4px; padding-top: 10px;"><img src="../assets/icon/export_1.png" alt=""> <span data-translate="Export">Export</span></button>
                                </div>
                            </div>
                            <!-- data filter  -->
                            <div class="d-flex justify-content-between mb-3" style="height:50px;">
                                <div class="d-flex gap-2">
                                    <button class="btn" style="border:1px solid black; background-color: transparent;"><span data-translate="All Intern">All Intern</span></button>
                                    <button class="btn" style="border:1px solid black; background-color: transparent;"><span data-translate="On-site">On-site</span></button>
                                    <button class="btn" style="border:1px solid black; background-color: transparent;"><span data-translate="Work From Home">Work From Home</span></button>
                                    <button class="btn" style="border:1px solid black; background-color: transparent;"><span data-translate="Hybrid">Hybrid</span></button>
                                    <div class="dropdown"  style="width:auto; border-radius:4px;">
                                        <button class="btn custom-dropdown-btn" style="background-color:white; height:100%;" data-bs-toggle="dropdown">
                                            <img src="../assets/icon/verified.png" alt=""><span data-translate=" All Approval"> All Approval</span>
                                            <span style="background-color:#474BC2 !important;width:20px;height:20px; border-radius:4px; margin-left:5px;"><i class="bi bi-chevron-down custom-arrow" style="color:white;"></i></span>
                                        </button>
                                        <ul class="dropdown-menu" id="stepDropdown">
                                            <li><a class="dropdown-item active" href="#"><span data-translate="All">All</span></a></li>
                                            <li><a class="dropdown-item" href="#"><span data-translate="Approved">Approved</span></a></li>
                                            <li><a class="dropdown-item" href="#"><span data-translate="Pending">Pending</span></a></li>
                                            <li><a class="dropdown-item" href="#"><span data-translate="Rejected">Rejected</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex gap-2">
                                    <div class="input-group search-box" style="height:100%; justify-content: center; align-items: center; border:1px solid #C8C8C8; border-radius:4px;">
                                        <span class="input-group-text" style="height:100%; border:none; background-color: white;"><i class="bi bi-search"></i></span>
                                        <input type="text" id="searchInputTestForm" style="height:100%; width:200px; border:none; background-color: white;"  class="form-control" placeholder="Search for tests">
                                    </div>
                                    <button class="btn general-setting-btn" style="border:1px solid black; width:auto; display:flex;justify-content: center;align-items: center;">
                                        <i class="bi bi-sliders"></i> <span data-translate=" General Setting"> General Setting</span>
                                    </button>
                                </div>
                            </div>
                            <!-- data filter  -->
                            
                            <!-- tasks tab table  -->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th data-translate="Intern">Intern</th>
                                            <th data-translate="Task/Day">Task/Day</th>
                                            <th data-translate="Start Time">Start Time</th>
                                            <th data-translate="End Time">End Time</th>
                                            <th data-translate="Status">Status</th>
                                            <th data-translate="File">File</th>
                                            <th data-translate="Approval">Approval</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="tasksTableBody">
                                        <!-- Data will be dynamically inserted here -->
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <label for="tasksPerPage" data-translate="Tasks per page:">Tasks per page:</label>
                                    <select id="tasksPerPage" class="form-select d-inline-block w-auto bg-transparent" style="border:1px solid #C8C8C8;">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                    </select>
                                </div>
                                <nav>
                                    <ul class="pagination mb-0" id="tasksPaginationControls">
                                        <!-- Pagination buttons will be dynamically inserted -->
                                    </ul>
                                </nav>
                            </div>
                            <!-- tasks tab table  -->
                        </div>
                        <!-- Tasks Tab -->

                        <!-- Assignments Tab -->
                        <div class="tab-pane fade" id="assignments">
                            <div class="w-100 d-flex justify-content-between mb-5">
                                <h3 data-translate="Assignments">Assignments</h3>
                                <button class="btn " style="background-color: #474BC2; color:white; border-radius: 4px; padding-top: 10px;"><img src="../assets/icon/export_1.png" alt=""><span data-translate="Export">Export</span></button>
                            </div>
                            <div class="d-flex justify-content-between" >
                                <div class="d-flex gap-2">
                                    <div class="input-group search-box" style=" justify-content: center; align-items: center; border:1px solid #C8C8C8; border-radius:4px;">
                                        <span class="input-group-text" style="height:100%; border:none; background-color: white;"><i class="bi bi-search"></i></span>
                                        <input type="text" id="searchInputTestForm" style="height:100%; width:200px; border:none; background-color: white;"  class="form-control" placeholder="Search for tests">
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn calendar_btn" type="button" id="assignDateButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="../assets/icon/calendar.png" alt="">
                                            <span id="assignSelectedDate"></span>
                                            <img src="../assets/icon/down_arrow.png" alt="">
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="assignDateButton" id="assignCalendarDropdown">
                                            <div class="calendar">
                                                <div class="header">
                                                    <button id="assignPrevMonth" style="background-color: #B1BBE7;border-radius:4px;">
                                                        <img src="../assets/icon/less_than.png" alt="">
                                                    </button>
                                                    <span id="assignMonthYear"></span>
                                                    <button id="assignNextMonth" style="background-color: #B1BBE7;border-radius:4px;">
                                                        <img src="../assets/icon/greater_than.png" class="fw-bold" alt="">
                                                    </button>
                                                </div>
                                                <div class="days">
                                                    <span>Sun</span>
                                                    <span>Mon</span>
                                                    <span>Tue</span>
                                                    <span>Wed</span>
                                                    <span>Thu</span>
                                                    <span>Fri</span>
                                                    <span>Sat</span>
                                                </div>
                                                <div class="dates" id="assignDates"></div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <button class="btn general-setting-btn" style="border:1px solid black; width:auto; display:flex;justify-content: center;align-items: center;">
                                    <i class="bi bi-sliders"></i> <span data-translate="General Setting"> General Setting</span>
                                </button>
                            </div>
                                <!-- Assignment Cards -->
            <!-- Assignment Cards -->
            <div class="row mt-3" id="assignmentsContainer">
                <!-- Assignment cards will be inserted dynamically here -->
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-between align-items-center mt-3">
                <div>
                    <label for="assignmentsPerPage" data-translate="tasks per page:">tasks per page:</label>
                    <select id="assignmentsPerPage" class="form-select d-inline-block w-auto bg-transparent" style="border:1px solid #C8C8C8;">
                        <option value="3">3</option>
                        <option value="6">6</option>
                        <option value="9">9</option>
                    </select>
                </div>
                <nav>
                    <ul class="pagination mb-0" id="assignmentsPaginationControls">
                        <!-- Pagination buttons will be dynamically inserted -->
                    </ul>
                </nav>
            </div>

                <!-- Right-side details panel -->
                <div id="assignmentDetailsPanel" class="assignment-details-panel">
                    <div class="details-content">
                        <button class="close-btn" onclick="closeDetailsPanel()">&times;</button>
                        <div id="assignmentDetails"></div>
                    </div>
                </div>
                                    <!-- Add assignments table or UI elements here -->
                </div>
                        
                        <!-- Assignments Tab -->
                    </div>
        <!-- tab pane -->
                </div>
                    <!-- Right-side details panel -->
                <div id="assignmentDetailsPanel" class="assignment-details-panel">
                    <div class="details-content">
                        <button class="close-btn" onclick="closeDetailsPanel()">&times;</button>
                        <div id="assignmentDetails"></div>
                    </div>
                </div>


            </div>
            <div class="col-md-9 dashboard-content" id="packageContent" style="display: none;">
                <!-- The package UI will be injected here -->
            </div>
            <div class="col-md-9 dashboard-content" id="settingsContent" style="display: none;">
                <!-- The settings UI will be injected here -->
            </div>
            <div class="col-md-9 dashboard-content" id="profileContent" style="display: none;">
                <!-- The profile UI will be injected here -->
            </div>
    </div>
@endsection



@section('script')
        <script type="text/javascript">
            async function updateLanguage(language) {
            document.getElementById('dropdownLabel').textContent = language.toUpperCase();

            // ✅ Save the selected language in localStorage
            localStorage.setItem('selectedLanguage', language);

            // ✅ Define translations for static text (placeholders, buttons, etc.)
            const translations = {
                'en': {
                    'emailPlaceholder': "",
                    'searchPlaceholder':"Search for candidates"
                },
                'th': {
                    'emailPlaceholder': "",
                    'searchPlaceholder':"ค้นหาผู้สมัคร"
                },
                'my': {
                    'emailPlaceholder': "",
                    'searchPlaceholder':"ကိုယ်စားလှယ်လောင်းများကိုရှာဖွေပါ။"
                }
            };

            // ✅ Update placeholders
            const searchInput = document.getElementById('searchInput');
            if (searchInput) {
                searchInput.setAttribute("placeholder", translations[language]?.searchPlaceholder || translations['en'].searchPlaceholder);
            }

            const emailInput = document.getElementById('email');
            if (emailInput) {
                emailInput.setAttribute("placeholder", translations[language]?.emailPlaceholder || translations['en'].emailPlaceholder);
            }

            // ✅ Update text content using predefined translations or Google Translate API
            const elementsToTranslate = document.querySelectorAll('[data-translate]');
            for (const element of elementsToTranslate) {
                const key = element.getAttribute('data-translate');
                
                if (translations[language][key]) {
                    element.innerText = translations[language][key];
                } else {
                    // Use Google Translate API if predefined translation is unavailable
                    const translatedText = await translateText(key, language);
                    element.innerText = translatedText;
                }
            }
        }

        // ✅ Function to translate text using Google Translate API
        async function translateText(text, targetLanguage) {
            try {
                const response = await fetch(
                    `https://translate.googleapis.com/translate_a/single?client=gtx&sl=auto&tl=${targetLanguage}&dt=t&q=${encodeURIComponent(text)}`
                );
                const data = await response.json();
                return data[0][0][0]; // Extract the translated text
            } catch (error) {
                console.error('Translation error:', error);
                return text; // Fallback to the original text if translation fails
            }
        }

                document.addEventListener("DOMContentLoaded", function () {
                    let sidebarLinks = document.querySelectorAll(".nav-link");

                    // Get the last active link from localStorage
                    let activeLink = localStorage.getItem("activeSidebarLink");

                    sidebarLinks.forEach(link => {
                        if (link.getAttribute("href") === activeLink) {
                            link.classList.add("active");
                        } else {
                            link.classList.remove("active"); // Remove active from other links
                        }

                        link.addEventListener("click", function (event) {
                            // Only prevent default for internal navigation (hash links)
                            if (!this.getAttribute("href").startsWith("#")) {
                                localStorage.setItem("activeSidebarLink", this.getAttribute("href"));
                                return; // Let the browser navigate normally
                            }
                            
                            event.preventDefault(); // Prevent hash-based jumps

                            // Remove active class from all links
                            sidebarLinks.forEach(l => l.classList.remove("active"));

                            // Add active class only to the clicked link
                            this.classList.add("active");

                            // Save active link in localStorage
                            localStorage.setItem("activeSidebarLink", this.getAttribute("href"));
                        });
                    });
                });

                // tab pane movement 
                document.addEventListener("DOMContentLoaded", function () {
                    let savedTab = localStorage.getItem("activeAssignmentTab") || "#tasks"; // Default to Tasks tab
                    let currentTab = document.querySelector(`a[href="${savedTab}"]`);

                    if (currentTab) {
                        let tab = new bootstrap.Tab(currentTab);
                        tab.show();
                    }

                    // Save the active tab when the user clicks
                    document.querySelectorAll("#assignmentTabs a").forEach(tab => {
                        tab.addEventListener("click", function () {
                            localStorage.setItem("activeAssignmentTab", this.getAttribute("href"));
                        });
                    });
                });

                // tab pane movement 

                // task tab 

                // calendar dropdown function 
                document.addEventListener('DOMContentLoaded', function () {
                    const dateButton = document.getElementById('dateButton');
                    const calendarDropdown = document.getElementById('calendarDropdown');
                    const monthYear = document.getElementById('monthYear');
                    const dates = document.getElementById('dates');
                    const prevMonthButton = document.getElementById('prevMonth');
                    const nextMonthButton = document.getElementById('nextMonth');
                    const selectedDate = document.getElementById('selectedDate');

                    const today = new Date();
                    let currentMonth = today.getMonth();
                    let currentYear = today.getFullYear();

                    // Set the default selected date
                    selectedDate.textContent = formatDate(today);

                    // Initialize the calendar when the dropdown is shown
                    dateButton.addEventListener('shown.bs.dropdown', function () {
                        updateCalendar(currentMonth, currentYear);
                    });

                    // Update the calendar when navigating months
                    prevMonthButton.addEventListener('click', function (event) {
                        event.stopPropagation(); // Prevent event from bubbling up
                        currentMonth--;
                        if (currentMonth < 0) {
                            currentMonth = 11;
                            currentYear--;
                        }
                        updateCalendar(currentMonth, currentYear);
                    });

                    nextMonthButton.addEventListener('click', function (event) {
                        event.stopPropagation(); // Prevent event from bubbling up
                        currentMonth++;
                        if (currentMonth > 11) {
                            currentMonth = 0;
                            currentYear++;
                        }
                        updateCalendar(currentMonth, currentYear);
                    });

                    // Update the selected date when a date is clicked
                    dates.addEventListener('click', function (event) {
                        if (event.target.tagName === 'SPAN' && event.target.textContent) {
                            const selectedDay = parseInt(event.target.textContent, 10);
                            const selectedDateObj = new Date(currentYear, currentMonth, selectedDay);
                            selectedDate.textContent = formatDate(selectedDateObj);
                            event.stopPropagation(); // Prevent event from bubbling up
                        }
                    });

                    // Prevent the dropdown from closing when interacting with the calendar
                    calendarDropdown.addEventListener('click', function (event) {
                        event.stopPropagation(); // Prevent event from bubbling up
                    });

                    // Close the dropdown when clicking outside
                    document.addEventListener('click', function (event) {
                        if (!dateButton.contains(event.target) && !calendarDropdown.contains(event.target)) {
                            const dropdown = new bootstrap.Dropdown(dateButton);
                            dropdown.hide();
                        }
                    });

                    // Function to update the calendar
                    function updateCalendar(month, year) {
                        dates.innerHTML = '';
                        monthYear.textContent = `${new Date(year, month).toLocaleString('default', { month: 'long' })} ${year}`;

                        const firstDay = new Date(year, month, 1);
                        const lastDay = new Date(year, month + 1, 0);
                        const startDay = firstDay.getDay();
                        const endDate = lastDay.getDate();

                        for (let i = 0; i < startDay; i++) {
                            dates.innerHTML += '<span></span>';
                        }

                        for (let i = 1; i <= endDate; i++) {
                            const date = new Date(year, month, i);
                            const span = document.createElement('span');
                            span.textContent = i;
                            if (date.toDateString() === today.toDateString()) {
                                span.classList.add('today');
                            }
                            dates.appendChild(span);
                        }
                    }

                    function formatDate(date) {
                    const day = date.getDate(); // Get the day (e.g., 15)
                    const month = date.toLocaleString('default', { month: 'long' }); // Get the full month name (e.g., December)
                    const year = date.getFullYear(); // Get the year (e.g., 2024)
                    return `${day} ${month} ${year}`; // Return the formatted date (e.g., 15 December 2024)
                }
                });

                // calendar dropdown function 

                // table 
                const tasksData = [
                    { profile: "https://i.pravatar.cc/40?img=1", name: "Lily Bloom", role: "Content Creator", task: "Make content charts and present to supervisors", startTime: "14:50", endTime: "17:30", status: "Pending", file: "-", approval: "pending" },
                    { profile: "https://i.pravatar.cc/40?img=2", name: "Lily Bloom", role: "Content Creator", task: "Discuss marketing content with the coordinator", startTime: "13:30", endTime: "14:50", status: "Completed", file: "DraftContent.Doc", approval: "approved" },
                    { profile: "https://i.pravatar.cc/40?img=3", name: "Lily Bloom", role: "Content Creator", task: "Participate in meetings with the media department", startTime: "8:30", endTime: "12:30", status: "Completed", file: "-", approval: "approved" },
                    { profile: "https://i.pravatar.cc/40?img=4", name: "Taylor Swift", role: "Web Developer Trainee", task: "Fix buggy web pages", startTime: "17:30", endTime: "17:30", status: "Not Started", file: "-", approval: "approved" },
                    { profile: "https://i.pravatar.cc/40?img=5", name: "Taylor Swift", role: "Web Developer Trainee", task: "Code the Landing page on website", startTime: "15:00", endTime: "17:30", status: "Completed", file: "SystemLanPage.Png", approval: "approved" },
                    { profile: "https://i.pravatar.cc/40?img=6", name: "John Doe", role: "Marketing Intern", task: "Create social media strategy", startTime: "9:00", endTime: "11:00", status: "Pending", file: "-", approval: "pending" },
                    { profile: "https://i.pravatar.cc/40?img=7", name: "Emma Watson", role: "Software Engineer", task: "Develop new API endpoints", startTime: "10:30", endTime: "16:00", status: "Completed", file: "API_Docs.pdf", approval: "approved" },
                    { profile: "https://i.pravatar.cc/40?img=8", name: "Michael Scott", role: "HR Specialist", task: "Interview new candidates", startTime: "14:00", endTime: "17:00", status: "Pending", file: "-", approval: "pending" },
                    { profile: "https://i.pravatar.cc/40?img=9", name: "Pam Beesly", role: "Graphic Designer", task: "Design company brochures", startTime: "11:30", endTime: "15:30", status: "Completed", file: "BrochureDesigns.pdf", approval: "approved" },
                    { profile: "https://i.pravatar.cc/40?img=10", name: "Dwight Schrute", role: "Sales Associate", task: "Call new leads", startTime: "9:00", endTime: "12:00", status: "Not Started", file: "-", approval: "pending" },
                    { profile: "https://i.pravatar.cc/40?img=11", name: "Jim Halpert", role: "Sales Representative", task: "Follow up with existing clients", startTime: "10:00", endTime: "13:00", status: "Completed", file: "-", approval: "approved" },
                    { profile: "https://i.pravatar.cc/40?img=12", name: "Serena Williams", role: "Project Manager", task: "Oversee project milestones", startTime: "12:00", endTime: "15:30", status: "Pending", file: "-", approval: "pending" },
                    { profile: "https://i.pravatar.cc/40?img=13", name: "Kanye West", role: "Music Producer", task: "Work on new album production", startTime: "18:00", endTime: "22:00", status: "Completed", file: "AlbumConcept.mp3", approval: "approved" },
                    { profile: "https://i.pravatar.cc/40?img=14", name: "Billie Eilish", role: "Social Media Manager", task: "Plan weekly content calendar", startTime: "11:00", endTime: "14:00", status: "Pending", file: "-", approval: "pending" },
                    { profile: "https://i.pravatar.cc/40?img=15", name: "Oprah Winfrey", role: "Media Specialist", task: "Host a new talk show episode", startTime: "19:00", endTime: "21:00", status: "Completed", file: "ShowScript.docx", approval: "approved" },
                    { profile: "https://i.pravatar.cc/40?img=16", name: "Jeff Bezos", role: "E-commerce Manager", task: "Optimize website conversions", startTime: "8:00", endTime: "12:00", status: "Not Started", file: "-", approval: "pending" },
                    { profile: "https://i.pravatar.cc/40?img=17", name: "Mark Zuckerberg", role: "Data Scientist", task: "Analyze user engagement metrics", startTime: "13:00", endTime: "16:00", status: "Completed", file: "UserData.csv", approval: "approved" },
                    { profile: "https://i.pravatar.cc/40?img=18", name: "Elon Musk", role: "CEO", task: "Plan next rocket launch", startTime: "9:30", endTime: "11:30", status: "Pending", file: "LaunchBlueprint.pdf", approval: "pending" },
                    { profile: "https://i.pravatar.cc/40?img=19", name: "Tim Cook", role: "Product Designer", task: "Design new iPhone prototype", startTime: "10:00", endTime: "14:00", status: "Completed", file: "iPhoneDesign.sketch", approval: "approved" },
                    { profile: "https://i.pravatar.cc/40?img=20", name: "Larry Page", role: "SEO Specialist", task: "Improve Google search rankings", startTime: "15:00", endTime: "17:30", status: "Pending", file: "-", approval: "pending" },
                    { profile: "https://i.pravatar.cc/40?img=21", name: "Sergey Brin", role: "AI Researcher", task: "Train machine learning models", startTime: "9:30", endTime: "12:30", status: "Completed", file: "ML_Research.doc", approval: "approved" },
                    { profile: "https://i.pravatar.cc/40?img=22", name: "Jack Dorsey", role: "Blockchain Developer", task: "Build decentralized applications", startTime: "13:00", endTime: "16:00", status: "Pending", file: "-", approval: "pending" },
                    { profile: "https://i.pravatar.cc/40?img=23", name: "Angelina Jolie", role: "NGO Director", task: "Organize charity event", startTime: "10:00", endTime: "14:00", status: "Completed", file: "CharityPlan.pdf", approval: "approved" },
                    { profile: "https://i.pravatar.cc/40?img=24", name: "Brad Pitt", role: "Film Director", task: "Shoot new movie scenes", startTime: "12:00", endTime: "16:30", status: "Pending", file: "-", approval: "pending" },
                    { profile: "https://i.pravatar.cc/40?img=25", name: "Dwayne Johnson", role: "Fitness Trainer", task: "Lead a virtual workout session", startTime: "6:00", endTime: "7:30", status: "Completed", file: "WorkoutGuide.pdf", approval: "approved" },
                    { profile: "https://i.pravatar.cc/40?img=26", name: "Rihanna", role: "Entrepreneur", task: "Launch new fashion line", startTime: "14:30", endTime: "18:00", status: "Not Started", file: "-", approval: "pending" }
                ];


                let currentTaskPage = 1;
                let tasksPerPage = 5;

                displayTasksData();

                document.getElementById("tasksPerPage").addEventListener("change", function() {
                    tasksPerPage = parseInt(this.value);
                    currentTaskPage = 1;
                    displayTasksData();
                });

                function displayTasksData() {
                    const tableBody = document.getElementById("tasksTableBody");
                    tableBody.innerHTML = "";
                    
                    const start = (currentTaskPage - 1) * tasksPerPage;
                    const end = start + tasksPerPage;
                    const paginatedData = tasksData.slice(start, end);
                    
                    paginatedData.forEach((task, index) => {
                        const row = document.createElement("tr");
                        row.innerHTML = `
                            <td class="d-flex align-items-center">
                                <img src="${task.profile}" alt="${task.name}" class="rounded-circle" width="40" height="40">
                                <span class="ms-2">${task.name}<br/><small>${task.role}</small></span>
                            </td>
                            <td>${task.task}</td>
                            <td>${task.startTime}</td>
                            <td>${task.endTime}</td>
                            <td>
                                <span class="badge ${task.status === 'Pending' ? 'badge-pending' : task.status === 'Completed' ? 'badge-completed' : 'badge-not-started'}">
                                    ${task.status}
                                </span>
                            </td>
                            <td>${task.file !== "-" ? `<a href="#">${task.file}</a>` : "-"}</td>
                            <td id="approval-${index}">
                                ${getApprovalHtml(task.approval, index)}
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-light" type="button" data-bs-toggle="dropdown">&#8942;</button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Remove</a></li>
                                        <li><a class="dropdown-item" href="#">Assignment Details</a></li>
                                    </ul>
                                </div>
                            </td>
                        `;
                        tableBody.appendChild(row);
                    });
                    updateTasksPagination();
                }

                function getStatusBadgeClass(status) {
                    if (status === "Completed") return "bg-success text-white";
                    if (status === "Pending") return "bg-warning text-dark";
                    if (status === "Not Started") return "bg-danger text-white";
                    return "bg-secondary text-white";
                }

                function getApprovalHtml(status, index) {
                    if (status === "approved") {
                        return '<span style="color:#6DD52D;">✔ Approved</span>';
                    } else if (status === "rejected") {
                        return '<span class="" style="color:#DD3D3D;">✖ Rejected</span>';
                    } else {
                        return `
                            <button class="btn approval-approved btn-sm me-2" onclick="approveTask(${index})">✔</button>
                            <button class="btn approval-rejected  btn-sm" onclick="rejectTask(${index})">✖</button>
                        `;
                    }
                }

                function approveTask(index) {
                    tasksData[index].approval = "approved";
                    document.getElementById(`approval-${index}`).innerHTML = getApprovalHtml("approved", index);
                }

                function rejectTask(index) {
                    tasksData[index].approval = "rejected";
                    document.getElementById(`approval-${index}`).innerHTML = getApprovalHtml("rejected", index);
                }

                function updateTasksPagination() {
                    const paginationControls = document.getElementById("tasksPaginationControls");
                    paginationControls.innerHTML = "";
                    const totalPages = Math.ceil(tasksData.length / tasksPerPage);

                    paginationControls.innerHTML += `<li class="page-item ${currentTaskPage === 1 ? 'disabled' : ''}">
                        <a class="page-link" href="#" onclick="changeTaskPage(${currentTaskPage - 1})" style="border:none !important;"> <i class="bi bi-chevron-left"></i> Previous</a></li>`;

                    if (totalPages > 3) {
                        paginationControls.innerHTML += `<li class="page-item ${currentTaskPage === 1 ? 'active' : ''}">
                            <a class="page-link" href="#" onclick="changeTaskPage(1)">1</a></li>`;
                        
                        if (currentTaskPage > 2) {
                            paginationControls.innerHTML += `<li class="page-item disabled"><a class="page-link">...</a></li>`;
                        }

                        let startPage = Math.max(2, currentTaskPage - 1);
                        let endPage = Math.min(totalPages - 1, currentTaskPage + 1);

                        for (let i = startPage; i <= endPage; i++) {
                            paginationControls.innerHTML += `<li class="page-item ${currentTaskPage === i ? 'active' : ''}">
                                <a class="page-link" href="#" onclick="changeTaskPage(${i})">${i}</a></li>`;
                        }

                        if (currentTaskPage < totalPages - 1) {
                            paginationControls.innerHTML += `<li class="page-item disabled"><a class="page-link">...</a></li>`;
                        }

                        paginationControls.innerHTML += `<li class="page-item ${currentTaskPage === totalPages ? 'active' : ''}">
                            <a class="page-link" href="#" onclick="changeTaskPage(${totalPages})">${totalPages}</a></li>`;
                    }

                    paginationControls.innerHTML += `<li class="page-item ${currentTaskPage === totalPages ? 'disabled' : ''}">
                        <a class="page-link" href="#" onclick="changeTaskPage(${currentTaskPage + 1})" style="border:none !important;"> Next <i class="bi bi-chevron-right"></i></a></li>`;
                }

                function changeTaskPage(page) {
                    if (page < 1 || page > Math.ceil(tasksData.length / tasksPerPage)) return;
                    currentTaskPage = page;
                    displayTasksData();
                }
                // table 

                //task tab


                // Assignments tab 
                // assignment tab calendar 
                document.addEventListener('DOMContentLoaded', function () {
                    const assignDateButton = document.getElementById('assignDateButton');
                    const assignCalendarDropdown = document.getElementById('assignCalendarDropdown');
                    const assignMonthYear = document.getElementById('assignMonthYear');
                    const assignDates = document.getElementById('assignDates');
                    const assignPrevMonthButton = document.getElementById('assignPrevMonth');
                    const assignNextMonthButton = document.getElementById('assignNextMonth');
                    const assignSelectedDate = document.getElementById('assignSelectedDate');

                    const assignToday = new Date();
                    let assignCurrentMonth = assignToday.getMonth();
                    let assignCurrentYear = assignToday.getFullYear();

                    // Set the default selected date
                    assignSelectedDate.textContent = formatDate(assignToday);

                    // Initialize the calendar when the dropdown is shown
                    assignDateButton.addEventListener('shown.bs.dropdown', function () {
                        updateAssignCalendar(assignCurrentMonth, assignCurrentYear);
                    });

                    // Update the calendar when navigating months
                    assignPrevMonthButton.addEventListener('click', function (event) {
                        event.stopPropagation(); // Prevent event from bubbling up
                        assignCurrentMonth--;
                        if (assignCurrentMonth < 0) {
                            assignCurrentMonth = 11;
                            assignCurrentYear--;
                        }
                        updateAssignCalendar(assignCurrentMonth, assignCurrentYear);
                    });

                    assignNextMonthButton.addEventListener('click', function (event) {
                        event.stopPropagation(); // Prevent event from bubbling up
                        assignCurrentMonth++;
                        if (assignCurrentMonth > 11) {
                            assignCurrentMonth = 0;
                            assignCurrentYear++;
                        }
                        updateAssignCalendar(assignCurrentMonth, assignCurrentYear);
                    });

                    // Update the selected date when a date is clicked
                    assignDates.addEventListener('click', function (event) {
                        if (event.target.tagName === 'SPAN' && event.target.textContent) {
                            const selectedDay = parseInt(event.target.textContent, 10);
                            const selectedDateObj = new Date(assignCurrentYear, assignCurrentMonth, selectedDay);
                            assignSelectedDate.textContent = formatDate(selectedDateObj);
                            event.stopPropagation(); // Prevent event from bubbling up
                        }
                    });

                    // Prevent the dropdown from closing when interacting with the calendar
                    assignCalendarDropdown.addEventListener('click', function (event) {
                        event.stopPropagation(); // Prevent event from bubbling up
                    });

                    // Close the dropdown when clicking outside
                    document.addEventListener('click', function (event) {
                        if (!assignDateButton.contains(event.target) && !assignCalendarDropdown.contains(event.target)) {
                            const dropdown = new bootstrap.Dropdown(assignDateButton);
                            dropdown.hide();
                        }
                    });

                    // Function to update the calendar
                    function updateAssignCalendar(month, year) {
                        assignDates.innerHTML = '';
                        assignMonthYear.textContent = `${new Date(year, month).toLocaleString('default', { month: 'long' })} ${year}`;

                        const firstDay = new Date(year, month, 1);
                        const lastDay = new Date(year, month + 1, 0);
                        const startDay = firstDay.getDay();
                        const endDate = lastDay.getDate();

                        for (let i = 0; i < startDay; i++) {
                            assignDates.innerHTML += '<span></span>';
                        }

                        for (let i = 1; i <= endDate; i++) {
                            const date = new Date(year, month, i);
                            const span = document.createElement('span');
                            span.textContent = i;
                            if (date.toDateString() === assignToday.toDateString()) {
                                span.classList.add('today');
                            }
                            assignDates.appendChild(span);
                        }
                    }

                    function formatDate(date) {
                        const day = date.getDate();
                        const month = date.toLocaleString('default', { month: 'long' });
                        const year = date.getFullYear();
                        return `${day} ${month} ${year}`;
                    }
                });

                // assignment tab calendar 

                // assginment cards 
                const assignmentsData = [
                { profile: "https://i.pravatar.cc/40?img=1", name: "Lily Bloom", role: "Content Creator", task: "Discuss marketing content with the coordinator", startTime: "13:30", endTime: "14:50", status: "Completed", approval: "Approved" },
                    { profile: "https://i.pravatar.cc/40?img=2", name: "Taylor Swift", role: "Web Developer Trainee", task: "Code the Landing page on website", startTime: "15:00", endTime: "17:30", status: "Completed", approval: "Approved" },
                    { profile: "https://i.pravatar.cc/40?img=3", name: "Doc Hudson", role: "Web Developer Trainee", task: "Programming web apps for selling products", startTime: "13:30", endTime: "17:30", status: "Completed", approval: "Approved" },
                    { profile: "https://i.pravatar.cc/40?img=4", name: "John Doe", role: "Graphic Designer", task: "Create illustrations for marketing", startTime: "10:00", endTime: "12:30", status: "Pending", approval: "Pending" },
                    { profile: "https://i.pravatar.cc/40?img=5", name: "Emma Watson", role: "Social Media Manager", task: "Plan weekly social media strategy", startTime: "09:00", endTime: "11:00", status: "Completed", approval: "Approved" },
                    { profile: "https://i.pravatar.cc/40?img=6", name: "Michael Scott", role: "HR Manager", task: "Interview new candidates", startTime: "14:00", endTime: "17:00", status: "Pending", approval: "Pending" },
                    { profile: "https://i.pravatar.cc/40?img=7", name: "Pam Beesly", role: "Graphic Designer", task: "Design new brochures", startTime: "11:30", endTime: "15:30", status: "Completed", approval: "Approved" },
                    { profile: "https://i.pravatar.cc/40?img=8", name: "Dwight Schrute", role: "Sales Associate", task: "Reach out to new clients", startTime: "09:00", endTime: "12:00", status: "Not Started", approval: "Pending" },
                    { profile: "https://i.pravatar.cc/40?img=9", name: "Jim Halpert", role: "Sales Representative", task: "Client meeting & negotiations", startTime: "10:00", endTime: "13:00", status: "Completed", approval: "Approved" },
                    { profile: "https://i.pravatar.cc/40?img=10", name: "Serena Williams", role: "Project Manager", task: "Oversee project timelines", startTime: "12:00", endTime: "15:30", status: "Pending", approval: "Pending" },
                    { profile: "https://i.pravatar.cc/40?img=11", name: "Elon Musk", role: "CEO", task: "Plan next rocket launch", startTime: "09:30", endTime: "11:30", status: "Pending", approval: "Pending" },
                    { profile: "https://i.pravatar.cc/40?img=12", name: "Mark Zuckerberg", role: "Data Scientist", task: "Analyze user engagement", startTime: "13:00", endTime: "16:00", status: "Completed", approval: "Approved" },
                    { profile: "https://i.pravatar.cc/40?img=13", name: "Billie Eilish", role: "Music Producer", task: "Compose new album", startTime: "14:30", endTime: "18:00", status: "Not Started", approval: "Pending" },
                    { profile: "https://i.pravatar.cc/40?img=14", name: "Jeff Bezos", role: "E-commerce Manager", task: "Optimize website conversion rates", startTime: "08:00", endTime: "12:00", status: "Completed", approval: "Approved" },
                    { profile: "https://i.pravatar.cc/40?img=15", name: "Oprah Winfrey", role: "Media Specialist", task: "Host TV talk show", startTime: "19:00", endTime: "21:00", status: "Completed", approval: "Approved" },
                    { profile: "https://i.pravatar.cc/40?img=16", name: "Rihanna", role: "Entrepreneur", task: "Launch new fashion line", startTime: "14:30", endTime: "18:00", status: "Not Started", approval: "Pending" },
                    { profile: "https://i.pravatar.cc/40?img=17", name: "Brad Pitt", role: "Film Director", task: "Shoot new movie scenes", startTime: "12:00", endTime: "16:30", status: "Pending", approval: "Pending" },
                    { profile: "https://i.pravatar.cc/40?img=18", name: "Dwayne Johnson", role: "Fitness Coach", task: "Host online training sessions", startTime: "06:00", endTime: "07:30", status: "Completed", approval: "Approved" },
                    { profile: "https://i.pravatar.cc/40?img=19", name: "Jack Dorsey", role: "Blockchain Developer", task: "Develop decentralized app", startTime: "13:00", endTime: "16:00", status: "Pending", approval: "Pending" },
                    { profile: "https://i.pravatar.cc/40?img=20", name: "Larry Page", role: "SEO Specialist", task: "Improve website rankings", startTime: "15:00", endTime: "17:30", status: "Completed", approval: "Approved" },
                    { profile: "https://i.pravatar.cc/40?img=21", name: "Sergey Brin", role: "AI Researcher", task: "Train machine learning models", startTime: "09:30", endTime: "12:30", status: "Completed", approval: "Approved" },
                    { profile: "https://i.pravatar.cc/40?img=22", name: "Angelina Jolie", role: "NGO Director", task: "Organize charity event", startTime: "10:00", endTime: "14:00", status: "Completed", approval: "Approved" },
                    { profile: "https://i.pravatar.cc/40?img=23", name: "Tom Holland", role: "Actor", task: "Prepare for new movie role", startTime: "14:00", endTime: "18:00", status: "Not Started", approval: "Pending" },
                    { profile: "https://i.pravatar.cc/40?img=24", name: "Kevin Hart", role: "Comedian", task: "Write new comedy script", startTime: "10:30", endTime: "13:30", status: "Pending", approval: "Pending" },
                    { profile: "https://i.pravatar.cc/40?img=25", name: "Chris Hemsworth", role: "Actor", task: "Train for upcoming role", startTime: "06:00", endTime: "09:00", status: "Completed", approval: "Approved" },
                    { profile: "https://i.pravatar.cc/40?img=26", name: "Zendaya", role: "Model", task: "Fashion week preparations", startTime: "12:30", endTime: "15:00", status: "Completed", approval: "Approved" },
                    { profile: "https://i.pravatar.cc/40?img=3", name: "Doc Hudson", role: "Web Developer Trainee", task: "Programming web apps for selling products", startTime: "13:30", endTime: "17:30", status: "Completed", approval: "Approved" }
                ];

                let currentAssignmentPage = 1;
                let assignmentsPerPage = 3;

                document.getElementById("assignmentsPerPage").addEventListener("change", function() {
                    assignmentsPerPage = parseInt(this.value);
                    currentAssignmentPage = 1;
                    displayAssignments();
                });

                displayAssignments();

                function displayAssignments() {
                    const container = document.getElementById("assignmentsContainer");
                    container.innerHTML = "";

                    const start = (currentAssignmentPage - 1) * assignmentsPerPage;
                    const end = start + assignmentsPerPage;
                    const paginatedData = assignmentsData.slice(start, end);

                    paginatedData.forEach((assignment, index) => {
                        const card = document.createElement("div");
                        card.classList.add("col-md-4", "mb-3");
                        card.innerHTML = `
                            <div class="card p-3 shadow-sm" onclick="showAssignmentDetails(${start + index})">
                                <div class="d-flex align-items-center">
                                    <img src="${assignment.profile}" alt="${assignment.name}" class="rounded-circle" width="40" height="40">
                                    <div class="ms-2">
                                        <h5 class="mb-0">${assignment.name}</h5>
                                        <small>${assignment.role}</small>
                                    </div>
                                </div>
                                <p class="mt-2">${assignment.task}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-primary">${assignment.startTime} - ${assignment.endTime}</span>
                                    <span class="badge bg-success">${assignment.status}</span>
                                </div>
                                <div class="mt-2 text-end text-success">✔ ${assignment.approval}</div>
                            </div>
                        `;
                        container.appendChild(card);
                    });
                    updateAssignmentsPagination();
                }

                function updateAssignmentsPagination() {
                    const paginationControls = document.getElementById("assignmentsPaginationControls");
                    paginationControls.innerHTML = "";
                    const totalPages = Math.ceil(assignmentsData.length / assignmentsPerPage);

                    paginationControls.innerHTML += `<li class="page-item ${currentAssignmentPage === 1 ? 'disabled' : ''}">
                        <a class="page-link" href="#" onclick="changeAssignmentPage(${currentAssignmentPage - 1})" style="border:none !important;"><img src="../assets/icon/less_than.png" />Previous</a></li>`;

                    if (totalPages > 3) {
                        paginationControls.innerHTML += `<li class="page-item ${currentAssignmentPage === 1 ? 'active' : ''}">
                            <a class="page-link" href="#" onclick="changeAssignmentPage(1)">1</a></li>`;

                        if (currentAssignmentPage > 2) {
                            paginationControls.innerHTML += `<li class="page-item disabled"><a class="page-link">...</a></li>`;
                        }

                        let startPage = Math.max(2, currentAssignmentPage - 1);
                        let endPage = Math.min(totalPages - 1, currentAssignmentPage + 1);

                        for (let i = startPage; i <= endPage; i++) {
                            paginationControls.innerHTML += `<li class="page-item ${currentAssignmentPage === i ? 'active' : ''}">
                                <a class="page-link" href="#" onclick="changeAssignmentPage(${i})">${i}</a></li>`;
                        }

                        if (currentAssignmentPage < totalPages - 1) {
                            paginationControls.innerHTML += `<li class="page-item disabled"><a class="page-link">...</a></li>`;
                        }

                        paginationControls.innerHTML += `<li class="page-item ${currentAssignmentPage === totalPages ? 'active' : ''}">
                            <a class="page-link" href="#" onclick="changeAssignmentPage(${totalPages})">${totalPages}</a></li>`;
                    }

                    paginationControls.innerHTML += `<li class="page-item ${currentAssignmentPage === totalPages ? 'disabled' : ''}">
                        <a class="page-link" href="#" onclick="changeAssignmentPage(${currentAssignmentPage + 1})"style="border:none !important;">Next<img src="../assets/icon/greater_than.png" /></a></li>`;
                }

                function changeAssignmentPage(page) {
                    if (page < 1 || page > Math.ceil(assignmentsData.length / assignmentsPerPage)) return;
                    currentAssignmentPage = page;
                    displayAssignments();
                }


                function showAssignmentDetails(index) {
                    const assignment = assignmentsData[index];
                    document.getElementById("assignmentDetails").innerHTML = `
                        <h4>${assignment.name}</h4>
                        <p>${assignment.task}</p>
                    `;
                    document.getElementById("assignmentDetailsPanel").style.right = "0";
                }

                function closeDetailsPanel() {
                    document.getElementById("assignmentDetailsPanel").style.right = "-400px";
                }
                // assignment cards 
                // Assignments tab




        </script>
@endsection





@extends('layouts.hr.hrLayout')
   
@section('content')
    @include('layouts.hr.navbar')

    <div class="row main-container" >
                @include('layouts.hr.sidebar')



                <div class="col-md-9 dashboard-content" id="dashboardContent">
                    <h2 class="mb-5" data-translate="Report">Report</h2>
                    
                    <!-- tab pane  -->
                    <div class="container">
                        <ul class="nav nav-tabs" id="reportTabs">
                            <li class="nav-item">
                                <a class="nav-link active" id="dailyReport-tab" data-bs-toggle="tab" href="#dailyReport">
                                    <i class="bi bi-clock-history" style="margin-right:5px;"></i><span data-translate="Daily Report">Daily Report</span> 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="feedbackReport-tab" data-bs-toggle="tab" href="#feedbackReport">
                                    <i class="bi bi-chat-dots" style="margin-right:5px;"></i><span data-translate="Feedback Report">Feedback Report</span>
                                </a>
                            </li>
                        </ul>
                        
                        <div class="tab-content mt-3">
                            <!-- Daily Report Tab -->
                            <div class="tab-pane fade show active" id="dailyReport">
                                <!-- tab heading  -->
                                <div class="d-flex justify-content-between mb-5 mt-4">
                                    <div class="d-flex justify-content-center align-items-center gap-5" style=" height:40px;">
                                        <h3 data-translate="Daily Report">Daily Report</h3>
                                        <div class="" style="background-color:white; padding:10px 5px; border-radius: 4px;">
                                            <button style="background-color: transparent; border-radius:4px; border:none;" data-translate="Morning">Morning</button>
                                            <button style="background-color: transparent; border-radius:4px; border:none;" data-translate="Before Lunch">Before Lunch</button>
                                            <button style="background-color: transparent; border-radius:4px; border:none;" data-translate="Evening">Evening</button>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-3">
                                        <div class="badge-box p-3  text-start d-flex flex-column justify-content-center" style="width: auto; height: 80px;">
                                            <p class="mb-1" data-translate="Total Onboard">Total Onboard</p>
                                            <h4 class="mb-0">17</h4>
                                        </div>
                                        <div class="badge-box p-3  text-start d-flex flex-column justify-content-center" style="width: auto; height: 80px;">
                                            <p class="mb-1" data-translate="Reported">Reported</p>
                                            <h4 class="mb-0">15</h4>
                                        </div>
                                        <div class="badge-box p-3  text-start d-flex flex-column justify-content-center" style="width: auto; height: 80px;">
                                            <p class="mb-1" data-translate="Pending">Pending</p>
                                            <h4 class="mb-0">2</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- tab heading  -->

                                <!-- line  -->
                                <div class="d-flex gap-5">
                                    <div class="big_line"></div>
                                    <div class="small_line"></div>
                                </div>
                                
                                <!-- line -->
                                <div class="d-flex justify-content-between mt-4" style="height:50px;">
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
                                        <div class="d-flex gap-2">
                                            <button class="btn general-setting-btn" style="border:1px solid black; width:auto; display:flex;justify-content: center;align-items: center;">
                                                <i class="bi bi-sliders"></i> <span data-translate="General Setting"> General Setting</span>
                                            </button>
                                            <button class="btn " style="background-color: #474BC2; color:white; border-radius: 4px; padding-top: 10px;"><img src="../assets/icon/export_1.png" alt=""> Export</button>
                                        </div>
                                </div>

                                <!-- report table  -->
                                <div class="table-responsive mt-4">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th data-translate="Intern">Intern</th>
                                                <th data-translate="Note">Note</th>
                                                <th data-translate="Date/Time">Date/Time</th>
                                                <th data-translate="Files">Files</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="reportTableBody"></tbody>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <label for="reportsPerPage" data-translate="Reports per page:">Reports per page:</label>
                                        <select id="reportsPerPage" class="form-select d-inline-block w-auto bg-transparent">
                                            <option value="4">4</option>
                                            <option value="8">8</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                    <nav>
                                        <ul class="pagination mb-0" id="reportPaginationControls"></ul>
                                    </nav>
                                </div>                     
                                <!-- report table  -->
                            </div>
                            <!-- Daily Report Tab -->
                        
                            <!-- Feedback Report Tab -->
                            <div class="tab-pane fade" id="feedbackReport">
                                <!-- tab heading  -->
                                <div class="d-flex justify-content-between mb-5 mt-4">
                                    <div class="d-flex justify-content-center align-items-center gap-3" style=" height:40px;">
                                        <h3 data-translate="Feedback Report">Feedback Report</h3>
                                        <div class="" style="background-color:white; padding:10px 5px; border-radius: 4px;">
                                            <button style="background-color: transparent; border-radius:4px; border:none;" data-translate="A week">A week</button>
                                            <button style="background-color: transparent; border-radius:4px; border:none;" data-translate="A month">A month</button>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-3">
                                        <div class="badge-box p-3  text-start d-flex flex-column justify-content-center" style="width: auto; height: 80px;">
                                            <p class="mb-1" data-translate="Total Onboard">Total Onboard</p>
                                            <h4 class="mb-0">17</h4>
                                        </div>
                                        <div class="badge-box p-3  text-start d-flex flex-column justify-content-center" style="width: auto; height: 80px;">
                                            <p class="mb-1" data-translate="Reported">Reported</p>
                                            <h4 class="mb-0">15</h4>
                                        </div>
                                        <div class="badge-box p-3  text-start d-flex flex-column justify-content-center" style="width: auto; height: 80px;">
                                            <p class="mb-1" data-translate="Pending">Pending</p>
                                            <h4 class="mb-0">2</h4>
                                        </div>
                                    </div>
                                </div>
                            <!-- tab heading  -->

                                <!-- line  -->
                                    <div class="d-flex gap-5">
                                        <div class="big_line_feedback"></div>

                                    </div>
                                                
                                <!-- line -->
                                <div class="d-flex justify-content-between mt-5" style="height:50px;">
                                    <div class="d-flex gap-2">
                                        <div class="input-group search-box" style=" justify-content: center; align-items: center; border:1px solid #C8C8C8; border-radius:4px;">
                                            <span class="input-group-text" style="height:100%; border:none; background-color: white;"><i class="bi bi-search"></i></span>
                                            <input type="text" id="searchInputTestForm" style="height:100%; width:200px; border:none; background-color: white;"  class="form-control" placeholder="Search for tests">
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <button class="btn general-setting-btn" style="border:1px solid black; width:auto; display:flex;justify-content: center;align-items: center;">
                                            <i class="bi bi-sliders"></i> <span data-translate="General Setting"> General Setting</span>
                                        </button>
                                        <button class="btn " style="background-color: #474BC2; color:white; border-radius: 4px; padding-top: 10px;"><img src="../assets/icon/export_1.png" alt=""><span data-translate="Export">Export</span>Export</button>
                                    </div>
                            </div>

                            <!-- feedbackReport card  -->
                            <div class="mt-4">
                                <div class="row" id="feedbackCardsContainer">

                                </div>
                                
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <label for="feedbackPerPage" data-translate="Interns per page:">Interns per page:</label>
                                        <select id="feedbackPerPage" class="form-select d-inline-block w-auto bg-transparent">
                                            <option value="3">3</option>
                                            <option value="6">6</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                    <nav>
                                        <ul class="pagination mb-0" id="feedbackPaginationControls"></ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- feedbackReport card  -->

                                
                            </div>
                            <!-- Feedback Panel -->
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="feedbackPanel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" data-translate="Feedback Details">Feedback Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                                </div>
                                <div class="offcanvas-body" id="feedbackDetails"></div>
                            </div>
                            <!-- Feedback Report Tab -->

                        </div>
                    </div>         
                    <!-- tab pane  -->
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


                        .dashboard-content {
                            padding: 20px;
                        }

                        /* tab pane  */
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
                        /* tab pane  */
                /* Daily Report Tab  */
                /* heading  */
                .badge-box{
                            background-color:#B1BBE7;
                            border-radius:4px;
                        }
                /* heading  */
                .big_line,.small_line{
                    height:30px;
                    border-radius:4px;
                }
                .big_line{
                    width:80%;
                    background-color:#B1BBE7;
                }

                .big_line_feedback{
                    width:80%;
                    background-color:#B1BBE7;
                }
                .small_line{
                    width:20%;
                    background-color:white !important;
                }

                /* calendar  */
                .dropdown {
                    position: relative;
                    display: inline-block;
                }

                .calendar_btn{
                    border:2px solid black;
                    border-radius:4px;
                    height:50px;
                    width:200px;
                }

                .calendar_btn:hover{
                    border:2px solid black;
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
                /* calendar  */

                /* report table  */
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
                /* report table  */

                /* Daily Report Tab  */

                /* Feedback Report Tab  */
                .big_line,.small_line{
                    height:30px;
                    border-radius:4px;
                }


                .big_line_feedback{
                    width:100%;
                    height:30px;
                    border-radius:4px;
                    background-color:#B1BBE7;
                }

                /* Feedback Report Tab  */
                        
        
    </style>
    
@endsection

@section('script')
<script type="text/javascript">

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


            // tab movement
            document.addEventListener("DOMContentLoaded", function () {
                let savedTab = localStorage.getItem("activeReportTab") || "#dailyReport";
                let currentTab = document.querySelector(`a[href="${savedTab}"]`);

                if (currentTab) {
                    let tab = new bootstrap.Tab(currentTab);
                    tab.show();
                }

                document.querySelectorAll("#reportTabs a").forEach(tab => {
                    tab.addEventListener("click", function () {
                        localStorage.setItem("activeReportTab", this.getAttribute("href"));
                    });
                });
            });
            // tab movement 

            // Daily Report Tab 
            // report tab calendar 
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

            // report tab calendar 

            // report table 
            const reportData = Array.from({ length: 30 }, (_, i) => ({
                profile: `https://i.pravatar.cc/40?img=${i + 1}`,
                name: `Intern ${i + 1}`,
                role: i % 2 === 0 ? "Software Tester" : "Web Developer Trainee",
                note: `Report note for Intern ${i + 1}`,
                dateTime: `17 Dec 2024, 12:3${i}`,
                file: i % 3 === 0 ? `Report_${i}.pdf` : "-"
            }));

            let currentReportPage = 1;
            let reportsPerPage = 4;

            displayReports();

            document.getElementById("reportsPerPage").addEventListener("change", function() {
                reportsPerPage = parseInt(this.value);
                currentReportPage = 1;
                displayReports();
            });

            function displayReports() {
                const tableBody = document.getElementById("reportTableBody");
                tableBody.innerHTML = "";
                
                const start = (currentReportPage - 1) * reportsPerPage;
                const end = start + reportsPerPage;
                const paginatedData = reportData.slice(start, end);
                
                paginatedData.forEach((report) => {
                    const row = document.createElement("tr");
                    row.innerHTML = `
                        <td class="d-flex align-items-center">
                            <img src="${report.profile}" alt="${report.name}" class="rounded-circle" width="40" height="40">
                            <div class="ms-2">
                                <strong>${report.name}</strong><br/>
                                <small>${report.role}</small>
                            </div>
                        </td>
                        <td>${report.note}</td>
                        <td>${report.dateTime}</td>
                        <td>${report.file !== "-" ? `<a href="#">${report.file}</a>` : "-"}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-light" type="button" data-bs-toggle="dropdown">&#8942;</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Remove</a></li>
                                    <li><a class="dropdown-item" href="#">Report Details</a></li>
                                </ul>
                            </div>
                        </td>
                    `;
                    tableBody.appendChild(row);
                });
                updateReportPagination();
            }

            function updateReportPagination() {
                const paginationControls = document.getElementById("reportPaginationControls");
                paginationControls.innerHTML = "";
                const totalPages = Math.ceil(reportData.length / reportsPerPage);

                paginationControls.innerHTML += `<li class="page-item ${currentReportPage === 1 ? 'disabled' : ''}">
                    <a class="page-link" href="#" style="border:none !important;justify-content:center;align-items:center;" onclick="changeReportPage(${currentReportPage - 1})"><i class="bi bi-chevron-left"></i> Previous</a></li></a></li>`;

                if (totalPages > 3) {
                    paginationControls.innerHTML += `<li class="page-item ${currentReportPage === 1 ? 'active' : ''}">
                        <a class="page-link" href="#" onclick="changeReportPage(1)">1</a></li>`;
                    
                    if (currentReportPage > 2) {
                        paginationControls.innerHTML += `<li class="page-item disabled"><a class="page-link">...</a></li>`;
                    }

                    let startPage = Math.max(2, currentReportPage - 1);
                    let endPage = Math.min(totalPages - 1, currentReportPage + 1);

                    for (let i = startPage; i <= endPage; i++) {
                        paginationControls.innerHTML += `<li class="page-item ${currentReportPage === i ? 'active' : ''}">
                            <a class="page-link" href="#" onclick="changeReportPage(${i})">${i}</a></li>`;
                    }

                    if (currentReportPage < totalPages - 1) {
                        paginationControls.innerHTML += `<li class="page-item disabled"><a class="page-link">...</a></li>`;
                    }

                    paginationControls.innerHTML += `<li class="page-item ${currentReportPage === totalPages ? 'active' : ''}">
                        <a class="page-link" href="#" onclick="changeReportPage(${totalPages})">${totalPages}</a></li>`;
                }

                paginationControls.innerHTML += `<li class="page-item ${currentReportPage === totalPages ? 'disabled' : ''}">
                    <a class="page-link" href="#" style="border:none !important;justify-content:center;align-items:center;" onclick="changeReportPage(${currentReportPage + 1})">Next<i class="bi bi-chevron-right"></i> </a></li>`;
            }

            function changeReportPage(page) {
                if (page < 1 || page > Math.ceil(reportData.length / reportsPerPage)) return;
                currentReportPage = page;
                displayReports();
            }

            // report table 
            // Daily Report Tab 

            // Feed back report tab 
            //Feed back report card
            const feedbackData = Array.from({ length: 18 }, (_, i) => ({
                profile: `https://i.pravatar.cc/40?img=${i + 1}`,
                name: `Intern ${i + 1}`,
                role: i % 2 === 0 ? "UX/UI Designer Trainee" : "Web Developer Trainee",
                assignedDate: `17 Dec 2024, 12:3${i}`,
                feedbackTitle: "ONE WEEK FEEDBACK",
                feedback: `Feedback content for Intern ${i + 1}. They developed new skills and improved their abilities.`
            }));

            let currentFeedbackPage = 1;
            let feedbackPerPage = 3;

            displayFeedbackCards();

            document.getElementById("feedbackPerPage").addEventListener("change", function() {
                feedbackPerPage = parseInt(this.value);
                currentFeedbackPage = 1;
                displayFeedbackCards();
            });

            function displayFeedbackCards() {
                const container = document.getElementById("feedbackCardsContainer");
                container.innerHTML = "";
                
                const start = (currentFeedbackPage - 1) * feedbackPerPage;
                const end = start + feedbackPerPage;
                const paginatedData = feedbackData.slice(start, end);
                
                paginatedData.forEach(feedback => {
                    const card = document.createElement("div");
                    card.className = "col-md-4 mb-4";
                    card.innerHTML = `
                        <div class="card shadow-sm p-3">
                            <div class="d-flex align-items-center">
                                <img src="${feedback.profile}" class="rounded-circle me-2" width="40" height="40">
                                <div>
                                    <strong>${feedback.name}</strong><br>
                                    <small>${feedback.role}</small>
                                </div>
                            </div>
                            <hr>
                            <p><strong>${feedback.feedbackTitle}</strong></p>
                            <button class="btn btn-outline-primary" onclick="openFeedbackPanel(${feedbackData.indexOf(feedback)})">Read more</button>
                        </div>`;
                    container.appendChild(card);
                });
                updateFeedbackPagination();
            }

            function openFeedbackPanel(index) {
                const feedback = feedbackData[index];
                document.getElementById("feedbackDetails").innerHTML = `
                    <div class="d-flex align-items-center">
                        <img src="${feedback.profile}" class="rounded-circle me-2" width="50" height="50">
                        <div>
                            <h5>${feedback.name}</h5>
                            <small>${feedback.role}</small>
                        </div>
                    </div>
                    <hr>
                    <p><strong>Title:</strong> ${feedback.feedbackTitle}</p>
                    <p>${feedback.feedback}</p>
                    <p><strong>Assigned:</strong> ${feedback.assignedDate}</p>`;
                
                let offcanvas = new bootstrap.Offcanvas(document.getElementById("feedbackPanel"));
                offcanvas.show();
            }

            function updateFeedbackPagination() {
                const paginationControls = document.getElementById("feedbackPaginationControls");
                paginationControls.innerHTML = "";
                const totalPages = Math.ceil(feedbackData.length / feedbackPerPage);
                
                paginationControls.innerHTML += `<li class="page-item ${currentFeedbackPage === 1 ? 'disabled' : ''}">
                    <a class="page-link" href="#" style="border:none !important;justify-content:center;align-items:center;" onclick="changeFeedbackPage(${currentFeedbackPage - 1})"><i class="bi bi-chevron-left"></i>Previous</a></li>`;
                
                if (totalPages > 3) {
                    paginationControls.innerHTML += `<li class="page-item ${currentFeedbackPage === 1 ? 'active' : ''}">
                        <a class="page-link" href="#" onclick="changeFeedbackPage(1)">1</a></li>`;
                    
                    if (currentFeedbackPage > 2) {
                        paginationControls.innerHTML += `<li class="page-item disabled"><a class="page-link">...</a></li>`;
                    }
                    
                    let startPage = Math.max(2, currentFeedbackPage - 1);
                    let endPage = Math.min(totalPages - 1, currentFeedbackPage + 1);
                    
                    for (let i = startPage; i <= endPage; i++) {
                        paginationControls.innerHTML += `<li class="page-item ${currentFeedbackPage === i ? 'active' : ''}">
                            <a class="page-link" href="#" onclick="changeFeedbackPage(${i})">${i}</a></li>`;
                    }
                    
                    if (currentFeedbackPage < totalPages - 1) {
                        paginationControls.innerHTML += `<li class="page-item disabled"><a class="page-link">...</a></li>`;
                    }
                    
                    paginationControls.innerHTML += `<li class="page-item ${currentFeedbackPage === totalPages ? 'active' : ''}">
                        <a class="page-link" href="#" onclick="changeFeedbackPage(${totalPages})">${totalPages}</a></li>`;
                }
                
                paginationControls.innerHTML += `<li class="page-item ${currentFeedbackPage === totalPages ? 'disabled' : ''}">
                    <a class="page-link" href="#" style="border:none !important;justify-content:center;align-items:center;" onclick="changeFeedbackPage(${currentFeedbackPage + 1})">Next<i class="bi bi-chevron-right"></i></a></li>`;
            }

            function changeFeedbackPage(page) {
                if (page < 1 || page > Math.ceil(feedbackData.length / feedbackPerPage)) return;
                currentFeedbackPage = page;
                displayFeedbackCards();
            }
            //Feedback Report card
            // Feedback report tab 




</script>
@endsection













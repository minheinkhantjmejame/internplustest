
@extends('layouts.hr.hrLayout')

@section('styles')
    <style rel="stylesheet" type="text/css">
                    body {
                        background-color: #fff;
                        height: 100%;
                    }
                    .main-container {
                        display: flex;
                        align-items: stretch; 
                    }
                    .sidebar {
                background-color: #F3F5FC;
                padding-top: 10px;
                padding-left: 20px;
                height: auto; /* ✅ ENSURE FULL PAGE HEIGHT */


                overflow-y: auto; /* ✅ Allows scrolling if content is longer */
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
                    .card {
                        margin-bottom: 20px;
                    }

                    .container {
                    background-color:#F3F5FC;
                    padding-left: 20px;
                    border-radius: 8px;

                    }

                    h3 {
                        color: #333;
                    }

                    .underline {
                        border-bottom: 3px solid #4a90e2;
                    }

                    .chart-container {
                        width: 100%;
                        height: 350px;
                        border:1px solid #b6a6f1;
                        padding:30px;
                    }

                    .legend {
                        margin-top: 90px;
                        display: flex;
                        flex-direction:column;
                        text-align: left;
                        gap:20px;
                    }

                    .legend-item {
                        width: 12px;
                        height: 12px;
                        display: inline-block;
                        border-radius: 3px;
                        text-align:left;
                    }

                    .on-time {
                        background-color: #D1D1F0;
                    }

                    .late {
                        background-color: #D5CFFB;
                    }

                    .absent {
                        background-color: #B1BBE7;
                    }

                    #category-container .btn {
                margin-right: 10px; /* Adjust the value as needed */
                }

                #category-container .btn:last-child {
                margin-right: 0; /* Remove margin from the last button */
                }

                /* Sidebar Styling */
                .sidebar-form {
                    position: fixed;
                    top: 0;
                    right: -400px; /* Hidden by default */
                    width: 400px;
                    height: 100vh;
                    background-color: white;
                    box-shadow: -2px 0 10px rgba(0, 0, 0, 0.2);
                    padding: 20px;
                    transition: right 0.3s ease-in-out;
                    z-index: 1000;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                }

                /* Show Sidebar */
                .sidebar-form.show {
                    right: 0;
                }

                /* Sidebar Header */
                .sidebar-header {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    margin-bottom: 15px;
                }

                .sidebar-header h3 {
                    font-size: 20px;
                    margin: 0;
                }

                /* Close Button */
                .close-btn {
                    font-size: 20px;
                    cursor: pointer;
                    color: black;
                }

                /* Sidebar Content */
                .sidebar-content {
                    flex-grow: 1;
                }

                /* Category Name Label */
                .text-muted {
                    font-size: 14px;
                }

                /* Create Button */
                .btn-create {
                    background-color: #5c67f2; /* Color from image */
                    color: white;
                    width: 100%;
                    padding: 10px;
                    border-radius: 5px;
                    font-size: 16px;
                    border: none;
                }

                .btn-create:hover {
                    background-color: #4a54d2; /* Darker shade on hover */
                }
                    .card-container {
                        background: #F3F5FC;
                        padding: 20px;
                        padding-bottom:0;
                        border-radius: 8px;
                        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
                        margin: 50px auto;
                    }

                    .header-title {
                        font-size: 24px;
                        font-weight: bold;
                    }

                    .table-container {
                        background-color: #F3F5FC;
                        border-radius: 10px;
                        overflow: hidden;
                    }
                    .table{
                        background-color:#F3F5FC;
                    }

                    .table th {
                        background-color: #ffffff;
                        border-bottom: 2px solid #e0e4f5;
                        font-weight: bold;
                    }

                    .table td, .table th {
                        vertical-align: middle;
                        padding: 15px;
                    }
                    .table tr{
                        background-color:#F3F5FC;
                    }
                    .table td{
                        background-color:#F3F5FC;
                    }

                    .table td .approved{
                        color:green;
                    }

                    .profile-img {
                        width: 40px;
                        height: 40px;
                        border-radius: 50%;
                        margin-right: 10px;
                    }

                    .approval-text {
                        font-weight: bold;
                    }

                    .approval-text.approved {
                        color: #6DD52D;
                    }

                    .approval-text.rejected {
                        color: #DD3D3D;
                    }

                    .approval-icons img{
                        margin-right:10px;
                    }



                    .hold { background-color: #ddd4ff; color: #5a49a1; }
                    .paid { background-color: #d4ffe5; color: #2b8750; }
                    .approved { color: green; }
                    .setup { color: gray; }


                    .table-container {
                        overflow-x: auto;
                        border:none;
                    }
                    .profile-img {
                        width: 40px;
                        height: 40px;
                        border-radius: 50%;
                        margin-right: 10px;
                    }
                    .status-badge {
                        padding: 5px 10px;
                        border-radius: 12px;
                        font-size: 12px;
                    }



                    .profile-img {
                        width: 50px;
                        height: 50px;
                        border-radius: 50%;
                        margin-right: 10px;
                    }
                    .contact-info {
                        display: flex;
                        align-items: center;
                        gap: 8px;
                        font-size: 14px;
                    }
                    .menu-icon {
                        position: absolute;
                        top: 15px;
                        right: 15px;
                        cursor: pointer;
                    }

                    .calendar-container {
                        display: flex;
                        justify-content: space-between;
                        margin: 20px;
                    }
                    .calendar-section {
                        flex: 3;
                    }
                    .calendar-header {
                display: flex;
                flex-direction: column; /* Ensures Calendar title is on top */
                align-items: flex-start;
                margin-bottom: 15px;
                }

                /* New container to hold both Year Selector & Month Navigation */
                .calendar-controls {
                display: flex;
                align-items: center;
                justify-content: space-between;
                width: 100%; /* Ensures full width for proper alignment */
                margin-top: 5px; /* Spacing below the Calendar heading */
                }

                /* Container to hold the dropdown */
                .year-selector-container {
                position: relative;
                display: inline-block;
                }

                .description-box {
                display: none;
                position: absolute;
                background-color: white;
                border: 1px solid #000;
                border-radius: 4px;
                padding: 15px;
                width: 250px;
                z-index: 1000;
                }

                .description-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 10px;
                }

                .description-content {
                display: flex;
                flex-direction: column;
                gap: 10px;
                }

                .description-select {
                display: flex;
                align-items: center;
                gap: 5px;
                }

                .description-input {
                display: flex;
                flex-direction: column;
                gap: 5px;
                }

                .description-badge .badge {
                padding: 5px 10px;
                border-radius: 4px;
                font-size: 14px;
                width:60px;
                }

                .description-actions {
                display: flex;
                justify-content: space-between;
                align-items: center;
                }

                /* Styled button that looks like a select */
                .year-selector-btn {
                background-color: #F3F5FC;
                border: none;
                font-size: 16px;
                padding:10px 20px;
                cursor: pointer;
                position: relative;
                display: flex;
                align-items: center;
                gap: 10px;
                }

                /* White circular background for the arrow */
                .year-selector-btn i {
                background-color: white;
                color: black;
                border-radius: 4px;
                padding: 5px;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 24px;
                height: 24px;
                }

                /* Dropdown menu */
                .year-dropdown {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background-color: white;
                border: 1px solid #ddd;
                border-radius: 4px;
                box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
                padding: 5px 0;
                z-index: 1000;
                list-style: none;
                }

                .year-dropdown li {
                padding: 10px;
                text-align: center;
                cursor: pointer;
                transition: background-color 0.3s;
                }

                .year-dropdown li:hover {
                background-color: #F3F5FC;
                }


                .white-arrow {
                position: absolute;
                right: 10px;
                top: 50%;
                transform: translateY(-50%);
                color: black;
                pointer-events: none; /* Prevent clicking on the icon */
                background-color:#ffffff;
                }



                /* Month Navigation */
                .month-navigation {
                display: flex;
                align-items: center;
                gap: 10px;
                font-size: 16px;
                font-weight: bold;
                }
                .month-navigation i {
                cursor: pointer;
                padding: 10px;
                font-size: 18px;
                }



                .calendar-container {
                display: flex;
                justify-content: space-between;
                margin-top: 20px;
                }

                .calendar-section {
                flex: 3;
                }

                .calendar-days {
                display: grid;
                grid-template-columns: repeat(7, 1fr);
                text-align: center;
                font-weight: bold;
                margin-bottom: 10px;
                }

                .calendar-grid {
                display: grid;
                grid-template-columns: repeat(7, 1fr);
                gap: 10px;
                text-align: center;
                }

                .day-box {
                position: relative;
                width: 100px; /* Fixed width */
                height: 80px; /* Fixed height */
                background-color: #f8f9fa;
                padding: 10px;
                border-radius: 5px;
                display: flex;
                flex-direction: column;
                align-items: flex-start; /* Align content to the left */
                justify-content: flex-end; /* Pushes badges to the bottom */
                text-align: left;
                overflow: hidden; /* Prevents overflow */
                }


                .day-box .badge-container {
                display: flex;
                flex-direction: column; /* Stack badges vertically */
                align-items: flex-start; /* Align to bottom left */
                position: absolute;
                bottom: 5px;
                left: 5px;
                gap: 2px; /* Space between multiple badges */
                }

                /* Highlight selected day box */
                .day-box.selected {
                border: 2px solid #474BC2; /* Change to match your UI */
                background-color: #ffffff;
                }

                /* Plus Icon Styling */
                .plus-icon {
                font-size: 24px;
                font-weight: bold;
                color: #474BC2;
                display: none; /* Initially hidden */
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                }


                /* Show plus icon when selected */
                .day-box.selected .plus-icon {
                display: block;
                }

                .day-number {
                position: absolute;
                top: 10px;
                right: 10px;
                font-size: 14px;
                color: #333;
                font-weight:bold;
                }

                .date-description {
                flex: 1;
                background-color: #f8f9fa;
                padding: 15px;
                border-radius: 4px;
                min-height: 300px;
                margin-left: 20px;

                }

                /* Ensures badge text stays on a single line in the description box */
                .description-badge .badge {
                display: inline-block;
                padding: 5px 10px;
                border-radius: 4px;
                font-size: 14px;
                width: auto; /* Adjusts width dynamically */
                max-width: 100%; /* Ensures it doesn’t exceed the box */
                white-space: nowrap; /* Prevents breaking into multiple lines */
                overflow: hidden; /* Hides any overflow */
                text-overflow: ellipsis; /* Adds '...' if text is too long */
                }


                #add-button,#delete-button{
                background-color:#474BC2;
                border:none;
                border-radius:4px;
                color:#ffff;
                font-size:14px;
                }

                /* Style for badge container to keep text inline */
                .badge-text {
                display: flex;
                align-items: center; /* Aligns vertically */
                gap: 8px; /* Adds spacing between badge and text */
                font-size: 14px; /* Adjust font size */
                }

                /* Ensure the badge itself is properly aligned */
                /* Badge styling with multi-line support */
                .badge {
                display: inline-block;
                padding: 3px 6px;
                font-size: 12px;
                border-radius: 4px;
                color: white;
                font-weight: bold;
                text-align: center;
                white-space: normal;
                line-height: 1.2;
                word-wrap: break-word;
                text-transform: capitalize;
                }

                /* Colors for different events */
                .holiday-badge {
                background-color: #D5CFFB;
                color:#5C5AC8;
                }

                .weekend-badge {
                background-color: #DDF7FE;
                color: #25849D;
                }

                .onboard-badge {
                background-color: #DCE3FF;
                color:#6F7CB5;
                }

                .offboard-badge {
                background-color: #E1FEF1;
                color:#64C79B;

                }

                .faint-text {
                color: #A0A0A0; /* Light gray text */
                font-weight: 400; /* Normal weight (not bold) */
                font-size: 14px; /* Adjust size if needed */

                }






    </style>
@endsection

   
@section('content')
    @include('layouts.hr.navbar')

    <div class="row main-container" >

        @include('layouts.hr.sidebar') 


            <div class="col-md-9 dashboard-content"  id="dashboardContent">
                <div class="container" style="background-color:#fff;">
                    <div class="calendar-header">
                        <h2 data-translate="Calendar">Calendar</h2>
                    
                        <div  style=" width:60%;">
                        <!-- New container for Year Selector & Month Navigation -->
                        <div class="calendar-controls">
                            <!-- Year Selector -->
                            <div class="year-selector-container">
                                <button id="year-selector-btn" class="year-selector-btn">
                                    <span id="selected-year">2024</span>
                                    <i class="bi bi-chevron-down"></i>
                                </button>
                                <ul id="year-dropdown" class="year-dropdown">
                                    <li data-value="2024">2024</li>
                                    <li data-value="2025">2025</li>
                                    <li data-value="2026">2026</li>
                                </ul>
                            </div>
                            
                            
                    
                            <!-- Month Navigation -->
                            <div class="month-navigation text-center" style="width:80%;display:flex;justify-content: center;align-items: center;">
                                <div style="display:flex;justify-content: center;align-items: center;">
                                <i id="prev-month" class="bi bi-chevron-left"></i>
                                <p id="current-month" class="m-0" data-translate="December">December</p>
                                <i id="next-month" class="bi bi-chevron-right"></i>
                                </div>
                                
                            </div>
                        </div>
                        </div>

                    </div>
                    
                    
                    
                    <div class="calendar-container mt-0">
                        <!-- Calendar -->
                        <div class="calendar-section mt-0">
                            <div class="calendar-days" id="day-names">
                                <!-- Days will be inserted dynamically -->
                            </div>
                            <div class="calendar-grid" id="calendar">
                                <!-- Dates will be inserted dynamically -->
                            </div>
                        </div>

                        <!-- Add this inside the calendar-container div -->
                        <div id="description-box" class="description-box">
                            <div class="description-header">
                                <span id="description-date">Wed, 25 Dec 2024</span>
                            </div>
                            <div class="description-content">
                                <div class="description-select">
                                    <img src="../assets/icon/pin.png" alt="">
                                    <select id="description-type" style="border:none; background-color: #F3F5FC; padding:10px 10px;" >
                                        <option value="holiday" data-translate="Holiday">Holiday</option>
                                        <option value="weekend" data-translate="Weekend">Weekend</option>
                                        <option value="internship-onboard" data-translate="Internship Onboard">Internship Onboard</option>
                                        <option value="internship-offboard" data-translate="Internship Offboard">Internship Offboard</option>
                                    </select>
                                </div>
                                <div class="description-input">
                                    <label style="font-size:16px;" data-translate="Description">Description</label>
                                    <input type="text" id="description-text" placeholder="Enter description">
                                </div>
                                <div class="description-badge">
                                    <span class="badge" id="description-badge" data-translate="Weekend">Weekend</span>
                                </div>
                                <div>
                                    <img src="../assets/icon/add_profile.png" style="width: 35px; height: 35px; border: 1px dashed black; border-radius: 50%; padding: 10px; box-sizing: border-box;"  alt="">
                                </div>
                                <div class="description-actions" style="display:flex;justify-content: end;align-items: end;">
                                    <button id="add-button" data-translate="Add">Add</button>
                                    <button id="delete-button" data-translate="Delete">Delete</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="date-description">
                            <h5 data-translate="Date Description">Date Description</h5>
                            <hr>
                            <p class="badge-text">
                                <span class="badge holiday-badge" style="width:15px;height:15px;"> </span> Holiday
                            </p>
                            <p class="badge-text">
                                <span class="badge offboard-badge" style="width:15px;height:15px;"> </span> Weekend
                            </p>
                            <p class="badge-text">
                                <span class="badge onboard-badge" style="width:15px;height:15px;"> </span> Internship onboard
                            </p>
                            <p class="badge-text">
                                <span class="badge holiday-badge" style="width:15px;height:15px;"> </span> Internship offboard
                            </p>


                        </div>
                        
                        
                        
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
                    if (!this.getAttribute("href").startsWith("#")) {
                        localStorage.setItem("activeSidebarLink", this.getAttribute("href"));
                        return; // Let the browser navigate normally
                    }
                    event.preventDefault();
                    sidebarLinks.forEach(l => l.classList.remove("active"));
                    this.classList.add("active");
                    localStorage.setItem("activeSidebarLink", this.getAttribute("href"));
                });
            });

            const calendarGrid = document.getElementById("calendar");
            const dayNamesRow = document.getElementById("day-names"); // Day names container
            const descriptionBox = document.getElementById("description-box");
            const descriptionDate = document.getElementById("description-date");
            const descriptionType = document.getElementById("description-type");
            const descriptionText = document.getElementById("description-text");
            const addButton = document.getElementById("add-button");
            const deleteButton = document.getElementById("delete-button");
            const descriptionBadge = document.getElementById("description-badge");
            const dateDescriptionContainer = document.querySelector(".date-description"); // Date description section
            const prevMonthBtn = document.getElementById("prev-month"); // ⬅️ Previous Month Button
            const nextMonthBtn = document.getElementById("next-month"); // ➡️ Next Month Button

            let events = {}; // Store event data

            let currentMonth = 11; // December default
            let currentYear = 2024; // Default year
            let selectedDate = null; // Track the clicked date

            // Year Selector Functionality
            const yearSelectorBtn = document.getElementById("year-selector-btn");
            const yearDropdown = document.getElementById("year-dropdown");
            const selectedYearSpan = document.getElementById("selected-year");

            // Toggle dropdown visibility
            yearSelectorBtn.addEventListener("click", function (event) {
                event.stopPropagation();
                yearDropdown.style.display = yearDropdown.style.display === "block" ? "none" : "block";
            });

            // Close dropdown when clicking outside
            document.addEventListener("click", function () {
                yearDropdown.style.display = "none";
            });

            // Handle year selection
            yearDropdown.querySelectorAll("li").forEach(item => {
                item.addEventListener("click", function () {
                    const selectedYear = this.getAttribute("data-value");
                    selectedYearSpan.textContent = selectedYear;
                    currentYear = parseInt(selectedYear);
                    generateCalendar(currentMonth, currentYear);
                    yearDropdown.style.display = "none";
                });
            });

            function generateCalendar(month, year) {
                const monthNames = [
                    "January", "February", "March", "April", "May", "June",
                    "July", "August", "September", "October", "November", "December"
                ];
                
                document.getElementById("current-month").innerText = monthNames[month];
                document.getElementById("selected-year").innerText = year;

                calendarGrid.innerHTML = ""; // Clear the previous calendar
                dayNamesRow.innerHTML = ""; // Clear day names

                // Day names (Sun - Sat)
                const dayNames = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
                dayNames.forEach(day => {
                    const dayDiv = document.createElement("div");
                    dayDiv.textContent = day;
                    dayDiv.classList.add("day-name"); // Add a class for styling
                    dayNamesRow.appendChild(dayDiv);
                });

                const firstDay = new Date(year, month, 1).getDay();
                const daysInMonth = new Date(year, month + 1, 0).getDate();

                for (let i = 0; i < firstDay; i++) {
                    calendarGrid.innerHTML += '<div></div>';
                }

                for (let day = 1; day <= daysInMonth; day++) {
                    const dateKey = `${year}-${(month + 1).toString().padStart(2, "0")}-${day.toString().padStart(2, "0")}`;
                    const dayOfWeek = new Date(year, month, day).getDay();
                    let badge = "";

                    // Automatically mark weekends (Saturday & Sunday) as "Weekend"
                    if (dayOfWeek === 0 || dayOfWeek === 6) { // Sunday (0) & Saturday (6)
                        events[dateKey] = { type: "weekend", description: "Weekend" };
                    }

                    if (events[dateKey]) {
                        let badgeClass = getBadgeClass(events[dateKey].type);
                        badge = `<span class="badge ${badgeClass}">${events[dateKey].type.replace("-", " ")}</span>`;
                    }

                    const dayBox = document.createElement("div");
                    dayBox.className = "day-box";
                    dayBox.innerHTML = `<span class="day-number">${day}</span> ${badge}`;
                    
                    dayBox.addEventListener("click", function (event) {
                        event.stopPropagation();
                        selectedDate = dateKey;
                        showDescriptionBox(dateKey, events[dateKey]?.type || "", events[dateKey]?.description || "", dayBox);
                    });

                    calendarGrid.appendChild(dayBox);
                }

                updateDateDescription();
            }



            function showDescriptionBox(date, eventType, description, targetElement) {
            // Remove previous selection
            document.querySelectorAll(".day-box").forEach(box => {
                box.classList.remove("selected");
            });

            // Add selected class to the clicked day
            targetElement.classList.add("selected");

            // Create or update the plus icon inside the selected day box
            let plusIcon = targetElement.querySelector(".plus-icon");
            if (!plusIcon) {
                plusIcon = document.createElement("span");
                plusIcon.className = "plus-icon";
                plusIcon.innerHTML = "+"; // Plus sign
                targetElement.appendChild(plusIcon);
            }

            // Show full date in description box
            descriptionDate.textContent = new Date(date).toLocaleDateString('en-US', { 
                weekday: 'short', year: 'numeric', month: 'short', day: 'numeric' 
            });

            // If the selected date is a weekend, show "Weekend" as default
            if (new Date(date).getDay() === 0 || new Date(date).getDay() === 6) {
                eventType = "weekend"; 
                description = "Weekend";
            }

            descriptionType.value = eventType || "holiday";
            descriptionText.value = description || ""; // Loads saved descriptions

            updateBadge(eventType); // Show badge dynamically

            addButton.style.display = "inline-block";
            deleteButton.style.display = events[date] ? "inline-block" : "none";

            addButton.onclick = function () {
                saveEvent(date);
            };
            
            deleteButton.onclick = function () {
                deleteEvent(date);
            };

            descriptionBox.style.display = "block";

            // Positioning near the clicked date
            const rect = targetElement.getBoundingClientRect();
            descriptionBox.style.left = `${rect.left + window.scrollX}px`;
            descriptionBox.style.top = `${rect.bottom + window.scrollY + 10}px`;
        }


        function hideDescriptionBox() {
            descriptionBox.style.display = "none";

            // Remove selection border and plus icon when clicking outside
            document.querySelectorAll(".day-box").forEach(dayBox => {
                dayBox.classList.remove("selected"); // Remove border
                let plusIcon = dayBox.querySelector(".plus-icon");
                if (plusIcon) {
                    plusIcon.remove(); // Remove + icon
                }
            });
        }


            function saveEvent(date) {
                const eventType = descriptionType.value;
                const description = descriptionText.value;

                events[date] = { type: eventType, description: description };
                generateCalendar(currentMonth, currentYear); // Refresh UI
                updateDateDescription();
                showDescriptionBox(date, eventType, description, document.querySelector(`.day-box .day-number`)); // Show updated
            }

            function deleteEvent(date) {
                delete events[date];
                generateCalendar(currentMonth, currentYear);
                updateDateDescription();
                hideDescriptionBox();
            }

            function updateBadge(eventType) {
            let badgeClass = getBadgeClass(eventType);

            // If no event is selected, hide the badge
            if (!eventType) {
                descriptionBadge.style.display = "none";
                descriptionBadge.textContent = ""; // Clear the text
            } else {
                descriptionBadge.style.display = "inline-block"; // Show only if event is selected
                descriptionBadge.textContent = eventType.replace("-", " "); // Proper spacing
                descriptionBadge.className = "badge " + badgeClass;
            }
        }



            function getBadgeClass(eventType) {
                switch (eventType) {
                    case "weekend": return "weekend-badge";
                    case "internship-onboard": return "onboard-badge";
                    case "internship-offboard": return "offboard-badge";
                    default: return "holiday-badge";
                }
            }

            function updateDateDescription() {
            let descriptionHTML = `<h5 data-translate="Date Description">Date Description</h5>`;

            // 🔹 Add user-selected events before the separator line
            Object.keys(events).forEach(date => {
                if (events[date].type !== "weekend") { // Exclude automatic weekends
                    let event = events[date];
                    let badgeClass = getBadgeClass(event.type);
                    let dayNumber = date.split("-")[2]; // Extract only the day number

                    descriptionHTML += `
                        <p class="badge-text">
                            <span class="badge ${badgeClass}">${dayNumber}</span> ${event.description || ""}
                        </p>
                    `;
                }
            });

            // 🔹 Add a separator line before default event badges
            descriptionHTML += `<hr>
                                <p class="badge-text">
                                    <span class="badge holiday-badge" style="width:15px;height:15px;"> </span> <span data-translate="Holiday">Holiday</span>
                                </p>
                                <p class="badge-text">
                                    <span class="badge offboard-badge" style="width:15px;height:15px;"> </span> <span data-translate="Weekend">Weekend</span> 
                                </p>
                                <p class="badge-text">
                                    <span class="badge onboard-badge" style="width:15px;height:15px;"> </span> <span data-translate="Internship onboard">Internship onboard</span>
                                </p>
                                <p class="badge-text">
                                    <span class="badge holiday-badge" style="width:15px;height:15px;"> </span><span data-translate="Intenship Offboard">Internship offboard</span>
                                </p>`;

            dateDescriptionContainer.innerHTML = descriptionHTML;
        }


            // 📌 Month Navigation Fix
            prevMonthBtn.addEventListener("click", () => {
                currentMonth = (currentMonth === 0) ? 11 : currentMonth - 1;
                currentYear = (currentMonth === 11) ? currentYear - 1 : currentYear;
                generateCalendar(currentMonth, currentYear);
            });

            nextMonthBtn.addEventListener("click", () => {
                currentMonth = (currentMonth === 11) ? 0 : currentMonth + 1;
                currentYear = (currentMonth === 0) ? currentYear + 1 : currentYear;
                generateCalendar(currentMonth, currentYear);
            });

            generateCalendar(currentMonth, currentYear);

            // Hide description box when clicking outside of it
        document.addEventListener("click", function (event) {
            if (!descriptionBox.contains(event.target) && !event.target.classList.contains("day-box")) {
                hideDescriptionBox();
            }
        });

        });


    </script>
@endsection
   
















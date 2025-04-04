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

                /* calendar dropdown  */
                
            .calendar {
            padding: 10px;
            border-radius: 4px;
            }

            .calendar_btn{
            border:1px solid black;
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
                /* calendar dropdown */


    </style>
@endsection
  
@section('content')
    @include('layouts.hr.navbar')

    <div class="row main-container" >

        @include('layouts.hr.sidebar')
        @include('layouts.hr.profile_data')
        <div class="col-md-9 dashboard-content" id="dashboardContent">
            <div class="row">
                <div class="col-md-8" style=" height:200px;">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="mt-2">Application</h2>
                        </div>
                        <div class="col-md-4">
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
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card" style="background-color:#D1D1F0; border:0;">
                                <div class="card-body" style="position:relative; height:110px;" >
                                    <div class="row">
                                        <div class="col-md-8" style="position:relative;">
                                            <p style="position:absolute; bottom:-20px;left:0;">Total Candidates</p>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="image" style="width:40px;height:40px; background-color:white;display:flex;justify-content: center; align-items:center; border-radius:50%;">
                                                <img src="../assets/icon/user-add.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-start" style="position:relative;">
                                        <p class="m-0" style="position:absolute;top:0;left:-10px; font-size:30px;font-weight:bold;">153</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="background-color:#D1D1F0; border:0;">
                                <div class="card-body" style="position:relative; height:110px;" >
                                    <div class="row">
                                        <div class="col-md-8" style="position:relative;">
                                            <p style="position:absolute; bottom:-20px;left:0;">Succeed</p>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="image" style="width:40px;height:40px; background-color:white;display:flex;justify-content: center; align-items:center; border-radius:50%;">
                                                <img src="../assets/icon/user-tick.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-start" style="position:relative;">
                                        <p class="m-0" style="position:absolute;top:0;left:-10px; font-size:30px;font-weight:bold;">24</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="background-color:#D1D1F0; border:0;">
                                <div class="card-body" style="position:relative; height:110px;" >
                                    <div class="row">
                                        <div class="col-md-8" style="position:relative;">
                                            <p style="position:absolute; bottom:-20px;left:0;">Failed</p>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="image" style="width:40px;height:40px; background-color:white;display:flex;justify-content: center; align-items:center; border-radius:50%;">
                                                <img src="../assets/icon/user-cross.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-start" style="position:relative;">
                                        <p class="m-0" style="position:absolute;top:0;left:-10px; font-size:30px;font-weight:bold;">76</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style=" height:200px; position:relative; display:flex;justify-content: center; align-items:center;">
                    <div class="card" style="width:100%;">
                        <div class="card-body">
                            <h3>Program Category</h3>
                            <img src="../assets/icon/export.png" style="position:absolute; top:20px;right:20px;" alt="">
                            
                            <!-- Category buttons container -->
                            <div id="category-container">
                                <button class="btn mb-2" style="background-color:#474BC2; color:#ffffff;">Human Resources</button>
                                <button class="btn mb-2" style="background-color:#474BC2; color:#ffffff;">IT</button>
                                <button class="btn mb-2" style="background-color:#474BC2; color:#ffffff;">Marketing</button>
                                <button class="btn mb-2" style="background-color:#474BC2; color:#ffffff;">Translation</button>
                            </div>
                        
                        <!-- Sidebar Container -->
                        <div id="createProgramSidebar" class="sidebar-form">
                            <!-- Header with Close Button -->
                            <div class="sidebar-header">
                                <h3>Create Program Category</h3>
                                <span class="close-btn" onclick="toggleSidebar()">✖</span>
                            </div>
    
                            <!-- Form Content -->
                            <div class="sidebar-content">
                                <label for="category-name" class="form-label text-muted">Category name</label>
                                <input type="text" id="category-name" class="form-control" placeholder="Enter category name">
                            </div>
    
                            <!-- Create Button -->
                            <button class="btn btn-create" onclick="addCategory()">Create</button>
                        </div>
    
                        <!-- Plus Button to Open Sidebar -->
                        <button class="btn mb-2" style="border:1px solid #000;" onclick="toggleSidebar()">
                            <img src="../assets/icon/plus.png" alt="">
                        </button>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="mt-2">Onboard</h2>
            <div class="row mb-0">
                <div class="col-md-7 mb-0" >
                    <div class="container  row mt-0" style=" margin-left:5px;width:100%; height:100%;">
                        <div class="col-md-9">
                            <h2 class="fw-bold mt-3">
                                <span>Attendance Rate</span>
                            </h2>                        
                            <div class="chart-container mt-3">
                                <canvas id="attendanceChart"></canvas>
                            </div>
                        </div>
                        <div class="col-md-3 mt-3">
                            <div class="d-flex justify-content-start">
                                <div class="dropdown" style="border:1px solid black; border-radius:4px; display:flex; justify-content: center;align-items:center; padding-left:10px;">
                                    <img src="../assets/icon/calendar_onboard.png" style="width:20px;height:20px;" alt="">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                        Monthly
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Monthly</a></li>
                                        <li><a class="dropdown-item" href="#">Weekly</a></li>
                                        <li><a class="dropdown-item" href="#">Yearly</a></li>
                                    </ul>
                                </div>
                            </div>
    
                            <div class="legend">
                                <div><span class="legend-item on-time"></span> On-time</div>
                                <div><span class="legend-item late"></span> Late Attendance</div>
                                <div><span class="legend-item absent"></span> Absent</div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-5">
                    <div class="card-container" style=" margin-top:0;height:100%;">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h3 class="header-title">Leave Request</h3>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" style="border:1px solid black;"aria-expanded="false">
                                    <i class="bi bi-clock"></i> Recently
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Recently</a></li>
                                    <li><a class="dropdown-item" href="#">Oldest</a></li>
                                </ul>
                            </div>
                        </div>
                    
                        <div class="table-responsive table-container" style="padding:0;">
                            <table class="table" style="padding:0;">
                                <thead>
                                    <tr>
                                        <th>Intern</th>
                                        <th>Leave Type</th>
                                        <th>Approval</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="d-flex align-items-center">
                                            <img src="https://i.pravatar.cc/40?img=1" class="profile-img" alt="User">
                                            <div>
                                                <strong>James Cavendish</strong><br>
                                                <span>capofnavy@gmail.com</span>
                                            </div>
                                        </td>
                                        <td>Sick Leave</td>
                                        <td class="approval-icons">
                                            <img src="../assets/icon/tick-circle.png" alt="">
                                            <img src="../assets/icon/close-circle.png" alt="">
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="d-flex align-items-center">
                                            <img src="https://i.pravatar.cc/40?img=2" class="profile-img" alt="User">
                                            <div>
                                                <strong>Dylan Anderson</strong><br>
                                                <span>emptywar@gmail.com</span>
                                            </div>
                                        </td>
                                        <td>Sick Leave</td>
                                        <td class="approved approval-text"><i class="bi bi-check"></i> Approved</td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex align-items-center">
                                            <img src="https://i.pravatar.cc/40?img=3" class="profile-img" alt="User">
                                            <div>
                                                <strong>Marl Parker</strong><br>
                                                <span>mpkzzz@gmail.com</span>
                                            </div>
                                        </td>
                                        <td>Vacation</td>
                                        <td class="approved approval-text"><i class="bi bi-check"></i> Approved</td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex align-items-center">
                                            <img src="https://i.pravatar.cc/40?img=4" class="profile-img" alt="User">
                                            <div>
                                                <strong>Jasmine Waltonring</strong><br>
                                                <span>dream123@gmail.com</span>
                                            </div>
                                        </td>
                                        <td>Business</td>
                                        <td class="rejected approval-text"><i class="bi bi-x"></i> Rejected</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="mt-3 mb-3">Offboard</h3>
            <div class="row">
                <div class="col-md-8">
                    <div class="container" style="position:relative;">
                        <h2 style="padding-top:15px;">Recent Payroll</h2>
                        <img src="../assets/icon/export.png" style="position:absolute; top:20px;right:20px;" alt="">
                        <div class="card"  style="box-shadow:none;border:none;">
                            <div class="table-responsive table-container" style="border:none;box-shadow:none;">
                                <table class="table align-middle mb-0" style="box-shadow:none;">
                                    <thead>
                                        <tr>
                                            <th>Intern</th>
                                            <th>Days Worked</th>
                                            <th>Total Pay</th>
                                            <th>Payday Date</th>
                                            <th>Approval</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="d-flex align-items-center">
                                                <img src="https://i.pravatar.cc/40?img=1" class="profile-img" alt="User">
                                                <div>
                                                    <strong>James Cavendish</strong><br>
                                                    <span>capofnavy@gmail.com</span>
                                                </div>
                                            </td>
                                            <td>
                                                <i class="bi bi-building"></i> 33 Days WFO <br>
                                                <i class="bi bi-house-door"></i> 36 Days WFH
                                            </td>
                                            <td><strong>7,830 BATH</strong></td>
                                            <td>
                                                <select class="form-select">
                                                    <option selected>Setup</option>
                                                    <option>30th Dec 2024</option>
                                                    <option>15th Dec 2024</option>
                                                </select>
                                            </td>
                                            <td class="approval-icons">
                                                <img src="../assets/icon/tick-circle.png" alt="">
                                                <img src="../assets/icon/close-circle.png" alt="">
                                            </td>
                                            <td><span class="status-badge hold">•Hold</span></td>
                                        </tr>
                                        <tr>
                                            <td class="d-flex align-items-center">
                                                <img src="https://i.pravatar.cc/40?img=2" class="profile-img" alt="User">
                                                <div>
                                                    <strong>Dylan Anderson</strong><br>
                                                    <span>emptywar@gmail.com</span>
                                                </div>
                                            </td>
                                            <td>
                                                <i class="bi bi-building"></i> 27 Days WFO <br>
                                                <i class="bi bi-house-door"></i> 39 Days WFH
                                            </td>
                                            <td><strong>6,500 BATH</strong></td>
                                            <td>
                                                <select class="form-select">
                                                    <option>Setup</option>
                                                    <option selected>30th Dec 2024</option>
                                                    <option>15th Dec 2024</option>
                                                </select>
                                            </td>
                                            <td class="approved approval-text"><i class="bi bi-check"></i> Approved</td>
                                            <td><span class="status-badge hold">•Hold</span></td>
                                        </tr>
                                        <tr>
                                            <td class="d-flex align-items-center">
                                                <img src="https://i.pravatar.cc/40?img=3" class="profile-img" alt="User">
                                                <div>
                                                    <strong>Marl Parker</strong><br>
                                                    <span>mpkzzz@gmail.com</span>
                                                </div>
                                            </td>
                                            <td>
                                                <i class="bi bi-building"></i> 30 Days WFO <br>
                                                <i class="bi bi-house-door"></i> 43 Days WFH
                                            </td>
                                            <td><strong>7,250 BATH</strong></td>
                                            <td>
                                                <select class="form-select">
                                                    <option>Setup</option>
                                                    <option>30th Dec 2024</option>
                                                    <option selected>15th Dec 2024</option>
                                                </select>
                                            </td>
                                            <td class="approved approval-text"><i class="bi bi-check"></i> Approved</td>
                                            <td><span class="status-badge paid">•Paid</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                        <div class="card offboard_card  mt-0" style="padding:20px;">
                            <div style="display:flex;">
                            <p class="badge" style="background-color: brown;">• Offboard</p>
                            <i class="bi bi-three-dots-vertical menu-icon"></i> 
                            </div>
                            
                    
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center" style="display: flex; align-items: center; flex-wrap: nowrap;">
                                            <img src="https://i.pravatar.cc/50?img=5" alt="User" 
                                                style="width: 50px; height: 50px; flex-shrink: 0; border-radius: 50%;">
                                            <div style="margin-left: 10px; min-width: 0; word-wrap: break-word; overflow-wrap: break-word; flex-grow: 1;">
                                                <strong>Harry Potter</strong><br>
                                                <span class="text-muted">harrypt@gmail.com</span>
                                            </div>
                                        </div>
                                    </div>                                                               
                                    <div class="col-md-6">
                                        <div class="contact-info mt-4" style="margin-left:25px;" >
                                            <i class="bi bi-telephone"></i>
                                            <span>(+66) 8 9775 2292</span>
                                        </div>
                                    </div>
                                </div>
                    
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-6">
                                        <div style="margin-left:15px;">
                                            <p class="mb-0 text-muted">Position</p>
                                            <p class="fw-bold">Administrative Trainee</p>
                                        </div>
    
                                    </div>
                                    <div class="col-6">
                                        <div style="margin-left:25px;">
                                            <p class="mb-0 text-muted">Duration</p>
                                            <p class="fw-bold">1 Sep 2024 - 17 Dec 2024</p>
                                        </div>
    
                                    </div>
                                </div>
    
                            </div>
                        </div>
                        <div class="card offboard_card" style="padding:20px;">
                            <div style="display:flex;">
                            <p class="badge" style="background-color: brown;">• Offboard</p>
                            <i class="bi bi-three-dots-vertical menu-icon"></i> 
                            </div>
                            
                    
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-center" style="display: flex; align-items: center; flex-wrap: nowrap;">
                                            <img src="https://i.pravatar.cc/50?img=5" alt="User" 
                                                style="width: 50px; height: 50px; flex-shrink: 0; border-radius: 50%;">
                                            <div style="margin-left: 10px; min-width: 0; word-wrap: break-word; overflow-wrap: break-word; flex-grow: 1;">
                                                <strong>Harry Potter</strong><br>
                                                <span class="text-muted">harrypt@gmail.com</span>
                                            </div>
                                        </div>
                                    </div>                                                               
                                    <div class="col-md-6">
                                        <div class="contact-info mt-4" style="margin-left:25px;" >
                                            <i class="bi bi-telephone"></i>
                                            <span>(+66) 8 9775 2292</span>
                                        </div>
                                    </div>
                                </div>
                    
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-6">
                                        <div style="margin-left:15px;">
                                            <p class="mb-0 text-muted">Position</p>
                                            <p class="fw-bold">Administrative Trainee</p>
                                        </div>
    
                                    </div>
                                    <div class="col-6">
                                        <div style="margin-left:25px;">
                                            <p class="mb-0 text-muted">Duration</p>
                                            <p class="fw-bold">1 Sep 2024 - 17 Dec 2024</p>
                                        </div>
    
                                    </div>
                                </div>
    
                            </div>
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

        function toggleSidebar() {
                document.getElementById("createProgramSidebar").classList.toggle("show");
            }

            function addCategory() {
                var categoryName = document.getElementById("category-name").value.trim();
                if (categoryName === "") {
                    alert("Please enter a category name.");
                    return;
                }

                // Create new button
                var newButton = document.createElement("button");
                newButton.className = "btn mb-2";
                newButton.style.backgroundColor = "#474BC2";
                newButton.style.color = "#ffffff";
                newButton.innerText = categoryName;

                // Append new button inside the category container
                document.getElementById("category-container").appendChild(newButton);

                // Clear input field
                document.getElementById("category-name").value = "";

                // Hide sidebar
                toggleSidebar();
            }
                function updateLanguage(lang) {
                    document.getElementById('dropdownLabel').innerText = lang;
                }

                const ctx = document.getElementById('attendanceChart').getContext('2d');

        const attendanceData = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [
                // 🏆 Transparent Spacer for Vertical Gap
                {
                    label: 'Spacer 1',
                    data: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1], 
                    backgroundColor: 'rgba(0,0,0,0)',
                    stack: 'Stack 0'
                },
                // 🟦 Absent (Rounded All Corners)
                {
                    label: 'Absent',
                    data: [5, 5, 6, 5, 5, 5, 5, 6, 5, 6, 5, 5],
                    backgroundColor: '#B1BBE7',
                    borderSkipped: false, // ✅ Forces all sides to round
                    stack: 'Stack 0'
                },
                // 🏆 Transparent Spacer for Vertical Gap
                {
                    label: 'Spacer 2',
                    data: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1], 
                    backgroundColor: 'rgba(0,0,0,0)',
                    stack: 'Stack 0'
                },
                // 🟣 Late Attendance (Rounded All Corners)
                {
                    label: 'Late Attendance',
                    data: [10, 12, 8, 11, 9, 7, 10, 12, 11, 8, 9, 10],
                    backgroundColor: '#D5CFFB',
                    borderSkipped: false, // ✅ Ensures full border-radius
                    stack: 'Stack 0'
                },
                // 🏆 Transparent Spacer for Vertical Gap
                {
                    label: 'Spacer 3',
                    data: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1], 
                    backgroundColor: 'rgba(0,0,0,0)',
                    stack: 'Stack 0'
                },
                // 🔵 On-time (Rounded All Corners)
                {
                    label: 'On-time',
                    data: [40, 38, 42, 39, 41, 43, 40, 38, 39, 42, 41, 40],
                    backgroundColor: '#D1D1F0',
                    borderSkipped: false, // ✅ Ensures full border-radius
                    stack: 'Stack 0'
                }
            ]
        };

        const attendanceChart = new Chart(ctx, {
            type: 'bar',
            data: attendanceData,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    x: {
                        stacked: true,
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: "#333",
                            font: {
                                size: 14
                            }
                        },
                        border: {
                            display: false
                        },
                        categoryPercentage: 0.6, // ✅ Adjust spacing between months
                        barPercentage: 0.7 // ✅ Adjust spacing between stacked bars
                    },
                    y: {
                        stacked: true,
                        grid: {
                            display: false
                        },
                        ticks: {
                            display: false
                        },
                        border: {
                            display: false
                        }
                    }
                }
            }
        });




    </script>
@endsection











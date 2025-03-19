
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InternPlus</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        body{
            background-color:#ffffff;
        }


        .application_info_container {
                    width:auto;
                    background-color:#d1d1f0;
                    margin: auto;
                    margin-top:100px;
                    padding: 30px 20px;
                    display: flex;
                    flex-direction: column;
                    align-items: center;

                    position:relative;
                }

        .info-row {
            width: 100%;
            display: flex;
            justify-content: space-around;
            margin-bottom: 10px;
        }

        .info-card {
            width: 100%;
            padding: 20px;

        }

        .outer-circle {
            background-color: #FFFFFF;
            border-radius: 50%;
            width: 150px; 
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px;

            position:absolute;
            top:0;
            left:0;
            transform: translate(10%, -50%);
            
        }

            .inner-circle {
                background-color: #474bc2;
                border-radius: 50%;
                width: 100%;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #000000; 
                font-size: 38px;
                font-family: Arial, sans-serif; 

                
            }

            .inner-circle span {
                padding: 20px;
            }

        .buttons {
            width:100%;
            background: #f8f9fa;
            box-shadow: 0 2px 10px rgba(0,0,0,0.5);
            border-radius:10px;
            padding:20px;

            display: flex;
            justify-content: center;
            align-items:center;
            text-align:center;
            gap: 30px;
            margin-top: 20px;

        }

        .button {
            background: #ffffff;
            color: #000000;
            border: 1px solid #000000;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;

            
        }

        .badge-container {
            display: flex;
            align-items: center;
            position:relative;
        }

.badge {
    background-color: #007bff;
    color: white;
    padding: 5px 10px;
    border-radius: 5px;
    position: relative;
    z-index: 2; 
}

    /* .line {
        height: 2px;
        width:20px;
        background-color: red;
        color:red;
        flex-grow: 1;
        position:relative;
    }

    .line.before {
        margin-right: 5px;
    }

    .line.after {
        margin-left: 5px;
    } */

        .status-button-color{
            background:#474bc2;
        }

        .button:hover {
            background: #474bc2;
        }

        .status-card {
            width:100%;
            padding: 30px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);

            display:flex;
            flex-direction:column;
            align-items:flex-start;          
        }
        .status-description{
            align-self:center;
            width:400px;
            text-align:center;

         
        }

        .status-description img{
            width:300px;
            height:200px;
        }

        .task-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .task-item {
            display: flex;
            align-items: center;
            background: #FFFFFF;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .task-list a {
                display: block; 
                color: inherit; 
                text-decoration: none;
            }

        .task-item img {
            width: 100px;

        }

        .task-label {
            flex-grow: 1;
            margin:10px;
        }

        .task-status {
            margin-left: auto;
            padding: 5px 10px;
            border-radius: 10px;
            font-size: 0.8em;
        }

        .task-status.done {
            background-color: #d1d1f0;
            color: #000000;
        }

        .task-status.in-progress {
            background-color: #d1d1f0;
            color: #000000;
        }

        .task-due {
            margin-left: 10px;
            color: #333;
            font-size: 0.8em;
        }

        .submit-btn {
            background-color: #474bc2; 
            color: white; 
            border: none; 
            padding: 10px 20px; 
            border-radius: 5px; 
            cursor: pointer; 
            font-size: 16px; 
            transition: background-color 0.3s ease;
            width: 100%; 
            margin-top: 20px; 
        }

        .submit-btn:hover {
            background-color: #3658a7; 
        }


    </style>
</head>
<body>
   <!-- Navigation Bar -->
   <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container">
        <a class="navbar-brand fw-bold" href="./index.html" style="font-size:40px;">INTERNPLUS</a>
        <div class="dropdown" style="display: inline-block;">
            <button class="btn btn-white" style="border:none; background-color:white;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <span id="dropdownLabel">EN</span> <i class="bi bi-chevron-down"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#" onclick="updateLanguage('EN')">EN</a></li>
                <li><a class="dropdown-item" href="#" onclick="updateLanguage('THAI')">THAI</a></li>
                <li><a class="dropdown-item" href="#" onclick="updateLanguage('MYAN')">MYAN</a></li>
            </ul>
        </div>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="./index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="./program.html">Program</a></li>
                <li class="nav-item"><a class="nav-link applynow" href="./internship.html">Application</a></li>
                <li class="nav-item"><a class="nav-link register" href="./register.html">Register</a></li>
                <li class="nav-item"><a class="btn btn-dark " href="./login.html" style="background-color:#b1bbe7; color:black; border-radius:4px;">Log In</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="application_info_container">
    <!-- Application Information Card -->
    <div class="info-card">
        <div class="info-row">
            <div class="outer-circle">
                <div class="inner-circle">
                    <strong><span>Intern</span></strong>
                </div>
            </div>
            <div>
                <p><strong style="margin-right:20px;">FIRST NAME</strong> Nicharee</p>
                <p><strong stylel="margin-right:30px;">EMAIL ADDRESS</strong> nicharee.sea@ku.th</p>
            </div>
            <div>
                <p><strong style="margin-right:20px;">LAST NAME </strong> Seattanannon</p>
                <p><strong style="margin-right:20px;">PHONE NUMBER</strong> 0824941461</p>
            </div>
        </div>
        <div class="info-row">
            <div style="text-align:center;">
                <p><strong style="font-size:26px;">112987630</strong><br/>application ID</p>
            </div>
            <div style="text-align:center;">
                <p><strong style="font-size:26px;">UX/UI Designer Trainee</strong><br/> position</p>
            </div>
            <div style="text-align:center;">
                <p><strong style="font-size:26px;">HYBRID</strong><br/>internship type</p>
            </div>
        </div>

        <!-- Status Buttons -->
    <div class="buttons info-row">
        <div>
            <a href="./pending_status.html"><button class="button status-button-color" style="color:white;">1</button></a>
            <p>Pending</p>
        </div>

        <!-- <div class="badge-container">
            <div class="line before"></div>
            <div class="badge">3 days</div>
            <div class="line after"></div>
        </div> -->
        
        <div>
            <a href="./request_internship_application.html"><button class="button status-button-color" style="color:white;">2</button></a>
            <p>Request Internship Application</p>
        </div>
        
        <div>
           <a href="./request_internship_document.html"><button class="button status-button-color" style="color:white;">3</button></a>
            <p>Request Internship Document</p>
        </div>
        
        <div>
            <a href="./acceptance_terms_form.html"><button class="button status-button-color" style="color:white;">4</button></a>
            <p>Acceptance Terms</p>
        </div>
        
        <div>
            <button class="button success">5</button>
            <p>Success</p>
        </div>
        
    </div>
    </div>

    
</div>

        <!-- Status Card -->
        <div class="status-card">
            <h4>REQUEST INTERNSHIP APPLICATION</h4>
            <div class="task-list">
                <a href="./acceptance_terms_form_fill.html">
                    <div class="task-item">
                        <img src="../assets/img/skill_test.png" alt="Skill Test">
                        <span class="task-label" style="font-size:28px; text-transform: uppercase;">ACCEPTANCE TERMS FORM</span>
                        <span class="task-status in-progress">In-progress</span>
                        <span class="task-due">Due 2 days</span>
                    </div>
                </a>
            </div>
            <div>
                <a href="./acceptance_terms_form_success.html"><button class="submit-btn" type="button" onclick="submitForm()">Submit</button></a>
            </div>
            
        </div>
 

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>

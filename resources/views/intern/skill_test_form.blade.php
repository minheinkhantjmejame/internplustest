
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InternPlus Skill Test</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- custom css  -->

    <link rel="stylesheet" href="../css/styles.css" />

    <style type="text/css" rel="stylesheet">
        body {
            background-color: #ffffff;
        }
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .badge {
            display: inline-block;
            padding: 10px 12px;
            font-size: 0.75em;
            font-weight:3;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.375rem;
            background-color: #d1d1f0;
            color: black;
        }
        .btn{
            background-color: #d1d1f0;
            color:black;
            border-radius:0px;
            border:none;
        }

        .select_button{
            background-color:white;
            color:black;
            border:1px solid black;
            border-radius:4px;
        }
        .topic {
            margin: 10px 0;
        }
        .duedate{
            font-size:12px;
        }
        .disabled-input {
            opacity: 0.5;
            pointer-events: none;
        }
        .active-button {
            cursor: pointer;
        }
        .btn:hover{
            background-color:#d1d1f0;
            color:black;
            border-color:black;
        }

        .btn-topic {
            margin: 0.5rem;
        }

        .btn-active {
            background-color: #d1d1f0;
            color: black;
        }

        .input-group-text{
            background-color:#474bc2;
            color:white;
        }

        .disabled-input, .input-group-text.disabled-input, .form-control.disabled-input {
            background-color: #e9ecef;
            color: #6c757d;
            cursor: not-allowed;
        }

        .disabled-input {
            background-color: #e9ecef;
            color: #6c757d;
            cursor: not-allowed;
            pointer-events: none;
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

    <div class="container mt-5">
        <p class="badge" style="font-size:16px; font-weight:bold;">In-progress</p>
        <div class="header-content mb-0">
            <h1>SKILL TEST</h1>
            <a href="#" style=" border-radius:4px;" class="btn " onclick="history.back()"><i class="bi bi-arrow-left-short"></i>Back</a>
        </div>
        <p class="duedate mt-0">Due today</p>        
        <h2>Greeting from Vanness Plus Consulting Co., Ltd.</h2>
        <p>Please do the skill test by choosing at least one of the following topics:</p>
        <ol>
            <li>Design the dashboard of applicants tracking in the sense of applying, rejected, accepted, interviewed.</li>
            <li>Designing the dashboard of web or mobile application to show the status of applicants who applied the Internship Program with company.</li>
            <li>Designing the dashboard of web or mobile application to submit the assignments in each subject to professor.</li>
        </ol>
        <p>In case of any further queries, please kindly feel free to contact us anytime.</p>
        <hr>
        <h3>Select Topics</h3>
        <p class="m-0" style="font-size:12px;">* You can choose more than one</p>
        <div>
            <button class="btn select_button btn-secondary btn-topic" style="border:1px solid black; border-radius:4px;">1</button>
            <button class="btn select_button btn-secondary btn-topic" style="border:1px solid black; border-radius:4px; ">2</button>
            <button class="btn select_button btn-secondary btn-topic" style="border:1px solid black; border-radius:4px;">3</button>
        </div>
        <h3>Select Answer Type</h3>
        <div class="mb-3">
            <button class="btn select_button btn-info answer-type btn-topic me-4" onclick="toggleInput('file')">PDF File</button>
            <button class="btn select_button btn-info answer-type btn-topic me-4" onclick="toggleInput('file')">ZIP File</button>
            <button class="btn select_button btn-info answer-type btn-topic me-4" onclick="toggleInput('link')">Link</button>
        </div>
        <h3>Your Answer</h3>
        <div class="input-group mb-1">
            <label class="input-group-text" for="fileInput">
                <i class="bi bi-file-earmark"></i>
            </label>
            <input type="text" class="form-control"   style="border:2px solid black;border-left:none; border-radius:0 4px 4px 0;" placeholder="Select the file to upload" readonly>
            <input type="file" id="fileInput" class="form-control d-none" aria-label="Upload file">
        </div>
        <p class="mt-0 text-muted" style="font-size:12px;">*Supports size up to 10 MB</p>
        
        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="bi bi-link-45deg"></i>
            </span>
            <input type="text" id="linkInput" class="form-control"   style="border:2px solid black;border-left:none; border-radius:0 4px 4px 0;" placeholder="Enter the link here..." aria-label="Enter link" >
        </div>
        
        <button class="btn mb-3" style="background-color:#474bc2;color:white; border-radius:4px;">Send</button>


    </div>


        
        
        
    
    <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../js/app.js"></script>
<script>

    document.addEventListener('DOMContentLoaded', function() {
            const inputGroup = document.querySelector('.input-group');
            inputGroup.addEventListener('click', function() {
            document.getElementById('fileInput').click();  
            });
        });

        
    document.querySelectorAll('.btn-topic').forEach(button => {
        button.addEventListener('click', function() {
        this.classList.toggle('btn-active');
        });
    });
    
        
    function toggleInput(type) {
        const fileInput = document.getElementById('fileInput');
        const fileTextInput = document.querySelector('.input-group input[type="text"]'); 
        const linkInput = document.getElementById('linkInput');

    if (type === 'file') {
        fileInput.disabled = false;
        fileTextInput.classList.remove('disabled-input');
        fileInput.classList.remove('disabled-input');

        linkInput.disabled = true;
        linkInput.classList.add('disabled-input');
        linkInput.value = '';
    } else {
        linkInput.disabled = false;
        linkInput.classList.remove('disabled-input');

        fileInput.disabled = true;
        fileTextInput.classList.add('disabled-input');
        fileInput.classList.add('disabled-input');
        fileInput.value = '';
    }
}

    

    document.querySelector('#fileInput').addEventListener('change', function() {
        const textInput = document.querySelector('.input-group input[type="text"]');
        if (this.files.length > 0) {
        textInput.value = this.files[0].name; 
        } else {
                textInput.value = "Select the file to upload"; 
            }
        });
    

        document.querySelector('.input-group-text').onclick = function() {
            document.getElementById('fileInput').click();
        };
    </script>
    
</body>
</html>

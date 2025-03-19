
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>presentation powerpoint form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css" />

    <style>
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
        .topic {
            margin: 10px 0;
        }
        .duedate{
            font-size:12px;
        }
        .input-group-text{
            background-color:#474bc2;
        }

        .indent-text {
            text-indent: 2rem; 
            text-align: justify;
            display: block; 
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
        <p class="badge" style="font-weight:bold;">In-progress</p>
        <div class="header-content mb-0">
            <h1>DOCUMENT FROM UNIVERSITY</h1><i class="bi bi-check2-square text-success"></i>
            <a href="#" class="btn "  style=" border-radius:4px;" onclick="history.back()"><i class="bi bi-arrow-left-short"></i>Back</a>
        </div>
        <p class="duedate ">Due 2 weeks</p>        
        <p class="mb-3">Dear Ms.Nicharee Sethananon,</p>
        <p class="indent-text">From what you have applied to join the internship program for the position UX/UI Designer Trainee, with a training period between 25 November 2024 and 14 March 2025, the company is pleased to accept you to join the internship with the company. Therefore, we request that documents requesting internship assistance from the university be submitted within 2 weeks after the results are reported.</p>
        <p>If you are stuck in any way, Please notify me back. Otherwise, it will be considered a waiver.</p>
        <hr>
        <h3>YOUR DOCUMENT</h3>
        <div class="input-group mb-1">
            <label class="input-group-text" for="fileInput">
                <i class="bi bi-file-earmark" style="color:white;"></i>
            </label>
            <input type="text" class="form-control" style="border:2px solid black;border-left:none; border-radius:0 4px 4px 0;" placeholder="Select the file to upload" aria-label="File's placeholder" readonly>
            <input type="file" id="fileInput" class="form-control d-none" accept=".pdf" aria-label="Upload file">
        </div>
        <p class="mt-0" style="font-size:12px">* Supports size up to 10MB</p>
        
              
        <button class="btn mb-3" style="border-radius:4px;background-color:#474bc2;color:white;">Send</button>


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


    document.getElementById('fileInput').addEventListener('change', function() {
        const textInput = document.querySelector('.input-group input[type="text"]');
        if (this.files.length > 0) {
            textInput.value = this.files[0].name;
        } else {
            textInput.value = "Select the file to upload"; 
        }
    });
});

    

    document.querySelector('.input-group-text').onclick = function() {
        document.getElementById('fileInput').click();
    };
</script>
    
</body>
</html>



        <!--/Header Main-->

        <!--Breadcrumb-->
     
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>
Student Table</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


          <!---Font icons-->
        <link href="file:///C|/Users/marcn/OneDrive/assets/css/icons.css" rel="stylesheet"/>
        <link href="file:///C|/Users/marcn/OneDrive/assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet" />

<style>    
body {
    color: #000;
    background-image: url("file:///C|/Users/marcn/OneDrive/Desktop/background.jpg");
    font-family: "Roboto", sans-serif;
}
.contact-form {
    padding: 50px;
    margin: 30px auto;
}   
.contact-form h1 {
    font-size: 42px;
    font-family: 'Pacifico', sans-serif;
    margin: 0 0 50px;
    text-align: center;
}
.contact-form .form-group {
    margin-bottom: 20px;
}
.contact-form .form-control, .contact-form .btn {
    min-height: 40px;
    border-radius: 2px;
}
.contact-form .form-control {
    border-color: #e2c705;
}
.contact-form .form-control:focus {
    border-color: #d8b012;
    box-shadow: 0 0 8px #dcae10;
}
.contact-form .btn-primary, .contact-form .btn-primary:active {
    min-width: 250px;
    color: #fcda2e;
    background: #000 !important;
    margin-top: 20px;
    border: none;
}
.contact-form .btn-primary:hover {
    color: #fff; 
}
.contact-form .btn-primary i {
    margin-right: 5px;
}
.contact-form label {
    opacity: 0.9;
}
.contact-form textarea {
    resize: vertical;
}
.bs-example {
    margin: 20px;
}
</style>
</head>
<body>
<div class="container-lg">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="contact-form">
                <h1>Student Marks Beta</h1>
				
				<!-- THIS WILL BE RELEASED IN THE FINAL VERSION -->

                 <!--<form action="search" class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
				
				<h5>BETA TEST VERSION</h5>
    </form>
                 
                <form action="file:///C|/Users/marcn/OneDrive/Desktop/student" method="post" style="background: ">
                @csrf
                    <div class="row">
                        
                       
                    </div>            
                    <div class="form-group">
                        <label for="inputSubject"> Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter your Name">
                      
                    </div>
                      <div class="form-group">
                        <label for="inputSubject">Surname</label>
                        <input type="text" name="surname" class="form-control" placeholder="Enter your surname">
                      
						  <!-- THIS WILL BE RELEASED IN THE FINAL VERSION -->
						  
                    <!--</div>
                      <div class="form-group">
                        <label for="inputSubject">Gender</label>
                        <select name="gender">
                            <option>Select</option>
                            <option>Male</option>
                            <option>Female</option> 

                        </select>
                    </div>-->

                        <div class="form-group">
                        <label for="inputSubject">Midterm Marks</label>
                        <input type="number" name="mmarks" class="form-control" placeholder="Enter your Midterm Marks">
                      
                    </div>

                    <div class="form-group">
                        <label for="inputSubject">Finalterm Marks</label>
                        <input type="number" name="fmarks" class="form-control" placeholder="Enter your Finalterm Marks">
                      
                    </div>
                      <div class="form-group">
                        <label for="inputSubject">Project Marks</label>
                        <input type="number" name="pmarks" class="form-control" placeholder="Enter your Project Marks">
                      
                    </div>
                    
                    <div class="text-center">
                        <input type='submit' class="btn btn-success mt-2" value='Submit Record' id='click'>
                    </div> 
                  
                     <div class="text-center">
                     

                      
                    </div> 
           
                </form>


            </div>
        </div>
    </div>
</div>


     <script src="file:///C|/Users/marcn/OneDrive/assets/plugins/sweet-alert/sweetalert.min.js"></script>
        <script src="file:///C|/Users/marcn/OneDrive/assets/js/sweet-alert.js"></script>
</body>
</html>

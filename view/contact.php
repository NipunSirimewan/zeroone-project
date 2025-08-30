<!doctype html>
<html lang="en">
  <head>
    <title>zeroone</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
     <!--nav bar-->
     <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color:#F5F5F5;">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php"><h2><span style="color:blue;">Zero</span><span style="color:grey">One</span></h2></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="nav justify-content-center" >
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    <a class="nav-link" href="grade10.php">Grade 10</a>
                    <a class="nav-link" href="grade11.php">Grade 11</a>
                    <a class="nav-link" href="teachers.php">Teachers</a>
                    <a class="nav-link" href="contact.php">Contact Us</a>
                    
                </div>
            </div>
        </div>
    </nav>

    <!--main image-->
    <div class="" style="margin-left:75px;margin-top:25px;">
        <img src="../images/home/class01.jpg">
    </div>
    <br>
    <br>
    <!--contact-->
    <h2 style="text-align:center;color:blue;">Contact Us</h2>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-secondary mt-5">
                    <div class="card-body">  
                        <form action="contact.php" method="post">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control border-secondary" name="name" required >
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control border-secondary" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea class="form-control border-secondary" name="message" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-outline-secondary" style="color:black;">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <h2 style="text-align:center;color:blue;">Address Info</h2>
    <br>
    <h5 style="text-align:center;">Address: 10/A Pilimathalawa,Kandy</h5>
    <h5 style="text-align:center;">Telephone: 081-2435670 / 071-2458760</h5>
    <h5 style="text-align:center;">Website:<a href="home.php"> www.zeroone.com</a> </h5>  
            <br>
            <br>
            <!--footer-->
            <div style="background-color:#F5F5F5;color:blue; padding: 25px; margin-top: 20px;">
                <div class="container-fluid">
                    <p style="float:right;">All copyrights reserved by ZeroOne - 2023</p>
                    <p>Terms and Condition | Privacy Policy | Sitemap</p>      
                </div>
            </div> 

  </body>  
</html>
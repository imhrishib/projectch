<?php 
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  
   header("Location:home.php");
   }
else {
    ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HobbyHub</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <linkrel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link rel="stylesheet" href="static/bootstrap.min.css">    
<link rel="stylesheet" href="static/homestyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        <a class="navbar-brand" href="#" id="logo">hobbyHub</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
          </ul>
          <span class="navbar-text">
            <button type="button" class="btn btn-warning" style="color: black;" id="join">Join</button>
            <button type="button" class="btn btn-light" id="sign">Sign In</button>
          </span>
        </div>
      </nav>

    <div id="searcharea">
        <div id="searchbar">
            <form>
                <div class="form-row align-items-center">
                  <div class="col-auto">
                      <select id="cars" name="cars" class="form-control mb-2">
                        <option value="volvo">Location</option>
                        <option value="saab">A</option>
                        <option value="fiat">Fiat</option>
                        <option value="audi">Audi</option>
                      </select>
                  </div>
                  <div class="col-auto">
                    <select id="category" name="category" class="form-control mb-2">
                        <option value="volvo">Category</option>
                        <option value="saab">A</option>
                        <option value="fiat">Fiat</option>
                        <option value="audi">Audi</option>
                      </select>
                    </div>
                  <div class="col-auto">
                    <select id="subcategory" name="subcategory" class="form-control mb-2">
                        <option value="volvo">Subcategory</option>
                        <option value="saab">A</option>
                        <option value="fiat">Fiat</option>
                        <option value="audi">Audi</option>
                      </select>
                  </div>
                  <div class="col-auto">
                    <button type="submit" class="btn btn-warning mb-2"><i  class="fa fa-search" aria-hidden="true"></i></button>
                  </div>
                </div>
              </form>

        </div>

    </div>
<div class="container1" id="popular_services_name">Popular Services</div>
    <div id="popular_services" class="container1">
  
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    
       
</div>
<button type="button" class="btn btn-warning"  style="color: black;" id="browse_More" >Browse More</button>
<div class="container1" id="popular_freelancers_name">Popular Freelancers</div>
    <div id="popular_freelancers" class="container1">
  
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    
    
  </div>
  <button type="button" class="btn btn-warning"  style="color: black;" id="browse_More" >Browse More</button>
  <div class="container1" id="popular_freelancers_name">Services</div>
  <div id="popular_freelancers" class="container1">

    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  
  
</div>
<!--Modal-->
<div id="myModal" class="modal">

    
  <div class="modal-content first_Modal ">
      <div class="modal-inside">
         <div style="margin-bottom:2vw"> <span class="close">X</span></div>

      <button type="button" class="btn btn-warning hire "  style="color: black;" id="browse_more">Hire   Freelancers </button><br>
      <button type="button" class="btn btn-warning work"  style="color: black;" id="browse_more">Work as Freelancer </button>
      
      
      
      </div>
      
    
  </div>
    <!-- register modal -->
  <div class="modal-content  registered">
    <div class="modal-inside">
      <form method="POST" action="">
        <h1>Work as a freelancer</h1>
        <div class="form-group row">
          <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
          </div>
        </div>
        <div class="form-group row">
          <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
          </div>
        </div>
        <div class="form-group row">
          <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
          </div>
        </div>
      </form>

    <button type="button" class="btn btn-outline-primary cancel" id="browse_more">Cancel </button>
    <button type="button" class="btn btn-primary register" id="browse_more">Register </button>
    
    
    
    </div>

</div>
<!-- customer modal -->
<div class="modal-content  customer">
  <div class="modal-inside">
    <form>
      <h1>Hire a freelancer</h1>
      <div class="form-group row">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Category</label>
        <div class="col-sm-10">
          <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
        </div>
      </div>
      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Sub category</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
        </div>
      </div>
      <div class="form-group row">
        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
        </div>
      </div>
    </form>

  <button type="button" class="btn btn-outline-primary cancel" id="browse_more">Cancel </button>
  <button type="button" class="btn btn-primary continue" id="browse_more">Register as Customer </button>
  
  
  
  </div>

</div></div>
<!-- upload modal -->

<div id="myModal1" class="modal">

   <div class="modal-content  sign_in">
      <div style="margin-bottom:2vw"> <span class="close" id="close_signin">X</span></div>
      <div class="modal-inside">

        <form method="POST" action="login.php">
           <h1>Sign in </h1>
           <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Email</label>
           <div class="col-sm-8">
              <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm" name="email">
           </div>
      
           <div class="form-group row">
              <label for="colFormLabel" class="col-sm-6 col-form-sm">Phone Number</label>
              <div class="col-sm-6">
               <input type="tel" class="form-control" id="colFormLabel" placeholder="Your Phone Number" name="phone">
              </div>
          </div>
          <div class="form-group row">
             <label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-sm">Password</label>
             <div class="col-sm-8">
                <input type="password" class="form-control col-form-label-sm" id="colFormLabelLg" placeholder="Your Password" name="pass">
             </div>
           </div>
        

        <button type="submit" class="btn btn-primary continue" id="browse_more">Log IN </button>
        </form>
  
      </div>
    </div>
  
  </div>




<script>

  // Get the modal
  var modal = document.getElementById("myModal");
  
  // Get the button that opens the modal
  var btn = document.getElementById("join");
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  // When the user clicks the button, open the modal 
  btn.onclick = function() {
    modal.style.display = "block";
  }
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }
  // registration
  $(".work").click(function(){
    $(".registered").css("display","block")
    $(".first_Modal").css("display","none")
})
// cancel redirect to first modal
$(".cancel").click(function(){
    $(".registered").css("display","none")
    $(".first_Modal").css("display","block")
    $(".customer").css("display","none")
 
})
// customer modal appears
$(".hire").click(function(){
    $(".customer").css("display","block")
    $(".first_Modal").css("display","none")
    $(".registered").css("display","none")
})

// sign in modal
$("#sign").click(function(){
 
    $(".sign_in").css("display","block");
    $("#myModal1").css("display","block");


  
    $(".sign_in").css("display","")
  
})
$("#close_signin").click(function(){
  $(".sign_in").css("display","none");
    $("#myModal1").css("display","none");

})

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
 
window.onclick = function(event) {
    if (event.target == myModal1) {
      myModal1.style.display = "none";
    }
  }
 
  </script>
</body>
</html>
<?php } ?>
<!doctype html>
<html lang="en">
    <head>
        <title>Facebook</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link rel="stylesheet" href="main.css">

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>
    <?php
    if (date ("m")==2){
        echo "<p>NOW IT IS SPRING</p>";
    }
    else{
        echo "<p>this is an error</p>";
    }
    ?>
    <form class="row g-3 needs-validation" novalidate>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">First name</label>
        <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Last name</label>
        <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Username</label>
        <div class="input-group">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
          <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
          <div class="invalid-feedback">
            Please choose a username.
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom03" class="form-label">City</label>
        <input type="text" class="form-control" id="validationCustom03" required>
        <div class="invalid-feedback">
          Please provide a valid city.
        </div>
      </div>
      <div class="col-md-3">
        <label for="validationCustom04" class="form-label">State</label>
        <select class="form-select" id="validationCustom04" required>
          <option selected disabled value="">Choose...</option>
          <option>...</option>
        </select>
        <div class="invalid-feedback">
          Please select a valid state.
        </div>
      </div>
      <div class="col-md-3">
        <label for="validationCustom05" class="form-label">Zip</label>
        <input type="text" class="form-control" id="validationCustom05" required>
        <div class="invalid-feedback">
          Please provide a valid zip.
        </div>
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
          <label class="form-check-label" for="invalidCheck">
            Agree to terms and conditions
          </label>
          <div class="invalid-feedback">
            You must agree before submitting.
          </div>
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
      </div>
    </form>
    <body class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <br>
                <br>
                <br>
                <br>
                <div class="first">
                    <P class="text-blue mb-0">FACEBOOK</P>
                    <p class="text-black">FACEBOOK helps you to connect and <br> shre love alwways</b> </p>
                </div>
            </div>
            <div class="col">
                <div class="second">
                    <div class="card">
                        <div class="card-body">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control mt-3" placeholder="please enter your email" maxlength="30">
                            <label for="" class="form-label">Username</label>
                            <input type="text" class="form-control mt-3" placeholder="please enter your username" maxlength="7">
                            <label for="" class="form-label">Phone Number</label>
                            <input type="number" class="form-control mt-3" placeholder="please enter your phone "  maxlength="11">
                        </div>
                        <select class="form-select">
                            <option selected>Choose Your Gender</option>
                            <option value="Male">Male</option>
                            <option value="Male">Female</option>
                            <option value="Male">Custom</option>

                        </select>
                       
                        <select name="years" class="form-select mt-3">
                        <option selected>Choose Year Of Birth</option>
                            <?php 
                            for ($x=1960; $x<=2024; $x=$x+1){
                                echo "<option value='".$x."'>".$x."</option>";
                            }
                            ?>
                          
                            
                            

                        </select>
                        <select name="month" class="form-select mt-3">
                            <option selected> Choose month of birth</option>
                            <?php 
                          for ($y=1; $y<=12; $y=$y+1){
                            echo "<option value='".$y."'> ".$y."</option>";
                          }
                            ?>
                            

                        </select>
                       
                            <?php 
                            $year= date('Y');
                            $month= array(
                                1=>'january',
                                2=>'febuary',
                                3=>'march',
                                4=>'april',
                                5=>'may',
                                6=>'june',
                                7=>'july',
                                8=>'august',
                                9=>'september',
                                10=>'october',
                                11=>'november',
                                12=>'december',
                            );
                           
                            ?>
                            <select name>
                            <option value=""></option>
                            </select>
                      

                            <?php
// Get the current year
$year = date('Y');

// Create an array of months
$months = array(
    1 => 'January',
    2 => 'February',
    // ... other months
);

// Create an array of days
$days = range(1, 31);

// Generate the HTML select element
echo '<select class="form-select" name="date">';
echo '<option value="">Select a date</option>';

// Loop through months
foreach ($months as $month => $monthName) {
    // Loop through days
    foreach ($days as $day) {
        $dateString = sprintf('%02d-%02d-%d', $year, $month, $day);
        echo '<option value="' . $dateString . '">' . $monthName . ' ' . $day . ', ' . $year . '</option>';
    }
}
echo '</select>';
?>
                     
                      <button class=" btn btn-primary">Register</button>
                      <p class="text-small">Dont have an account ?<span class="reg"><a href="index.html"></span>Register</a></p>
                       
                      <hr class="text-muted">
                      <div class="px-btn">
                        <button class="btn btn-success">Login Here</button>
                      </div>    
                      
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>





        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

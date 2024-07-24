<!doctype html>
<html lang="en">
    <head>
        <title>Form Design</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="form.css">
    </head>

    <body>
        
        <main>

            <div class="container">
                <div class="title">Student Registration</div>
                <form action="process.php" method="post" class="row g-3 needs-validation" novalidate>
                  <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Full name</label>
                    <input type="text" class="form-control" id="validationCustom01" value="" placeholder="Enter Full name" name="fullname" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom01"  class="form-label">Date Of Birth</label>
                    <input type="date" class="form-control" name="datebirth" id="validationCustom01" value="" required>
                    <div class="valid-feedback">
                      You are qualified
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="" class="form-label">Email</label>
                    <input
                        type="email"
                        class="form-control"
                        name="email"
                        id=""
                        aria-describedby="emailHelpId"
                        placeholder="abc@mail.com"
                    />
                    
                  </div>
                  
                  <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Next Of Kin</label>
                    <input type="text" class="form-control" name="nextkin" id="validationCustom02" value="" required>
                    <div class="valid-feedback"   >
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Phone Number</label>
                    <div class="input-group">
                      <span class="input-group-text" id="inputGroupPrepend">+234</span>
                      <input type="number" class="form-control" name="phone" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                      <div class="invalid-feedback" name="phone" >
                        Please input a valid Number!
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="validationCustom03" required>
                    <div class="invalid-feedback"  >
                      Please provide a valid Address.
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="validationCustom04"  class="form-label">Gender</label>
                    <select class="form-select" id="validationCustom04" name="gender" required>
                      <option selected disabled value="">Choose Gender...</option>
                      <option name="gender[]" value="male">Male</option>
                      <option name="gender[]" value="female">Female</option>
                      <option name="gender[]" value="custom">Custom</option>
                      
                    </select>
                    <div class="invalid-feedback">
                      Please select a valid state.
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">State</label>
                    <select class="form-select" name="state" id="validationCustom04" required>
                      <option selected disabled value="">Choose...</option>
                      <option name="State" value="ibadan">Oyo</option>
                      <option  name="State" value="Ondo">Ondo</option>
                      <option  name="State" value="Osun">Osun</option>
                      <option  name="State" value="Akwa-ibom">Akwa-Ibom</option>
                      <option  name="State" value="Edo">Edo</option>
                      <option  name="State" value="ibadan">Ibadan</option>
                      <option  name="State" value="Lagos">Lagos</option>
                      <option name="State" value="Kwara">Kwara</option>
                      <option name="State" value="Abuja">Abuja</option>
                      <option  name="State" value="Kogi">Kogi</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select a valid state.
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom05" class="form-label">Zip Code</label>
                    <input type="text" class="form-control" name="zip" id="validationCustom05" required>
                    <div class="invalid-feedback"  >
                      Please provide a valid zip.
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="validationCustom05" class="form-label">Disability</label>
                    <input type="text" class="form-control" name="disability" id="validationCustom05" placeholder="Enter diablity leave empty if non" >
                    <div class="invalid-feedback">
                      Please provide a disability.
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="validationCustom05" class="form-label">Next Of Kin's Occupation</label>
                    <input type="text" name="occupation" class="form-control" id="validationCustom05" required>
                    <div class="invalid-feedback">
                      Please provide a valid zip.
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-check form-check-inline">
                      <p class="hobby">My hobbies</p>
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id=""
                        value="reading"
                        name="hobbies[]"
                      />
                      <label class="form-check-label" for="">Reading</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id=""
                        value="sleeping"
                        name="hobbies[]"
                      />
                      <label class="form-check-label" for="">Sleeping</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id=""
                        value="sleeping"
                        name="hobbies[]"
                      />
                      <label class="form-check-label" for="">Resting</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id=""
                        value="washing"
                        name="hobbies[]"
                      />
                      <label class="form-check-label" for="">Washing</label>
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
                    <button class="btn btn-primary" name="submitbtn" onclick="return confirm('Ready to proceed?')" type="submit">Submit form</button>
                    
                  </div>
                </form>
                
           
            </div>
         
          
            
           
           
        </main>
       
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
or
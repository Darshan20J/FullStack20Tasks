<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Now | Developer Space</title>
    <link rel="shortcut icon" href="https://img.icons8.com/fluent/48/000000/user-male-circle.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="full-screen">
        <div class="dark-overlay">
            <div class="container d-flex justify-content-center">
                <form action="signup.php" method="POST" class="form w-50 p-3 bg-light my-4 rounded-lg" id="sign-up">
                    <h2 class="display-4 text-primary text-center font-weight-bolder border-bottom border-primary pb-3">
                        Signup Now</h2>
                    <!-- Name -->
                    <div class="form-group">
                        <label class="text-primary font-weight-bolder" for="name">Name</label>
                        <input class="form-control" type="text" name="name" id="name" placeholder="John Doe" required>
                    </div>

                    <!-- Username -->
                    <div class="form-group">
                        <label class="text-primary font-weight-bolder" for="username">Username</label>
                        <input class="form-control" type="text" name="user-name" id="user-name" placeholder="@John-Doe" required>
                    </div>

                    <!-- Gender -->
                    <div class="form-group">
                        <label class="text-primary d-block font-weight-bolder" for="gender">Gender</label>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="male" id="male" checked>
                            <label for="male">Male</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="female" id="female">
                            <label for="female">Female</label>
                        </div>
                    </div>


                    <!-- DOB -->
                    <div class="form-group">
                        <label class="text-primary font-weight-bolder" for="username">DOB</label>
                        <input class="form-control" type="date" name="dob" id="dob" placeholder="John Doe" required>
                    </div>

                    <!-- City -->
                    <div class="form-group">
                        <label class="text-primary font-weight-bolder" for="City">State</label>
                        <select class="form-control" name="state" id="state" required>
                            
                            <option value="" selected>SELECT STATE</option>
                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                            <option value="Daman and Diu">Daman and Diu</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jammu and Kashmi">Jammu and Kashmi</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Ladakh">Ladakh</option>
                            <option value="Lakshadweep">Lakshadweep</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Puducherry">Puducherry</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="West Bengal">West Bengal</option>
                        </select>
                    </div>

                    <!-- Mobile Number -->
                    <div class="form-group">
                        <label class="text-primary font-weight-bolder" for="mobno">Mobile No</label>
                        <input class="form-control" type="text" name="mobno" id="mobno" placeholder="111 222 3334"
                            max="10" required>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label class="text-primary font-weight-bolder" for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="jode@gmail.com" required>
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <label class="text-primary font-weight-bolder" for="password">Password</label>
                        <input class="form-control" type="password" name="password" id="password"
                            placeholder="Password" autocomplete="off" required>
                    </div>

                    <!-- Favourite Programming Languages -->
                    <div class="form-group">
                        <label for="favprogl" class="d-block text-primary font-weight-bolder text-center">Favourite
                            Programming
                            Languages</label>
                        <div class="form-check d-flex justify-content-center">

                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="prol[]" value="java" id="java" class="form-check-input">
                                <label for="java">Java</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="prol[]" value="javascript" id="javascript" class="form-check-input">
                                <label for="java">JavaScript</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="prol[]" value="PHP" id="php" class="form-check-input">
                                <label for="java">PHP</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="prol[]" value="python" id="python" class="form-check-input">
                                <label for="java">Python</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="prol[]" value="ruby" id="ruby" class="form-check-input">
                                <label for="java">Ruby</label>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-flex justify-content-center">
                        <button name="submit" id="submit" class="btn btn-primary btn-lg mx-2 rounded-pill">Submit</button>
                        <button name="reset" id="reset" class="btn btn-danger btn-lg mx-2 rounded-pill">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="core.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Register | Travel  Experts Agency</title>

        <link href="https://fonts.googleapis.com/css?family=Marck+Script|Aclonica|Berkshire+Swash|Metrophobic" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/10up-sanitize.css/8.0.0/sanitize.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

        <!-- Begin Header -->
        <header class="container-header">

                <!-- Begin Bootstrap Nav -->
                <?php
                    include('php/nav.php');
                ?>
                <!-- End Bootstrap Nav -->
            </div>

            <div class="jumbotron jumbotron-fluid jumbotron-register">
                <div class="container">
                    <h1 class="display-4 register-greetings h1-responsive">Register Now</h1>
                    <hr class="my-4" style="color:white;">
                    <p class="lead register-heading">Start your amazing experience with us</p>
                </div>
            </div>

        </header>
        <!-- End Header -->

        <br>

        <!-- Begin Main -->
        <main>
            <div class="container">

                <div class="register-main">

                    <div class="register-box">

                    <?php
                        // $dbh = mysqli_connect("127.0.0.1:3306", "admin", "P@ssw0rd", "travelexperts");

                        // if (!$dbh) {
                        //     echo "Error number: ". mysqli_connect_errno().PHP_EOL;
                        //     echo "Error message: ". mysqli_connect_error().PHP_EOL;
                        //     exit;
                        // } elseif ($dbh) {
                        //     echo "Connection was succesful <br>";
                        // }

                        // if ($result=mysqli_query($dbh, "SELECT * FROM products")){
                        //     while($rowarray=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        //         print_r($rowarray["ProdName"]);
                        //         echo "<br>";
                        //     }
                            
                        // print("------");
                        // print("<br>");

                        // if($result=mysqli_query($dbh, "SELECT * FROM agents")) {
                        //     while($rowarray=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        //         print_r($rowarray["AgtFirstName"]);
                        //         print("<br>");
                        //     }
                        // }

                        //     mysqli_free_result($result);
                        // }

                        // $lastName = "Kola";
                        // $firstName = "Babs";

                        // $sql = "INSERT INTO agents (AgtFirstName, AgtLastName) VALUES ('$firstName', '$lastName')";

                        // $result = mysqli_query($dbh, $sql);

                        // if($result) {
                        //     print("<h1>Insert was successful</h1>");
                        // } else {
                        //     print("<h1>Insert Failed</h1>");
                        // }

                        // $AgentId = 19;
                        // $AgtBusPhone = "(403) 616-8427";
                        // $AgtEmail = "babskolawole@gmail.com";
                        // $AgtPosition = "God Agent";
                        // $AgencyId = 2;
                        // $sql = "UPDATE agents 
                        //         SET AgencyId='$AgencyId' 
                        //         WHERE AgentId='$AgentId'";

                        // $result = mysqli_query($dbh, $sql);

                        // if($result) {
                        //     print("<h1>Update successful</h1>");
                        // } else {
                        //     print("<h1>Update failed</h1>");
                        // }

                        // $AgentId = 10;
                        // $sql = " DELETE FROM agents WHERE AgentId='$AgentId' ";

                        // $result = mysqli_query($dbh, $sql);

                        // if($result) {
                        //     print("<h1>Delete successful</h1>");
                        // } else {
                        //     print("<h1>Delete failed</h1>");
                        // }

                        // $firstName = "Jide";
                        // $phone = "(629) 313-5643";
                        // $sql = "INSERT INTO agents (AgtFirstName, AgtBusPhone) VALUES (?, ?)";

                        // $stmt = mysqli_prepare($dbh, $sql);
                        // mysqli_stmt_bind_param($stmt, "ss", $firstName, $phone);
                        // mysqli_stmt_execute($stmt);
                        // mysqli_stmt_close($stmt);

                        // mysqli_close($dbh);

                        // $mysqli = new mysqli("127.0.0.1:3306", "admin", "P@ssw0rd", "travelexperts");
                        
                        // if ($mysqli -> connect_errno) {
                        //     print("Error number: " . $mysqli->connect_error.PHP_EOL );
                        //     exit(); 
                        // }

                        // $sql = "SELECT * FROM products";
                        // $result = $mysqli -> query($sql);

                        // if ($result) {
                            // while($row = $result -> fetch_array(MYSQLI_ASSOC)) {
                            //     print_r($row["ProductId"]);
                            //     print(" : ");
                            //     print_r($row["ProdName"]);
                            //     print("<br>");
                            // }
                            // print_r($rowarray); prints only the first 1;

                            // foreach($rowarray as $id => $prod){
                            //     print($id . " : " . $prod);
                                // print(" : ");
                                // print($prod);
                                // print("<br>");
                            // }

                            // while($row = $result -> fetch_array(MYSQLI_BOTH)) {
                            //     print_r($row["ProdName"]);
                            //     print("<br>");
                            // }

                            // while($row = $result -> fetch_array(MYSQLI_NUM)) {
                            //     print_r($row["1"]);
                            //     print("<br>");
                            // }
                            
                            // $result -> free();

                        // } else {
                        //     print("Couldn't query");
                        // }

                        // $mysqli->close();
                        $host = "127.0.0.1:3306";
                        $db = "travelexperts";
                        $dsn= "mysql:host=$host;dbname=$db";
                        $username = "admin";
                        $password = "P@ssw0rd";
                        
                        try {
                            $pdo = new PDO($dsn, $username, $password);
                            if($pdo){
                                echo "Connected to the <strong>$db</strong> database successfully!";
                            }
                        } catch (PDOException $e){
                            echo $e->getMessage();
                        }
                        print("<br>");
                        print("<br>");

                        $stmt = $pdo -> query("SELECT * FROM agents");
                        
                        $tableOpen = "<table class='table table-hover'>";
                        $tableClose = "</table>";
                        // $row = $stmt -> fetch(PDO::FETCH_ASSOC)

                        print('<div class="table-responsive-lg container" id="table-container">');
                        print($tableOpen);
                        echo "<tr> <th>AgtFirstName</th> <th>AgtMiddleInitial</th> <th>AgtLastName</th> <th>AgtBusPhone</th> <th>AgtEmail</th> <th>AgtPosition</th> <th>AgencyId</th> </tr>";
                            while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
                                print("<tr>");

                                print_r("<td>$row[AgtFirstName]</td> 
                                <td>$row[AgtMiddleInitial]</td> 
                                <td>$row[AgtLastName]</td> 
                                <td>$row[AgtBusPhone]</td> 
                                <td>$row[AgtEmail]</td> 
                                <td>$row[AgtPosition]</td> 
                                <td>$row[AgencyId]</td>");
                                
                                print("</tr>");
                            };
                            print("<br>");
                        print($tableClose);
                        print('</div>');
                    ?>
                            <form name="registerForm">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="clientName"> <strong>Full Name</strong> </label>
                                        <input type="text" class="form-control focus validate" name="fullName" id="clientName" maxlength=20 placeholder="Full Name">
                                        <div class="focus-feedback">
                                            Enter maximum of 20 characters!
                                        </div>
                                        <div class="validation">
                                            Name required
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="clientEmail"> <strong>Email</strong> </label>
                                        <input type="email" class="form-control focus validate" id="clientEmail" placeholder="Email" name="email">
                                        <div class="focus-feedback">
                                            Enter a valid email with @ and .com!
                                        </div>
                                        <div class="validation">
                                            Email required
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address1"> <strong>Address</strong></label>
                                    <input type="text" class="form-control focus validate" id="address1" placeholder="1234 Main St" maxlength=50 name="address1">
                                    <div class="focus-feedback">
                                        Enter maximum of 50 characters!
                                    </div>
                                    <div class="validation">
                                        Address required
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address2"> <strong>Address 2</strong></label>
                                    <input type="text" class="form-control focus" id="address2" placeholder="Apartment, studio, or floor" maxlength=50 name="address2">
                                    <div class="focus-feedback">
                                        Enter maximum of 50 characters!
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="city"> <strong>City</strong> </label>
                                        <input type="text" class="form-control focus validate" id="city" placeholder="Calgary" maxlength="10" name="city">
                                        <div class="focus-feedback">
                                            Can't enter more than 10 characters!
                                        </div>
                                        <div class="validation">
                                            City required
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="province"> <strong>Province</strong> </label>
                                        <!-- <select id="province" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select> -->
                                        <input type="text" class="form-control focus validate" id="province" placeholder="AB" maxlength="2" name="province">
                                        <div class="focus-feedback">
                                            Can't enter more than 2 characters!
                                        </div>
                                        <div class="validation">
                                            Province required
                                        </div>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="postCode"> <strong>Post Code</strong> </label>
                                        <input type="text" class="form-control focus validate" id="postCode" placeholder="T3N 0M2" name="postCode">
                                        <div class="focus-feedback">
                                            Please enter post code in format T3N 0M2!
                                        </div>
                                        <div class="validation">
                                            Valid postal code required
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <h3 class="destinations">Choose Canadian destinations of Interest</h3>

                                <div class="form-group cities">
                                    <!-- <div class="validation">
                                        Select atleast one city.
                                    </div> -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="calgary" name="calgary" value="calgary">
                                        <label class="form-check-label" for="calgary">
                                            Calgary
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="toronto" id="toronto" name="toronto">
                                        <label class="form-check-label" for="toronto">
                                            Toronto
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="vancouver" id="vancouver" name="vancouver">
                                        <label class="form-check-label" for="vancouver">
                                            Vancouver
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="winnipeg" id="winnipeg" name="winnipeg">
                                        <label class="form-check-label" for="winnipeg">
                                            Winnipeg
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="edmonton" id="edmonton" name="edmonton">
                                        <label class="form-check-label" for="edmonton">
                                            Edmonton
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="saskatoon" id="saskatoon" name="saskatoon">
                                        <label class="form-check-label" for="saskatoon">
                                            Saskatoon
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group message-additional">
                                    <label for="message"><strong>Additional Message</strong></label> (optional)
                                    <textarea class="form-control" id="message" cols="30" rows="10"></textarea>
                                </div>
                                <!-- type="submit" -->
                            <button type="button" class="btn btn-sm btn-outline-success" id="submitBtn" name="regBtn">Register</button>
                            <button type="button" class="btn btn-sm btn-outline-info" id="resetBtn" name="resBtn">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <!-- End Main -->

        <!-- Begin Footer -->
            <?php
                include('php/footer.php');
            ?>
        <!-- End Footer -->

        <!-- Begin JavaScript -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="js/main-register.js"></script>
        <script src="js/main.js"></script>
        <!-- End JavaScript -->
    </body>

</html>
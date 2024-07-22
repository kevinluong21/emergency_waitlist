<!-- header -->
<?php 
require_once("header.php");

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 

    // post username and password from form
    $username = $_POST['name'];
    $password = $_POST['code'];
    
    // database info
    $host = "localhost";
    $dbname = "dbname"; 
    $dbuser = "dbuser";
    $dbpassword = "dbpassword";

    // database connection
    $dbconnection = pg_connect("host=$host dbname=$dbname user=$dbuser password=$dbpassword");
    if (!$dbconnection) {
        die("Error in connection test: " . pg_last_error());
    } 

    $authentication = false;

    // execute query for user/password
    $query = "SELECT * FROM users WHERE username = $1"; 
    $result = pg_query_params($dbconnection, $query, array($username));

    $user = pg_fetch_object($result);
    if($user && password_verify($password, $user['password'])){
        $authentication = true;        
    }

    pg_free_result($result);  

    if($authentication){
        $_SESSION['username'] = $username; // Save username to session
        header('Location: patient-display.php'); // redirect to patient-display
        exit();
    }else{
        echo "Name or password not valid";    
        pg_close($dbconnection);  
    }
}
?>
    <div class="container">
        <h4 class="subtitle">The Civic Hospital</h4>
        <h1 class="title">
            Login As A Patient
        </h1>
        <h4 class="subtitle">
            Login using your full name and the 3-character code on your ticket that was given to you upon check-in.<br>
            If you have not checked in yet, please visit the front desk or an available kiosk to get started.
        </h4>
        <form method="post">
            <label for="name">Full Name</label><br>
            <input type="text" id="name" name="name" autocomplete="name" required><br>
            <label for="code">3-Character Code</label><br>
            <input type="password" id="code" name="code" size="3" minlength="3" maxlength="3" required><br>
            <button type="submit">Login</button>
        </form>
    </div>
    <!-- footer -->
    <?php 
        require_once("footer.php");
    ?>
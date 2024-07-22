<!-- header -->
<?php 
require_once("header.php");

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: patient-login.php');
    exit();
}

$query = "SELECT * FROM patients WHERE name = '{$username}'";
$patient = $pdo->query($query)->fetch();

$wait_time = calculateWaitTime($patient['time_in_queue']);

function calculateWaitTime($time_in_queue) {
    // todo
    return 0;
}
?>
    </div>
    <!-- footer -->
        <h1>Welcome <?php echo htmlspecialchars($username); ?></h1>
        <p>Your estimated wait time is: <?php echo $wait_time; ?></p>
        <p>Thank you for your patience.</p>
    </div>
    <?php 
        require_once("footer.php");
    ?>
    
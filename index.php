<!-- header -->
<?php 
require_once("header.php");
?>
    <div class="container">
        <h4 class="hospital-name">The Civic Hospital</h4>
        <h1 class="title">
            Hospital Wait Times.<br>
            Made Easy.
        </h1>
        <table class="login-options">
            <tr>
                <td>
                    <a href="patient-login.php">
                        <div class="option" id="patient">
                            <h1>I'm a Patient</h1>
                            <h4>Login &#8599;</h4>
                        </div>
                    </a>
                </td>
                <td>
                    <div class="option" id="healthcare-provider">
                        <h1>I'm a Healthcare Provider</h1>
                        <h4>Login &#8599;</h4>
                    </div>
                </td>
                <td>
                    <div class="option">
                        <h1>I'm an Administrator</h1>
                        <h4>Login &#8599;</h4>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <!-- footer -->
    <?php 
        require_once("footer.php");
    ?>
    <script src="script.js"></script>
</body>
</html>
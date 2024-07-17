<!-- header -->
<?php 
require_once("header.php");
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
        <form>
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

<?php
include '../includes/head.html';
?>

<?php
include '../includes/nav.html';
?>

    <h2>Sign Up</h2>
    <section class="signup-form">
        <h2></h2>
        
        <form action="includes/signup.inc.php" method="POST">
            <input type="text" name="name" placeholder="Full name">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwdrepeat" placeholder="Repeat Password">
            <button type="submit" name="submit">Sign Up</button>
        </form>

        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] =="emptyinput") {
                echo "<p>Fill all fields</p>";
            }

            if ($_GET["error"] =="invalidusername") {
                echo "<p>Choose a proper username</p>";
            }


            if ($_GET["error"] =="invalidemail") {
                echo "<p>Choose a proper email</p>";
            }

            if ($_GET["error"] =="passworddon'tmatch") {
                echo "<p>Passwords don't match</p>";
            }


            if ($_GET["error"] =="stmtfailed") {
                echo "<p>Something went wrong</p>";
            }

            if ($_GET["error"] =="usernametaken") {
                echo "<p>Choose another username</p>";
            }
            if ($_GET["error"] =="none") {
                echo "<p>You have signed up</p>";
            }
        }
    ?>

    </section>


<?php
include '../includes/footer.html';
?>


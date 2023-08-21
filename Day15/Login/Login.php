<?php
include '../includes/head.html';
?>

<?php
include '../includes/nav.html';
?>
    <h2>Log In</h2>
    <section class="signup-form">
        <h2></h2>
        <form action="includes/login.inc.php" method="POST">
            <input type="text" name="name" placeholder="Username/Email">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Sign Up</button>
        </form>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] =="emptyinput") {
                echo "<p>Fill all fields</p>";
            }

            if ($_GET["error"] =="wrongLogin") {
                echo "<p>Login info not correct</p>";
            }

        }
    ?>
    </section>



    
<?php
include '../includes/footer.html';
?>

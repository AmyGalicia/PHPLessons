<?php
    require "header.php";
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <h1>Signup</h1>
                <?php
                if (isser($_GET['error'])) {
                    if ($_GET['error'] == "emptyfields") {
                        echo '<p class=signuperror">Fill in all fields!</p>';      
                    }
                    else if  ($_GET['error'] == "passwordcheck") {
                        echo '<p class=signuperror">Your passwords do not match!</p>';      
                     }
                     else if  ($_GET['error'] == "usertaken") {
                        echo '<p class=signuperror">Username is already taken!</p>';      
                     }
                     else if  ($_GET['error'] == "success") {
                        echo '<p class=signuperror">Signup successful!</p>';      
                     }
                    }
                ?>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="text" name="mail" placeholder="E-mail">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwd-repeat" placeholder="Repeat password">
                    <button type="submit" name="signup-submit">Signup</button>
                </form>
            </section>
        </div>
    </main>

<?php
    require "footer.php";
?>

        
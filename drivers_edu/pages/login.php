<div class='pageWrapper' id='loginWrapper'>
    <h1>Please login...</h1>
    <p>Please login to your account with your given credentials.</p>
    <br />

    <?php

        // Check for login
        if ( isset ( $_POST['loginEmail'], $_POST['loginPass'] ) ) {

            $email = $_POST['loginEmail'];
            $pass = $_POST['loginPass'];

            // Check if account exists
            if ( Account::combinationExists ( $email, $pass ) ) {
                echo "<span class='success'>Logging in!</span>";

                if ( Account::tryLogin ( $email, $pass ) )
                    echo "logged_in";
                else {
                    echo"not_logged_in";
                }

            } else {
                echo "<span class='fail'>Login doesn't exist</span>";
            }
        }

    ?>

    <br />
    <form action='index.php' method='POST'>
        <label>Email: </label> <input type="text" value="" required name="loginEmail" /> <br />
        <label>Password: </label> <input type="password" value="" required name="loginPass" /> <br />
        <input type="submit" value="Login" />
    </form>
</div>

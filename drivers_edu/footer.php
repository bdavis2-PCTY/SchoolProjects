                  <div id='footer'>
                        <?php
                              if ( Account::isLoggedIn() )
                                    echo "Logged in as {$MyAccount->getName()} (<a href='index.php?p=logout'>Logout</a>)";
                        ?>
                        <br />
                        <p>Copyright &copy; Braydon Davis 2016 - All Rights Reserved</p>
                  </div>
            </div>
      </body>
</html>

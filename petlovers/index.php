<?php 
    require_once ('./functions/dbconfig.php');
    require_once('./functions/login.php');

?>

<!DOCTYPE html>
<html lang="en">

  <?php include_once 'components/head.php'; ?> 

<body>

    <!-- Navigation -->
  <?php include_once 'components/nav.php'; ?>

    <!-- Header -->
  <?php include_once 'components/header.php'; ?> 

    <!-- About -->
   <?php include_once 'components/about.php'; ?> 

    <!-- Services -->
   <?php include_once 'components/services.php'; ?>

    <!-- Portfolio -->
  <?php include_once 'components/portfolio.php'; ?> 

    <!-- Footer -->
  <?php include_once 'components/footer.php'; ?> 



    <!-- Login Modal -->
    <div class="modal fade" id="modalLogin">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Log in</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- NEW FORM --> 
            <div class="container">
     <div class="form-container">
        <form method="post">
            <h2>Sign in.</h2><hr />
            <?php
            if(isset($error))
            {
                  ?>
                  <div class="alert alert-danger">
                      <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
                  </div>
                  <?php
            }
            ?>
            <div class="form-group">
             <input type="text" class="form-control" name="txt_uname_email" placeholder="Username or E mail ID" required />
            </div>
            <div class="form-group">
             <input type="password" class="form-control" name="txt_password" placeholder="Your Password" required />
            </div>
            <div class="clearfix"></div><hr />
            <div class="form-group">
             <button type="submit" name="btn-login" class="btn btn-block btn-primary">
                 <i class="glyphicon glyphicon-log-in"></i>&nbsp;SIGN INNew
                </button>
            </div>
            <br />
            <label>Don't have account yet ! <a href="functions/sign-up.php">Sign Up</a></label>
        </form>
       </div>
</div>

            <!--
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputemail" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputpassword" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-2">
                    <button type="submit" id="login-btn" class="btn btn-default">Log in</button>
                    </div>
                    <div class="col-sm-2">
                    <button id="openModalRegister" class="btn btn-default btn-danger">Register</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    -->
    </div>


    <!-- Register Modal -->
    <div class="modal fade" id="modalRegister">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Register</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
           
           <?php include '/functions/Sign-Up.php'; ?>

           <!-- <form class="form-horizontal">
                <div class="form-group">
                    <label for="txtRegName" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtRegName" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtRegLastname" class="col-sm-2 control-label">Lastname</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtRegLastname" placeholder="Lastname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-2">
                    <button class="btn btn-default btn-danger">Register</button>
                    </div>
                </div>
            </form>-->
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>

        

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!--Auth --> 
        <script src="js/auth.js"></script>

        <!-- Custom theme -->
        <script src="js/customtheme.js"> </script> 



    
</body>

</html>

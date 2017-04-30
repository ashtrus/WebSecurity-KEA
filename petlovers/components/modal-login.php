<!-- Login Modal -->
<div class="modal fade" id="modalLogin">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title text-center">Log in</h4>
            </div>

            <div class="modal-body">
                <!-- NEW FORM --> 
                <form method="post" >
                    <?php
                        if(isset($error))
                        {
                    ?>
                        <div class="alert alert-danger">
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo esc($error); ?> !
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


                    <div class="form-group">
                        <button type="submit" name="btn-login" class="btn btn-block btn-primary">
                            <i class="glyphicon glyphicon-log-in"></i>&nbsp;Login
                        </button>
                    </div>

                </form>            
            </div><!-- /.modal-body -->
                
            <div class="modal-footer">
                <p class="text-center">Don't have account yet? 
                    <a href="functions/sign-up.php">Sign Up</a>
                Recover account!  
                    <a href="functions/recover.php">Recover by email</a>
                </p>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Register Modal -->
<div class="modal fade" id="modalRegister">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Register</h4>
                
                <?php
                    if (isset($error)) {
                        foreach ($error as $error) {
                ?>
                    <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                    </div>
                
                <?php
                        }
                    } else if (isset($_GET['joined'])) {
                ?>

                    <div class="alert alert-info">
                        <i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully registered <a href='index.php'>login</a> here
                    </div>

                <?php
                    }
                ?>

            </div>

            <div class="modal-body">
                
                <?php include '/functions/Sign-Up.php'; ?>

                <!-- <form class="form-horizontal">
                    <div class="form-group">
                        <label for="txtRegName" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="txt_uname" placeholder="Enter Username" value="<?php if(isset($error)){echo $uname;}?>" />
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


                <form method="post">

            <div class="form-group">
            <input type="text" class="form-control" name="txt_uname" placeholder="Enter Username" value="<?php if(isset($error)){echo $uname;}?>" />
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="txt_umail" placeholder="Enter E-Mail ID" value="<?php if(isset($error)){echo $umail;}?>" />
            </div>
            <div class="form-group">
             <input type="password" class="form-control" name="txt_upass" placeholder="Enter Password" />
            </div>
            <div class="clearfix"></div><hr />
            <div class="form-group">
             <button type="submit" class="btn btn-block btn-primary" name="btn-signup">
                 <i class="glyphicon glyphicon-open-file"></i>&nbsp;SIGN UP
                </button>
            </div>
            <br />
            <label>have an account ! <a href="./index.php">Sign In</a></label>
        </form>


        
            </div><!-- /.modal-body -->

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

         </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
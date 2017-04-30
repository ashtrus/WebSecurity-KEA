<?php require_once ('./functions/dbconfig.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <?php include_once 'components/head.php'; ?>

<body>
    <!-- Navigation -->
  <?php include_once 'components/nav.php'; ?>
    <h1 class="text-center">CHAT!</h1>

    <div class="container">
        
        <div id="chatContent" class="row">
            
            <ul>
                <li>

                    <?php 
                    if ( isset($_SESSION['user_session']) ) {
                        echo esc($_SESSION['user_session']);
                    }
                    ?>

                </li>
            </ul>

        </div>

        <div class="row">
            <form id="formPostMessage" method="post">
                <input type="text" name="post" id="txtChatMessage" placeholder="Enter your message" class="col-xs-9">  
                <button type="submit" id="btnChatPost" class="pull-right col-xs-3">Post</button>    
            </form>
        </div>

    </div>


<?php include_once 'components/footer.php'; ?> 
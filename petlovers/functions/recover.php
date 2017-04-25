
<?php 
include 'Class.User.php';


?> 
  <form class="form-horizontal" >
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputemail" placeholder="Email">
                    </div>
                </div>
                
        <div class="modal-footer">
            <button type="submit" class="btn btn-secondary"  id="btn-recover" data-dismiss="modal">Send password </button>
        </div>
        </div>
    </div>

<script> 

    $('#btn-recover').on('click', function() {
        var email = $('#inputemail').val();
        var sLink = "/api/recover-mail.php?email="+email;

        $.ajax({
            "method":"GET",
            "dataType":"JSON",
            "url":sLink,

        }).done(function(jData) {
            console.log("successs");
        })
    })



</script> 

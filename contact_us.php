<section id="sign_up">
    <div class="row no-margin">
        <h3 class="text-orange text-center">Be a Member</h3>
        <h6 class="text-center">SIGNUP</h6>
        <div class="row no-margin">
            <div class="col-md-5">
                <img src="/assets/img/contact_us.png" alt="Contact Us Logo" class="img-fluid">
            </div>
            <div class="col-md-5 offset-md-2 d-flex flex-column justify-content-center">
                <form id="formData">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" placeholder="Full Name" name="name" id="name" required minlength="5" maxlength="200">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea placeholder="Address" cols="30" row="10" name="address" id="address" maxlength="500"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" placeholder="Email Address" name="email" id="email" required minlength="5" maxlength="200">
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-outline btn-primary" type="submit">SIGN UP</button>
                    </div>
                </form>
                <div id="message" class="f345asda_hidden">
                    <p class="no-margin">New record created successfully</p>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
$(document).ready(function(){
    $( "#formData" ).on( "submit", function( event ) {
        event.preventDefault();
        var ajaxRequest;
        
        var formData = {
            name        : $("#name").val(),
            email       : $("#email").val(),
            address     : $("#address").val(),
        };
        
    ajaxRequest= $.ajax({
        url: "processInfo.php",
        type: "post",
        data: formData
        // dataType: 'json'
    });

    /*  Request can be aborted by ajaxRequest.abort() */

    ajaxRequest.done(function (response, textStatus, jqXHR){

        $('#formData').addClass('f345asda_hidden');
        $('#message').removeClass('f345asda_hidden');
        $('#message p').html(response);
    });

    /* On failure of request this function will be called  */
    ajaxRequest.fail(function (){

        // Show error
        // $("#result").html('There is error while submit');
    });

    });
});
</script>





<!--Javascript for check email availabilty-->
<script>
function checkAvailability() {

    $("#loaderIcon").show();
    jQuery.ajax({
        url: "check_availability.php",
        data: 'emailid=' + $("#email").val(),
        type: "POST",
        success: function(data) {
            $("#user-availability-status").html(data);
            $("#loaderIcon").hide();
        },
        error: function() {}
    });
}
</script>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <section>
                <div class="modal-body modal-spa">
                    <div class="login-grids">
                        <div class="login">
                            <div class="login-right">
                                <form action="includes/signUpaction.php" name="signup" method="post">
                                    <h3>Create your account </h3>
                                    <input type="text" value="" placeholder="Full Name" name="fname" required="required"
                                        pattern="[a-zA-Z _]{4,15}"
                                        title="please enter only character  between 4 to 15 for  name"
                                        autocomplete="off" required="">
                                    <input type="text" value="" placeholder="Mobile number" pattern="[0-9]{11,14}"
                                        name="mobilenumber" autocomplete="off"
                                        title="please enter only numbers between 11 to 14 for mobile no." required="">
                                    <input type="text" value="" placeholder="Email id" name="email" id="email"
                                        onBlur="checkAvailability()" autocomplete="off" required="">
                                    <span id="user-availability-status" style="font-size:12px;"></span>
                                    <input type="password" value="" placeholder="Password" name="password"
                                        required="required" pattern="[a-zA-Z0-9 ]{8,100}"
                                        title="please enter only character or numbers between 8 to 10 for password"
                                        required="">
                                    <input type="submit" name="submit" id="submit" value="CREATE ACCOUNT">
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
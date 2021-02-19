$(document).ready (function(){
            $("#success-alert").hide();
            $("#myWish").click(function showAlert() {
                $("#success-alert").fadeTo(4000, 500).slideUp(500, function(){
               $("#success-alert").slideUp(500);
                });
            });
 });

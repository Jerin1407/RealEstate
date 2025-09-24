{{-- <style>

.enquiry-submit[disabled] {
    opacity: 0.5;
    cursor: not-allowed;
}

.security-check {
    color: #fff;
}

.popup-overlay {
    display: none;
    /* position: fixed; */
    top: 0;
    left: 0;
    width: 50%;
    height: 50%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 999;
}

.popup {
    display: none;
    position: fixed;
    top: 54%;
    left: 47%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 20px;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    text-align: center;
    /* width: 100px; */
    /* display: block; */
    padding: 7px;
     width: 421px;
    height: 282px;
    /* Adjust width as needed */
}

.popup img {
    display: block;
    margin: 0 auto 5px;
}

.popup p {
    margin: 0 0 10px;
}

.popup button {
    display: block;
    margin: 0 auto;
    padding: 5px 10px;
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    border-radius: 4px;
    cursor: pointer;
    width: 270px;
}

.popup button:hover {
    background-color: #e0e0e0;
}

</style>

<div id="footer_wrapper">
    <div class="footer_containar">
        <div class="ftr_col01">
            <h3>Contact Us</h3>
            <ul>
                <li><span style="font-size: 22px;font-weight: 500;">RealestateThrissur.com</span>
                    <br>Powered By<a href="http://godsownhome.in/" target="_blank">GOD's OWN Properties & Developers Pvt. Ltd. 
                        <br> Ground Floor, N.P.Tower,
                        <br>Punkunnam Road, Westfort
                        <br>Thrissur - 680 004
                    </a>
                <li><a href="mailto:mail@realestatethrissur.com">mail@realestatethrissur.com</a></li>
                <li>Customer Service : 94 47 11 1233<br>Tel.: 0487 - 2382290</li>
            </ul>
        </div>
        <div class="ftr_col02">
            <!--<iframe width="450" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en_uk&amp;geocode=&amp;q=Real+Estate+Thrissur+(A+GOD's+OWN+Properties+%26+Developers+Pvt.+Ltd.+Group+Compa),+JRS+Plaza+(Opp.+Omega+Granites+%26+Marbles),+Poonkunnam,+Thrissur,+Kerala+680002&amp;sll=10.532054,76.2018&amp;sspn=0.003043,0.005284&amp;gl=IN&amp;ie=UTF8&amp;hq=Real+Estate+Thrissur+(A+GOD's+OWN+Properties+%26+Developers+Pvt.+Ltd.+Group+Compa),+JRS+Plaza+(Opp.+Omega+Granites+%26+Marbles),+Poonkunnam,&amp;hnear=680002&amp;ll=10.532465,76.201397&amp;spn=0.020182,0.018773&amp;t=m&amp;output=embed"></iframe>-->
            <iframe width="450" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3922.6763127778895!2d76.19939551411464!3d10.526140366643489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7ee675fcc1961%3A0x3f984ee19eb33165!2sGOD%E2%80%99s+OWN+Properties+%26+Developers+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1552996402715"></iframe>
        </div>      

        <?php
      $n1=rand(1,10); 
      $n2=rand(10,20);
      ?>
        <div class="clr"></div>
    </div>
</div>
<div class="footer_bottom">
    <div class="wrapper_panel" style="width:90%;">
        <div class="copyright"><img src="favicon.ico" />&nbsp;<a href="http://godsownhome.in/" target="_blank" style="color: white;">All Rights Reserved. &#169; Copyright 2013 GOD's OWN Properties & Developers Pvt. Ltd.</a>
        <br><br><a href="terms.php" style="color:#fff;align:center;">Terms &amp; Conditions</a>
        </div>
        <div class="head_right"> 
            <ul>
                <li><a href="http://godsownhome.in" target="_blank"><img src="images/image003.jpg" style="width: 110px;" alt="Facebook"></a></li>
            </ul>
        </div>
        <div class="head_right" style="width: 60px;"> 
            <ul>
                <li><a href="https://www.facebook.com/thrissurrealty" target="_blank"><img src="images/facebook-logo.png" style="width: 55px;height: 33px;" alt="Facebook"></a></li><br>
                <li><a href="https://www.youtube.com/channel/UCIRZ3xPzpbrsY6kBOohSkpA" target="_blank"><img src="images/youtube-logo.png" style="width: 50px;" alt="youtube"></a></li>
            </ul>
        </div>
        <div class="head_right"> 
            <ul>
                <li><a href="https://www.youtube.com/channel/UCIRZ3xPzpbrsY6kBOohSkpA" target="_blank"><img src="images/UTube-Godsown.png" style="width: 75px;" alt="Youtube"></a></li>
            </ul>
        </div>
        
        <div class="link_ftr">
           
        </div>
        <div class="clr"></div>
    </div>
</div>

<div class="popup-overlay"></div>
<div class="popup">
    <!-- <p>Mail sent successfully!</p> -->
    <img src="images/logo-success.jpg" alt="Realestate Thrissur" style="width: 410px;height: 235px;" />
    <button id="close-popup" style="width: 53px;
    padding: 5px;">Close</button>
</div>

<script type="text/javascript">
//$(document).ready(function() {
    $('#contact-form').on('submit', function(event) {
        const sumInput = $('#sum');
        const firstNumber = parseInt($('#first_number').val());
        const secondNumber = parseInt($('#second_number').val());
        const expectedSum = firstNumber + secondNumber;
        const errorDiv = $('#captcha-error');

        if (parseInt(sumInput.val()) !== expectedSum) {
            errorDiv.text("Incorrect answer. Please try again.");
            errorDiv.show(); // Show the error message
            event.preventDefault(); // Prevent form submission
        } else {
            errorDiv.hide(); // Hide the error message if correct
        }
    });
//});

$('#contact-form').on('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    $(".enquiry-submit").prop('disabled', true);
    $.ajax({
        url: $(this).attr('action'),
        type: $(this).attr('method'),
        data: $(this).serialize(),
        success: function(response) {
            // Show the popup
            $('.popup-overlay').show();
            $('.popup').show();

        },
        error: function() {
            alert('An error occurred. Please try again.');
        }
    });
});

$('#close-popup').on('click', function() {
    $('.popup-overlay').hide();
    $('.popup').hide();
    window.location.reload();
});

</script> --}}

<footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex justify-center md:justify-start space-x-2 mb-4">
                        <img src="https://realestatethrissur.com/images/logo.png" alt=""
                            class="bg-white px-2 py-2 h-16 rounded-bl-2xl rounded-tr-2xl ">
                    </div>
                    <p class="text-gray-400">Your trusted partner in finding the perfect property. Making dreams come
                        true since 2010.</p>
                </div>

                <div class="text-center md:text-start">
                    <h5 class="text-lg font-semibold  mb-4">Quick Links</h5>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-primary transition-colors">Home</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Properties</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">About Us</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Contact</a></li>
                    </ul>
                </div>

                <div class="text-center md:text-start">
                    <h5 class="text-lg font-semibold mb-4">Property Types</h5>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-primary transition-colors">Villas</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Flats</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Plots</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Commercial</a></li>
                    </ul>
                </div>

                <div class="text-center md:text-start">
                    <h5 class="text-lg font-semibold mb-4">Contact Info</h5>
                    <div class="space-y-2 text-gray-400">
                        <p class="text-2xl">RealestateThrissur.com</p>
                        <p>Powered By</p>
                        <p>GOD's OWN Properties & Developers Pvt. Ltd.</p>
                        <p>Ground Floor, N.P.Tower,</p>
                        <p>Punkunnam Road, Westfort</p>
                        <p>Thrissur - 680 004</p>
                        <!-- <p>📞 +91 98765 43210</p>
                        <p>✉️ info@redstoneproperties.com</p>
                        <p>📍 Bangalore, Karnataka</p> -->
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 GOD's OWN Properties. All rights reserved.</p>
            </div>
        </div>
    </footer>


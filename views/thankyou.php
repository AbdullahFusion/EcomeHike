<!doctype html>
<html lang="en">
<?php include_once('../includes/head.php')  ?>

<body class="hompg thanks-pg">



<?php include_once('../includes/mobile_menu.php')  ?>




<?php include_once('../includes/header.php')  ?>
  

<!-- body -->

<!-- banner-main-sec -->
<section class="banner-main-sec fast contact-sec">
    <div class="container">
        <div class="row al-flex-end">
            <div class="col-lg-6">
                <ul class="list-page">
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:(void)" class="active">Thank You</a></li>
                </ul>
                <h2 class="clr-theme" style="font-size: 28px;
    letter-spacing: -1.0px;">Your form has been successfully submitted</h2>
            </div>
            <div class="col-lg-3 offset-lg-1">
                              <div class="imgwrap">
                    <img src="assets/images/contact-CTA.png" alt="img">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
              <h1>Expect a call or email from us within the next <strng class="clr-theme">12-24 hours</strng> to discuss your needs and how we can assist you.</h1>
              <a href="service" class="themes-btn cntct-btn">Learn more</a>
            </div>
        </div>
    </div>
</section>
<!-- banner-sec -->

<!-- contact-sec -->
<!--<section class="contact-sec">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-4 col-md-6">-->
<!--                <div class="conta-inner-b">-->
<!--                    <h2>Customer Support</h2>-->
<!--                    <p>Mon–Fri: 9 a.m.–5 p.m. (GMT-5)</p>-->
<!--                    <a href="javcript:(void)" class="themes-btn cntct-btn">Book a Meeting</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-md-6">-->
<!--                <div class="conta-inner-b">-->
<!--                    <h2>Sales</h2>-->
<!--                    <a href="tel:+12172900821">+1 (217) 290-0821</a>-->
<!--                    <p>Mon–Fri: 9 a.m.–5 p.m. (GMT-5)</p>-->
<!--                    <p>Weekends: Submit A Question</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-md-6">-->
<!--                <div class="imgwrap">-->
<!--                    <img src="assets/images/contact-CTA.png" alt="img">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!-- contact-sec -->



<!-- body -->

<?php include_once('../includes/footer.php') ?>


<!-- <script>
document.addEventListener("DOMContentLoaded", function() {
    var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {});
    var showModalAfterDelay = function(delay) {
        setTimeout(function() {
            if (closeCount < 3) {  // Check if the modal has been shown less than 3 times
                myModal.show();
            }
        }, delay);
    };

    // Show the modal for the first time after 5 seconds
    showModalAfterDelay(5000);

    var closeCount = 0;

    // Set up an event listener for when the modal is hidden
    document.getElementById('exampleModal').addEventListener('hide.bs.modal', function () {
        closeCount++;
        var nextDelay;
        if (closeCount === 1) {
            nextDelay = 30000; // 30 seconds after first close
        } else if (closeCount === 2) {
            nextDelay = 60000; // 60 seconds after second close
        } else {
            return; // Stop showing the modal after 3 times
        }
        showModalAfterDelay(nextDelay);
    });
});
</script> -->


 	<script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/slick/slick.js"></script>
    <script src="assets/slick/slick.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/fancybox.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
    
    
    <!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/666a434d981b6c56477c8f23/1i07hdq3p';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> -->
<!--End of Tawk.to Script-->


<script>
    function setButtonURL(){
    Tawk_API.toggle();
    }
</script> 


<script>
    document.addEventListener("mousemove", parallax);
function parallax(event) {
  this.querySelectorAll(".parallax-wrap .stats-animate").forEach((shift) => {
    const position = shift.getAttribute("value");
    const x = (window.innerWidth - event.pageX * position) / 90;
    const y = (window.innerHeight - event.pageY * position) / 90;

    shift.style.transform = `translateX(${x}px) translateY(${y}px)`;
  });
}
</script>



</body>
</html>
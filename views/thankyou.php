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
              <!--<a href="service" class="themes-btn cntct-btn">Learn more</a>-->
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


<style>
  
/* Popup Form Styles */
.popup-form {
    display: none;
    position: fixed;
    z-index: 999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    animation: fadeInBackground 0.4s ease-in-out;
}

.popup-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 20px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    width: 90%;
    max-width: 400px;
    opacity: 0;
    animation: fadeIn 0.4s ease-in-out forwards;
    border-radius: 30px;
    /* background: transparent; */
}

.close-btn {
    color: red;
    float: right;
    font-size: 24px;
    cursor: pointer;
}

/* Animations */
@keyframes fadeInBackground {
    from { background-color: rgba(0, 0, 0, 0); }
    to { background-color: rgba(0, 0, 0, 0.5); }
}

@keyframes fadeIn {
    from { transform: translate(-50%, -50%) scale(0.9); opacity: 0; }
    to { transform: translate(-50%, -50%) scale(1); opacity: 1; }
}

@keyframes fadeOut {
    from { transform: translate(-50%, -50%) scale(1); opacity: 1; }
    to { transform: translate(-50%, -50%) scale(0.9); opacity: 0; }
}

/* Form Input Styles */
form input, form textarea {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    box-sizing: border-box;
    border-radius: 10px;
}

form button {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
}

form .formbtn:hover {
    background-color: #013036;
    transition: .3s ease;
    color: white;
}

form input{
    border-radius: 10px;
    border: 1px solid #013036;
}

</style>   


<!-- Popup Form -->
<div id="popupForm" class="popup-form">
    <div class="popup-content">
        <span class="close-btn">&times;</span>
        <h3>Contact Us</h3>
        <form action="/mail" method="POST">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your email" required>

            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" placeholder="Your phone number" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Your message" required></textarea>

            <input type="submit" class="formbtn" value="Submit">
        </form>
    </div>
</div>

<script>

// Get all elements with the popup-btn class
// Get all elements with the popup-btn class
const popupBtns = document.querySelectorAll('.popup-btn');
const popupForm = document.getElementById('popupForm');
const closeBtn = document.querySelector('.close-btn');

// Loop through each popup-btn and add event listeners
popupBtns.forEach(function(popupBtn) {
    popupBtn.addEventListener('click', function() {
        popupForm.style.display = 'block';
    });
});

// Close the popup form when the close button is clicked
closeBtn.addEventListener('click', function() {
    popupForm.style.display = 'none';
});

// Close the popup form when clicking outside the popup content
window.addEventListener('click', function(event) {
    if (event.target == popupForm) {
        popupForm.style.display = 'none';
    }
});




// $('.popup-btn').on('click', function(){
// $('.popupform-main').addClass('active');
// $('body').addClass('o-hidden');
// $('.overlay-bg').fadeIn(500);
// $('.close-btn').on('click', function(){
// $('.popupform-main').removeClass('active');
// $('body').removeClass('o-hidden');
// $('.overlay-bg').fadeOut(500);
// });
// $('.overlay-bg').click(function() {
// $('popupform-main').removeClass('active');
// $('body').removeClass('o-hidden');
// $('.overlay-bg').fadeOut(500);

// });
// });
// $('.close-btn ,.no-thanks').on('click', function(){
// $('.popupform-main').removeClass('active');
// $('body').removeClass('o-hidden');
// $('.overlay-bg').fadeOut(700);
// });
</script>


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
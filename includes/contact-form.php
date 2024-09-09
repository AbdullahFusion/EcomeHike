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
}

form button {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
}

form button:hover {
    background-color: #45a049;
}


</style>   


<!-- Popup Form -->
<div id="popupForm" class="popup-form">
    <div class="popup-content">
        <span class="close-btn">&times;</span>
        <h3>Contact Us</h3>
        <form action="" method="POST">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your email" required>

            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" placeholder="Your phone number" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Your message" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>

<script>

// Get the elements
const popupBtn = document.getElementById('popup-btn');
const popupForm = document.getElementById('popupForm');
const closeBtn = document.querySelector('.close-btn');

// Show the popup form when the link is clicked
popupBtn.addEventListener('click', function() {
    popupForm.style.display = 'block';
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
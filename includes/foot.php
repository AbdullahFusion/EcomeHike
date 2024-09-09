<!-- 
<script>
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
<script>
  jQuery(function () {
    var markers = $(".marker");

    markers.each(function () {
      var marker = $(this),
        width = marker.width(),
        height = 2 * marker.height(),
        ns = "http://www.w3.org/2000/svg";

      var svg = document.createElementNS(ns, "svg");

      $(svg)
        .css({
          width: width,
          height: height,
          transform: "scale(1, 1)" // Adjust scale if needed
        })
        .attr({
          width: width,
          height: height,
          viewBox: "-1 -1 2 2"
        });

      marker[0].appendChild(svg);

      var path = document.createElementNS(ns, "path");

      $(path)
        .attr({
          pathLength: 100,
          "vector-effect": "non-scaling-stroke"
        });

      svg.appendChild(path);

      // Function to set and animate the circle path
      function setCircle(path) {
        var pathLength = path.getTotalLength();

        $(path)
          .attr({
            d: circlePath(-0.15, 0.05, 150, 190, 0.05, 0.3)
          })
          .attr({
            "stroke-dasharray": pathLength,
            "stroke-dashoffset": pathLength // Start with dashoffset equal to pathLength
          })
          .css("visibility", "visible")
          .animate({
            "stroke-dashoffset": 0
          }, 1500); // Adjust animation duration as needed
      }

      setCircle(path); // Trigger animation for each marker

      function circlePath(dr_min, dr_max, θ0_min, θ0_max, dθ_min, dθ_max) {
        var c = 0.551915024494,
          β = Math.atan(c),
          d = Math.sqrt(c * c + 1 * 1),
          r = 0.9,
          θ = ((θ0_min + Math.random() * (θ0_max - θ0_min)) * Math.PI) / 180,
          path = "M";

        path += [r * Math.sin(θ), r * Math.cos(θ)];
        path += " C" + [d * r * Math.sin(θ + β), d * r * Math.cos(θ + β)];

        for (var i = 0; i < 4; i++) {
          θ += (Math.PI / 2) * (1 + dθ_min + Math.random() * (dθ_max - dθ_min));
          r *= 1 + dr_min + Math.random() * (dr_max - dr_min);
          path +=
            " " +
            (i ? "S" : "") +
            [d * r * Math.sin(θ - β), d * r * Math.cos(θ - β)];
          path += " " + [r * Math.sin(θ), r * Math.cos(θ)];
        }
        return path;
      }
    });
  });
</script>
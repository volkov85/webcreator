'use strict';

/**
 * Animate value from 0 to value
 * @param {Object} elmnt - counter element
 * @param {number} value - final counter value
 * @param {number} duration - animation duration
 */
function animateValue(elmnt, value, duration) {
  var current = 0;
  var increment = value > 0 ? 1 : -1;
  var stepTime = Math.abs(Math.floor(duration / value));
  var timer = setInterval(function () {
    current += increment;
    elmnt.textContent = current;

    if (current === value) {
      clearInterval(timer);
    }
  }, stepTime);
}

;
/**
 * Smooth scrolling script
 */

$("a").on("click", function (evt) {
  // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {
    evt.preventDefault();
    var hash = this.hash;
    $("html, body").animate({
      scrollTop: $(hash).offset().top
    }, 800, function () {
      // Add hash (#) to URL when done scrolling (default click behavior)
      if (hash !== "#top") {
        window.location.hash = hash;
      }
    });
  }
});

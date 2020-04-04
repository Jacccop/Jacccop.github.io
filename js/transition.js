function headerTransition(){
    var element = document.getElementById("headerImgContent");
    element.classList.add("headerTransition");
}

/**
 * @param  {number} interval (in milliseconds)
 */
function cycleBackgrounds(interval) {
    let index = 0;
  
    const $imageEls = $('.headerImg .slide') // Get the images to be cycled.
    setInterval(() => {
      // Get the next index.  If at end, restart to the beginning.
      index = index + 1 < $imageEls.length ? index + 1 : 0
      // Show the next
      $imageEls.eq(index).addClass('show')
      // Hide the previous
      $imageEls.eq(index - 1).removeClass('show')
    }, interval)
  }
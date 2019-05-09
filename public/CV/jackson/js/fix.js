var inputRange = document.getElementsByClassName('range')[0],
    maxValue = 9, // the higher the smoother when dragging
    speed = 1000,
    currValue, rafID;

// set min/max value
inputRange.min = 0;
inputRange.max = maxValue;

var slider = document.getElementById("value-gpa");
var output = document.getElementById("gpa");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
  // $.get("ajax/filtersearch/"+this.value,function(data){
  //                   $('#filtersearch').html(data);
};
$('#value-gpa').change(function(){
    var gpa = this.value;
    $.get("ajax/filtersearch/"+gpa,function(data){
                    $('.filtersearch').html(data);});
});

// listen for unlock
// function unlockStartHandler() {
//     // clear raf if trying again
//     window.cancelAnimationFrame(rafID);
    
//     // set to desired value
//     currValue = +this.value;
// }

// function unlockEndHandler() {
    
//     // store current value
//     currValue = +this.value;
    
//     // determine if we have reached success or not
//     if(currValue >= maxValue) {
//         successHandler();
//     }
//     else {
//         rafID = window.requestAnimationFrame(animateHandler);
//     }
// }

// handle range animation
function animateHandler() {

    // calculate gradient transition
    var transX = currValue - maxValue;
    
    // update input range
    inputRange.value = currValue;

    //Change slide thumb color on mouse up
    if (currValue < 20) {
        inputRange.classList.remove('ltpurple');
    }
    if (currValue < 40) {
        inputRange.classList.remove('purple');
    }
    if (currValue < 60) {
        inputRange.classList.remove('pink');
    }
    
    // determine if we need to continue
    if(currValue > -1) {
      window.requestAnimationFrame(animateHandler);   
    }
    
    // decrement value
    currValue = currValue - speed;
}

// handle successful unlock
// function successHandler() {
//   alert('Unlocked');
// };

// bind events
// inputRange.addEventListener('mousedown', unlockStartHandler, false);
// inputRange.addEventListener('mousestart', unlockStartHandler, false);
// inputRange.addEventListener('mouseup', unlockEndHandler, false);
// inputRange.addEventListener('touchend', unlockEndHandler, false);

// move gradient
inputRange.addEventListener('input', function() {
    //Change slide thumb color on way up
    if (this.value > 20) {
        inputRange.classList.add('ltpurple');
    }
    if (this.value > 40) {
        inputRange.classList.add('purple');
    }
    if (this.value > 60) {
        inputRange.classList.add('pink');
    }

    //Change slide thumb color on way down
    if (this.value < 20) {
        inputRange.classList.remove('ltpurple');
    }
    if (this.value < 40) {
        inputRange.classList.remove('purple');
    }
    if (this.value < 60) {
        inputRange.classList.remove('pink');
    }
});

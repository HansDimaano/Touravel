//////~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
////-- JAVASCRIPT FOR THE IMAGE SLIDER IN HOME SCREEN


////-- VARIABLES FOR PAGE NAVIGATORS

const page = document.querySelector(".slide_container").children; // get all the pages from the slide container div by gettings its children

const prev_btn = document.querySelector(".left_arw_btn"); // get the left arrow button (prev)
const next_btn = document.querySelector(".right_arw_btn"); // get the right arrow button (next)

const navigator = document.querySelector(".navigator"); // for the dot navigator on the bottom of the screen

let page_index = 0; // for page index (knowing which page is active)

////-- VARIABLES FOR BUS AND DESIGN ANIMATION

let bus_faceRight = true; // bool for checking if the bus is supposed to face right or left

const topright_designs = document.getElementsByClassName("topright_dsgn");  // for getting all the top right designs (the green gloo-shaped design)
const bottomleft_designs = document.getElementsByClassName("botleft_dsgn");  // for getting all the bottom left designs (the green gloo-shaped design)

let startAngle = 'rotate(0deg)'; // variable for the start angle of design animation
let endAngle = 'rotate(0deg)'; // variable for the end angle of design animation



////-- EVENT LISTENERS FOR PREV AND NEXT BUTTONS

prev_btn.addEventListener("click", function () { // if users clicked prev button
    reset_autoPlay_Timer(); // call reset auto play timer function
    prevPage(); // call prevPage function
})

next_btn.addEventListener("click", function () { // if users clicked next button
    reset_autoPlay_Timer(); // call reset auto play timer function
    nextPage(); // call prevPage function
})


////-- FUNCTIONS FOR IMAGE SLIDER

function autoPlay() { // function for auto playing the slider
    nextPage(); // call the next page function
}

function prevPage() { // function for navigating to prev page

    if (page_index == 0) { // if page index is equals to 0 (first page)
        page_index = page.length - 1; // initialise page index to the max number of pages (page.length - 1)
    }
    else {
        page_index--; // decrement page index by 1
    }

    bus_faceRight = false;  // set bus facing right to true (navigated from right to left)

    changePage(); // call the change page function
}

function nextPage() { // function for navigating to next page

    if (page_index == page.length - 1) { // if page index is equals to the number of pages (page.length - 1)
        page_index = 0; // initialise page index to 0
    }
    else {
        page_index++; // increment page index by 1
    }

    bus_faceRight = true;  // set bus facing right to true (navigated from left to right)

    changePage(); // call the change page function
}

function changePage() { // function for changing the page display

    updatePageIndicator(); // call update page indicator function
    animateBus(); // call animate bus function
    animateDesign(); // call animate design function

    for (let i = 0; i < page.length; i++) { // for loop that iterates through the pages

        page[i].classList.remove("active"); // remove the "active" class from the active page
    }

    page[page_index].classList.add("active"); // assign the "active" class to the current page index
}

// declare an autoPlay_timer and set interval for autoPlay function for 15 seconds
let autoPlay_timer = setInterval(autoPlay, 15000);

function reset_autoPlay_Timer() { // function for resetting the autoplay timer

    clearInterval(autoPlay_timer); // clear the interval of autoplay timer
    autoPlay_timer = setInterval(autoPlay, 15000); // initialise autoPlay timer by setting interval for autoPlay function for 10 seconds
}

createDotNavigator(); // call create dot navigator

function createDotNavigator() { // function for creating the dots as navigator

    for (let i = 0; i < page.length; i++) { // for loop that iterates through the pages

        const dot = document.createElement("div"); // create a div inside the navigator div

        // set onclick attribute to dot with the indicatePage with (this) parameter
        dot.setAttribute("onclick", "indicatePage(this)");

        dot.id = i; // set dot id to i

        if (i == 0) { // if for loop is at first loop
            dot.className = "activeDot"; // set dot class to active
        }

        navigator.appendChild(dot); // append child of navigator to current dot
    }
}

function indicatePage(dot) { // function for indicating which dot was clicked and navigating to that page

    reset_autoPlay_Timer(); // call reset auto play timer function

    //// CHECK IF THE BUS SHOULD FACE RIGHT OR LEFT WHEN USERS USE THE DOT NAVIGATOR
    if (page_index == 6 && dot.id == 0) { // check if page is on last page and dot id is on first page (it means the loop is finished and we still want the bus to face right)
        bus_faceRight = true; // set bus facing right to true
    }
    else if (page_index > dot.id) { // check if page index is greater than dot id (navigated from left to right)
        bus_faceRight = false;  // set bus facing right to false
    }
    else { // the navigation must be from right to left
        bus_faceRight = true; // set bus facing right to true
    }

    page_index = dot.id; // initialise page_index to the dot's id value
    changePage(); // call change page function
}

function updatePageIndicator() { // function for update the page indicator (dot)

    for (let i = 0; i < navigator.children.length; i++) { // for loop that iterates through the length of navigator children

        navigator.children[i].classList.remove("activeDot"); // remove the "active" class from the active page indicator
    }

    navigator.children[page_index].classList.add("activeDot"); // assign the "active" class to navigator children[page_index]
}

// FUNCTIONS FOR ANIMATING BUS AND DESIGN

function animateBus() { // function for animating the bus

    let bus = document.querySelector(".activeDot"); // get the active dot in navigator (the bus)
    let startPoint = " "; // declare start point (for knowing if the animation will start on the left and right)
    let endPoint = " "; // declare end point (for knowing if the bus will face on left or right at the end of animation)

    if (bus_faceRight == true) { // check if bus is supposed to be facing right

        bus.style.setProperty("transform", "rotateY(0deg)"); // set the transform property of bus to face right
        startPoint = "translateX(-5px) rotateY(0deg)"; // initialise start point by starting from the left and facing right
        endPoint = "rotateY(0deg)"; // initialise end point by making the bus face right
    }
    else { // the bus must be facing left
        bus.style.setProperty("transform", "rotateY(180deg)"); // set the transform property of bus to face left
        startPoint = "translateX(5px) rotateY(180deg)"; // initialise start point by starting from the right and facing left
        endPoint = "rotateY(180deg)"; // initialise end point by making the bus face left
    }

    bus.animate([ // animate bus
        { transform: startPoint }, // start the animation from start point
        { transform: "translateX(0px) " + endPoint } // end the animation on its original position (translateX(0px)) and the end point value
    ], {
        duration: 1000, // animate for 1 second
    });
}

function animateDesign() { // function for animating the design (green gloo)

    /*
     NOTE:
        - Each emirate has a unique design angle
        - The top right design and bottom left design has the same angle
        - Only evaluated the top right designs id because the top right and bottom left design has the same angle 
        - Each emirates unique angle is also declared in HomePage.css (this is to ensure that if animation is finished, it'll stay at the same angle)
     */


    switch (topright_designs[page_index].id) { // evaluate topright designs[page_index] id
        case 'tr_auh': // abu dhabi
            endAngle = 'rotate(0deg)'; // initialise end angle to abu dhabi's unique angle
            break;
        case 'tr_dxb': // dubai
            endAngle = 'rotate(24deg)'; // initialise end angle to dubai's unique angle
            break;
        case 'tr_shj': // sharjah
            endAngle = 'rotate(64deg)'; // initialise end angle to sharjah's unique angle
            break;
        case 'tr_ajm': // ajman
            endAngle = 'rotate(12deg)'; // initialise end angle to ajman's unique angle
            break;
        case 'tr_uaq': // umm al quwain
            endAngle = 'rotate(128deg)'; // initialise end angle to umm al quwain's unique angle
            break;
        case 'tr_rak': // ras al-khaimah
            endAngle = 'rotate(75deg)'; // initialise end angle to ras al-khaimah's unique angle
            break;
        case 'tr_fuj': // fujairah
            endAngle = 'rotate(175deg)'; // initialise end angle to fujairah's unique angle
            break;
    }

    topright_designs[page_index].animate([ // animate top right design
        { transform: startAngle }, // start animation at start angle
        { transform: endAngle } // end animation at end angle
    ], {
        duration: 750, // animate for 0.75 seconds
    });

    bottomleft_designs[page_index].animate([
        { transform: startAngle }, // start animation at start angle
        { transform: endAngle } // end animation at end angle
    ], {
        duration: 750, // animate for 0.75 seconds
    });

    // initialise start angle to the value of end angle (to ensure that the next animation will start at the current design angle)
    startAngle = endAngle;
}
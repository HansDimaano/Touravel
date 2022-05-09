
////-- JAVASCRIPT FOR HEADER AND FOOTER (FOR IMPLEMENTING THE STICKY HEADER, ASSIGNING THE ACTIVE LINK IN HEADER, AND ASSIGNING THE BG IMAGE IN FOOTER)
// (partnered with Header and Footer css)


const header_navs = document.getElementsByTagName("header")[0].children; // get the header navigations (its children)
const header = document.getElementsByTagName("header")[0]; // get the header (used [0] because there is only 1 header in html and it means the header is first in the array)

const footer = document.getElementsByTagName("footer")[0]; // get the footer (used [0] because there is only 1 footer in html and it means the footer is first in the array)

const bg_image_filter = 'linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.9)), '; // set the filter for footer bg image to 0.7% darker



////-- IMPLEMENTING STICKY HEADER WHEN USER SCROLLS DOWN


function stickyHeader() { // function for checking if the header needs to be fixed on top

    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) { // check if users has scrolled down after 50px

        header.style.setProperty("animation", "none"); // set the animation property of header to none (that animation should only be seen once; during the navigation from other page to your current page)
        header.classList.add("sticky_header"); // assign the "sticky_header" class to the header
    }
    else { // the users can still see the header

        header.classList.remove("sticky_header"); // remove the "sticky_header" class from the header
    }
}

window.addEventListener('scroll', stickyHeader); // call the sticky header function when user scrolls




////-- ASSIGNING THE ACTIVE NAVIGATION LINK (the highlighted one)

/*
    header_navs Array Equivalent Values:

    header_navs[0]: Touravel Logo
    header_navs[1]: Home
    header_navs[2]: Seven Emirates
    header_navs[3]: About UAE
    header_navs[4]: Offers
    header_navs[5]: Our Story 

    (the same sequence as the users see in the page)
 */

////-- ASSIGNING THE BG IMAGE IN FOOTER

/*

    Note: Each page footer is always associated with a unique background image

 */

switch (document.title) { // evaluate the html title

    case "Touravel - Home": // case for home page
        header_navs[1].classList.add("active"); // assign the "active" class to home link
        break;

    case "Touravel - Seven Emirates": // case for seven emirates page
        header_navs[2].classList.add("active"); // assign the "active" class to seven emirates link
        footer.style.setProperty("background-image", bg_image_filter + "url(../images/sevenemirates_bg.png)"); // set the footer bg image to seven emirates bg image
        break;

    case "Touravel - About UAE": // case for about UAE page
        header_navs[3].classList.add("active"); // assign the "active" class to about UAE link
        footer.style.setProperty("background-image", bg_image_filter + "url(../images/aboutUAE_bg.png)"); // set the footer bg image to about UAE bg image
        break;

    case "Touravel - Offers": // case for offers page
        header_navs[4].classList.add("active"); // assign the "active" class to offers link
        footer.style.setProperty("background-image", bg_image_filter + "url(../images/offers_bg.png)"); // set the footer bg image to offers bg image
        break;

    case "Touravel - Our Story": // case for our story page
        header_navs[5].classList.add("active"); // assign the "active" class to our story link
        footer.style.setProperty("background-image", bg_image_filter + "url('../images/ourstory_bg.png')"); // set the footer bg image to our story bg image
        break;

    case "Touravel - Abu Dhabi": // case for abu dhabi page
        footer.style.setProperty("background-image", bg_image_filter + "url('../images/abudhabi_bg.jpg')"); // set the footer bg image to abu dhabi bg image
        break;

    case "Touravel - Dubai": // case for dubai page
        footer.style.setProperty("background-image", bg_image_filter + "url('../images/dubai_bg.png')"); // set the footer bg image to dubai bg image
        break;

    case "Touravel - Sharjah": // case for abu dhabi page
        footer.style.setProperty("background-image", bg_image_filter + "url('../images/sharjah_bg.png')"); // set the footer bg image to sharjah bg image
        break;

    case "Touravel - Ajman": // case for abu dhabi page
        footer.style.setProperty("background-image", bg_image_filter + "url('../images/ajman_bg.png')"); // set the footer bg image to ajman bg image
        break;

    case "Touravel - Umm Al Quwain": // case for uaq page
        footer.style.setProperty("background-image", bg_image_filter + "url('../images/uaq_bg.png')"); // set the footer bg image to uaq bg image
        break;

    case "Touravel - Ras Al-Khaimah": // case for rak page
        footer.style.setProperty("background-image", bg_image_filter + "url('../images/rak_bg.png')"); // set the footer bg image to rak bg image
        break;

    case "Touravel - Fujairah": // case for fujairah page
        footer.style.setProperty("background-image", bg_image_filter + "url('../images/fujairah_bg.png')"); // set the footer bg image to fujairah bg image
        break;
}

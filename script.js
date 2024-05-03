// Showing form on click event, Showing Sections
function showSection(sectionId) {
  const sections = document.querySelectorAll('.form-section');
  sections.forEach(section => {
    section.classList.remove('active');
  });
  document.getElementById(sectionId).classList.add('active');

  // Update sidebar to highlight the active section
  const sidebarLinks = document.querySelectorAll('.sidebar a');
  sidebarLinks.forEach(link => {
    link.classList.remove('active');
    if (link.href.includes(sectionId)) {
      link.classList.add('active');
    }
  });
}


// Code for Slideshow
let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    const slides = document.querySelectorAll('.slides img');
    const texts = document.querySelectorAll('.text'); // Select all text elements

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';  
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }    
    slides[slideIndex - 1].style.display = 'block';

    // Hide all text elements
    for (i = 0; i < texts.length; i++) {
        texts[i].style.display = 'none';  
    }

    // Show text corresponding to the current slide
    texts[slideIndex - 1].style.display = 'block';  

    setTimeout(showSlides, 4000); // Change image every 4 seconds (adjust as needed)
}


// Load page without reload, used on NavBar
function loadPage(pageUrl) {
  // Create a new XMLHttpRequest object
  var xhttp = new XMLHttpRequest();
  
  // Define the callback function to handle the response
  xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          // Update the content of the target section with the response from the specified page
          document.getElementById("content-container").innerHTML = this.responseText;
      }
  };
  
  // Open a GET request to the specified page
  xhttp.open("GET", pageUrl, true);
  
  // Send the request
  xhttp.send();
}

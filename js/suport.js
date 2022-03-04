let imageSection = document.getElementById("image_section");

imageSection.addEventListener("mouseover", function(ev) {

    imageSection.setAttribute("src", "../image/COVID-192.jpg");

});

imageSection.addEventListener("mouseout", function(ev) {

    imageSection.setAttribute("src", "../image/COVID-19.jpg");

});
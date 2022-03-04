let tnc_1_head = document.getElementById("condition-1-header");
let tnc_1_content = document.getElementById("condition-1-content");

tnc_1_head.addEventListener("mouseover", function(ev) {

    hideAll();
    tnc_1_content.style.display = "block";

});


let tnc_2_head = document.getElementById("condition-2-header");
let tnc_2_content = document.getElementById("condition-2-content");

tnc_2_head.addEventListener("mouseover", function(ev) {

    hideAll();
    tnc_2_content.style.display = "block";

});


let tnc_3_head = document.getElementById("condition-3-header");
let tnc_3_content = document.getElementById("condition-3-content");

tnc_3_head.addEventListener("mouseover", function(ev) {

    hideAll();
    tnc_3_content.style.display = "block";

});

function hideAll() {
    tnc_1_content.style.display = "none";
    tnc_2_content.style.display = "none";
    tnc_3_content.style.display = "none";
}
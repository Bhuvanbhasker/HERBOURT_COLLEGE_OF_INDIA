function toggleDropdown() {
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches('.menu-icon')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}



document.addEventListener("DOMContentLoaded", function() {
    var popupWrapper = document.querySelector(".popup-wrapper");
    var popup = document.querySelector(".popup");
    var closeBtn = document.querySelector(".close");

    // Show popup after 5 seconds (adjust the delay as needed)
    setTimeout(function() {
        popupWrapper.style.display = "block";
    }, 5000);

    // Close popup when close icon is clicked
    closeBtn.addEventListener("click", function() {
        popupWrapper.style.display = "none";
    });

    // Close popup when user clicks outside of the popup
    window.addEventListener("click", function(event) {
        if (event.target == popupWrapper) {
            popupWrapper.style.display = "none";
        }
    });
});

    


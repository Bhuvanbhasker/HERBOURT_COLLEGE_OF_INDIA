// function toggleDropdown() {
//     document.getElementById("myDropdown").classList.toggle("show");
// }

// window.onclick = function(event) {
//     if (!event.target.matches('.menu-icon')) {
//         var dropdowns = document.getElementsByClassName("dropdown-content");
//         for (var i = 0; i < dropdowns.length; i++) {
//             var openDropdown = dropdowns[i];
//             if (openDropdown.classList.contains('show')) {
//                 openDropdown.classList.remove('show');
//             }
//         }
//     }
// }


    function submitForm() {
        const form = document.getElementById('contactForm');
        const formData = new FormData(form);

        fetch('https://script.google.com/macros/s/AKfycbwxfnqK8LwLMFFbZjGd-KmyYxPIsuke-BcOZS67mGKrrLrXpLoAlpH3prsOOUuvpjAF/exec', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                 throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(data => {
            console.log(data); // You can handle success response here
            alert('Message sent successfully!');
            form.reset(); // Reset the form after successful submission
        })
        .catch(error => {
            console.error('There was a problem with your fetch operation:', error);
            alert('An error occurred while sending the message. Please try again later.');
        });
    }



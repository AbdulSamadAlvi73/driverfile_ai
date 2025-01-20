
const body = document.querySelector("body");
      modeToggle = body.querySelector(".mode-toggle");
      let sidebar = body.querySelector(".dashboard-sidebar");
      sidebarToggle = body.querySelector(".sidebar-toggle");

let getMode = localStorage.getItem("mode");
if(getMode && getMode ==="dark"){
    body.classList.toggle("dark");
}

sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if(sidebar.classList.contains("close")){
        localStorage.setItem("status", "close");
    }else{
        localStorage.setItem("status", "open");
    }
})
function setActiveClasses() {
    if(window.innerWidth<776){
        sidebar.classList.toggle("close")
    }
    const sidebarLinks = document.querySelectorAll('.sidebar-link');
    const currentPath = window.location.pathname; 
  
    sidebarLinks.forEach(link => {
        const linkPath = link.getAttribute('href');
        console.log(currentPath)
        console.log(linkPath)
        const currentPathLastPart = currentPath.substring(currentPath.lastIndexOf('/') + 1);
        const linkPathLastPart = linkPath.substring(linkPath.lastIndexOf('/') + 1);
        
        if (currentPathLastPart === linkPathLastPart) {
            link.classList.add('active');
            const activeLink = document.querySelector('.sidebar-link.active');
            const parentOfActiveLink = activeLink.parentElement;
            // parentOfActiveLink.style.backgroundColor = '#0062dd';
            parentOfActiveLink.style.border = '2px solid red';
            parentOfActiveLink.style.transformOrigin = 'left center';
            parentOfActiveLink.style.transform = 'scale(1.1,1.1)';
        } else {
            link.classList.remove('active');
        }
    });
}

document.addEventListener('DOMContentLoaded', setActiveClasses);




function formatPhoneNumber(input) {
        var cleaned = ('' + input).replace(/\D/g, '');
        var match = cleaned.match(/^(\d{3})(\d{3})(\d{4})$/);
        if (match) {
            return '(' + match[1] + ') ' + match[2] + '-' + match[3];
        }
        return null;
    }

    document.getElementById("signup-phone").addEventListener("input", function() {
        var input = this.value;
        var formatted = formatPhoneNumber(input);
        var regex = /^[0-9]+$/;

        if (formatted) {
            this.value = formatted;
            document.querySelector('.phone_err').innerText = '';
        } else {
            if (!regex.test(input)) {
                document.querySelector(".phone_err").innerText = "Only numeric characters are allowed.";
            } else {
                document.querySelector(".phone_err").innerText = "Please enter a valid American phone number";
            }
        }
    }); 
       function checkPasswordMatch() {
        var password = document.getElementById("signup-password").value;
        var confirmPassword = document.getElementById("signup-conpassword").value;

        if (password != confirmPassword) {
            document.querySelector('.conpassword_err').innerText = 'Passwords do not match';
            return false;
        } else {
            document.querySelector('.conpassword_err').innerText = '';
            return true;
        }
    }

    document.getElementById("signup-conpassword").addEventListener("input", function() {
        checkPasswordMatch();
    });

    document.getElementById("signup-password").addEventListener("focus", function() {
        if (this.value.length < 8) {
            document.querySelector('.password_err').style.display = 'block';
        } else {
            document.querySelector('.password_err').style.display = 'none';
        }
    });
    document.getElementById("signup-zipcode").addEventListener("input", function() {
        var input = this.value;
        var regex = /^\d{6}$/;

        if (!regex.test(input)) {
            document.querySelector(".zipcode_err").innerText = "Please enter a 6-digit zipcode.";
        } else {
            document.querySelector(".zipcode_err").innerText = "";
        }
    });

    document.getElementById("email").addEventListener("input", function() {
        var input = this.value;
        var errorSpan = document.querySelector(".email_err");

        if (!isValidEmail(input)) {
            errorSpan.textContent = "Please enter a valid email address.";
        } else {
            errorSpan.textContent = "";
        }
    });

    function isValidEmail(email) {
        var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }


    

    
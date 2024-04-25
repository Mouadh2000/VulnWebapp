const navBtn = document.querySelector('.header__collapse--btn');
const nav = document.querySelector('.nav');
const navWrapper = document.querySelector('.navWrapper');
const navClose = document.querySelector('.nav__close');


// Start nav Toggle
navBtn.addEventListener('click', () => {
    console.log(`object`);
    nav.classList.toggle('show');
    // navWrapper.classList.toggle('show-item');
});

navClose.addEventListener('click', (e) => {
    console.log(e.target.parentElement);
    nav.classList.remove('show');
    // navWrapper.classList.remove('show-item');
});

// End nav Toggle

// Start Toggle Header profile
const toggleProfileNav = document.querySelector('.header__profile');
const showProfileNav = document.querySelector('.header__profile__name--nav');
toggleProfileNav.addEventListener('click', () => {
    showProfileNav.classList.toggle('show');
});



variantOptionInput.forEach((input) => {
    input.addEventListener('focus', (e) => {
        e.target.parentElement.parentElement.style.border = '2px solid #5463c1';
    });
});

variantOptionInput.forEach((input) => {
    input.addEventListener('blur', (e) => {
        e.target.parentElement.parentElement.style.border = '';
    });
});


function submitXML() {
    var productname = document.getElementById("searchInput").value;

    // Construct XML data
    var xmlData = '<?xml version="1.0" encoding="ISO-8859-1"?>\n' +
                  '<products>\n' +
                  '    <productname>' + productname + '</productname>\n' +
                  '</products>';

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/tunisietelecom/search", true);

    // Set the Content-Type header to "application/xml"
    xhr.setRequestHeader("Content-Type", "application/xml");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };

    xhr.send(xmlData);
}


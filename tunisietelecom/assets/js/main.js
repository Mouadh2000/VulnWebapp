// Create style element
var style = document.createElement('style');
style.type = 'text/css';

// CSS styles
var css = `
  /* Style for the dropdown */
  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown button {
    border: none;
    background: transparent; /* Make button transparent */
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    padding: 12px;
    z-index: 1;
  }

  .dropdown-content input[type="text"] {
    width: 250px; /* Set width to 150px */
    padding: 8px;
    margin-bottom: 8px;
    box-sizing: border-box;
  }
`;

// Append CSS styles to style element
if (style.styleSheet) {
  // This is required for IE8 and below
  style.styleSheet.cssText = css;
} else {
  style.appendChild(document.createTextNode(css));
}

// Append style element to the head of the document
document.head.appendChild(style);

// JavaScript function to toggle dropdown
function toggleDropdown() {
  var dropdown = document.getElementById("dropdownContent");
  if (dropdown.style.display === "none" || dropdown.style.display === "") {
    dropdown.style.display = "block";
  } else {
    dropdown.style.display = "none";
  }
}

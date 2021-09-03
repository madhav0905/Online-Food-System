var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "none") {
      dropdownContent.style.display = "block";
    } else {
      dropdownContent.style.display = "none";
    }
  });
}
var dropdownn = document.getElementsByClassName("dropdown-btnn");
var i;

for (i = 0; i < dropdownn.length; i++) {
  dropdownn[i].addEventListener("click", function() {
    
    var dropdownContentt = this.nextElementSibling;
    if (dropdownContentt.style.display === "none") {
      dropdownContentt.style.display = "block";
    } else {
      dropdownContentt.style.display = "none";
    }
  });
};

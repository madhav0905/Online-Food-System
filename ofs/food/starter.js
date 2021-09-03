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
}
var sum=0;
var str;
function sub(id)
{
  str=document.getElementById(id).value;
    if(str>=1)
    {
    
      str=str-1;
      document.getElementById(id).value=str;
 
    }
 
}

function add(id)
{
  str=document.getElementById(id).value;
   if(parseInt(str,10)>=10)
   {
     alert("Max Limit reached!");
   }
   else
   {
     var str1=parseInt(str,10);
     str1=str1+1;
     str=str1.toString();
     document.getElementById(id).value=str1;
}
}
$(document).ready(function () {
 
  $('.dropdown-container a').click(function(e) { 
         if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
       window.location.hash = hash;
        });
       
  
      } 
    });
  });

 
  document.querySelector('#f1').addEventListener('submit', function(e) {
    var form = this;
    e.preventDefault();
      swal({
      title: 'Added to Cart!',
            
      icon: 'success'
        
      
      }).then(function() {
            form.submit();
          });
      
      });
      
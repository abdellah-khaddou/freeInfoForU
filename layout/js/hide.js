var expanded = false;


function showCheckboxes() {
    var checkboxes = document.getElementById("checkboxes");
   
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}


var tab =  document.querySelector('table');
var mytd = tab.getElementsByTagName('td'), i;
var form = document.getElementById("form");

var flag = false;
var down = false;
var x=1, el;
(function mousedown() {
    'use strict';
    var maxi, mini, x=0, j, r,m=0;
    for (i = 0; i < mytd.length; i++) {
        flag = true;
        if (i % 12 != 0) {
          
            
                mytd[i].onmousedown = function() {
                    down = true;
                    
                    
                }
                 mytd[i].onmousemove = function () {
                    if (flag && down) this.style.background = "red";
                    
                }
                mytd[i].onmouseup = function(){
                    flag = false;
                    form.style.display ="block";
                }
                
            }
       }
var closee = document.getElementById("close");
    closee.onclick = function(){
        this.parentElement.style.display = "none";
        flag = true;
        down = false;
        for (i = 0; i < mytd.length; i++) {

                    mytd[i].style.background = "white";
                    
             
            
       }
    }
        
 
})();
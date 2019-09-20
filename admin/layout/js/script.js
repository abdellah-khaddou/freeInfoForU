//show bar function

//show bar in dashbord 
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

var tab   =  document.querySelector('table');
var mytr  = tab.getElementsByTagName('tr'), i,j;
var mytd  = tab.getElementsByTagName('td')
var form  = document.getElementById("form");
var dispo = document.getElementById("dispo_hide");
var formG = document.getElementById("formGeneral");
var lundi = mytr[1].children, mardi = mytr[2].children, mercredi = mytr[3].children,jeudi = mytr[4].children;
var vendredi = mytr[5].children, samedi = mytr[6].children;
var flag  = false,move =true;
var down  = false;
var l=1,m1=1,m2=1,j=1,v=1,s=1,aux;
var element , jour ='',Njour,HeurDebut,HeurFin;
var hdebut = document.getElementById("hdebut");
var hfin   = document.getElementById("hfin");
var jours  = document.getElementById("jour");
var Ijour  = document.getElementById('jourInput');//pour hideen input jour
var closee = document.getElementById("close");
var detail = document.getElementById("detaile");
var deref = document.getElementById("detail");// hada ma3ndo hta gharad 
(function deplace(){
    
                    form.onmousedown = function() {
                       down =true;
                    }
                     form.onmousemove = function () {
                        if (flag && down){
                            this.style.left = event.clientX+"px";
                           
                        } 
                    }
                    form.onmouseup = function(){
                        move = false;
                        
                    }
                   
    
})();


function sendTemp(hd,hf,jour,Nmjour){
    if(hd>hf){
      aux = hd;
      hd  = hf;
      hf  = aux;    
    }
    switch(hd){
        case 1 : HeurDebut = "08:00" ;break;
        case 2 : HeurDebut = "09:00" ;break;
        case 3 : HeurDebut = "10:00";break;
        case 4 : HeurDebut = "11:00";break;
        case 5 : HeurDebut = "12:00";break;
        case 6 : HeurDebut = "13:00";break;
        case 7 : HeurDebut = "14:00";break;
        case 8 : HeurDebut = "15:00";break;
        case 9 : HeurDebut = "16:00";break;
        case 10: HeurDebut = "17:00";break;    
        case 11: HeurDebut = "18:00";break;    
    }
       switch(hf){
        case 1 : HeurFin  = "09:00" ;break;
        case 2 : HeurFin  = "10:00";break;
        case 3 : HeurFin  = "11:00";break;
        case 4 : HeurFin  = "12:00";break;
        case 5 : HeurFin  = "13:00";break;
        case 6 : HeurFin  = "14:00";break;
        case 7 : HeurFin  = "15:00";break;
        case 8 : HeurFin  = "16:00";break;
        case 9 : HeurFin  = "17:00";break;
        case 10: HeurFin  = "18:00";break;    
        case 11: HeurFin  = "19:00";break;    
    }
    
    
    jours.innerHTML= jour;
    Ijour.value   = Nmjour;
    hdebut.value   = HeurDebut;
    hfin.value     = HeurFin;
    
}
var retemp = true;
var color = 'v';
function mousedown(page,action,id,color1) {
    
    'use strict';
	
	if(color1 == 'select')color = 'select';
	else if(color1 == 'yellow')color = 'yellow';
	else if(color1 == 'red')color = 'red';	
    for (i = 1; i < 12; i++) {
        
             flag = true;
                if(m1 && m2 && j && v && s){
                    lundi[i].onmousedown = function() {
                       down =true;
                        l=0;
                        HeurDebut = this.cellIndex;
                    }
                     lundi[i].onmousemove = function () {
                        if (flag && down && m1 && m2 && j && v && s){
                          this.classList.add(color);
                          jour = "Lundi";
                          Njour = 1;    
                        } 
                    }
                    lundi[i].onmouseup = function(){
                        flag = false;
                        HeurFin = this.cellIndex;
                         if(retemp){
                            sendTemp(HeurDebut,HeurFin,jour,Njour);
                            retemp = false;
                            
                        }
                        form.style.display ="block";
                       
                    }
                   
                }
                if(l && m2 && j && v && s){
                    mardi[i].onmousedown = function() {
                       down =true;
                        m1=0;
                        HeurDebut = this.cellIndex;
                    }
                     mardi[i].onmousemove = function () {
                        if (flag && down && l && m2 && j && v && s){
                          this.classList.add(color);
                          jour = "Mardi";
                          Njour = 2;    
                        } 
                    }
                    mardi[i].onmouseup = function(){
                        flag = false;
                        HeurFin = this.cellIndex;
                         if(retemp){
                            sendTemp(HeurDebut,HeurFin,jour,Njour);
                            retemp = false;
                            
                        }
                        form.style.display ="block";
                       
                    }
                }
                if(l && m1 && j && v && s){
                    mercredi[i].onmousedown = function() {
                        down =true;
                        m2=0;
                        HeurDebut = this.cellIndex;
                    }
                     mercredi[i].onmousemove = function () {
                        if (flag && down && l && m1 && j && v && s){
                          this.classList.add(color);
                          jour = "Mercredi";
                          Njour=3;    
                            
                        } 
                    }
                    mercredi[i].onmouseup = function(){
                        flag = false;
                        HeurFin = this.cellIndex;
                         if(retemp){
                            sendTemp(HeurDebut,HeurFin,jour,Njour);
                            retemp = false;
                            
                        }
                        form.style.display ="block";
                        
                    }
                }
                if(l && m1 && m2 && v && s){
                    jeudi[i].onmousedown = function() {
                       down =true;
                        j=0;
                        HeurDebut = this.cellIndex;
                    }
                     jeudi[i].onmousemove = function () {
                        if (flag && down && l && m1 && m2 && v && s) {
                          this.classList.add(color);
                          jour = "Jeudi";
                          Njour =4;    
                        } 
                    }
                    jeudi[i].onmouseup = function(){
                        flag = false;
                        HeurFin = this.cellIndex;
                         if(retemp){
                            sendTemp(HeurDebut,HeurFin,jour,Njour);
                            retemp = false;
                            
                        }
                        form.style.display ="block";
                        
                    }
                }
                if(l && m1 && m2 && j && s){
                    vendredi[i].onmousedown = function() {
                        down =true;
                        v=0;
                        HeurDebut = this.cellIndex;
                    }
                     vendredi[i].onmousemove = function () {
                        if (flag && down && l && m1 && m2 && j && s){
                          this.classList.add(color);
                          jour = "Vendredi";
                          Njour=5;
                        } 
                    }
                    vendredi[i].onmouseup = function(){
                        flag = false;
                        HeurFin = this.cellIndex;
                         if(retemp){
                            sendTemp(HeurDebut,HeurFin,jour,Njour);
                            retemp = false;
                            
                        }
                        form.style.display ="block";
                    
                    }
                }
                if(l && m1 && m2 && j && v ){
                    samedi[i].onmousedown = function() {
                       down =true;
                        s=0;
                        HeurDebut = this.cellIndex;
                    }
                     samedi[i].onmousemove = function () {
                        if (flag && down && l && m1 && m2 && j && v){
                          this.classList.add(color);
                          jour = "Samedi";
                          Njour=6;
                        } 
                    }
                    samedi[i].onmouseup = function(){
                        flag = false;
                        HeurFin = this.cellIndex;
                         if(retemp){
                            sendTemp(HeurDebut,HeurFin,jour,Njour);
                            retemp = false;
                            
                        }
                        form.style.display ="block";
                        
                         
                        
                    }
                }                   
              
                
                
            
       }
	if(page == "prof"){
		
		if(action == "Add"){
		   formG.action = 'pageprof.php?do=add&profid='+id;
		}
		if(action == "Edit"){
		   formG.action = 'pageprof.php?do=edit&profid='+id;
		}
		if(action == "Delete"){
		   formG.action = 'pageprof.php?do=delete&profid='+id;
		   dispo.className = "hide";

		}
	}else if(page =="filier"){
		if(action == "Add"){
		   formG.action = 'editgroupe.php?do=add&grpid='+id;
		}
		if(action == "Edit"){
		   formG.action = 'editgroupe.php?do=edit&grpid='+id;
		}
		if(action == "Delete"){
		   formG.action = 'editgroupe.php?do=delete&grpid='+id;
		   //dispo.className = "hide";
		   detail.style.display="none";
		   detail.hidden = true;

		}
	}else if(page =="salle"){
		if(action == "Add"){
		   formG.action = 'editsalle.php?do=add&sallid='+id;
		}
		if(action == "Edit"){
		   formG.action = 'editsalle.php?do=edit&sallid='+id;
		}
		if(action == "Delete"){
		   formG.action = 'editsalle.php?do=delete&sallid='+id;
		   //dispo.className = "hide";
		   detail.style.display="none";
		   detail.hidden = true;

		}
	}

// function for close forme 
 closee.onclick = function(){
	this.parentElement.style.display = "none";
	flag = true;
	down = false;
	l=1,m1=1,m2=1,j=1,v=1,s=1;
	for (i = 0; i < mytd.length; i++) {

		 var res = mytd[i].classList.contains(color);
		
		 if(res)mytd[i].classList.remove(color);
				retemp =true;


   }
}   
// if first function not working
 closee.addEventListener('touchstart',close());
 function close(){
	closee.parentElement.style.display = "none";
	flag = true;
	down = false;
	l=1,m1=1,m2=1,j=1,v=1,s=1;
	for (i = 0; i < mytd.length; i++) {

		 var res = mytd[i].classList.contains(color);
		
		 if(res)mytd[i].classList.remove(color);
				retemp =true;


   }
} 
 
        


   
        
 
}
       var deltaX ;
       var deltaY ;
       var divOverlay = document.getElementById ("form");
        var isDown = false;
        
        divOverlay.addEventListener('mousedown', function(e) {
            isDown = true;
            deltaX = event.pageX - this.offsetLeft;
            deltaY = event.pageY - this.offsetTop;
            
        }, true);

        document.addEventListener('mouseup', function() {
          isDown = false;
        }, true);

        document.addEventListener('mousemove', function(event) {
           event.preventDefault();
           if (isDown) {
           
          var rect = divOverlay.getBoundingClientRect();
          divOverlay.style.left = event.x - deltaX + 'px';
          divOverlay.style.top  = event.y - deltaY + 'px';
         }
        }, true);

   
    
        
    var ifdispo= document.getElementById("if_dispo");
     function showdiv(select){
       if(select.value == 1){
           ifdispo.style.display = "block";
       }else{
           ifdispo.style.display = "none";
       }
     }
   
<?php
	session_start();
	if(isset($_SESSION['root'])){
		
	
	$navbar = " ";
	$pageTitle="Cours";
	include "init.php";
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>

 

<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>

$(document).ready( function () {
    $('#myTable').DataTable();
} );
 </script>


    <div class="div-r" style="float:right">
     
			
			<!-- start table -->
            <div class="container" style="padding:63px;width: 100%;">
                <div>
                    <div style="margin:28px;">
                        <div class="text-right d-block d-lg-flex flex-row-reverse"><button class="btn btn-secondary shadow" type="button" onclick="document.getElementById('id01').style.display='block'" style="width: 98px;">Ajouter</button></div>
                    </div>
                </div>
			<table id="myTable" class="table table-responsive table-hover  table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                 <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>Cours</th>
                        <th>Module</th>
                        <th>Flier</th>
                        <th>Specialite</th>
                        <th>Éditeur</th>
                        <th>Description</th>
                        
            </tr>
        </thead>
        <tbody>
            
            <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Analyse 1</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
              <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.ali</td>
                            <td>Programation 1</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
             <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
                 <tr>
                 <td style="height:15px;" align="center">
                             <button  onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit" ></i></button>
                              <button  onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash" ></i></button>
                            
                             
                            
                            </td>
                  <td class="hidden-xs">1</td>
                            <td>Cours ? Pr.Houimdi</td>
                            <td>Calcul differentiell</td>
                            <td>Mathematiques</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
            </tr>
                       
           
  
        </tbody>
    </table></div>
        </div>
    </div>
    <div id="id01" class="modal" style="font-size: 16px;">
        <form class="modal-content" style="width: 50%;height: auto;">
            <div class="d-flex flex-column" style="/*height: 21%;*/">
                <div class="imgcontainer">  <span onclick="document.getElementById('id01').style.display='none'" class="close shadow-lg" title="Close Modal">&times;</span>
   <img src="assets/img/new.png" alt="Avatar" class="avatar"></div>
                <div class="container" style="width: 95%;height: 100%;"> <label for="uname"><b>Cours :</b></label>
  <input class="form-control" type="text" placeholder="Enter le nom de cour" name="nom_cours" required>

<label ><b>Specialité :</b></label>
<div class="input-group mb-3">
  <select class="custom-select" id="inputGroupSelect01" required>
    <option value="">Choosir la specialité correspondent...</option>
    <option value="1">Science</option>
    <option value="2"> Droit</option>
    <option value="3">Lettre</option>
  </select>
  
</div>


 
<label ><b>Filièr :</b></label>
<div class="input-group mb-3">
 
  <select class="custom-select" id="inputGroupSelect02" name="spec" required >
    <option value="">Choosir la filier correspondent...</option>
    <option value="1">Mathematiques</option>
    <option value="3">Informatique</option>
    <option value="2">Physique</option>
    <option value="3">Biologie</option>
    <option value="3">Géologie</option>
  </select>
  
</div>



<label ><b>Description :</b></label>
<div class="input-group">
  <textarea class="form-control" aria-label="With textarea" required></textarea>
</div>                 


<div class="d-flex d-sm-flex flex-row  flex-wrap justify-content-sm-center" style="margin-top:20px">      
<button type="submit"class="btn btn-success shadow" style="width:83px;padding:7px;margin-left: 30px;">Confirmer</button>
<button type="button" class="btn btn-danger shadow"style="width:83px;padding:7px;margin-left: 30px;"onclick="document.getElementById('id01').style.display='none'">Cancel</button>
</div>
 </div>
            </div>
        </form>
    </div>
    <div id="id02" class="modal" style="font-size: 16px;">
        <form class="modal-content" style="width: 50%;height: auto;">
            <div class="d-flex flex-column" style="/*height: 21%;*/">
                <div class="imgcontainer">  <span onclick="document.getElementById('id02').style.display='none'" class="close shadow-lg" title="Close Modal">&times;</span>
   <img src="assets/img/reglage.png" alt="Avatar" class="avatar"></div>
                <div class="container" style="width: 95%;height: 100%;"> <label for="uname"><b>Cours :</b></label>
  <input class="form-control" type="text" placeholder="Enter le nom de cour" name="nom_cours" required>
  <!--
  <label for="uname"><b>Module</b></label>
  <input type="password" placeholder="Enter le nom de module" name="umame" required>

  <label  for="uname"><b>Specialité</b></label>
  <input   type="text" placeholder="Enter le nom de specialité" name="uname" required>
 
<div class="dropdown drop">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Speciatité
  </button>
  <div class="dropdown-menu drop" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Action</button>
    <button class="dropdown-item" type="button">Another action</button>
    <button class="dropdown-item" type="button">Something else here</button>
  </div>
</div>
-->
<label ><b>Specialité :</b></label>
<div class="input-group mb-3">
  <select class="custom-select" id="inputGroupSelect01" required>
    <option value="">Choosir la specialité correspondent...</option>
    <option value="1">Science</option>
    <option value="2"> Droit</option>
    <option value="3">Lettre</option>
  </select>
  
</div>


 
<label ><b>Filièr :</b></label>
<div class="input-group mb-3">
 
  <select class="custom-select" id="inputGroupSelect02" name="spec" required >
    <option value="">Choosir la filier correspondent...</option>
    <option value="1">Mathematiques</option>
    <option value="3">Informatique</option>
    <option value="2">Physique</option>
    <option value="3">Biologie</option>
    <option value="3">Géologie</option>
  </select>
  
</div>



<label ><b>Description :</b></label>
<div class="input-group">
  <textarea class="form-control" aria-label="With textarea" required></textarea>
</div>                 


<div class="d-flex d-sm-flex flex-row  flex-wrap justify-content-sm-center" style="margin-top:20px">      
<button type="submit"class="btn btn-success shadow" style="width:83px;padding:7px;margin-left: 30px;">Confirmer</button>
<button type="button" class="btn btn-danger shadow"style="width:83px;padding:7px;margin-left: 30px;"onclick="document.getElementById('id02').style.display='none'">Cancel</button>
</div>
 </div>
            </div>
        </form>
    </div>
    <div id="id03" class="modal" style="font-size:16px;width:100%;">
        <form class="modal-content animate" style="width: 52%;height: 320px;">
            <div class="imgcontainer" style="height:50%;">  <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
   <img src="assets/img/delet.jpg" alt="Avatar" class="avatar" style="height:100px"></div>
            <div class="container" style="width:auto;"> <label ><b>Voulez-vous vraiment supprimer cette specialité ? </b></label>
     <div class="modal-footer">
        <button type="button" class="btn btn-secondary">Oui</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="document.getElementById('id03').style.display='none'" >Non</button>
      </div>
 </div>
        </form>
    </div><script>
// on click out the modal ,close it
var modal = document.getElementById('id01');
  var modal1 = document.getElementById('id02');
  var modal2 = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
  if (event.target == modal1) {
        modal1.style.display = "none";
    }
  if (event.target == modal2) {
        modal2.style.display = "none";
    }
}


$(document).ready(function () {
$('#dtDynamicVerticalScrollExample').DataTable({
"scrollY": "50vh",
"scrollCollapse": true,
});
$('.dataTables_length').addClass('bs-select');
});
  
  
//Search bar in th table rechercher()
function rechercher() {
  var input, filter, table, tr, td,tdd,tddd, i, txtValue,txtValueI,txtValueII,x,z,y;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  
  
  
  for (i = 0; i < tr.length; i++) {
   
    td = tr[i].getElementsByTagName("td")[2];
    tdd = tr[i].getElementsByTagName("td")[3];
      tddd = tr[i].getElementsByTagName("td")[4];
    	
    if (td) {
      	
        txtValue = td.textContent || td.innerText;
		
       z=txtValue.toUpperCase().indexOf(filter);
       
       
      if (tdd) {
      
      txtValueI = tdd.textContent || tdd.innerText;
		
      x=txtValueI.toUpperCase().indexOf(filter);
      
      if(tddd){
       txtValueII = tddd.textContent || tddd.innerText;
		
      y=txtValueII.toUpperCase().indexOf(filter);
      
      if (z>-1 ||x>-1||y>-1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
      }
       
    	
      }
    }       
  }
  
  
  
}
  

</script>


<?php
		}else{
			header("location:index.php");
			exit();
	}
		include $tpl.'footer.php';
?>
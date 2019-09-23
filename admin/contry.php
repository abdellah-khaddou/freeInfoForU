<?php
	$navbar = "";
	$pageTitle = "countries";
	include "init.php";

?>

    <div class="div-r" style="float:right">
        <div class="page-content-wrapper" style="width:100%">

            <div class="container" style="width:100%;">
                <div>
                    <div>
                        <div class="text-right d-block d-lg-flex flex-row-reverse">
                            <!--          btn  ajouter country       -->
                            <button class="btn btn-secondary shadow" type="button" onclick="document.getElementById('id01').style.display='block'" style="width: 98px;">Ajouter</button>
                        </div>
                    </div>
                    <input type="text" class="shadow" onkeyup="rechercher()" placeholder="Rechercher...." id="myInput" />
                </div>

              
<!--******************************************************+

                    START TABLE

*******************************************************-->

                <table id="myTable" style="display:inline-table" class="table table-responsive table-hover  table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th style="max-width:100px"><em class="fa fa-cog"></em></th>
                            <th class="hidden-xs">#N</th>
                            <th>Payé</th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td align="center" style="max-width: 30px;">
                                <button onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit"></i></button>
                                <button onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash"></i></button>

                            </td>
                            <td class="hidden-xs">1</td>
                            <td>Maroc</td>

                        </tr>

                    </tbody>
                </table>
            </div>

          
          
<!--    ***************************************

Modal add new country  id= id01

***********************************************-->

            <div id="id01" class="modal" style="font-size: 16px;top: 60px;">
                <form class="modal-content" style="width: 50%;height: auto;">
                    <div class="d-flex flex-column" style="/*height: 21%;*/">
                        <div class="imgcontainer"> <span onclick="document.getElementById('id01').style.display='none'" class="close shadow-lg" title="Close Modal">&times;</span>
                            <img src="layout/css/img/new.png" alt="Avatar" class="avatar"></div>
                        <div class="container" style="width: 95%;height: 100%;">
                            <label for="uname"><b>Country name :</b></label>
                            <input class="form-control" type="text" placeholder="veuillez enter le nom de payer ici " name="country_name" required>

                            <div class="d-flex d-sm-flex flex-row  flex-wrap justify-content-sm-center" style="margin-top:20px">
                                <button type="submit" class="btn btn-success shadow" style="width:83px;padding:7px;margin-left: 30px;">Confirmer</button>
                                <button type="button" class="btn btn-danger shadow" style="width:83px;padding:7px;margin-left: 30px;" onclick="document.getElementById('id01').style.display='none'">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

          
          
 <!--    ***************************************

Modal Edit  country  id= id02

***********************************************-->

            <div id="id02" class="modal" style="font-size: 16px;top: 60px;">
                <form class="modal-content" style="width: 50%;height: auto;">
                    <div class="d-flex flex-column" style="/*height: 21%;*/">
                        <div class="imgcontainer"> <span onclick="document.getElementById('id02').style.display='none'" class="close shadow-lg" title="Close Modal">&times;</span>
                            <img src="layout/css/img/reglage.png" alt="Avatar" class="avatar"></div>
                        <div class="container" style="width: 95%;height: 100%;">
                            <label for="uname"><b>Country name :</b></label>
                            <input class="form-control" type="text" placeholder="veuillez enter le noveau  nom de payer ici " name="country_name" required>

                        </div>

                        <div class="d-flex d-sm-flex flex-row  flex-wrap justify-content-sm-center" style="margin-top:20px">
                            <button type="submit" class="btn btn-success shadow" style="width:83px;padding:7px;margin-left: 30px;">Confirmer</button>
                            <button type="button" class="btn btn-danger shadow" style="width:83px;padding:7px;margin-left: 30px;" onclick="document.getElementById('id02').style.display='none'">Cancel</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>

      
      
<!--    ***************************************

Modal Delet  country  id= id03

***********************************************-->

        <div id="id03" class="modal" style="font-size:16px;width:100%;top: 60px;">
            <form class="modal-content animate" style="width: 52%;height: 320px;">
                <div class="imgcontainer" style="height:50%;"> 
                    <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="layout/css/img/delet.jpg" alt="Avatar" class="avatar" style="height:100px"></div>
                <div class="container" style="width:auto;">
                    <label><b>Voulez-vous vraiment supprimer cette payer ? </b></label>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary">Oui</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="document.getElementById('id03').style.display='none'">Non</button>
                    </div>
                </div>
            </form>


            
            
            
            
            

<!--    ***************************************

     			     Fotter

***********************************************-->          
<?php

	include $tpl.'footer.php';
?>
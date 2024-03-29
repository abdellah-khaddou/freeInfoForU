<?php
	$navbar = "";
	$pageTitle = "Specialités";
	include "init.php";

?>

    <div class="div-r" style="float:right">
        <div class="page-content-wrapper" style="width:100%">

            <div class="container" style="width:100%;">
                <div>
                    <div>
                        <div class="text-right d-block d-lg-flex flex-row-reverse">
                            <button class="btn btn-secondary shadow" type="button" onclick="document.getElementById('id01').style.display='block'" style="width: 98px;">Ajouter</button>
                        </div>
                    </div>
                    <input type="text" class="shadow" onkeyup="rechercher()" placeholder="Rechercher...." id="myInput" />
                </div>


<!-- ****************************************************

START TABLE

********************************************************-->
             <div style="overflow:auto">
                <table id="myTable" style="display: inline-table" class="table table-responsive table-hover  table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th><em class="fa fa-cog"></em></th>
                            <th class="hidden-xs">Nº</th>
                            <th>Nom de specialité</th>
                            <th>Responsables (1..*)</th>
                            <th>Country</th>
                            <th>Description</th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td align="center" >
                                <button onclick="document.getElementById('id02').style.display='block'" class="btn btn-success raw-btn" type="button"><i class="fa fa-edit"></i></button>
                                <button onclick="document.getElementById('id03').style.display='block'" class="btn btn-danger raw-btn" type="button"><i class="fa fa-trash"></i></button>

                            </td>
                            <td class="hidden-xs">1</td>
                            <td>Sciences</td>
                            <td>Amine Boutalaght</td>
                            <td>Maroc</td>
                            <td>Sciences et Techniques est un cursus de formation comprenant </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            </div>


<!--***********************************************

Modal Add  new specialité  id= id01

***********************************************-->

            <div id="id01" class="modal" style="font-size: 16px;top:60px">
                <form class="modal-content" style="width: 50%;height: auto;">
                    <div class="d-flex flex-column" style="/*height: 21%;*/">
                        <div class="imgcontainer"> <span onclick="document.getElementById('id01').style.display='none'" class="close shadow-lg" title="Close Modal">&times;</span>
                            <img src="layout/css/img/new.png" alt="Avatar" class="avatar"></div>
                        <div class="container" style="width: 95%;height: 100%;">
                            <label for="uname"><b>Nom de specialité :</b></label>
                            <input class="form-control" type="text" placeholder="Veuillez enter le nom de specialité " name="nom_s" required>

                            <label><b>Responsable :</b></label>
                            <div class="input-group mb-3">

                                <select class="custom-select" id="inputGroupSelect02" name="res" required>
                                    <option value="">Choosir le respensable...</option>
                                    <option value="1">Red One</option>
                                    <option value="2">Said Danni</option>
                                    <option value="3">Simo Kimo</option>
                                </select>

                            </div>
                            <label><b>Payé :</b></label>
                            <div class="input-group mb-3">

                                <select class="custom-select" id="inputGroupSelect02" name="paye" required>
                                 <!--   <option value="">Choosir la payé correspondent...</option>  -->
                                    <option value="">Maroc</option>

                                </select>

                            </div>

                            <label><b>Description :</b></label>
                            <div class="input-group">
                                <textarea class="form-control" aria-label="With textarea" required></textarea>
                            </div>

                            <div class="d-flex d-sm-flex flex-row  flex-wrap justify-content-sm-center" style="margin-top:20px">
                                <button type="submit" class="btn btn-success shadow" style="width:83px;padding:7px;margin-left: 30px;">Confirmer</button>
                                <button type="button" class="btn btn-danger shadow" style="width:83px;padding:7px;margin-left: 30px;" onclick="document.getElementById('id01').style.display='none'">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>



<!--***********************************************

Modal Edit  specialité  id= id02

***********************************************-->

            <div id="id02" class="modal" style="font-size: 16px;top:60px">

                <form class="modal-content" style="width: 50%;height: auto;">

                    <div class="d-flex flex-column" style="/*height: 21%;*/">
                        <div class="imgcontainer"> <span onclick="document.getElementById('id02').style.display='none'" class="close shadow-lg" title="Close Modal">&times;</span>
                            <img src="layout/css/img/reglage.png" alt="Avatar" class="avatar"></div>
                        <div class="container" style="width: 95%;height: 100%;">
                            <label for="uname"><b>Nom de specialité :</b></label>
                            <input class="form-control" type="text" value="Science " name="nom_s" required >

                            <label><b>Responsable :</b></label>
                            <div class="input-group mb-3">

                                <select class="custom-select" id="inputGroupSelect02" name="resp" required>
                                    <option value="">Choosir le respensable...</option>
                                    <option value="1">Red One</option>
                                    <option value="2">Said Danni</option>
                                    <option value="3">Simo Kimo</option>
                                </select>

                            </div>
                            <label><b>Payé :</b></label>
                            <div class="input-group mb-3">

                                <select class="custom-select" id="inputGroupSelect02" name="paye" required>
                              <!--      <option value="">Choosir la payé correspondent...</option>  -->
                                    <option value="1">Maroc</option>

                                </select>

                            </div>

                            <label><b>Description :</b></label>
                            <div class="input-group">
                                <textarea class="form-control" aria-label="With textarea" required></textarea>
                            </div>

                            <div class="d-flex d-sm-flex flex-row  flex-wrap justify-content-sm-center" style="margin-top:20px">
                                <button type="submit" class="btn btn-success shadow" style="width:83px;padding:7px;margin-left: 30px;">Confirmer</button>
                                <button type="button" class="btn btn-danger shadow" style="width:83px;padding:7px;margin-left: 30px;" onclick="document.getElementById('id02').style.display='none'">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>



<!--***********************************************

Modal delet  specialité  id= id3

***********************************************-->

            <div id="id03" class="modal" style="font-size:16px;width:100%;top:60px">
                <form class="modal-content animate" style="width: 52%;height: 320px;">
                    <div class="imgcontainer" style="height:50%;"> <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <img src="layout/css/img/delet.jpg" alt="Avatar" class="avatar" style="height:100px"></div>
                    <div class="container" style="width:auto;">
                        <label><b>Voulez-vous vraiment supprimer cette specialité ? </b></label>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary">Oui</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="document.getElementById('id03').style.display='none'">Non</button>
                        </div>
                    </div>
                </form>
            </div>



<!--***********************************************
            Fotter
***********************************************-->         
            
        </div>
</div>
    
<?php

	include $tpl.'footer.php';
?>
<?php
	$navbar = "";
	$pageTitle = "Dashbord";
	include "init.php";
?>
    <div class="div-r" style="float:right">
        
    
        <div class="page-content-wrapper" style="width: 100%;">
            <div class="container-fluid" style="width: 100%;">
                
                <div
                    class="text-center d-flex flex-row justify-content-center flex-wrap justify-content-sm-center justify-content-xl-center" style="padding-right: 20px;max-width: 100%;">
                    <form style="max-width: 95%;margin-bottom: 20px;">
                        <div class="form-row profile-row">
                            <div class="col-md-4 relative">
                                <div class="avatar">
                                    <div class="avatar-bg center" style="background-image: url(&quot;assets/img/user.jpg&quot;);"></div>
                                </div><input type="file" class="form-control" name="avatar-file" required="" accept="image/*" style="margin-top: 15px;margin-bottom: 15px;"></div>
                            <div class="col-md-8">
                                <h1 id="user" style="margin-top: 15px;">Redouan Eddafali</h1>
                                <hr>
                                <div class="form-row d-flex flex-row justify-content-center justify-content-xl-center">
                                    <div class="col-sm-12 col-md-6" style="margin-right: 15px;margin-left: 15px;max-width: 30%;">
                                        <div class="form-group"><label>First name </label><input class="form-control" type="text" name="lastname" required="" minlength="4" maxlength="20" inputmode="latin-name" value="Redouan" disabled=""></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6" style="max-width: 30%;margin-left: 15px;margin-right: 15px;">
                                        <div class="form-group"><label>Lastname </label><input class="form-control side-bar" type="text" name="lastname" required="" minlength="4" maxlength="20" inputmode="latin-name" value="Eddafalli" disabled=""></div>
                                    </div>
                                </div>
                                <div class="form-row d-xl-flex justify-content-xl-center" style="max-width: 100%;">
                                    <div class="col-sm-12 col-md-6 d-flex flex-row flex-wrap justify-content-xl-center" style="max-width: 30%;">
                                        <div class="form-group text-left" style="padding-left: 15px;padding-right: 15px;"><label class="d-xl-flex justify-content-xl-center">Admin</label><select class="form-control"><option value="2" selected="">Responsable</option><option value="3">Superviseur</option><option value="">Admin</option></select></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 d-flex flex-row flex-wrap justify-content-xl-center" style="max-width: 30%;">
                                        <div class="form-group text-left" style="padding-left: 15px;padding-right: 15px;"><label class="d-xl-flex justify-content-xl-center">Specialité</label><select class="form-control"><option value="1" selected="">Science</option><option value="2">Droit</option><option value="">Lettre</option></select></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 d-flex flex-row flex-wrap justify-content-xl-center" style="max-width: 30%;">
                                        <div class="form-group text-left" style="padding-left: 15px;padding-right: 15px;"><label class="d-xl-flex justify-content-xl-center">Departement</label><select class="form-control"><option value="2" selected="">SMP-SMC</option><option value="2" selected="">SMA</option><option value="">SMI</option><option value="4">BIO</option><option value="5">GEO</option></select></div>
                                    </div>
                                </div>
                                <div class="form-group"><label>Email </label><input class="form-control" type="email" autocomplete="off" required="" inputmode="email"></div>
                                <div class="form-row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group"><label>&nbsp;Password </label><input class="form-control" type="password" name="password" autocomplete="off" required="" minlength="10" maxlength="30"></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group"><label>New Password</label><input class="form-control" type="password" name="confirmpass" autocomplete="off" required=""></div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <div class="col-md-12 content-right"><button class="btn btn-primary shadow form-btn" type="submit">SAVE </button><button class="btn btn-danger shadow form-btn" type="reset">CANCEL </button></div>
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
    </div>
<?php include $tpl.'footer.php';?>
<?php
	session_start();
	if(isset($_SESSION['root'])){
		
	
	$navbar = "";
	$pageTitle = "Dashbord";
	include "init.php";
?>
<div>	
    <div>
        <div class="page-content-wrapper">
            <div class="container-fluid">
                
                <div>
                    <div class="row justify-content-center">
                        <div class="col" style="position:initial;">
                            <div class="row space-rows" style="width: 90%;">
                                <div class="col" style="margin-right: 15px;margin-bottom: 15px;">
                                    <div class="card cards-shadown cards-hover" data-aos="fade-down" data-aos-duration="800">
                                        <div class="card-header text-center" style="height: 45px;"><span class="space"><i class="fa fa-cloud-download" id="download-icon"></i></span></div>
                                        <div class="card-body text-center">
                                            <p class="card-text cardbody-sub-text">20034</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col" style="margin-right: 15px;margin-bottom: 15px;">
                                    <div class="card cards-shadown cards-hover" data-aos="fade-down" data-aos-duration="800">
                                        <div class="card-header text-center" style="height: 45px;"><span class="space"><i class="fa fa-thumbs-o-up" id="download-icon"></i></span></div>
                                        <div class="card-body text-center">
                                            <p class="card-text cardbody-sub-text">6324</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col" style="margin-right: 15px;margin-bottom: 15px;">
                                    <div class="card cards-shadown cards-hover" data-aos="fade-down" data-aos-duration="800">
                                        <div class="card-header text-center" style="height: 45px;"><span class="space"><i class="fa fa-suitcase" id="download-icon"></i></span></div>
                                        <div class="card-body text-center">
                                            <p class="card-text cardbody-sub-text">784</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col" style="margin-right: 15px;margin-bottom: 15px;">
                                    <div class="card cards-shadown cards-hover" data-aos="fade-down" data-aos-duration="800">
                                        <div class="card-header text-center" style="height: 45px;"><span class="space"><i class="fa fa-dollar" id="download-icon"></i></span></div>
                                        <div class="card-body text-center">
                                            <p class="card-text cardbody-sub-text">73423</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center" style="max-width: 100%;">
                                <div class="col" style="max-width: 90%;margin-left: 40px;min-width: 320px;">
  <div class="posChart shadow">
    <canvas  id="myChart"></canvas>
  </div>

  </div>
                            </div>
                        </div>
                        <div class="col side" style="color: rgb(113,213,53);max-width: 18%;margin-right: 30px;min-width: 170px;">
                            <div data-aos="fade-left" data-aos-duration="2250">
                                <div class="social-box facebook"><i class="fa fa-facebook"></i>
                                    <ul>
                                        <li><strong> 123k</strong><span>Friends</span></li>
                                        <li><strong> 745k</strong><span>followers</span></li>
                                    </ul>
                                </div>
                                <div class="social-box google-plus"><i class="fa fa-google-plus"></i>
                                    <ul>
                                        <li><strong> 123k</strong><span>Friends</span></li>
                                        <li><strong> 745k</strong><span>followers</span></li>
                                    </ul>
                                </div>
                                <div class="social-box twitter"><i class="fa fa-twitter"></i>
                                    <ul>
                                        <li><strong> 453k</strong><span>Friends</span></li>
                                        <li><strong> 745k</strong><span>followers</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex flex-row justify-content-center flex-wrap buttom-chart" style="width: 100%;margin-left: 20px;margin-right: 20px;max-width: 98%;">
                        <div class="col" style="max-width: 50%;margin-top: 15px;margin-bottom: 15px;height: 250px;min-width: 320px;margin-right: 15px;">  <div class="posChart shadow">
							<canvas  id="lineChart"></canvas>
						  </div>
						</div>
                        <div class="col cha" style="max-width: 50%;margin-top: 15px;margin-bottom: 15px;min-width: 320px;margin-right: 15px;">  <div class="posChart shadow">
							<canvas  id="PieChart"></canvas>
						  </div>
						</div>
                    </div>
                </div>
            </div>
        </div>
			
    </div>
   </div>	 
<?php
	}else{
		header("location:index.php");
		exit();
		}
	include $tpl.'footer.php';
?>
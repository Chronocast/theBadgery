<!--
    /*
	*Author: Nate Hascup & Patrick Callahan
	*Greenriver IT 328
	*Badgery userHome.html
	*/
-->

<?php echo $this->render('pages/header.html',NULL,get_defined_vars(),0); ?>
		<!---//End-header---->			
				<!-- These are our grid blocks 	---->

							
						<!-- begin card deck/columns -->
						<div class="card-deck text-center">
							
							<?php foreach (($badgeDisplay?:[]) as $badge): ?>
							
							
							<!-- card -->
							<div class="card text-center m-0 badge border-0">
								
								
								<img class="card-img caps rounded-circle" data-toggle="modal" data-target="#exampleModal"
									src="images/beerIcons/<?= $badge['badge_ID'] ?>.jpg" onerror="this.src='images/beerIcons/beerDefault1.png';">
								
								<!-- Modal -->
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										  <span aria-hidden="true">&times;</span>
										</button>
									  </div>
									  <div class="modal-body">
										...
									  </div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save changes</button>
									  </div>
									</div>
								  </div>
								</div>
								
							</div>
							
							
							<?php endforeach; ?>
							
							
							<!-- card
							images/beerIcons/coors.jpg
							<div class="card text-center m-0 badge border-0">
								<img class="card-img rounded-circle" src='images/beerDefault1.png' > 
							</div>
							-->
							
							
							<!--<div class="w-100 hidden-sm-down hidden-lg-up"><!-- wrap every 3 on md</div>-->
							<!--<div class="w-100 hidden-xs-down hidden-md-up"> wrap every 2 on sm</div>-->
							<!--<div class="w-100 hidden-md-down hidden-xl-up"> wrap every 4 on lg</div>-->
							<!--<div class="w-100 hidden-lg-down"> wrap every 5 on xl</div>-->
														<!-- end cards -->
						</div>
						<!-- End card deck-->
						
						
			
		</div>

		
		<!----start-footer--->
		<?php echo $this->render('/pages/footer.html',NULL,get_defined_vars(),0); ?>
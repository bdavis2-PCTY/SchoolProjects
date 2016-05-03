<?php 
	$page = 'Images';
	include "source/include.head.php"; 
	
	$imageList = array ( 
		array ( "name"=>"Bed & Breakfast", 		"url"=>"http://www.aonestepaway.com/images/IM001924.JPG" 			),
		array ( "name"=>"Bed & Breakfast Patio","url"=>"http://www.aonestepaway.com/images/IM001927.JPG" 			),
		array ( "name"=>"Patio Room Entrance", 	"url"=>"http://www.aonestepaway.com/images/patio.jpg" 				),
		array ( "name"=>"Main Shop",			"url"=>"http://www.aonestepaway.com/images/IM001925.JPG"	 		),
		array ( "name"=>"Shopping Village", 	"url"=>"http://www.aonestepaway.com/images/shoppingvillage.jpg" 	),
		array ( "name"=>"Antique Gift Shop", 	"url"=>"http://www.aonestepaway.com/images/antiquegiftshop.jpg" 	),
		array ( "name"=>"Christmas Shop", 		"url"=>"http://www.aonestepaway.com/images/christmasshop.jpg" 		),
		array ( "name"=>"Scrimshaw Shop", 		"url"=>"http://www.aonestepaway.com/images/scrimshaw.jpg" 			),
		array ( "name"=>"Main Room", 			"url"=>"http://www.aonestepaway.com/images/IM001407.JPG" 			),
		array ( "name"=>"Jenny Lynn Room", 		"url"=>"http://www.aonestepaway.com/images/IM001922.JPG" 			),
		array ( "name"=>"Miner's Room", 		"url"=>"http://www.aonestepaway.com/images/Miner%27s%20Room.JPG" 	),
		array ( "name"=>"Beth Parkinson Suite", "url"=>"http://www.aonestepaway.com/images/IM001574.JPG" 			),
		array ( "name"=>"Beth Parkinson Suite", "url"=>"http://www.aonestepaway.com/images/IM001579.JPG" 			),
		array ( "name"=>"Dredge Bathroom", 		"url"=>"http://www.aonestepaway.com/images/IM001400.JPG" 			),
		array ( "name"=>"Dredge Bathroom", 		"url"=>"http://www.aonestepaway.com/images/IM001404.JPG" 			)
	);
	
?>

				<div class='home_Catigory'>
					<div class='cadHeading'>A One Step Away Images</div>
					<div class='contents'>
						<br />
						<div id='imageListElements'>
							<?php 
							
								foreach ( $imageList as $index=>$info ) {
									?>
							<div class='imageItem'>
								<img src='<?php echo $info['url']; ?>' width=200 />
								<br /><?php echo $info['name']; ?>
							</div>
									<?php
								}
							?>
						</div>
					</div>
				</div>

<?php include "source/include.foot.php"; ?>


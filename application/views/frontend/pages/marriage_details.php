<!-- include css -->
<link rel="stylesheet" href="<?=site_url('public/style/marriage_details.css')?>">

<!-- profile section start -->
<section class="profile_section">
    <div class="container">
		<div class="row">
			<div class="col-xl-9 col-lg-8">
		        <div class="profile_details">
		        	<img src="<?=site_url($record->photo)?>" alt="">
					<h3 class="profile_title">Profile Details</h3>
					<ul>
						<li><strong>Name</strong> <span>: <?=($record->name)?></span></li>
						<li><strong>Marital Status</strong> <span>: <?=ucfirst($record->marital_status)?><span></li>
						<li><strong>Age</strong> <span>: <?=($record->age)?><span></li>
						<li><strong>Gender</strong> <span>: <?=($record->gender)?><span></li>
						<li><strong>Mobile</strong> <span>: <?=($record->mobile)?><span></li>
						<li><strong>Address</strong> <span>: <?=($record->address)?><span></li>
						<li><strong>Description</strong> <span>: <?=($record->description)?><span></li>
					</ul>
		        </div>

				<div class="similar_product">
					<div class="section_title">
						<h3>Related Profile</h3>
					</div>
					<div class="row smproduct_grid">
						<?php if(!empty($record_list)) foreach($record_list as $key=>$row){ ?>
						<div class="col-xl-3 col-lg-4 col-md-4 col-6">
							<div class="product_box">
				                <figure class="product_gallery">
				                    <img src="<?=site_url($row->photo)?>" alt="">
				                    <a href="<?=site_url("marriage_details/{$row->id}")?>" class="cover"></a>
				                </figure>
				                <div class="product_title">
				                    <h5><a href="<?=site_url("marriage_details/{$row->id}")?>"><?=($row->name)?></a></h5>
				                </div>
				            </div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-4">

		</div>
	</div>
</section>
<!-- profile section end -->

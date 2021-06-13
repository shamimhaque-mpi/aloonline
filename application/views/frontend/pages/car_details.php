<!-- include css -->
<link rel="stylesheet" href="<?=site_url('public/style/details.css')?>">
<!-- details section start -->
<section class="details_section">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="product_div">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product_images">
                                <img id="img_01" src="<?php echo site_url($record->photo)?>" data-zoom-image="<?php echo site_url($record->photo)?>" alt="">
                            </div>

                            <div class="owl-carousel tabs_product" id="gal1">
                                <a href="#" data-update="" data-image="<?php echo site_url($record->photo)?>">
                                    <img src="<?php echo site_url($record->photo)?>" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product_details">
                                <h4><strong>Car Title </strong> : <?=($record->title)?></h4>
                                <h5 class="price"><strong>Par Day Price </strong> : <?=($record->per_day)?>TK</h5>
                                <p><strong>Discription </strong> : <?=($record->description)?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product_feature">
                    <h3><?=($record->title)?></h3>
                    <p><?=($record->description)?></p>
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


            <div class="col-xl-3 col-lg-4">
                <!-- payment box -->
                <div class="payment_box">
                    <h5>Payment method</h5>
                    <p>Cash/Card on delivery</p>
                    <p>bKash/Online payment</p>
                    <div class="payment-card">
                        <img src="<?=site_url('public/images/card/bkash.png')?>" alt="">
                        <img src="<?=site_url('public/images/card/nagot.png')?>" alt="">
                        <img src="<?=site_url('public/images/card/mastercard.png')?>" alt="">
                        <img src="<?=site_url('public/images/card/roket.png')?>" alt="">
                    </div>
                </div>

                <!-- Popular product -->
                <div class="suggest_product">
                   <div class="title">
                       <h5>Best Sale</h5>
                   </div>
                   <?php if(!empty($best_sale_product)) foreach ($best_sale_product as $row) { ?>
                    <div class="items">
                        <img src="<?=site_url($row->feature_photo)?>" alt="">
                        <div class="items-content">
                            <h5><?=($row->title)?></h5>
                            <?php if($row->discount>0 && $row->quantity){ ?>
                            <small><?=($row->sale_price - ($row->sale_price/100)*$row->discount)?>Tk <del><?=($row->sale_price)?>Tk</del></small>
                            <?php } else if($row->quantity){ ?>
                            <small><?=($row->sale_price)?>Tk</small>
                            <?php } else { ?>
                                <small>Out Of Stock</small>
                            <?php } ?>
                        </div>
                        <a href="<?=site_url("products/".base64_encode($row->id)."/".slug($row->title))?>" class="items-cover"></a>
                    </div>
                    <?php } ?>
                </div>


                <!-- Popular product -->
                <div class="suggest_product">
                   <div class="title">
                       <h5>Popular Products</h5>
                   </div>
                   <?php if(!empty($popular_products)) foreach ($popular_products as $row) { ?>
                    <div class="items">
                        <img src="<?=site_url($row->feature_photo)?>" alt="">
                        <div class="items-content">
                            <h5><?=($row->title)?></h5>
                            <?php if($row->discount>0 && $row->quantity){ ?>
                            <small><?=($row->sale_price - ($row->sale_price/100)*$row->discount)?>Tk <del><?=($row->sale_price)?>Tk</del></small>
                            <?php } else if($row->quantity){ ?>
                            <small><?=($row->sale_price)?>Tk</small>
                            <?php } else { ?>
                                <small>Out Of Stock</small>
                            <?php } ?>
                        </div>
                        <a href="<?=site_url("products/".base64_encode($row->id)."/".slug($row->title))?>" class="items-cover"></a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- details section end -->

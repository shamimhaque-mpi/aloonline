<!-- include css -->
<link rel="stylesheet" href="<?=site_url('public/style/category.css')?>">

<!-- product section start -->
<section class="product_section">
    <div class="container">
        <div class="section_title">
            <h3>Car Rent</h3>
        </div>
        <div class="product_grid">
            <?php if(!empty($record_list)) foreach($record_list as $key=>$row){ ?>
            <div class="product_box">
                <figure class="product_gallery">
                    <img src="<?=site_url($row->photo)?>" alt="">
                    <a href="<?=site_url("car_details/{$row->id}")?>" class="cover"></a>
                </figure>
                <div class="product_title">
                    <h5><a href="<?=site_url("car_details/{$row->id}")?>"><?=($row->title)?></a></h5>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- product section end -->

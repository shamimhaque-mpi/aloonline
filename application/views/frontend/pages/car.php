<!-- include css -->
<link rel="stylesheet" href="<?=site_url('public/style/category.css')?>">
<link rel="stylesheet" href="<?=site_url('public/style/marriage.css')?>">

<!-- product section start -->
<section class="product_section">
    <div class="container">
        <div class="search_area">
            <form action="" method="POST">
                <div class="form-group">
                    <!-- <label>Type Of Car</label> -->
                    <select name="search[id]" class="form-control">
                        <option value="">All Car</option>
                        <?php
                            $cars = readTable('car_rent', [], ['groupBy'=>'title']);
                            if($cars) foreach ($cars as $key => $row) {
                                echo "<option value='{$row->id}'>{$row->title}</option>";
                            }
                        ?>
                    </select>
                </div>
               <!--  <div class="form-group">
                    <label>Budget(BDT)</label>
                    <div class="multiple_box">
                        <input type="number" name="search[budget_from]" class="form-control" placeholder="Amount From">
                        <span>to</span>
                        <input type="number" name="search[budget_to]" class="form-control" placeholder="Amount To">
                    </div>
                </div> -->
                <input class="form-control" type="submit" value="Search">
            </form>
        </div>

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
                    <p><strong>Per Day</strong> : <?=ucfirst($row->per_day)?>TK</p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- product section end -->

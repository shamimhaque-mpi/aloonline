<!-- include css -->
<link rel="stylesheet" href="<?=site_url('public/style/marriage.css')?>">

<!-- product section start -->
<section class="product_section">
    <div class="container">
        <div class="search_area">
            <form action="" method="POST">
                <div class="form-group">
                    <!-- <label>I'm looking for a</label> -->
                    <select name="search[gender]" class="form-control">
                        <option value="">All Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <!-- <div class="form-group">
                    <label>Age</label>
                    <div class="multiple_box">
                        <input type="text" name="search[age_from]" class="form-control" placeholder="Age From">
                        <span>to</span>
                        <input type="text" name="search[age_to]" class="form-control" placeholder="Age To">
                    </div>
                </div>
                <div class="form-group">
                    <label>Of Religion</label>
                    <select name="search[religion]" class="form-control">
                        <option value="">Select</option>
                        <option value="muslim">Muslim</option>
                        <option value="hindu">Hindu</option>
                        <option value="christian">Christian</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>District</label>
                    <select name="search[district_id]" class="form-control">
                        <option value="">Select</option>
                        <?php
                            $districts = readTable('districts', []);
                            if($districts) foreach ($districts as $key => $row) {
                                echo "<option value='{$row->id}'>{$row->name}</option>";
                            }
                        ?>

                    </select>
                </div> -->
				<input class="form-control" type="submit" value="Search">
            </form>
        </div>


        <div class="section_title">
            <h3>Marriage Media</h3>
        </div>
        <div class="product_grid">
            <?php if(!empty($record_list)) foreach($record_list as $key=>$row){ ?>
            <div class="product_box">
                <figure class="product_gallery">
                    <img src="<?=site_url($row->photo)?>" alt="">
                    <a href="<?=site_url("marriage_details/{$row->id}")?>" class="cover"></a>
                </figure>
                <div class="product_title">
                    <h5><a href="<?=site_url("marriage_details/{$row->id}")?>"><?=($row->name)?></a></h5>
                    <p><strong>Status</strong> : <?=ucfirst($row->marital_status)?></p>
                    <p><strong>Age</strong> : <?=ucfirst($row->age)?>Year</p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- product section end -->

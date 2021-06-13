<script src="https://cdn.tiny.cloud/1/ohrhjnbxfnzq31qqc63hguxqeyqtsxjc702o47biov63et3q/tinymce/5/tinymce.min.js"></script>
<script src="<?php echo site_url('private/js/ng-controller/addProductFn.js'); ?>"></script>

<style>
    .feature_photo {
        width: 236px;
        height: 236px;
    }
    .feature_photo img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .set-photo-wrapper {
        margin-bottom: 15px;
        overflow: hidden;
        position: relative;
    }
    .set-photo-wrapper label {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
        z-index: 1;
    }
    .set-photo-wrapper span {
        justify-content: center;
        background: #00000052;
        position: absolute;
        font-size: 18px;
        height: 100%;
        width: 100%;
        left: 0;
        top: 0;
        display: flex;
        color: #ffffff;
        flex-wrap: wrap;
        font-weight: 800;
        text-align: center;
        align-items: center;
        align-content: center;
    }
    .set-photo-wrapper span small {width: 100%;}
    .photo-action {
        position: absolute;
        top: 0;
        right: 0;
        z-index: 2;
    }
</style>
<div class="container-fluid" ng-controller="addProductFn">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>Add Car</h1>
                </div>
            </div>
            <div class="panel-body" ng-cloak>
                <?php msg(); ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Title <span class="req">*</span></label>
                                <input type="text" name="title" value="<?=($car->title)?>" placeholder="Enter Car title" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Mobile <span class="req">*</span></label>
                                <input type="text" name="mobile" value="<?=($car->mobile)?>" placeholder="Enter Contact" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Per Day (BDT)<span class="req">*</span></label>
                                <input type="number" name="per_day" value="<?=($car->per_day)?>" placeholder="Enter Amount" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Description <span class="req">*</span></label>
                                <textarea id="mytextarea2" name="description" class="form-control" rows="10"><?=($car->description)?></textarea>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="set-photo-wrapper">
                                <div class="feature_photo">
                                    <img src="<?=site_url($car->photo)?>" alt="">
                                </div>
                                <label for="feature_photo">
                                    <input type="file" id="feature_photo" onchange="fileLoadFn(this)" name="photo">
                                    <input type="hidden" name="old_photo" value="<?=($car->photo)?>">
                                </label>
                                <span>Feature Photo <br> <small>(820X720)</small></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pull-right">
                                <input type="submit" value="Save" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>

<script>
    tinymce.init({
        selector: '#mytextarea2',
        height : "480"
    });
</script>

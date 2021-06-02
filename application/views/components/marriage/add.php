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
                    <h1>Add Media</h1>
                </div>
            </div>
            <div class="panel-body" ng-cloak>
                <?php msg(); ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label"> Name<span class="req">*</span></label>
                                <input type="text" name="name" placeholder="Enter Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Age <span class="req">*</span></label>
                                <input type="text" name="age" placeholder="Age" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Gender <span class="req">*</span></label>
                                <select name="gender" class="form-control selectpicker" data-live-search="true" required>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Marital Status <span class="req">*</span></label>
                                <select name="marital_status" class="form-control selectpicker" data-live-search="true" required>
                                    <option value="unmarried">Unmarried</option>
                                    <option value="married">Married</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">District <span class="req">*</span></label>
                                <select name="district_id" class="form-control selectpicker" data-live-search="true" required>
                                    <option value="">Select District</option>
                                    <?php
                                        $districts = readTable('districts', []);
                                        if($districts) foreach ($districts as $key => $row) {
                                            echo "<option value='{$row->id}'>{$row->name}</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Religion <span class="req">*</span></label>
                                <select name="religion" class="form-control" required>
                                    <option value="">Select</option>
                                    <option value="muslim">Muslim</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="christian">Christian</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Mobile <span class="req">*</span></label>
                                <input type="text" name="mobile" placeholder="Mobile" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Address <span class="req">*</span></label>
                                <textarea id="mytextarea2" name="address" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Description <span class="req">*</span></label>
                                <textarea id="mytextarea" name="description"></textarea>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="set-photo-wrapper">
                                <div class="feature_photo">
                                    <img src="<?=site_url('public/images/thumbnail/photo.svg')?>" alt="">
                                </div>
                                <label for="feature_photo">
                                    <input type="file" id="feature_photo" onchange="fileLoadFn(this)" name="photo" required>
                                </label>
                                <span>Photo <br> <small>(820X720)</small></span>
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
        selector: '#mytextarea',
        height : "480"
    });
</script>

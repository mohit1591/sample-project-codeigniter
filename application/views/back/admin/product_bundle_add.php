<div class="row">
    <div class="col-md-12">
		<?php
            echo form_open(base_url() . 'admin/product_bundle/do_add/', array(
                'class' => 'form-horizontal',
                'method' => 'post',
                'id' => 'product_bundle_add',
				'enctype' => 'multipart/form-data'
            ));
        ?>
            <!--Panel heading-->
            <div class="panel-heading">
                <div class="panel-control" style="float: left;">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#bundle_details"><?php echo translate('bundle_details'); ?></a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#business_details"><?php echo translate('business_details'); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
                <div class="tab-base">
                    <!--Tabs Content-->                    
                    <div class="tab-content">
                    	<div id="bundle_details" class="tab-pane fade active in">
        
                            <div class="form-group btm_border">
                                <h4 class="text-thin text-center"><?php echo translate('bundle_details'); ?></h4>                            
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate('bundle_title');?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="title" id="demo-hor-1" placeholder="<?php echo translate('bundle_title');?>" class="form-control required">
                                </div>
                            </div>

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-inputpass"></label>
                                <div class="col-sm-6">
                                    <h4 class="pull-left">
                                        <i><?php echo translate('add_products_from_here');?></i>
                                    </h4>
                                    <div id="more_btn" class="btn btn-mint btn-labeled fa fa-plus pull-right">
                                    <?php echo translate('add_more_products');?></div>
                                </div>
                            </div>
                            
                            <div class="form-group btm_border">
                                <span class="col-md-12" style="text-align: right;margin-bottom: 5px">
                                    <!-- <span class="remove_it_v rmc btn btn-danger btn-icon icon-lg fa fa-trash" ></span> -->
                                </span>
                                <div class="col-sm-3" id="quant0">
                                    <input type="hidden" class="product_no" name="product_no[]" value="0">
                                    <label class="col-sm-5 control-label" for=""><?php echo translate('quantity');?></label>
                                    <div class="col-sm-7">
                                        <input class="form-control required" type="number" name="quantity[]" placeholder="quantity" value="1">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label class="col-sm-5 control-label" for="demo-hor-2"><?php echo translate('category');?></label>
                                    <div class="col-sm-7" id="cat0">
                                        <?php echo $this->crud_model->select_html('category','category[]','category_name','add','demo-chosen-select required','','digital',NULL,'get_cat'); ?>
                                        <input type="hidden" class="this_row" value="0">
                                    </div>
                                </div>
                                <div class="col-sm-3" id="sub0" style="display:none;">
                                    <label class="col-sm-5 control-label" for=""><?php echo translate('sub-category');?></label>
                                    <div class="col-sm-7" id="sub_cat0">

                                    </div>
                                    <input type="hidden" class="this_sub_row" value="0">
                                </div>
                                <div class="col-sm-3" id="brn0" style="display:none;">
                                    <label class="col-sm-5 control-label" for=""><?php echo translate('brand');?></label>
                                    <div class="col-sm-7" id="brand0">

                                    </div>
                                    <input type="hidden" class="this_brnd_row" value="0">
                                </div>
                                <div class="col-sm-3" id="prod0" style="display:none;">
                                    <label class="col-sm-5 control-label" for=""><?php echo translate('product');?></label>
                                    <div class="col-sm-7" id="product0">
                                    </div>
                                </div>
                            </div>  
                            <div id="more_additional_fields"></div>                          
                            
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-5"><?php echo translate('unit');?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="unit" id="demo-hor-5" placeholder="<?php echo translate('unit_(e.g._kg,_pc_etc.)'); ?>" class="form-control unit required">
                                </div>
                            </div>              
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-11"><?php echo translate('tags');?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="tag" data-role="tagsinput" placeholder="<?php echo translate('tags');?>" class="form-control">
                                </div>
                            </div>
                                            
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-12"><?php echo translate('images');?></label>
                                <div class="col-sm-6">
                                <span class="pull-left btn btn-default btn-file"> <?php echo translate('choose_file');?>
                                    <input type="file" multiple name="images[]" onchange="preview(this);" id="demo-hor-12" class="form-control required">
                                    </span>
                                    <br><br>
                                    <span id="previewImg" ></span>
                                </div>
                            </div>
                            
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-13"><?php echo translate('description'); ?></label>
                                <div class="col-sm-6">
                                    <textarea rows="9"  class="summernotes" data-height="200" data-name="description"></textarea>
                                </div>
                            </div> 

                            <!-- //Test Section -->

                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label"><p>Test Section</p></label>
                                <div class="col-sm-6">  
                                    <input  name="test_section" type="checkbox" value="yes" >
                               </div>
                            </div>

                            <div class="form-group btm_border test_hide_show_field">
                                <label class="col-sm-4 control-label" for="demo-hor-55"><?php echo translate('test_title');?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="test_title" id="demo-hor-55" placeholder="<?php echo translate('test_title');?>" class="form-control">
                                </div>
                            </div>

                            <!-- test Percentage -->
                            <div class="form-group btm_border test_hide_show_field">
                                <label class="col-sm-4 control-label" for="demo-hor-65"><?php echo translate('test1<br>_name');?></label>
                                <div class="col-sm-1">
                                    <input type="text" name="test1_name" id="demo-hor-65"  min="1" max="100" class="form-control">
                                </div>

                                <label class="col-sm-1 control-label" for="demo-hor-66"><?php echo translate('test1_number');?></label>
                                <div class="col-sm-1">
                                    <input type="number" name="test1_number" id="demo-hor-66"  min="1" max="100" class="form-control">
                                </div> 

                                <label class="col-sm-1 control-label" for="demo-hor-67"><?php echo translate('test11<br>_name');?></label>
                                <div class="col-sm-1">
                                    <input type="text" name="test11_name" id="demo-hor-67"  min="1" max="100" class="form-control">
                                </div>

                                <label class="col-sm-1 control-label" for="demo-hor-68"><?php echo translate('test11_number');?></label>
                                <div class="col-sm-1">
                                    <input type="number" name="test11_number" id="demo-hor-68"  min="1" max="100" class="form-control">
                                </div>                           
                            </div>

                            <div class="form-group btm_border test_hide_show_field">
                                <label class="col-sm-4 control-label" for="demo-hor-69"><?php echo translate('test2<br>_name');?></label>
                                <div class="col-sm-1">
                                    <input type="text" name="test2_name" id="demo-hor-69"  min="1" max="100" class="form-control">
                                </div>

                                <label class="col-sm-1 control-label" for="demo-hor-70"><?php echo translate('test2_number');?></label>
                                <div class="col-sm-1">
                                    <input type="number" name="test2_number" id="demo-hor-70"  min="1" max="100" class="form-control">
                                </div> 

                                <label class="col-sm-1 control-label" for="demo-hor-71"><?php echo translate('test22_name');?></label>
                                <div class="col-sm-1">
                                    <input type="text" name="test22_name" id="demo-hor-71"  min="1" max="100" class="form-control">
                                </div>

                                <label class="col-sm-1 control-label" for="demo-hor-72"><?php echo translate('test22_number');?></label>
                                <div class="col-sm-1">
                                    <input type="number" name="test22_number" id="demo-hor-72"  min="1" max="100" class="form-control">
                                </div>                           
                            </div>

                            <div class="form-group btm_border test_hide_show_field">
                                <label class="col-sm-4 control-label" for="demo-hor-73"><?php echo translate('test3<br>_name');?></label>
                                <div class="col-sm-1">
                                    <input type="text" name="test3_name" id="demo-hor-73"  min="1" max="100" class="form-control">
                                </div>

                                <label class="col-sm-1 control-label" for="demo-hor-74"><?php echo translate('test3_number');?></label>
                                <div class="col-sm-1">
                                    <input type="number" name="test3_number" id="demo-hor-74"  min="1" max="100" class="form-control">
                                </div> 

                                <label class="col-sm-1 control-label" for="demo-hor-75"><?php echo translate('test33_name');?></label>
                                <div class="col-sm-1">
                                    <input type="text" name="test33_name" id="demo-hor-75"  min="1" max="100" class="form-control">
                                </div>

                                <label class="col-sm-1 control-label" for="demo-hor-76"><?php echo translate('test33_number');?></label>
                                <div class="col-sm-1">
                                    <input type="number" name="test33_number" id="demo-hor-76"  min="1" max="100" class="form-control">
                                </div>                           
                            </div>

                            <!-- over -->
                            

                            <div class="form-group btm_border test_hide_show_field">
                                <label class="col-sm-4 control-label" for="demo-hor-56"><?php echo translate('test_sumary_title');?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="test_sumary_title" id="demo-hor-56" placeholder="<?php echo translate('test_sumary_title');?>" min="1" max="100" class="form-control">
                                </div>
                            </div>

                            <div class="form-group btm_border test_hide_show_field">
                                <label class="col-sm-4 control-label" for="demo-hor-57"><?php echo translate('test_sumary');?></label>
                                <div class="col-sm-6">
                                    <textarea type="text" name="test_sumary" id="demo-hor-57" placeholder="<?php echo translate('test_sumary');?>" min="1" maxlength="250" class="form-control"></textarea>
                                </div>
                            </div>
                        <!-- section over -->
                            
                        <!-- food Section -->
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" ><?php echo translate('food_section');?></label>
                                <div class="col-sm-6">
                                    <input type="checkbox" name="food_section" placeholder="<?php echo translate('food_section');?>" value="yes">
                                </div>
                            </div>
                            <div class="form-group btm_border hide_show_field">
                                <label class="col-sm-4 control-label" ><?php echo translate('food_title');?></label>
                                <div class="col-sm-6">
                                    <input type="text" name="food_title" placeholder="<?php echo translate('food_title');?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group btm_border hide_show_field">
                                <label class="col-sm-4 control-label" ><?php echo translate('food_description');?></label>
                                <div class="col-sm-6">
                                    <textarea name="food_description" maxlength="250" rows="3" placeholder="<?php echo translate('food_description');?>" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group btm_border hide_show_field">
                                <label class="col-sm-4 control-label" ><?php echo translate('food_name');?> 1</label>
                                <div class="col-sm-6">
                                    <input type="text" name="food_name1" placeholder="<?php echo translate('food_name');?> 1" class="form-control">
                                </div>
                            </div>
                            <div class="form-group btm_border hide_show_field">
                                <label class="col-sm-4 control-label" for="demo-hor-12"><?php echo translate('food_image');?> 1</label>
                                <div class="col-sm-6">
                                <span class="pull-left btn btn-default btn-file"> <?php echo translate('choose_file');?>
                                    <input type="file" name="food_image1" onchange="foodpreview1(this);" id="demo-hor-12" class="form-control">
                                    </span>
                                    <br><br>
                                    <span id="previewImgFood1" ></span>
                                </div>
                            </div> 
                            <div class="form-group btm_border hide_show_field">
                                <label class="col-sm-4 control-label" ><?php echo translate('food_name');?> 2</label>
                                <div class="col-sm-6">
                                    <input type="text" name="food_name2" placeholder="<?php echo translate('food_name');?> 2" class="form-control">
                                </div>
                            </div>
                            <div class="form-group btm_border hide_show_field">
                                <label class="col-sm-4 control-label" for="demo-hor-22"><?php echo translate('food_image');?> 2</label>
                                <div class="col-sm-6">
                                <span class="pull-left btn btn-default btn-file"> <?php echo translate('choose_file');?>
                                    <input type="file" name="food_image2" onchange="foodpreview2(this);" id="demo-hor-12" class="form-control">
                                    </span>
                                    <br><br>
                                    <span id="previewImgFood2" ></span>
                                </div>
                            </div>
                            <div class="form-group btm_border hide_show_field">
                                <label class="col-sm-4 control-label" ><?php echo translate('food_name');?> 3</label>
                                <div class="col-sm-6">
                                    <input type="text" name="food_name3" placeholder="<?php echo translate('food_name');?> 3" class="form-control">
                                </div>
                            </div>
                            <div class="form-group btm_border hide_show_field">
                                <label class="col-sm-4 control-label" for="demo-hor-33"><?php echo translate('food_image');?> 3</label>
                                <div class="col-sm-6">
                                <span class="pull-left btn btn-default btn-file"> <?php echo translate('choose_file');?>
                                    <input type="file" name="food_image3" onchange="foodpreview3(this);" id="demo-hor-12" class="form-control">
                                    </span>
                                    <br><br>
                                    <span id="previewImgFood3" ></span>
                                </div>
                            </div>
                            <div class="form-group btm_border hide_show_field">
                                <label class="col-sm-4 control-label" ><?php echo translate('food_name');?> 4</label>
                                <div class="col-sm-6">
                                    <input type="text" name="food_name4" placeholder="<?php echo translate('food_name');?> 4" class="form-control">
                                </div>
                            </div>
                            <div class="form-group btm_border hide_show_field">
                                <label class="col-sm-4 control-label" for="demo-hor-44"><?php echo translate('food_image');?> 4</label>
                                <div class="col-sm-6">
                                <span class="pull-left btn btn-default btn-file"> <?php echo translate('choose_file');?>
                                    <input type="file" name="food_image4" onchange="foodpreview4(this);" id="demo-hor-12" class="form-control">
                                    </span>
                                    <br><br>
                                    <span id="previewImgFood4" ></span>
                                </div>
                            </div>
                                                       
                        </div>
                        <div id="business_details" class="tab-pane fade">
                            <div class="form-group btm_border">
                                <h4 class="text-thin text-center"><?php echo translate('business_details'); ?></h4>                            
                            </div>
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-6"><?php echo translate('sale_price');?></label>
                                <div class="col-sm-4">
                                    <input type="number" name="sale_price" id="demo-hor-6" min='0' step='.01' placeholder="<?php echo translate('sale_price');?>" class="form-control required">
                                </div>
                                <span class="btn"><?php echo currency('','def'); ?> / </span>
                                <span class="btn unit_set"></span>
                            </div>
                            
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-7"><?php echo translate('purchase_price');?></label>
                                <div class="col-sm-4">
                                    <input type="number" name="purchase_price" id="demo-hor-7" min='0' step='.01' placeholder="<?php echo translate('purchase_price');?>" class="form-control required">
                                </div>
                                <span class="btn"><?php echo currency('','def'); ?> / </span>
                                <span class="btn unit_set"></span>
                            </div>
                            
                            <!-- <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-8"><?php echo translate('shipping_cost');?></label>
                                <div class="col-sm-4">
                                    <input type="number" name="shipping_cost" id="demo-hor-8" min='0' step='.01' placeholder="<?php echo translate('shipping_cost');?>" class="form-control">
                                </div>
                                <span class="btn"><?php echo currency('','def'); ?> / </span>
                                <span class="btn unit_set"></span>
                            </div>
                            
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-9"><?php echo translate('bundle_tax');?></label>
                                <div class="col-sm-4">
                                    <input type="number" name="tax" id="demo-hor-9" min='0' step='.01' placeholder="<?php echo translate('bundle_tax');?>" class="form-control">
                                </div>
                                <div class="col-sm-1">
                                    <select class="demo-chosen-select" name="tax_type">
                                        <option value="percent">%</option>
                                        <option value="amount"><?php echo currency('','def'); ?></option>
                                    </select>
                                </div>
                                <span class="btn unit_set"></span>
                            </div> 
                             -->
                            <div class="form-group btm_border">
                                <label class="col-sm-4 control-label" for="demo-hor-10"><?php echo translate('bundle_discount');?></label>
                                <div class="col-sm-4">
                                    <input type="number" name="discount" id="demo-hor-10" min='0' step='.01' placeholder="<?php echo translate('bundle_discount');?>" class="form-control">
                                </div>
                                <div class="col-sm-1">
                                    <select class="demo-chosen-select" name="discount_type">
                                        <option value="percent">%</option>
                                        <!-- <option value="amount"><?php echo currency('','def'); ?></option> -->
                                    </select>
                                </div>
                                <span class="btn unit_set"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <span class="btn btn-purple btn-labeled fa fa-hand-o-right pull-right" onclick="next_tab()"><?php echo translate('next'); ?></span>
                <span class="btn btn-purple btn-labeled fa fa-hand-o-left pull-right" onclick="previous_tab()"><?php echo translate('previous'); ?></span>
        
            </div>
    
            <div class="panel-footer">
                <div class="row">
                	<div class="col-md-11">
                        <span class="btn btn-purple btn-labeled fa fa-refresh pro_list_btn pull-right " 
                            onclick="ajax_set_full('add','<?php echo translate('add_product_bundle'); ?>','<?php echo translate('successfully_added!'); ?>','product_bundle_add',''); "><?php echo translate('reset');?>
                        </span>
                    </div>
                    
                    <div class="col-md-1">
                        <span class="btn btn-success btn-md btn-labeled fa fa-upload pull-right enterer" onclick="form_submit('product_bundle_add','<?php echo translate('product_bundle_has_been_uploaded!'); ?>');proceed('to_add');" ><?php echo translate('upload');?></span>
                    </div>
                    
                </div>
            </div>
    
        </form>
    </div>
</div>

<script src="<?php $this->benchmark->mark_time(); echo base_url(); ?>template/back/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js">
</script>

<input type="hidden" id="option_count" value="0">

<style type="text/css">
    .hide_show_field
    {
        display: none;
    }
    .test_hide_show_field
    {
        display: none;
    }
</style>
<script>
    $("input[name = 'food_section']").click(function() {
        if($("input[name = 'food_section']").is(':checked'))
        {
            $('.hide_show_field').show();
        }
        else
        {
            $('.hide_show_field').hide();
        }
    });
    $("input[name = 'test_section']").click(function() {
        if($("input[name = 'test_section']").is(':checked'))
        {
            $('.test_hide_show_field').show();
        }
        else
        {
            $('.test_hide_show_field').hide();
        }
    });

    window.preview = function (input) {
        if (input.files && input.files[0]) {
            $("#previewImg").html('');
            $(input.files).each(function () {
                var reader = new FileReader();
                reader.readAsDataURL(this);
                reader.onload = function (e) {
                    $("#previewImg").append("<div style='float:left;border:4px solid #303641;padding:5px;margin:5px;'><img height='80' src='" + e.target.result + "'></div>");
                }
            });
        }
    }
    window.foodpreview1 = function (input) {
        if (input.files && input.files[0]) 
        {
            $("#previewImgFood1").html('');
            $(input.files).each(function () {
                var reader = new FileReader();
                reader.readAsDataURL(this);
                reader.onload = function (e) {
                    $("#previewImgFood1").append("<div style='float:left;border:4px solid #303641;padding:5px;margin:5px;'><img height='80' src='" + e.target.result + "'></div>");
                }
            });               
        }
    }
    window.foodpreview2 = function (input) {
        if (input.files && input.files[0]) 
        {
            $("#previewImgFood2").html('');
            $(input.files).each(function () {
                var reader = new FileReader();
                reader.readAsDataURL(this);
                reader.onload = function (e) {
                    $("#previewImgFood2").append("<div style='float:left;border:4px solid #303641;padding:5px;margin:5px;'><img height='80' src='" + e.target.result + "'></div>");
                }
            });               
        }
    }
    window.foodpreview3 = function (input) {
        if (input.files && input.files[0]) 
        {
            $("#previewImgFood3").html('');
            $(input.files).each(function () {
                var reader = new FileReader();
                reader.readAsDataURL(this);
                reader.onload = function (e) {
                    $("#previewImgFood3").append("<div style='float:left;border:4px solid #303641;padding:5px;margin:5px;'><img height='80' src='" + e.target.result + "'></div>");
                }
            });               
        }
    }
    window.foodpreview4 = function (input) {
        if (input.files && input.files[0]) 
        {
            $("#previewImgFood4").html('');
            $(input.files).each(function () {
                var reader = new FileReader();
                reader.readAsDataURL(this);
                reader.onload = function (e) {
                    $("#previewImgFood4").append("<div style='float:left;border:4px solid #303641;padding:5px;margin:5px;'><img height='80' src='" + e.target.result + "'></div>");
                }
            });               
        }
    }

    function other_forms(){}
	
	function set_summer(){
        $('.summernotes').each(function() {
            var now = $(this);
            var h = now.data('height');
            var n = now.data('name');
			if(now.closest('div').find('.val').length == 0){
            	now.closest('div').append('<input type="hidden" class="val" name="'+n+'">');
			}
            now.summernote({
                height: h,
                onChange: function() {
                    now.closest('div').find('.val').val(now.code());
                }
            });
            now.closest('div').find('.val').val(now.code());
        });
	}

    function option_count(type){
        var count = $('#option_count').val();
        if(type == 'add'){
            count++;
        }
        if(type == 'reduce'){
            count--;
        }
        $('#option_count').val(count);
    }

    function set_select(){
        $('.demo-chosen-select').chosen();
        $('.demo-cs-multiselect').chosen({width:'100%'});
    }
	
    $(document).ready(function() {
        set_select();
		set_summer();
    });

    function other(){
        set_select();
        $('#sub').show('slow');
    }
    function get_cat(id,now){
        var co = $(now).closest('div').find('.this_row').val();
        $('#sub'+co).hide('slow');
        $('#brn'+co).hide('slow');
        $('#prod'+co).hide('slow');
        ajax_load(base_url+'admin/product_bundle/sub_by_cat/'+id,'sub_cat'+co,'other');
        $('#sub'+co).show('slow');
    }
	function get_brnd(id,now){
        var co = $(now).parent().next('.this_sub_row').val();
        $('#brn'+co).hide('slow');
        $('#prod'+co).hide('slow');
        ajax_load(base_url+'admin/product_bundle/brand_by_sub/'+id,'brand'+co,'other');
        $('#brn'+co).show('slow');
    }
    function get_prod(id,now){
        var co = $(now).parent().next('.this_brnd_row').val();
        var cat = $('#cat'+co).find('select').val();
        var sub_cat = $('#sub_cat'+co).find('select').val();
        $('#prod'+co).hide('slow');
        ajax_load(base_url+'admin/product_bundle/prod_by_brand/'+id+'/'+sub_cat+'/'+cat,'product'+co,'other');
        $('#prod'+co).show('slow');
    }
    function get_sub_res(id){}

    $(".unit").on('keyup',function(){
        $(".unit_set").html($(".unit").val());
    });

    $("#more_btn").click(function(){
        option_count('add');
        var co = $('#option_count').val();
        $("#more_additional_fields").append(''
            +'<div class="form-group btm_border">'
            +'    <span class="col-md-12" style="text-align: right; margin-bottom: 5px">'
            +'        <span class="remove_it_v rmc btn btn-danger btn-icon icon-lg fa fa-trash" ></span>'
            +'    </span>'
            +'    <div class="col-sm-3" id="quant'+co+'">'
            +'        <input type="hidden" class="product_no" name="product_no[]" value="'+co+'">'
            +'        <label class="col-sm-5 control-label" for=""><?php echo translate('quantity');?></label>'
            +'        <div class="col-sm-7">'
            +'            <input class="form-control required" type="number" name="quantity[]" placeholder="quantity" value="1">'
            +'        </div>'
            +'    </div>'
            +'    <div class="col-sm-3">'
            +'        <label class="col-sm-5 control-label" for=""><?php echo translate('category');?></label>'
            +'        <div class="col-sm-7" id="cat'+co+'">'
            +'            <?php echo $this->crud_model->select_html('category','category[]','category_name','add','demo-chosen-select required','','digital',NULL,'get_cat'); ?>'
            +'            <input type="hidden" class="this_row" value="'+co+'">'
            +'        </div>'
            +'    </div>'
            +'    <div class="col-sm-3" id="sub'+co+'" style="display:none;">'
            +'        <label class="col-sm-5 control-label" for=""><?php echo translate('sub-category');?></label>'
            +'        <div class="col-sm-7" id="sub_cat'+co+'">'
            +'        </div>'
            +'        <input type="hidden" class="this_sub_row" value="'+co+'">'
            +'    </div>'
            +'    <div class="col-sm-3" id="brn'+co+'" style="display:none;">'
            +'        <label class="col-sm-5 control-label" for=""><?php echo translate('brand');?></label>'
            +'        <div class="col-sm-7" id="brand'+co+'">'
            +'        </div>'
            +'        <input type="hidden" class="this_brnd_row" value="'+co+'">'
            +'    </div>'
            +'    <div class="col-sm-3" id="prod'+co+'" style="display:none;">'
            +'        <label class="col-sm-5 control-label" for=""><?php echo translate('product');?></label>'
            +'        <div class="col-sm-7" id="product'+co+'">'
            +'        </div>'
            +'    </div>'
            +'</div> '
        );
        set_select();
    });
    
    function next_tab(){
        $('.nav-tabs li.active').next().find('a').click();                    
    }
    function previous_tab(){
        $('.nav-tabs li.active').prev().find('a').click();                     
    }

    $('body').on('click', '.rmo', function(){
        $(this).parent().parent().remove();
    });

    $('body').on('click', '.rmon', function(){
        var co = $(this).closest('.form-group').data('no');
        $(this).parent().parent().remove();
        if($(this).parent().parent().parent().html() == ''){
            $(this).parent().parent().parent().html(''
                +'   <input type="hidden" name="op_set'+co+'[]" value="none" >'
            );
        }
    });

    $('body').on('click', '.rms', function(){
        $(this).parent().parent().remove();
    });

    $('body').on('click', '.rmc', function(){
        $(this).parent().parent().remove();
    });


	$(document).ready(function() {
		$("form").submit(function(e){
			event.preventDefault();
		});
	});
</script>

<style>
	.btm_border{
		border-bottom: 1px solid #ebebeb;
		padding-bottom: 15px;	
	}
</style>


<!--Bootstrap Tags Input [ OPTIONAL ]-->
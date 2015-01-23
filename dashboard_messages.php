<!-- LOAD HEADER -->
<?php include("dash_header.php"); ?>
<script>
  $(document).ready(function() {
    $('.checkbox_input').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue',
        increaseArea: '15%' // optional
    });   
  }); 
</script>
<!-- LOAD HEADER -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div>
</div>
<div class="midle_container">
    <div class="container">
        <div class="page dashboard">
            <div class="left_side_menu col-md-4" >
                <div class="row" id="scroll-content">

                    <div class="header_menu_mobile mobile_version">
                        <button type="button" class="navbar-toggle close_navbar" data-toggle="dash" data-target="" data-canvas="body">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navmenu-brand" href="#">Guest Grew</a>
                    </div>
                    <div class="clone_elements"></div> <!-- do not remove this line -->
                    <div class="dash_top_radio_links" >
                        <a href="#" class="active" >Advertiser</a>
                        <a href="#" class="" >Publisher</a>
                        <div class="clear"></div>
                    </div>
                    <div class='dash_menu'>
                        <div class="col-sm-4 cat_1">
                            <div class="row">
                                <ul class="cat_1_menu">
                                    <li class="cat_1_item campaign" data-idtoopen="bl_1"><a href="#"><span></span>Campaigns</a></li>
                                    <li class="cat_1_item offers" data-idtoopen="bl_2"><a href="#"><span></span>Offers</a></li>
                                    <li class="cat_1_item message" data-idtoopen="bl_3"><a href="#"><span></span>Messages</a></li>
                                    <li class="cat_1_item proadviser" data-idtoopen="bl_4"><a href="#"><span></span>ProAdvertiser</a></li>
                                    <li class="cat_1_item settings" data-idtoopen="bl_5"><a href="#"><span></span>Settings</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-8 cat_2">
                            <div class="row">
                                <div id="bl_1" class="cat_2_item_block">
                                    <ul>
                                        <li class="white"><a href="">Social Campaign<span></span></a></li>
                                        <li><a href="">Live Compaigns<span>15</span></a></li>
                                        <li><a href="">Complited Campaigns<span>15</span></a></li>
                                        <li><a href="">Compaigns Drafts<span>15</span></a></li>
                                        <li><a href="">Pending review from admin campaigns<span>15</span></a></li>
                                        <li><a href="">Returned Campaigns<span>15</span></a></li>
                                    </ul>
                                </div>
                                <div id="bl_2" class="cat_2_item_block">
                                    <ul>
                                        <li class="white"><a href="">Guest Bligging Offers<span></span></a></li>
                                        <li><a href="">Pending Offers<span>3</span></a></li>
                                        <li><a href="">Apllied Offers<span>23</span></a></li>
                                        <li><a href="">Assigned Offers<span>15</span></a></li>
                                        <li><a href="">Rejected Offers<span>1</span></a></li>
                                        <li><a href="">Declined Offers<span>7</span></a></li>
                                        <li><a href="">Completed Offers<span>52</span></a></li>
                                        <li><a href="">Pending Offers<span>3</span></a></li>
                                        <li><a href="">Apllied Offers<span>23</span></a></li>
                                        <li><a href="">Assigned Offers<span>15</span></a></li>
                                        <li><a href="">Rejected Offers<span>1</span></a></li>
                                        <li><a href="">Declined Offers<span>7</span></a></li>
                                        <li><a href="">Completed Offers<span>52</span></a></li>
                                    </ul>
                                </div>
                                <div id="bl_3" class="cat_2_item_block">
                                    <button type="button" class="btn-blue compose">COMPOSE</button>
                                    <ul>
<!--                                        <li class="white"><a href="">Guest Bligging Offers<span></span></a></li>-->
                                        <li><a href="">Inbox<span>3</span></a></li>
                                        <li><a href="">Sent Mail<span>23</span></a></li>
                                        <li><a href="">Drafts<span>15</span></a></li>
                                        <li><a href="">Important<span>1</span></a></li>
                                        <li><a href="">Starred<span>7</span></a></li>   
                                         
                                    </ul>
                                </div>
                                <div id="bl_4" class="cat_2_item_block">
                                    <ul>
<!--                                        <li class="white"><a href="">Guest Bligging Offers<span></span></a></li>-->
                                        <li><a href="">Inbox<span>3</span></a></li>
                                        <li><a href="">Sent Mail<span>23</span></a></li>
                                        <li><a href="">Drafts<span>15</span></a></li>
                                        <li><a href="">Important<span>1</span></a></li>
                                        <li><a href="">Starred<span>7</span></a></li>                                        
                                    </ul>
                                </div>
                                <div id="bl_5" class="cat_2_item_block">
                                    <ul>
<!--                                        <li class="white"><a href="">Guest Bligging Offers<span></span></a></li>-->
                                        <li><a href="">Inbox<span>3</span></a></li>
                                        <li><a href="">Sent Mail<span>23</span></a></li>
                                        <li><a href="">Drafts<span>15</span></a></li>
                                        <li><a href="">Important<span>1</span></a></li>
                                        <li><a href="">Starred<span>7</span></a></li>                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>

                </div>
            </div>
            <div class="right_side_content col-md-8">
                <div class="row">
                    <div class="right_top_buttons">
                        <a href="#" class="btn_green"><i class="fa fa-caret-square-o-right fa-fw"></i>Start a Guest Blogging Campaign</a>
                        <a href="#" class="btn_blue"><i class="fa fa-caret-square-o-right fa-fw"></i>Start a Social Campaign</a>                   
                    </div>
                    <div class="right_content">
                        <div class="message_toolbar">
                            <button type="button" class="mess_button mess_moveto">Move TO</button>
                            <button type="button" class="mess_button mess_delete">Delete</button>
                            <span><b>10</b> of <b>436</b></span>
                        </div>
                        <div class="inbox">
                            <div class="inbox_item">
                                <div class="col-lg-1 col-md-1 col-xs-3"><div class="row">
                                        <label class="checkbox-label"><input type="checkbox" class="checkbox_input" value=""></label> 
                                        <input type="image" src="images/dashboard/star.png">
                                    </div></div>
                                <div class="col-lg-2 col-md-3 col-xs-6 msg_sender"><div class="row">Michael Norton</div></div>
                                <div class="col-lg-1 col-md-1 col-xs-push-0 col-md-push-7 col-lg-push-8 col-xs-3 msg_time"><div class="row">12:20 am</div></div>
                                <div class="col-lg-8 col-md-7 col-md-pull-1 col-xs-12 msg_subject"><div class="row">Our New Campaign - <i>Duis aute irure dolor in reprehenderit pariatur...</i></div></div>
                                <div class="clear"></div>
                            </div>
                            <div class="inbox_item">
                                <div class="col-lg-1 col-md-1 col-xs-3"><div class="row">
                                        <label class="checkbox-label"><input type="checkbox" class="checkbox_input" value=""></label> 
                                        <input type="image" src="images/dashboard/star.png">
                                    </div></div>
                                <div class="col-lg-2 col-md-3 col-xs-6 msg_sender"><div class="row">Michael Norton</div></div>
                                <div class="col-lg-1 col-md-1 col-xs-push-0 col-md-push-7 col-lg-push-8 col-xs-3 msg_time"><div class="row">12:20 am</div></div>
                                <div class="col-lg-8 col-md-7 col-md-pull-1 col-xs-12 msg_subject"><div class="row">Our New Campaign - <i>Duis aute irure dolor in reprehenderit pariatur...</i></div></div>
                                <div class="clear"></div>
                            </div>
                            <div class="inbox_item">
                                <div class="col-lg-1 col-md-1 col-xs-3"><div class="row">
                                        <label class="checkbox-label"><input type="checkbox" class="checkbox_input" value=""></label> 
                                        <input type="image" src="images/dashboard/star.png">
                                    </div></div>
                                <div class="col-lg-2 col-md-3 col-xs-6 msg_sender"><div class="row">Michael Norton</div></div>
                                <div class="col-lg-1 col-md-1 col-xs-push-0 col-md-push-7 col-lg-push-8 col-xs-3 msg_time"><div class="row">12:20 am</div></div>
                                <div class="col-lg-8 col-md-7 col-md-pull-1 col-xs-12 msg_subject"><div class="row">Our New Campaign - <i>Duis aute irure dolor in reprehenderit pariatur...</i></div></div>
                                <div class="clear"></div>
                            </div>
                            <div class="inbox_item">
                                <div class="col-lg-1 col-md-1 col-xs-3"><div class="row">
                                        <label class="checkbox-label"><input type="checkbox" class="checkbox_input" value=""></label> 
                                        <input type="image" src="images/dashboard/star.png">
                                    </div></div>
                                <div class="col-lg-2 col-md-3 col-xs-6 msg_sender"><div class="row">Michael Norton</div></div>
                                <div class="col-lg-1 col-md-1 col-xs-push-0 col-md-push-7 col-lg-push-8 col-xs-3 msg_time"><div class="row">12:20 am</div></div>
                                <div class="col-lg-8 col-md-7 col-md-pull-1 col-xs-12 msg_subject"><div class="row">Our New Campaign - <i>Duis aute irure dolor in reprehenderit pariatur...</i></div></div>
                                <div class="clear"></div>
                            </div>
                            <div class="inbox_item">
                                <div class="col-lg-1 col-md-1 col-xs-3"><div class="row">
                                        <label class="checkbox-label"><input type="checkbox" class="checkbox_input" value=""></label> 
                                        <input type="image" src="images/dashboard/star.png">
                                    </div></div>
                                <div class="col-lg-2 col-md-3 col-xs-6 msg_sender"><div class="row">Michael Norton</div></div>
                                <div class="col-lg-1 col-md-1 col-xs-push-0 col-md-push-7 col-lg-push-8 col-xs-3 msg_time"><div class="row">12:20 am</div></div>
                                <div class="col-lg-8 col-md-7 col-md-pull-1 col-xs-12 msg_subject"><div class="row">Our New Campaign - <i>Duis aute irure dolor in reprehenderit pariatur...</i></div></div>
                                <div class="clear"></div>
                            </div>
                            <div class="inbox_item">
                                <div class="col-lg-1 col-md-1 col-xs-3"><div class="row">
                                        <label class="checkbox-label"><input type="checkbox" class="checkbox_input" value=""></label> 
                                        <input type="image" src="images/dashboard/star.png">
                                    </div></div>
                                <div class="col-lg-2 col-md-3 col-xs-6 msg_sender"><div class="row">Michael Norton</div></div>
                                <div class="col-lg-1 col-md-1 col-xs-push-0 col-md-push-7 col-lg-push-8 col-xs-3 msg_time"><div class="row">12:20 am</div></div>
                                <div class="col-lg-8 col-md-7 col-md-pull-1 col-xs-12 msg_subject"><div class="row">Our New Campaign - <i>Duis aute irure dolor in reprehenderit pariatur...</i></div></div>
                                <div class="clear"></div>
                            </div>
                            <div class="inbox_item">
                                <div class="col-lg-1 col-md-1 col-xs-3"><div class="row">
                                        <label class="checkbox-label"><input type="checkbox" class="checkbox_input" value=""></label> 
                                        <input type="image" src="images/dashboard/star.png">
                                    </div></div>
                                <div class="col-lg-2 col-md-3 col-xs-6 msg_sender"><div class="row">Michael Norton</div></div>
                                <div class="col-lg-1 col-md-1 col-xs-push-0 col-md-push-7 col-lg-push-8 col-xs-3 msg_time"><div class="row">12:20 am</div></div>
                                <div class="col-lg-8 col-md-7 col-md-pull-1 col-xs-12 msg_subject"><div class="row">Our New Campaign - <i>Duis aute irure dolor in reprehenderit pariatur...</i></div></div>
                                <div class="clear"></div>
                            </div>
                            <div class="inbox_item">
                                <div class="col-lg-1 col-md-1 col-xs-3"><div class="row">
                                        <label class="checkbox-label"><input type="checkbox" class="checkbox_input" value=""></label> 
                                        <input type="image" src="images/dashboard/star.png">
                                    </div></div>
                                <div class="col-lg-2 col-md-3 col-xs-6 msg_sender"><div class="row">Michael Norton</div></div>
                                <div class="col-lg-1 col-md-1 col-xs-push-0 col-md-push-7 col-lg-push-8 col-xs-3 msg_time"><div class="row">12:20 am</div></div>
                                <div class="col-lg-8 col-md-7 col-md-pull-1 col-xs-12 msg_subject"><div class="row">Our New Campaign - <i>Duis aute irure dolor in reprehenderit pariatur...</i></div></div>
                                <div class="clear"></div>
                            </div>
                            <div class="inbox_item">
                                <div class="col-lg-1 col-md-1 col-xs-3"><div class="row">
                                        <label class="checkbox-label"><input type="checkbox" class="checkbox_input" value=""></label> 
                                        <input type="image" src="images/dashboard/star.png">
                                    </div></div>
                                <div class="col-lg-2 col-md-3 col-xs-6 msg_sender"><div class="row">Michael Norton</div></div>
                                <div class="col-lg-1 col-md-1 col-xs-push-0 col-md-push-7 col-lg-push-8 col-xs-3 msg_time"><div class="row">12:20 am</div></div>
                                <div class="col-lg-8 col-md-7 col-md-pull-1 col-xs-12 msg_subject"><div class="row">Our New Campaign - <i>Duis aute irure dolor in reprehenderit pariatur...</i></div></div>
                                <div class="clear"></div>
                            </div>
                            <div class="inbox_item">
                                <div class="col-lg-1 col-md-1 col-xs-3"><div class="row">
                                        <label class="checkbox-label"><input type="checkbox" class="checkbox_input" value=""></label> 
                                        <input type="image" src="images/dashboard/star.png">
                                    </div></div>
                                <div class="col-lg-2 col-md-3 col-xs-6 msg_sender"><div class="row">Michael Norton</div></div>
                                <div class="col-lg-1 col-md-1 col-xs-push-0 col-md-push-7 col-lg-push-8 col-xs-3 msg_time"><div class="row">12:20 am</div></div>
                                <div class="col-lg-8 col-md-7 col-md-pull-1 col-xs-12 msg_subject"><div class="row">Our New Campaign - <i>Duis aute irure dolor in reprehenderit pariatur...</i></div></div>
                                <div class="clear"></div>
                            </div>
                            
                            <button type="button" class="btn-block see_all"> See All Campaign</button>
                        </div>
                       
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!-- LOAD FOOTER -->
<?php include("footer.php"); ?>
<!-- LOAD FOOTER -->
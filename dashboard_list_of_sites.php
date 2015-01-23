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
                            <h2>List of your websites</h2>
                            <button type="button" class="btn_green btn_add_site">ADD NEW</button>
                            <div class="clear"></div>
                        </div>
                        <div class="list_of_sites">
                            
                            <div class="col-xs-12 t_table">
                                <div class="row t_head">
                                    <div class="col-sm-4 col-lg-3 col-xs-5 t_td"><div class="row">Name</div></div>
                                    <div class="col-sm-2 col-lg-2 col-xs-2 t_td"><div class="row">Category</div></div>
                                    <div class="col-sm-1 col-lg-2 col-xs-2 t_td"><div class="row">Coins</div></div>
                                    <div class="col-sm-2 col-lg-2 col-xs-3 t_td"><div class="row">Status</div></div>
                                    <div class="col-sm-3 col-lg-3 col-xs-12 t_td"></div>
                                </div>
                                <div class="row t_row">
                                    <div class="col-sm-4 col-lg-3 col-xs-5 t_td"><div class="row">www.ruter.com</div></div>
                                    <div class="col-sm-2 col-lg-2 col-xs-2 t_td"><div class="row">IT</div></div>
                                    <div class="col-sm-1 col-lg-2 col-xs-2 t_td"><div class="row">60</div></div>
                                    <div class="col-sm-2 col-lg-2 col-xs-3 t_td"><div class="row"><span class="t_status succes"><i class="fa fa-check fa-fw"></i>Validated</span></div></div>
                                    <div class="col-sm-3 col-lg-3 col-xs-12 t_td">
                                        <div class="row">
                                            <button type="button" class="t_btn btn_blue">Edit</button>
                                            <button type="button" class="t_btn btn_grey">Delete</button>
                                        </div>                                           
                                    </div>
                                </div>
                                <div class="row t_row">
                                    <div class="col-sm-4 col-lg-3 col-xs-5 t_td"><div class="row">awesomescreenshot.com</div></div>
                                    <div class="col-sm-2 col-lg-2 col-xs-2 t_td"><div class="row">IT</div></div>
                                    <div class="col-sm-1 col-lg-2 col-xs-2 t_td"><div class="row">1000</div></div>
                                    <div class="col-sm-2 col-lg-2 col-xs-3 t_td"><div class="row"><span class="t_status error"><i class="fa fa-times fa-fw"></i>Error</span></div></div>
                                    <div class="col-sm-3 col-lg-3 col-xs-12 t_td">
                                        <div class="row">
                                            <button type="button" class="t_btn btn_blue">Edit</button>
                                            <button type="button" class="t_btn btn_grey">Delete</button>
                                        </div>                                           
                                    </div>
                                </div>
                                <div class="row t_row">
                                    <div class="col-sm-4 col-lg-3 col-xs-5 t_td"><div class="row">landeruterberss.com</div></div>
                                    <div class="col-sm-2 col-lg-2 col-xs-2 t_td"><div class="row">IT</div></div>
                                    <div class="col-sm-1 col-lg-2 col-xs-2 t_td"><div class="row">520</div></div>
                                    <div class="col-sm-2 col-lg-2 col-xs-3 t_td"><div class="row"><span class="t_status succes"><i class="fa fa-check fa-fw"></i>Validated</span></div></div>
                                    <div class="col-sm-3 col-lg-3 col-xs-12 t_td">
                                        <div class="row">
                                            <button type="button" class="t_btn btn_blue">Edit</button>
                                            <button type="button" class="t_btn btn_grey">Delete</button>
                                        </div>                                           
                                    </div>
                                </div>
                            </div>
                            
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
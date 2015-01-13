<!-- LOAD HEADER -->
<?php include("header.php"); ?>
<!-- LOAD HEADER -->

<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Add a new Social Campaign</li>
        </ol>
    </div>
</div>
<div class="midle_container">
    <div class="container">
        <div class="page">
            <div class="page_title2">
                <h2>Start you influencial marketing capaign</h2>
            </div>
            <div role="tabpanel">
              <!-- Nav tabs -->
              <ul class="list-inline tablist" role="tablist">
                <li role="presentation" class="active"><a href="#stap1" aria-controls="stap1" role="tab" data-toggle="tab">Step 1 <span></span></a></li>
                <li role="presentation"><a href="#stap2" aria-controls="stap2" role="tab" data-toggle="tab">Step 2 <span></span></a></li>
                <li role="presentation"><a href="#stap3" class="disabled" aria-controls="stap3" role="tab" data-toggle="tab">Step 3 <span></span></a></li>
              </ul>

                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="stap1">
                    <form class="form-horizontal">
                      <div class="formulars">
                        <div class="form-group">
                            <label for="field-campaign-name" class="col-sm-4 col-md-2 control-label">Capaign Name1:</label>
                            <div class="col-sm-8 col-md-10">
                                <input type="text" class="form-control" id="field-campaign-name">
                            </div>
                        </div>
                        <div class="col-xs-12 half_inputs">
                            <div class="row">
                                <div class="col-md-6 half_input">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="select1" class="col-sm-4 control-label">Category:</label>
                                            <div class="col-sm-8"> 
                                                <div class="select_clone">
                                                    <select class="form-control"  id="select1">
                                                        <option>Select One</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>                                               
                                                </div>
                                                <span class="form_tip">Select your campaign niche from the dropdown</span>
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                            </div>                            
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 col-md-2 control-label">Publisher Notes:</label>
                            <div class="col-sm-8 col-md-10">
                                <textarea  class="form-control" rows="6" id="inputPassword3"></textarea>
                            </div>
                        </div>
                      </div>
                      <div class="formulars">
                        
                      
                        <div class="form-group">
                            <label for="field-campaign-link" class="col-sm-4 col-md-2 control-label">Campaign Link:</label>
                            <div class="col-sm-8 col-md-10">
                                <input type="text" class="form-control" id="field-campaign-link">
                                <span class="form_tip">An page, a link form, etc.</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-campaign-message" class="col-sm-4 col-md-2 control-label">Message:</label>
                            <div class="col-sm-8 col-md-10">
                                <textarea  class="form-control" rows="6" id="field-campaign-message"></textarea>
                                <span class="form_tip">Limited to 94 characters. @ Characters are not allowed.</span>
                            </div>
                        </div>
                        <div class="col-xs-12 half_inputs">
                            <div class="row">
                                <div class="col-md-6 half_input">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="field-campaign-header" class="col-sm-4 control-label">Header:</label>
                                            <div class="col-sm-8">
                                                <div class="file-campaign" id="file-campaign1">
                                                  <div class="choose-campaign">Choose file</div>
                                                  <input type="file" class="field-file-campaign" id="field-file-campaign1" >
                                                </div>
                                                <span class="choose-campaign">No file chosen</span>
                                                <div class="clear"></div>
                                                <span class="form_tip">Recomended size: 1140x360</span>
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                                <div class="col-md-6 half_input">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="field-campaign-logo" class="col-sm-4 control-label">Logo of the campaign:</label>
                                            <div class="col-sm-8">
                                                <!--<input type="file" class="field-file" id="field-campaign-logo">-->
                                                <div class="file-campaign" id="file-campaign2">
                                                  <div class="choose-campaign">Choose file</div>
                                                  <input type="file" class="field-file-campaign" id="field-file-campaign2" >
                                                </div>
                                                <span class="choose-campaign">No file chosen</span>
                                                <div class="clear"></div>
                                                <span class="form_tip">Recomended size: 90x90</span>
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 col-md-2 control-label">Story:</label>
                            <div class="col-sm-8 col-md-10">
                                <textarea  class="form-control" rows="6" id="inputPassword3"></textarea>
                                <span class="form_tip">What is your campaign about?</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-campaign-date" class="col-sm-4 col-md-2 control-label">Date:</label>
                            <div class="col-sm-8 col-md-10">
                                <input type="text" class="form-control" id="field-campaign-date">
                                <span class="form_tip">When will the campaign start?</span>
                            </div>
                        </div>
                        <div class="col-xs-12 half_inputs">
                            <div class="row">
                                <div class="col-md-6 half_input">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="field-campaign-timezone" class="col-sm-4 control-label">Timezone:</label>
                                            <div class="col-sm-8"> 
                                                <div class="select_clone">
                                                    <select class="form-control" id="field-campaign-timezone">
                                                        <option>(UTC + 02:00) Bucharest</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>                                               
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                                <div class="col-md-3 half_input">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="field-campaign-time" class="col-sm-4 col-md-5 control-label">Time:</label>
                                            <div class="col-sm-8 col-md-7"> 
                                                <div class="select_clone">
                                                    <select class="form-control" id="field-campaign-time">
                                                        <option>00:00</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>                                               
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                            </div>                            
                        </div>  
                        <div class="clear"></div>                      
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-md-offset-2  col-sm-8 col-md-10">
                                <button type="submit" class="gala4ka">Save campaign and next</button>
                            </div>
                        </div>                       
                      </div>                    
                    </form>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="stap2">
                    <form class="form-horizontal">
                      <div class="formulars">
                        <div class="form-group">
                            <label for="field-campaign-name" class="col-sm-4 col-md-2 control-label">Capaign Name2:</label>
                            <div class="col-sm-8 col-md-10">
                                <input type="text" class="form-control" id="field-campaign-name">
                            </div>
                        </div>
                        <div class="col-xs-12 half_inputs">
                            <div class="row">
                                <div class="col-md-6 half_input">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="select1" class="col-sm-4 control-label">Category:</label>
                                            <div class="col-sm-8"> 
                                                <div class="select_clone">
                                                    <select class="form-control"  id="select1">
                                                        <option>Select One</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>                                               
                                                </div>
                                                <span class="form_tip">Select your campaign niche from the dropdown</span>
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                            </div>                            
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 col-md-2 control-label">Publisher Notes:</label>
                            <div class="col-sm-8 col-md-10">
                                <textarea  class="form-control" rows="6" id="inputPassword3"></textarea>
                            </div>
                        </div>
                      </div>
                      <div class="formulars">
                        
                      
                        <div class="form-group">
                            <label for="field-campaign-link" class="col-sm-4 col-md-2 control-label">Campaign Link:</label>
                            <div class="col-sm-8 col-md-10">
                                <input type="text" class="form-control" id="field-campaign-link">
                                <span class="form_tip">An page, a link form, etc.</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-campaign-message" class="col-sm-4 col-md-2 control-label">Message:</label>
                            <div class="col-sm-8 col-md-10">
                                <textarea  class="form-control" rows="6" id="field-campaign-message"></textarea>
                                <span class="form_tip">Limited to 94 characters. @ Characters are not allowed.</span>
                            </div>
                        </div>
                        <div class="col-xs-12 half_inputs">
                            <div class="row">
                                <div class="col-md-6 half_input">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="field-campaign-header" class="col-sm-4 control-label">Header:</label>
                                            <div class="col-sm-8">
                                                <div class="file-campaign" id="file-campaign1">
                                                  <div class="choose-campaign">Choose file</div>
                                                  <input type="file" class="field-file-campaign" id="field-file-campaign1" >
                                                </div>
                                                <span class="choose-campaign">No file chosen</span>
                                                <div class="clear"></div>
                                                <span class="form_tip">Recomended size: 1140x360</span>
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                                <div class="col-md-6 half_input">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="field-campaign-logo" class="col-sm-4 control-label">Logo of the campaign:</label>
                                            <div class="col-sm-8">
                                                <!--<input type="file" class="field-file" id="field-campaign-logo">-->
                                                <div class="file-campaign" id="file-campaign2">
                                                  <div class="choose-campaign">Choose file</div>
                                                  <input type="file" class="field-file-campaign" id="field-file-campaign2" >
                                                </div>
                                                <span class="choose-campaign">No file chosen</span>
                                                <div class="clear"></div>
                                                <span class="form_tip">Recomended size: 90x90</span>
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 col-md-2 control-label">Story:</label>
                            <div class="col-sm-8 col-md-10">
                                <textarea  class="form-control" rows="6" id="inputPassword3"></textarea>
                                <span class="form_tip">What is your campaign about?</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-campaign-date" class="col-sm-4 col-md-2 control-label">Date:</label>
                            <div class="col-sm-8 col-md-10">
                                <input type="text" class="form-control" id="field-campaign-date">
                                <span class="form_tip">When will the campaign start?</span>
                            </div>
                        </div>
                        <div class="col-xs-12 half_inputs">
                            <div class="row">
                                <div class="col-md-6 half_input">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="field-campaign-timezone" class="col-sm-4 control-label">Timezone:</label>
                                            <div class="col-sm-8"> 
                                                <div class="select_clone">
                                                    <select class="form-control" id="field-campaign-timezone">
                                                        <option>(UTC + 02:00) Bucharest</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>                                               
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                                <div class="col-md-3 half_input">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="field-campaign-time" class="col-sm-4 col-md-5 control-label">Time:</label>
                                            <div class="col-sm-8 col-md-7"> 
                                                <div class="select_clone">
                                                    <select class="form-control" id="field-campaign-time">
                                                        <option>00:00</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>                                               
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                            </div>                            
                        </div>  
                        <div class="clear"></div>                      
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-md-offset-2  col-sm-8 col-md-10">
                                <button type="submit" class="gala4ka">Save campaign and next</button>
                            </div>
                        </div>                       
                      </div>                    
                    </form>                    
                  </div>
                  <div role="tabpanel" class="tab-pane" id="stap3">
                    <form class="form-horizontal">
                      <div class="formulars">
                        <div class="form-group">
                            <label for="field-campaign-name" class="col-sm-4 col-md-2 control-label">Capaign Name3:</label>
                            <div class="col-sm-8 col-md-10">
                                <input type="text" class="form-control" id="field-campaign-name">
                            </div>
                        </div>
                        <div class="col-xs-12 half_inputs">
                            <div class="row">
                                <div class="col-md-6 half_input">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="select1" class="col-sm-4 control-label">Category:</label>
                                            <div class="col-sm-8"> 
                                                <div class="select_clone">
                                                    <select class="form-control"  id="select1">
                                                        <option>Select One</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>                                               
                                                </div>
                                                <span class="form_tip">Select your campaign niche from the dropdown</span>
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                            </div>                            
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 col-md-2 control-label">Publisher Notes:</label>
                            <div class="col-sm-8 col-md-10">
                                <textarea  class="form-control" rows="6" id="inputPassword3"></textarea>
                            </div>
                        </div>
                      </div>
                      <div class="formulars">
                        
                      
                        <div class="form-group">
                            <label for="field-campaign-link" class="col-sm-4 col-md-2 control-label">Campaign Link:</label>
                            <div class="col-sm-8 col-md-10">
                                <input type="text" class="form-control" id="field-campaign-link">
                                <span class="form_tip">An page, a link form, etc.</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-campaign-message" class="col-sm-4 col-md-2 control-label">Message:</label>
                            <div class="col-sm-8 col-md-10">
                                <textarea  class="form-control" rows="6" id="field-campaign-message"></textarea>
                                <span class="form_tip">Limited to 94 characters. @ Characters are not allowed.</span>
                            </div>
                        </div>
                        <div class="col-xs-12 half_inputs">
                            <div class="row">
                                <div class="col-md-6 half_input">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="field-campaign-header" class="col-sm-4 control-label">Header:</label>
                                            <div class="col-sm-8">
                                                <div class="file-campaign" id="file-campaign1">
                                                  <div class="choose-campaign">Choose file</div>
                                                  <input type="file" class="field-file-campaign" id="field-file-campaign1" >
                                                </div>
                                                <span class="choose-campaign">No file chosen</span>
                                                <div class="clear"></div>
                                                <span class="form_tip">Recomended size: 1140x360</span>
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                                <div class="col-md-6 half_input">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="field-campaign-logo" class="col-sm-4 control-label">Logo of the campaign:</label>
                                            <div class="col-sm-8">
                                                <!--<input type="file" class="field-file" id="field-campaign-logo">-->
                                                <div class="file-campaign" id="file-campaign2">
                                                  <div class="choose-campaign">Choose file</div>
                                                  <input type="file" class="field-file-campaign" id="field-file-campaign2" >
                                                </div>
                                                <span class="choose-campaign">No file chosen</span>
                                                <div class="clear"></div>
                                                <span class="form_tip">Recomended size: 90x90</span>
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 col-md-2 control-label">Story:</label>
                            <div class="col-sm-8 col-md-10">
                                <textarea  class="form-control" rows="6" id="inputPassword3"></textarea>
                                <span class="form_tip">What is your campaign about?</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="field-campaign-date" class="col-sm-4 col-md-2 control-label">Date:</label>
                            <div class="col-sm-8 col-md-10">
                                <input type="text" class="form-control" id="field-campaign-date">
                                <span class="form_tip">When will the campaign start?</span>
                            </div>
                        </div>
                        <div class="col-xs-12 half_inputs">
                            <div class="row">
                                <div class="col-md-6 half_input">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="field-campaign-timezone" class="col-sm-4 control-label">Timezone:</label>
                                            <div class="col-sm-8"> 
                                                <div class="select_clone">
                                                    <select class="form-control" id="field-campaign-timezone">
                                                        <option>(UTC + 02:00) Bucharest</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>                                               
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                                <div class="col-md-3 half_input">
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="field-campaign-time" class="col-sm-4 col-md-5 control-label">Time:</label>
                                            <div class="col-sm-8 col-md-7"> 
                                                <div class="select_clone">
                                                    <select class="form-control" id="field-campaign-time">
                                                        <option>00:00</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>                                               
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                </div>
                            </div>                            
                        </div>  
                        <div class="clear"></div>                      
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-md-offset-2  col-sm-8 col-md-10">
                                <button type="submit" class="gala4ka">Save campaign and next</button>
                            </div>
                        </div>                       
                      </div>                    
                    </form>                    
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- LOAD FOOTER -->
<?php include("footer.php"); ?>
<!-- LOAD FOOTER -->

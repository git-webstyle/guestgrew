<!-- LOAD HEADER -->
<?php include("header.php"); ?>
<script>
  $(document).ready(function() {
    $('.radio_input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });
    $('.checkbox_input').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue',
        increaseArea: '20%' // optional
    });
    $('.change-password').click(function(event) {
      event.preventDefault();
    });    
  }); 
</script>
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
                <li role="presentation" class="active"><a href="#stap1" aria-controls="stap1" role="tab" data-toggle="tab">Edit Profile<span></span></a></li>
                <li role="presentation"><a href="#stap2" aria-controls="stap2" role="tab" data-toggle="tab">Edit Optionas<span></span></a></li>
              </ul>

                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="stap1">
                    <form class="form-horizontal">
                      <div class="formulars">
                        <h3>Optional fields</h3>
                        <div class="form-group">
                            <label for="field-profile-url" class="col-md-2 control-label">Your Website URL:</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="field-profile-url">
                                <span class="form_tip">My Tehnological Campaign</span>
                            </div>
                        </div>
                        <div class="col-xs-12 half_inputs">
                            <div class="row">
                                <div class="col-md-8 half_input edit-profile-select">
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Date of Birth:</label>
                                            <div class="fields-formular col-md-2"> 
                                                <div class="select_clone">
                                                    <select class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>                                               
                                                </div>
                                            </div>
                                            <div class="fields-formular col-md-3"> 
                                                <div class="select_clone">
                                                    <select class="form-control"  id="select1">
                                                        <option>Iune</option>
                                                        <option>Iune</option>
                                                        <option>Iune</option>
                                                        <option>Iune</option>
                                                        <option>Iune</option>
                                                    </select>                                               
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                              <input type="text" class="form-control" placeholder="Year">
                                            </div>                                            
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Date of Birth Privacy:</label>
                                            <div class="fields-formular col-md-4"> 
                                                <div class="select_clone">
                                                    <select class="form-control">
                                                        <option>Hide Age and Date of Birth:</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>                                               
                                                </div>
                                            </div>
                                          <div class="col-md-4">
                                              <button class="change-password" data-toggle="modal" data-target="#change-password">change password</button>
                                          </div>                                          
                                        </div>                                       
                                    </div>                           
                                </div>
                                <div class="col-md-4 half_input">
                                    <div class="row">
                                        <div class="form-group profile-avatar">
                                            <div class="col-md-5"><img src="images/small-avatar.png" class="img-responsive img-circle" width="100" alt=""></div>
                                            <div class="col-md-7 btn-profile-avatar">
                                              <div class="change-avatar-profiles">
                                                <div class="btn-blue">change avatar</div>
                                                <input type="file" class="field-avatar">
                                              </div>
                                            </div> 
                                        </div>
                                    </div>                            
                                </div>
                            </div>                      
                        </div>
                        <div class="clear"></div>
                      </div>
                      <div class="formulars">
                        <h3>additional information</h3>
                          <div class="form-group">
                            <label class="col-md-4 col-md-2 control-label">Sex:</label>
                            <div class="col-md-2"> 
                                <div class="select_clone">
                                    <select class="form-control">
                                        <option>Male</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>                                               
                                </div>
                                <span class="form_tip">Please select your sex from the list below</span>
                            </div>
                            <label class="col-md-2 control-label">Location:</label>
                            <div class="col-md-2"> 
                                <input type="text" class="form-control">
                                <span class="form_tip">Where in the world do you live?</span>
                            </div>
                            <label class="col-md-2 control-label">Your PayPal Email:</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control">
                                <span class="form_tip">Enter your PayPal email to receive the Payment</span>
                            </div>                                           
                          </div>
                        <div class="form-group">
                            <label for="field-campaign-message" class="col-md-2 control-label">Bio:</label>
                            <div class="col-md-10">
                                <textarea  class="form-control" rows="6" id="field-campaign-message"></textarea>
                                <span class="form_tip">Enter a few short details about yourself, your life story etc.</span>
                            </div>
                        </div>                      
                      </div>

                      <div class="formulars">
                        <h3>Additional Contact Information</h3>
                        <div class="col-xs-12 half_inputs">
                            <div class="row">
                                <div class="col-md-6 half_input edit-profile-select">
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">ICQ Number:</label>
                                            <div class="col-md-6">
                                              <input type="text" class="form-control">
                                            </div>                                            
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">AIM Screen Name:</label>
                                            <div class="col-md-6">
                                              <input type="text" class="form-control">
                                            </div>                                          
                                        </div>                                       
                                    </div>                           
                                </div>
                                <div class="col-md-6 half_input">
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">MSN ID:</label>
                                            <div class="col-md-6">
                                              <input type="text" class="form-control">
                                            </div>                                            
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Yahoo ID:</label>
                                            <div class="col-md-6">
                                              <input type="text" class="form-control">
                                            </div>                                          
                                        </div>
                                    </div>                            
                                </div>
                            </div>                      
                        </div>
                        <div class="clear"></div>                      
                      </div> 
                        <div class="form-group">
                          <div class="btn-update-profile col-md-12">
                              <p>
                                <button type="submit" class="gala4ka">update profile</button>
                              </p>
                          </div>
                        </div>                                         
                    </form>
                  </div>
                  <div role="tabpanel" class="tab-pane edit-options" id="stap2">
                    <form class="form-horizontal">
                      <div class="formulars">
                        <h3>Privacy</h3>
                            <label>
                              <input type="checkbox" class="checkbox_input" value="">
                              Hide me from the Who's Online list.
                            </label>
                      </div>
                      <div class="formulars">
                        <h3>Messaging and Notification</h3>
                        <div class="row">
                          <div class="col-md-6">
                             <label class="checkbox-label">
                              <input type="checkbox" class="checkbox_input" value="">
                              Receive emails from the Administrators.
                            </label>
                             <label class="checkbox-label">
                              <input type="checkbox" class="checkbox_input" value="">
                              Hide your email from other members.
                            </label>
                             <label class="checkbox-label">
                              <input type="checkbox" class="checkbox_input" value="">
                              Receive private messages from other users.
                            </label>
                          </div>
                          <div class="col-md-6">
                             <label class="checkbox-label">
                              <input type="checkbox" class="checkbox_input" value="">
                              Alert me with a notice when I receive a Private Message.
                            </label>
                             <label class="checkbox-label">
                              <input type="checkbox" class="checkbox_input" value="">
                              Hide me from the Who's Online list.
                            </label>
                             <label class="checkbox-label">
                              <input type="checkbox" class="checkbox_input" value="">
                              Notify me by email when I receive a new Private Message.
                            </label>
                          </div>
                        </div>
                        <div class="form-group select-edit-profile">
                          <label for="field-email-notification" class="col-md-3 control-label">Default Thread Subscription Mode:</label>
                          <div class="col-md-3"> 
                            <div class="select_clone">
                                <select class="form-control" id="field-email-notification">
                                    <option>Instatnt Email Notification</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>                                               
                            </div>
                          </div>
                        </div>

                      </div>
                      <div class="formulars">
                        <h3>Date and Time Options</h3>
                        <div class="col-xs-12 half_inputs">
                            <div class="row">
                                <div class="col-md-6 half_input edit-profile-select">
                                    <div class="row">
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Date Format:</label>
                                          <div class="col-md-6"> 
                                              <div class="select_clone">
                                                  <select class="form-control">
                                                      <option>Tuesday, October 28th, 2014</option>
                                                      <option>2</option>
                                                      <option>3</option>
                                                      <option>4</option>
                                                      <option>5</option>
                                                  </select>                                               
                                              </div>
                                          </div>                                            
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Different Time Zone</label>
                                          <div class="col-md-6"> 
                                              <div class="select_clone">
                                                  <select class="form-control">
                                                      <option>GMT +10:00 (02:45 AM)</option>
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
                                <div class="col-md-6 half_input">
                                    <div class="row">
                                        <div class="form-group">
                                          <label class="col-md-6 control-label">Time Format:</label>
                                          <div class="col-md-6"> 
                                              <div class="select_clone">
                                                  <select class="form-control">
                                                      <option>Use Deafault Format</option>
                                                      <option>2</option>
                                                      <option>3</option>
                                                      <option>4</option>
                                                      <option>5</option>
                                                  </select>                                               
                                              </div>
                                          </div>                                            
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-6 control-label">Daylight Saving Time correction:</label>
                                          <div class="col-md-6"> 
                                              <div class="select_clone">
                                                  <select class="form-control">
                                                      <option>Automatically Detect DST</option>
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
                      </div>
                      <div class="formulars">
                        <h3>Forum Display Options</h3>
                        <div class="col-xs-12 half_inputs">
                            <div class="row">
                                <div class="col-md-6 half_input edit-profile-select">
                                    <div class="row">
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Threads Per Page:</label>
                                          <div class="col-md-6"> 
                                              <div class="select_clone">
                                                  <select class="form-control">
                                                      <option>Use Default Format</option>
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
                                <div class="col-md-6 half_input">
                                    <div class="row">
                                        <div class="form-group">
                                          <label class="col-md-6 control-label">Default Thread View:</label>
                                          <div class="col-md-6"> 
                                              <div class="select_clone">
                                                  <select class="form-control">
                                                      <option>Use Deafault Format</option>
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
                      </div>
                      <div class="formulars">
                        <h3>Thread View Options</h3>
                        <div class="row">
                          <div class="col-md-6">
                             <label class="checkbox-label">
                              <input type="checkbox" class="checkbox_input" value="">
                              Display posts in classic mode.
                            </label>
                             <label class="checkbox-label">
                              <input type="checkbox" class="checkbox_input" value="">
                              Display users' signatures in their posts.
                            </label>
                            <div class="form-group select-edit-profile">
                              <label for="field-email-notification" class="col-md-6 control-label">Posts Per Page:</label>
                              <div class="col-md-6"> 
                                <div class="select_clone">
                                  <select class="form-control" id="field-email-notification">
                                    <option>Use Deafault Format</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                  </select>                                               
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                             <label class="checkbox-label">
                              <input type="checkbox" class="checkbox_input" value="">
                              Display users' avatars in their posts.
                            </label>
                             <label class="checkbox-label">
                              <input type="checkbox" class="checkbox_input" value="">
                              Show the quick reply box on the view thread page.
                            </label>
                            <div class="form-group select-edit-profile">
                              <label for="field-email-notification" class="col-md-6 control-label">Thread View Mode:</label>
                              <div class="col-md-6"> 
                                <div class="select_clone">
                                  <select class="form-control" id="field-email-notification">
                                    <option>Liniar</option>
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
                      <div class="formulars">
                        <h3>Thread View Options</h3>
                        <div class="row">
                          <div class="col-md-6">
                             <label class="checkbox-label">
                              <input type="checkbox" class="checkbox_input" value="">
                              Show friendly redirect pages.
                            </label>
                            <div class="form-group select-edit-profile">
                              <label for="field-email-notification" class="col-md-6 control-label">Posts Per Page:</label>
                              <div class="col-md-6"> 
                                <div class="select_clone">
                                  <select class="form-control" id="field-email-notification">
                                    <option>Use Deafault Format</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                  </select>                                               
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                             <label class="checkbox-label">
                              <input type="checkbox" class="checkbox_input" value="">
                              Show the MyCode formatting options on the posting pages.
                            </label>
                            <div class="form-group select-edit-profile">
                              <label for="field-email-notification" class="col-md-6 control-label">Board Language</label>
                              <div class="col-md-6"> 
                                <div class="select_clone">
                                  <select class="form-control" id="field-email-notification">
                                    <option>Use Default</option>
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
                      <div class="form-group">
                        <div class="btn-update-profile col-md-12">
                            <p>
                              <button type="submit" class="gala4ka">update profile</button>
                            </p>
                        </div>
                      </div>                                                               
                    </form>                    
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal modal-change-password fade" id="change-password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h3>Change password</h3>
        <form class="form-horizontal">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">Current Password:</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="inputEmail3">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-4 control-label">New Password:</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="inputPassword3">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-4 control-label">Confirm Password:</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="inputPassword3">
            </div>
          </div>
          <div class="form-group">
            <p>
              <button type="submit" class="btn-green">update password</button>
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- LOAD FOOTER -->
<?php include("footer.php"); ?>
<!-- LOAD FOOTER -->

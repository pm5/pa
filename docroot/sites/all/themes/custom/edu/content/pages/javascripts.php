<div class="row">
        <div class="span7">
            <h3>Html Tabs</h3>
            
            <!--  Tabs -->   
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                <li><a href="#profile" data-toggle="tab">Profile</a></li>
                <li><a href="#messages" data-toggle="tab">Messages</a></li>
                <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            
            <div class="tab-content">
                <div class="tab-pane" id="home">
                    Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis.. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapiPhasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi
                </div>
                <div class="tab-pane" id="profile">
                    Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi
                </div>
                <div class="tab-pane" id="messages">
                    Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi
                </div>
                <div class="tab-pane active" id="settings">
                     Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi
                </div>
            </div>
            
        </div><!--  End span7 --> 
    </div> <!--  End row --> 
    <br><br>
    
    <section class="messages ">
      <h3>Messages</h3>
      
      <!--  End messages --> 
      <div class="infomsg alert"><a class="clostalert">close</a><i class="icon-info-sign icon-2x"></i><strong>Information!</strong> Lorem Ipsum is simply dummy </div>
      <div class="successmsg alert"><i class="icon-ok icon-2x"></i><a class="clostalert">close</a><strong>Sucess!</strong> Lorem Ipsum is simply dummy </div>
      <div class="errormsg alert"><i class="icon-minus-sign icon-2x"></i><a class="clostalert">close</a><strong>Error!</strong> Lorem Ipsum is simply dummy </div>
      <div class="alertmsg alert"><i class="icon-warning-sign icon-2x"></i><a class="clostalert">close</a><strong>Alert!</strong> Lorem Ipsum is simply dummy </div>
      <div class="infomsg2 alert"><a class="clostalert">close</a><strong>Information!</strong> Lorem Ipsum is simply dummy </div>
        
    </section>
    <br><br>
    
    <h3>Date/time input </h3>
    <div class="row">
        <div class="span3">
            <div id="datetimepicker" class="input-append">
                <label>Select a date and time</label>
                <input type="text" class=" dateinput" id="date_visit" readonly="">
                <span class="add-on"><i data-time-icon="icon-time" data-date-icon="icon-calendar" class="icon-calendar"></i></span>
            </div>
        </div>
    </div>
    <br><br>
    
    <!--  Tooltips -->
    <div class="row">
        <div class="span6">
            <div id="tooltip">
                <h3>Tool tips with four directions</h3>
                <ul>
                    <li><a href="#" class="tooltip-test" data-placement="top" title="" data-original-title="Default tooltip">Tooltip on top</a></li>
                    <li><a href="#" class="tooltip-test" data-placement="right" title="" data-original-title="Default tooltip">Tooltip on right</a></li>
                    <li><a href="#" class="tooltip-test" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Tooltip on bottom</a></li>
                    <li><a href="#" class="tooltip-test" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">Tooltip on left</a></li>
                </ul>
            </div>
        </div>
    </div>
    <br><br>
    
     		<!--  Modal -->     
          <h3>Modals bootstrap</h3>         
          <p>Toggle a modal via JavaScript by clicking the button below. It will slide down and fade in from the top of the page.</p>
          
          <!-- sample modal content -->
          <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
              <button type="button" data-dismiss="modal" aria-hidden="true" class="close button_medium">×</button>
              <h2 id="myModalLabel">Modal Heading</h2>
            </div>
            <div class="modal-body">
              <h4>Text in a modal</h4>
              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem.</p>

              <h4>Popover in a modal</h4>
              <p>This <a href="#" role="button" class="btn popover-test" title="A Title" data-content="And here's some amazing content. It's very engaging. right?">button</a> should trigger a popover on click.</p>

              <h4>Tooltips in a modal</h4>
              <p><a href="#" class="tooltip-test" title="" data-original-title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="" data-original-title="Tooltip">that link</a> should have tooltips on hover.</p>

              <hr>

              <h4>Overflowing text to show optional scrollbar</h4>
              <p>We set a fixed <code>max-height</code> on the <code>.modal-body</code>. Watch it overflow with all this extra lorem ipsum text we've included.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
            </div>
            <div class="modal-footer">
              <button data-dismiss="modal" class="button_medium">Close</button>
              <button class="button_medium">Save changes</button>
            </div>
          </div>
          <div class="bs-docs-example" style="padding-bottom: 24px;">
            <a data-toggle="modal" href="#myModal" class="button_medium ">Launch demo modal</a>
          </div>
          <br><br>
          
        <!-- Accordion -->
        <div class="row">
            <div class="span6">
                <h3>Accordion</h3>
                <a class="accrodian-trigger active" href="#">Accrodian 1</a>
                <div class="accrodian-data" style="display: block;">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat eu
                    </p>
                </div>
                <a class="accrodian-trigger" href="#">Accrodian 2</a>
                <div class="accrodian-data" style="display: none;">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat eu
                    </p>
                </div>
                <a class="accrodian-trigger" href="#">Accrodian 3</a>
                <div class="accrodian-data" style="display: none;">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat eu
                    </p>
                </div>
                <a class="accrodian-trigger" href="#">Accrodian 4</a>
                <div class="accrodian-data" style="display: none;">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat eu
                    </p>
                </div>
                <a class="accrodian-trigger" href="#">Accrodian 5</a>
                <div class="accrodian-data" style="display: none;">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat eu
                    </p>
                </div>
                <a class="accrodian-trigger" href="#">Accrodian 5</a>
                <div class="accrodian-data" style="display: none;">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat eu
                    </p>
                </div>
            </div>
        </div>
        <br>
        <br>
      
        <!-- Toggle -->
        <div class="row">
            <div class="span6">
                <h1 class="heading1"><span>Toggles</span></h1>
                <div class="togglehandle">Toggle1</div>
                <div class="toggledata">
                    <p>
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat euLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat eu
                    </p>
                </div>
                <div class="togglehandle">Toggle2</div>
                <div class="toggledata">
                    <p>
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat euLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat eu
                    </p>
                </div>
                <div class="togglehandle">Toggle3</div>
                <div class="toggledata">
                    <p>
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat euLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condimentum ultrices consequat eu
                    </p>
                </div>
            </div>
        </div>
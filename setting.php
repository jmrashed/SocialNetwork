<?php include 'header.php';  ?>
<div class="container">
  <div class="stepwizard">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        <p>Account</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p>Plan</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p>Service Provider</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
        <p>Actions</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
        <p>Email Templates</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
        <p>Preview & Submit</p>
      </div>
    </div>
  </div>
  <form role="form">
    <div class="row setup-content" id="step-1">

      <div class="col-xs-12">
        <div class="col-md-12">
          <h3> Account Info</h3>
          <!-- Select Basic -->
          <div class="form-group">

            <fieldset>
              <div id="legend">
                <legend class="">Register</legend>
              </div>

              <div class="col-xs-6">
                <div class="control-group">
                  <!-- Username -->
                  <label class="control-label" for="username">Username</label>
                  <div class="controls">
                    <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
                    <span class="help-block">Username can contain any letters or numbers, without spaces</span>
                  </div>
                </div>

                <div class="control-group">
                  <!-- E-mail -->
                  <label class="control-label" for="email">E-mail</label>
                  <div class="controls">
                    <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
                    <span class="help-block"></span>
                  </div>
                </div>

                <div class="control-group">
                  <!-- Password-->
                  <label class="control-label" for="password">Password</label>
                  <div class="controls">
                    <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                    <p class="help-block">Password should be at least 4 characters</p>
                  </div>
                </div>

                <div class="control-group">
                  <!-- Password -->
                  <label class="control-label" for="password_confirm">Password (Confirm)</label>
                  <div class="controls">
                    <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
                    <p class="help-block"></p>
                  </div>
                </div>

              </div>
              <div class="col-xs-6">


                <div class="control-group">
                  <!-- Password-->
                  <label class="control-label" for="password">Company</label>
                  <div class="controls">
                    <input type="text" id="company" class="input-xlarge">
                    <p class="help-block">The name of your company or organization</p>
                  </div>
                </div>

                <div class="control-group">
                  <!-- Password -->
                  <label class="control-label" for="password_confirm">Telephone (optional)</label>
                  <div class="controls">
                    <input type="password" id="tel" " placeholder=" " class="input-xlarge ">
        <p class="help-block ">Help us give you better support.</p>
      </div>
    </div>
    
    </div>
    
    
 
 
  </fieldset>


</div>

                <button class="btn btn-primary nextBtn btn-lg pull-right " type="button " >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content " id="step-2 ">
        <div class="col-xs-12 ">
            <div class="col-md-12 ">
                <h3> Plan Details</h3>
               <!-- File Button --> 


<div class="col-xs-6 ">
<div class="form-group ">
  <label class="col-md-4 control-label " for="possible_instances ">Selected Plan</label>
  <div class="col-md-5 ">
    <select id="possible_instances " name="possible_instances " class="form-control ">
      <option value="0 ">Free Trial</option>
      <option value="-1 ">Tier 1</option>
       <option value="-1 ">Tier 2</option>
        <option value="-1 ">Tier 3</option>
    </select>
  </div>
</div>
</div>
<h3> Plan Details</h3>
<div class="col-xs-6 ">
<div class="form-group ">
<table>
  <thead>
    <tr>
      <th> </th>
      <th>Product 1</th>
      <th>Product 2</th>
      <th>Product 3</th>
    </tr>
  </thead>
  <tbody>
    <tr class="visible-xs " aria-hidden="true ">
      <td> </td>
      <td colspan="3 ">Feature 1</td>
    </tr>
    <tr>
      <td>Feature 1</td>
      <td><b class="check ">✔</b></td>
      <td><b class="check ">✔</b></td>
      <td><b class="check ">✔</b></td>
    </tr>
    <tr class="visible-xs " aria-hidden="true ">
      <td> </td>
      <td colspan="3 ">Feature 2</td>
    </tr>
    <tr>
      <td>Feature 2</td>
      <td>—</td>
      <td><b class="check ">✔</b></td>
      <td><b class="check ">✔</b></td>
    </tr>
    <tr class="visible-xs " aria-hidden="true ">
      <td> </td>
      <td colspan="3 ">Feature 3</td>
    </tr>
    <tr>
      <td>Feature 3</td>
      <td>—</td>
      <td>—</td>
      <td><b class="check ">✔</b></td>
    </tr>
    <tr class="visible-xs " aria-hidden="true ">
      <td> </td>
      <td colspan="3 ">Feature 4</td>
    </tr>
    <tr>
      <td>Feature 4</td>
      <td>—</td>
      <td>—</td>
      <td><b class="check ">✔</b></td>
    </tr>
  </tbody>
</table>

</div>

</div>
<br><br>

                <button class="btn btn-primary nextBtn btn-lg pull-right " type="button " >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content " id="step-3 ">
        <div class="col-xs-12 ">
            <div class="col-md-12 ">
                <h3> Service Provider</h3>
                

<!-- Text input-->
<div class="form-group ">
  <label class="col-md-4 control-label " for="sd_modulepath ">SD ModulePath</label>  
  <div class="col-md-5 ">
  <input id="sd_modulepath " name="sd_modulepath " type="text " placeholder=" " class="form-control input-md ">
    
  </div>
</div>
<br>
<br>
<!-- Text input-->
<div class="form-group ">
  <label class="col-md-4 control-label " for="sd_filename ">SD File Name</label>  
  <div class="col-md-5 ">
  <input id="sd_filename " name="sd_filename " type="text " placeholder=" " class="form-control input-md ">
    
  </div>
</div>
<br>
<br>
                 <button class="btn btn-primary nextBtn btn-lg pull-right " type="button " >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content " id="step-4 ">
        <div class="col-xs-12 ">
            <div class="col-md-12 " >
                <h3> Actions</h3>
                <div id="field ">
                <div id="field0 ">
<!-- Text input-->
<div class="form-group ">
  <label class="col-md-4 control-label " for="action_id ">Action Id</label>  
  <div class="col-md-5 ">
  <input id="action_id " name="action_id " type="text " placeholder=" " class="form-control input-md ">
    
  </div>
</div>
<br><br>
<!-- Text input-->
<div class="form-group ">
  <label class="col-md-4 control-label " for="action_name ">Action Name</label>  
  <div class="col-md-5 ">
  <input id="action_name " name="action_name " type="text " placeholder=" " class="form-control input-md ">
    
  </div>
</div>
<br><br>
       <!-- File Button --> 
<div class="form-group ">
  <label class="col-md-4 control-label " for="action_json ">Action JSON File</label>
  <div class="col-md-4 ">
              <input type="file " id="action_json " name="action_json " class="input-file " accept=".txt,.json ">
     <div id="action_jsondisplay "></div>
  </div>
</div>

</div>
</div>
<!-- Button -->
<div class="form-group ">
  <div class="col-md-4 ">
    <button id="add-more " name="add-more " class="btn btn-primary ">Add More</button>
  </div>
</div>
<br><br>
                <button class="btn btn-primary nextBtn btn-lg pull-right " type="button " >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content " id="step-5 ">
        <div class="col-xs-12 ">
            <div class="col-md-12 ">
                <h3> Email Templates</h3>
                
                <!-- Text input-->
<div class="form-group ">
  <label class="col-md-4 control-label " for="emailType ">Email Type</label>  
  <div class="col-md-5 ">
  <input id="emailType " name="emailType " type="text " placeholder=" " class="form-control input-md ">
    
  </div>
</div>

<br>
<br>
<!-- Text input-->
<div class="form-group ">
  <label class="col-md-4 control-label " for="description ">Description</label>  
  <div class="col-md-5 ">
  <input id="description " name="description " type="text " placeholder=" " class="form-control input-md ">
    
  </div>
</div>
<br>
<br>

<!-- Text input-->
<div class="form-group ">
  <label class="col-md-4 control-label " for="subject ">Subject</label>  
  <div class="col-md-5 ">
  <input id="subject " name="subject " type="text " placeholder=" " class="form-control input-md ">
    
  </div>
</div>
<br>
<br>

<!-- Textarea -->
<div class="form-group ">
  <label class="col-md-4 control-label " for="body ">Body</label>
  <div class="col-md-4 ">                     
    <textarea class="form-control " id="body " name="body "></textarea>
  </div>
</div>

                 <button class="btn btn-primary nextBtn btn-lg pull-right " type="button " >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content " id="step-6 ">
        <div class="col-xs-12 ">
            <div class="col-md-12 ">
                <h3> Preview & Submit</h3>
                <button class="btn btn-success btn-lg pull-right " type="submit ">Submit</button>
            </div>
        </div>
    </div>
</form>
</div>

<?php include 'footer.php'; ?>
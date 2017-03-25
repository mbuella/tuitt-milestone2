<?php $title = 'Sign Up | kwntu' ?>

<?php ob_start() ?>

<main class="container">
	<div class="panel" style="padding: 20px;">
	    <div class="row">       
	        <div class="col-md-12">         
	            <form method="POST"
	                  id="signup_form">
	                <h2>Join kwntu</h2>
	                <div class="row">
	                    <div class="col-md-6 col-sm-6">
	                        <div class="form-group">
	                            <label for="signup_fname">
	                                First Name:
	                            </label>
	                            <input type="text"
	                                   class="form-control"
	                                   name="signup[fname]"
	                                   id="signup_fname"
	                                   value=""
	                                   required
	                                   autofocus>
	                        </div>                        
	                    </div>
	                    <div class="col-md-6  col-sm-6">
	                        <div class="form-group">
	                            <label for="signup_lname">
	                                Last Name:
	                            </label>
	                            <input type="text"
	                                   class="form-control"
	                                   name="signup[lname]"
	                                   id="signup_lname"
	                                   value=""
	                                   required>
	                        </div>
	                        
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label for="signup_address">
	                        Address:
	                    </label>
	                    <textarea name="signup[address]"
	                              rows="3"
	                              class="form-control" 
	                              id="signup_address"></textarea>
	                </div>
	                <div class="row">
		                <div class="col-md-6 col-sm-6">
			                <div class="form-group">
			                    <label for="signup_pgenre">
			                        What are your favorite book genres?:
			                    </label>                    
	                            <input type="text"
	                                   class="form-control"
	                                   name="signup[pgenre]"
	                                   id="signup_pgenre"
	                                   value="">
			                </div>		                	
		                </div>
		                <div class="col-md-6 col-sm-6">		                	
			                <div class="form-group">
			                    <label for="signup_datebirth">
			                        Date of birth:
			                    </label>			                    
	                            <input type="date"
	                                   class="form-control"
	                                   name="signup[datebirth]"
	                                   id="signup_datebirth"
	                                   value="">
			                </div>		             
		                </div>	                	
	                </div>
	                <div class="row">
	                    <div class="col-md-6 col-sm-6">
	                        <div class="form-group">
	                            <label for="signup_gender"
	                                   id="gender-label"
	                                   style="display: block;">
	                                Gender:
	                            </label>
	                            <label class="radio-inline">
	                                <input type="radio"
	                                       name="signup[gender]"
	                                       value="male"
	                                       required>
	                                    Male
	                            </label>
	                            <label class="radio-inline">
	                                <input type="radio"
	                                       name="signup[gender]"
	                                       value="female"
	                                       required>
	                                    Female
	                            </label>
	                            <label class="radio-inline">
	                                <input type="radio"
	                                       name="signup[gender]"
	                                       value="other"
	                                       required>
	                                    Other
	                            </label>
	                        </div>                        
	                    </div>
	                    <div class="col-md-6 col-sm-6">
	                        <div class="form-group">
	                            <label for="signup_cname">
	                                Preferred Codename:
	                            </label>
	                            <input type="text"
	                                   class="form-control"
	                                   name="signup[cname]"
	                                   id="signup_cname"
	                                   value=""
	                                   required>
	                        </div>                        
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-6 col-sm-6">
	                        <div class="form-group">
	                            <label for="signup_pword">
	                                Preferred Password:
	                            </label>
	                            <input type="password"
	                                   class="form-control"
	                                   name="signup[pword]"
	                                   id="signup_pword"
	                                   required>
	                        </div>                        
	                    </div>
	                    <div class="col-md-6 col-sm-6">
	                        <div class="form-group">
	                            <label for="signup_pword2">
	                                Confirm Password:
	                            </label>
	                            <input type="password"
	                                   class="form-control"
	                                   name="signup[pword2]"
	                                   id="signup_pword2"
	                                   required>
	                        </div>                        
	                    </div>
	                </div>
	                <button type="reset"
	                        class="btn btn-warning">
	                    Clear
	                </button>
	                <button type="submit"
	                        name="signup[submit]"
	                        class="btn btn-primary pull-right">
	                    Submit
	                </button>               
	                
	            </form>
	        </div>
	    </div>
		
	</div>
</main>

<?php $main = ob_get_clean() ?>

<?php include '../src/templates/layout.php' ?>
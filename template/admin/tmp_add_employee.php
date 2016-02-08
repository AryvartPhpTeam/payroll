<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i><?php echo $title;?></h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
						<li><i class="icon_document_alt"></i>Add Employee</li>
						
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
					  
					  
                          <header class="panel-heading">
                             <?php echo isset($employee) ? 'Edit' : 'Add';?> Employee 
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal " method="post"  id="news_form">
                                  
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Employee NO</label>
                                      <div class="col-lg-4">
                                          <input required type="text" name="empno" value="<?php echo isset($employee) ? $employee['empno'] : '';?>" class="form-control" placeholder="placeholder">
                                
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Employee Name</label>
                                      <div class="col-lg-4">
                                          <input required type="text" name="empname" value="<?php echo isset($employee) ? $employee['empname'] : '';?>" class="form-control" placeholder="placeholder" id="based">
                                
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Designation</label>
                                      <div class="col-lg-4">
                                          <input required type="text" name="designation" value="<?php echo isset($employee) ? $employee['designation'] : '';?>" class="form-control" placeholder="placeholder" id="based1">
                                
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Date of Joining </label>
                                      <div class="col-lg-4">
                                          <input  type="date" id="demo" name="doj" value="<?php echo isset($employee) ? $employee['doj'] : '';?>" class="form-control" placeholder="placeholder">
                                
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Gross/Basic</label>
                                      <div class="col-lg-4">
                                          <input required type="text" name="gross" value="<?php echo isset($employee) ? $employee['gross'] : '';?>" class="form-control" placeholder="placeholder" id="basic">
                                
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">TA</label>
                                      <div class="col-lg-4">
                                          <input required type="text" name="ta" value="<?php echo isset($employee) ? $employee['ta'] : '';?>" class="form-control" placeholder="placeholder" id="basic1">
                                
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">DA</label>
                                      <div class="col-lg-4">
                                          <input required type="text" name="da" value="<?php echo isset($employee) ? $employee['da'] : '';?>" class="form-control" placeholder="placeholder" id="basic2">
                                
                                      </div>
                                  </div>
                                  
								                 <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                            </form>
                          </div>
                      </section>
					 </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
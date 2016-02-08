<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i><?php echo $title; ?></h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?php echo BASE_URL.'admin/dashboard.php'?>">Home</a></li>
						<li><i class="icon_document_alt"></i>Employee</li>
						<li><i class="fa fa-file-text-o"></i>Employee Management</li>
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                            Employee Management
                          </header>
                          <div class="panel-body">
                              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Employee List 
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class=""></i>Employee No</th>
                                 <th><i class=""></i>Employee Name</th>
                                 <th><i class=""></i>Designation</th>
                                 <th><i class=""></i>Date of Joining</th>
                                 <th><i class=""></i>Gross</th>
                                 <th><i class=""></i>TA</th>
                                 <th><i class=""></i>DA</th>
								                 <th><i class=""></i>Author</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                              <?php foreach($news_res as $res){?>
							                <tr>
                                 <td><?php echo $res['empno'];?></td>
                                 <td><?php echo $res['empname'];?></td>
                                 <td><?php echo $res['designation'];?></td>
                                 <td><?php echo date("d-m-Y", strtotime($res['doj']))?></td>
                                 <td><?php echo $res['gross'];?></td>
                                 <td><?php echo $res['ta'];?></td>
                                 <td><?php echo $res['da'];?></td>
                                 <td><?php echo $ownobj->getusername($res['user_id']);?></td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="<?php echo BASE_URL.'admin/add_employee.php?id='.$res['id']?>"><i class="fa fa-pencil"></i></a>
                                      <a class="btn btn-danger" href="<?php echo BASE_URL.'admin/employee.php?delete='.$res['id']?>"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
                               <?php }?>                            
                           </tbody>
                        </table>
						           <?php echo $ownobj->getpagination('employee', $page, $per_page);?>
                      </section>
                  </div>
              </div>
                          </div>
                      </section>
					 </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
<!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="<?php echo BASE_URL.'admin/dashboard.php'?>">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Employee</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?php echo BASE_URL.'admin/add_employee.php'?>">Add Employee</a></li>                          
                          <li><a class="" href="<?php echo BASE_URL.'admin/employee.php'?>">Employee Management</a></li>
						  
                      </ul>
                  </li>
                  <li class="sub-menu">
                  <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Payslip</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?php echo BASE_URL.'admin/add_payslip.php'?>">Add Payment</a></li>                          
                          <li><a class="" href="<?php echo BASE_URL.'admin/payslip.php'?>">Payment Management</a></li>
              
                      </ul>
                  </li>            
				  		
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
<!--main content start-->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>   
<script type="text/javascript">

function fetch_select(val)
{
  
   $.ajax({
     type: 'post',
     url: 'fetch.php',
     data: {
       empno:val
     },
     success: function (response) {
       document.getElementById("new_select").innerHTML=response; 
     }
   });
   
}

</script>
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i><?php echo $title;?></h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
						<li><i class="icon_document_alt"></i>Add Paylist</li>
						
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
					  
					  
                          <header class="panel-heading">
                             paylist 
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal " method="post"  id="pay_form">
                                  
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Employee NO</label>
                                      <div class="col-lg-4">
                                          <select name="employeeno"  class="form-control" placeholder="placeholder" id="employee" onchange="fetch_select(this.value);">
                                        <option required value="" >select</option>
                                        <?php foreach($employee as $res){ ?>
                                        <option  value="<?php echo $res['empno']; ?>" ><?php echo $res['empno']; ?></option>
                                        <?php } ?>
                                      </select>
                                      <div id="new_select" class="form-group">
                                      
                                      </div>
                                
                                      </div>
                                  </div>
                                 
                                  
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">No Of days leave </label>
                                      <div class="col-lg-4">
                                          <input required type="text"  name="leave" value="" class="form-control" placeholder="placeholder">
                                
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Month</label>
                                     <div class="col-lg-4">
                                          <select name="month">
                                              <?php foreach(array('01','02','03','04','05','06','07','08','09','10','11','12') as $m) : ?>
                                              <option value="<?php echo $m; ?>" <?php if (date('m') == $m) { echo 'selected="selected"'; } ?>>
                                             <?php echo $m ?>
                                              </option>
               <?php endforeach; ?>
            </select>
        </div>
        </div>
        <div class="form-group">
           <label class="col-sm-2 control-label">Year</label>
           <div class="col-lg-4">
         <select name="year">
    <?php
                    $year = date('Y');
                    $add = $year - 2;
                    for($i=$add;$i<=$year;$i++)
                    {
                        echo '<option value='.$i.'>'.$i.'</option>';
                     }
                 ?>
            </select>
        </div>
        </div>
                                  
                                  
								                 <button class="btn btn-primary" name="submit" type="submit"  >Submit</button>
                            </form>
                          </div>
                      </section>
					 </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
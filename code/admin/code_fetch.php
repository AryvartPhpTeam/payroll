<?php
   
           
   if(isset($_POST['empno']))
   {
     $host = 'localhost';
     $user = 'root';
     $pass = '123';
           
     mysql_connect($host, $user, $pass);

     mysql_select_db('payrole');
      

     $empno = $_POST['empno'];
     $find=mysql_query("select * from employee where empno='$empno'");
    
     echo"<table>";
     while($row=mysql_fetch_array($find))
     { 
      ?>
        <br>
            <label class="col-sm-2 control-label">Employee Name  </label>
            <div class="col-sm-10">
              <input required type="text"  name="" value="<?php echo $row['empname']; ?>" class="form-control" placeholder="placeholder">
           </div>
        
          <br><br><br>
            <label class="col-sm-2 control-label">Designation</label>
            <div class="col-sm-10">
                <input required type="text"  name="" value="<?php echo $row['designation']; ?>" class="form-control" placeholder="placeholder">
            </div>
          <br><br><br>
             <label class="col-sm-2 control-label">Date of Joining</label>
              <div class="col-sm-10">
                <input required type="text"  name="" value="<?php echo $row['doj']; ?>" class="form-control" placeholder="placeholder">
              </div>
          
      <?php 
          }
   echo"</table>";
     exit;
   }

?>
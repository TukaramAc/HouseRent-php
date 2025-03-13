<?php
include("navbar.php");
$con=mysqli_connect('localhost','root','','house_rent');

?>


<style>
		table{
			
			display:block;
			overflow-x:auto;
			white-space:nowrap;
		}
		.table_wrapper{
			display:block;
			overflow-x:auto;
			white-space:nowrap;
		}
</style>
 <!-- Table Head States -->
    <div class="container-xxl">
      <div class="card-header">
        <center><h1 style="color:skyblue;font-style:italic;margin-top:50px">Owner Details</h1></center>
      
      <div class="card-body">
         <div class="container-xxl bg-white" id="menu1" display="none">
            <div  class="table_wrapper">
              <table class="table table-bordered table-hover ">
				<thead style="background-color:skyblue">
                    <tr>
					  <th>Id.</th>
					  <th>Photo</th>
					  <th>Name</th>
					  <th>Email</th>
					  <th>Password</th>
					  <th>Contact No</th>
					  <th>Address</th>
					  <th>Type ID</th>
                    </tr>
				</thead>
          <tbody> 
				<?php
		
				$sql1="select * from register where user_type='owner'";
				$res1=mysqli_query($con,$sql1);
				while($rw1=mysqli_fetch_row($res1))
				{
					?>
					<tr style="font-style:italic;">
					<td><?php echo $rw1[0]; ?></td>
					<td><img src="../../AdminPanel/theme/image/<?php echo $rw1[1]; ?>" height="100px" width="100px" style="margin-top:20px;border-radius:20px">
					</td>
					<td><?php echo $rw1[2]; ?></td>
					<td><?php echo $rw1[3]; ?></td>
					<td><?php echo $rw1[4]; ?></td>
					<td><?php echo $rw1[5]; ?></td>
					<td><?php echo $rw1[6]; ?></td>
					<td><?php echo $rw1[7]; ?></td>
					</tr>
					<?php
				}
				?>
				</tbody>
        </table>
      </div>
    </div>
  </div>

</div>
</div>
          
        
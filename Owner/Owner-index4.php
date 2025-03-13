<?php
include("navbar.php");
$con=mysqli_connect('localhost','root','','house_rent');
$sq="select id from register where email='$user'";
$res=mysqli_query($con,$sq);
$rw=mysqli_fetch_row($res);
$own_id=$rw[0];
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
    <div class="card card-default">
      <div class="card-header">
        <center><h1 style="color:pink;font-style:italic;margin-top:50px;">View Property</h1></center>

      <div class="card-body">
         <div class="container-xxl" id="menu1" display="none">
            <div  class="table_wrapper">
              <table class="table table-bordered table-hover ">
				<thead class="thead-light" style="background-color:pink">
                    <tr>
					  <th>Id.</th>
					  <th>Photo</th>
					  <th>Country</th>
					  <th>Province/State</th>
					  <th>Zone</th>
					  <th>District</th>
					  <th>City</th>
					  <th>VDC/Municipality</th>
					  <th>Ward No.</th>
					  <th>Tole</th>
					  <th>Contact No.</th>
					  <th>Property Type</th>
					  <th>Estmated Price</th>
					  <th>Total Rooms</th>
					  <th>Bedroom</th>
					  <th>Living Room</th>
					  <th>Kitchen</th>
					  <th>Bathroom</th>
					  <th>Description</th>
                    </tr>
				</thead>
          <tbody> 
				<?php
		
				$sql1="select * from add_property where own_id='$own_id'";
				$res1=mysqli_query($con,$sql1);
				while($rw1=mysqli_fetch_row($res1))
				{
					?>
					<tr style="font-style:italic;">
					<td><?php echo $rw1[0]; ?></td>
					<td><img src="image/<?php echo $rw1[1]; ?>" height="100px" width="100px" style="margin-top:20px;border-radius:20px">
					</td>
					<td><?php echo $rw1[2]; ?></td>
					<td><?php echo $rw1[3]; ?></td>
					<td><?php echo $rw1[4]; ?></td>
					<td><?php echo $rw1[5]; ?></td>
					<td><?php echo $rw1[6]; ?></td>
					<td><?php echo $rw1[7]; ?></td>
					<td><?php echo $rw1[8]; ?></td>
					<td><?php echo $rw1[9]; ?></td>
					<td><?php echo $rw1[10]; ?></td>
					<td><?php echo $rw1[11]; ?></td>
					<td><?php echo $rw1[12]; ?></td>
					<td><?php echo $rw1[13]; ?></td>
					<td><?php echo $rw1[14]; ?></td>
					<td><?php echo $rw1[15]; ?></td>
					<td><?php echo $rw1[16]; ?></td>
					<td><?php echo $rw1[17]; ?></td>
					<td><?php echo $rw1[18]; ?></td>
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
          
        
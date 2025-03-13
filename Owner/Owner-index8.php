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
        <center><h1 style="color:pink;font-style:italic;margin-top:50px;">Client Details</h1></center>

      <div class="card-body">
         <div class="container-xxl" id="menu1" display="none">
            <div  class="table_wrapper">
              <table class="table table-bordered table-hover ">
				<thead class="thead-light" style="background-color:pink">
                    <tr>
					  <th>Id.</th>
					  <th>Photo</th>
					  <th>Name</th>
					
                      <th>Contact</th>
                      <th>Address</th>
                    </tr>
				</thead>
          <tbody> 
            <?php
            $sql="select * from add_property inner join booked_property on add_property.id=booked_property.pid where own_id='$own_id'";
            $res=mysqli_query($con,$sql);
            while($rw=mysqli_fetch_row($res))
            {
            ?>
            <tr>
            <td><?php echo $rw[0];?></td>
            <td><img src="image/<?php echo $rw[1];?>" height="100px" width="100px" style="margin-top:20px;border-radius:20px"></td>
            <td><?php echo $rw[21];?></td>
            <td><?php echo $rw[10];?></td>
            <td><?php echo $rw[22];?></td>
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
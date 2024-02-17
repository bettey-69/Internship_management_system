<?php
include('include/header.php');

include('include/navbar.php');
?>
<style type="text/css">
<!--
.style1 {
	font-family: "Courier New", Courier, monospace;
	font-size: 60px;
	color: black;
	font-style: italic;
}
.style2 {
	font-size: 24px;
	color: skyblue;
}
.style6 {font-size: 16px}
-->
</style>
<table width="800" border="1" align="center">
      <tr>
        <td bordercolor="#330033" bgcolor="#CCCCFF"><h1 align="center"><strong><span class="style1">Attendance report</span></strong></h1></td>
      </tr>
      <tr>
        <td bgcolor="#999966"><div align="center">
       					        				</div>       </td>
      </tr>
      <tr>
        <td><div align="center">
        <form action="" method="post">
         
          </form>
        </div></td>
      </tr>
		<?php
		if(isset($_POST["btnsubmit"]))
		{
			include 'connection.php';
			extract($_POST);
			$query = "select * from `user` where stud_num = '.$eno.' limit 1";

			$result = mysqli_query($con,$query)or die("select error error");
			while($rec = mysqli_fetch_array($result))
			{
				echo '<tr><td colspan="2"><table width="400" border="2" align="center" bordercolor="#9966FF" bgcolor="black">
				<tr>
				  <td width="160" bgcolor="black"><span class="style2">stud_num</span></td>
				  <td width="160" bgcolor="black"><span class="style2">Name</span></td>';
				  $query1 = "select * from `attendance` where `stud_id` = ".$rec["stud_id"]." order by date";
					$result1 = mysqli_query($con,$query1)or die("select error error");
					while($rec1 = mysqli_fetch_array($result1))
					{
				  		echo '<td bgcolor="#9999CC" class=style2>'.$rec1["date"].'</td>';
					}
				echo '</tr>
				<tr>
				  <td width="222"><span class="style6">'.$rec["stud_num"].'</span></td>
				  <td width="222"><span class="style6">'.$rec["firstname"].'</span></td>';
				  $query1 = "select *from `attandance` where `member_id` = ".$rec["stud_id"]." order by date";
					$result1 = mysqli_query($con,$query1)or die("select error error");
					while($rec1 = mysqli_fetch_array($result1))
					{
				  		echo '<td>';
						if($rec1["attendance"]==0)
							echo "Absent";
						else
							echo "Present";
						echo '</td>';
					}
				
				echo '
				</tr>
								
			  </table></td></tr>';
			}
		}
		else
		{
			include 'connection.php';
			extract($_POST);
			$query = "select * from `user` ";

			$result = mysqli_query($con,$query)or die("select error error");
			while($rec = mysqli_fetch_array($result))
			{
				echo '<tr><td colspan="2"><table width="90%" border="2" align="center" bordercolor="#9966FF" bgcolor="#C7B6B1">
				<tr>
				  <td width="160" bgcolor="white"><span class="style2">stud_num</span></td>
				  <td width="160" bgcolor="white"><span class="style2">Name</span></td>';
				  $query1 = "select * from `attendance` where `stud_id` = ".$rec["stud_id"]." order by date";
					$result1 = mysqli_query($con,$query1)or die("select error error");
					while($rec1 = mysqli_fetch_array($result1))
					{
				  		echo '<td bgcolor="white" class=style2>'.$rec1["date"].'</td>';
					}
				echo '</tr>
				<tr>
				  <td width="222"><span class="style6">'.$rec["stud_num"].'</span></td>
				  <td width="222"><span class="style6">'.$rec["firstname"].'</span></td>';
				  $query1 = "select *from `attendance` where `stud_id` = ".$rec["stud_id"]." order by date";
					$result1 = mysqli_query($con,$query1)or die("select error error");
					while($rec1 = mysqli_fetch_array($result1))
					{
				  		echo '<td>';
						if($rec1["attendance"]==0)
							echo "Absent";
						else
							echo "Present";
						echo '</td>';
					}
				
				echo '
				</tr>
								
			  </table></td></tr>';
			}
		}
		?>    
	</table>
<?php
include('include/scripts.php');

include('include/footer.php');
?>
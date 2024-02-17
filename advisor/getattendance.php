<?php
include('include/header.php');

include('include/navbar.php');
?>

</style>
<script type="text/javascript">
	function getatt(value)
	{
		if(value == true)
		{
			document.getElementById("txtAbsent").value = parseInt(document.getElementById("txtAbsent").value) - 1;
			document.getElementById("txtPresent").value = parseInt(document.getElementById("txtPresent").value) + 1;
		}
		else
		{
			document.getElementById("txtAbsent").value = parseInt(document.getElementById("txtAbsent").value) + 1;
			document.getElementById("txtPresent").value = parseInt(document.getElementById("txtPresent").value) - 1;
		}
	}
</script>


<table width="800" border="1" align="center">
      <tr>
        <td bordercolor="#330033" bgcolor="white"><h1 align="center"><strong><span class="style1">Attendance </span></strong></h1></td>
      </tr>
      <tr>
        <td bgcolor="white"><div align="center">
       					
        				</div>       </td>
      </tr>
      <tr>
        <td>
        <form action="getattendance1.php" method="post">
        <table width="250px" align="left" style="">
            	<tr>
                	<td> Select date : <br />
                   <?php 
				 		    $dt = getdate();
							$day = $dt["mday"];
							$month = date("m");
							$year = $dt["year"];
							
							echo "<select name='cdate'>";
							for($a=1;$a<=31;$a++)
							{
								if($day == $a)
									echo "<option value='$a' selected='selected'>$a</option>";
								else
									echo "<option value='$a' >$a</option>";
							}
							echo "</select><select name='cmonth'>";
							for($a=1;$a<=12;$a++)
							{
								if($month == $a)
									echo "<option value='$a' selected='selected'>$a</option>";
								else
									echo "<option value='$a' >$a</option>";
							}
							echo "</select><select name='cyear'>";
							for($a=2010;$a<=$year;$a++)
							{
								if($year == $a)
									echo "<option value='$a' selected='selected'>$a</option>";
								else
									echo "<option value='$a' >$a</option>";
							}
							echo "</select>";
						?>                    
                    </td>
                </tr>
             </table>	
        
          <table width="500" border="2" align="center" bordercolor="black" bgcolor="white" style="margin-left:20px;">
            <tr>
              <td colspan="3" bgcolor="white"><div align="center"><strong><span class="style2">Get Attendance</span></strong></div></td>
            </tr>
            <tr bgcolor="white">
              <td width="114"><span class="style7">stud no</span></td>
              <td width="152"><span class="style7">Name</span></td>
              <td width="110"><span class="style7">Attend</span></td>
            </tr>
            <?php
				include 'connection.php';
				extract($_POST);
				$query = "select *from `user` order by `stud_id`";
				$s = 0;
				$result = mysqli_query($con,$query)or die("select error");
				while($rec = mysqli_fetch_array($result))
				{
					$s = $s + 1;
					echo ' <tr>
							  <td width="114">'.$rec["stud_num"].'</td>
							  <td width="152">'.$rec["firstname"].'</td>
							  <td width="110"><input type=checkbox name='.$rec["stud_id"].' onclick="getatt(this.checked);"/></td>
							</tr>';
				}
			?>			
            <tr>
              <td colspan="3"><div align="center">
                <input type="submit" value="Get Attendance" name="btnsubmit"/>
                &nbsp;&nbsp;</div></td>
            </tr>
          </table>
          </form>
         
         	<table width="100px" align="left" style="margin-left:35px">
            	<tr>
                	<td> Total Absent : <input type="text" id="txtAbsent" value="<?php print $s; ?>" size="10" disabled="disabled"/></td>
                </tr>
                <tr>
                	<td> Total Present : <input type="text" id="txtPresent" value="0" size="10"  disabled="disabled"/></td>
                </tr>
                <tr>
                	<td> Total Strength : <input type="text" id="txtStrength" value="<?php print $s; ?>" size="10" disabled="disabled"/></td>
                </tr>
             </table>
         
         </td>
      </tr>
    </table>

<?php include ( 'include/footer.php');

 include ( 'include/scripts.php');?>
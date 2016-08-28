<?php
				$hs_marks="";
				$ss_marks="";
				$graduation_marks="";
				
				$hs_marks = $_GET["hs_marks"];
				$ss_marks = $_GET["ss_marks"];
				$graduation_marks = $_GET["graduation_marks"];
				
				
				$conn = new mysqli("localhost", "root", "", "campusfinale");
				if ($conn->connect_error) {
					echo "Connection failed: " . $conn->connect_error;
				} 
				else
				{
					$sql = 'select * from student where HS >=';
					$sql.=$hs_marks;
					$sql.=' and SS >=';
					$sql.=$ss_marks;
					$sql.=' and GRADUATION >=';
					$sql.=$graduation_marks;
					$sql.=';';
					
					$result = $conn->query($sql);
					if($result->num_rows > 0)
					{
							echo $result->num_rows;
					}
					else
					{
						echo "0";
					}
				}
				
				
			?>

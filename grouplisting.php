<?php
include("db.php");
$grouplist_query = "SELECT * FROM groups";
				$result = mysqli_query($conn, $grouplist_query);
				$fetch_groupslist = mysqli_num_rows($result) > 0;
				if($fetch_groupslist){
					while($row=mysqli_fetch_array($result)) {
					    //echo $row['category_name'] . "<br/>";
					    $grtitle = $row['group_title'];
					    $grdescription = $row['group_description'];
					    $grimage = $row['group_picture'];
					   // echo $grtitle . "-" . $grdescription . "-" . $grimage . "<br/>";
                       // $grcategory_arr[] = array("catid" => $grcategoryid,"catname" => $grcategory);
					}
				}
				// encoding array to json format
                //echo json_encode($grcategory_arr);
?>
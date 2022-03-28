<?php
include("db.php");
$groupcategory_query = "SELECT * FROM groups_categories";
				$result = mysqli_query($conn, $groupcategory_query);
				$fetch_groupscategory = mysqli_num_rows($result) > 0;
				if($fetch_groupscategory){
					while($row=mysqli_fetch_array($result)) {
					    //echo $row['category_name'] . "<br/>";
					    $grcategoryid = $row['category_id'];
					    $grcategory = $row['category_name'];
                        $grcategory_arr[] = array("catid" => $grcategoryid,"catname" => $grcategory);
					}
				}
				// encoding array to json format
                echo json_encode($grcategory_arr);
?>
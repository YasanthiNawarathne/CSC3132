<?php
    require_once '../11_20/connectDB.php';

    try {
        $sql = " SELECT * from Student";

        $result = mysqli_query($connect,$sql);

        if (mysqli_num_rows($result)>0) {
            while ($row = mysqli_fetch_assoc($result)){
                print_r($row);
            } 
        }else {
            echo "No results";
            
        }
    
    } catch (Exception $e) {
        die($e ->getMessage());
	}
?>
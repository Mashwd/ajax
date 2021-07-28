<?php
	require 'DatabaseOperations.php';
	$flag = false; 
	$idErr = "";
	$id = "";
	if($_SERVER['REQUEST_METHOD'] === "POST")
	{
		$id = $_POST['id'];
		if(empty($id))
		{
			$idErr = "To search a user information, provide an ID number.";
			info1();
			$flag = true;
		}
		if(!$flag)
		{
			$res = isExist($id);
			if($res == 1)
			{
				info();
			}
			else
			{
				$idErr = "Not Found.";
				info1();
			}
		}
		
	}
		
	function info(){
		$data = findUserData($GLOBALS['id']);
		//$data = $data->fetch_assoc();
		echo "<table border = 2px style='margin-left: auto; margin-right: auto'>";
	    echo "<tr>";
	    echo "<th>";
	    echo "Id";
	    echo "</th>";
	    echo "<th>";
	    echo "First Name";
	    echo "</th>";
		echo "<th>";
	    echo "Last name";
	    echo "</th>";
	    echo "<th>";
	    echo "Gender";
	    echo "</th>";
	    echo "<th>";
	    echo "Birthday";
	    echo "</th>";
	    echo "<th>";
	    echo "Religion";
	    echo "</th>";
	    echo "<th>";
	    echo "Email";
	    echo "</th>";
	    echo "<th>";
	    echo "Username";
	    echo "</th>";
	    echo "<th>";
	    echo "Present Address";
	    echo "</th>";
	    echo "<th>";
	    echo "Permanent Address";
	    echo "</th>";
	    echo "<th>";
	    echo "Phone";
	    echo "</th>";
	    echo "<th>";
	    echo "Weblink";
	    echo "</th>";
	    echo "</tr>"; 
	    if(!empty($data)){
			foreach($data as $item) {
				echo "<tr>";
				echo "<td style ='color: blue;'>";
				echo $item['id'];
				echo "</td>";
				echo "<td style ='color: blue;'>";
				echo $item['firstname'];
				echo "</td>";
				echo "<td style ='color: blue;'>";
				echo $item['lastname'];
				echo "</td>";
				echo "<td style ='color: blue;'>";
				echo $item['gender'];
				echo "</td>";
				echo "<td style ='color: blue;'>";
				echo $item['birthday'];
				echo "</td>";
				echo "<td style ='color: blue;'>";
				echo $item['religion'];
				echo "</td>";
				echo "<td style ='color: blue;'>";
				echo $item['email'];
				echo "</td>";
				echo "<td style ='color: blue;'>";
				echo $item['userName'];
				echo "</td>";
				echo "<td style ='color: blue;'>";
				echo $item['pAddress'];
				echo "</td>";
				echo "<td style ='color: blue;'>";
				echo $item['perAddress'];
				echo "</td>";
				echo "<td style ='color: blue;'>";
				echo strval($item['phone']);
				echo "</td>";
				echo "<td style ='color: blue;'>";
				echo strval($item['weblink']);
				echo "</td>";
				echo "</tr>";
		    }
		    
		}
	    echo "</table>";
	}

	function info1()
	{
		$data = getAllUsers();
		//$data = $data->fetch_assoc();
		echo "<table border = 2px style='margin-left: auto; margin-right: auto'>";
	    echo "<tr>";
	    echo "<th>";
	    echo "Id";
	    echo "</th>";
	    echo "<th>";
	    echo "First Name";
	    echo "</th>";
		echo "<th>";
	    echo "Last name";
	    echo "</th>";
	    echo "<th>";
	    echo "Gender";
	    echo "</th>";
	    echo "<th>";
	    echo "Birthday";
	    echo "</th>";
	    echo "<th>";
	    echo "Religion";
	    echo "</th>";
	    echo "<th>";
	    echo "Email";
	    echo "</th>";
	    echo "<th>";
	    echo "Username";
	    echo "</th>";
	    echo "<th>";
	    echo "Present Address";
	    echo "</th>";
	    echo "<th>";
	    echo "Permanent Address";
	    echo "</th>";
	    echo "<th>";
	    echo "Phone";
	    echo "</th>";
	    echo "<th>";
	    echo "Weblink";
	    echo "</th>";
	    echo "</tr>"; 
	    if(!empty($data)){
			foreach($data as $item) {
					echo "<tr>";
					echo "<td style ='color: blue;'>";
					echo $item['id'];
					echo "</td>";
					echo "<td style ='color: blue;'>";
					echo $item['firstname'];
					echo "</td>";
					echo "<td style ='color: blue;'>";
					echo $item['lastname'];
					echo "</td>";
					echo "<td style ='color: blue;'>";
					echo $item['gender'];
					echo "</td>";
					echo "<td style ='color: blue;'>";
					echo $item['birthday'];
					echo "</td>";
					echo "<td style ='color: blue;'>";
					echo $item['religion'];
					echo "</td>";
					echo "<td style ='color: blue;'>";
					echo $item['email'];
					echo "</td>";
					echo "<td style ='color: blue;'>";
					echo $item['userName'];
					echo "</td>";
					echo "<td style ='color: blue;'>";
					echo $item['pAddress'];
					echo "</td>";
					echo "<td style ='color: blue;'>";
					echo $item['perAddress'];
					echo "</td>";
					echo "<td style ='color: blue;'>";
					echo strval($item['phone']);
					echo "</td>";
					echo "<td style ='color: blue;'>";
					echo strval($item['weblink']);
					echo "</td>";
					echo "</tr>";
		    }
		}
	    echo "</table>";
	
	}	
	
		
?>
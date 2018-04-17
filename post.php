<?php
$conn=mysqli_connect("localhost","root","","kaleem");
if(!$conn){
die("connection faild: ". mysqli_connect_error);
}
else
{	
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$addr=$_POST['addr'];
	$billno=$_POST['billno'];
	//echo $name.' '.$phone;	
	$json=utf8_encode($_POST['json']);
	$phpjson=json_decode($json,true);	
	$rowCount  = count($phpjson);
	echo 'Rowscount: '.$rowCount;
	//var_dump($phpjson,true);
	//$flag=0;
	//$j=1;
	//for($i=0;$i<$rowCount;$i++)
	//{					
	//	//echo $i.'<br><br>';
	//	//var_dump($phpjson[$i]);
	//	//echo '<br><br>';			
	//	$buf[$i][0]=$phpjson[$i]['Item_Description'];
	//	$buf[$i][1]=$phpjson[$i]['HSN_code'];			
	//	$buf[$i][2]=$phpjson[$i]['Units'];
	//	$buf[$i][3]=$phpjson[$i]['Rate'];
	//	$buf[$i][4]=$phpjson[$i]['Amount'];			
	//	$buf[$i][5]=$phpjson[$i]['TaxbleValue'];
	//	$buf[$i][6]=$phpjson[$i]['CGST_Amt'];
	//	$buf[$i][7]=$phpjson[$i]['SGST_Amt'];
	//	$buf[$i][8]=$phpjson[$i]['Total_Amt'];
	//	//$j=$j+1;
	//	//$flag=1;
	//}		
	$pro=0;
	$custsql = "INSERT INTO customer_info (customer_name, phone, address) VALUES ('$name', '$phone', '$addr');";	
	if (mysqli_query($conn, $custsql)) {
		echo "customer records created successfully";
	} else {
		echo "Error: " . $custsql . "<br>" . mysqli_error($conn);
		$pro = 1;
	}
	if($pro!=1){
		for($i=0;$i<$rowCount;$i++)
		{		
			$Item_Description=$phpjson[$i]['Item_Description'];
			$HSN_code    = $phpjson[$i]['HSN_code'];	
			$Units       = $phpjson[$i]['Units'];
			$Rate        = $phpjson[$i]['Rate'];
			$Amount      = $phpjson[$i]['Amount'];		
			$TaxbleValue = $phpjson[$i]['TaxbleValue'];
			$CGST_Amt    = $phpjson[$i]['CGST_Amt'];
			$SGST_Amt    = $phpjson[$i]['SGST_Amt'];
			$Total_Amt   = $phpjson[$i]['Total_Amt'];
			
			$prosql = "INSERT INTO product_info (customer_name,Item_Description,HSN_code, Units,Rate,Amount,TaxbleValue,CGST_Amt,SGST_Amt,Total_Amt) VALUES ('$name', '$Item_Description','$HSN_code','$Units','$Rate','$Amount','$TaxbleValue','$CGST_Amt','$SGST_Amt','$Total_Amt');";	
			if (mysqli_query($conn, $prosql)) {
				echo "products records created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		}
	}
	else{
		echo "<br>Data not saved";
	}
	
	
	//for($i=0;$i<sizeof($buf);$i++)
	//{		
	//	for($j=0;$j<8;$j++){
	//		echo $buf[$i][$j].'^^^^^';
	//	}
	//	echo '<br>';
	//}
	
	//echo sizeof($buf);
	//var_dump($buf,true);
	
	//if(is_array($value)){
    //        printValues($value);
    //    } 
	//foreach($phpjson as $key=>$value){
	//	echo $key . "=>" . $value . "<br>";
	//}
	//foreach($phpjson as $key=>$value){
        //foreach($phpjson as $users){
		//	//echo $users['Item_Description'].'<br/>';
		//	$sam[$i][0]=$users['Item_Description'];
		//	$sam[$i][1]=$users['HSN_code'];			
		//	$sam[$i][2]=$users['Units'];
		//	$sam[$i][3]=$users['Rate'];
		//	$sam[$i][4]=$users['Amount'];			
		//	$sam[$i][5]=$users['TaxbleValue'];
		//	$sam[$i][6]=$users['CGST_Amt'];
		//	$sam[$i][7]=$users['SGST_Amt'];
		//	$sam[$i][8]=$users['Total_Amt'];
		//	//echo '<br>';
		//}
    //}
	//foreach($sam as $samm){
	//	echo $samm[1];
	//}
	
	//for($i=1;$i<$rowCount-2;$i++)
	//{
	//	
	//	$a=$buf[$i][0];
	//	$b=$buf[$i][1];
	//	$c=$buf[$i][2];
	//	$d=$buf[$i][3];
	//	$e=$buf[$i][4];
	//	$f=$buf[$i][5];
	//	$g=$buf[$i][6];
	//	$h=$buf[$i][7];
	//	$i=$buf[$i][8];
	//	$j=$buf[$i][9];
	//	$k=$buf[$i][10];
	//	
	////$sql = "INSERT INTO product  VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k');";
	//
	////if (mysqli_query($conn, $sql)) {
	////	echo "New records created successfully";
	////} else {
	////	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	////}
	//
	//}
	
	mysqli_close($conn);

//foreach($data as $users){
//   foreach($users as $user){
//      echo $user['id'].' '.$user['c_name'].' '.$user['seat_no'].'<br/>';
//   }
//}

}

	?>
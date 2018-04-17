<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link href="css/kaleem_css.css" rel="stylesheet">
</head>
<style>
.new_head { 
    background-color: #131e35;
    color: #ffffff;
	padding:35px;
	}
.borderline{
	padding:30px;
	border:1px solid #474e5d;
}

td, tr, th {
    border: 1px solid black;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}
td, th {
    min-width: 50px;
    height: 21px;
	text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

span {
    width: 100%;
    display: block;
}

#topbar {
    background: black;
}
#topbar  ul li a {
    color: white;
    font-size: 14px;
}
#topbar ul li a:hover {
    color: #ef173c;
}
ul,li{
	list-style:none;		
}
li{
padding:15px;
}
#topbar  ul li {
    float: left;
}
#topbar .navback ul :hover {
   background-color:rgba(255,255,255,0.2);
}

</style>
<body>
<div class="container-fluid">
    <div class="row" style="margin:0; " id="topbar" >        
        <div class="col-md-6 ">
            <ul>
                <li><a>Abdul Kaleem, Ponnur, Guntur </a></li>
                <li><a>abdulkaleem@gmail.com</a></li>
                <li><a>+91 7732021542</a></li>
            </ul>			
        </div> 
		<div class="col-md-6 ">
			<div class="navback offset-md-6">
				<ul style="margin:0">
					<li ><a href="main.html">Home</a></li>
					<li><a>Customers</a></li>
				</ul>
			</div>			
        </div> 
    </div>   

<div class="new_head text-center">
	<h3>Existing Customer Details</h3>
	<hr width="45%">  
</div>
<div style="margin:50px;">
	<form id="form-valid " method="POST" class="borderline container"  action="post.php">	
	<?php
		$conn=mysqli_connect("localhost","root","","kaleem");
		if(!$conn){
		die("connection faild: ". mysqli_connect_error);
		}
		else
		{	
			//$sql = "SELECT * FROM emp_details";
		}
	?>
	
	<h4 >Customer details</h4>
		<div class="row justify-content-center">
			<div class="form-group col-md-6">
				<label for="billno">Select Customer Name:</label>
				<select name = "experience" style="height:30px; width:250px;">
				<option disabled selected>Customer Names</option>
				<?php								
					$result = mysqli_query($conn, 'SELECT DISTINCT customer_name FROM customer_info');
					if (mysqli_num_rows($result) > 0) {						
					while($row = mysqli_fetch_assoc($result)) {	
						echo '<option value="'.$row["customer_name"].'">'.$row["customer_name"].'</option>';										
						}								
					}
				?> 
				</select>	
				
			</div>
			<div class='col-sm-6'>
				<div class="form-group">
					<div class='input-group date' id='datetimepicker1'>
						<input type='date' class="form-control" />
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				$(function () {
					$('#datetimepicker1').datetimepicker();
				});
			</script>
		</div>		
		<h4 >Add Product details <a class="btn add-row">+</a></h4>
		<div class="row">
			<div class="form-group col-md-6">
				<label for="billno">Bill Number:</label>
				<input type="text" style ="width:200px;display:inline;" class="form-control" id="billno" placeholder="Enter Bill No" name="billno">
			</div>
		</div>
		<div style="overflow-x:auto;">
			<table id="product_details" >
				<thead>
					<tr>
						<th>Item Description</th>
						<th>HSN code</th>				
						<th>Units</th>
						<th>Rate</th>
						<th>Amount</th>          
						<th>TaxbleValue</th>            
						<th>CGST Amt</th>            
						<th>SGST Amt</th>            
						<th>Total Amt</th>            
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="Item_Description" contenteditable="true" required></td>
						<td class="HSN_code"  contenteditable="true"></td>				
						<td class="Units" contenteditable="true"></td>
						<td class="Rate" contenteditable="true"></td>
						<td class="Amount" ></td>				
						<td class="TaxbleValue" contenteditable="true"></td>
						<td class="CGST_Amt" ></td>
						<td class="SGST_Amt" ></td>
						<td class="Total_Amt"contenteditable="true"></td>
					</tr>
					<tr>            
						<td class="Item_Description" contenteditable="true"></td>
						<td class="HSN_code"  contenteditable="true"></td>				
						<td class="Units" contenteditable="true"></td>
						<td class="Rate" contenteditable="true"></td>
						<td class="Amount" ></td>
						<td class="TaxbleValue" contenteditable="true"></td>
						<td class="CGST_Amt" ></td>
						<td class="SGST_Amt" ></td>
						<td class="Total_Amt" contenteditable="true"></td>
					</tr>
					<tr>            
						<td class="Item_Description" contenteditable="true"></td>
						<td class="HSN_code"  contenteditable="true"></td>				
						<td class="Units" contenteditable="true"></td>
						<td class="Rate" contenteditable="true"></td>
						<td class="Amount" ></td>			
						<td class="TaxbleValue" contenteditable="true"></td>
						<td class="CGST_Amt" ></td>
						<td class="SGST_Amt" ></td>
						<td class="Total_Amt" contenteditable="true"></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="row " >
			<div class="col-*-*" style="margin:0 auto; padding-top:30px;" >
				<button type="button" class="btn btn-outline-success update_details" >Submit</button>
				<button type="button" class="btn btn-outline-info cancel">Cancel</button>	
			</div>	
		</div>
		<p id="result"></p>
	</form>
</div>
</div>
<script>
$(document).ready(function(){
	
});

 
function mul(rowIndex,x,temp) { 
	if(temp==1)
		var y=$('tr').find('.Units').eq(rowIndex).text();
	else
		var y=$('tr').find('.Rate').eq(rowIndex).text();	
	if(x!=0 && y!=0)
	{
		var res= parseInt(x)*parseInt(y);
		$('tr ').find('.Amount').eq(rowIndex).text(res);		
		var cgst=res*(9/100);
		$('tr ').find('.CGST_Amt').eq(rowIndex).text(cgst);
		$('tr ').find('.SGST_Amt').eq(rowIndex).text(cgst);
		$('tr ').find('.TaxbleValue').eq(rowIndex).text(res);
		var total=$('tr').find('.TaxbleValue').eq(rowIndex).text();
		var sum=parseInt(total)+(2*cgst);
		$('tr ').find('.Total_Amt').eq(rowIndex).text(sum);
	}
}


$( "#product_details" ).on( "focusout", ".Rate", function(e) {
	var rowIndex = $(this).parent().index();    
	//$( this ).css( "background-color", "green" );
	var x = $( this ).text();
	var temp=1;
	mul(rowIndex,x,temp);
});


$( "#product_details" ).on( "focusout", ".Units", function() {	
	var rowIndex = $(this).parent().index();    	
	var x = $( this ).text();
	var temp=0;
	mul(rowIndex,x);
});


$( "#product_details" ).on( "focusout", ".TaxbleValue", function(e) {
	var rowIndex = $(this).parent().index();    	
	var tax = $( this ).text();
	var x=$('tr').find('.Units').eq(rowIndex).text();
	var y=$('tr').find('.Rate').eq(rowIndex).text();
	var cgst=$('tr').find('.CGST_Amt').eq(rowIndex).text();
	var sum = parseInt(tax)+(2*cgst);
	$('tr ').find('.Total_Amt').eq(rowIndex).text(sum);	
});


$( "#product_details" ).on( "keydown", ".HSN_code,.Units,.Rate", function(e) {	
	if (e.shiftKey || e.ctrlKey || e.altKey ) {
		e.preventDefault(); 				
	}
	else {
		key = e.keyCode;
		//console.log(key);
		if (!((key == 8)||(key == 9)||(key == 46)||(key == 110)||(key == 190)||(key >= 35 && key <= 40) || (key >= 48 && key <= 57) || (key >= 96 && key <= 105))) {
			e.preventDefault();   
		}
	}
});


$(".add-row").on("click",function(){
    var new_row='<tr>\
	<td class="Item_Description" contenteditable="true"></td>\
	<td class="HSN_code"  contenteditable="true"></td>\
	<td class="Units" contenteditable="true"></td>\
	<td class="Rate" contenteditable="true"></td>\
	<td class="Amount" ></td>\
	<td class="TaxbleValue" contenteditable="true"></td>\
	<td class="CGST_Amt" ></td>\
	<td class="SGST_Amt" ></td>\
	<td class="Total_Amt" contenteditable="true"></td>\
	</tr>';            
	$("#product_details").append(new_row);	
});


$(".update_details").on("click",function(){	
    var convertTableToJson = function(){	
        var rows = [];
		var x=1;
		
        $('table tr').each(function(i, n){
            var $row = $(n);
			if(x==1)
			{
				x++;
			}
			else{
				if($.trim($row.find('td:eq(0)').text())!=''){										
					rows.push({
						Item_Description: $.trim($row.find('td:eq(0)').text()),
						HSN_code:  $.trim($row.find('td:eq(1)').text()),						
						Units:     $.trim($row.find('td:eq(2)').text()),  
						Rate:      $.trim($row.find('td:eq(3)').text()), 
						Amount:    $.trim($row.find('td:eq(4)').text()),						
						TaxbleValue:$.trim($row.find('td:eq(5)').text()),
						CGST_Amt:  $.trim($row.find('td:eq(6)').text()),
						SGST_Amt:  $.trim($row.find('td:eq(7)').text()),
						Total_Amt: $.trim($row.find('td:eq(8)').text()),				
					});
				}
				else{					
					//alert("please fill "+(x-1)+" row \n row not filled, so Re-enter row after refresh");
					//console.log(rows);					
				}
				x++;
			}
        });
		return JSON.stringify(rows);	
    };       		
	var json = convertTableToJson();
	//console.log(json);	
	//alert("Data posted");
	var flag=1;
	if(($('#name').val()=="")||($('#phone').val()=="")||($('#addr').val()=="")){
		alert("please enter customer details properly");
		flag=0;
	}	
	if($('#billno').val()==""){
		alert("please enter bill number");
		flag=0;
	}	
	if(flag==1)
	{
		var name = $('#name').val();	
		var phone = $('#phone').val();
		var addr = $('#addr').val();
		var billno = $('#billno').val();
		$.ajax({
			url: "post.php",
			type: "POST",
			data: {json:json,name:name,phone:phone,addr:addr,billno:billno}, 
			success: function (data,success) {			
				$('#result').html(data);
				//window.location.reload();			
			}
		});	
	}
	
});


</script>
</body>
</html>
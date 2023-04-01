<?php
require('vendor/autoload.php');
$con=mysqli_connect('localhost','root','','hritik');
$i=1;
$res=mysqli_query($con,"select * from attendance where `act_id`='" . $_GET['id'] . "'");
if(mysqli_num_rows($res)>0){
	$html='<style>
		.table{
			border-collapse: collapse;
			width:100%;
		} 
		td,th{
			border: 1px solid #000;
			padding: 0.5rem;
			text-align: center;
			font-size: 1rem;
		}
		h5,h4,h2{
			text-align: center;
		}
		h5{
			margin-bottom:2px;
		}
		h4{
			font-weight:500;
			margin:2px;
		}
		h2{
			margin-top:0;
			margin-bottom:2px;
		}
		hr{
			margin-top:0;
			color:#000;
		}
		.hro{
			margin-top:0;
			margin-bottom:10px;
			height:2px;
			color: #000;
			width:20%;
			border:0;
		}
		</style>
		<h5>M.S.P., Mandal&apos;s</h5>
		<h2>Deogiri College, Chhatrapati Sambhajinagar</h2>
			<h4>Department of CS, IT & Animation</h4>
			<h4>(Academic Year 2022-23)</h4>
			<h4>Attendance Report on '. $_GET['name'] .' Activity</h4>
			<hr>
			<h4 class="event_name">Attended Students</h4>
			<hr class="hro">
		<table class="table">
		<tr>
		<th>Sr.No.</th>
		<th>Roll No.</th>
		<th>PRN No.</th>
		<th>Name</th>
		<th>Class</th>
		<th>Attendance</th>
		</tr>';
		while($row=mysqli_fetch_assoc($res)){
			$html.='
			<tr>
			<td>'.$i++.'</td>
			<td>'.$row['roll_no'].'</td>
			<td>'.$row['prn'].'</td>
			<td>'.$row['stu_name'].'</td>
			<td>'.$row['class'].'</td>
			<td>'.$row['att'].'</td>
			</tr>';
		}
	$html.='</table>';
}else{
	$html="Data not found";
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file= time().'.pdf';
$mpdf->output($file,'I');
//D
//I
//F
//S
?>
<?php
require('vendor/autoload.php');
$con=mysqli_connect('localhost','root','','hritik');
$i=1;
$res=mysqli_query($con,"select * from activity where `id`='" . $_GET['id'] . "'");
if(mysqli_num_rows($res)>0){
	$html='<style>
		h2{
		
			text-align: center;
			margin:0;
		}
		h3{
			text-align: center;
			margin-top:0;
		}
		h4{
			text-align: center;
			margin: 0;
			margin-bottom: 6px;
			font-weight:600;
			font-size:1rem;
		}
		h5{
			text-align: center;
			margin:0;
			margin-top:1rem;
		}
		p{
			text-align: center;
			margin:0;
			margin-top:1rem;
		}
		img{
			width:50%;
			margin-left:11.5rem;
			margin-bottom: 1rem;
		}
		.hro{
			margin-top:0;
			margin-bottom:0px;
			height:1px;
			color:black;
			width:100%;
			border:0;
		}
		hr{
			margin-top:0;
			margin-bottom:0px;
			height:2px;
			color: #000;
			width:20%;
			border:0;
		}
		.event_name{
			margin-top:6px;
		}
		.event_main_name{
			margin:7px;
		}
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
		.hk{
			text-align:right;
		}
		.hod{
			margin-right:0.6rem;
			margin-bottom:1.6rem
		}
		</style>';
		while($row=mysqli_fetch_assoc($res)){
			$html.='
			<h5>M.S.P., Mandal&apos;s</h5>
			<h2>Deogiri College, Chhatrapati Sambhajinagar</h2>
			<h4>Department of CS, IT & Animation</h4>
			<h4>(Academic Year 2022-23)</h4>
			<h4>Report on '.$row['act_name'].'</h4>
			<hr class="hro">
			<h4 class="event_name">Activity Report</h4>
			<hr>
			<p></p>
			<table>
			<tr>
			<th>Sr No.</th>
			<th>Name of Activity</th>
			<th>Duration</th>
			<th>Venue</th>
			<th>Time</th>
			<th>Date</th>
			</tr>
			<tr>
			<td>'.$i++.'</td>
			<td>'.$row['act_name'].'</td>
			<td>'.$row['duration'].'</td>
			<td>'.$row['place'].'</td>
			<td>'.$row['time'].'</td>
			<td>'.$row['date'].'</td>
			</tr>
			</table>
			<p></p>
			<p></p>
			<h4 class="event_name">Activity Image</h4>
			<hr>
			<p></p>
			<img class="image" src="uploaded_img/'.$row['image'].'" alt="">

			<h4 class="event_name">About Activity</h4>
			<hr>
			<p></p>
			<p>'.$row['about'].'</p>
			';
		}
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
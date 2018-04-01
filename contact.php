<!DOCTYPE html>
<html>
<head>
	<?php include('includes/header.php'); ?>
	<title>Contact Us</title>
</head>
<body>
	<div class="content-container">
		<?php include('includes/nav.php'); ?>

		<div class="left-section">
			<h1>Enquiries</h1>
			<p>If you have got any queries please feel free to contact us in any form as shown below. You can ring us, email us or even fill out a enquiry form.</p>

			<table>
				<tr>
			    	<td><p><strong>Phone: </strong></p></td>
			    	<td><p> 07 8690569</p></td> 
			  	</tr>
			  	<tr>
			    	<td><p><strong>Email: </strong></p></td>
			    	<td><p>mcgreen@xtra.co.nz</p></td> 
			  	</tr>
			</table>

			<p>Or you can fill out this enquirey form bellow and we will get back to you as soon as possable. Thank You</p>

			<div class="message-form">
				<form>
				  <div class="form-group">
				    <label for="name">Name</label>
				    <input type="text" class="form-control" id="name" placeholder="Enter Name" style="width: 300px;">
				  </div>
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="text" class="form-control" id="email" placeholder="Enter Email" style="width: 300px;">
				  </div>
				</form>
				<div class="form-group">
				    <label for="message">Message</label>
				    <textarea type="text" class="form-control" id="message" placeholder="Enter Message" rows="5"></textarea> 
				 </div>
				 <button type="button" class="btn btn-default">Reset</button>
				 <button type="button" class="btn btn-deafult">Submit Enquiry</button>
			</div>
		</div>

		<div class="right-section">
			<div class="map-wrapper">
				<h1>Location</h1>
				<div class="well">
					<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="margin-left: 70px;" 
					src="http://maps.google.co.nz/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=ngati+MARU+HWY&amp;aq=&amp;sll=-37.775142,175.264924&amp;sspn=0.229308,0.195351&amp;ie=UTF8&amp;hq=&amp;hnear=Ngati+Maru+Hwy&amp;ll=-37.171368,175.560311&amp;spn=0.003599,0.008256&amp;t=m&amp;z=14&amp;output=embed"></iframe> <br />

					<small><a href="http://maps.google.co.nz/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=ngati+MARU+HWY&amp;aq=&amp;sll=-37.775142,175.264924&amp;sspn=0.229308,0.195351&amp;ie=UTF8&amp;hq=&amp;hnear=Ngati+Maru+Hwy&amp;ll=-37.171368,175.560311&amp;spn=0.003599,0.008256&amp;t=m&amp;z=14" 
						style="color:#0000FF;text-align:left">View Larger Map</a></small>
				</div>
			</div>
		</div>


	</div>
	<div>
		<?php include('includes/footer.php'); ?>
	</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="">

	<title>Form</title>

	<link rel="apple-touch-icon" href="images/favicon/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon.png">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/js.js"></script>
</head>
<body>
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="heading_h">Your Profile</h1>
					<p>Tell us something about yourself</p>
				</div>
				<div class="col-lg-12">
				<form class="form" id="form" method="POST" action="form.php" enctype="multipart/form-data">
					<div class="col-lg-12 paddingtb4per paddinglr0px">
						<div class="row">
							<div class="col-lg-4">
								<div class="form-group">
									<label>Your Name</label>
									<input class="form-control" id="name" name="name" placeholder="Name" type="text">
									<span id="name_error" class="alert-error"></span>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label>Flat/Shop Number</label>
									<input class="form-control" id="shop_no" name="shop_no" placeholder="Shop Number" type="text">
									<span id="shop_no_error" class="alert-error"></span>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label>Are you willing to go for Redevelopment</label>
									<div class="row">
										<div class="col-lg-4">
											<input class="redevelopment" type="radio" name="redevelopment" id="redevelopment1" value="Yes" checked>
											<label class="for-redevelopment" for="redevelopment1">
												<a class="col-lg-12 box_redevelopment">Yes</a>
											</label>
										</div>

										<div class="col-lg-4">
											<input class="redevelopment" type="radio" name="redevelopment" id="redevelopment2" value="Neutral">
											<label class="for-redevelopment" for="redevelopment2">
												<a class="col-lg-12 box_redevelopment">Neutral</a>
											</label>
										</div>

										<div class="col-lg-4">
											<input class="redevelopment" type="radio" name="redevelopment" id="redevelopment3" value="No">
											<label class="for-redevelopment" for="redevelopment3">
												<a class="col-lg-12 box_redevelopment">No</a>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 paddingt2per">
								<div class="form-group">
									<label>Email Address</label>
									<input class="form-control" id="email" name="email" placeholder="Email" type="text">
									<span id="email_error" class="alert-error"></span>
								</div>
							</div>
							<div class="col-lg-4 paddingt2per">
								<div class="form-group">
									<label>Mobile Number</label>
									<input class="form-control" id="mobile" name="mobile" placeholder="Mobile" type="text" maxlength="10">
									<span id="mobile_error" class="alert-error"></span>
								</div>
							</div>
							<div class="col-lg-4 paddingt2per">
								<div class="form-group">
									<label>Flat Carpet Area</label>
									<div class="btn-group">
										<input class="form-control carpet_area" id="carpet_area" name="carpet_area2" placeholder="Carpet Area No." type="text">
										<select class="btn btn-gray dropdown-toggle dropdown-toggle-split" id="carpet_select">
											<option>Sqr Mtr</option>
											<option>Sqr ft</option>
										</select>
									</div>
									<span id="carpet_area_error" class="alert-error"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 paddinglr0px">
						<h1 class="heading_h">Document Upload</h1>
						<p>Upload all your documents to help us serve you faster</p>
					</div>
					<div class="col-lg-12 paddingtb2per paddinglr0px">
						<div class="row">
							<div class="col-lg-4">
								<div class="form-group">
									<label>Index II</label>
									<div class="drop-zone">
										<div class="drop-zone__prompt">
											<img src="images/image.png" class="logo">
											<span>Drop your image here, <span class="color_purple">or click to upload</span></span>
											<span class="span2">Supports: JPEG, PNG, PPT, PPTX, PDF<br/>Max Size: 5MB</span>
										</div>
										<input type="file" name="index2" id="index2" class="drop-zone__input" accept="image/png, image/jpeg, application/pdf, application/vnd.ms-powerpoint,.pptx,.ppt" >
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label>Property Cart</label>
									<div class="drop-zone">
										<div class="drop-zone__prompt">
											<img src="images/image.png" class="logo">
											<span>Drop your image here, <span class="color_purple">or click to upload</span></span>
											<span class="span2">Supports: JPEG, PNG, PPT, PPTX, PDF<br/>Max Size: 5MB</span>
										</div>
										<input type="file" name="propertycart" id="propertycart" class="drop-zone__input" accept="image/png, image/jpeg, application/pdf, application/vnd.ms-powerpoint,.pptx,.ppt">
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label>Loan Document if any</label>
									<div class="drop-zone">
										<div class="drop-zone__prompt">
											<img src="images/image.png" class="logo">
											<span>Drop your image here, <span class="color_purple">or click to upload</span></span>
											<span class="span2">Supports: JPEG, PNG, PPT, PPTX, PDF<br/>Max Size: 5MB</span>
										</div>
										<input type="file" name="loandocument" id="loandocument" class="drop-zone__input" accept="image/png, image/jpeg, application/pdf, application/vnd.ms-powerpoint,.pptx,.ppt">
									</div>
								</div>
							</div>
							<div class="col-lg-4 paddingt2per">
								<div class="form-group">
									<label>Any Other Document</label>
									<div class="drop-zone">
										<div class="drop-zone__prompt">
											<img src="images/image.png" class="logo">
											<span>Drop your image here, <span class="color_purple">or click to upload</span></span>
											<span class="span2">Supports: JPEG, PNG, PPT, PPTX, PDF<br/>Max Size: 5MB</span>
										</div>
										<input type="file" name="anyother" id="anyother" class="drop-zone__input" accept="image/png, image/jpeg, application/pdf, application/vnd.ms-powerpoint,.pptx,.ppt">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 paddinglr0px paddingt2per">
						<h1 class="heading_h">About your Flat</h1>
						<p>Give information about your flat</p>
					</div>
					<div class="col-lg-12 paddingtb2per paddinglr0px">
						<div class="row">
							<div class="col-lg-4">
								<div class="form-group">
									<label>Carpet area mentioned by the Secretary</label>
									<div class="btn-group">
										<input class="form-control carpet_area" id="secretary_carpet" name="secretary_carpet2" placeholder="Carpet Area No." type="text">
										<select class="btn btn-gray dropdown-toggle dropdown-toggle-split" id="secretary_select">
											<option>Sqr Mtr</option>
											<option>Sqr ft</option>
										</select>
									</div>
									<span id="secretary_carpet_error" class="alert-error"></span>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label>Revised area, as per Index II.</label>
									<div class="btn-group">
										<input class="form-control carpet_area" id="revised_area" name="revised_area2" placeholder="Carpet Area No." type="text">
										<select class="btn btn-gray dropdown-toggle dropdown-toggle-split" id ="revised_id">
											<option>Sqr Mtr</option>
											<option>Sqr ft</option>
										</select>
									</div>
									<span id="revised_area_error" class="alert-error"></span>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label>Claimed Area (Total including Index II)</label>
									<div class="btn-group">
										<input class="form-control carpet_area" id="claimed_area" name="claimed_area2" placeholder="Carpet Area No." type="text">
										<select class="btn btn-gray dropdown-toggle dropdown-toggle-split" id="claimed_id">
											<option>Sqr Mtr</option>
											<option>Sqr ft</option>
										</select>
									</div>
									<span id="claimed_area_error" class="alert-error"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 save_bx">
						<span>Save your profile</span>
						<input type="submit" class="submit" id="submit" name="submit">
						<div id="emessage"></div>
					</div>
				</form>
			</div>
			</div>
		</div>
	</section>
</body>
</html>
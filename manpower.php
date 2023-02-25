
<?php include("inc/header.php"); ?>  
<?php include("inc/top-info.php"); ?>

<?php include("inc/nav.php"); ?>  

<?php 
if(isset($_GET['a']))
$a = $_GET['a'];
else
	$a = 1;

if($a == 1)
	$value = "Non-Skilled";
if($a == 2)
	$value = "Semi-Skilled";
if($a == 3)
	$value = "Skilled";
if($a == 4)
	$value = "Professional";


$data = array('Non-Skilled','Semi-Skilled','Skilled','Professional');
unset($data[$a-1]);
$b = array_values($data);


?>


<section class="container-page">
	<div class="container">
		<div class="content-page">
		  <h1>Manpower Catagories</h1>
			
			<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
			<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions.</p>
			
			<p><strong>List of categories available for foreign employment.</strong></p>
			
			
<div class="manpower-page">
<!--
		<div class="row">
			<div class="col-lg-4 col-md-6 mb-4">
				<a href="#"><div class="job-box">
					
					<div class="row d-flex align-items-center">
						<div class="col-lg-3">
							<div class="company-logo">
						    <img src="images/partners/3.jpg" alt=""/>
							</div>
					  </div>
						<div class="col-lg-9">
							<h2>Security Guard</h2>
							<h5>Company Name</h5>
							<span><i class="fas fa-globe-asia"></i> Country: UAE</span>
							<span><i class="far fa-money-bill-alt"></i> Salary: 500 AED</span><br>
							<span><i class="far fa-calendar-alt"></i> Last Date: 26 Sep, 2022</span>
							<span><i class="fas fa-user"></i> Nos: 7</span>
						</div>
					</div>
			  </div></a>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<a href="#"><div class="job-box">
					
					<div class="row d-flex align-items-center">
						<div class="col-lg-3">
							<div class="company-logo">
						    <img src="images/partners/2.png" alt=""/>
							</div>
					  </div>
						<div class="col-lg-9">
							<h2>Electrician</h2>
							<h5>Company Name</h5>
							<span><i class="fas fa-globe-asia"></i> Country: UAE</span>
							<span><i class="far fa-money-bill-alt"></i> Salary: 500 AED</span><br>
							<span><i class="far fa-calendar-alt"></i> Last Date: 26 Sep, 2022</span>
							<span><i class="fas fa-user"></i> Nos: 5</span>
							
						</div>
					</div>
			  </div></a>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<a href="#"><div class="job-box">
					
					<div class="row d-flex align-items-center">
						<div class="col-lg-3">
							<div class="company-logo">
						    <img src="images/partners/5.png" alt=""/>
							</div>
					  </div>
						<div class="col-lg-9">
							<h2>Heavy Driver</h2>
							<h5>Company Name</h5>
							<span><i class="fas fa-globe-asia"></i> Country: UAE</span>
							<span><i class="far fa-money-bill-alt"></i> Salary: 500 AED</span><br>
							<span><i class="far fa-calendar-alt"></i> Last Date: 26 Sep, 2022</span>
							<span><i class="fas fa-user"></i> Nos: 2</span>
						</div>
					</div>
			  </div></a>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<a href="#"><div class="job-box">
					
					<div class="row d-flex align-items-center">
						<div class="col-lg-3">
							<div class="company-logo">
						    <img src="images/partners/3.jpg" alt=""/>
							</div>
					  </div>
						<div class="col-lg-9">
							<h2>Security Guard</h2>
							<h5>Company Name</h5>
							<span><i class="fas fa-globe-asia"></i> Country: UAE</span>
							<span><i class="far fa-money-bill-alt"></i> Salary: 500 AED</span><br>
							<span><i class="far fa-calendar-alt"></i> Last Date: 26 Sep, 2022</span>
							<span><i class="fas fa-user"></i> Nos: 7</span>
						</div>
					</div>
			  </div></a>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<a href="#"><div class="job-box">
					
					<div class="row d-flex align-items-center">
						<div class="col-lg-3">
							<div class="company-logo">
						    <img src="images/partners/2.png" alt=""/>
							</div>
					  </div>
						<div class="col-lg-9">
							<h2>Electrician</h2>
							<h5>Company Name</h5>
							<span><i class="fas fa-globe-asia"></i> Country: UAE</span>
							<span><i class="far fa-money-bill-alt"></i> Salary: 500 AED</span><br>
							<span><i class="far fa-calendar-alt"></i> Last Date: 26 Sep, 2022</span>
							<span><i class="fas fa-user"></i> Nos: 5</span>
							
						</div>
					</div>
			  </div></a>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<a href="#"><div class="job-box">
					
					<div class="row d-flex align-items-center">
						<div class="col-lg-3">
							<div class="company-logo">
						    <img src="images/partners/5.png" alt=""/>
							</div>
					  </div>
						<div class="col-lg-9">
							<h2>Heavy Driver</h2>
							<h5>Company Name</h5>
							<span><i class="fas fa-globe-asia"></i> Country: UAE</span>
							<span><i class="far fa-money-bill-alt"></i> Salary: 500 AED</span><br>
							<span><i class="far fa-calendar-alt"></i> Last Date: 26 Sep, 2022</span>
							<span><i class="fas fa-user"></i> Nos: 2</span>
						</div>
					</div>
			  </div></a>
			</div>
			
		</div>
-->

	
<!--
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="non-skilled-tab" data-bs-toggle="tab" data-bs-target="#non-skilled" type="button" role="tab" aria-controls="non-skilled" aria-selected="true">Non-Skilled</button>
    <button class="nav-link" id="semi-skilled-tab" data-bs-toggle="tab" data-bs-target="#semi-skilled" type="button" role="tab" aria-controls="semi-skilled" aria-selected="false">Semi-Skilled</button>
    <button class="nav-link" id="skilled-tab" data-bs-toggle="tab" data-bs-target="#skilled" type="button" role="tab" aria-controls="skilled" aria-selected="false">Skilled</button>
    <button class="nav-link" id="professional-tab" data-bs-toggle="tab" data-bs-target="#professional" type="button" role="tab" aria-controls="professional" aria-selected="false">Professional</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="non-skilled" role="tabpanel" aria-labelledby="non-skilled-tab">Non-Skilled</div>
  <div class="tab-pane fade" id="semi-skilled" role="tabpanel" aria-labelledby="semi-skilled-tab">Semi-Skilled</div>
  <div class="tab-pane fade" id="skilled" role="tabpanel" aria-labelledby="skilled-tab">Skilled</div>
  <div class="tab-pane fade" id="professional" role="tabpanel" aria-labelledby="professional-tab">Professional</div>
</div>
	
-->
	
	
	<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
	  
    <button class="nav-link active" id="<?php echo $value; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $value; ?>" type="button" role="tab" aria-controls="<?php echo $value; ?>" aria-selected="true"><?php echo $value; ?></button>
	  
	  <?php foreach($data as $val){ ?>
    <button class="nav-link" id="<?php echo $val; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $val; ?>" type="button" role="tab" aria-controls="<?php echo $val; ?>" aria-selected="false"><?php echo $val; ?></button>
	  <?php } ?>
 
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="<?php echo $value; ?>" role="tabpanel" aria-labelledby="<?php echo $value; ?>-tab">
	  
	  <!-- First ko Data Tanne from here (Jobs) -->
	  
	  <div class="row">
			<div class="col-lg-4 col-md-6 mb-4">
				<a href="#"><div class="job-box">
					
					<div class="row d-flex align-items-center">
						<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
							<div class="company-logo">
						    <img src="images/partners/3.jpg" alt=""/>
							</div>
					  </div>
						<div class="col-lg-8 col-md-12">
							<h2>Security Guard</h2>
							<h5>Company Name</h5>
							<span><i class="fas fa-globe-asia"></i> Country: UAE</span><br>
							<span><i class="far fa-money-bill-alt"></i> Salary: 500 AED</span><br>
							<span><i class="far fa-calendar-alt"></i> Last Date: 26 Sep, 2022</span><br>
							<span><i class="fas fa-user"></i> Nos: 7</span>
						</div>
					</div>
			  </div></a>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<a href="#"><div class="job-box">
					
					<div class="row d-flex align-items-center">
						<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
							<div class="company-logo">
						    <img src="images/partners/2.png" alt=""/>
							</div>
					  </div>
						<div class="col-lg-8 col-md-12">
							<h2>Electrician</h2>
							<h5>Company Name</h5>
							<span><i class="fas fa-globe-asia"></i> Country: UAE</span><br>
							<span><i class="far fa-money-bill-alt"></i> Salary: 500 AED</span><br>
							<span><i class="far fa-calendar-alt"></i> Last Date: 26 Sep, 2022</span><br>
							<span><i class="fas fa-user"></i> Nos: 5</span>
							
						</div>
					</div>
			  </div></a>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<a href="#"><div class="job-box">
					
					<div class="row d-flex align-items-center">
						<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
							<div class="company-logo">
						    <img src="images/partners/5.png" alt=""/>
							</div>
					  </div>
						<div class="col-lg-8 col-md-12">
							<h2>Heavy Driver</h2>
							<h5>Company Name</h5>
							<span><i class="fas fa-globe-asia"></i> Country: UAE</span><br>
							<span><i class="far fa-money-bill-alt"></i> Salary: 500 AED</span><br>
							<span><i class="far fa-calendar-alt"></i> Last Date: 26 Sep, 2022</span><br>
							<span><i class="fas fa-user"></i> Nos: 2</span>
						</div>
					</div>
			  </div></a>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<a href="#"><div class="job-box">
					
					<div class="row d-flex align-items-center">
						<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
							<div class="company-logo">
						    <img src="images/partners/3.jpg" alt=""/>
							</div>
					  </div>
						<div class="col-lg-8 col-md-12">
							<h2>Security Guard</h2>
							<h5>Company Name</h5>
							<span><i class="fas fa-globe-asia"></i> Country: UAE</span><br>
							<span><i class="far fa-money-bill-alt"></i> Salary: 500 AED</span><br>
							<span><i class="far fa-calendar-alt"></i> Last Date: 26 Sep, 2022</span><br>
							<span><i class="fas fa-user"></i> Nos: 7</span>
						</div>
					</div>
			  </div></a>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<a href="#"><div class="job-box">
					
					<div class="row d-flex align-items-center">
						<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
							<div class="company-logo">
						    <img src="images/partners/2.png" alt=""/>
							</div>
					  </div>
						<div class="col-lg-8 col-md-12">
							<h2>Electrician</h2>
							<h5>Company Name</h5>
							<span><i class="fas fa-globe-asia"></i> Country: UAE</span><br>
							<span><i class="far fa-money-bill-alt"></i> Salary: 500 AED</span><br>
							<span><i class="far fa-calendar-alt"></i> Last Date: 26 Sep, 2022</span><br>
							<span><i class="fas fa-user"></i> Nos: 5</span>
							
						</div>
					</div>
			  </div></a>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<a href="#"><div class="job-box">
					
					<div class="row d-flex align-items-center">
						<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
							<div class="company-logo">
						    <img src="images/partners/5.png" alt=""/>
							</div>
					  </div>
						<div class="col-lg-8 col-md-12">
							<h2>Heavy Driver</h2>
							<h5>Company Name</h5>
							<span><i class="fas fa-globe-asia"></i> Country: UAE</span><br>
							<span><i class="far fa-money-bill-alt"></i> Salary: 500 AED</span><br>
							<span><i class="far fa-calendar-alt"></i> Last Date: 26 Sep, 2022</span><br>
							<span><i class="fas fa-user"></i> Nos: 2</span>
						</div>
					</div>
			  </div></a>
			</div>
			
		</div>
	</div>
	 <?php foreach($data as $val){ ?>
  <div class="tab-pane fade" id="<?php echo $val; ?>" role="tabpanel" aria-labelledby="<?php echo $val; ?>-tab"> 
	 
	  <!-- Remain Jobs Data tanne-->
	  
	   <div class="row">
			<div class="col-lg-4 col-md-6 mb-4">
				<a href="#"><div class="job-box">
					
					<div class="row d-flex align-items-center">
						<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
							<div class="company-logo">
						    <img src="images/partners/3.jpg" alt=""/>
							</div>
					  </div>
						<div class="col-lg-8 col-md-12">
							<h2>Security Guard</h2>
							<h5>Company Name</h5>
							<span><i class="fas fa-globe-asia"></i> Country: UAE</span><br>
							<span><i class="far fa-money-bill-alt"></i> Salary: 500 AED</span><br>
							<span><i class="far fa-calendar-alt"></i> Last Date: 26 Sep, 2022</span><br>
							<span><i class="fas fa-user"></i> Nos: 7</span>
						</div>
					</div>
			  </div></a>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<a href="#"><div class="job-box">
					
					<div class="row d-flex align-items-center">
						<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
							<div class="company-logo">
						    <img src="images/partners/2.png" alt=""/>
							</div>
					  </div>
						<div class="col-lg-8 col-md-12">
							<h2>Electrician</h2>
							<h5>Company Name</h5>
							<span><i class="fas fa-globe-asia"></i> Country: UAE</span><br>
							<span><i class="far fa-money-bill-alt"></i> Salary: 500 AED</span><br>
							<span><i class="far fa-calendar-alt"></i> Last Date: 26 Sep, 2022</span><br>
							<span><i class="fas fa-user"></i> Nos: 5</span>
							
						</div>
					</div>
			  </div></a>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<a href="#"><div class="job-box">
					
					<div class="row d-flex align-items-center">
						<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
							<div class="company-logo">
						    <img src="images/partners/5.png" alt=""/>
							</div>
					  </div>
						<div class="col-lg-8 col-md-12">
							<h2>Heavy Driver</h2>
							<h5>Company Name</h5>
							<span><i class="fas fa-globe-asia"></i> Country: UAE</span><br>
							<span><i class="far fa-money-bill-alt"></i> Salary: 500 AED</span><br>
							<span><i class="far fa-calendar-alt"></i> Last Date: 26 Sep, 2022</span><br>
							<span><i class="fas fa-user"></i> Nos: 2</span>
						</div>
					</div>
			  </div></a>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<a href="#"><div class="job-box">
					
					<div class="row d-flex align-items-center">
						<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
							<div class="company-logo">
						    <img src="images/partners/3.jpg" alt=""/>
							</div>
					  </div>
						<div class="col-lg-8 col-md-12">
							<h2>Security Guard</h2>
							<h5>Company Name</h5>
							<span><i class="fas fa-globe-asia"></i> Country: UAE</span><br>
							<span><i class="far fa-money-bill-alt"></i> Salary: 500 AED</span><br>
							<span><i class="far fa-calendar-alt"></i> Last Date: 26 Sep, 2022</span><br>
							<span><i class="fas fa-user"></i> Nos: 7</span>
						</div>
					</div>
			  </div></a>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<a href="#"><div class="job-box">
					
					<div class="row d-flex align-items-center">
						<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
							<div class="company-logo">
						    <img src="images/partners/2.png" alt=""/>
							</div>
					  </div>
						<div class="col-lg-8 col-md-12">
							<h2>Electrician</h2>
							<h5>Company Name</h5>
							<span><i class="fas fa-globe-asia"></i> Country: UAE</span><br>
							<span><i class="far fa-money-bill-alt"></i> Salary: 500 AED</span><br>
							<span><i class="far fa-calendar-alt"></i> Last Date: 26 Sep, 2022</span><br>
							<span><i class="fas fa-user"></i> Nos: 5</span>
							
						</div>
					</div>
			  </div></a>
			</div>
			<div class="col-lg-4 col-md-6 mb-4">
				<a href="#"><div class="job-box">
					
					<div class="row d-flex align-items-center">
						<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
							<div class="company-logo">
						    <img src="images/partners/5.png" alt=""/>
							</div>
					  </div>
						<div class="col-lg-8 col-md-12">
							<h2>Heavy Driver</h2>
							<h5>Company Name</h5>
							<span><i class="fas fa-globe-asia"></i> Country: UAE</span><br>
							<span><i class="far fa-money-bill-alt"></i> Salary: 500 AED</span><br>
							<span><i class="far fa-calendar-alt"></i> Last Date: 26 Sep, 2022</span><br>
							<span><i class="fas fa-user"></i> Nos: 2</span>
						</div>
					</div>
			  </div></a>
			</div>
			
		</div>
	</div>
	 <?php } ?>
</div>

	
  </div>          
		</div>
	</div>
</section>
  
<?php include("inc/bottom-link.php"); ?>
<?php include("inc/footer.php"); ?> 

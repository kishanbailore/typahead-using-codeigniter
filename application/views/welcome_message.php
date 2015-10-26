<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
	<link rel='stylesheet'   href='<?php echo site_url(); ?>assets/bootstrap.min.css' type='text/css' media='all' />
	    <script src="<?php echo site_url(); ?>assets/jquery-1.10.2.js"></script>
		<!--<script src="<?php echo site_url(); ?>assets/bootstrap.js"></script>-->
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

<div id="body">
<table class=" table-list-search tbody table table-hover table-bordered display" id="example" >
	<tr>
		<div>
			<th id="the-basics" class='col-md-6'>customer_name:</th>
			<td><input class="form-control typeahead" type="text"  placeholder="Enter customer name" name="custom" ></input></td>
		</div>
	</tr>
</table>
</div>
<div id='cu'></div>
<script src="<?php echo base_url();?>assets/bootstrap-typeahead.min.js"></script>

<script>
 $('#cu').load('<?php echo site_url();?>welcome/get_type');
 

$('.typeahead').typeahead({
	     source:cust
		 
		 });  
		 $('.cust_view').click(function(event){
event.preventDefault();
 a=$('ul.typeahead li.active').data('value');
alert(a);
 }); 
</script>
 
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>
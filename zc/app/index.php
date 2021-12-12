<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="img/logo2.png" type="image/png">
	<title>Cloud Model Explorer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="css/main.css">
	<script src="js/main.js"></script>
</head>
	<body>

		<!--Header-->
		<header>
			<div class="zc-header-flex-container">
				<img src="img/logo.png" class="zc-header-logo" alt="MathWorks" width="200" height="80">
				<h1 class="zc-header-text">Cloud Model Explorer</h1>
			</div>
		</header>
		<!--Header-->
		
		<!--Body-->
		<div class="zc-model-selector">
			<div class="row">
				<div class="col-sm-4">
				  <select class="form-control" id="zc-sel-model">
				  </select>
				</div>
				<div class="col-sm-4">
				  <select class="form-control" id="zc-sel-type">
					<option value="<null>">Select Type</option>
					<option value="components">Components</option>
					<option value="connections">Connections</option>
					<option value="portInterfaces">Port Interfaces</option>
					<option value="ports">Ports</option>
					<option value="requirementLinks">Requirement Links</option>
				  </select>
				</div>
				<div class="col-sm-4">
				  <button type="button" class="btn btn-primary" id="zc-btn-query">Query</button>
				</div>
			</div>
		</div>
		
		<div class="zc-model-selector-query">
			<div class="row">
				<div class="col-sm-12">
				  <label>Query:</label>
				  <br/>
				  <label class="zc-label-code">1. /zc/api/get/models/</label>
				  <br/>
				  <label class="zc-label-code">2. /zc/api/get/model/?name=</label>
				  <label class="zc-label-code" id="zc-label-query-model-name">[model-name]</label>
				  <label class="zc-label-code">&type=</label>
				  <label class="zc-label-code" id="zc-label-query-type">[type]</label>
				</div>
			</div>
		</div>
				
		<div class="zc-model-selector-result-json">
			<div class="row">
				<div class="col-sm-12">
				  <label>JSON Result:</label>
				  <textarea class="form-control" rows="5" id="zc-textarea-result"></textarea>
				</div>
			</div>
		</div>
		
		<div class="zc-model-selector-result-table">
			<div class="row">
				<div class="col-sm-12">
				  <label>Table Result:</label>
				</div>
			</div>
		</div>
		
		<div class="container-fluid body-content">
			<div class="row">
				<div class="col-sm-12">
				  <table class="table table-hover table-striped table-bordered" id="zc-table-result">
					<thead><tr><th></th></tr></thead>
					<tbody></tbody>
				  </table>
				</div>
			</div>
		</div>
		<!--Body-->
	
		<!--Footer-->
		<footer>
			<div class="row">
				<div class="col-sm-12">
					<h3 class="zc-footer-text">Copyright &copy; 2021 (Project by Nirmallya Kundu)</h3>
				</div>
			</div>
		</footer>
		<!--Footer-->

	</body>
</html>

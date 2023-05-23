<!doctype html>
<html>
	<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>Quicksearch + Bootstrap</title>
	  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	  
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
	  <script type = "text/javascript">
  $('input#txt_query').quicksearch('table#table tbody tr');
</script>
	</head>
	<body>
	<div class="form-group input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
  <input name="query" id="txt_query" placeholder="Search" type="text" class="form-control">
</div>
<table id="table" class="table table-hover">
 <thead>
     <tr>
         <th>Email</th>
         <th>Id</th>
         <th>Telephone</th>
         <th>URL</th>
     </tr>
 </thead>
 <tbody>
     <tr>
         <th>hello@aol.com</th>
         <td>123456</td>
         <td>445-964-1212</td>
         <td>http://google.com</td>
     </tr>
 
     <tr>
         <th>john@gmail.com</th>
         <td>12346</td>
         <td>445-964-9543</td>
         <td>http://yahoo.com</td>
     </tr>
 </tbody>
</table>

	</body>
</html>
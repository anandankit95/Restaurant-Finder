<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free coming soon template with jQuery countdown">
    <meta name="author" content="http://bootstraptaste.com">

    <title>Bhukkad</title>

   
    <link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/bootstrap-theme.css" rel="stylesheet">
	<link href="assets/css/font-awesome.css" rel="stylesheet">


    <link href="assets/css/style.css" rel="stylesheet">
    
   
  </head>

  <body>

	<div id="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>You would not want to miss out on this one!</h1>
					<h2 class="subtitle"></h2>
					<div id="countdown"></div>
						
                    <div class="social">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                         <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                         <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                         <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
				</div>
				
			</div>
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
						
                        <div class="credits">
                           
                           
                        </div>
				</div>
			</div>		
		</div>
	</div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script type="text/javascript">
      $('#countdown').countdown('2017/01/01', function(event) {
        $(this).html(event.strftime('%w weeks %d days <br /> %H:%M:%S'));
      });
    </script>
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kapanlagi Youniverse</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================
	-->
	{!! Html::style('images/icons/favicon.ico') !!}
<!--===============================================================================================
-->
	{!! HTML::style('/vendor/bootstrap/css/bootstrap.min.css') !!}
<!--===============================================================================================
	-->
	{!! HTML::style('/fonts/font-awesome-4.7.0/css/font-awesome.min.css') !!}
<!--===============================================================================================
	-->
	{!! HTML::style('/vendor/animate/animate.css') !!}
<!--===============================================================================================
	-->
	{!! HTML::style('/vendor/css-hamburgers/hamburgers.min.css') !!}
<!--===============================================================================================
	-->
	{!! HTML::style('/vendor/animsition/css/animsition.min.css') !!}
<!--===============================================================================================
-->
	{!! HTML::style('vendor/select2/select2.min.css') !!}
<!--===============================================================================================
-->
	{!! HTML::style('/vendor/daterangepicker/daterangepicker.css') !!}
<!--===============================================================================================

-->
	{!! HTML::style('/css/util.css') !!}
	{!! HTML::style('/css/main.css') !!}
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" form action="/" method="post">
				@csrf
				<span class="contact100-form-title">
					Thankyou for your response,<br>
					to view data please copy link below :<br>
					/localhost:8000/profile/<?php echo "$name-$datenow";?>
				</span>

				
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Submit Another response
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
					<br>
				</div>
				
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	
	{!! Html::script('vendor/jquery/jquery-3.2.1.min.js') !!}
<!--===============================================================================================-->
	
	{!! Html::script('vendor/animsition/js/animsition.min.js') !!}
<!--===============================================================================================-->
	
	{!! Html::script('vendor/bootstrap/js/popper.js') !!}
	
	{!! Html::script('vendor/bootstrap/js/bootstrap.min.js') !!}
<!--===============================================================================================-->
	
	{!! Html::script('vendor/select2/select2.min.js') !!}
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	
	{!! Html::script('vendor/daterangepicker/moment.min.js') !!}
	
	{!! Html::script('vendor/daterangepicker/daterangepicker.js') !!}
<!--===============================================================================================-->
	
	{!! Html::script('vendor/countdowntime/countdowntime.js') !!}
<!--===============================================================================================-->
	
	{!! Html::script('js/main.js') !!}

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>

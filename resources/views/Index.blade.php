<!DOCTYPE Html>
<Html lang="en">
<head>
    <title>Contact V4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================
    -->
    {!! Html::style('images/icons/favicon.ico') !!}
<!--===============================================================================================
-->
    {!! Html::style('/vendor/bootstrap/css/bootstrap.min.css') !!}
<!--===============================================================================================
    -->
    {!! Html::style('/fonts/font-awesome-4.7.0/css/font-awesome.min.css') !!}
<!--===============================================================================================
    -->
    {!! Html::style('/vendor/animate/animate.css') !!}
<!--===============================================================================================
    -->
    {!! Html::style('/vendor/css-hamburgers/hamburgers.min.css') !!}
<!--===============================================================================================
    -->
    {!! Html::style('/vendor/animsition/css/animsition.min.css') !!}
<!--===============================================================================================
-->
    {!! Html::style('vendor/select2/select2.min.css') !!}
<!--===============================================================================================
-->
    {!! Html::style('/vendor/daterangepicker/daterangepicker.css') !!}
<!--===============================================================================================

-->
    {!! Html::style('/css/util.css') !!}
    {!! Html::style('/css/main.css') !!}
<!--===============================================================================================-->
</head>
<body>


    <div class="container-contact100">
        <div class="wrap-contact100">
            <form class="contact100-form validate-form"  action="/" method="post">
                  @csrf
                <span class="contact100-form-title">
                    Kapanlagi Youniverse
                </span>

                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Your Name</span>
                    <input class="input100" type="text" name="name" placeholder="Enter your name">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="text" name="email" placeholder="Enter your email addess">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Birth Date</span>
                    <input class="input100" type="date" name="date" placeholder="">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Address</span>
                    <textarea class="input100" name="address" placeholder="Your full address here..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn">
                            <span>
                                Submit
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                            </span>
                        </button>

                    </div>
                    <br>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                     @endif
                    <br>
                </div>
                <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn" type="reset">
                            <span>
                                Reset
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                            </span>
                        </button>
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
</Html>

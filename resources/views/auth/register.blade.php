<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register - SlimTech</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{asset('assets/images/logo.png')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/slicknav.min.css')}}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{asset('admin/css/typography.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/default-css.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/responsive.css')}}">
    <!-- modernizr css -->
    <script src="{{asset('admin/js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <style>
        .login-area {
            background: url('{{asset("assets/images/bg.jpg")}}') no-repeat center center fixed;
            background-size: cover;
        }

        .custom-font-1 {
            font-weight: bold;
            font-size: 1.5rem;
        }
    </style>
</head>

<body>
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="POST" action="{{ route('register') }}" class="login-form" style="background: transparent">
                    @csrf
                    <div class="login-form-head"
                        style="border-radius: 25px 25px 0 0; border: 1px black solid; border-bottom: none;0">
                        <h4>Register</h4>
                    </div>
                    <div class="login-form-body bg-white"
                        style="border-radius: 0 0 25px 25px; border: 1px black solid; border-top: none;">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <div class="form-gp">
                            <label for="name">Name *</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                autocomplete="name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-gp">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-gp">
                            <label for="phone">Phone Number *</label>
                            <input type="phone" id="phone" name="phone" value="{{ old('phone') }}" autocomplete="phone"
                                required>
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-gp">
                            <label for="address">Address *</label>
                            <input type="text" id="address" name="address" value="{{ old('address') }}"
                                autocomplete="address" required>
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-gp">
                            <label for="password">Password *</label>
                            <input type="password" id="password" name="password" required>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-gp">
                            <label for="password_confirmation">Password Confirmation *</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" required>
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-gp">
                            <label for="medical_condition">Medical Condition</label>
                            <textarea name="medical_condition" id="medical_condition" rows="5"
                                placeholder="Please describe your medical condition if you have any!"
                                class="form-control"></textarea>
                            @error('medical_condition')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end my-3">
                            <a href="#" class="my-auto" data-toggle="modal" data-target="#termsandconditions">Terms and
                                Conditions</a>
                            <input type="checkbox" name="agreed" id="agreed" title="agree" class=" my-auto mx-1"
                                required>
                            <label for="agreed" class="my-auto">agree</label>
                        </div>

                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit" class="bg-primary text-white">Register <i
                                    class="ti-arrow-right"></i></button>
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Already have an account? <a href="/login">Login</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <div class="modal fade" id="termsandconditions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body py-0 px-4">
                    <h2 class="custom-font my-4 text-center">{{ucwords('terms and conditions')}}</h2>

                    <ol class="mx-4">
                        <p>These Terms and Conditions ("Terms") govern your use of the website, products, and services
                            ("Services") provided by Slimtech ("we," "our," or "us"). By accessing or using our website
                            and
                            purchasing our EMS suits and gym products, you agree to comply with and be bound by these
                            Terms.
                            Please read them carefully before using our Services.</p><br>

                        <li class="custom-font-1">
                            Acceptance of Terms
                        </li>
                        <p>By using our Services, you acknowledge that you have read, understood, and agree to these
                            Terms.
                            If you do not agree with these Terms, please do not use our Services.</p> <br>

                        <li class="custom-font-1">
                            Use of Services
                        </li>
                        <ul>
                            <li>You can use our EMS suits according to our provided instructions and regulations.</li>
                            <li>You do not have any underlying medical conditions or diseases that could contraindicate
                                the
                                use of our EMS suits. It is your responsibility to ensure that you are in suitable
                                physical
                                condition for using our products.</li>
                            <li>You will provide accurate and complete data and information when using our Services,
                                including any personal information required for the purchase and use of our products.
                            </li>
                        </ul>
                        <p>By using our Services in compliance with the above conditions, you acknowledge your
                            responsibility for the safe and appropriate use of our EMS suits. If you have any concerns
                            about
                            your health or suitability for using our products, we recommend consulting with a healthcare
                            professional before use.</p><br>

                        <li class="custom-font-1">
                            Product Information
                        </li>
                        <p>We strive to provide accurate and up-to-date information about our EMS suits and gym
                            products,
                            including descriptions, prices, and availability. However, we do not warrant that product
                            descriptions or other content on our website are error-free. We reserve the right to correct
                            any
                            errors, inaccuracies, or omissions and to change or update information at any time.</p><br>

                        <li class="custom-font-1">
                            Ordering and Payment
                        </li>
                        <p>When you place an order through our website, you agree to provide accurate and complete
                            information. You are responsible for ensuring the accuracy of your order and payment
                            details. We
                            accept various payment methods, and by placing an order, you authorize us to charge the
                            provided
                            payment method for the total amount of your order.</p><br>

                        <li class="custom-font-1">
                            Intellectual Property
                        </li>
                        <p>All content on our website, including text, images, logos, and graphics, is protected by
                            copyright and other intellectual property laws. You may not use, reproduce, or distribute
                            our
                            content without our express written consent.</p><br>

                        <li class="custom-font-1">
                            Limitation of Liability
                        </li>
                        <p>We are not liable for any direct, indirect, incidental, special, or consequential damages
                            arising
                            from your use of our Services or the purchase of our products. In no event shall our total
                            liability exceed the amount you paid for the specific product giving rise to the claim.</p>
                        <br>

                        <li class="custom-font-1">
                            Indemnification
                        </li>
                        <p>You agree to indemnify and hold us harmless from any claims, losses, liabilities, expenses,
                            or
                            damages arising out of your use of our Services, violation of these Terms, or infringement
                            of
                            any third-party rights.</p><br>

                        <li class="custom-font-1">
                            Contact Us
                        </li>
                        <p>If you have any questions or concerns about these Terms or our Services, please contact us at
                            +961 76 656 054.</p><br>
                    </ol><br>

                    <p>By using our Services, you agree to these Terms and our policies. Thank you for choosing Slimtech
                        for your EMS suits and gym products needs.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery latest version -->
    <script src="{{asset('admin/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{asset('admin/js/popper.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('admin/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.slicknav.min.js')}}"></script>

    <!-- others plugins -->
    <script src="{{asset('admin/js/plugins.js')}}"></script>
    <script src="{{asset('admin/js/scripts.js')}}"></script>
</body>

</html>
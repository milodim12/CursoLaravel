<html>

    <head>
        <title>Bienvenido a mi pagina web</title>  
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="../../public/libs/bootstrap-3.3.2-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../public/assets/css/style.css" type="text/css">
        
        <meta http-equiv="Refresh" content="30">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Brand</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">Link</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">One more separated link</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <form class="navbar-form navbar-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Link</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    B
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="row">
                                <div class="login-body">
    <article class="container-login center-block">
		<section>
			<ul id="top-bar" class="nav nav-tabs nav-justified">
				<li class="active"><a href="#login-access">Accesso</a></li>
				<li><a href="#">Password dimenticata</a></li>
			</ul>
			<div class="tab-content tabs-login col-lg-12 col-md-12 col-sm-12 cols-xs-12">
				<div id="login-access" class="tab-pane fade active in">
					<h2><i class="glyphicon glyphicon-log-in"></i> Accesso</h2>						
					<form method="post" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal">
						<div class="form-group ">
							<label for="login" class="sr-only">Email</label>
								<input type="text" class="form-control" name="login" id="login_value" 
									placeholder="Email" tabindex="1" value="" />
						</div>
						<div class="form-group ">
							<label for="password" class="sr-only">Password</label>
								<input type="password" class="form-control" name="password" id="password"
									placeholder="Password" value="" tabindex="2" />
						</div>
						<div class="checkbox">
								<label class="control-label" for="remember_me">
									<input type="checkbox" name="remember_me" id="remember_me" value="1" class="" tabindex="3" /> Ricordami
								</label>
						</div>
						<br/>
						<div class="form-group ">				
								<button type="submit" name="log-me-in" id="submit" tabindex="5" class="btn btn-lg btn-primary">Entra</button>
						</div>
					</form>			
				</div>
			</div>
		</section>
	</article>
</div>
                            </div>
                            <div class="row">
                                D
                            </div>
                        </div>
                        <div class="col-sm-4 col-sm-offset-1">
                            <div class="row">
                                <!--
The MIT License (MIT)

Copyright (c) 2015 William Hilton

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
                                -->
                                <!-- Vendor libraries -->
                                <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                                <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script>

                                <!-- If you're using Stripe for payments -->
                                <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

                                <!-- Credit card form -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-4">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title"><img class="pull-right" src="http://i76.imgup.net/accepted_c22e0.png">Payment Details</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <form role="form" id="payment-form">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="form-group">
                                                                    <label for="cardNumber">CARD NUMBER</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" name="cardNumber" placeholder="Valid Card Number" required autofocus data-stripe="number" />
                                                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                                                    </div>
                                                                </div>                            
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-7 col-md-7">
                                                                <div class="form-group">
                                                                    <label for="expMonth">EXPIRATION DATE</label>
                                                                    <div class="col-xs-6 col-lg-6 pl-ziro">
                                                                        <input type="text" class="form-control" name="expMonth" placeholder="MM" required data-stripe="exp_month" />
                                                                    </div>
                                                                    <div class="col-xs-6 col-lg-6 pl-ziro">
                                                                        <input type="text" class="form-control" name="expYear" placeholder="YY" required data-stripe="exp_year" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-5 col-md-5 pull-right">
                                                                <div class="form-group">
                                                                    <label for="cvCode">CV CODE</label>
                                                                    <input type="password" class="form-control" name="cvCode" placeholder="CV" required data-stripe="cvc" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="form-group">
                                                                    <label for="couponCode">COUPON CODE</label>
                                                                    <input type="text" class="form-control" name="couponCode" />
                                                                </div>
                                                            </div>                        
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <button class="btn btn-success btn-lg btn-block" type="submit">Start Subscription</button>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="display:none;">
                                                            <div class="col-xs-12">
                                                                <p class="payment-errors"></p>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                F
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </body>
</html>
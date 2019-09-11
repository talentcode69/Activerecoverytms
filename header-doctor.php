<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(); ?></title>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/assets/img/favicon.png" />
	<meta name="msvalidate.01" content="CFA5B163DE000F074E0F6A51F130BCA9" />
	<meta name="google-site-verification" content="A2rPc19gx8zINYOiHvqaPBmSi2cr_lgKSf9ru1H8p-8" />
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '1977278615823885');
fbq('track', 'PageView');
</script>
<!--<noscript>
 <img height="1" width="1" src="https://www.facebook.com/tr?id=1977278615823885&ev=PageView&noscript=1"/>
</noscript>
End Facebook Pixel Code -->
<script type="text/javascript">
    adroll_adv_id = "GHWBTMJ3EFH6RNSLDKO5KX";
    adroll_pix_id = "OF2Y7ES6CFEBVBNFWAQR4G";

    (function () {
        var _onload = function(){
            if (document.readyState && !/loaded|complete/.test(document.readyState)){setTimeout(_onload, 10);return}
            if (!window.__adroll_loaded){__adroll_loaded=true;setTimeout(_onload, 50);return}
            var scr = document.createElement("script");
            var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
            scr.setAttribute('async', 'true');
            scr.type = "text/javascript";
            scr.src = host + "/j/roundtrip.js";
            ((document.getElementsByTagName('head') || [null])[0] ||
                document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
        };
        if (window.addEventListener) {window.addEventListener('load', _onload, false);}
        else {window.attachEvent('onload', _onload)}
    }());
</script>

<style type="text/css">
.font0{
	font-size: 0px;
	opacity: 0;
	display: none;
}
</style>
</head>
<body <?php body_class(); ?>>
	<div class="top-bar" style="z-index: 999999999 !important;">
		<div class="container">
			<div class="row">
				<div class="col-md-6" style="width: 40%;float: left;"><span><a class="tel" href="tel:(503) 719-4648" style="font-family: 'Josefin Sans', sans-serif !important;font-weight:200;font-size:14px;">(503) 719-4648</a></span></div>
				<div class="col-md-6 text-right" style="width: 60%;float: right;"><span><a target="_blank" href="https://www.google.com/maps/place/2701+NW+Vaughn+St+%23325,+Portland,+OR+97210,+USA/data=!4m2!3m1!1s0x549509e813303a0f:0xe6da9e4dd1dabcf5?sa=X&ved=0ahUKEwiNq4W9kfnZAhWN16QKHSIqBBQQ8gEIJTAA" style="font-family: 'Josefin Sans', sans-serif !important;font-weight:200;font-size:14px;">2701 NW Vaughn St Suite 325, Portland, OR 97210</a></span></div>
			</div>
		</div>
	</div> <!-- Top Bar End !-->

	<div class="header-doctor">
		<div class="container position-relative full-height">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-default" role="navigation">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					            <span class="sr-only">Toggle navigation</span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					        </button>
					    	<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/artms_logo.png" alt="Logo" /></a>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse navbar-ex1-collapse">
					        <?php
					        wp_nav_menu( array(
					            'menu' => 'top_menu',
					            'depth' => 2,
					            'container' => false,
					            'menu_class' => 'nav navbar-nav',
					            'fallback_cb' => 'wp_page_menu',
					            //Process nav menu using our custom nav walker
					            'walker' => new wp_bootstrap_navwalker())
					        );
					        ?>
					    </div><!-- /.navbar-collapse -->
					</nav>
				</div> <!-- Col End !-->
			</div> <!-- Row End !-->

			<div class="row flex-row">
				<div class="col-md-6">
					<div class="doctor-hero-image">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/doctor-new.png" alt=""/>
					</div>
				</div>
				<div class="col-md-6 header-doctor-text">
					<h2 class="roboto-bold">DR. JONATHAN HOREY</h2>
					<p>Dr. Jonathan Horey, co-founder and chief medical officer, has been practicing psychiatry since 2006 and treating patients with transcranial magnetic stimulation since 2017. He is passionate about treatment of depression and helping his patients.</p>
				</div>
			</div>
		</div> <!-- Container End !-->
	</div> <!-- Header Doctor End !-->

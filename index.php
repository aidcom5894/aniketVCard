<?php 

include('config.php');

?>


<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Name of your web site">
<meta name="author" content="Marketify">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Aniket Portfolio</title>

<link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kristi&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/plugins.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->

</head>
<body>

<?php 

$fetchData = mysqli_query($config,"SELECT * FROM user_info");

while($row = mysqli_fetch_assoc($fetchData))
{
	$username = $row['username'];
	$fullname = $row['fullname'];
	$email = $row['email'];
	$address = $row['address'];
	$contactNo = $row['phone_number'];
	$profilePics = $row['user_avatar'];
	$instagram = $row['insta_id'];
	$facebook = $row['fb_id'];
	
}

?>


<?php 

$fetchUserAbout = mysqli_query($config,"SELECT * FROM user_about");

while($row = mysqli_fetch_assoc($fetchUserAbout))
{
	$dateofBirth = $row['born_on'];
	$homeAddress = $row['native'];
	$description = $row['description'];
	$userage = $row['age'];
}


?>
<div id="preloader">
<div class="loader_line"></div>
</div>

<div class="elisc_tm_all_wrap" data-magic-cursor="show" data-enter="fadeInLeft" data-exit>

<div class="elisc_tm_topbar">
<div class="topbar_inner">
<div class="logo" data-type="image"> 
<a class="image" href="#"><img src="<?php echo $profilePics; ?>" alt /></a>
<a class="text" href="#"><span><?php echo $username; ?></span></a>
</div>
<div class="trigger">
<div class="hamburger hamburger--slider">
<div class="hamburger-box">
<div class="hamburger-inner"></div>
</div>
</div>
</div>
</div>
</div>
<div class="elisc_tm_mobile_menu">
<div class="inner">
<div class="wrapper">
<div class="avatar">
<div class="image" data-img-url="<?php echo $profilePics; ?>"></div>
</div>
<div class="menu_list">
<ul class="transition_link">
<li class="active"><a href="#home">Home</a></li>
<li><a href="#about">About</a></li>
<li><a href="#service">Services</a></li>
<li><a href="#portfolio">Portfolio</a></li>
<li><a href="#news">Blog</a></li>
<li><a href="#contact">Contact</a></li>
<li><a href="login.php">Login</a></li>
</ul>
</div>
<div class="social">
<ul>
<li><a href="#"><img class="svg" src="img/svg/social/facebook.svg" alt /></a></li>

<li><a href="#"><img class="svg" src="img/svg/social/instagram.svg" alt /></a></li>

</ul>
</div>
<div class="copyright">
<p>Copyright &copy; <?php echo date('Y'); ?></p>
</div>
</div>
</div>
</div>


<div class="elisc_tm_sidebar">
<div class="sidebar_inner">
<div class="author">
<div class="image">
<img src="<?php echo $profilePics; ?>" alt />
<div class="main" data-img-url="<?php echo $profilePics; ?>"></div>
</div>
<div class="name">
<h3><span><?php echo $fullname; ?><span class="back"><?php echo $fullname; ?></span></span></h3>
</div>
</div>
<div class="menu scrollable">
<ul class="transition_link">
<li class="active"><a href="#home">Home</a></li>
<li><a href="#about">About</a></li>
<li><a href="#service">Services</a></li>
<li><a href="#portfolio">Portfolio</a></li>
<li><a href="#news">Blog</a></li>
<li><a href="#contact">Contact</a></li>
</ul>
</div>
<div class="copyright">
	<a href="login.php">Login</a>
<div class="social">
<ul>
<li><a href="<?php echo $facebook; ?>"><i class="icon-facebook-1"></i></a></li>
<li><a href="<?php echo $instagram; ?>"><i class="icon-instagram-1"></i></a></li>
</ul>
</div>
<div class="text">
<p>Copyright © <?php echo date('Y ') . $username; ?>. All rights reserved.</p>
</div>
</div>
</div>
</div>


<div class="elisc_tm_mainpart">
<div class="mainpart_inner">

<div class="elisc_tm_section animated" id="home">
<div class="elisc_tm_home">
<div class="tm_content">
<div class="details">
<div class="left">
<div class="title">
<h3>Hi, I'm <span class="blueColor"><?php echo $fullname; ?></span></h3>
<h3>
<span class="cd-headline rotate-1"> 
<span class="blc">Creative</span>
<span class="cd-words-wrapper">
<b class="is-visible">Designer</b>
<b>Coder</b>
<b>Player</b>
</span>
</span>
</h3>
<h3>Based in <?php echo $homeAddress; ?></h3>
</div>
<div class="subtitle">
<p><?php echo $description; ?><span class="blueColor"> 1+ years</span> of experience</p>
</div>
<div class="buttons">
<div class="elisc_tm_button transition_link">
<a href="#portfolio">Got a project?</a>
</div>
<div class="elisc_tm_button transition_link" data-style="border">
<a href="#contact">Let's talk</a>
</div>
</div>
<div class="info">
<ul>
<li><a href="tel:+77 022 444 05 05"><?php echo $contactNo; ?></a></li>
<li><a href="" data-cfemail=""><?php echo $email; ?></span></a></li>
<li><a class="href_location" href="#"><?php echo $address; ?></a></li>
</ul>
</div>
</div>
<div class="right">
<img src="<?php echo $profilePics; ?>" alt />
</div>
</div>
</div>
</div>
</div>


<div class="elisc_tm_section" id="about">
<div class="elisc_tm_about">
<div class="tm_content">
<div class="elisc_tm_biography">
<div class="left">
<div class="title">
<span class="mini">- Nice to meet you!</span>
<h3 class="name"><?php echo $fullname; ?></h3>
<span class="job">
<span class="cd-headline rotate-1"> 
<span class="blc">Web designer &amp;</span>
<span class="cd-words-wrapper">
<b class="is-visible">Developer</b>
<b>Coder</b>
<b>Player</b>
</span>
</span>
</span>
</div>
<div class="elisc_tm_button transition_link">
<a href="#portfolio">Got a project?</a>
</div>
</div>
<div class="right">
<div class="text">
<p><?php echo $description; ?></p>
</div>
<div class="info">
<ul>
<li>
<span>Age</span>
<span><?php echo $userage; ?></span>
</li>
<li>
<span>Born In</span>
<span><a class="href_location" href="#"><?php echo $homeAddress; ?></a></span>
</li>
<li>
<span>Mail</span>
<span><a href=""><span class="__cf_email__"><?php echo $email;?></span></a></span>
</li>
<li>
<span>Phone</span>
<span><a href="tel:+77 022 444 05 05"><?php echo $contactNo;?></a></span>
</li>
</ul>
</div>
</div>
</div>
<div class="elisc_tm_counter">
<ul>
<li>
<div class="list_inner">
<h3>1+</h3>
<span>Years of Experience</span>
</div>
</li>
<li>
<div class="list_inner">
<h3>5+</h3>
<span>Projects Completed</span>
</div>
</li>
<li>
<div class="list_inner">
<h3>3+</h3>
<span>Happy Clients</span>
</div>
</li>
</ul>
</div>
</div>
<div class="elisc_tm_experience">
<div class="tm_content">
<div class="elisc_tm_title">
<span>- Experience</span>
<h3>Everything about me!</h3>
</div>
<div class="list">
<ul>
<li>
<img class="popup_image" src="img/experience/1.jpg" alt />
<div class="list_inner">
<div class="short">
<div class="job">
<span class="yellowColor">-2018 - Present</span>
<h3>Web Developer</h3>
</div>
<div class="place">
<span>-Envato Market</span>
</div>
</div>
<div class="text">
<p>Website development is the process of building, programming, coding and maintaining websites and web applications.</p>
</div>
<a class="elisc_tm_full_link" href="#"></a>

<div class="hidden_details">
<div class="descriptions">
<p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
<p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Elisc, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
</div>
</div>

</div>
</li>
<li>
<img class="popup_image" src="img/experience/2.jpg" alt />
<div class="list_inner">
<div class="short">
<div class="job">
<span class="yellowColor">-2016 - 2018</span>
<h3>Senior Designer</h3>
</div>
<div class="place">
<span>-ABC Studio</span>
</div>
</div>
<div class="text">
<p>Website development is the process of building, programming, coding and maintaining websites and web applications.</p>
</div>
<a class="elisc_tm_full_link" href="#"></a>

<div class="hidden_details">
<div class="descriptions">
<p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
<p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Elisc, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
</div>
</div>

</div>
</li>
<li>
<img class="popup_image" src="img/experience/3.jpg" alt />
<div class="list_inner">
<div class="short">
<div class="job">
<span class="yellowColor">-2015 - 2016</span>
<h3>UX Designer</h3>
</div>
<div class="place">
<span>-Colorlib</span>
</div>
</div>
<div class="text">
<p>Website development is the process of building, programming, coding and maintaining websites and web applications.</p>
</div>
<a class="elisc_tm_full_link" href="#"></a>

<div class="hidden_details">
<div class="descriptions">
<p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
<p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Elisc, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
</div>
</div>

</div>
</li>
<li>
<img class="popup_image" src="img/experience/4.jpg" alt />
<div class="list_inner">
<div class="short">
<div class="job">
<span class="yellowColor">-2013 - 2015</span>
<h3>Freelancer</h3>
</div>
<div class="place">
<span>-Vivaco Corp.</span>
</div>
</div>
<div class="text">
<p>Website development is the process of building, programming, coding and maintaining websites and web applications.</p>
</div>
<a class="elisc_tm_full_link" href="#"></a>

<div class="hidden_details">
<div class="descriptions">
<p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
<p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Elisc, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
</div>
</div>

</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<div class="elisc_tm_section" id="service">
<div class="elisc_tm_services">
<div class="tm_content">
<div class="elisc_tm_service_title">
<div class="elisc_tm_title">
<span>- Services</span>
<h3>My Services</h3>
</div>
<a href=""><?php echo $email; ?></span></a>
</div>
<div class="service_list">
<ul>
<li>
<img class="popup_image" src="img/service/2.jpg" alt />
<div class="list_inner">
<div class="details">
<div class="title">
<span>01</span>
<h3>Web Design</h3>
</div>
<div class="text">
<p>Web development is the process of building, programming...</p>
</div>
<div class="elisc_tm_read_more">
<a href="#">Read More<span><img class="svg" src="img/svg/rightArrow.svg" alt /></span></a>
</div>
</div>
<a class="elisc_tm_full_link" href="#"></a>

<div class="hidden_details">
<div class="descriptions">
<p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
<p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Elisc, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
</div>
</div>

</div>
</li>
<li>
<img class="popup_image" src="img/service/3.jpg" alt />
<div class="list_inner">
<div class="details">
<div class="title">
<span>02</span>
<h3>UI/UX Design</h3>
</div>
<div class="text">
<p>Web development is the process of building, programming...</p>
</div>
<div class="elisc_tm_read_more">
<a href="#">Read More<span><img class="svg" src="img/svg/rightArrow.svg" alt /></span></a>
</div>
</div>
<a class="elisc_tm_full_link" href="#"></a>

<div class="hidden_details">
<div class="descriptions">
<p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
<p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Elisc, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
</div>
</div>

</div>
</li>
<li>
<img class="popup_image" src="img/service/4.jpg" alt />
<div class="list_inner">
<div class="details">
<div class="title">
<span>03</span>
<h3>Mobile Application</h3>
</div>
<div class="text">
<p>Web development is the process of building, programming...</p>
</div>
<div class="elisc_tm_read_more">
<a href="#">Read More<span><img class="svg" src="img/svg/rightArrow.svg" alt /></span></a>
</div>
</div>
<a class="elisc_tm_full_link" href="#"></a>

<div class="hidden_details">
<div class="descriptions">
<p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
<p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Elisc, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
</div>
</div>

</div>
</li>
<li>
<img class="popup_image" src="img/service/5.jpg" alt />
<div class="list_inner">
<div class="details">
<div class="title">
<span>04</span>
<h3>User Research</h3>
</div>
<div class="text">
<p>Web development is the process of building, programming...</p>
</div>
<div class="elisc_tm_read_more">
<a href="#">Read More<span><img class="svg" src="img/svg/rightArrow.svg" alt /></span></a>
</div>
</div>
<a class="elisc_tm_full_link" href="#"></a>

<div class="hidden_details">
<div class="descriptions">
<p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
<p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Elisc, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
</div>
</div>

</div>
</li>
<li>
<img class="popup_image" src="img/service/6.jpg" alt />
<div class="list_inner">
<div class="details">
<div class="title">
<span>05</span>
<h3>Animation</h3>
</div>
<div class="text">
<p>Web development is the process of building, programming...</p>
</div>
<div class="elisc_tm_read_more">
<a href="#">Read More<span><img class="svg" src="img/svg/rightArrow.svg" alt /></span></a>
</div>
</div>
<a class="elisc_tm_full_link" href="#"></a>

<div class="hidden_details">
<div class="descriptions">
<p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
<p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Elisc, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
</div>
</div>

</div>
</li>
<li>
<img class="popup_image" src="img/service/7.jpg" alt />
<div class="list_inner">
<div class="details">
<div class="title">
<span>06</span>
<h3>Game Development</h3>
</div>
<div class="text">
<p>Web development is the process of building, programming...</p>
</div>
<div class="elisc_tm_read_more">
<a href="#">Read More<span><img class="svg" src="img/svg/rightArrow.svg" alt /></span></a>
</div>
</div>
<a class="elisc_tm_full_link" href="#"></a>

<div class="hidden_details">
<div class="descriptions">
<p>Elisc is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
<p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Elisc, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
</div>
</div>

</div>
</li>
</ul>
</div>
<div class="elisc_tm_video">
<img class="placeholder" src="img/thumbs/4-2.jpg" alt />
<div class="image" data-img-url="img/service/1.jpg"></div>
<div class="overlay"></div>
<span class="play"><img class="svg" src="img/svg/play.svg" alt /></span>
<div class="text">
<h3>Intro Video</h3>
</div>
<a class="elisc_tm_full_link popup-youtube" href="https://www.youtube.com/watch?v=7e90gBu4pas"></a>
</div>
</div>
</div>
</div>




<div class="elisc_tm_section" id="portfolio">
<div class="elisc_tm_portfolio">
<div class="tm_content">
<div class="elisc_tm_portfolio_title">
<div class="elisc_tm_title">
<span>- Projects</span>
<h3>Recent completed works</h3>
</div>
<div class="buttons">
<a class="prev_button" href="#"><img class="svg" src="img/svg/prev.svg" alt /></a>
<a class="next_button" href="#"><img class="svg" src="img/svg/next.svg" alt /></a>
</div>
</div>
<div class="portfolio_list">
<ul class="owl-carousel gallery_zoom">
<li>
<div class="list_inner">
<div class="image">
<img src="img/thumbs/31-36.jpg" alt />
<div class="main" data-img-url="img/portfolio/1.jpg"></div>
<a class="elisc_tm_full_link popup-youtube" href="https://www.youtube.com/watch?v=7e90gBu4pas"></a>
</div>
<div class="details">
<span class="category"><a href="#">Youtube</a></span>
<h3 class="title"><a class="line_effect popup-youtube" href="https://www.youtube.com/watch?v=7e90gBu4pas">New Technology</a></h3>
</div>
</div>
</li>
<li>
<div class="list_inner">
<div class="image">
<img src="img/thumbs/31-36.jpg" alt />
<div class="main" data-img-url="img/portfolio/2.jpg"></div>
<a class="elisc_tm_full_link popup-vimeo" href="https://vimeo.com/337293658"></a>
</div>
<div class="details">
<span class="category"><a href="#">Vimeo</a></span>
<h3 class="title"><a class="line_effect popup-vimeo" href="https://vimeo.com/337293658">Firogo Majestic Ltd.</a></h3>
</div>
</div>
</li>
<li>
<div class="list_inner">
<div class="image">
<img src="img/thumbs/31-36.jpg" alt />
<div class="main" data-img-url="img/portfolio/3.jpg"></div>
<a class="elisc_tm_full_link soundcloude_link mfp-iframe audio" href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/471954807&color=%23ff5500&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></a>
</div>
<div class="details">
<span class="category"><a href="#">Soundcloud</a></span>
<h3 class="title"><a class="line_effect soundcloude_link mfp-iframe audio" href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/471954807&color=%23ff5500&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true">Creative Building</a></h3>
</div>
</div>
</li>
<li>
<div class="list_inner">
<div class="image">
<img src="img/thumbs/31-36.jpg" alt />
<div class="main" data-img-url="img/portfolio/4.jpg"></div>
<a class="elisc_tm_full_link portfolio_popup" href="#"></a>
</div>
<div class="details">
<span class="category"><a href="#">Modalbox</a></span>
<h3 class="title"><a class="line_effect portfolio_popup" href="#">Beautiful Boat</a></h3>
</div>
</div>

<div class="hidden_content_portfolio">
<div class="popup_details">
<div class="main_details">
<div class="textbox">
<p>We live in a world where we need to move quickly and iterate on our ideas as flexibly as possible. Building mockups strikes the ideal balance ease of modification. Building mockups strikes the ideal balance ease of modification.</p>
<p>Mockups are useful both for the creative phase of the project - for instance when you're trying to figure out your user flows or the proper visual hierarchy - and the production phase when they phase when they will represent the target product. Building mockups strikes the ideal balance ease of modification.</p>
</div>
<div class="detailbox">
<ul>
<li>
<span class="first">Client</span>
<span>Alvaro Morata</span>
</li>
<li>
<span class="first">Category</span>
<span><a href="#">Modalbox</a></span>
</li>
<li>
<span class="first">Date</span>
<span>April 10, 2023</span>
</li>
<li>
<span class="first">Share</span>
<ul class="share">
<li><a href="#"><img class="svg" src="img/svg/social/facebook.svg" alt /></a></li>
<li><a href="#"><img class="svg" src="img/svg/social/twitter.svg" alt /></a></li>
<li><a href="#"><img class="svg" src="img/svg/social/instagram.svg" alt /></a>
</li>
</ul>
</li>
</ul>
</div>
</div>
<div class="additional_images">
<ul>
<li>
<div class="list_inner">
<div class="my_image">
<img src="img/thumbs/4-2.jpg" alt />
<div class="main" data-img-url="img/portfolio/5.jpg"></div>
</div>
</div>
</li>
<li>
<div class="list_inner">
<div class="my_image">
<img src="img/thumbs/4-2.jpg" alt />
<div class="main" data-img-url="img/portfolio/6.jpg"></div>
</div>
</div>
</li>
<li>
<div class="list_inner">
<div class="my_image">
<img src="img/thumbs/4-2.jpg" alt />
<div class="main" data-img-url="img/portfolio/7.jpg"></div>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>

</li>
</ul>
<div class="elisc_tm_button" data-position="center">
<a href="#">View all projects</a>
</div>
</div>
</div>
</div>

<div class="elisc_tm_partners">
<div class="tm_content">
<div class="elisc_tm_title">
<span>- Clients</span>
<h3>Customers &amp; clients</h3>
</div>
<div class="partners_inner">
<ul>
<li>
<div class="list_inner">
<img src="img/partners/1.png" alt />
<a class="elisc_tm_full_link" a href="#"></a>
</div>
</li>
<li>
<div class="list_inner">
<img src="img/partners/2.png" alt />
<a class="elisc_tm_full_link" a href="#"></a>
</div>
</li>
<li>
<div class="list_inner">
<img src="img/partners/3.png" alt />
<a class="elisc_tm_full_link" a href="#"></a>
</div>
</li>
<li>
<div class="list_inner">
<img src="img/partners/4.png" alt />
<a class="elisc_tm_full_link" a href="#"></a>
</div>
</li>
<li>
<div class="list_inner">
<img src="img/partners/5.png" alt />
<a class="elisc_tm_full_link" a href="#"></a>
</div>
</li>
<li>
<div class="list_inner">
<img src="img/partners/6.png" alt />
<a class="elisc_tm_full_link" a href="#"></a>
</div>
</li>
<li>
<div class="list_inner">
<img src="img/partners/7.png" alt />
<a class="elisc_tm_full_link" a href="#"></a>
</div>
</li>
<li>
<div class="list_inner">
<img src="img/partners/8.png" alt />
<a class="elisc_tm_full_link" a href="#"></a>
</div>
</li>
</ul>
</div>
</div>
</div>


<div class="elisc_tm_testimonial_wrapper">
<div class="tm_content">
<div class="elisc_tm_testimonials">
<div class="elisc_tm_title" data-position="center">
<span>- Testimonial</span>
<h3>What client's say?</h3>
</div>
<div class="testimonials_list">
<ul class="owl-carousel owl-theme">
<li>
<div class="text">
<p>I rarely like to write reviews, but the Marketify team truly deserve a standing ovation for their customer support, customisation and most importantly, friendliness and professionalism.</p>
</div>
<div class="short">
<div class="image">
<div class="main" data-img-url="img/testimonials/1.jpg"></div>
</div>
<div class="detail">
<h3>John Doe</h3>
</div>
</div>
<p class="job">User Interface Design at PCL Lab</p>
</li>
<li>
<div class="text">
<p>Really the Code Quality, Customer Support, and design are awesome and its good support they are giving. They give an instant solution to our needs. Really awesome. I will strongly recommend to my friends.</p>
</div>
<div class="short">
<div class="image">
<div class="main" data-img-url="img/testimonials/2.jpg"></div>
</div>
<div class="detail">
<h3>Keita Smith</h3>
</div>
</div>
<p class="job">Senior Designer at Behance</p>
</li>
<li>
<div class="text">
<p>Loved the template design, documentation, customizability and the customer support from Marketify team! I am a noob in programming but the Marketify team helped me successfully.</p>
</div>
<div class="short">
<div class="image">
<div class="main" data-img-url="img/testimonials/3.jpg"></div>
</div>
<div class="detail">
<h3>Alan Walker</h3>
</div>
</div>
<p class="job">Sales Manager at Vivaco Shop</p>
</li>
</ul>
</div>
</div>
</div>
</div>

</div>


<div class="elisc_tm_section" id="news">
<div class="elisc_tm_news fn_w_sminiboxes">
<div class="tm_content">
<div class="wrapper">
<div class="left fn_w_sminibox">
<div class="elisc_tm_sticky_section">
<div class="elisc_tm_title">
<span>- Blog</span>
<h3>My blog &amp; news</h3>
</div>
<div class="elisc_tm_button transition_link">
<a href="#contact">Get in touch</a>
</div>
</div>
</div>
<div class="right fn_w_sminibox">
<div class="elisc_tm_sticky_section">
<div class="list">
<ul>
<li>
<img class="popup_image" src="img/news/1.jpg" alt />
<div class="list_inner">
<div class="info">
<div class="meta">


</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<?php 
 $fetch = mysqli_query($config,"SELECT * FROM user_contact ");
 while($row = mysqli_fetch_assoc($fetch))
{
   $mail = $row['email'];
   $Pnumber = $row['phone_number'];
   $adress = $row['user_address'];
   $udate = $row['unboarding_date'];
}
  ?>


<div class="elisc_tm_section" id="contact">
<div class="elisc_tm_contact">
<div class="tm_content">
<div class="wrapper">
<div class="left">
<div class="elisc_tm_title">
<span>- Let's Connect</span>
<h3>Get in touch</h3>
</div>
<div class="text">
<p>I'm currently avaliable to take on new projects, so feel free to send me a message about anything that you want to run past me. You can contact anytime at 24/7</p>
</div>
<div class="info">
<ul>
<li>
<a href="tel:+77 022 444 05 05"id= "userphoneno" name = "Phone"><?php echo $contactNo;?></a>
</li>
<li>
<a href="#"><?php echo $mail;?></span></a>
</li>
<li>
<a ><?php echo $adress;?></a>
</li>
</ul>
</div>
</div>
<div class="right">
<div class="fields">
<form action="/" method="post" class="contact_form" id="contact_form">
<div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
<div class="empty_notice"><span>Please Fill Required Fields</span></div>
<div class="first">
<ul>
<li>
<input id="name" type="text" placeholder="Enter your name" autocomplete="off">
</li>
<li>
<input id="email" type="text" placeholder="Your email" autocomplete="off">
</li>
</ul>
</div>
<div class="last">
<textarea id="message" placeholder="Write something..."></textarea>
</div>
<div class="elisc_tm_button">
<a id="send_message" href="#">Submit now</a>
</div>

</form>
</div>
</div>
</div>
<div class="elisc_tm_map">
<div class="mapouter"><div class="gmap_canvas"><iframe style="width: 1200px;height: 550px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3561.0274515266055!2d84.50356367631757!3d26.807254526710143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39936ebf4e891e5d%3A0x88bbbc6a9d59e127!2sIndrapuri%2C%20Shastri%20Nagar%2C%20Bettiah%2C%20Bihar%20845438!5e0!3m2!1sen!2sin!4v1697793928584!5m2!1sen!2sin"></iframe></div></div>

</div>
</div>
</div>
</div>

</div>
</div>


<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>

</div>


<script data-cfasync="false" src="js/email-decode.min.js"></script><script src="js/jquery.js"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
<script src="js/plugins.js"></script>
<script src="js/init.js"></script>

</body>
</html>
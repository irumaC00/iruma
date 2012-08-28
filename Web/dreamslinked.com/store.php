<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>DreamsLinked Store</title>
		<link rel="stylesheet" href="themes/dl-mobile.min.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile.structure-1.1.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
		<script type="text/css">
		/* Clearfix Clearfix Clearfix */
		.group:before,
		.group:after {
		content: "";
		display: table;
		}
		.group:after {
		clear: both;
		}
		.group {
		zoom: 1; /* IE6&7 */
		}
		</script>
	</head>
	<body>
		<div id="home" data-role="page" data-theme="a">
			<div data-role="header" data-position="inline">
				<img src="images/dl-store-logo.png" width="100%" style="max-width:480px;"/>
            </div>
            <div data-role="navbar">
            	<ul>
					<li><a href="#home" data-icon="home" data-transition="slide" class="ui-btn-active ui-state-persist">Home</a></li>
                	<li><a href="#eBay" data-icon="grid" data-transition="slide">eBay</a></li>
                    <li><a href="#amazon" data-icon="grid" data-transition="slide">Amazon</a></li>
                    <li><a href="#merch" data-icon="grid" data-transition="slide">DL Merch</a></li>
                    <li><a href="#about" data-icon="info" data-transition="slide">About</a></li>
                </ul>
            </div>
			<div data-role="content" data-theme="a" style="text-align: justify;">
				<script id="feed-1337630625677643" type="text/javascript" src="http://rss.bloople.net/?url=http%3A%2F%2Firumashibuya.com%2Fdreamslinked%2Fstore.xml&limit=&showtitle=false&type=js&id=1337630625677643"></script>
			</div>
		</div>
		<div id="eBay" data-role="page" data-theme="a">
			<div data-role="header" data-position="inline">
				<img src="images/dl-store-logo.png" width="100%" style="max-width:480px;"/>
            </div>
            <div data-role="navbar">
            	<ul>
					<li><a href="#home" data-icon="home" data-transition="slide">Home</a></li>
                	<li><a href="#eBay" data-icon="grid" data-transition="slide" class="ui-btn-active ui-state-persist">eBay</a></li>
                    <li><a href="#amazon" data-icon="grid" data-transition="slide">Amazon</a></li>
                    <li><a href="#merch" data-icon="grid" data-transition="slide">DL Merch</a></li>
                    <li><a href="#about" data-icon="info" data-transition="slide">About</a></li>
                </ul>
            </div>
			<div data-role="content" data-theme="a">
				<div class="ui-grid-a">
					<div class="ui-block-a"><script id="feed-1337413299714677" type="text/javascript" src="http://rss.bloople.net/?url=http%3A%2F%2Fwww.eBay.com%2Fsch%2Frss%2F%3F_ipg%3D25%26_from%3D%26_nkw%3D%26_armrs%3D1%26_ssn%3Ddreamslinked%26_rss%3D1%26rt%3Dnc&detail=100&showtitle=false&type=js&id=1337413299714677"></script></div>
					<div class="ui-block-b"><script id="feed-1337467616820431" type="text/javascript" src="http://rss.bloople.net/?url=http%3A%2F%2Fwww.eBay.com%2Fsch%2Frss%2F%3F_ipg%3D50%26_sop%3D12%26_ssn%3Ddreamsauctions%26_rss%3D1%26rt%3Dnc&showtitle=false&type=js&id=1337467616820431"></script></div>
				</div>
			</div>
		</div>
		<div id="amazon" data-role="page" data-theme="a">
			<div data-role="header" data-position="inline">
				<img src="images/dl-store-logo.png" width="100%" style="max-width:480px;"/>
            </div>
            <div data-role="navbar">
            	<ul>
					<li><a href="#home" data-icon="home" data-transition="slide">Home</a></li>
                	<li><a href="#eBay" data-icon="grid" data-transition="slide">eBay</a></li>
                    <li><a href="#amazon" data-icon="grid" data-transition="slide" class="ui-btn-active ui-state-persist">Amazon</a></li>
                    <li><a href="#merch" data-icon="grid" data-transition="slide">DL Merch</a></li>
                    <li><a href="#about" data-icon="info" data-transition="slide">About</a></li>
                </ul>
            </div>
			<div data-role="content" data-theme="a">
			</div>
		</div>
		<div id="merch" data-role="page" data-theme="a">
			<div data-role="header" data-position="inline">
				<img src="images/dl-store-logo.png" width="100%" style="max-width:480px;"/>
            </div>
            <div data-role="navbar">
            	<ul>
					<li><a href="#home" data-icon="home" data-transition="slide">Home</a></li>
                	<li><a href="#eBay" data-icon="grid" data-transition="slide">eBay</a></li>
                    <li><a href="#amazon" data-icon="grid" data-transition="slide">Amazon</a></li>
                    <li><a href="#merch" data-icon="grid" data-transition="slide" class="ui-btn-active ui-state-persist">DL Merch</a></li>
                    <li><a href="#about" data-icon="info" data-transition="slide">About</a></li>
                </ul>
            </div>
			<div data-role="content" data-theme="a">
				<center><iframe src ="http://www.cafepress.com/dreamslinkedstore" width="100%" height="700px" scrolling="auto" frameborder="0" style="overflow:auto;"></iframe></center>
			</div>
		</div>
		<div id="about" data-role="page" data-theme="a">
			<div data-role="header" data-position="inline">
				<img src="images/dl-store-logo.png" width="100%" style="max-width:480px;"/>
            </div>
            <div data-role="navbar">
            	<ul>
                    <li><a href="#home" data-icon="home" data-transition="slide">Home</a></li>
                	<li><a href="#eBay" data-icon="grid" data-transition="slide">eBay</a></li>
                    <li><a href="#amazon" data-icon="grid" data-transition="slide">Amazon</a></li>
                    <li><a href="#merch" data-icon="grid" data-transition="slide">DL Merch</a></li>
                    <li><a href="#about" data-icon="info" data-transition="slide" class="ui-btn-active ui-state-persist">About</a></li>
                </ul>
            </div>
			<div data-role="content" data-theme="a">
				<div data-role="collapsible-set" data-mini="false" data-iconpos="right" class="ui-btn-active ui-state-persist">
					<div data-role="collapsible" data-collapsed="false">
						<h3>About</h3>
						<p>I'm the collapsible set content for section A.</p>
					</div>
					<div data-role="collapsible">
						<h3>Future</h3>
						<p>I'm the collapsible set content for section B.</p>
					</div>
					<div data-role="collapsible">
						<h3>Affiliates</h3>
						<img src="images/Ultrasone_logo.png" width="100%" align="left" style="max-width:150px;margin-right:5px;" />
						<p align="justify" style="max-width:575px;">We have recently successfully gotten in contact with the distributor of Ultrasone in North America/USA and have the opportunity to work with their top of the line headphones. These German engineered headphones all come with Ultrasone's patented <em><strong>S-Logic™ Natural Surround Sound</strong></em> and <em><strong>S-Logic™ PLUS</strong></em> which creates</p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
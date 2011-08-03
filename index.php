<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="The Ila Trust - A non-profit NGO providing free Healthcare for the underserved. ">
<meta name="keywords" content="The Ila Trust, charity, NGO, ngos in india, healthcare,mobile clinics, electronic medical records, new delhi, medicine, medical aid, ambulances, slums, poverty, medication, emr,public health">
<title>The Ila Trust - Taking Healthcare to the People</title>
<!-- Combo-handled YUI CSS files: -->
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/combo?2.8.0r4/build/reset-fonts-grids/reset-fonts-grids.css&2.8.0r4/build/menu/assets/skins/sam/menu.css">
<script type="text/javascript" src="http://yui.yahooapis.com/2.8.0r4/build/swf/swf-min.js"></script>
<link rel="stylesheet" type="text/css" href="style/styles.css">	

<!-- Javascript files -->

<!-- Combo-handled YUI JS files: -->
<script type="text/javascript" src="http://yui.yahooapis.com/combo?2.8.0r4/build/yahoo-dom-event/yahoo-dom-event.js&2.8.0r4/build/container/container_core-min.js&2.8.0r4/build/menu/menu-min.js&2.8.0r4/build/element/element-min.js&2.8.0r4/build/swf/swf-min.js"></script>


        <!-- Page-specific script -->

        <script type="text/javascript">
            YAHOO.util.Event.onContentReady("ila_menu", function () {
                                var oMenuBar1 = new YAHOO.widget.MenuBar("ila_menu", { 
                                                            autosubmenudisplay: true, 
                                                            hidedelay: 750, 
                                                            lazyload: true });
                oMenuBar1.render();
       
       });          
</script>

</head>
<body class="yui-skin-sam" >
	<div style="width: 100%;" >
		<div id="doc2" class="yui-t6">
			
			<!-- Header - Start-->
			<div id="hd" class="header">
				<?php include('header.php'); ?>
			</div>
			<!-- Header - End-->

			<!-- Body -->
			<div id="bd" class="mainbody" >
				<div id="yui-main">
					<!-- Main section -->
					<div class="yui-b">
						<!-- Central theme. Can be pictures/flash etc -->
                                                <div id="swfContainer" style="width:650px;height:400px">
                                                    The version of the Flash player installed on your computer
                                                    is outdated. Please download and install the latest version.
                                                </div>
                                                <script type="text/javascript">
                                                    var params = {version: 9.115,
                                                      useExpressInstall: false,
                                                                  fixedAttributes:
                                                                  {scale: "noscale", salign: "TL"}
                                                                 };
                                                      var newswf = new YAHOO.widget.SWF("swfContainer", "intro/intro.swf", params);
                                                </script>
					<!--	<div id="theme" style="width: 100%">
                                                    <img alt="Main Image" src="images/ila_121209_821.jpg" style="float: left" width="650px" height="400px">
						</div> -->
                                                
						<div id="appeals">
							<div class="yui-g">
								<div class="yui-u first">
									<span class="miniheading" style="clear: both;">Current Appeal</span>
								</div>
								<div class="yui-u">
                                                                    <span class="miniheading" style="clear: both;">Clinic in Action</span>
									<div id="videos" align="right">
										<object width="315" height="200"><param name="movie" value="http://www.youtube.com/v/o4j7eU9tSrI&amp;hl=en_US&amp;fs=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/o4j7eU9tSrI&amp;hl=en_US&amp;fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="315" height="200"></embed></object>
									</div>
								</div>
							</div>
						</div>
					</div>				
				</div>
				
				<!-- Right nav  Start-->
                                <div class="yui-b" >
                                    <div id="mission" class="mission">
						We ourselves feel that what we are doing is just a drop in the ocean. 
					But if that drop was not in the ocean, 
					I think the ocean would be less because of that missing drop. 
					I do not agree with the big way of doing big things. 
					To us what matters is an individual.<br>
                                        <p align="right">- Mother Teresa </p>
					</div>
                                    <span class="miniheading">&nbsp;&nbsp;&nbsp;Latest Updates</span>
					<div id="tweets" align="right">
						<script src="http://widgets.twimg.com/j/2/widget.js"></script>
						<script>
						new TWTR.Widget({
						  version: 2,
						  type: 'profile',
						  rpp: 4,
						  interval: 6000,
						  width: 290,
						  height: 200,
						  theme: {
						    shell: {
						      background: '#bbbbbb',
						      color: '#000000'
						    },
						    tweets: {
						      background: '#dddddd',
						      color: '#000000',
						      links: '#2c27b8'
						    }
						  },
						  features: {
						    scrollbar: true,
						    loop: false,
						    live: true,
						    hashtags: true,
						    timestamp: true,
						    avatars: false,
						    behavior: 'all'
						  }
						}).render().setUser('theilatrust').start();
						</script>
					</div>					
				</div>
				<!-- Right nav  End-->
			</div>
                        <!-- Body - End -->
			
			<!-- Footer - Start-->
			<div id="ft" class="footer">
                            <?php include('footer.php'); ?>
			</div>
			<!-- Footer - End-->
		</div>
	</div>
</body>
</html>
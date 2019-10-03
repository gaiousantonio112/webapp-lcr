
<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>/application/views/pages/turnjs2/css/jquery.ui.css"></link>
<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>/application/views/pages/turnjs2/css/default.css"></link>

<script type="text/javascript" src="<?php echo base_url() ?>/application/views/pages/turnjs2/extras/all.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/application/views/pages/turnjs2/lib/hash.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/application/views/pages/turnjs2/lib/turn.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/application/views/pages/turnjs2/lib/zoom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/application/views/pages/turnjs2/lib/bookshelf.js"></script>
<script src="<?php echo base_url() ?>/assets/js/dashboard/book.js"></script>


<meta name="keywords" content="page,flip,pages,effect,flipbook,flipboard,jquery,html5,book,magazine,newspaper,ipad,iphone,android,ios" />

<div id="canvas">
<div class="splash">
	<div id="turn_prewar">

			<div class="bookshelf" >
				<div class="shelf">
					<div class="row-1">
						<div class="loc">
								<div><a href="<?php echo base_url() . 'pages/book1/'  ?>" ><div class="sample thumb1" sample=""><img src="<?php echo base_url() .'/assets/turnjs/pages/1.jpg' ?>" height="100%" alt=""></div></a> </div>
							<div> <div class="sample thumb2" sample="html5"><img src="<?php echo base_url() .'/assets/turnjs/pages/1.jpg' ?>" height="100%" alt=""></div> </div>
							<div> <div class="sample thumb3" sample="docs"></div> </div>

						</div>
					</div>
					<div class="row-2">
						<div class="loc">
							<div> <div class="sample thumb4" sample="magazine1"></div> </div>
							<div> <div class="sample thumb5" sample="magazine2"></div> </div>
							<div> <div class="sample thumb6" sample="magazine3"></div> </div>
						</div>
					</div>
				</div>
			</div>


			</div>
		</div>
</div>

	<script type="text/javascript">



			//1953 360
			yepnope({
				test : Modernizr.csstransforms,

				nope : ['<?php echo base_url()?>/application/views/pages/turnjs2/lib/turn.html4.min.js', '<?php echo base_url()?>/application/views/pages/turnjs2/css/jquery.ui.html4.css']
			});

			$('#sample-viewer a').click(function() {
				$(this).hide();
				yepnope({
					test : Modernizr.csstransforms,
					load: ['<?php echo base_url()?>/application/views/pages/turnjs2/samples/basic/js/basic.js', '<?php echo base_url()?>/application/views/pages/turnjs2/samples/basic/css/basic.css'],
					nope: '<?php echo base_url()?>/application/views/pages/turnjs2/samples/basic/css/basic.html4.css?'+Math.round(Math.random()*100)
				});
			});

			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-28960832-1']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
			</script>

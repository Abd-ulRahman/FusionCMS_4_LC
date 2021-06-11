{$head}
	<body>
		<!--[if lte IE 8]>
			<style type="text/css">
				body {
					background-image:url(images/bg.jpg);
					background-position:top center;
				}
			</style>
		<![endif]-->
		<section id="wrapper">
			{$modals}
			<ul id="top_menu">
				{foreach from=$menu_top item=menu_1}
					<li><a {$menu_1.link}>{$menu_1.name}<p></p></a><span></span></li>
				{/foreach}
			</ul>
            
            	<a id="server-logo" href="./" title=""><!--{$serverName}--></a>
            	
			<div id="main">
				<aside id="left">
					<article>
						<ul id="left_menu">
							{foreach from=$menu_side item=menu_2}
								<li><a {$menu_2.link}><img src="{$image_path}bullet.png">{$menu_2.name}</a></li>
							{/foreach}
						</ul>
					</article>

					{foreach from=$sideboxes item=sidebox}
						<article>
							<h1 class="top"><p>{$sidebox.name}</p></h1>
							<section class="body">
								{$sidebox.data}
							</section>
						</article>
					{/foreach}                     
                        
				</aside>

				<aside id="right">
					<section id="slider_bg" {if !$show_slider}style="display:none;"{/if}>
						<div id="slider">
							{foreach from=$slider item=image}
								<a href="{$image.link}"><img src="{$image.image}" title="{$image.text}"/></a>
							{/foreach}
						</div>
					</section>
					<div class="ornament-bar"></div>
					{$page}
				</aside>

				<div class="clear"></div>
			</div>
			<footer>
			
             	<h3>CTWUG-WOW &copy; Copyright 2013 </h3>
			</footer>
		</section>
	</body>
</html>

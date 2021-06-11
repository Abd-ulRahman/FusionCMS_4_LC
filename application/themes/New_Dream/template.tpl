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
			<header id="hand"></header>
			<header id="hand-2"></header>
			<header><a href="https://www.facebook.com/" id="hand2" target="_blank"></a></header>
			<header><a href="http://www.youtube.com/user/" id="hand3" target="_blank"></a></header>
			<header><a href="https://twitter.com/" id="hand4" target="_blank"></a></header>
			<header id="hand5"></header>
			<header><a href="register" id="hand6"></a></header>
			<header id="hand7"></header>
			<ul id="top_menu">
				{foreach from=$menu_top item=menu_1}
					<li><a {$menu_1.link}>{$menu_1.name}</a></li>
				{/foreach}
			</ul>
			<div id="main">
				<aside id="left">
					<article>
						<h1 class="top">Men&uacute; principal</h1>
						<ul id="left_menu">
							{foreach from=$menu_side item=menu_2}
								<li><a {$menu_2.link}><img src="{$image_path}bullet.png">{$menu_2.name}</a></li>
							{/foreach}
						</ul>
					</article>

					{foreach from=$sideboxes item=sidebox}
						<article>
							<h1 class="top">{$sidebox.name}</h1>
							<section class="body">
								{$sidebox.data}
							</section>
						</article>
					{/foreach}
				</aside>

				<aside id="right">
					<section id="slider_bg" {if !$show_slider}style="display:none;"{/if}>
						<div id="slider">
							<div id="slider_frame">
							{foreach from=$slider item=image}
								<a href="{$image.link}"><img src="{$image.image}" title="{$image.text}"/></a>
							{/foreach}
							</div>
						</div>
					</section>

					{$page}
				</aside>

				<div class="clear"></div>
			</div>
			<footer>
				<a href="https://www.facebook.com/OwnerGamers" id="logo2" target="_blank"></a>
				<p>&copy; Copyright 2013 {$serverName}</p>
			</footer>
		</section>
	</body>
<link href='http://fonts.googleapis.com/css?family=Federant' rel='stylesheet' type='text/css'>
</html>
{foreach from=$articles item=article}

	<article>
		<a href="{$url}news/view/{$article.id}" class="top">
			<div class="news-heading-cosmetic"></div>
			<h1>{langColumn($article.headline)}</h1>
			<h2>{$article.date}</h2>
		</a>
		<section class="body">
			{if $article.avatar}
				<div class="avatar">
					<img src="{$article.avatar}" alt="avatar" height="44" width="44">
				</div>
			{/if}
			
			{langColumn($article.content)}
			
			<div class="clear"></div>
			
			<div class="news_bottom">

				{if $article.comments != -1}
					<a {$article.link} class="comments_button" {$article.comments_button_id}>
						<font color="#8d3b3b">{lang("comments", "news")} ({$article.comments})</font>
					</a>
				{/if}

				<h1>{lang("posted_by", "news")} <a href="{$url}profile/{$article.author_id}" data-tip="{lang("view_profile", "news")}"><font color="#8d3b3b">{$article.author}</font></a> {lang("on", "news")} {$article.date}</h1>

				{if $article.tags}
					{foreach from=$article.tags item=tag}
						<a href="{$url}/news/{$tag.name}">{$tag.name}</a>
					{/foreach}
				{/if}
			</div>

			<div class="comments" {$article.comments_id}></div>
		</section>
	</article>

{/foreach}

{$pagination}
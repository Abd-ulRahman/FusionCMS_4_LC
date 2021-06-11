
<div id="pm_controls">
	<div id="pm_controls_right">
		{if hasPermission("compose")}
			<a href="{$url}News/create" class="nice_button">{lang("compose_article", "news")}</a>
		{/if}
	</div>
</div>
{foreach from=$articles item=article}
	<article class="main_box">
		<a href="{$url}news/view/{$article.id}" class="main_box_top">{langColumn($article.headline)}</a>
		<div class="main_box_body">
			{langColumn($article.content)}

			<div class="clear"></div>
		</div>
		<div class="main_box_bottom">

			{if $article.comments != -1}
				<a {$article.link} class="news_comments" {$article.comments_button_id}>
					{lang("comments", "news")} ({$article.comments})
				</a>
			{/if}

			{lang("posted_by", "news")} <b><a href="{$url}profile/{$article.author_id}" data-tip="{lang("view_profile", "news")}">{$article.author}</a></b> {lang("on", "news")} <b>{$article.date}</b>

            {if $article.tags}
                {foreach from=$article.tags item=tag}
                    <a href="{$url}/news/{$tag.name}">{$tag.name}</a>
                {/foreach}
            {/if}
        </div>
		<div class="comments" {$article.comments_id}></div>
	</article>

{/foreach}
{$pagination}
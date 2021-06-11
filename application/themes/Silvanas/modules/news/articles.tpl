{foreach from=$articles item=article}

	<article class="news_row">
    	<div class="news_head">
			<a {$article.link} class="top">{$article.headline}</a>
            <p>Escrito por <a href="{$url}profile/{$article.author_id}" data-tip="Ver Perfil">{$article.author}</a> en {$article.date}</p>
            <span>
            	{if $article.comments != -1}
					<a {$article.link} class="comments_button" {$article.comments_button_id}>
						Comentarios ({$article.comments})
					</a>
				{/if}
            </span>
        </div>
		<section class="body">
			{if $article.avatar}
				<div class="avatar">
					<img src="{$article.avatar}" alt="avatar" height="44" width="44">
				</div>
			{/if}
			
			{$article.content}
			
			<div class="clear"></div>

			<div class="comments" {$article.comments_id}></div>
		</section>
	</article>

{/foreach}
{$pagination}

<div class="divider"></div>

<div class="comments_area" {$comments_id}>
	{$comments}
</div>

<form {$form}>
	{if $online}
		<textarea spellcheck="false" {$field_id} placeholder="Escribe un comentario..." onkeyup="UI.limitCharacters(this, 'characters_remaining_{$id}')" maxlength="255"></textarea>
		<div class="characters_remaining"><span id="characters_remaining_{$id}">0 / 255</span> caracteres</div>
		<input type="submit" value="Enviar comentario" id="comment_button_{$id}" />
	{else}
		<textarea disabled placeholder="Porfavor conectate para comentarar"></textarea>
		<input type="submit" value="Enviar comentario"/>
	{/if}
</form>

<div class="clear"></div>

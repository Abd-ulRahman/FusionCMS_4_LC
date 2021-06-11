<section id="avatar_page">
	<div class="avatar" style="width:44px;height:44px;>
        <img src="{$avatar}" alt="avatar" width="44" height="44">
    </div>
    <p>Maximum files size allowed {$max_size} kb.</p>
    <p>Max width and height {$max_width} * {$max_height}</p>
    <p>Allowed types : {$allowed_types}</p>
    {form_open_multipart('ucp/avatar/upload')}
        <label for="avatar">Select a file to upload : </label>
        <input name="avatar" id="avatar" type="file">
		<div class="clear"></div>
        <center><input value="Upload" type="submit"></center>
    {form_close()}
</section>
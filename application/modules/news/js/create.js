var Create = {
	
	send: function()
	{
		var content = $("#pm_editor").html();
		var headline = $("#pm_headline").val();

		if(content.length <= 3)
		{
			UI.alert(lang("article_limit", "news"));
		}
		else if(headline.length <= 0 || headline.length > 50)
		{
			UI.alert(lang("headline_limit", "news"));
		}
		else
		{
			var spot = $("#pm_spot");

		//	spot.html('<div style="text-align:center;padding:10px;"><img src="' + Config.image_path + 'ajax.gif" /></div>');

		//	$.post(Config.URL + "news/create/submit/" , {headline:headline , content:content, csrf_token_name: Config.CSRF} , function(data)
			$.post(Config.URL + "news/create/submit/" , {headline:headline , content:content, csrf_token_name: Config.CSRF} , function(data)
			{
				window.location = Config.URL + "news/news";
			});
		}
	},

	validateheadline: function(element)
	{
		var error = $(element).attr("id");

		if(element.value.length == 0)
		{
			$("#" + error + "_error").html('<img src="' + Config.URL + 'application/images/icons/exclamation.png" data-tip="' + lang("headline_cant_be_empty", "news") + '"/>');
			Tooltip.refresh();
		}
		else
		{
			$("#" + error + "_error").html('<img src="' + Config.URL + 'application/images/icons/accept.png"/>');
		}
	}
}
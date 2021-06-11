
<div id="pm_spot">
	<table width="100%">
		<tr>
			<td width="5%" style="text-align:right;padding-top:15px;" valign="top">
			</td>
		</tr>
		<tr>
			<td><label for="pm_headline">{lang("headline", "news")}</label></td>
			<td>
				<input type="text" name="pm_headline" id="pm_headline" maxlength="50" placeholder="{lang("hi_there", "news")}" onBlur="Create.validateheadline(this)"/>
			</td>
			<td style="text-align:right;">
				<span id="pm_headline_error"></span>
			</td>
		</tr>
	</table>

	<div style="height:10px"></div>
	{$editor}

	<div style="height:10px"></div>

	<form onSubmit="Create.send(); return false">
		<center><input type="submit" value="{lang("send", "news")}" /></center>
	</form>

	<div style="height:10px"></div>
</div>
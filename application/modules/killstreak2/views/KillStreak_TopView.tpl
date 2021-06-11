{if $rows}
		<table class="nice_table" cellspacing="0" cellpadding="0">
			<tr>
				<td id="crew_tabed_top_o" width="20%" align="left">Character</td>
				<td id="crew_tabed_top_o" width="20%" align="center">Class</td>
				<td id="crew_tabed_top_o" width="20%" align="center">Race</td>
				<td id="crew_tabed_top_o" width="20%" align="center">Total Kills</td>
				<td id="crew_tabed_top_o" width="20%" align="center">Total Honor</td>
			</tr>
		{foreach from=$rows key=key item=row}
		<tr>
			<td id="crew_tabed_list" width="15%" align="left"><b>{$key +1}.</b> <a data-tip="View character profile" href="{$url}character/{$row.realmid}/{$row.guid}"><font color="FF0033">{$row['name']}</font> </td>
			<td id="crew_tabed_list" width="15%" align="center"> <img src="{$url}application/images/stats/{$row.class}.gif" /></td>
			<td id="crew_tabed_list" width="15%" align="center"> <img src="{$url}application/images/stats/{$row.race}-{$row.gender}.gif" /></td>
			<td id="crew_tabed_list" width="15%" align="center"> {$row['killsLifeTime']}</td>
			<td id="crew_tabed_list" width="15%" align="center"> {$row['honorPoints']} </td>
		</tr>
		{/foreach}
	</table>
{else}
	No results
{/if}
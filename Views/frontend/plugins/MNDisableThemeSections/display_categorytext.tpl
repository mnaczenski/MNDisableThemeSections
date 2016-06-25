{*Display Category text*}

{block name="frontend_listing_list_promotion"}
	{if $showcms = "cmstextafteremotion"}
		{block name="frontend_listing_emotions" append}
			{include file='frontend/listing/text.tpl'}
		{/block}

	{else if $showcms = "cmstextbeforeemotion"}
		{block name="frontend_listing_emotions" prepend}
			{include file='frontend/listing/text.tpl'}
		{/block}
	{else}
	{/if}
	{smarty.block.parent}
{/block}

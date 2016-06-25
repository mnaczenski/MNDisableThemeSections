{*Display Category text*}

{block name="frontend_listing_emotions" prepend}
	{if $showcms == "cmstextbeforeemotion"}
		{include file='frontend/listing/text.tpl'}
	{/if}
{/block}


{block name="frontend_listing_list_promotion_link_show_listing" prepend}
	{if $showcms == "cmstextafteremotion"}
		{include file='frontend/listing/text.tpl'}
	{/if}	
{/block}

{extends file="parent:frontend/listing/listing.tpl"}

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

{block name="frontend_listing_listing_wrapper" prepend}
    {if $showcategoryimage == "showcategoryimagey"}
        {include file='plugins/MNDisableThemeSections/show_category_image.tpl'}
    {/if}
{/block}
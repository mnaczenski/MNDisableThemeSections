{extends file="parent:frontend/index/footer.tpl"}

{block name='frontend_index_footer_menu'}
    {if $footer == "footery"}
    {else}
        {$smarty.block.parent}
    {/if}
{/block}

{block name='frontend_index_footer_copyright'}
    {if $copyright == "copyrighty"}
    {else}
        {$smarty.block.parent}
    {/if}
{/block}

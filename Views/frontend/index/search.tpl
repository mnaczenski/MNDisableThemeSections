{extends file="parent:frontend/index/search.tpl"}

{block name='frontend_index_search_container' prepend}
    {if $search == "searchy"}
    {else}
        {$smarty.block.parent}
    {/if}
{/block}
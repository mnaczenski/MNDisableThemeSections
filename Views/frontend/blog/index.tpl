{extends file="parent:frontend/blog/index.tpl"}


{block name='frontend_index_content' prepend}
    {if $showcategoryimageinblog == "showcategoryimageinblogy"}
        {include file='plugins/MNDisableThemeSections/show_blog_image.tpl'}
    {/if}

    {if $showblogemotion == "showblogemotiony"}
        {include file='plugins/MNDisableThemeSections/show_blog_emotions.tpl'}
    {/if}
{/block}
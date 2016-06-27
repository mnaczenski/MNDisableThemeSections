<p>
    {if $showcategoryimageinblog == "showcategoryimageinblogy"}
        <div>
            <picture>
                <source srcset="{$Shop->getBaseUrl()}/{$sCategoryContent.media.path}" media="(min-width: 48em)">
                <img srcset="{$Shop->getBaseUrl()}/{$sCategoryContent.media.path}" alt="{$sCategoryContent.media.description|escape}" class="banner--img" />
            </picture>
        </div>
    {/if}
</p>
<p>
    {if $showcategoryimage == "showcategoryimagey"}
        <div>
            <picture>
                <source srcset="{$sCategoryContent.media.path}" media="(min-width: 48em)">
                <img srcset="{$sCategoryContent.media.path}" alt="{$sCategoryContent.media.description|escape}" class="banner--img" />
            </picture>
        </div>
    {/if}
</p>
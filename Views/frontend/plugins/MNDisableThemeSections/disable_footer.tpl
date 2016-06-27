{* Footer Functions *}	

	{block name='frontend_index_footer_menu'}
		{if $footer == "footery"}
		{else}
			{if $service == "servicey"}
				{block name="frontend_index_footer_column_service_hotline"}
	    			<div class="footer--column column--hotline is--first block">
						{block name="frontend_index_footer_column_service_hotline_headline"}
	            			<div class="column--headline"></div>
						{/block}

						{block name="frontend_index_footer_column_service_hotline_content"}
							<div class="column--content">
								<p class="column--desc">{$servicealternative}</p>
							</div>
						{/block}
	    			</div>
				{/block}
			{/if}

			{if $newsletter == "newslettery"}
				{block name="frontend_index_footer_column_newsletter"}
					<div class="footer--column column--newsletter is--last block">
						{block name="frontend_index_footer_column_newsletter_headline"}
							<div class="column--headline"></div>
						{/block}

						{block name="frontend_index_footer_column_newsletter_content"}
							<div class="column--content">
								<p class="column--desc">{$nlalternative}</p>
							</div>
						{/block}
					</div>
				{/block}
			{/if}
			{$smarty.block.parent}
		{/if}
	{/block}

	{block name='frontend_index_footer_copyright'}
		{if $copyright == "copyrighty"}
		{else}
			{$smarty.block.parent}
		{/if}
	{/block}

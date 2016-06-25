{* Disable Search *}	

	{block name='frontend_index_search_container'}
		{if $search == searchy} 
		{else}
			{$smarty.block.parent}
		{/if}
	{/block}

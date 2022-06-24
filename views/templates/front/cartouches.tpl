{extends file='page.tpl'}
{block name="page_content"}
    <p>{$num}</p>
    <p>Welcome to my cartouches!</p>
    <form action="{$smarty.server.PHP_SELF}?fc=module&module=mymodule&controller=cartouches" method="post">

    {foreach from=$fields item=foo}
        {form_field field=$foo}
    {/foreach}

    <input class="btn btn-primary" type="submit">

    </form>
{/block}
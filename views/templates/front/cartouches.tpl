{extends file='page.tpl'}
{block name="page_content"}
    <p>{$num}</p>
    <p>Welcome to my cartouches!</p>
<<<<<<< HEAD
    <form action="{$link->getModuleLink('mymodule','cartouches')}" method="post">
=======
    <form action="{$smarty.server.PHP_SELF}?fc=module&module=mymodule&controller=cartouches" method="post">
>>>>>>> 93af06f4813597615de41505dc69e36eb3e52907

    {foreach from=$fields item=foo}
        {form_field field=$foo}
    {/foreach}

    <input class="btn btn-primary" type="submit">

    </form>
{/block}
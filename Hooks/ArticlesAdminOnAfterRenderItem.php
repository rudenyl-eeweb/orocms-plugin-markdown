<?php
namespace Plugins\MarkDown\Hooks;

use OroCMS\Admin\Stub;

class ArticlesAdminOnAfterRenderItem
{
    public function handle($article)
    {
        return (new Stub(__DIR__ . '/../Stubs/markdown.stub', []))->render();
    }   
}
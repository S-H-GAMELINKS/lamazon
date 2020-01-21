<?php

namespace App\Admin\Extensions\Tools;

use Encore\Admin\Grid\Tools\AbstractTool;

class ImportProductButton extends AbstractTool
{
    public function render()
    {
        return view('admin.button.import_product');
    }
}
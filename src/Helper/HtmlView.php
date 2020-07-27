<?php

namespace Inst\Helper;

trait HtmlView
{
    public function render(string $template, array $data = []):string
    {
        extract($data);
        ob_start();
        require __DIR__ . '/../View/'.$template.'.php';
        return ob_get_clean();
    }
}
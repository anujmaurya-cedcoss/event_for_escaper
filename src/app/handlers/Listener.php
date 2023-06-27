<?php
namespace App\Handlers;

use Phalcon\Escaper;

class Listener
{
    public function beforeHandleRequest()
    {
        $escaper = new Escaper();
        return array(
            'name' => ($_POST['name'] == '' ? 'default' : $escaper->escapeHtml($_POST['name'])),
            'email' => ($_POST['email'] == '' ? 'default@mail.com' : $escaper->escapeHtml($_POST['email']))
        );
    }
}
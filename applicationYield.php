<?php
date_default_timezone_set('PRC');
class Crud
{
    protected function runHook($hooks, $key, &$arguments) 
    {
        is_array($hooks) || $hooks = [$hooks];

        isset($hooks[$key]) && $hooks[$key]($arguments);
        // The good thing about this is that you can create as many hooks as you like without concerning if the caller defines it or not
    }

    public function create(array $data) 
    { 
        $hooks = yield;
        $this->runHook($hooks, 'preSave', $data);
        file_put_contents("./log_data", var_export($data,true).date('Y-m-d H:i:s'));
    }
}

$crud = new Crud;

// this will return a \Generator instance
$generator = $crud->create(['firstname' => 'foo', 'lastname' => 'bar']);

// this is where we define our hook(s)
$res = $generator->send([
    'preSave' => function(&$data) {
        $data['name'] = 'baz';
    }, // and we can have as many as we want here
]);

// getting the result of the "create" method call.

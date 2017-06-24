<?php

namespace app\console\controller;

use think\Controller;
use think\Request;
use think\console\Command;
use think\console\Input;
use think\console\Output;

class Test extends Controller
{
    protected function configure()
    {
        $this->setName('test')->setDescription('Here is the remark ');
    }

    protected function execute(Input $input, Output $output)
    {
        $output->writeln("TestCommand:");
    }
}

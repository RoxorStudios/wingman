<?php

namespace Wingman\Console;

class Kernel
{

	public $commands = [
		\Wingman\Console\Commands\CronCommand::class,
		\Wingman\Console\Commands\QueueCommand::class
    ];

}
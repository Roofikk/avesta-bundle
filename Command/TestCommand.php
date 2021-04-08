<?php declare(strict_types=1);

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class TestCommand extends Command
{

    protected function configure()
    {
        $this->setName('app:test-command');
        $this->addOption('yell', null, InputOption::VALUE_NONE, 'If set, the task will yell in uppercase letters');

    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Command worked');
    }
}
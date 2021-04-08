<?php declare(strict_types=1);

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class ListNetworksCommand extends Command
{

    protected function configure()
    {
        $this->setName('demo:greet');
        $this->setDescription('List networks');
        $this->addArgument('name', InputArgument::OPTIONAL, 'Who do you want to greet?');
        $this->addOption('yell', null, InputOption::VALUE_NONE, 'If set, the task will yell in uppercase letters');

    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $name = $input->getArgument('name');
        if ($name) {
            $text = 'Hello '.$name;
        } else {
            $text = 'Hello';
        }

        if ($input->getOption('yell')) {
            $text = strtoupper($text);
        }

        $output->writeln($text);
    }
}
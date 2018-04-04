<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ExtentionMakeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:extention {name?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new extention class';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // TODO 参数接收、参数解析、判断、生成
        // 参数接收
        $param                  =   $this->argument('name') ?? null;
        //      参数不存在
        is_null($param) && exit($this->warn('Place enter the name you need create.'));
        // 参数解析
        $parsed                 =   $this->parseParam( $param );
        var_dump( $this );
    }

    protected function parseParam ($param)
    {

    }
}

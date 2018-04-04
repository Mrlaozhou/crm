<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

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
        // TODO 参数接收、参数解析、判断是否存在、生成
        // 参数接收
        $param                  =   $this->argument('name') ?? null;
        //      参数不存在
        is_null($param) && exit( $this->warn('Please enter the name you need create.') );
        // 参数解析
        $parsed                 =   $this->parseParam( $param );
        //文件是否存在
        File::exists( $parsed['filename'] ) && exit( $this->info('Has already exists.') );
        // 创建关联目录及类文件
        $stubfile               =   $parsed['stubPath'].'\\extention.php';
        $fileinfo               =   str_replace( '--NAME--', $parsed['key'], file_get_contents( $stubfile ) );

        File::makeDirectory( $parsed['relationPath'],0755,  true );

        File::put( $parsed['filename'], $fileinfo );

        exit( $this->info('Created extention file successfully!')  );
    }

    protected function parseParam ($param)
    {
        $key                    =   ucwords( $param );
        $extentionPath          =   app_path('Extentions');
        $stubPath               =   app_path('Console\Stubs');
        $relationPath           =   $extentionPath.'\\'.$key;
        $filename               =   $extentionPath.'\\'.$key.'.php';

        return compact( 'stubPath', 'relationPath', 'filename', 'key' );
    }
}

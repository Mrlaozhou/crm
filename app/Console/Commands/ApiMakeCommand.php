<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ApiMakeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:api {name?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new api class';

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
        // TODO 参数获取、参数解析、是否已存在
        // -- 参数获取
        $param          =   $this->argument('name') ?? null;
        // ---- 参数不存在
        is_null($param) && exit($this->warn('Place enter the name you need create.'));
        // -- 参数解析
        $param          =   array_map( 'ucfirst' ,explode( '/', $param ) );
        // ---- 文件全路径
        $filename       =   $this->getApiPath( implode( '/', $param ).'.php' );
        // ---- 文件所在目录
        $dir            =   File::dirname( $filename );
        // ---- 文件名称（sign）
        $name           =   array_pop( $param );
        // ---- 命名空间
        $namespace      =   count($param) > 1 ? '\\'.implode( '\\', $param ) : '';

        // 是否已经存在
        File::exists( $filename ) && exit( $this->info('Has already exists.') );
        // 父级是否存在
        $this->createBase();
        // 文件信息
        $fileinfo       =   $this->getStub( 'api' );
        $fileinfo       =   str_replace( '--NAMESPACE--',$namespace, $fileinfo );
        $fileinfo       =   str_replace( '--NAME--', $name, $fileinfo );

        // 创建文件目录
        File::isDirectory( $dir ) || File::makeDirectory( $dir );
        // 创建文件
        File::put( $filename, $fileinfo );

        exit( $this->info('Created api file successfully!')  );
    }

    protected function createBase ()
    {
        // base 文件地址
        $baseFilename           =   $this->getApiPath('Base.php');
        // 是否已经存在
        if( File::exists ( $baseFilename ) ) return ;
        // 创建目录
        File::makeDirectory( $this->getApiPath(), 0755, true );
        // 文件信息
        $fileinfo               =   $this->getStub('api_base');
        // 创建文件
        return File::put( $baseFilename, $fileinfo, true );
    }

    protected function getApiPath ($path='')
    {
        return app()->basePath().'/app/Api/'.$path;
    }

    protected function getCurrentPath()
    {
        return  realpath(__DIR__);
    }

    protected function getStub ($name)
    {
        $stubPath           =   $this->getCurrentPath().'/../Stubs/'.$name.'.stub';
        return file_get_contents( $stubPath );
    }
}

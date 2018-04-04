<?php
namespace App\Extentions;

use Illuminate\Http\Request;

abstract class Check
{

    /**
     * @ 储存 “下层” 操作 实例
     * @var
     */
    private $nextFloorInstance          =   false;

    /**
     * @ 操作
     * @return mixed
     */
    abstract protected function operate (Request $request);

    /**
     * @ 设置 “下层” 操作实例
     * @param Check $check
     * @return Check
     */
    public function setNext (self $check)
    {
        return $this->nextFloorInstance = $check;
    }

    public function start (Request $request)
    {
        // 执行当前操作
        $this->operate($request);
        // 触发下层操作
        $this->nextFloorInstance && $this->nextFloorInstance->start($request);
    }
}

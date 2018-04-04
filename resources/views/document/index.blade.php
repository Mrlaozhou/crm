<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        @include('common.layui')
        <style>
            .box{ margin: 60px auto ; }
        </style>
    </head>
    <body>
        <div class="layui-container box">

            {{-- 概览 --}}
            <blockquote class="layui-elem-quote ">CRM 技术相关概览</blockquote>
            <div class="layui-row">
                <div class="layui-collapse" lay-accordion>
                    {{-- 服务器及脚本运行环境 --}}
                    <div class="layui-colla-item">
                        <h2 class="layui-colla-title">服务器及脚本运行环境</h2>
                        <div class="layui-colla-content layui-show">

                            <div class="layui-collapse"  lay-accordion>
                                <div class="layui-colla-item">
                                    <h2 class="layui-colla-title">当前版本</h2>
                                    <div class="layui-colla-content">
                                        <code>
                                            php 5.5,    apache 2.2,     mysql 5.5
                                        </code>
                                    </div>
                                </div>
                                <div class="layui-colla-item">
                                    <h2 class="layui-colla-title">需要版本</h2>
                                    <div class="layui-colla-content">
                                        <code>
                                            php 7.2+,   apache 2.2+/nginx 1.1+,     mysql 5.7+
                                        </code>
                                    </div>
                                </div>
                                <div class="layui-colla-item">
                                    <h2 class="layui-colla-title">原因</h2>
                                    <div class="layui-colla-content">
                                        <code>
                                            php 7.2+脚本运行性能大幅度提升、语法更加严谨、安全性更高等
                                            mysql 5.7+有很多功能性扩展（优化的复制功能、新增json数据字段类型等）
                                            web服务器软件 apache/nginx 推荐用nginx，后期可以根据服务器情况 搭建分布式
                                        </code>
                                    </div>
                                </div>
                                <div class="layui-colla-item">
                                    <h2 class="layui-colla-title">建议</h2>
                                    <div class="layui-colla-content">
                                        <code>
                                            建议一、121.40.67.121服务器环境重新搭建（代价较大、不确定因素多）。
                                            建议二、买一台配置一般的服务器（只跑crm项目）
                                        </code>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- 应用技术 --}}
                    <div class="layui-colla-item">
                        <h2 class="layui-colla-title">技术应用</h2>
                        <div class="layui-colla-content ">

                            <div class="layui-collapse" lay-accordion>
                                <div class="layui-colla-item">
                                    <h2 class="layui-colla-title">PHP应用</h2>
                                    <div class="layui-colla-content">
                                        <code>
                                            Laravel 5.6 功能性强、扩展性强、可维护性强等
                                            Laravel应用较为广泛，方便后期维护（用的人越来越多）
                                            详情 https://www.zhihu.com/question/19558755/answer/23062110
                                        </code>
                                    </div>
                                </div>

                                <div class="layui-colla-item">
                                    <h2 class="layui-colla-title">前端应用</h2>
                                    <div class="layui-colla-content">
                                        <code>
                                            Vue.js 轻量级、高性能、容易上手，便于前后端人员共同维护
                                        </code>
                                    </div>
                                </div>

                                <div class="layui-colla-item">
                                    <h2 class="layui-colla-title">交互方式</h2>
                                    <div class="layui-colla-content">
                                        <code>
                                            整站采用利用Ajax进行异步数据请求（建议），即前后端分离
                                        </code>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="layui-colla-item">
                        <h2 class="layui-colla-title">接口</h2>
                        <div class="layui-colla-content ">

                            <code>
                                /** 公共参数 **/
                                    略

                                /** 接口安全 **/
                                    JWT机制:不需要担心跨域资源共享问题.
                                    过期验证|签名验证|重放验证|限流|转义
                                    头部信息类型（JWT.Header.typ）: inter(内部)、exter(外部) 根据不同类型选择不同的验证方式

                                /** 接口版本 **/
                                    例：
                                    http://api.depot.xiaoying.net/api/v1/saleClue/create    //  v1版本
                                    http://api.depot.xiaoying.net/api/v2/saleClue/create    //  v2版本
                                    ...
                                    http://api.depot.xiaoying.net/api/vn/saleClue/create    //  vn版本
                                    便于后期迭代升级、维护

                                /** 状态码 **/
                                    200 -> 请求成功
                                    400 -> 缺少公共必传参数或者业务必传参数
                                    401 -> 接口校验失败 例如签名
                                    403 -> 没有该接口的访问权限
                                    499 -> 上游服务响应时间超过接口设置的超时时间
                                    500 -> 代码错误
                                    501 -> 不支持的接口method
                                    502 -> 上游服务返回的数据格式不正确
                                    503 -> 上游服务超时
                                    504 -> 上游服务不可用
                                    ...
                            </code>

                        </div>
                    </div>
                </div>
            </div>

            <hr class="layui-bg-black">
            <hr class="layui-bg-black">

            {{-- 接口列表 --}}
            <blockquote class="layui-elem-quote ">接口详细</blockquote>
            <div class="layui-row">

                <div class="layui-collapse">
                    <div class="layui-colla-item">
                        <h2 class="layui-colla-title">公共参数</h2>
                        <div class="layui-colla-content">
                            <code>

                            </code>
                        </div>
                    </div>
                    <div class="layui-colla-item">
                        <h2 class="layui-colla-title">安全验证</h2>
                        <div class="layui-colla-content">
                            <code>

                            </code>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script>
            layui.use( ['jquery','table','code','form','layer','element'], function (obj) {
                var table           =   layui.table,
                    code            =   layui.code,
                    form            =   layui.form,
                    layer           =   layui.layer,
                    $               =   layui.jquery,
                    elem            =   layui.element;

                layui.code({
                    encode: true
                    ,elem: 'code'
                    ,title: '介绍'
                    ,skin: 'notepad' // 如果要默认风格，不用设定该key。notepad
                    ,about:false
                });
            } );
        </script>
    </body>
</html>
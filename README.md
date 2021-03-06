## Mix Phar Skeleton

命令行单执行文件 `Phar` 开发程序骨架，Mix 封装的命令行基础设施在骨架中都可使用。

我们提供了打包工具 [mix-pack](https://github.com/mix-php/mix-pack)，可以将本项目打包为 Phar 文件（就像 golang 编译成执行文件一样）。

PHP 原本就是一个动态版本的 C 库集合，现在基于 Swoole 的协程支持，再加上 Mix 封装的大量基础设施，Mix 基本等同于一个动态版本的 Golang，极大的扩展了 PHP 的开发领域，可以用来快速开发各种高性能的 CLI 程序，如：核心业务的守护程序、轻量级中间件、运维工具、系统命令、开发辅助工具等。

## 开发文档

MixPHP 开发指南：https://openmix.org/mix-php/doc

## 环境要求

* PHP >= 7.2
* Swoole >= 4.4.4 (可选)

## 快速开始

推荐使用 [composer](https://www.phpcomposer.com/) 安装。

安装最新版本：

```shell
composer create-project --prefer-dist mix/mix-phar-skeleton phar ~2.2.0
```

开发方式与 MixPHP 的命令行开发一样，参见 MixPHP 开发指南。

> 注意：本骨架 composer 依赖只安装了命令行所需要的 [最小依赖](https://github.com/mix-php/mix-phar-skeleton/blob/master/composer.json#L19)，像 mix/cache、mix/server 等其他库都需用户自行安装

## License

Apache License Version 2.0, http://www.apache.org/licenses/

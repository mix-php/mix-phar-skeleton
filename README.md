## Mix Phar Skeleton

本项目是 MixPHP 开发命令行单执行文件 (Phar) 的程序骨架，MixPHP 封装了大量命令行开发基础设施，包括：

- 统一的 CLI 交互封装，用户只需增加 `::class` 即可完成一个功能完整的命令行程序。
- `Flag` 获取命令行参数。
- `Color` 带颜色的输出支持。
- `xgo + chan`、`WaitGroup` 全面的原生协程支持。(需要 Swoole)
- `Redis Pool`、`Database Pool` 连接池支持。(需要 Swoole)
- `Dispatcher`、`Worker` 协程池支持。(需要 Swoole)

> 以上全部基础设施与 Golang 使用风格几乎一至

我们还提供了打包工具 [mix-pack](https://github.com/mix-php/mix-pack)，可以将 Mix Phar 项目打包为 Phar 文件（就像 golang 编译成执行文件一样）。

PHP 原本就是一个动态版本的 C 库集合，现在基于 Swoole 的协程支持，再加上 Mix 封装的大量基础设施，Mix Phar 基本等同于一个动态版本的 Golang 了，极大的扩展了 PHP 的开发领域，可以用来快速开发各种高性能的 CLI 程序，如：核心业务的守护程序、轻量级中间件、运维工具、系统命令、开发辅助工具等。

## 开发文档

MixPHP 开发指南：http://doc.mixphp.cn

## 环境要求

* PHP >= 7.2
* Swoole >= 4.4.4 (可选)

## 快速开始

推荐使用 [composer](https://www.phpcomposer.com/) 安装。

安装最新版本：

```shell
composer create-project --prefer-dist mix/mix-phar-skeleton phar 2.1.*
```

开发方式与 MixPHP 的命令行开发一样，参见 MixPHP 开发指南。

> 注意：本骨架 composer 依赖只安装了命令行所需要的 [最小依赖](https://github.com/mix-php/mix-phar-skeleton/blob/master/composer.json#L19)，像 mix/cache、mix/server 等其他库都需用户自行安装

## License

Apache License Version 2.0, http://www.apache.org/licenses/

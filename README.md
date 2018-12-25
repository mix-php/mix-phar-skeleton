## Mix CLI

本项目是 MixPHP 一个开发 CLI 程序的分支，使用 MixPHP V2 框架核心，V2 开始我们封装了大量命令行开发基础设施，包括：

- 统一的 CLI 交互封装，用户只需增加命令。
- `Flag` 获取命令行参数。
- `Color` 带颜色的输出支持。
- `xgo + chan` 全面的原生协程支持。
- `redisPool`、`PDOPool` 连接池支持。
- `Dispatcher`、`Worker` 协程池支持。

> 以上全部基础设施与 Golang 使用风格几乎一至

我们还提供了编译工具 [mix-compile](https://github.com/mixstart/mix-compile)，可以将 Mix CLI 项目编译为 Phar 文件（就像 golang 编译成执行文件一样）。

PHP 原本是一个动态版本的 C 库集合，现在基于 Mix 封装的大量基础设施，Mix CLI 基本等同于一个动态版本的 Golang 了，极大的扩展了 PHP 的开发领域，你甚至可以用来开发运维工具。

## License

Apache License Version 2.0, http://www.apache.org/licenses/

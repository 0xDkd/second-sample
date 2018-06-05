## Laravel 入门项目（重构版）

> 我回头重新审视了一下入门的项目，**我发现入门项目才是最值得反复学习的项目**！入门项目是最细最认真的讲解了所有的基础知识，真的建议入门项目多做几遍，并且尝试用不同的方法实现，或者自己增添新的功能。

### 1.截图

![file](https://lccdn.phphub.org/uploads/images/201806/05/22353/8NOGF8W7cU.png?imageView2/2/w/1240/h/0)![file](https://lccdn.phphub.org/uploads/images/201806/05/22353/CajCxEWZMN.png?imageView2/2/w/1240/h/0)![file](https://lccdn.phphub.org/uploads/images/201806/05/22353/t0lsUOef8g.png?imageView2/2/w/1240/h/0)![file](https://lccdn.phphub.org/uploads/images/201806/05/22353/ox4mNJDTiT.png?imageView2/2/w/1240/h/0)![file](https://lccdn.phphub.org/uploads/images/201806/05/22353/iC1DK4oeLE.png?imageView2/2/w/1240/h/0)![file](https://lccdn.phphub.org/uploads/images/201806/05/22353/4lUd4xz7Gp.png?imageView2/2/w/1240/h/0)![file](https://lccdn.phphub.org/uploads/images/201806/05/22353/pCVz94eUHi.png?imageView2/2/w/1240/h/0)![file](https://lccdn.phphub.org/uploads/images/201806/05/22353/rZbzXfcQQR.png?imageView2/2/w/1240/h/0)


### 2.改动地方

1、 使用` Request ` 表单处理层进行单独的表单数据的处理，分离逻辑的编写

2、 使用` Observers` 来实现数据库的监听

3、 使用 `materializecss`  作为前端的框架

4、 没有使用 Laravel Mix 

5、 更改部分数据库结构

### 3.安装

```bash
git clone https://github.com/aimerforreimu/second-sample.git

cd second-sample

cp .env.example .env

composer install

```
配置 `.env` 文件

Enjoy : )

### 4.最后

本项目仅仅是用来练手，写的渣，还望大佬海涵 : )
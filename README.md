基于 https://github.com/laradock/laradock 精简之后的Docker开发集成环境

### env file

查看完整compose.yml输出

```bash
$ docker compose config
```

> 默认使用同级目录下的 .env 文件

可以使用一下方法修改读取文件:

```
$ docker compose --env-file ./config/.env.dev config
```
[ref](https://docs.docker.com/compose/environment-variables/set-environment-variables/)

### Notes

1. pecl无法安装

解决方案：

    自己搭建代理，然后修改Dockerfile
```
+RUN pear config-set http_proxy http://123.56.177.147:6000 \
+    && pecl install redis \
     && pecl install imagick \
     && pecl install apcu \
     && pecl install mongodb
```

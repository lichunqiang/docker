https://github.com/laradock/laradock

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

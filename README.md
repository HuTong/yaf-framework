# yaf-framework
yaf命名空间框架

# 学习交流群
630730920

### 安装
composer create-project hutong/yaf-framework www dev-master

```
server {
  listen 80;
  server_name www.xxx.cn;
  root   /path/public;
  index  index.php;

  charset utf-8;

  location / {
      if (!-e $request_filename) {
          rewrite ^/(.*)$  /index.php?$1 last;
      }
  }

  location ~ \.php$ {
       fastcgi_pass   127.0.0.1:9000;
       fastcgi_index  index.php;
       fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
       include        fastcgi_params;
  }
}
```

## 安装
```bash
git clone https://github.com/Tecode/php-design.git
cd ./php-design
composer install
```

## Composer安装
- Windows系统下载：https://getcomposer.org/Composer-Setup.exe
- Linux、Mac系统下载：https://getcomposer.org/download/

## 启动项目
```bash
php artisan serve
# 本地访问http://127.0.0.1:8000
```

## 环境要求
- PHP >= 5.6.4
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## 说明
- 使用的数据库为mysql，项目启动时务必先安装数据库导入数据，导入数据库用户名称不需要修改。默认设置的数据库账号为root，密码：123456，如果不需要密码请在.env文件内修改。
- public/front文件夹放的是前端页面文件资源
- resources/views/front文件夹放置前端页面模板
- github地址：https://github.com/Tecode/php-design
- 本地访问：http://127.0.0.1:8000
- 线上Demo地址：http://47.98.212.129:1009/
- 后台管理地址：http://47.98.212.129:1009/admin/home
- 登录账号：1236@qq.com 密码：123456，可以自己注册
- 数据表：http://potjm11o0.bkt.clouddn.com/site_qyh_db.sql
- 如果遇到什么问题欢迎到[github](https://github.com/Tecode/php-design)提[issues](https://github.com/Tecode/php-design/issues)

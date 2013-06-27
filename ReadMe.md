WEBMIS是PHP底层开发系统，基于CI的MVC模式开发的多用户、多权限解决方案，可以后台添加管理菜单，整合了Jquery，tinymce编辑器等插件、实现简洁、美观的弹框效果！

一、下载 
登陆 http://www.ksphp.com 或 https://github.com/ksphp/webmis(点击左上角的“ZIP”图标下载)

二、安装
1、解压到网站跟目录；
2、创建数据库、导入根目录下面的 webmis.sql 数据库文件；
3、修改数据库配置文件；
	管理后台：admin/app/config/database.php
	网站前台：web/config/database.php
3、修改 “/” 根目录和 “/admin” 下面的 .htaccess 文件（必须支持重写）；

三、测试
网站前台：http://localhost/web
管理员后台：http://localhost/admin (帐号：webmis 密码：ksphp.com)

四、目录说明
admin-----------------------------后台管理项目
	app---------------------------CI项目目录
	backup------------------------数据备份目录
	js----------------------------后台数据处理的JS文件
	.htaccess---------------------后台重写文件、屏蔽index.php
public----------------------------网站前台公共目录
	css---------------------------样式目录
	images------------------------图片目录
system----------------------------CI框架目录
upload----------------------------上传目录
	web---------------------------网站上传文件
web-------------------------------网站CI项目目录
webmis----------------------------前端样式插件
	css---------------------------样式目录
	images------------------------图片目录
	js----------------------------JS插件
	plugin------------------------公共插件
index.php-------------------------接口文件
webmis.sql------------------------数据库文件
.htaccess-------------------------前台重写文件、屏蔽index.php
	


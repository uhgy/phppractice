-- 创建数据库
create database shop charset utf8;
use shop;

-- 创建表
-- 表前缀sh_
create table sh_admin(
a_id int not null primary key auto_increment,
a_username varchar(10)	not null comment '用户名',
a_password char(50) not null comment '用户密码，md5加密',
a_last_log_ip char(15) comment '用户上次登录IP',
a_last_log_time int unsigned not null comment '用户上次登录时间'
)charset utf8 engine = innodb;

-- 插入一个用户
insert into sh_admin values(null,'admin',md5('admin'),'',1);
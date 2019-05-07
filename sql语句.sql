---SQL（Struct Query Language）代码，SQL是数据库编程语言

--创建数据库

create database db1803

--建表
--学生表
create  table student(
    stuid char(10) not null,
    stuname varchar(30) not null,
    stuage int
)


--课程
--老师

--插入数据
insert into student(stuid,stuname,stuage) values('h5xa180301','李一冲',12)

insert into student(stuid,stuname,stuage) values('h5xa180302','李二冲',13)
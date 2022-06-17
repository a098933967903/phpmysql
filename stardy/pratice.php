drop database if exisit shop;
creat databse shop default character set utf8 collaate utf-8_gerneramal-ci;
    grant all on shop.*to 'staff'@'localhost' identified by 'password';
    use shop;

    create table product(
        id int auto-increment primary key,
        name varchar(200) not null,
        price int not null
    );

    insert into product(null.........)

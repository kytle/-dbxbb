drop table if exists tunnel;
drop table if exists fastflux;
drop table if exists dga;

create table tunnel (
    id int unsigned not null primary key auto_increment,
    ip varchar(128) not null,
    domain varchar(256) not null,
    ts timestamp not null default current_timestamp,
    details longtext default null
);

create table fastflux (
    id int unsigned not null primary key auto_increment,
    domain varchar(256) not null,
    ts timestamp not null default current_timestamp,
    details longtext default null
);

create table dga (
    id int unsigned not null primary key auto_increment,
    ip varchar(128) not null,
    ts timestamp not null default current_timestamp,
    details longtext default null
);

insert into tunnel (ip, domain, details) values ('1.2.3.4', 'test.com', 'sdvisdvuosdivudso.test.com,buosidduoiuvoiwevw.test.com,dvdivoiueouwoeicfuoweiw.test.com');
insert into tunnel (ip, domain, details) values ('1.2.3.5', 'gg.com', 'sdvisdvuosdivudso.test.com,buosidduoiuvoiwevw.test.com,dvdivoiueouwoeicfuoweiw.test.com');
insert into tunnel (ip, domain, details) values ('1.2.33.1', 'bb.com', 'sdvisdvuosdivudso.test.com,buosidduoiuvoiwevw.test.com,dvdivoiueouwoeicfuoweiw.test.com');
insert into tunnel (ip, domain, details) values ('1.77.3.4', 'zzzsd.com', 'sdvisdvuosdivudso.test.com,buosidduoiuvoiwevw.test.com,dvdivoiueouwoeicfuoweiw.test.com');
insert into tunnel (ip, domain, details) values ('99.2.3.4', 'wefee.ccc.cn', 'sdvisdvuosdivudso.test.com,buosidduoiuvoiwevw.test.com,dvdivoiueouwoeicfuoweiw.test.com');

insert into fastflux (domain, details) values ('bivooso.com', '1.1.1.1,2.2.2.2,3.3.3.3,4.4.4.4,5.5.5.5,6.6.6.6');
insert into fastflux (domain, details) values ('sdbsdbd.com', '1.1.1.1,2.2.2.2,3.3.3.3,4.4.4.4,5.5.5.5,6.6.6.6');
insert into fastflux (domain, details) values ('xcbnrtmyhky.com', '1.1.1.1,2.2.2.2,3.3.3.3,4.4.4.4,5.5.5.5,6.6.6.6');
insert into fastflux (domain, details) values ('fedf.com', '1.1.1.1,2.2.2.2,3.3.3.3,4.4.4.4,5.5.5.5,6.6.6.6');
insert into fastflux (domain, details) values ('dbedhbw.com', '1.1.1.1,2.2.2.2,3.3.3.3,4.4.4.4,5.5.5.5,6.6.6.6,7.7.7.7,9.9.9.9');
insert into fastflux (domain, details) values ('dfnbfdnmm.com', '1.1.1.1,2.2.2.2,3.3.3.3,4.4.4.4,5.5.5.5,6.6.6.6');
insert into fastflux (domain, details) values ('wfee.com', '1.1.1.1,2.2.2.2,3.3.3.3,4.4.4.4');
insert into fastflux (domain, details) values ('weveghedf.com', '1.1.1.1,2.2.2.2,3.3.3.3,4.4.4.4,5.5.5.5,6.6.6.6');

insert into dga (ip, details) values ('1.2.34.4', '1.cn,2.cn,sdi.cn,biow.com,sdbuw.cn');
insert into dga (ip, details) values ('1.21.3.4', '1.cn,2.cn,sdi.cn,biow.com,sdbuw.cn');
insert into dga (ip, details) values ('21.2.33.4', '1.cn,2.cn,sdi.cn,biow.com,sdbuw.cn');
insert into dga (ip, details) values ('61.2.3.4', '1.cn,2.cn,sdi.cn,biow.com,sdbuw.cn');
insert into dga (ip, details) values ('1.255.3.4', '1.cn,2.cn,sdi.cn,biow.com,sdbuw.cn');
insert into dga (ip, details) values ('176.2.3.4', '1.cn,2.cn,sdi.cn,biow.com,sdbuw.cn');
insert into dga (ip, details) values ('15.2.3.4', '1.cn,2.cn,sdi.cn,biow.com,sdbuw.cn');

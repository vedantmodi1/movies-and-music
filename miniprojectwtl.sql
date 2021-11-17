drop database ott;
create database ott;

use ott;
show tables;
create table customer(
						user_id varchar(20) primary key,
						user_name varchar(20),
						email_id varchar(40) NOT NULL,
						password varchar(20)
);

create table user_reg(
										user_id varchar(20) primary key,
                    user_name varchar(20) NOT NULL,
                    email_id varchar(40) NOT NULL,
                    contact_no bigint not null check (contact_no between 1000000000 and 9999999999),
                    dob date,
                    reg_date date,
                    subscription_duration int
);
insert into user_reg values('23', 'Ben Dover', 'bendover@gmail.com', 9876543210, '2000-07-13', '2020-11-14', 6);


create table user_student(
													user_id varchar(20) primary key,
			                    user_name varchar(20) NOT NULL,
			                    university_name varchar(30) NOT NULL,
			                    university_email varchar(40) NOT NULL,
			                    contact_no bigint not null check (contact_no between 1000000000 and 9999999999),
			                    dob date,
			                    reg_date date,
			                    subscription_duration int
);

create table production_company(
																user_id varchar(20) primary key,
                                company_name varchar(40) NOT NULL,
                                corporate_email varchar(40) NOT NULL,
                                address varchar(40) NOT NULL,
                                contact_no bigint not null check (contact_no between 1000000000 and 9999999999),
                                license_type varchar(40) NOT NULL
);



-- alter table shows add column image longblob;

-- update shows set image = '';
-- select * from shows;

-- drop table freeze_account;
create table freeze_account(
										user_id varchar(20) primary key,
										user_name varchar(20),
                    email_id varchar(40) NOT NULL,
                    password varchar(20)
);
-- select * from freeze_account;
-- SET SQL_SAFE_UPDATES = 0;
-- delete from user_reg where user_name = 'Ben Dover';
-- load data local infile 'C:/Users/HP/Downloads/archive/netflix_titles' into table shows fields terminated by ',' enclosed by '"' ignore 1 rows;

-- drop trigger freeze_acc;
DELIMITER #
Create trigger freeze_acc after delete on customer
for each row
Begin
Insert into freeze_account values(old.user_id, old.user_name, old.email_id, old.password);
update user_reg set subscription_duration = subscription_duration - (datediff(curdate(), reg_date)), reg_date = current_date() where user_id = old.user_id;
update user_student set subscription_duration = subscription_duration - (datediff(curdate(), reg_date)), reg_date = current_date() where user_id = old.user_id;

End#

delimiter ;
-- drop trigger unfreeze_acc;
DELIMITER #
Create trigger unfreeze_acc after delete on freeze_account
for each row
Begin
Insert into customer values(old.user_id, old.user_name, old.email_id, old.password);
update user_reg set reg_date = current_date() where user_id = old.user_id;
update user_student set reg_date = current_date() where user_id = old.user_id;
End#

delimiter ;
-- select * from customer;
-- select * from user_reg;
-- insert into customer values('1', 'rishabhshinde@gmail.com', '1234rs');
-- insert into user_reg values('1', 'Rishabh Shinde', 'rishabhshinde@gmail.com', '9876543210', '2000-03-27', '2020-12-24', 365);
-- delete from freeze_account where user_id = '1';
-- delete from customer where user_id = '1';
-- select  * from freeze_account;

-- delete from freeze_account where user_id = 1;
-- DELIMITER #
-- Create trigger unfreeze_acc after delete on freeze_account
-- for each row
-- Begin
-- Insert into user_reg values(old.user_id, old.user_name, old.email_id, old.contact_no, old.dob, curdate(), old.subscription_duration - (datediff(curdate(), old.reg_date)/30));
-- End#

-- select * from music;

-- select title from shows where listed_in like '%comedies%' OR '%comedy%';
-- select * from music;

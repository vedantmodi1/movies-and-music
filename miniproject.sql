-- drop database miniproject;
create database miniproject;
use miniproject;

create table donor(
	donor_id int primary key,
    donor_name varchar(30) not null,
    sex varchar(10) not null,
    age int not null check(age >= 18),
    blood_grp varchar(10) not null,
    ph_no char(10) not null,
    donor_history varchar(100) not null );
    
create table blood(
    blood_grp varchar(10) not null,
    stock int);

create table hospital(
	hospital_id int primary key,
    hospital_name varchar(30) not null,
    addr varchar(255) not null,
    ph_no int not null );
    
create table staff(
	staff_id int primary key,
    staff_position varchar(30) not null,
    staff_name varchar(30) not null,
    salary int not null );

create table orders(
	hospital_id int,
	order_id int primary key,
    quantity int not null,
    order_date date not null,
    foreign key (hospital_id) references hospital(hospital_id) on update cascade on delete cascade
    );
    
create table order_details(
	order_id int,
	order_type varchar(30) not null,
    blood_grp varchar(10) not null,
    foreign key (order_id) references orders(order_id) on update cascade on delete cascade
    );
    
    create table specific_order(
    order_id int default null,
    order_type varchar(30) default  null,
    blood_group varchar(10) default null);
    
    delimiter $
    create trigger bef_insert_donor before insert on donor
    for each row
    begin 
    
    if new.donor_name REGEXP '^[0:9]' then
    signal sqlstate '45000' set message_text = 'Name cannot have numeric digits';  -- 45000 signifies unhandled user-defined exception
    end if;
    
    if new.age < 0 then
    signal sqlstate '45000' set message_text = 'Age cannot be negative';
    end if;
    
    if len(new.ph_no) <> 10 then
    signal sqlstate '45000' set message_text = 'Phone number must be 10 digits';
    end if;
    end $
    
    delimiter $$
    create procedure get_order_details(in order_type varchar(30))
    begin
    declare done int default null;
    declare o_id int;
    declare o_type varchar(30);
    declare bld_grp varchar(10);
    declare c1 cursor for select * from order_details where order_details.order_type = order_type;
    declare continue handler for not found set done = 1;
    open c1;
    repeat 
    fetch c1 into o_id, o_type, bld_grp;
    insert into specific_order values(o_id, o_type, bld_grp);
    until done
    end repeat;
    close c1;
    end $$
    
    delimiter ##
    create trigger update_stock after insert on donor
    for each row
    begin
    update blood set stock = stock + 1 where blood_grp = new.blood_grp;
    end ##
    
    delimiter #
    create trigger after_insert_orders after insert on orders
    for each row
    begin
    if new.blood_grp = blood.blood_grp AND new.quantity > blood.stock then
    signal sqlstate '45000' set message_text = 'Required stock not available';
    else
    update blood set blood.stock = blood.stock - new.quantity;
    end if;
    end #
    
    create table login_credentials(
    username varchar(4),
    password varchar(10));
    
insert into login_credentials values('1000', 'asdf1'), ('2000', 'asdf2'), ('3000', 'asdf3'), ('4000', 'asdf4'); 
insert into donor values (5002, 'asdg', 'Mae', 21, 'B+', 1234567890, 'None');    
drop table blood;
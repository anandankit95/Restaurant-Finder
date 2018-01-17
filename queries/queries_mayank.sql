\c restaurant_finder

Select Name,Phno from restaurant r,restaurant_contact s   
where name='By The Blue' and s.R_id=r.R_id;

Select r.Name,count(Phno) from restaurant r,restaurant_contact s
Where s.R_id=r.R_id
Group by r.name;

Select r.Name,count(Phno) from restaurant r,restaurant_contact s
Where s.R_id=r.R_id
Group by r.name
Having count(*)>2;

Select I_id,I_name from menu
Where I_price>150;

Select max(I_price) from menu;

Select min(I_price) from menu;

Select avg(I_price) from menu;

Select E_name,Name,role from employee,restaurant
Where employee.R_id=restaurant.R_id;

Select Name,count(*) from employee,restaurant
Where role='Chef' and employee.R_id=restaurant.R_id
Group by Name;

Select Name,count(*) from employee,restaurant
Where role='waiter' and employee.R_id=restaurant.R_id
Group by Name;

Select E_name,Name from restaurant,employee
where role='Manager' and restaurant.R_id=employee.R_id;

Select E_name from employee
where date_of_join>'01-02-2016';

Select Cname,Total_without_tax,Total_with_tax,Time_stamp  from customer,bill
where bill.c_id=customer.c_id;

SElect Cname,Total_with_tax-Total_without_tax as Tax 
FRom Bill,customer
where bill.c_id=customer.c_id;

SElect Cname,Total_with_tax from Bill,customer
where bill.c_id=customer.c_id and total_with_tax>600;


Select I_name,I_price,B_id,menu.I_id from customer,bill,menu,orders
where bill.o_id=orders.o_id and orders.i_id=menu.i_id and bill.c_id=customer.c_id;

SElect menu.I_id,I_name,Qty from Orders,menu
where Qty>2 and menu.i_id=orders.i_id;

SElect Name,Title from restaurant,review
where rating>3.5 and restaurant.r_id=review.r_id;

SElect count(*),Name from restaurant,review
Where restaurant.r_id=review.r_id and rating>3.5
Group by Name;

Select Name,min(rating) from review,restaurant
where restaurant.r_id=review.r_id
Group by Name;

Select Ddate,Dtime,Dprice,cName,Name from delivery,customer,restaurant
where delivery.C_id=customer.c_id and delivery.R_id=restaurant.r_id;

Select Ddate,Dtime,Dprice,cName,Name from delivery,customer,restaurant
where delivery.C_id=customer.c_id and delivery.R_id=restaurant.r_id and dprice>1000;

Select Cname,Count(*) from delivery,customer
where dprice>1000 and delivery.c_id=customer.c_id
group by Cname;

Select count(*) from delivery
where ddate>'02-15-2017';

SElect E_name,Cname from employee,customer
where customer.e_id=employee.e_id;

SElect E_name,count(Cname) from employee,customer
where customer.e_id=employee.e_id
group by E_name;







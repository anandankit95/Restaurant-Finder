/*Select Address of Restaurant 'By the Blue' */
Select Name,Phno from restaurant r,restaurant_contact s   
where name='By The Blue' and s.R_id=r.R_id;

/* Select Name and Total Phone number Of all Restaurants  */
Select r.Name,count(Phno) from restaurant r,restaurant_contact s
Where s.R_id=r.R_id
Group by r.name;

/* Select all Restaurants having at least 2 Phone numbers */
Select r.Name,count(Phno) from restaurant r,restaurant_contact s
Where s.R_id=r.R_id
Group by r.name
Having count(*)>2;

/*  Select item having price more than 150 INR      */
Select I_id,I_name from menu
Where I_price>150;

/* Select max , min and Avg price from the menu*/
Select max(I_price) from menu;

Select min(I_price) from menu;

Select avg(I_price) from menu;

/*Select employee Details Working for their restaurant */
Select E_name,Name,role from employee,restaurant
Where employee.R_id=restaurant.R_id;


/* Select Chef's From  all restaurants*/
Select Name,count(*) from employee,restaurant
Where role='Chef' and employee.R_id=restaurant.R_id
Group by Name;

/* Select Waiter's From  all restaurants*/
Select Name,count(*) from employee,restaurant
Where role='waiter' and employee.R_id=restaurant.R_id
Group by Name;

/* Select Managers From  all restaurants*/
Select E_name,Name from restaurant,employee
where role='Manager' and restaurant.R_id=employee.R_id;


/* Select employee Who joined after 2 jan- 2016 */
Select E_name from employee
where date_of_join>'01-02-2016';

/* Select the Billing details of the customer */

Select Cname,Total_without_tax,Total_with_tax,Time_stamp  from customer,bill
where bill.c_id=customer.c_id;


SElect Cname,Total_with_tax-Total_without_tax as Tax 
FRom Bill,customer
where bill.c_id=customer.c_id;

SElect Cname,Total_with_tax from Bill,customer
where bill.c_id=customer.c_id and total_with_tax>600;


/*Select Bill and order details of Items ordered by customer */
Select I_name,I_price,B_id,menu.I_id from customer,bill,menu,orders
where bill.o_id=orders.o_id and orders.i_id=menu.i_id and bill.c_id=customer.c_id;


/* Select orders having quantity at least 2 */
SElect menu.I_id,I_name,Qty from Orders,menu
where Qty>2 and menu.i_id=orders.i_id;

/* Select the restanurant details having rating > 3.5 */
SElect Name,Title from restaurant,review
where rating>3.5 and restaurant.r_id=review.r_id;

/*Select No. of restaurants with details with rating > 3.5 */
SElect count(*),Name from restaurant,review
Where restaurant.r_id=review.r_id and rating>3.5
Group by Name;

/* Select Minimum rating for each restaurant */
Select Name,min(rating) from review,restaurant
where restaurant.r_id=review.r_id
Group by Name;

/* Show the delivery details and Customer details for each order by the customer */
Select Ddate,Dtime,Dprice,cName,Name from delivery,customer,restaurant
where delivery.C_id=customer.c_id and delivery.R_id=restaurant.r_id;

/* Show the delivery details and Customer details for each order by the customer  having price at least 100*/
Select Ddate,Dtime,Dprice,cName,Name from delivery,customer,restaurant
where delivery.C_id=customer.c_id and delivery.R_id=restaurant.r_id and dprice>1000;

/*Select Names of all customers who have taken delivery having price >1000  */
Select Cname,Count(*) from delivery,customer
where dprice>1000 and delivery.c_id=customer.c_id
group by Cname;

/*  Show all deliveries on the date ='02-05-2017' */
Select count(*) from delivery
where ddate>'02-15-2017';

/* Select Emplpyee and Asociated customer name */

SElect E_name,Cname from employee,customer
where customer.e_id=employee.e_id;

/* Count  All customers served by the same employee */
SElect E_name,count(Cname) from employee,customer
where customer.e_id=employee.e_id
group by E_name;







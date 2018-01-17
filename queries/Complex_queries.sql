

/*find all restaurants having typs as 'Casual Dining' and opening and closing time between '8:00 am' and '11:59 pm' and cusine as 'North Indian,European,Mediterranean' situated in same city as in city of Customer havind ID ='C89' */

select restaurant.R_id,restaurant.Name from restaurant,restaurant_address  where restaurant.type='Casual Dining' and restaurant.opening_time>='08:00:00' and restaurant.closing_time<='23:59:00' and restaurant.R_id=restaurant_address.R_id and restaurant_address.city in (select city from customer where C_id='C89');


/*select all restaurant which are in the same city as of customer's city   ( restaurant city == customer city) */
select r_id from (restaurant_final_address inner join customer on restaurant_final_address.city=customer_address.city);



/*list all employees who have catered order having quantity>5 --working */
select E_Name from employee where E_id in(select distinct E_id from orders where O_ID in(select O_id from customer_order where C_id='C125' and  O_id in (select O_ID from orders where Qty>5)));

/*select restaurants in Karnataka that are open between noon and 4pm and have atleast 3 waiters working for them  */
select * from restaurant,restaurant_address where state='Karnataka' and Opening_time>='08:00:00' and Closing_time<='23:00:00' and restaurant.R_id in(select R_id from employee group by R_id having count(*)>3);


/*select all customer who has taken delivery and also dined in the same restaurant  */
select c_id,cname,phno,street,city,state,zip from customer where customer.c_id in (select delivery.c_id  from (customer_order inner join delivery on customer_order.c_id=delivery.c_id ));

/*select all restaurants in bengaluru having rating>3.8 and having more than 6 employees   */
select * from restaurant where R_id in(select * from restaurant_address where City='Bangalore') and R_id in(select R_id from employee group by R_id having count(*)>6) and R_id in(select R_id from review where Rating>3.8);

/*select all restaurant having rating >3.8    */
select * from restaurant where R_id in(select R_id from review where Rating>3.8);

# Electoral-Voting-Page

## AIM:
  The aim of this project was to create a fully front-end and back-end structure for the Electoral Elections. The front-end was done mostly with HTML and CSS,
  while also utilising the Bootstrap framework. The back-end was done using php to retrieve all the necessary information from our database, but also to handle the votes and register them in the database.

## Database Design:
  First we created the following diagrams: 
  1) Entity-relationship
![Εικόνα1](https://github.com/MichalisTsak/Electoral-Voting-Page/assets/104669614/994c399d-930e-46bd-b180-7fd3435764a5)

  2) Referential integrity
     ![Εικόνα2](https://github.com/MichalisTsak/Electoral-Voting-Page/assets/104669614/fc8a0226-bfd5-42d9-8252-c9a762f6851b)

## Database creation:
  The database was created in a mysql server which we got access through PuTTY. The database was created using mysql. During the semester we also got familiar with views, triggers, transactions, stored procedures and functions but we didn't implement any instances of these due to the structure of the code.

## Features:
1) The web app was created as an extension of the goverment page/database from which we should retrieve data about the users. Because unfortunately we couldn't get access to the goverment page we created a table for the voters with username and password, that is why there is no add user feature.
2) The login page checks for the right credentials. If the input is wrong the user is notified with a message in top of his screen.
3) The voting page checks for the right amount of "crosses" the user puts so he cannot surpass the number determined by the electoral province. We used the limits of Greek electoral provinces. If they are surpassed the user is nothified again with a message.
4) When the user votes he is redirected to the thank you page where... he is thanked, and from which he cannot go back(we cleared the cache) because that could possible allow him to re-vote.
5) Finally the result.php is a file that will calculate the election results and the abstentio ration and must run only when the elections have ended.

Contributors: [George Tokatlidis](https://github.com/george-toka)

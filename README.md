1. Create database named *morano_finals* 
2. Then create a table named *crud* inside your MySQL database using the following code.

```sql
CREATE TABLE `crud` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
)

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `users` (`username`, `password`) VALUES ('jethro', 'password123');

```
3. After pulling these files. Create a folder named *morano_finals* inside *htdocs* folder in *xampp* directory.
4. Finally, copy the *morano_finals* folder inside *htdocs* folder.
5. Now, visit [localhost/morano_finals](http://localhost/morano_finals) in your browser and you should see the application.
6. Login using username "jethro" then password "password123"

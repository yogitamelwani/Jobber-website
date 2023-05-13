-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: jobber
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(15) NOT NULL,
  `ph_code` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `image` varchar(50) NOT NULL,
  `card_no` varchar(50) NOT NULL,
  `card_date` varchar(10) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (2,'411014','','','','','','','','','','','2022-03-10 12:56:50'),(3,'Yogita','Melwani','yogimel2001@gmail.com','123','Pune','411014','91','7620298477','TYBBA(CA)_11901.jpg','','','2022-03-10 13:05:22');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price_start` varchar(5) NOT NULL,
  `price_end` varchar(5) NOT NULL,
  `short_desc` varchar(250) NOT NULL,
  `name_desc` varchar(50) NOT NULL,
  `long_desc` varchar(2000) NOT NULL,
  `img1` varchar(50) NOT NULL,
  `img2` varchar(50) NOT NULL,
  `img3` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Personal Assistant','200','600','Organized and efficient Taskers can be your extra pair of hands, handling any task.','Hire a Personal Assistant','If you could wave a magic wand and get a little extra help to make your job run more smoothly, what would you wish for? <br><br>Whether you’re looking for on-going help or a one-time assist, Taskers have you covered.   Personal assistant Taskers can help with a wide range of tasks! <br><br>Popular personal assistant tasks include data entry, office assistance, creating labels and mailing packages, distributing flyers, sorting piles, organizing files, scanning, planning trips, planning a move, picking up dry cleaning, and even sewing. The possibilities are endless! <br><br>You can hire a personal assistant Tasker once, occasionally, or ongoing–a popular solution for small business support. ','assistant1.jpg','assistant4.jpg','assistant3.jpg'),(2,'House Cleaning Services','500','1000','Everyone deserves to come home to a clean home. Taskers can make that happen with house cleaning services!','House Cleaning','Have you ever noticed the difference in how you feel when your house is clean and when it isn’t? The fact is, your environment can have a big impact on your mood, energy, clarity, and productivity. Keeping a clean home often helps you keep a clear mind, but don’t feel like you have to take on every chore yourself! TaskRabbit can connect you to house cleaners near you. <br><br> <b>Whole house cleaning services.</b><br><br>  From scrubbing your floors to wiping your counters, or even just changing your bed sheets –– Taskers can do it all. <br><br>  <b>No supplies? No problem.</b><br><br>  If you have cleaning supplies you’d like your Tasker to use, great! If not, Taskers can bring their own cleaning supplies. If you have any needs or preferences as to what sorts of cleaning products are used to clean your house, just let your Taskers know.  <br><br> Schedule house cleanings on a schedule that works for you. One-time, monthly, weekly, whatever you need, a Tasker can help.  <br><br><b>Same-day cleaning services available.</b><br><br>  Spills happen, last-minute cleanings come up--whenever you need a hand, Taskers are always around to help you with any and all house cleaning','cleaning1.jpeg','cleaning2.jpg','cleaning3.jpg'),(3,'Wait in line','100','400','Hire a Tasker to wait in line for restaurants, special events, and more.','Wait in Line','Waiting in line. It’s the worst. Sometimes you may opt out of an experience altogether to avoid one. We don’t blame you –– but we have the solution. Simply hire a Tasker to be your personal line sitter. Here’s how it works. <br><br>  Browse and book a trusted, experienced Tasker  <br><br>Explain your task: give the who, what, where, when, why and how and just like that, consider yourself cutting in line <br><br> Pay seamlessly through the app –– no invoices, no cash exchanged, no headaches.','line1.jpg','line2.jpg','line3.jpg'),(4,'Car Washing','500','1000','Hire a Tasker to get your car looking like new!','Car Washing','During the week and on the weekends, your car is your partner for doing it all. From commuting to road trips, errands and adventures, your car is bound to get dirty along the way. The kind of interior and exterior cleaning your car needs can be a big sweaty job. Treat yourself and your car and book a Tasker for a car cleaning task! <br><br> We’ll come to you and have your car squeaky clean in no time! Your very own mobile car wash service. Taskers will bring the sponges, soap and buckets to take care of all the detailing your car deserves. Get back on the road in your newly sparkly car, and leave the dirt in the dust.','car1.jpg','car2.jpg','car3.jpg'),(5,'Home Organization','300','1000','Taskers can help you feel de-cluttered and maximize your space. They\'ll help you with storage solutions and organization systems throughout your home or office.','Home Organizer','Hire a home organizer as a step toward making your space work best for you! Popular home organization services on TaskRabbit include help moving into a new place or getting set up after a remodel, identifying storage solutions such as bins or cabinets, finding storage space within your home, boxing up returns, and more. If you choose, Home Organizing services can tailor to specific rooms, such as your bedroom, bathroom, kitchen, home office, kids’ rooms, garage, and closets. You can also ask a Tasker to focus on organizing specific storage areas, like kitchen cabinets, the medicine cabinet, etc., or for digital organization help such as scanning documents or photos, clearing out email boxes, and more.','homeorg1.jpg','homeorg2.jpg','homeorg3.jpg'),(6,'Data Entry','400','800','Is your business an administrative nightmare? A dedicated data entry clerk is a dream come true.','Data Entry Clerk','Is your office full of desks cluttered with paperwork, files, and records? Most successful businesses are awesome at what they do, but simple organization often gets lost in the shuffle. <br><br> If your business needs a little administrative cleanup, why not hire a data entry clerk? Data entry clerk services can help with research, data mining, organizing databases, redaction, and much more. <br><br> Whether you need help getting your office organized and going paperless, data entry clerk services are the right move. Hire a reliable, trusted, and experienced data entry Tasker to take care of it for you!','data1.jpg','data2.jpg','data3.jpg'),(7,'Grocery Delivery','50','500','Give a local Tasker your shopping list and they\'ll stock your pantry with the groceries you need for the week. Same day delivery available.','Grocery Shopping & Delivery Service','Ever wish your groceries could magically appear at your doorstep? It’s possible. <br>Grocery delivery service –– it’s a real thing. No need to fight the grocery crowds, wrangle the kids, or forget something on your list. Simply select a Tasker, send them your list and they\'ll go up and down the aisles for you. They\'ll then delivery your groceries straight to your door. <br><br> <b>COVID-19 Update:</b> In order to protect your health and safety, users are required to maintain social distancing during the performance of all tasks. Contactless tasks can be requested in the booking details or when chatting with your Tasker. Please be sure to comply with all applicable public health authority regulations and guidelines when booking a task.','grocery1.jpg','grocery2.jpg','grocery3.jpg'),(8,'Lawn Maintenance','200','700','The grass is always greener when cared for by a local Tasker. Find lawn maintenance services near you.','Lawn Maintenance Services','Timely and regular yard maintenance services make the difference between dry, crunchy, grass and a lush, green lawn. Maintaining the perfect lawn is all about balancing watering, cutting, and fertilizing your lawn.  <br><br> A Tasker can help you with every lawn care service from aerating and fertilizing to watering, weeding, and lawn mowing. <br><br>Since lawn maintenance requires so much frequent care, it’s usually best to hire someone local, like a Tasker, to take care of your lawn. That way someone is always around to come by to water, cut, fertilize, aerate and cut as needed. Find a trustworthy Tasker you can count on today and for year-round lawn care so that your grass is always greener! ','lawn1.jpg','lawn2.jpg','lawn3.jpg');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tasker`
--

DROP TABLE IF EXISTS `tasker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tasker` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `ph_code` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(40) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `password` varchar(225) NOT NULL,
  `image` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `about` varchar(500) NOT NULL,
  `experience` varchar(1000) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `w_days` varchar(50) NOT NULL,
  `w_hours` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasker`
--

LOCK TABLES `tasker` WRITE;
/*!40000 ALTER TABLE `tasker` DISABLE KEYS */;
INSERT INTO `tasker` VALUES (2,'Yogita','Melwani','91','7620298477','ym@gmail.com','Pune','411014','123','TYBBA(CA)_11901.jpg','2022-04-03 12:50:37','Because I take pride in the work I do','I have mounted a multitude of flat screen tv up to 85 inch.','Personal Assistant,Wait in line,Home Organization','MON,TUE,THU','11AM,3PM,6PM');
/*!40000 ALTER TABLE `tasker` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tasks` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date` varchar(30) NOT NULL,
  `service` int(10) NOT NULL,
  `customer` int(10) NOT NULL,
  `tasker` int(10) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `place` varchar(50) NOT NULL,
  `time` varchar(10) NOT NULL,
  `hrs` varchar(100) NOT NULL,
  `vehicle` varchar(100) NOT NULL,
  `details` varchar(5000) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`),
  KEY `customer` (`customer`),
  KEY `service` (`service`),
  KEY `tasker` (`tasker`),
  CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`customer`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `tasks_ibfk_2` FOREIGN KEY (`service`) REFERENCES `services` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `tasks_ibfk_3` FOREIGN KEY (`tasker`) REFERENCES `tasker` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks`
--

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
INSERT INTO `tasks` VALUES (10,'14/04/2022',1,3,2,'200','Lunkad Gardens, Pune, 411014','3PM','Small - Est. 1hr','Vehicle not needed for the task','testing','accepted'),(11,'30/04/2022',1,3,2,'200','Lunkad Gardens, Pune, 411014','3PM','Small - Est. 1hr','Vehicle not needed for the task','test','pending'),(12,'19/05/2022',5,3,2,'300','Bramha Suncity, Wadgaonsheri, Pune, 411014','6PM','Large - Est. 3hrs','Task requires a truck','Need help with organizing my room','pending'),(13,'1/05/2022',4,3,2,'500','Bramha Suncity, Wadgaonsheri, Pune, 411014','3PM','Small - Est. 1hr','Vehicle not needed for the task','need help with washing my car','pending'),(15,'21/04/2022',7,3,2,'50','Bramha Suncity, Wadgaonsheri, Pune, 411014','3PM','Small - Est. 1hr','Vehicle not needed for the task','test','accepted');
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-09 23:37:08

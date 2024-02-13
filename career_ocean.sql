-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 31, 2020 at 03:19 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `career_ocean`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `image`, `role`) VALUES
(32, 'Career Ocean', 'careerocean@gmail.com', '12345', '16.jpg', 1),
(33, 'Ekta vaghani', 'ektadvaghani@gmail.com', '123456', '2.jpg', 2),
(34, 'Arpita akbari', 'arpitaakbari2912@gmail.com', '2912', '9.jpg', 2),
(42, 'foram', 'foramtrada231@gmail.com', '12345', '23.jpg', 2),
(43, 'miren', 'miren1103@gmail.com', '12345', '17.jpg', 2),
(44, 'Janvi patel', 'mirenvataliya0113@gmail.com', '12345', '6.jpg', 2),
(45, 'Ekta Vaghani', 'ektavaghani@gmail.com', '12345', '151.jpg', 2),
(46, 'admin', 'admin@gmail.com', 'rk@123', '3d_wallpaper.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `icon` text NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `description`, `icon`) VALUES
(1, 'Information Technology', ' it programming', 'fa fa-desktop'),
(2, 'Banking', ' Banking Employee', 'fa fa-university'),
(3, 'Accounting', '  accountant', 'fa fa-money'),
(4, 'Sales & marketing', ' salling and marketing', 'fa fa-bar-chart'),
(5, 'Digital & creative', ' digital creativety', 'fa fa-tachometer'),
(6, 'Management', ' manage company', 'fa fa-suitcase'),
(7, 'legal jobs', 'lawyer', 'fa fa-gavel'),
(8, 'retail', 'selling', 'fa fa-tags'),
(10, 'Demo', 'This is test.....!', '');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `city_status` varchar(255) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `country_id`, `state_id`, `city_name`, `city_status`) VALUES
(10, 16, 10, 'Surat', '0'),
(11, 16, 10, 'Ahamdabad', '0'),
(12, 16, 10, 'Gandhinagar', '0'),
(13, 16, 10, 'Rajkot', '0'),
(14, 16, 12, 'Mumbai', '0'),
(15, 16, 12, 'Pune', '0'),
(16, 16, 19, 'Panaji', '0'),
(17, 16, 14, 'Amritsar', '0'),
(18, 17, 20, 'Dawson', '0'),
(19, 17, 20, 'Faro', '1'),
(20, 18, 25, 'Montgomery', '0'),
(21, 18, 26, 'Juneau', '0'),
(22, 18, 27, 'Sacramento', '0'),
(23, 18, 28, 'Atlanta', '0'),
(24, 16, 10, 'Vadodara', '0'),
(25, 16, 10, 'Jamnagar', '0'),
(26, 16, 10, 'Bharuch', '0'),
(27, 16, 10, 'Kachchh', '0'),
(28, 16, 10, 'Anand', '0'),
(29, 16, 12, 'Ahmdnagar', '0'),
(30, 16, 12, 'Akola', '0'),
(31, 16, 12, 'Hingoli', '0'),
(32, 16, 10, 'demo', '0');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `contact_person` bigint(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `company_details` text NOT NULL,
  `company_status` varchar(255) NOT NULL,
  `payment_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `contact`, `contact_person`, `image`, `email`, `password`, `country_id`, `state_id`, `city_id`, `location_id`, `address`, `company_details`, `company_status`, `payment_status`) VALUES
(11, 'creative', 2147483647, 9632587140, '02.jpg', 'creative@gmail.com', '123456', 16, 10, 10, 9, 'Vijay Estate, Near Bhhikshugrah, Odhav , Ahmedadad-382413', 'Creative is a Surat based IT Company providing Soft...', '0', 1),
(12, 'HAV byte Web Development', 7405707030, 7405707030, 'download_(3)_(1)5.jpg', 'info@havbyte.com', '987654', 16, 10, 10, 9, '202 Skylark Complex,Behind Kapodra Police station,Nana Varachha,Surat-395006', 'HavByte is a Surat based IT Company providing Software, Web and Mobile base Solution to the various Business problems. We help you create online presence of your business.\r\n\r\nWe started this company in 2017 with a little bit of money, Big Hearts and lots of experiences. After that we have built Software, Websites and Mobile apps for clients in Surat, India and across the world and earned a reputation in providing best IT Solution for various businesses at affordable prices.', '0', 0),
(13, 'JKSOL', 9523487520, 9523487520, 'download_(4).png', 'jksolinfotech@gmail.com', '123456', 16, 10, 10, 14, 'A-202, Astha Square\r\nNear Kapodra-Utran Tapi bridge,\r\nUtraan, Surat\r\nGujarat, INDIA', 'JKSOL established in 2014. JKSOL is a pioneer in Information Technology with a dedicated team with a vision and commitment to meet customer expectations beyond limit. JKSOL has grown with its customers on an emotional chord to make a lifetime partnership with them.\r\n\r\nJKSOL focuses on providing IT Services to client organizations. The endeavor at JKSOL is to continuously upgrade and expand the range of services. Our expertise in understanding technical requirements makes us exceptional, as the best Engineers in the industry back us.', '0', 0),
(14, 'Phoenix Games', 9033476548, 9033476548, 'download_(5).png', 'hr@phoenixgames.in', '123456', 16, 10, 10, 23, '525 - Amby Valley arcade, Opp. Santosa Heights, Railway Over Bridge, Utran Surat, Gujarat 394105', 'Based in Surat, Phoenix Games, a dream of two ambitious IT personnel, started in 2016 with a dream to make it big. For all these years, Team Phoenix Games has worked hard and smart to force the businesses all over the world to take a note of us. It was year 2016 when company was registered as LLP (Limited Liability Partnership) and since then, company is growing high by leaps and bounds. The partners of Phoenix Games has strong IT background owning master degree in IT faculty; which creates the base of strong fundamentals required to provide world class Apps and Games services. Our team has more than 5 years of experience working in different domains like Games, Apps, Marketing, Designing, Development. Our expertise speaks strong in customized software solutions in Apps and Games in Cross Platform.', '0', 0),
(15, 'Rising Wings', 7096555888, 7096555888, 'rlogo.jpg', 'info@risingwings.in', '1234567', 16, 10, 10, 22, '113, White Wings Zenon, Opp. Unique Hospital, near Kiran Motors, Adajan, Surat-395001, Guj, IN.', 'Rising Wings Pvt. Ltd. is a leading Website Development company in Surat, India. We are providing Website Design & Development Services, ERP Solution,HRM Solution, PMS Solution, CRM Solution,Desktop Application Development, Web Portal Development, E commerce Website Development and Mobile Application Development.\r\n\r\nAt our Surat office in India, we are having a team of passionate website designer and developers who have innovative skills and great understanding of how to make world class websites. They are always up to date of the latest digital trends and keep understanding of basic web development concepts which produce a successful website.', '0', 0),
(16, 'Silicon Infovision', 9898510127, 9825759759, 'logo.jpg', 'siliconinfovision@gmail.com', '123478', 16, 10, 10, 21, '812-816, BELGUIM TOWER,\r\nDELHI GATE,SURAT-395003.', 'Silicon Infovision Pvt Ltd is a name for Commitment – Prompt Services – Technology. Established in the year 2005, Silicon Infovision has created a niche for the self, in providing high class software solutions. The motto of our company is simple and that is to provide optimum quality software solutions packed with best of the services. We provide a vast array of top class software’s to different Industries. The large base of satisfied clients, is the biggest evidence of our commitment towards our work and responsibilities. Apart from our specialized software’s for the Diamond & Jewellery Industry, we also develope and design software’s for other Industries. Our software’s have made a standard place, among various Industries.', '0', 0),
(17, 'Narola Infotech', 9587456124, 9587456124, 'logo_(1).jpg', 'info@narola.email', '789456', 16, 10, 10, 22, '104, Regent Square, Above D-Mart,\r\nNear Karan Park Society,\r\nAdajan, Surat 395009 – INDIA', 'Narola is not just another web development company, but it is an institution for global businesses to get the technical solution of complex business problems and needs. In Fourteen years of our sound existence, we have remarkably touched every segment of the web & mobile development industry.\r\n\r\nThus, we have been the most sought-after web development company offering notable services, like the website, E-commerce stores, Web applications, Mobile applications.\r\n\r\nPassion, latest trends, and innovation drive our team of professional web designers & developers. Custom software development, web application development, CMS development, Static, dynamic and blogging website development are some of the areas of expertise. There are many adjectives, like reliable, appealing, classy, easy-to-use, powerful, speedy, customized, search engine friendly, premium and many more that describe the repute of web designs, websites, and web applications we craft.', '0', 0),
(18, 'OOZEE Technology', 9825091196, 8487820079, 'logo_(2).jpg', 'info@oozeetech.com', '741258', 16, 10, 10, 22, 'S - 7,8,9 Meghdhanush Complex, opposite Suzuki Showroom, Adajan Patiya, Surat, Gujarat 395009', 'Established in the year 2013 as an IT company with an intention to concentrate Software, Mobile app and Website Development. In years of delivering software development, outsourcing and consulting services, we have honed how we engage, operate, deliver and mutually grow with our clients.\r\n\r\nOOZEE Technology is Software development company that accelerates business growth. We believe in Customized Software and our client\'s need. And we know that you need a partner that doesn\'t just plan, but one who can get it done. With OOZEE Technologies one thing to get for sure is purity in relationship with the best of cost effective profit.\r\n\r\nWe are Growing and expanding in every second we what we live in current market, we believe in building STRONG RELATIONSHIP with all our current and future client’s as we believe that growth and profit of our client’s would be eventually ours.', '0', 0),
(19, 'Coruscate Solution', 2613332299, 2613332299, 'logo_(5).jpg', 'info@coruscatesolution.com', '963258', 16, 10, 10, 21, '9th Floor Infinity Tower, Beside Ayurvedic College, Station Road, Surat – 395003, Gujarat.', 'Coruscate takes pride in being a technology-driven solution provider with a customer-centric, journey-first approach.\r\nWe don’t deliver solutions; we build partnerships towards excellence. Our strategy is built on blending the art\r\nof technology with industry knowledge to brew the excellence of custom and experiential solutions that\r\nexceed customer experience.\r\n\r\nWe have more than words for you to believe in us, and get in touch with us. Our work, it says more than\r\nthese words will convey.\r\n\r\nBut, we want to tell you our story- who we are and what we believe in. This will help you\r\ntrust us and our work. We are a young team of 80+ technology enthusiasts who look\r\nforward to crafting inimitable solutions for your unique business needs. Our experienced team\r\nis a mix of designers, developers, business enthusiasts and UI/UX experts.', '0', 0),
(20, 'Omy Infotech', 9523487520, 7405707030, 'omyinfotech.jpg', 'info@omyinfotech.com', '789654', 16, 10, 10, 23, 'Udhna, Surat - 394210', 'Omy Infotech established in 2011, is one of the India\'s quickly rising website development and web designing company, which provides web development, web design, search engine optimization and mobile application. If you want your website or mobile app to be profitable, successful and register growth, you are at the right place. We have been working on websites and mobile apps for some years now. And we know what it takes for a website or a mobile app to be successful.\r\n\r\nDesigning a website or creating mobile app is no big deal. It is the creative part that is hard – to make a website that is so attractive that it instantly turns a visitor into a customer. Or making a mobile app that is so intuitive that a user is hooked to it right away.\r\n\r\nIt is on this creative aspect that Omy Infotech lays a specific stress. We take all work that we do here as a sort of art – everything we do for a client is personal. And like every personal art project, we put every last bit of our effort into making a client’s project shine and be successful. That is why every project we undertake is overwhelmingly successful.\r\n\r\nIt is precisely for this reason that to date, we have created dozens of highly successful and profitable websites. These range from ecommerce sites to author’s blogs, recruiting portals, professional career consultancy sites, sites for small businesses such as cafes and local restaurants as well as sites for corporate giants. And most of our customers have become long-term clients who like our work and keep coming back with more work for us.\r\n\r\nAt Omy Infotech, our goal is to think out of the box and turn every simple thing into a creative light-bulb that will make an average viewer pause and be mesmerized. We bring together user-intuitive functionality and creativity in all the work we do. And if you are looking for guaranteed profitability, visibility, traffic and site success, we won’t let you down.', '0', 0),
(21, 'RedSun Infotech', 9601522508, 9601522508, 'redsun_logo.jpg', 'redsuninfotech@gmail.com', '456127', 16, 10, 10, 19, '501, Sundaram Plus, Timaliyawad Road,\r\nAthugar St, Nanpura, Surat 395001 INDIA', 'With clients all over the world and expertise in everything digital,\r\nwe are ambitious, growing fast and committed to providing the best digital services. We have an impeccable track record\r\nfor helping our customers gain popularity in the online world and beyond.\r\n\r\nWhen you work with RedSun Infotech, our Application Management solutions enables you to be more adaptive through robust architectures, process transformation and innovation.To provide products and solutions that meet international quality standards backed by full life cycle support bringing substantial benefit to customers through lower cost .', '0', 0),
(22, 'Sky Technovation', 9913675978, 9913675978, 'logo-102.jpg', 'skytechnovation@gmail.com', '852258', 16, 10, 10, 33, '613, Luxuria business hub, Near VR Mall, Surat, India.', 'Sky Technovation is a Surat-based Software and Web application Development, E-security, Technology, Business Product Development, Systems Design Company.\r\n\r\nThe focal point of our business model is to have long-term strategic relations with our customers by providing an effective combination of quality, innovations, efficiency, cost benefits, and faster time to market.\r\n\r\nWe are Global IT solutions provider and IT Outsourcing Company. The firm is Fast-growing, highly respected and strives to be the preferred, trusted and successful long-term business partner.\r\n\r\nSky Technovation provides Solutions and Services based on proven technologies, software development methodologies as well as ITIL framework based client services with 24X7. Innovative ideas play a major role at Sky Technovation. We continually strive to better ourselves every time. And because of our continual improvements in our system and with help of great IT infrastructure, we ensure that we never fall short of our clients’ expectations.\r\n\r\nBusiness Analysis, Project Management, Software Development Life Cycle (SDLC) and ITIL framework based client services are the main components of any Sky Technovation. solutions as well as services. We build solutions which are completely salable and robust.\r\n\r\nMost of our customers look at us as a reliable IT partner because we take pride in their success. It is our foresight in identifying problems and providing prompt solutions that helps our customers to trust us.', '0', 0),
(23, 'VS Infotech', 9714254772, 9714254772, 'vs-logo.jpg', 'vsinfotech@gmail.com', '753159', 16, 10, 10, 30, '329,Rajhans Platinum Plaza,\r\nPalanapur gam', 'VS Infotech delivering the Best quality Web and App Development services provider company in Surat,India. high-tech solution center helps to serve custom solution of web and app to our clients worldwide since 2015.we give best and satisfaction solution to web and app development,graphics,multimedia solution,payment gateway integration,digital marketing.\r\n\r\nAt VS Infotech,we are focused on grow clients` sales and audience.we provide prime web and app development services as well as payment gateway integration to our clients globally.\r\n\r\nClient`s Requirements fulfillment are our main priority.VS infotech is always analysis of the web industry and updating its products,services and technical capabilities to meet today`s world.\r\nWe give 100 percent to all our projects.we give our best array of skills set to deliver primimum quality solution that will drive more sales and engage customers to client`s website.\r\n\r\nClient satisfaction is our main goal, so we have work to attain excellence. we believe lifelong relationships with our clients.we closely work with our clients to grasp their desires and propose best answer. we serve our clients returning from diversified sectors and geographical areas.\r\n\r\nOur high skilled Website and App Developer are committed to fulfill the clients demand and clients also hire for on demand custom solution of App and Web services. Our high skilled Web designer & developers are extremely specialized and practiced professionals. we believe stress free working environments.\r\n\r\nA web presence could be a nice branding and selling tool. online payment gateway integration solutions have tremendous opportunities, endless prospects, that save time of citizens and increase in number  of sell finally seller will sell their products globally. it’s a necessary strategy for a business to confirm its merchandise / services and locations are found in search engines.', '0', 0),
(24, 'WeeTech Solution', 9276888885, 2612498888, 'download_(8)_(1).jpg', 'weetechsolution@gmail.com', '753357', 16, 10, 10, 14, 'A-401, Astha Square,\r\nNear Kapodra-Utran Bridge,\r\nUtran, Surat - 394105\r\nGujarat, India.', '\r\nABOUT US\r\nWe Implement Your Innovation\r\nWeeTech Solution Pvt Ltd, well-known place to develop your business in Mobile and Internet market. Here we are developing Android App, iOS App and Websites with unique & innovative ideas.\r\nHaving a strong presence in India and in the global arena too, WeeTech Solution is one of the major players in the IT consulting niche. Our IT consulting team stands unparalleled in experience and this is indeed our biggest strength. We offer full scale IT consulting and services to our clients ensuring that they gain maxim from our expertise, analysis and strategies.\r\n\r\nWe are proud of the fact that our clients count on us for providing them with the support that they need to bring in possible changes and to deal with the uncertainty that the business holds and this adds to that zeal to offer them services that would bring in major transformation in their business model. Our team has worked across more than 20-30 industry sectors and this is what places us in a comfortable position to deliver you measurable support and services.\r\n\r\nWe are here to maximize our clients approach towards IT by providing them with simple, effectual and result driven support and services. From start to finish, we have all the services that you need touching all the platforms, web, mobile, cloud and consulting.\r\n\r\nWeeTech Solution Pvt Ltd is out there with that solitary goal of delivering robust, practicable and scalable solutions and services to our clients at the most competitive pricing respecting even stringiest possible deadlines.', '0', 0),
(25, 'Yew Technologies', 9898000717, 9898000717, 'finallogo42.jpg', 'techsupport@yewtec.com', '951159', 16, 10, 10, 19, '114, Lalbhai Contractor Complex, Nr. R.D Contractor School, Nanpura,Surat - 395001', 'We are company with specialization in the areas of offshore software development, Web Designing, Web Development and SEO. We are leading GST Accounting Software provider in\r\n\r\nWe also specialize in reducing costs, improving productivity, delivering quality software products, reliability, speed and agility, which enable our customers to have sustainable differential advantage over their competition.Over the years, we have leveraged our position in the market and a phenomenal growth rate achieved through IT innovation, dedicated teams and timely implementation of solutions.Our Team utilizes the latest hardware/software technologies to provide our customers with the most efficient and advanced solutions.\r\n\r\nThrough technology driven business process transformation initiatives we have mastered the processes, methodologies, approach, mindset and infrastructure needed to overcome the challenges of operating offshore software development teams to deliver a best support to our clients.\r\nCreativity with quality is very important to us. Yew Technologies is continuously changing as per  web solution industry and improving its products, services and technical capabilities to meet the needs of today’s market. We work on tight dead lines and we take it very seriously. We know how time is important for everyone.\r\n\r\nIn our every development, we apply our intensive creativity and technical skills set to deliver high-quality services that will drive the client’s sales and increase their customer acquisition.', '0', 0),
(26, 'Silver fox Studio', 8200493714, 8200493714, 'logo_(6).jpg', 'info@silverfoxstudio.in', '123789', 16, 10, 10, 16, '307-308, Tulsi Arcade, Mota Varachha', 'Silverfoxstudio is The Best mobile app development company (IT Solution) in Surat. It is providing 100% accurate and on-time services on web application development and Graphics Design.', '0', 0),
(27, 'Trueline Solution', 9913299806, 9913299862, 'logo_(7)1.jpg', 'truelinesolution@gmail.com', '147596', 16, 10, 10, 14, 'A-205, A-206, Shivalik Plaza,\r\nBeside Shivalik Heights, Near VIP\r\nCircle,Utaran, Surat - 394105', 'Trueline Solution is Best and Top IT Company in surat which has skill and expertise to facilitate complex business solutions. We Provide Complete digital solution for your brand. Our overall process includes concept, design, Software development, incorporation, and implementation. We have a squad of experts, who are working on modern technologies.\r\n\r\nBe A Part Of IT Revolution…\r\nOur team of Expert plan and create the most attractive website which help start ups in delivering complete solution because we optimize the operation which allows them to seize opportunities,achieve revenue targets and deliver maximized value, we help building brands online.\r\nTrueline Solution is one of the reckoned Software Development Company in Surat. Rapidly changing business state of affairs and latest technologies being introduced day by day, always raises the requirement for change in development which suits the client requirement and also alter the existing software’s to match the latest technology by not changing the methodologies defined for good software. Our teams have 8 years of experience in the development of Software Applications & Systems.\r\n\r\nWe have a rich experience of delivering the smartest software and web solutions to our clients in the fields of E-commerce, Document Management Solutions, IT infrastructure services, Web Hosting…', '0', 0),
(28, 'Netsol IT Solutions', 2612265535, 2612265535, 'logo_(3)_(1).jpg', 'mail@netsolitsolution.com', '148635', 16, 10, 10, 27, '212, A-block, 5th Floor SNS Interio, Behind CNG Pump,Near Bhatar Char Rasta, Surat - 395017', 'Netsol specializes in delivering comprehensive technology and design solutions to its wide spectrum of clients. With our proactive approach, unflinching commitment, extensive experience and creative mindset, we achieve extraordinary results for our clients, add value to their business and always excel their expectations.\r\n\r\nWe are dedicated towards building simple, effective, affordable and manageable Applications. We strongly believe in supporting your business. We\'ve brought together years of experience in web design and development, our understanding of customer behaviour & culture and leveraged on our highly efficient processes and in house frameworks to provide a cost effective solution to meet your requirements.\r\n\r\nWe have worked with startups, small businesses, large organisations, big internet brands, ecommerce businesses, charitable trusts, real estate agencies, portals, membership organisations. We\'ve helped our customers to create effective branding, embrace latest technologies and achieve top search engine rankings to grow their business.', '0', 0),
(29, 'Lemon Technologies', 2299600640, 2299600640, 'logo_(8)2.jpg', 'lemontechnologies@gmail.com', '754869', 16, 10, 10, 34, 'T- 720, Belgium Tower,\r\nOpp. Linear Bus Stand,\r\nRing Road,\r\nSurat. 395 002\r\nGujarat, INDIA', 'Lemon Technologies is an ISO 9001:2018 certified IT company pioneering in database applications, especially, cutting edge technology solutions for the Gem & Jewellery industry and other manufacturing and service industries.\r\n\r\nLemon Technologies is part of the RSM Astute Consulting Group; the Indian member of RSM International, one of the largest accounting and consulting group worldwide with multi billion dollar revenue and offices in more than 120 countries.\r\n\r\nWe are currently a team of more than 100 people with development centres in Surat and support centres in Navsari, Mumbai, and UAE. Our team consists of highly qualified professionals working on varied and latest technologies.\r\n\r\nWe offer a wide range of solutions across the entire processing chain for the gem & jewellery industry including financial accounting, payroll processing, diamond manufacturing, inventory tracking & decision support, polish assortment & sales system, sales & global inventory, diamond sales on web, polish/rough Diamond tender/auctions, import-export, jewellery e-tailing, overseas office\'s inventory & accounting and many such specialized solutions.\r\n\r\nFor the education sector, we have a complete school management solution and a web-based test solution. We also provide value added specialized technology consulting services such as ERP consulting, testing, database design, information security effectiveness review and software documentation services.\r\n\r\nWe are among the very few Oracle Partner Network (OPN) members of Oracle Corporation in South Gujarat. We are also partner of SAP B1, Tally and Microsoft as well. Our team is proficient in digital technologies apart from the traditional data base or ERP solutions. We have a bouquettee of our own solutions with special emphasis on Manufacturing 4.0.\r\n\r\nOur clients include many DTC sight holder groups such as K. Girdharlal, Sheetal Manufacturing, Jewelex, Ankit Gems, Bhavani Gems, Shairu Gems, Blue Star Diamonds, Arjav Diamonds, HVK International and many other companies such as H.Dipak, Bhanshali & Co, Ketan Brothers, Super Gems, PN Shah, Asian Star, Kiran Gems, Vd Gems, Js diamond, Diaexport, Unity Impex, Choice diamond,Xy diamond,Ratnaraj,vir impex,Diacenter,Dhanera Diamond, Evershine Appliances Pvt. Ltd.,Star Gems, SGCCI, Shreeji shipping, Vaishali Gems,Veer Gems,Shyam Corporations. Jogani export Pvt Ltd, Surat Diamond bourse,Dirgh Diamond,Deep Industries,Sitaram Gems,Dhruvil gems and others.', '0', 0),
(30, 'Tenacious Techies', 9531030399, 731030399, 'logo_(9).jpg', 'tenacioustechies@gmail.com', '546879', 16, 10, 10, 35, '912 B, International Commerce Center, Near Kadiwala School, Majura Gate Surat-395002', 'Our vision is to be one of the most innovative companies around the world. We believe technology, if used for good, can make life better for everyone.\r\nWe want to utilse cutting edge technologies in mobile Application development aimed at making the world a better place.\r\nWe don’t just talk the talk. Our actions speak for themselves. To ensure we’re delivering what’s promised, Tenacious Techies operate with transparency in all aspects of our process. Clear documentation is provided at the outset where both parties agree to the same terms and conditions. We’ll work with you to provide flexible plans for project execution. Some of these include:\r\nAfter working through the brief provided by the client, we will supply a scope of work to be signed off on by both parties. The price attached to the scope is the price you pay. This is a RISK FREE model as it provides you the peace of mind in knowing we’ll get the project completed in time and within the allocated budget.\r\nOur hourly base rate model is based on the number of hours necessary to finish your project. This type of model is suitable when a client doesn’t understand the complete scope of work. Our hourly rate is calculated by the type of work, amount of minimum total hours required and the priority of the project.\r\nWe recommend this for companies looking to hire FULL TIME developers. Rather than someone coming to you, we will dedicate a number of employees to work solely on your projects. This model is a cost-efficient as you pay a FIXED rate. Rather than worrying about investing in training, assets and web development, give us the work and we’ll worry about the rest.', '0', 0),
(31, 'RK infotech', 9874563214, 7898785636, '3d_wallpaper3.jpg', 'avaniaghera123@gmail.com', '123456', 16, 10, 11, 10, 'surat', 'This is testing . This is testing .This is testing .This is testing .This is testing .This is testing .This is testing .This is testing .This is testing .This is testing .This is testing .This is testing .', '0', 0),
(32, 'Mitesh', 7490979938, 0, 'adharcard.jpg', 'miteshbhalala154@gmail.com', '123456', 16, 10, 10, 9, 'dfgdfgdf', 'sdfsfs', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `company_branch`
--

DROP TABLE IF EXISTS `company_branch`;
CREATE TABLE IF NOT EXISTS `company_branch` (
  `branch_id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(255) NOT NULL,
  `company_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_branch`
--

INSERT INTO `company_branch` (`branch_id`, `branch_name`, `company_id`, `country_id`, `state_id`, `city_id`, `location_id`, `address`) VALUES
(8, 'tata', 7, 16, 10, 10, 9, 'varachha'),
(11, 'Amroli', 32, 16, 10, 10, 14, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'foram', 'foramtrada231@gmail.com', 'for job', 'i am very happy with this site.\r\nthank you for this site, now my future will secure with this site.'),
(2, 'kevin', 'kevintrada231@gmail.com', 'for a job', 'this website is very useful to me.\r\ni got a job and i am very happy.\r\n'),
(3, 'foram', 'foramtrada231@gmail.com', 'for a job', 'using this website ,i am selected in interview and i am happy to using this website for my job.'),
(4, 'foram', 'foramtrada231@gmail.com', 'for a job', 'using this website ,i am selected in interview and i am happy to using this website for my job.');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(255) NOT NULL,
  `country_status` varchar(255) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `country_status`) VALUES
(16, 'India', '0'),
(17, 'Canada', '1'),
(18, 'United States of America (USA)', '1'),
(19, 'Sofia', '1'),
(20, 'Brazil', '0'),
(21, 'Australia', '0'),
(22, 'Albania', '0'),
(23, 'Italy', '0'),
(24, 'Sweden', '1'),
(25, 'Spain', '0'),
(26, 'demo', '0');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
CREATE TABLE IF NOT EXISTS `education` (
  `education_id` int(11) NOT NULL AUTO_INCREMENT,
  `education_name` varchar(255) NOT NULL,
  PRIMARY KEY (`education_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`education_id`, `education_name`) VALUES
(1, 'BCA'),
(2, 'BBA'),
(3, 'B-COM'),
(4, 'MCA'),
(8, 'M-COM'),
(9, 'Software Engineering'),
(10, 'BA'),
(11, 'BSC'),
(12, 'CA'),
(13, 'CS'),
(14, 'MBBS'),
(15, 'Bachelor of Dental Surgery'),
(16, 'B.Sc.'),
(17, 'BUMS'),
(18, 'BHMS'),
(19, 'BAMS'),
(20, 'BNYS'),
(21, 'BA + LLB'),
(22, 'B.Com + LLB'),
(23, 'BBM +LLB'),
(24, 'BBA + LLB'),
(25, 'CMA'),
(26, 'BFM'),
(27, 'BMS'),
(28, 'BAF'),
(29, 'ITT'),
(30, 'ITI'),
(31, 'Goal Setting'),
(32, 'BCA - in Science');

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

DROP TABLE IF EXISTS `job_applications`;
CREATE TABLE IF NOT EXISTS `job_applications` (
  `application_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `resume` varchar(200) NOT NULL,
  `applied_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`application_id`),
  KEY `user_id` (`user_id`,`job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`application_id`, `user_id`, `job_id`, `resume`, `applied_date`) VALUES
(1, 1, 13, 'android_booting_sequence_final.docx', '2020-06-16 08:08:02'),
(2, 1, 13, 'android_booting_sequence_final1.docx', '2020-06-16 08:08:02'),
(3, 1, 13, 'android_booting_sequence_final2.docx', '2020-06-16 08:08:02'),
(4, 1, 13, 'android_booting_sequence_final3.docx', '2020-06-16 08:08:02'),
(5, 1, 13, 'android_booting_sequence_final4.docx', '2020-06-16 08:08:02'),
(6, 1, 13, 'android_booting_sequence_final5.docx', '2020-06-16 08:08:02'),
(7, 1, 13, 'android_booting_sequence_final6.docx', '2020-06-16 08:08:02'),
(8, 1, 13, 'android_booting_sequence_final7.docx', '2020-06-16 08:08:02'),
(9, 1, 13, 'android_booting_sequence_final8.docx', '2020-06-16 08:08:02'),
(10, 1, 13, 'android_booting_sequence_final9.docx', '2020-06-16 08:08:02'),
(11, 1, 13, 'android_booting_sequence_final10.docx', '2020-06-16 08:08:02'),
(12, 1, 13, 'android_booting_sequence_final11.docx', '2020-06-16 08:08:02'),
(13, 1, 13, 'android_booting_sequence_final12.docx', '2020-06-16 08:08:02'),
(14, 1, 13, 'android_booting_sequence_final13.docx', '2020-06-16 08:08:02'),
(15, 1, 13, 'android_booting_sequence_final14.docx', '2020-06-16 08:08:02'),
(16, 1, 13, 'android_booting_sequence_final15.docx', '2020-06-16 08:08:02'),
(17, 1, 13, 'android_booting_sequence_final16.docx', '2020-06-16 08:08:02'),
(18, 1, 13, 'android_booting_sequence_final17.docx', '2020-06-16 08:08:02'),
(19, 1, 13, 'RESUME.docx', '2020-06-16 08:08:02'),
(20, 1, 12, 'Android_Booting1.docx', '2020-06-16 08:08:02'),
(21, 1, 12, 'Android_Booting2.docx', '2020-06-16 08:08:02'),
(22, 1, 12, 'Android_Booting3.docx', '2020-06-16 08:08:02'),
(23, 1, 12, 'Android_Booting4.docx', '2020-06-16 08:08:02'),
(24, 1, 12, 'Android_Booting5.docx', '2020-06-16 08:08:02'),
(25, 1, 12, '5pen_pc_tech.docx', '2020-06-16 08:08:02'),
(26, 1, 12, 'Android_Booting6.docx', '2020-06-16 08:08:02'),
(27, 1, 14, 'Android_Booting7.docx', '2020-06-16 08:08:02'),
(28, 1, 12, 'Android_Booting.docx', '2020-06-16 08:08:02'),
(29, 1, 12, 'Android_Booting1.docx', '2020-06-16 08:08:02'),
(30, 1, 12, 'Android_Booting2.docx', '2020-06-16 08:08:02'),
(31, 1, 12, 'Android_Booting3.docx', '2020-06-16 08:08:02'),
(32, 1, 12, 'Android_Booting4.docx', '2020-06-16 08:08:02'),
(33, 1, 12, 'Android_Booting5.docx', '2020-06-16 08:08:02'),
(34, 1, 12, 'Android_Booting8.docx', '2020-06-16 08:08:02'),
(35, 1, 12, 'Android_Booting9.docx', '2020-06-16 08:08:02'),
(36, 1, 12, 'Android_Booting10.docx', '2020-06-16 08:08:02'),
(37, 9, 22, 'Resume1.docx', '2020-06-16 09:36:23');

-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

DROP TABLE IF EXISTS `job_post`;
CREATE TABLE IF NOT EXISTS `job_post` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `location_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `num_vacancy` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `exper_req` varchar(255) NOT NULL,
  `skill_id` int(11) NOT NULL,
  `basic_req` longtext NOT NULL,
  `salary_given` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `education_id` int(11) NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_post`
--

INSERT INTO `job_post` (`job_id`, `company_id`, `job_title`, `image`, `location_id`, `branch_id`, `post_id`, `category_id`, `num_vacancy`, `start_date`, `end_date`, `exper_req`, `skill_id`, `basic_req`, `salary_given`, `status`, `education_id`) VALUES
(12, 7, 'IT Manager', 'images11.jpg', 9, 8, 6, 1, 25, '2020-02-06', '2020-02-24', '1 Year', 1, '<p><font color=\"#3c4043\" face=\"arial, sans-serif\"><span style=\"font-size: 14px;\"><b>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t lo </b></span></font><span style=\"font-weight: bolder; color: rgb(60, 64, 67); font-family: arial, sans-serif; font-size: 14px;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t lo </span><span style=\"font-weight: bolder; color: rgb(60, 64, 67); font-family: arial, sans-serif; font-size: 14px;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t lo</span></p><p><font color=\"#3c4043\" face=\"arial, sans-serif\"><span style=\"font-size: 14px; font-weight: bolder;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected </span><span style=\"font-size: 14px;\"><b>humor</b></span><span style=\"font-size: 14px; font-weight: bolder;\">, or randomised words which don\'t lo</span></font><span style=\"font-weight: bolder; color: rgb(60, 64, 67); font-family: arial, sans-serif; font-size: 14px;\"><br></span></p>', 12000, '0', 1),
(13, 7, 'Web Designer', 'download_(11)1.jpg', 10, 8, 9, 2, 20, '2020-03-21', '2019-12-31', '1 Year', 1, '<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">The Android code as \"open-source under the Apache\r\nLicense\" was released by Google which is why most of the manufacturers\r\ncustomize the code for their products, and this is one of the reasons Android\r\nhas had a considerable growth compared to any of the platforms in history of\r\ncomputers. <o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">\"the Operating System provides a software platform on\r\ntop of which other application programs can run\"<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">The Operating Systems provide an API which ensures that the third-party\r\napplications run and operate on device.<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\"><o:p> </o:p></span></b><b style=\"font-size: 1rem;\"><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">Application:</span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">An application is a set of instructions for the computer to\r\nperform a useful task for the user, and the term applies to the Smartphone apps\r\nas well. <o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">There are many Smartphone applications in the stores today,\r\nwhich can be installed on the system and perform a specified task, e.g. voice\r\nrecorder, audio player, map, document viewer, etc. <o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">Smartphone applications are divided into three categories\r\n(Native, Mobile Web, and Hybrid) <o:p></o:p></span></b></p>', 20000, '0', 1),
(14, 7, 'Software developer', 'download_(3)2.jpg', 10, 8, 7, 7, 20, '2021-01-02', '2021-03-01', '0-6 Months', 1, '<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">The Android code as \"open-source under the Apache\r\nLicense\" was released by Google which is why most of the manufacturers\r\ncustomize the code for their products, and this is one of the reasons Android\r\nhas had a considerable growth compared to any of the platforms in history of\r\ncomputers. <o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">\"the Operating System provides a software platform on\r\ntop of which other application programs can run\"<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">The Operating Systems provide an API which ensures that the third-party\r\napplications run and operate on device.<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\"><o:p> </o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">Application:<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">An application is a set of instructions for the computer to\r\nperform a useful task for the user, and the term applies to the Smartphone apps\r\nas well. <o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">There are many Smartphone applications in the stores today,\r\nwhich can be installed on the system and perform a specified task, e.g. voice\r\nrecorder, audio player, map, document viewer, etc. <o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">Smartphone applications are divided into three categories\r\n(Native, Mobile Web, and Hybrid) <o:p></o:p></span></b></p>', 12000, '0', 1),
(17, 7, 'Bank Manager', 'images_(7).jpg', 10, 8, 26, 2, 20, '2020-12-31', '2020-12-31', '0-6 Months', 2, '<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">The Android code as \"open-source under the Apache\r\nLicense\" was released by Google which is why most of the manufacturers\r\ncustomize the code for their products, and this is one of the reasons Android\r\nhas had a considerable growth compared to any of the platforms in history of\r\ncomputers. <o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">\"the Operating System provides a software platform on\r\ntop of which other application programs can run\"<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">The Operating Systems provide an API which ensures that the third-party\r\napplications run and operate on device.<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\"><o:p>&nbsp;</o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">Application:<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">An application is a set of instructions for the computer to\r\nperform a useful task for the user, and the term applies to the Smartphone apps\r\nas well. <o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">There are many Smartphone applications in the stores today,\r\nwhich can be installed on the system and perform a specified task, e.g. voice\r\nrecorder, audio player, map, document viewer, etc. <o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">Smartphone applications are divided into three categories\r\n(Native, Mobile Web, and Hybrid)&nbsp;<o:p></o:p></span></b></p>', 12000, '0', 1),
(18, 7, 'Hotel Manager', 'images_(3)11.jpg', 11, 8, 30, 6, 41, '2020-03-01', '2020-03-28', '1 Year', 1, '<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">The Android code as \"open-source under the Apache\r\nLicense\" was released by Google which is why most of the manufacturers\r\ncustomize the code for their products, and this is one of the reasons Android\r\nhas had a considerable growth compared to any of the platforms in history of\r\ncomputers. <o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">\"the Operating System provides a software platform on\r\ntop of which other application programs can run\"<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">The Operating Systems provide an API which ensures that the third-party\r\napplications run and operate on device.<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\"><o:p> </o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">Application:<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">An application is a set of instructions for the computer to\r\nperform a useful task for the user, and the term applies to the Smartphone apps\r\nas well. <o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">There are many Smartphone applications in the stores today,\r\nwhich can be installed on the system and perform a specified task, e.g. voice\r\nrecorder, audio player, map, document viewer, etc. <o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">Smartphone applications are divided into three categories\r\n(Native, Mobile Web, and Hybrid) <o:p></o:p></span></b></p>', 12000, '0', 2),
(19, 7, ' Graphics Designer', 'Graphic-Designer1.jpg', 9, 8, 15, 5, 10, '2020-12-31', '2020-12-31', '0-6 Months', 2, '<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">The Android code as \"open-source under the Apache\r\nLicense\" was released by Google which is why most of the manufacturers\r\ncustomize the code for their products, and this is one of the reasons Android\r\nhas had a considerable growth compared to any of the platforms in history of\r\ncomputers. <o:p></o:p></span></b></p><p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">\"the Operating System provides a software platform on\r\ntop of which other application programs can run\"<o:p></o:p></span></b></p><p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">The Operating Systems provide an API which ensures that the third-party\r\napplications run and operate on device.<o:p></o:p></span></b></p><p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\"><o:p> </o:p></span></b></p><p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">Application:<o:p></o:p></span></b></p><p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">An application is a set of instructions for the computer to\r\nperform a useful task for the user, and the term applies to the Smartphone apps\r\nas well. <o:p></o:p></span></b></p><p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">There are many Smartphone applications in the stores today,\r\nwhich can be installed on the system and perform a specified task, e.g. voice\r\nrecorder, audio player, map, document viewer, etc. <o:p></o:p></span></b></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">Smartphone applications are divided into three categories\r\n(Native, Mobile Web, and Hybrid) <o:p></o:p></span></b></p>', 12000, '0', 9),
(20, 7, 'Game Designer', 'images_(3).png', 9, 8, 32, 9, 10, '2020-03-02', '2020-03-06', '1 Year', 14, '<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">The Android code as \"open-source under the Apache\r\nLicense\" was released by Google which is why most of the manufacturers\r\ncustomize the code for their products, and this is one of the reasons Android\r\nhas had a considerable growth compared to any of the platforms in history of\r\ncomputers. <o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">\"the Operating System provides a software platform on\r\ntop of which other application programs can run\"<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">The Operating Systems provide an API which ensures that the third-party\r\napplications run and operate on device.<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\"><o:p> </o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">Application:<o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">An application is a set of instructions for the computer to\r\nperform a useful task for the user, and the term applies to the Smartphone apps\r\nas well. <o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">There are many Smartphone applications in the stores today,\r\nwhich can be installed on the system and perform a specified task, e.g. voice\r\nrecorder, audio player, map, document viewer, etc. <o:p></o:p></span></b></p>\r\n\r\n<p class=\"MsoNormal\"><b><span lang=\"EN-IN\" style=\"mso-bidi-font-size:16.0pt;\r\nline-height:107%\">Smartphone applications are divided into three categories\r\n(Native, Mobile Web, and Hybrid) <o:p></o:p></span></b></p>', 12000, '0', 4),
(22, 7, 'Fashion Designer', 'fashion111.jpg', 9, 8, 13, 5, 20, '2020-03-07', '2020-03-20', '0-6 Months', 19, '<p>fashion designer skill <span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill </span><span style=\"font-size: 1rem;\">fashion designer skill .</span></p>', 12000, '0', 3),
(27, 32, 'Sr. Maneger', 'adharcard1.jpg', 9, 11, 6, 4, 9, '2020-06-16', '2020-06-23', '0-6 Months', 11, '<p><b><u><i>test</i></u></b></p>', 12000, '0', 8);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `location_name` varchar(255) NOT NULL,
  `location_status` varchar(255) NOT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `country_id`, `state_id`, `city_id`, `location_name`, `location_status`) VALUES
(9, 16, 10, 10, 'Varachha', '0'),
(10, 16, 10, 11, 'Kakriya', '0'),
(11, 16, 10, 10, 'kamrej', '0'),
(12, 16, 10, 10, 'Vesu', '0'),
(13, 16, 10, 10, 'Katargam', '0'),
(14, 16, 10, 10, 'Utraan', '0'),
(15, 16, 10, 10, 'Kapodra', '0'),
(16, 16, 10, 10, 'Mota varachha', '0'),
(17, 16, 10, 10, 'Pal', '0'),
(18, 16, 10, 10, 'Dabholi', '0'),
(19, 16, 10, 10, 'Nanpura', '0'),
(20, 16, 10, 10, 'Sagrampura', '0'),
(21, 16, 10, 10, 'City Light', '0'),
(22, 16, 10, 10, 'Adajan', '0'),
(23, 16, 10, 10, 'Udhna', '0'),
(24, 16, 10, 10, 'Amroli', '0'),
(25, 16, 10, 10, 'Rander', '0'),
(26, 16, 10, 10, 'VIP road', '0'),
(27, 16, 10, 10, 'Sachin', '0'),
(28, 16, 10, 10, 'Palsana', '0'),
(29, 16, 10, 10, 'Olpad', '0'),
(30, 16, 10, 10, 'Sayan', '0'),
(31, 16, 10, 10, ' Station Road', '0'),
(32, 16, 10, 10, 'Dumas Road', '0'),
(33, 16, 10, 10, 'VR Mall', '0'),
(34, 16, 10, 10, 'Ring Road', '0'),
(35, 16, 10, 10, 'Majura gate', '0');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

DROP TABLE IF EXISTS `package`;
CREATE TABLE IF NOT EXISTS `package` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pkg_name` text NOT NULL,
  `pkg_rate` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `pkg_name`, `pkg_rate`) VALUES
(1, 'silver', 10000),
(2, 'gold', 15000),
(3, 'Bronze', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `txnid` text NOT NULL,
  `amount` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `hash` text NOT NULL,
  `addedon` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `company_id`, `txnid`, `amount`, `email`, `phone`, `hash`, `addedon`) VALUES
(6, 7, '6', 10000, 'birla2@gmail.com', 9586032160, 'ea2668cd22b3a7f88e61c77acdbfed93abaa2c8c9afd3b0a0567151a9c643654994be779f8977ff1aead835252867c718371b0d32b91e8beca852815989b041d', '2020-03-14 10:57:08'),
(8, 11, '26216633e7d9eee87ad3', 10000, 'creative@gmail.com', 2147483647, 'f67db1c53c6c2ab7a76b230685e02c96e192d3fea51c8e3b65aa2daf246397e24074575f24de7066988fb6e86a27173ec2f04d99667f8b6879c90ded88f678a3', '2020-03-14 11:40:28'),
(9, 32, 'e6e553e433735e340c52', 2000, 'miteshbhalala154@gmail.com', 7490979938, 'f817cb2c5e7a6b518128a298e08c6686ed4e3812dfc297ba3ac40dd8d2523c5cce5e6e1755885aecb61ee23e79af0d86db01e90cca26303029beda1cd07b4c25', '2020-06-16 15:24:46');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_name`, `category_id`) VALUES
(5, 'Programmer', 1),
(6, 'Manager', 2),
(7, 'Developer', 1),
(8, 'Accountmanager', 3),
(9, 'Designer', 1),
(10, 'Manager', 6),
(11, 'Seller  ', 4),
(12, 'Web designer', 5),
(13, 'Fashion Designer', 5),
(14, 'Interior Designer', 5),
(15, 'Graphic Designer', 5),
(16, 'Animation', 5),
(17, 'Motion Graphics Designer', 5),
(18, 'Industrial Product Designer', 6),
(19, 'Project Manager', 1),
(20, 'Wed Developer', 1),
(21, 'Software Services', 1),
(22, 'Retailling', 4),
(23, 'IT-Hardware/Networking', 1),
(24, 'Telecom', 1),
(25, 'Manufacturing', 4),
(26, 'Banking', 2),
(27, 'Financial Services/Stockbroking', 2),
(28, 'Financial Services/Stockbroking', 3),
(29, 'Healthcare', 7),
(30, 'Hotel  Manager', 6),
(31, 'HR', 1),
(32, 'Game Designer', 1),
(33, 'Application Designer', 1),
(34, 'Gems & Jewellery', 5),
(35, 'Conductor', 3);

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

DROP TABLE IF EXISTS `skill`;
CREATE TABLE IF NOT EXISTS `skill` (
  `skill_id` int(11) NOT NULL AUTO_INCREMENT,
  `skill_name` varchar(255) NOT NULL,
  PRIMARY KEY (`skill_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`skill_id`, `skill_name`) VALUES
(1, 'It programming'),
(2, 'presentation'),
(3, 'Communication'),
(4, 'Ability to Work Under Pressure'),
(5, 'Decision Making'),
(6, 'Time Management'),
(7, 'Self-motivaion'),
(8, 'Conflict Resolution'),
(9, 'Leadership'),
(10, 'Adaptability'),
(11, 'Career management'),
(12, 'Career planning'),
(13, 'Competency'),
(14, 'Critical thinking'),
(15, 'Dressing professionally'),
(16, 'Emotional intelligence'),
(17, 'Enforcing boundaries'),
(18, 'Group process'),
(19, 'Sources of Power'),
(20, 'Oral presentation skills'),
(21, 'Game developer'),
(22, 'Application developer'),
(23, 'Web Development');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`) VALUES
(2, '05.jpg'),
(3, '06.jpg'),
(4, '07.jpg'),
(5, '08.jpg'),
(6, 'car3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `state_status` varchar(255) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `country_id`, `state_name`, `state_status`) VALUES
(10, 16, 'Gujarat', '0'),
(11, 16, 'Assam', '0'),
(12, 16, 'Maharastra', '0'),
(13, 16, 'Madhya Pradesh', '1'),
(14, 16, 'Panjab', '0'),
(15, 16, 'Haryana', '1'),
(16, 16, 'Jammu and Kashmir', '1'),
(17, 16, 'Kerala', '0'),
(18, 16, 'Maharashtra', '0'),
(19, 16, 'Goa', '0'),
(20, 17, 'Yukon', '0'),
(21, 17, 'Alberta', '0'),
(22, 17, 'Manitoda', '1'),
(23, 17, 'Ontario', '1'),
(24, 17, 'Nunavut', '0'),
(25, 18, 'Alabama', '0'),
(26, 18, 'Alaska', '0'),
(27, 18, 'California', '0'),
(28, 18, 'Georagia', '1'),
(30, 21, 'New South Wales', '0'),
(31, 21, 'Victoria', '0'),
(32, 21, 'Western Australia', '0'),
(33, 21, 'Tasmaina', '1');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

DROP TABLE IF EXISTS `testimonial`;
CREATE TABLE IF NOT EXISTS `testimonial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `review` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `company_id`, `image`, `review`, `status`) VALUES
(1, 8, 'profile_pik.png', '<p><b>I am from tata company.how are you? what r u doing?</b></p>', 0),
(2, 7, 'cand-3.png', '<p><b>I am from Birla Company.</b></p><p><b>how r u?</b></p><p><b>what r u doing?</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>', 0),
(4, 11, 'pic-1.png', '<p><b>I am from Birla Company.</b></p><p><b>how r u?</b></p><p><b>what r u doing?</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>', 0),
(5, 12, 'cand-6.png', '<p><b>I am from tata company.how are you? what r u doing?</b></p>', 0),
(6, 14, 'download_(2)_-_Copy.jpg', '<p>&nbsp; &nbsp;<b><u> This is the demo review</u></b><br></p>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `contact_no` bigint(15) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `skill_id` int(11) NOT NULL,
  `exper_req` text NOT NULL,
  `education_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `image`, `contact_no`, `gender`, `address`, `skill_id`, `exper_req`, `education_id`) VALUES
(1, 'Foram trada', 'foramtrada231@gmail.com', 'foram123', 'img2.jpg', 7433804564, 'female', '601 Astha high-rise sarthana, Surat', 2, '1 year', 3),
(2, 'Ekta Vaghani', 'ektadvaghani@gmail.com', 'ekta123', 'cand-3.png', 9864356785, 'female', '91 kavita society sarthana ,surat', 15, '2 year', 8),
(4, 'Miren Vataliya', 'mirenvataliya9@gmail.com', 'miren0113', 'cand-2.png', 9864356785, 'male', '95 vanmadi park socity kenal road yogi chowk,surat-395010', 5, '1 year', 8),
(5, 'Helix Jon', 'helixjon09@gmail.com', 'jon456', 'cand-1.png', 9632587410, 'female', 'Jamsab-A-2, 2 Nd Floor, Jay Tower, Ankur Complex, Near Ankur Bus Stop, Naranpura Vistar, Ahmedabad - 380013 ', 7, '0-6 Months', 3),
(6, 'Urvi Thakkar', 'urvithakkar@gmail.com', 'thakkar', 'cand-61.png', 8759006362, 'female', '72, 1st Floor, Sardar Centre, Vastrapur, Ahmedabad - 380015, Opp.Vastrapur Lake', 11, '0-6 Months', 2),
(7, 'Manan Bhatt', 'mananbhatt05@gmail.com', 'manan05', 'cand-5.png', 9587080123, 'male', '22/A World Bussiness House, Opposite Parimal Garden, Ellis Bridge, Ahmedabad - 380006, Opposite Hp Petrol Pump', 15, '1 Year', 9),
(8, 'kevin', 'kevintrada231@gmail.com', '12345', 'dreamstime_m_99393823.jpg', 1236547895, 'male', '231,shantinagar ,sarthana jakatnaka surat', 6, '1 Year', 2),
(9, 'Ridham Kevadiya', 'ridhamkevadiya24@gmail.com', '654321', 'images_(1).jpg', 9874563214, 'male', 'this is demo', 1, '2 Year', 1),
(10, 'keval', 'kevalsavaliya455@gmail.com', '123456', '090719_0446_BasicsofCom1.png', 9512393282, 'male', 'surat', 7, '0-6 Months', 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

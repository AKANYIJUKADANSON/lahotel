

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `role` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobnumber` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_on` date NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `first_name`, `last_name`, `username`, `role`, `email`, `mobnumber`, `password`, `created_on`, `status`) VALUES
(1, 'System', 'Administrator', 'admin', 'Doctor', 'sysadmin@gmail.com', '256779253710', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2025-04-14', 1),
(2, 'AKANYIJUKA', 'DANSON', 'adanson', 'Doctor', 'akanyijuka1danson@gmail.com', '779264619', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '0000-00-00', 1),
(3, 'ANAM', 'DAVID', 'adavid', 'Optician', 'anam.david@gmail.com', '779264619', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '0000-00-00', 1),
(4, 'AGABA', 'TINAH', 'atinah', 'Nurse', 'agaba@gmail.com', '756630918', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(20) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `num_of_people` int(10) NOT NULL,
  `num_of_rooms` int(10) NOT NULL,
  `charge` int(100) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `date_created` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `first_name`, `last_name`, `email`, `country`, `phone_number`, `room_type`, `num_of_people`, `num_of_rooms`, `charge`, `check_in`, `check_out`, `date_created`, `status`) VALUES
(1, 'John', 'Smith', 'john.smith@email.com', 'Uganda', '555-0101', 'Single', 0, 0, 75, '2025-04-03', '2025-03-31', '2025-04-10', 1),
(2, 'Emma', 'Johnson', 'emma.j@email.com', 'Uganda', '555-0102', 'Double', 0, 0, 120, '2025-04-04', '2025-04-07', '2025-04-10', 0),
(3, 'Michael', 'Brown', 'mike.brown@email.com', 'Uganda', '555-0103', 'Suite', 0, 0, 200, '2025-04-05', '2025-04-08', '2025-04-10', 1),
(4, 'Sarah', 'Davis', 'sarah.d@email.com', 'Uganda', '555-0104', 'Single', 0, 0, 80, '2025-04-06', '2025-04-09', '2025-04-10', 1),
(5, 'James', 'Wilson', 'james.w@email.com', 'Uganda', '555-0105', 'Double', 0, 0, 130, '2025-04-07', '2025-04-10', '2025-04-10', 0),
(6, 'Lisa', 'Anderson', 'lisa.a@email.com', 'Uganda', '555-0106', 'Suite', 0, 0, 220, '2025-04-08', '2025-03-11', '2025-04-10', 1),
(7, 'Robert', 'Taylor', 'robert.t@email.com', 'Uganda', '555-0107', 'Single', 0, 0, 70, '2025-04-09', '2025-04-12', '2025-04-10', 0),
(8, 'Emily', 'Martinez', 'emily.m@email.com', 'Uganda', '555-0108', 'Double', 0, 0, 125, '2025-04-10', '2025-04-13', '2025-04-10', 1),
(9, 'David', 'Garcia', 'david.g@email.com', 'Uganda', '555-0109', 'Suite', 0, 0, 210, '2025-04-11', '2025-04-14', '2025-04-10', 1),
(10, 'Jennifer', 'Lee', 'jen.lee@email.com', 'Uganda', '555-0110', 'Single', 0, 0, 85, '2025-04-12', '2025-04-15', '2025-04-10', 0),
(11, 'William', 'Clark', 'will.c@email.com', 'Uganda', '555-0111', 'Double', 0, 0, 115, '2025-04-13', '2025-04-16', '2025-04-10', 1),
(12, 'Maria', 'Rodriguez', 'maria.r@email.com', 'Uganda', '555-0112', 'Suite', 0, 0, 230, '2025-04-14', '2025-04-17', '2025-04-10', 0),
(13, 'Thomas', 'Walker', 'tom.w@email.com', 'Uganda', '555-0113', 'Single', 0, 0, 78, '2025-04-15', '2025-04-18', '2025-04-10', 1),
(14, 'Jessica', 'Hall', 'jess.h@email.com', 'Uganda', '555-0114', 'Double', 0, 0, 128, '2025-04-16', '2025-03-19', '2025-04-10', 1),
(15, 'Charles', 'Allen', 'charles.a@email.com', 'Uganda', '555-0115', 'Suite', 0, 0, 215, '2025-04-17', '2025-04-20', '2025-04-10', 0),
(16, 'Patricia', 'Young', 'pat.y@email.com', 'Uganda', '555-0116', 'Single', 0, 0, 82, '2025-04-18', '2025-04-21', '2025-04-10', 1),
(17, 'Christopher', 'King', 'chris.k@email.com', 'Uganda', '555-0117', 'Double', 0, 0, 122, '2025-04-19', '2025-04-22', '2025-04-10', 0),
(18, 'Linda', 'Scott', 'linda.s@email.com', 'Uganda', '555-0118', 'Suite', 0, 0, 225, '2025-04-20', '2025-04-23', '2025-04-10', 1),
(19, 'Daniel', 'Green', 'dan.g@email.com', 'Uganda', '555-0119', 'Single', 0, 0, 77, '2025-04-21', '2025-04-24', '2025-04-10', 1),
(20, 'Nancy', 'Adams', 'nancy.a@email.com', 'Uganda', '555-0120', 'Double', 0, 0, 118, '2025-04-22', '2025-04-25', '2025-04-10', 0),
(21, 'Paul', 'Baker', 'paul.b@email.com', 'Uganda', '555-0121', 'Suite', 0, 0, 205, '2025-04-23', '2025-04-26', '2025-04-10', 1),
(22, 'Susan', 'Gonzalez', 'susan.g@email.com', 'Uganda', '555-0122', 'Single', 0, 0, 79, '2025-04-24', '2025-04-27', '2025-04-10', 0),
(23, 'Mark', 'Nelson', 'mark.n@email.com', 'Uganda', '555-0123', 'Double', 0, 0, 124, '2025-04-25', '2025-04-28', '2025-04-10', 1),
(24, 'Karen', 'Carter', 'karen.c@email.com', 'Uganda', '555-0124', 'Suite', 0, 0, 218, '2025-04-26', '2025-04-29', '2025-04-10', 1),
(25, 'Steven', 'Mitchell', 'steve.m@email.com', 'Uganda', '555-0125', 'Single', 0, 0, 83, '2025-04-27', '2025-04-30', '2025-04-10', 0),
(26, 'Betty', 'Perez', 'betty.p@email.com', 'Uganda', '555-0126', 'Double', 0, 0, 119, '2025-04-28', '2025-05-01', '2025-04-10', 1),
(27, 'Edward', 'Roberts', 'ed.r@email.com', 'Uganda', '555-0127', 'Suite', 0, 0, 228, '2025-04-29', '2025-05-02', '2025-04-10', 0),
(28, 'Helen', 'Turner', 'helen.t@email.com', 'Uganda', '555-0128', 'Single', 0, 0, 76, '2025-04-30', '2025-05-03', '2025-04-10', 1),
(29, 'Brian', 'Phillips', 'brian.p@email.com', 'Uganda', '555-0129', 'Double', 0, 0, 126, '2025-05-01', '2025-05-04', '2025-04-10', 1),
(30, 'Dorothy', 'Campbell', 'doro.c@email.com', 'Uganda', '555-0130', 'Suite', 0, 0, 212, '2025-05-02', '2025-05-05', '2025-04-10', 0),
(31, 'Ronald', 'Parker', 'ron.p@email.com', 'Uganda', '555-0131', 'Single', 0, 0, 81, '2025-05-03', '2025-05-06', '2025-04-10', 1),
(32, 'Laura', 'Evans', 'laura.e@email.com', 'Uganda', '555-0132', 'Double', 0, 0, 121, '2025-05-04', '2025-05-07', '2025-04-10', 0),
(33, 'George', 'Edwards', 'george.e@email.com', 'Uganda', '555-0133', 'Suite', 0, 0, 223, '2025-05-05', '2025-05-08', '2025-04-10', 1),
(34, 'Deborah', 'Collins', 'deb.c@email.com', 'Uganda', '555-0134', 'Single', 0, 0, 74, '2025-05-06', '2025-05-09', '2025-04-10', 1),
(35, 'Joseph', 'Stewart', 'joe.s@email.com', 'Uganda', '555-0135', 'Double', 0, 0, 127, '2025-05-07', '2025-05-10', '2025-04-10', 0),
(36, 'Carol', 'Sanchez', 'carol.s@email.com', 'Uganda', '555-0136', 'Suite', 0, 0, 217, '2025-05-08', '2025-05-11', '2025-04-10', 1),
(37, 'Kenneth', 'Morris', 'ken.m@email.com', 'Uganda', '555-0137', 'Single', 0, 0, 84, '2025-05-09', '2025-05-12', '2025-04-10', 0),
(38, 'Ruth', 'Rogers', 'ruth.r@email.com', 'Uganda', '555-0138', 'Double', 0, 0, 123, '2025-05-10', '2025-05-13', '2025-04-10', 1),
(39, 'Stephen', 'Reed', 'stephen.r@email.com', 'Uganda', '555-0139', 'Suite', 0, 0, 226, '2025-05-11', '2025-05-14', '2025-04-10', 1),
(40, 'Sharon', 'Cook', 'sharon.c@email.com', 'Uganda', '555-0140', 'Single', 0, 0, 80, '2025-05-12', '2025-05-15', '2025-04-10', 0),
(41, 'Larry', 'Morgan', 'larry.m@email.com', 'Uganda', '555-0141', 'Double', 0, 0, 116, '2025-05-13', '2025-05-16', '2025-04-10', 1),
(42, 'Michelle', 'Bell', 'michelle.b@email.com', 'Uganda', '555-0142', 'Suite', 0, 0, 219, '2025-05-14', '2025-05-17', '2025-04-10', 0),
(43, 'Kevin', 'Murphy', 'kevin.m@email.com', 'Uganda', '555-0143', 'Single', 0, 0, 78, '2025-05-15', '2025-05-18', '2025-04-10', 1),
(44, 'Rebecca', 'Bailey', 'rebecca.b@email.com', 'Uganda', '555-0144', 'Double', 0, 0, 125, '2025-05-16', '2025-05-19', '2025-04-10', 1),
(45, 'Gary', 'Rivera', 'gary.r@email.com', 'Uganda', '555-0145', 'Suite', 0, 0, 224, '2025-05-17', '2025-05-20', '2025-04-10', 0),
(46, 'Diane', 'Cooper', 'diane.c@email.com', 'Uganda', '555-0146', 'Single', 0, 0, 82, '2025-05-18', '2025-05-21', '2025-04-10', 1),
(47, 'Patrick', 'Richardson', 'pat.r@email.com', 'Uganda', '555-0147', 'Double', 0, 0, 120, '2025-05-19', '2025-05-22', '2025-04-10', 0),
(48, 'Janet', 'Cox', 'janet.c@email.com', 'Uganda', '555-0148', 'Suite', 0, 0, 221, '2025-05-20', '2025-05-23', '2025-04-10', 1),
(49, 'Henry', 'Howard', 'henry.h@email.com', 'Uganda', '555-0149', 'Single', 0, 0, 79, '2025-05-21', '2025-05-24', '2025-04-10', 1),
(50, 'Martha', 'Ward', 'martha.w@email.com', 'Uganda', '555-0150', 'Double', 0, 0, 129, '2025-05-22', '2025-05-25', '2025-04-10', 0),
(51, 'AKANYIJUKA', 'DANSON', 'akanyijuka1danson@gmail.com', 'Uganda', '0779264619', 'Gold', 3, 3, 100, '2025-04-16', '2025-04-23', '2025-04-10', 1),
(52, 'LINDA', 'DANN', 'linda1@gmail.com', 'Kenya', '0779264619', 'Gold', 3, 2, 100, '2025-04-14', '2025-04-18', '2025-04-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date_of_suscription` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `taken_on` date NOT NULL,
  `description` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `photo`, `taken_on`, `description`) VALUES
('1DL4pRCKKmg238fsCU6i75', 'insta-1.jpg', '2025-04-02', 'Sea view with ambiance'),
('aB2cD9eF6gH3iJ8kL4mN7pQ1r', 'about.jpg', '2023-07-19', 'Scenic view from mountain trail'),
('aZ9yT4vR1qP7mN3lK8jH2gF6d', 'image_3.jpg', '2023-05-31', 'Boats docked at sunset'),
('bC7aZ3yT9vR2qP6mN1lK5jH4i', 'insta-4.jpg', '2023-10-17', 'Calm lake with mountain reflection'),
('cD6aZ2yT9vR3qP8mN4lK1jH7g', 'image_1.jpg', '2023-01-29', 'Ice-covered lake in winter'),
('dF2gH6iJ9kL4mN8pQ1rW3tY7z', 'insta-5.jpg', '2023-03-28', 'Blooming flowers in city park'),
('fE3cD9aZ6yT2vR8qP4mN1lK7j', 'insta-2.jpg', '2023-04-20', 'Meadow filled with wildflowers');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(100) NOT NULL,
  `price` decimal(20,0) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `details`, `price`, `image`) VALUES
(1, 'Grilled Crab with Onion', 'Sweet grilled crab with raw tomatoes and onions. Two glasses of Juice added.', 20, 'grilled-crab.jpg'),
(2, 'Chicken Korma', 'A creamy and mild chicken curry, featuring a blend of coconut milk, almonds, and a touch of sweetnes', 50, 'chicken-korma.jpg'),
(3, 'Lemon Rice', 'A zesty rice dish flavored with lemon juice and peanuts, a popular and refreshing side dish', 18, 'lemon-rice.jpg'),
(4, 'Red Lentil Curry', 'A hearty and flavorful curry made with red lentils, spices, and a touch of sweetness', 25, 'red-lentil.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `keywords` varchar(225) NOT NULL,
  `body` varchar(225) NOT NULL,
  `author` varchar(100) NOT NULL,
  `published_on` date NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image`, `title`, `slug`, `keywords`, `body`, `author`, `published_on`, `category`) VALUES
(1, 'major-city.jpg', 'Breaking News: Major Event in the City', 'breaking-news:-major-event-in-the-city', '', 'Details of the major event happening in the city on fire', 'Patricia', '2025-02-17', ''),
(3, 'major-city.jpg', 'Sports Highlights: Football Championship Finals', 'sports-highlights:-football-championship-finals', '', 'A recap of the exciting football championship finals...', 'John Doe', '2025-02-17', ''),
(4, 'major-city.jpg', 'Local News: Community Center Grand Opening', 'local-news:-community-center-grand-opening', '', 'The new community center is officially open for the public...', 'Nakalema', '2025-02-17', ''),
(5, 'major-city.jpg', 'Global Affairs: New Policy Changes Announced', 'global-affairs:-new-policy-changes-announced', '', 'A look at the recent policy changes in the global political landscape...', 'Zambali', '2025-02-17', ''),
(6, 'major-city.jpg', 'Weather Update: Storm Alert in the Region', 'weather-update:-storm-alert-in-the-region', '', 'A storm alert has been issued for the region, take necessary precautions...', 'Katende', '2025-02-17', ''),
(7, 'major-city.jpg', 'Business Insights: Stock Market Surges', 'business-insights:-stock-market-surges', '', 'Stock markets have seen a significant surge this week...', 'Kalibara', '2025-02-17', ''),
(8, 'major-city.jpg', 'Health Report: New Breakthrough in Cancer Research', 'health-report:-new-breakthrough-in-cancer-research', '', 'A groundbreaking development in cancer treatment research has been revealed...', 'Jane', '2025-02-17', ''),
(9, 'major-city.jpg', 'Education News: School Year Begins with New Changes', 'education-news:-school-year-begins-with-new-changes', '', 'This year’s school semester brings new curriculum changes and updates...', 'Amie', '2025-02-17', ''),
(10, 'major-city.jpg', 'Entertainment: Movie Premiere Set for This Weekend', 'entertainment:-movie-premiere-set-for-this-weekend', '', 'The highly anticipated movie will premiere this weekend...', 'Nantambi', '2025-02-17', ''),
(11, 'major-city.jpg', 'Music Release: Artist Drops New Album', 'music-release:-artist-drops-new-album', '', 'A new album by the famous artist has just been released...', 'Lutaaya', '2025-02-17', ''),
(12, 'major-city.jpg', 'Technology: AI Revolutionizing Industries', 'technology:-ai-revolutionizing-industries', '', 'Artificial intelligence is transforming various industries at a rapid pace...', '', '2025-02-17', ''),
(13, 'major-city.jpg', 'Science Discovery: Mars Exploration Unveiled', 'science-discovery:-mars-exploration-unveiled', '', 'NASA’s new findings on Mars exploration have been unveiled...', 'Omala', '2025-02-17', ''),
(14, 'major-city.jpg', 'Travel News: Top Destinations for 2025', 'travel-news:-top-destinations-for-2025', '', 'Planning your next vacation? Here are the top travel destinations for 2025...', 'Remmy', '2025-02-17', ''),
(15, 'major-city.jpg', 'Food Trends: New Cuisine Takes Over', 'food-trends:-new-cuisine-takes-over', '', 'A new food trend has taken over the culinary world, and it’s here to stay...', 'Brianah', '2025-02-17', ''),
(16, 'major-city.jpg', 'Lifestyle: How to Manage Stress Effectively', 'lifestyle:-how-to-manage-stress-effectively', '', 'Tips and tricks to help manage stress in your daily life...', 'Wedad', '2025-02-17', ''),
(17, 'major-city.jpg', 'Fashion Trends: Latest Styles for 2025', 'fashion-trends:-latest-styles-for-2025', '', 'The most popular fashion styles for the upcoming year have been revealed...', 'Darren', '2025-02-17', ''),
(18, 'major-city.jpg', 'Politics Update: Election Campaign Kicks Off', 'politics-update:-election-campaign-kicks-off', '', 'The presidential election campaign has officially begun, with candidates laying out their plans...', 'Lamar', '2025-02-17', ''),
(19, 'major-city.jpg', 'Technology Review: Best Laptops for Remote Work', 'technology-review:-best-laptops-for-remote-work', '', 'A guide to the best laptops for working remotely in 2025...', 'Kandie', '2025-02-17', ''),
(20, 'major-city.jpg', 'World News: United Nations Summit Highlights', 'world-news:-united-nations-summit-highlights', '', 'Key highlights from this year’s United Nations summit...', '', '2025-02-17', ''),
(21, 'major-city.jpg', 'Breaking News: World Leaders Gather for Summit', 'breaking-news:-world-leaders-gather-for-summit', '', 'World leaders are gathering today to discuss global issues...', 'Paras', '2025-02-17', ''),
(22, 'major-city.jpg', 'Sports: Basketball League Finals Preview', 'sports:-basketball-league-finals-preview', '', 'An exciting preview of the basketball league finals, with top teams facing off...', 'Priyag', '2025-02-17', ''),
(23, 'major-city.jpg', 'Tech World: Next-Gen Smart Home Devices', 'tech-world:-next-gen-smart-home-devices', '', 'The latest smart home gadgets are changing the way we live...', 'Dashika', '2025-02-17', ''),
(24, 'major-city.jpg', 'Politics: New Government Policies Announced', 'politics:-new-government-policies-announced', '', 'The government has announced new policies aimed at improving economic growth...', 'Adewa', '2025-02-17', ''),
(25, 'major-city.jpg', 'Travel Guide: Best Winter Vacations', 'travel-guide:-best-winter-vacations', '', 'Planning a winter vacation? Here are the best destinations...', 'Rehobam', '2025-02-17', ''),
(26, 'major-city.jpg', 'Health: Exercise Tips for Beginners', 'health:-exercise-tips-for-beginners', '', 'Here are some easy exercise tips for people new to fitness...', 'Fatima', '2025-02-17', ''),
(27, 'major-city.jpg', 'Tech Gadgets: Upcoming VR Headsets', 'tech-gadgets:-upcoming-vr-headsets', '', 'Virtual reality headsets are evolving fast, and the next generation is nearly here...', '', '2025-02-17', ''),
(28, 'major-city.jpg', 'Music Industry: Top Artists of 2025', 'music-industry:-top-artists-of-2025', '', 'A list of the top music artists to watch out for in 2025...', '', '2025-02-17', ''),
(29, 'major-city.jpg', 'Local Events: Annual Music Festival Coming Soon', 'local-events:-annual-music-festival-coming-soon', '', 'The annual music festival is coming soon, bringing great performances...', '', '2025-02-17', ''),
(30, 'major-city.jpg', 'Space Exploration: NASA’s New Mars Mission', 'space-exploration:-nasa’s-new-mars-mission', '', 'NASA has launched a new mission to explore Mars and its mysteries...', '', '2025-02-17', ''),
(31, 'major-city.jpg', 'Business Report: New Startups Flourishing', 'business-report:-new-startups-flourishing', '', 'The startup ecosystem is thriving, with new businesses emerging...', '', '2025-02-17', '');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` varchar(200) NOT NULL,
  `room_number` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `num_of_people` int(10) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `rooms_available` int(100) NOT NULL,
  `availability` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_number`, `type`, `description`, `num_of_people`, `price`, `image`, `rooms_available`, `availability`) VALUES
('ebece1079951b9e5b8b271210ba868c120f514f1', 'RM02', 'Silver', 'When she rVillage and the subline of her own road, the Line Lane. Pityful a rethoric question ran over', 2, '50', 'room-2.jpg', 2, 1),
('ebece1079951b9e5b8b271210ba868c120f514f5', 'RM01', 'Gold', 'When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way', 3, '100', 'room-1.jpg', 5, 1),
('ebece1079951b9e5b8b271210ba868c120f514fg', 'RM05', 'Gold', 'When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way', 3, '100', 'room-5.jpg', 4, 1),
('ebece1079951b9e5b8b271210ba868c120f514fw', 'RM06', 'Silver', 'Rendezvous lahotel bonjour latejetbra viteri comsa bien', 2, '50', 'room-6.jpg', 1, 1),
('ebefe1079951b9e5b8b271210ba868c120f514f5', 'RM04', 'Luxury', 'Ooops! she Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over', 5, '90', 'room-4.jpg', 3, 1),
('rbece1079951b9e5b8b271210ba868c120f514f5', 'RM03', 'Diamond', 'When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way', 5, '40', 'room-3.jpg', 6, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;


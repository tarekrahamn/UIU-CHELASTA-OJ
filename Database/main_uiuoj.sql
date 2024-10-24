-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2024 at 03:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `main_uiuoj`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(100) DEFAULT NULL,
  `cname` varchar(100) DEFAULT NULL,
  `des` longtext DEFAULT NULL,
  `aid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `archieve`
--

CREATE TABLE `archieve` (
  `id` int(11) NOT NULL,
  `pbname` varchar(100) DEFAULT NULL,
  `pbdes` longtext DEFAULT NULL,
  `pbauthor` varchar(100) DEFAULT NULL,
  `tc` mediumtext DEFAULT NULL,
  `output` mediumtext DEFAULT NULL,
  `uoutput` mediumtext DEFAULT NULL,
  `tlimit` double(100,2) DEFAULT 3.00
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `archieve`
--

INSERT INTO `archieve` (`id`, `pbname`, `pbdes`, `pbauthor`, `tc`, `output`, `uoutput`, `tlimit`) VALUES
(1, 'Tarek Sum', 'Do sum a and b?', 'tarek', '3 2', '5', '5', 1.00),
(2, 'Multiply Two Numbers', 'You are given two integers, A and B. Write a program to compute their product.\r\n\r\n\r\nInput:\r\n\r\nTwo integers ? and B(1 <=A,B <=10)\r\n\r\nOutput : \r\n\r\nOutput the product of A and B.', 'Tarek Rahman', '3 4\r\n', '12\r\n', '', 1.00),
(3, 'Multiply', 'You are given two integers, A and B. Write a program to compute their product.\r\n\r\n\r\nInput:\r\n\r\nTwo integers ? and B(1 <=A,B <=10)\r\n\r\nOutput : \r\n\r\nOutput the product of A and B.', 'Tarek Rahman', '3 4\r\n', '12\r\n', '', 1.00),
(5, 'Hasina Apa Come Back', 'Just print Hasina Apa Come Back', 'Tarek Rahman', 'No testcase ', 'Hasina Apa Come Back', '', 1.00),
(6, 'Hasina Apa Come back', 'If Hasian Apa Come Back print  Prepared yourself for jail\r\n\r\n', 'Tarek Rahman', 'No Input', 'Prepared yourself for jail', 'Prepared yourself for jail', 1.00),
(7, 'Hasina Apa Come back', 'If Hasian Apa Come Back print  Prepared yourself for jail\r\n\r\nInput : \r\n\r\nNo Input Hare\r\n\r\n\r\nOutput : \r\n\r\nJust Print  Prepared yourself for jail\r\n\r\n', 'Tarek Rahman', 'No Input', 'Prepared yourself for jail', '', 1.00);

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 1, 4, 'ssc', '2024-09-27 13:15:56', 2),
(2, 10, 9, 'hi', '2024-09-27 23:44:05', 1),
(3, 0, 9, 'hi', '2024-09-27 23:44:12', 0),
(4, 11, 9, 'xsbbs', '2024-09-28 13:19:01', 1),
(5, 11, 9, 'hlwww', '2024-09-28 13:19:13', 1),
(6, 11, 9, 'hii', '2024-09-28 13:19:20', 1),
(7, 11, 9, 'hlw i am mosharraf', '2024-09-28 13:24:48', 1),
(8, 9, 13, 'hlw i am ratul', '2024-09-28 13:27:30', 0),
(9, 13, 9, 'hlw i am mosharraf', '2024-09-28 13:41:12', 0),
(10, 1, 8, 'sxsxsx', '2024-09-29 10:55:18', 1),
(11, 4, 8, 'hii', '2024-09-29 10:55:39', 0),
(12, 4, 8, '?', '2024-09-29 10:55:43', 0),
(13, 0, 14, 'azaz', '2024-09-29 13:13:51', 1),
(14, 1, 14, 'xax', '2024-09-29 13:15:16', 1),
(15, 1, 14, 'd c', '2024-09-29 13:26:06', 1),
(16, 0, 14, 'AAX', '2024-09-30 12:44:53', 1),
(17, 0, 14, 'AXX', '2024-09-30 12:45:02', 1),
(18, 0, 14, 'AXZax', '2024-09-30 12:45:13', 1),
(19, 0, 14, '<br>\n<b>Warning</b>:  move_uploaded_file(upload/uiu.jpg): Failed to open stream: No such file or directory in <b>C:\\xampp\\htdocs\\Final_database\\Chat\\upload.php</b> on line <b>16</b><br>\n<br>\n<b>Warning</b>:  move_uploaded_file(): Unable to move \"C:\\xampp\\tmp\\php532B.tmp\" to \"upload/uiu.jpg\" in <b>C:\\xampp\\htdocs\\Final_database\\Chat\\upload.php</b> on line <b>16</b><br>', '2024-09-30 15:26:25', 1),
(20, 0, 14, '<p><img src=\"upload/Screenshot 2024-09-26 131252.png\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><br>', '2024-09-30 15:28:49', 1),
(42, 0, 14, 'cas', '2024-10-01 07:59:29', 1),
(43, 0, 14, '<p><img src=\"upload/Screenshot 2024-09-27 021433.png\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><br>', '2024-10-01 08:00:38', 1),
(44, 14, 4, 'hii', '2024-10-01 08:06:20', 0),
(45, 0, 4, 'jii', '2024-10-01 08:06:59', 1),
(46, 4, 14, 'how are you?', '2024-10-01 08:07:17', 0),
(47, 14, 4, 'i am fine . thak you', '2024-10-01 08:07:47', 0),
(48, 0, 14, '<p><img src=\"upload/Screenshot 2024-09-27 021433.png\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><br>', '2024-10-01 08:19:19', 1),
(49, 4, 14, 'hii', '2024-10-01 09:11:35', 0),
(50, 14, 4, 'hii', '2024-10-03 08:54:25', 0),
(51, 0, 14, '<p><img src=\"upload/Screenshot 2024-10-04 181749.png\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><br>', '2024-10-04 16:11:22', 1),
(52, 0, 14, 'xwx', '2024-10-05 21:27:26', 1),
(53, 0, 14, '<p><img src=\"upload/uiu2.0.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><br>', '2024-10-05 21:27:36', 1),
(54, 1, 14, 'qsqs', '2024-10-05 21:27:45', 1),
(55, 0, 14, '<p><img src=\"upload/Screenshot 2024-10-04 114235.png\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><br>', '2024-10-06 15:41:10', 1),
(56, 1, 22, 'gdgd', '2024-10-08 09:42:55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE `code` (
  `submit_name` varchar(100) DEFAULT NULL,
  `source_code` longtext DEFAULT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `code`
--

INSERT INTO `code` (`submit_name`, `source_code`, `id`) VALUES
('tarek200', '#include <stdio.h>\r\nint main() {    \r\n\r\n    int number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 1),
('tarek', '#include <iostream>  \r\nusing namespace std;  \r\nint main() {  \r\n    int num1, num2, sum;  \r\n    cin >> num1;  \r\n    cin >> num2;  \r\n    sum = num1 + num2;  \r\n    cout << sum;  \r\n    return 0;  \r\n}  ', 2),
('tarek', '#include <iostream>  \r\nusing namespace std;  \r\nint main() {  \r\n    int num1, num2, sum;  \r\n    cin >> num1;  \r\n    cin >> num2;  \r\n    sum = num1 + num2;  \r\n    cout << sum;  \r\n    return 0;  \r\n}  ', 3),
('tarek', '#include <iostream>  \r\nusing namespace std;  \r\nint main() {  \r\n    int num1, num2, sum;  \r\n    cin >> num1;  \r\n    cin >> num2;  \r\n    sum = num1 + num2;  \r\n    cout << sum;  \r\n    return 0;  \r\n}  ', 4),
('tarek', '#include <iostream>  \r\nusing namespace std;  \r\nint main() {  \r\n    int num1, num2, sum;  \r\n    cin >> num1;  \r\n    cin >> num2;  \r\n    sum = num1 + num2;  \r\n    cout << sum;  \r\n    return 0;  \r\n}  ', 5),
('tarek', '#include<bits/stdc++.h> \r\nusing namespace std;  \r\nint main() {  \r\n    int num1, num2, sum;  \r\n    cin >> num1;  \r\n    cin >> num2;  \r\n    sum = num1 + num2;  \r\n    cout << sum;  \r\n    return 0;  \r\n}  ', 6),
('tarek', '#include <iostream>  \r\nusing namespace std;  \r\nint main() {  \r\n    int num1, num2, sum;  \r\n    cin >> num1;  \r\n    cin >> num2;  \r\n    sum = num1 + num2;  \r\n    cout << sum;  \r\n    return 0;  \r\n}  ', 7),
('tarek200', '#include <stdio.h>\r\nint main() {    \r\n\r\n    int number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 8),
('tarek', '#include <stdio.h>\r\nint main() {    \r\n\r\n    int number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 9),
('gg', '#include <stdio.h>\r\nint main() {    \r\n\r\n    int number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 10),
('gg', '#include <stdio.h>\r\nint main() {    \r\n\r\n    int number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 - number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 11),
('gg', '#include <stdio.h>\r\nint main() {    \r\n\r\n    int number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum*-1);\r\n    return 0;\r\n}\r\n', 12),
('gg', '#include <stdio.h>\r\nint main() {    \r\n\r\n    int number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 - number2;      \r\n    \r\n    printf(\"%d\", sum*-1);\r\n    return 0;\r\n}\r\n', 13),
('Mehbuba Khan', '#include <stdio.h>\r\nint main() {    \r\n\r\n    int number1, number2, sum;\r\n    \r\n    printf(\"Enter two integers: \");\r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n    // calculate the sum\r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d + %d = %d\", number1, number2, sum);\r\n    return 0;\r\n}', 14),
('Mehbuba Khan', '', 15),
('Mehbuba Khan', '', 16),
('Mehbuba Khan', '', 17),
('Mehbuba Khan', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\nitn t ;\r\nwhile(t--){\r\n   int n.k\r\ncin >> n >> k;\r\ncout << n-k << nl;\r\n}\r\n}', 18),
('Mehbuba Khan', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\nitn t ;\r\nwhile(t--){\r\n   int n.k\r\ncin >> n >> k;\r\ncout << n-k <<endl;\r\n}\r\n}', 19),
('Mehbuba Khan', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\nint t ;\r\nwhile(t--){\r\n   int n,k\r\ncin >> n >> k;\r\ncout << n-k <<endl;\r\n}\r\n}', 20),
('Mehbuba Khan', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\nint t ;\r\nwhile(t--){\r\n   int n,k;\r\ncin >> n >> k;\r\ncout << n-k <<endl;\r\n}\r\n}', 21),
('Mehbuba Khan', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\nint t ;\r\nwhile(t--){\r\n   int n,k;\r\ncin >> n >> k;\r\ncout << n-k <<endl;\r\n}\r\n}', 22),
('Mehbuba Khan', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\nint t ;\r\nwhile(t--){\r\n   int n,k;\r\ncin >> n >> k;\r\ncout << n-k <<endl;\r\n}\r\n}', 23),
('Mehbuba Khan', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\nint t ;\r\nwhile(t--){\r\n   int n,k;\r\ncin >> n >> k;\r\ncout << n-k <<endl;\r\n}\r\n}', 24),
('Mehbuba Khan', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\nint t ;\r\nwhile(t--){\r\n   int n,k;\r\ncin >> n >> k;\r\ncout << n-k <<endl;\r\n}\r\n}', 25),
('Mehbuba Khan', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\nint t ;\r\nwhile(t--){\r\n   int n,k;\r\ncin >> n >> k;\r\ncout << n-k <<endl;\r\n}\r\n}', 26),
('Mehbuba Khan', '', 27),
('Mehbuba Khan', '', 28),
('Mehbuba Khan', '', 29),
('Mehbuba Khan', '', 30),
('Mehbuba Khan', '', 31),
('Mehbuba Khan', '', 32),
('Mehbuba Khan', '', 33),
('Mehbuba Khan', '', 34),
('Mehbuba Khan', '', 35),
('Mehbuba Khan', '', 36),
('Mehbuba Khan', '', 37),
('Mehbuba Khan', '', 38),
('Mehbuba Khan', '', 39),
('Mehbuba Khan', '', 40),
('Mehbuba Khan', '', 41),
('Mehbuba Khan', '', 42),
('Mehbuba Khan', '', 43),
('Mehbuba Khan', '', 44),
('Mehbuba Khan', '', 45),
('Mehbuba Khan', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 46),
('Mehbuba Khan', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 47),
('Mehbuba Khan', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 48),
('Mehbuba Khan', '', 49),
('Mehbuba Khan', '', 50),
('Mehbuba Khan', '', 51),
('Mehbuba Khan', '', 52),
('Mehbuba Khan', '', 53),
('Mehbuba Khan', '', 54),
('Mehbuba Khan', '', 55),
('Mehbuba Khan', '', 56),
('Mehbuba Khan', '', 57),
('Mehbuba Khan', '', 58),
('Mehbuba Khan', '', 59),
('Mehbuba Khan', '', 60),
('Mehbuba Khan', '', 61),
('Mehbuba Khan', '', 62),
('Mehbuba Khan', '', 63),
('Mehbuba Khan', '', 64),
('Mehbuba Khan', '', 65),
('Mehbuba Khan', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 66),
('Tarek Rahman', '', 67),
('Mehbuba Khan', '#include<stdio.h>\r\n\r\nint main() {\r\n    int t, n, k;\r\n    scanf(\"%d\", &t); // Read the number of test cases\r\n\r\n        scanf(\"%d %d\", &n, &k);  // Input for n and k\r\n        printf(\"%d\n\", n - k*-1);   // Output the result\r\n    \r\n    \r\n    return 0;\r\n}\r\n', 68),
('MH', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\n    int t; // Number of test cases\r\n    cin >> t; // Read number of test cases\r\n\r\n    while (t--) {\r\n        int n; // Variable to hold the number\r\n        cin >> n; // Read the number for the current test case\r\n\r\n        // Calculate and output the result\r\n        cout << n / 10 + n % 10 << endl; // nl is equivalent to endl in C++\r\n    }\r\n\r\n    return 0;\r\n}\r\n', 69),
('MH', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\n  \r\n        int n;\r\n        cin >> n; \r\n        cout << n / 10 + n % 10 << endl;\r\n    \r\n\r\n    return 0;\r\n}\r\n', 70),
('MH', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\n  \r\n     long long  n;\r\n    cin >> n; \r\n    long long  ans = 0;\r\n    while (n) {\r\n        ans += n % 10;\r\n        n /= 10; \r\n    }\r\n \r\n    cout << ans << \"\n\";\r\n    \r\n\r\n    return 0;\r\n}\r\n', 71),
('MH', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\n    int t; // Number of test cases\r\n    cin >> t; // Read number of test cases\r\n\r\n    while (t--) {\r\n        int n; \r\n        cin >> n; \r\n        cout << n / 10 + n % 10 ;\r\n    }\r\n\r\n    return 0;\r\n}\r\n', 72),
('MH', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\n    \r\n  \r\n        int n; \r\n        cin >> n; \r\n        cout << n / 10 + n % 10 ;\r\n  \r\n\r\n    return 0;\r\n}\r\n', 73),
('MH', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 74),
('MH', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\n    \r\n  \r\n        int n; \r\n        cin >> n; \r\n        cout << n / 10 + n % 10 ;\r\n  \r\n\r\n    return 0;\r\n}\r\n', 75),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 76),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 77),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 78),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 79),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 80),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 81),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 82),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 83),
('Tarek Rahman', 'axax', 84),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 85),
('Tarek Rahman', '', 86),
('MH', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 87),
('MH', '', 88),
('Tarek Rahman', '', 89),
('Tarek Rahman', '', 90),
('Tarek Rahman', '', 91),
('Tarek Rahman', '', 92),
('Tarek Rahman', '', 93),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 94),
('Tarek Rahman', '', 95),
('Tarek Rahman', '', 96),
('Tarek Rahman', '', 97),
('Tarek Rahman', '', 98),
('Tarek Rahman', '', 99),
('Tarek Rahman', '', 100),
('Tarek Rahman', '', 101),
('Tarek Rahman', '', 102),
('MH', '', 103),
('MH', '', 104),
('MH', '', 105),
('MH', '', 106),
('Tarek Rahman', '', 107),
('Tarek Rahman', '', 108),
('Tarek Rahman', '', 109),
('Tarek Rahman', '', 110),
('Tarek Rahman', '', 111),
('Tarek Rahman', '', 112),
('MH', '', 113),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 114),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 115),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 116),
('MH', '', 117),
('Tarek Rahman', '', 118),
('Tarek Rahman', '', 119),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 120),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 121),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 122),
('Tarek Rahman', '', 123),
('Tarek Rahman', '', 124),
('Tarek Rahman', '', 125),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 126),
('Tarek Rahman', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\n    \r\n  \r\n        int n; \r\n        cin >> n; \r\n        cout << n / 10 + n % 10 ;\r\n  \r\n\r\n    return 0;\r\n}\r\n', 127),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = 2*number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 128),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 129),
('Tarek Rahman', '#include <stdio.h>\r\n\r\nint main() {\r\n    int t; // number of test cases\r\n    scanf(\"%d\", &t); // input the number of test cases\r\n\r\n    for (int i = 0; i < t; i++) {\r\n        long long number1, number2, sum;\r\n        \r\n        // Input two numbers for each test case\r\n        scanf(\"%lld %lld\", &number1, &number2);\r\n\r\n        // Calculate the sum\r\n        sum = 2*number1 + number2;\r\n\r\n        // Output the result for each test case\r\n        printf(\"%lld\n\", sum);\r\n    }\r\n\r\n    return 0;\r\n}\r\n', 130),
('Tarek Rahman', '#include <stdio.h>\r\n\r\nint main() {\r\n    int t; // number of test cases\r\n    scanf(\"%d\", &t); // input the number of test cases\r\n\r\n    for (int i = 0; i < t; i++) {\r\n        long long number1, number2, sum;\r\n        \r\n        // Input two numbers for each test case\r\n        scanf(\"%lld %lld\", &number1, &number2);\r\n\r\n        // Calculate the sum\r\n        sum = 2*number1 + number2;\r\n\r\n        // Output the result for each test case\r\n        printf(\"%lld\", sum);\r\n    }\r\n\r\n    return 0;\r\n}\r\n', 131),
('MH', '#include <stdio.h>\r\n\r\nint main() {\r\n    int t; // number of test cases\r\n    scanf(\"%d\", &t); // input the number of test cases\r\n\r\n    for (int i = 0; i < t; i++) {\r\n        long long number1, number2, sum;\r\n        \r\n        // Input two numbers for each test case\r\n        scanf(\"%lld %lld\", &number1, &number2);\r\n\r\n        // Calculate the sum\r\n        sum = 2*number1 + number2;\r\n\r\n        // Output the result for each test case\r\n        printf(\"%lld \n\", sum);\r\n    }\r\n\r\n    return 0;\r\n}\r\n', 132),
('MH', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\n    int t; // number of test cases\r\n    cin >> t; // input the number of test cases\r\n\r\n    for (int i = 0; i < t; i++) {\r\n        long long number1, number2, sum;\r\n        \r\n        // Input two numbers for each test case\r\n        cin >> number1 >> number2;\r\n\r\n        // Calculate the sum\r\n        sum = 2 * number1 + number2;\r\n\r\n        // Output the result for each test case\r\n        cout << sum << endl;\r\n    }\r\n\r\n    return 0;\r\n}\r\n', 133),
('MH', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\n    \r\n        long long number1, number2, sum;\r\n        \r\n        // Input two numbers for each test case\r\n        cin >> number1 >> number2;\r\n\r\n        sum =  number1 + number2;\r\n\r\n        cout << sum ;\r\n   \r\n\r\n    return 0;\r\n}\r\n', 134),
('Nafi Ahmed', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\n    \r\n        long long number1, number2, sum;\r\n        \r\n        // Input two numbers for each test case\r\n        cin >> number1 >> number2;\r\n\r\n        sum =  number1 + number2;\r\n\r\n        cout << sum ;\r\n   \r\n\r\n    return 0;\r\n}\r\n', 135),
('Nafi Ahmed', '#include <iostream>\r\nusing namespace std;\r\n\r\nint main() {\r\n    \r\n        long long number1, number2, sum;\r\n        \r\n        // Input two numbers for each test case\r\n        cin >> number1 >> number2;\r\n\r\n        sum =  number1 + number2;\r\n\r\n        cout << sum ;\r\n   \r\n\r\n    return 0;\r\n}\r\n', 136);

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `submit_name` varchar(50) DEFAULT NULL,
  `source_code` longtext DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`submit_name`, `source_code`, `id`) VALUES
('tarek', '#include <stdio.h>\r\nint main() {    \r\n\r\n    int number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 1),
('tarek', '#include <stdio.h>\r\nint main() {    \r\n\r\n    int number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 2),
('tarek', '#include <stdio.h>\r\nint main() {    \r\n\r\n    int number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 3),
('gg', '#include <stdio.h>\r\nint main() {    \r\n\r\n    int number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 4),
('gg', '#include <stdio.h>\r\nint main() {    \r\n\r\n    int number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1 &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 5),
('gg', '#include <stdio.h>\r\nint main() {    \r\n\r\n    int number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1 ,&number2);\r\n\r\n   \r\n    sum = number1 - number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 6),
('jisan', '#include <stdio.h>\r\nint main() {    \r\n\r\n    int number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 7),
('jisan', '#include <stdio.h>\r\nint main() {    \r\n\r\n    int number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2,;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 8),
('jisan', '#include <stdio.h>\r\nint main() {    \r\n\r\n    int number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 9),
('jisan', '#include <stdio.h>\r\nint main() {    \r\n\r\n    flot number1, number2, sum;\r\n   \r\n    scanf(\"%f %f\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%f\", sum);\r\n    return 0;\r\n}\r\n', 10),
('jisan', '#include <stdio.h>\r\nint main() {    \r\n\r\n    float number1, number2, sum;\r\n   \r\n    scanf(\"%f %f\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%f\", sum);\r\n    return 0;\r\n}\r\n', 11),
('jisan', '#include <stdio.h>\r\nint main() {    \r\n\r\n    float number1, number2, sum;\r\n   \r\n    scanf(\"%d %f\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%f\", sum);\r\n    return 0;\r\n}\r\n', 12),
('jisan', '#include <stdio.h>\r\nint main() {    \r\n\r\n    float number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 13),
('jisan', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 14),
('jisan', '', 15),
('jisan', '', 16),
('MH', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 17),
('MH', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 18),
('MH', '', 19),
('MH', '', 20),
('MH', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 21),
('Mehbuba Khan', 'import java.util.Scanner; // Import the Scanner class\r\n\r\nclass MyClass {\r\n  public static void main(String[] args) {\r\n    int x, y, sum;\r\n    Scanner myObj = new Scanner(System.in); // Create a Scanner object\r\n    System.out.println(\"Type a number:\");\r\n    x = myObj.nextInt(); // Read user input\r\n\r\n    System.out.println(\"Type another number:\");\r\n    y = myObj.nextInt(); // Read user input\r\n\r\n    sum = x + y;  // Calculate the sum of x + y\r\n    System.out.println(\"Sum is: \" + sum); // Print the sum\r\n  }\r\n} ', 22),
('Mehbuba Khan', '', 23),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 24),
('Tarek Rahman', '', 25),
('Tarek Rahman', '', 26),
('Tarek Rahman', '', 27),
('Tarek Rahman', '', 28),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 29),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 30),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 31),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 32),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 33),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 34),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 35),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 36),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 37),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 38),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 39),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 40),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 41),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 42),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 43),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 44),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 45),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 46),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 47),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 48),
('Tarek Rahman', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 49),
('Tarek Rahman', '', 50),
('Tarek Rahman', '', 51),
('Tarek Rahman', '', 52),
('Mehbuba Khan', '#include <stdio.h>\r\nint main() {    \r\n\r\n    long long number1, number2, sum;\r\n   \r\n    scanf(\"%d %d\", &number1, &number2);\r\n\r\n   \r\n    sum = number1 + number2;      \r\n    \r\n    printf(\"%d\", sum);\r\n    return 0;\r\n}\r\n', 53),
('Tarek Rahman', '#include <iostream>\r\nusing namespace std;\r\nint main(){\r\ncout << \"Prepared yourself for jail\" ;\r\n}', 54),
('Tarek Rahman', '#include <iostream>\r\nusing namespace std;\r\nint main(){\r\ncout << \"Prepared yourself for jail\" ;\r\n}', 55);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `commenter_name` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `commenter_name`, `content`, `date_created`) VALUES
(4, 1, 'Tarek Rahman', 'ss', '2024-10-02 16:41:28'),
(58, 58, 'MH', '4tg4t4', '2024-10-07 06:24:01');

-- --------------------------------------------------------

--
-- Table structure for table `contest_requests`
--

CREATE TABLE `contest_requests` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `contest_name` varchar(255) NOT NULL,
  `status` enum('Pending','Accepted','Rejected','Reviewing') DEFAULT 'Pending',
  `request_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `contest_detail` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contest_requests`
--

INSERT INTO `contest_requests` (`id`, `username`, `contest_name`, `status`, `request_date`, `contest_detail`) VALUES
(11, 'gg', 'contest 1', 'Accepted', '2024-09-09 21:28:30', 'egvsgsfbfbfdnc '),
(14, 'jisan', 'UIU  OJ Round 10', 'Pending', '2024-09-13 23:09:52', 'This round made by Tarek. who are student of UIU and this is beginner contest who are study in 1 to 4th trimester.'),
(15, 'MH', 'contest 1', 'Accepted', '2024-09-22 00:36:50', 'xwscxwx'),
(16, 'Mehbuba Khan', 'CodeCampus Programming Contest', 'Accepted', '2024-10-06 18:44:02', 'CodeCampus Programming Contest for all of students organised by CodeCampus. It aims to inspire every students and develop their skills in the domain of problem solving.');

-- --------------------------------------------------------

--
-- Table structure for table `element`
--

CREATE TABLE `element` (
  `id` int(11) DEFAULT NULL,
  `cname` varchar(100) DEFAULT NULL,
  `pbname` varchar(400) DEFAULT NULL,
  `pbdes` longtext DEFAULT NULL,
  `pbauthor` varchar(100) DEFAULT NULL,
  `tc` longtext DEFAULT NULL,
  `output` longtext DEFAULT NULL,
  `uoutput` longtext DEFAULT NULL,
  `pbid` int(12) NOT NULL,
  `tlimit` double(100,2) DEFAULT 3.00
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `element`
--

INSERT INTO `element` (`id`, `cname`, `pbname`, `pbdes`, `pbauthor`, `tc`, `output`, `uoutput`, `pbid`, `tlimit`) VALUES
(1, 'UIU ROUND 1', 'sum', 'do sum a and b?', 'tarek', '2 3', '5', '', 1, 1.00),
(1, 'UIU OJ Round 1(Div. 2)', 'Tarek Sum', 'Do sum a and b?\r\n\r\nTest Cases\r\n3 3\r\n\r\nExpected Output\r\n6', 'Tarek', '4 5', '9', '9', 2, 1.00),
(10, 'uiu Round 10', 'sum hgfndzg', 'do sub a-b\r\n\r\n1 2\r\n1\r\n3 2\r\n-1', 'jisan', '1 10', '9', '11', 10, 2.00),
(5, 'tarek round', 'Tarek Sum2', 'sum a b\r\n3 2\r\n5', 'MH', '3 2', '5', '5', 14, 1.00),
(5, 'tarek round', 'A - A+B Again?', 'Given a two-digit positive integer n, find the sum of its digits.\r\n\r\nInput\r\nThe first line contains an integer t (1 ? t ?90) — the number of test cases.\r\nThe only line of each test case contains a single two-digit positive integer n(10 ? n ?99).\r\n\r\nOutput\r\nFor each test case, output a single integer — the sum of the digits of n\r\n\r\nExample\r\nInput                                                      Output\r\n8                                                             14\r\n77                                                            3\r\n21                                                            4\r\n40                                                            7\r\n34                                                           10\r\n19                                                           12\r\n84                                                            1\r\n10                                                           18\r\n99\r\n\r\n', 'MH', '10', '1', '1', 15, 1.00),
(5, 'tarek round', 'Tarek Sum444', 'sxSX', 'Tarek Rahman', 'axax', 'sxsx', '', 18, 1.00),
(182, 'UIUOJ Programming Contest', 'A - SUM', 'You are given two integers a and b. Print a + b\r\n.Input\r\nThe only line of the input contains integers a and b (100  <= a, b  <= 100).\r\n\r\nOutput\r\nPrint a + b\r\n.', 'Md. Tarek Hasan', '2 3\r\n', '5', '5', 20, 2.00),
(182, 'UIUOJ Programming Contest', 'B - AI vs Programmers Programming Challenge', 'A group of programmers are challenging an AI bot to a programming battle. The AI bot claims to be superior to human programmers and that they will eventually lose their jobs to it. The programmers are confident in their abilities and want to prove the AI bot wrong.\r\n\r\nThe programming battle will consist of n rounds, where in each round, the programmers and the AI bot will be given a programming problem to solve. The winner of the round will be the one who solves the problem faster.\r\n\r\nWrite a program to determine the winner of the programming battle.\r\n\r\nInput\r\n\r\nThe first line of input will contain an integer N (1  <= n <= 1000), the number of rounds in the programming battle.\r\nThe next n lines will contain two integers t and ai (1 <= t, a <= 108), the time taken by the programmers and the AI bot respectively to solve the programming problem in the it\'d round.\r\n\r\nOutput\r\n\r\n\"Programmers win!\" if the programmers solve more problems faster than the AI bot.\r\n\r\n\"AI bot wins!\" if the AI bot solve more problems faster than the programmers.\r\n\r\n\"It\'s a tie!\" if both programmers and the AI bot solve an equal number of problems in the same amount of time.\r\n\r\nExamples\r\nInput : \r\n20\r\n1 2\r\n100 200\r\n500 700\r\n700 100\r\n100 500\r\n200 1000\r\n500 5000\r\n800 48005\r\n20 2000000\r\n5 8888\r\n50 10000\r\n548 549\r\n1001 1000\r\n999 1000\r\n01 02\r\n50 55\r\n101 102\r\n100 100000000\r\n50 501\r\n1 2\r\n2 1\r\nOutput : \r\nProgrammers win!', 'Md. Tarek Hasan', '10\r\n1 100\r\n50 200\r\n50 500 \r\n1 3\r\n2 1\r\n4 3\r\n400 3\r\n500 3\r\n1000 10\r\n10 100', 'It\'s a tie!', '', 21, 1.00),
(182, 'UIUOJ Programming Contest', 'C - The String Has a Target', 'You are given a string of lowercase English letters. Your task is to find the longest substring that contains exactly K distinct characters.\r\n\r\nInput\r\nThe first line of input contains two integers N and K (1 <= N <= 105, 1 <=  K <= 26) - the length of the string and the number of distinct characters required in the substring. The second line contains a string s of length N (1 <= |s| <= 105) consisting of lowercase English letters.\r\n\r\nOutput\r\nPrint a single integer - the length of the longest substring that contains exactly K distinct characters. If no such substring exists, print 0.\r\n\r\nExamples\r\n\r\nInput :\r\n10 2\r\naabacbebea\r\n\r\nOutput\r\n4\r\n\r\nInput : \r\n8 4\r\nabcbdeaa\r\n\r\nOutput : \r\n5', 'Md. Tarek Hasan', '6 2\r\nabcbca', '4', '', 22, 2.00),
(182, ' UIUOJ Programming Contest', 'D - Make Sum', 'print a -b?\r\n\r\ninput : \r\n3 2\r\noutput: \r\n1', 'Md. Tarek Hasan', '3 2', '1', '', 23, 1.00);

-- --------------------------------------------------------

--
-- Table structure for table `like_list`
--

CREATE TABLE `like_list` (
  `id` int(11) NOT NULL,
  `session_name` text NOT NULL,
  `post_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `like_list`
--

INSERT INTO `like_list` (`id`, `session_name`, `post_id`) VALUES
(1, 'MH', 1),
(21, 'Tarek Rahman', 1),
(84, 'Tarek Rahman', 58),
(85, 'Tarek Rahman', 57),
(88, 'Mehbuba Khan', 57),
(91, 'MH', 58);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `id`, `last_activity`, `is_type`) VALUES
(1, 9, '2024-09-28 00:05:02', 'no'),
(2, 9, '2024-09-28 13:24:47', 'no'),
(3, 9, '2024-09-28 13:25:16', 'no'),
(4, 13, '2024-09-28 13:27:29', 'no'),
(5, 9, '2024-09-28 13:30:43', 'no'),
(6, 9, '2024-09-28 13:31:26', 'no'),
(7, 13, '2024-09-28 13:40:32', 'no'),
(8, 9, '2024-09-28 13:41:14', 'no'),
(9, 13, '2024-09-28 13:42:28', 'no'),
(10, 8, '2024-09-29 06:55:03', 'no'),
(11, 8, '2024-09-29 10:55:49', 'no'),
(12, 8, '2024-09-29 11:40:39', 'no'),
(13, 8, '2024-09-29 11:51:13', 'no'),
(14, 14, '2024-09-29 12:08:56', 'no'),
(15, 8, '2024-09-29 12:48:13', 'no'),
(16, 14, '2024-09-29 13:41:45', 'no'),
(17, 8, '2024-09-29 18:55:57', 'no'),
(18, 14, '2024-09-29 19:50:16', 'no'),
(19, 4, '2024-09-30 10:35:26', 'no'),
(20, 14, '2024-09-30 15:26:48', 'no'),
(21, 14, '2024-09-30 15:30:31', 'no'),
(22, 4, '2024-09-30 18:43:30', 'no'),
(23, 14, '2024-09-30 19:15:56', 'no'),
(24, 14, '2024-10-01 02:59:47', 'no'),
(25, 4, '2024-10-01 03:01:47', 'no'),
(26, 14, '2024-10-01 09:12:11', 'no'),
(27, 4, '2024-10-01 09:25:15', 'no'),
(28, 14, '2024-10-01 09:39:49', 'no'),
(29, 14, '2024-10-02 13:52:40', 'no'),
(30, 14, '2024-10-02 15:15:39', 'no'),
(31, 4, '2024-10-02 18:45:56', 'no'),
(32, 4, '2024-10-02 20:01:20', 'no'),
(33, 4, '2024-10-02 20:55:47', 'no'),
(34, 14, '2024-10-03 07:48:50', 'no'),
(35, 14, '2024-10-03 07:54:09', 'no'),
(36, 14, '2024-10-03 08:54:38', 'no'),
(37, 4, '2024-10-03 08:54:39', 'no'),
(38, 14, '2024-10-03 09:25:13', 'no'),
(39, 4, '2024-10-03 09:47:05', 'no'),
(40, 14, '2024-10-03 09:55:06', 'no'),
(41, 4, '2024-10-03 10:11:22', 'no'),
(42, 19, '2024-10-04 16:34:15', 'no'),
(43, 14, '2024-10-05 22:04:24', 'no'),
(44, 14, '2024-10-06 13:36:56', 'no'),
(45, 14, '2024-10-06 15:41:15', 'no'),
(46, 19, '2024-10-06 17:09:44', 'no'),
(47, 8, '2024-10-06 17:22:13', 'no'),
(48, 15, '2024-10-06 17:26:12', 'no'),
(49, 8, '2024-10-06 17:26:50', 'no'),
(50, 19, '2024-10-06 17:27:35', 'no'),
(51, 8, '2024-10-06 21:54:41', 'no'),
(52, 4, '2024-10-07 03:45:10', 'no'),
(53, 14, '2024-10-07 03:45:53', 'no'),
(54, 19, '2024-10-07 04:22:19', 'no'),
(55, 4, '2024-10-07 05:28:21', 'no'),
(56, 4, '2024-10-07 06:16:27', 'no'),
(57, 4, '2024-10-07 06:24:34', 'no'),
(58, 4, '2024-10-07 06:33:47', 'no'),
(59, 19, '2024-10-07 06:35:02', 'no'),
(60, 4, '2024-10-07 18:06:16', 'no'),
(61, 14, '2024-10-08 03:31:16', 'no'),
(62, 14, '2024-10-08 07:39:20', 'no'),
(63, 19, '2024-10-08 08:07:15', 'no'),
(64, 4, '2024-10-08 08:09:14', 'no'),
(65, 19, '2024-10-08 08:12:57', 'no'),
(66, 22, '2024-10-08 08:20:56', 'no'),
(67, 22, '2024-10-08 08:29:10', 'no'),
(68, 22, '2024-10-08 08:31:56', 'no'),
(69, 22, '2024-10-08 08:45:29', 'no'),
(70, 22, '2024-10-08 09:43:26', 'no'),
(71, 19, '2024-10-24 12:58:00', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `sender_id`, `receiver_id`, `title`, `message`, `is_read`, `created_at`) VALUES
(1, 1, 4, 'Zz X', 'z     scsaaxasx', 1, '2024-09-30 17:36:39'),
(2, 1, 4, 'Zz X', 'z     scsaaxasx', 1, '2024-09-30 17:56:26'),
(3, 1, 7, 'qsq', 'qsqs', 0, '2024-09-30 18:00:57'),
(4, 1, 14, 'swsw', 'xqaxw', 1, '2024-09-30 18:28:59'),
(5, 1, 14, 'qs', 'qss', 1, '2024-09-30 18:35:44'),
(6, 1, 4, 'scq', 'cqca', 1, '2024-09-30 18:42:57'),
(7, 1, 14, 'ki korish', 'are tark ki korish', 1, '2024-09-30 19:10:43'),
(9, 1, 14, 'vaa', 'asvas', 1, '2024-09-30 19:12:41'),
(10, 1, 14, 'asdvad', 'avav', 1, '2024-09-30 19:12:46'),
(11, 1, 14, 'vdsav', 'dvav', 1, '2024-09-30 19:12:50'),
(12, 1, 1, 'ww', 'wxdwx', 0, '2024-09-30 19:15:13'),
(13, 1, 2, 'ww', 'wxdwx', 0, '2024-09-30 19:15:13'),
(14, 1, 3, 'ww', 'wxdwx', 0, '2024-09-30 19:15:13'),
(15, 1, 4, 'ww', 'wxdwx', 1, '2024-09-30 19:15:13'),
(16, 1, 5, 'ww', 'wxdwx', 0, '2024-09-30 19:15:13'),
(17, 1, 6, 'ww', 'wxdwx', 0, '2024-09-30 19:15:13'),
(18, 1, 7, 'ww', 'wxdwx', 0, '2024-09-30 19:15:13'),
(19, 1, 8, 'ww', 'wxdwx', 1, '2024-09-30 19:15:13'),
(20, 1, 9, 'ww', 'wxdwx', 0, '2024-09-30 19:15:13'),
(21, 1, 10, 'ww', 'wxdwx', 0, '2024-09-30 19:15:13'),
(22, 1, 11, 'ww', 'wxdwx', 0, '2024-09-30 19:15:13'),
(23, 1, 12, 'ww', 'wxdwx', 0, '2024-09-30 19:15:13'),
(24, 1, 13, 'ww', 'wxdwx', 0, '2024-09-30 19:15:13'),
(25, 1, 14, 'ww', 'wxdwx', 1, '2024-09-30 19:15:13'),
(26, 1, 14, 'wdwdw', 'wcqc', 1, '2024-09-30 19:21:23'),
(27, 1, 14, 'CAC', 'SCAC AC', 1, '2024-09-30 19:26:03'),
(28, 1, 1, 'xwxs', 'sxsX', 0, '2024-09-30 19:30:08'),
(29, 1, 2, 'xwxs', 'sxsX', 0, '2024-09-30 19:30:08'),
(30, 1, 3, 'xwxs', 'sxsX', 0, '2024-09-30 19:30:08'),
(31, 1, 4, 'xwxs', 'sxsX', 1, '2024-09-30 19:30:08'),
(32, 1, 5, 'xwxs', 'sxsX', 0, '2024-09-30 19:30:08'),
(33, 1, 6, 'xwxs', 'sxsX', 0, '2024-09-30 19:30:08'),
(34, 1, 7, 'xwxs', 'sxsX', 0, '2024-09-30 19:30:08'),
(35, 1, 8, 'xwxs', 'sxsX', 1, '2024-09-30 19:30:08'),
(36, 1, 9, 'xwxs', 'sxsX', 0, '2024-09-30 19:30:08'),
(37, 1, 10, 'xwxs', 'sxsX', 0, '2024-09-30 19:30:08'),
(38, 1, 11, 'xwxs', 'sxsX', 0, '2024-09-30 19:30:08'),
(39, 1, 12, 'xwxs', 'sxsX', 0, '2024-09-30 19:30:08'),
(40, 1, 13, 'xwxs', 'sxsX', 0, '2024-09-30 19:30:08'),
(41, 1, 14, 'xwxs', 'sxsX', 1, '2024-09-30 19:30:08'),
(42, 1, 4, 'casva', 'savasv', 1, '2024-09-30 19:31:15'),
(43, 1, 1, 'xSX', 'SCAC', 0, '2024-09-30 19:37:56'),
(44, 1, 2, 'xSX', 'SCAC', 0, '2024-09-30 19:37:56'),
(45, 1, 3, 'xSX', 'SCAC', 0, '2024-09-30 19:37:56'),
(46, 1, 4, 'xSX', 'SCAC', 1, '2024-09-30 19:37:56'),
(47, 1, 5, 'xSX', 'SCAC', 0, '2024-09-30 19:37:56'),
(48, 1, 6, 'xSX', 'SCAC', 0, '2024-09-30 19:37:56'),
(49, 1, 7, 'xSX', 'SCAC', 0, '2024-09-30 19:37:56'),
(50, 1, 8, 'xSX', 'SCAC', 1, '2024-09-30 19:37:56'),
(51, 1, 9, 'xSX', 'SCAC', 0, '2024-09-30 19:37:56'),
(52, 1, 10, 'xSX', 'SCAC', 0, '2024-09-30 19:37:56'),
(53, 1, 11, 'xSX', 'SCAC', 0, '2024-09-30 19:37:56'),
(54, 1, 12, 'xSX', 'SCAC', 0, '2024-09-30 19:37:56'),
(55, 1, 13, 'xSX', 'SCAC', 0, '2024-09-30 19:37:56'),
(56, 1, 14, 'xSX', 'SCAC', 1, '2024-09-30 19:37:56'),
(57, 1, 14, 'CQSCAS', 'SACASCS', 1, '2024-09-30 19:38:03'),
(58, 1, 1, 'szxsxaxa', 'axax', 0, '2024-10-01 08:20:47'),
(59, 1, 2, 'szxsxaxa', 'axax', 0, '2024-10-01 08:20:47'),
(60, 1, 3, 'szxsxaxa', 'axax', 0, '2024-10-01 08:20:47'),
(61, 1, 4, 'szxsxaxa', 'axax', 1, '2024-10-01 08:20:47'),
(62, 1, 5, 'szxsxaxa', 'axax', 0, '2024-10-01 08:20:47'),
(63, 1, 6, 'szxsxaxa', 'axax', 0, '2024-10-01 08:20:47'),
(64, 1, 7, 'szxsxaxa', 'axax', 0, '2024-10-01 08:20:47'),
(65, 1, 8, 'szxsxaxa', 'axax', 1, '2024-10-01 08:20:47'),
(66, 1, 9, 'szxsxaxa', 'axax', 0, '2024-10-01 08:20:47'),
(67, 1, 10, 'szxsxaxa', 'axax', 0, '2024-10-01 08:20:47'),
(68, 1, 11, 'szxsxaxa', 'axax', 0, '2024-10-01 08:20:47'),
(69, 1, 12, 'szxsxaxa', 'axax', 0, '2024-10-01 08:20:47'),
(70, 1, 13, 'szxsxaxa', 'axax', 0, '2024-10-01 08:20:47'),
(71, 1, 14, 'szxsxaxa', 'axax', 1, '2024-10-01 08:20:47'),
(72, 1, 14, 'ss', 'ss', 1, '2024-10-04 16:13:48'),
(73, 1, 14, 'd', 'd', 1, '2024-10-05 21:25:09'),
(74, 1, 14, 'xx', 'xxxx', 1, '2024-10-05 21:29:05'),
(75, 1, 1, '1swsw', 'xwxwxx', 0, '2024-10-05 21:32:44'),
(76, 1, 2, '1swsw', 'xwxwxx', 0, '2024-10-05 21:32:44'),
(77, 1, 3, '1swsw', 'xwxwxx', 0, '2024-10-05 21:32:44'),
(78, 1, 4, '1swsw', 'xwxwxx', 0, '2024-10-05 21:32:44'),
(79, 1, 5, '1swsw', 'xwxwxx', 0, '2024-10-05 21:32:44'),
(80, 1, 6, '1swsw', 'xwxwxx', 0, '2024-10-05 21:32:44'),
(81, 1, 7, '1swsw', 'xwxwxx', 0, '2024-10-05 21:32:44'),
(82, 1, 8, '1swsw', 'xwxwxx', 1, '2024-10-05 21:32:44'),
(83, 1, 9, '1swsw', 'xwxwxx', 0, '2024-10-05 21:32:44'),
(84, 1, 10, '1swsw', 'xwxwxx', 0, '2024-10-05 21:32:44'),
(85, 1, 11, '1swsw', 'xwxwxx', 0, '2024-10-05 21:32:44'),
(86, 1, 12, '1swsw', 'xwxwxx', 0, '2024-10-05 21:32:44'),
(87, 1, 13, '1swsw', 'xwxwxx', 0, '2024-10-05 21:32:44'),
(88, 1, 14, '1swsw', 'xwxwxx', 1, '2024-10-05 21:32:44'),
(89, 1, 15, '1swsw', 'xwxwxx', 1, '2024-10-05 21:32:44'),
(90, 1, 16, '1swsw', 'xwxwxx', 0, '2024-10-05 21:32:44'),
(91, 1, 17, '1swsw', 'xwxwxx', 0, '2024-10-05 21:32:44'),
(92, 1, 19, '1swsw', 'xwxwxx', 1, '2024-10-05 21:32:44'),
(93, 1, 20, '1swsw', 'xwxwxx', 0, '2024-10-05 21:32:44'),
(94, 1, 21, '1swsw', 'xwxwxx', 0, '2024-10-05 21:32:44'),
(95, 1, 22, '1swsw', 'xwxwxx', 0, '2024-10-05 21:32:44'),
(96, 1, 23, '1swsw', 'xwxwxx', 0, '2024-10-05 21:32:44'),
(97, 1, 1, 'zwxx', 'xwxx', 0, '2024-10-05 21:33:43'),
(98, 1, 2, 'zwxx', 'xwxx', 0, '2024-10-05 21:33:43'),
(99, 1, 3, 'zwxx', 'xwxx', 0, '2024-10-05 21:33:43'),
(100, 1, 4, 'zwxx', 'xwxx', 0, '2024-10-05 21:33:43'),
(101, 1, 5, 'zwxx', 'xwxx', 0, '2024-10-05 21:33:43'),
(102, 1, 6, 'zwxx', 'xwxx', 0, '2024-10-05 21:33:43'),
(103, 1, 7, 'zwxx', 'xwxx', 0, '2024-10-05 21:33:43'),
(104, 1, 8, 'zwxx', 'xwxx', 1, '2024-10-05 21:33:43'),
(105, 1, 9, 'zwxx', 'xwxx', 0, '2024-10-05 21:33:43'),
(106, 1, 10, 'zwxx', 'xwxx', 0, '2024-10-05 21:33:43'),
(107, 1, 11, 'zwxx', 'xwxx', 0, '2024-10-05 21:33:43'),
(108, 1, 12, 'zwxx', 'xwxx', 0, '2024-10-05 21:33:43'),
(109, 1, 13, 'zwxx', 'xwxx', 0, '2024-10-05 21:33:43'),
(110, 1, 14, 'zwxx', 'xwxx', 1, '2024-10-05 21:33:43'),
(111, 1, 15, 'zwxx', 'xwxx', 1, '2024-10-05 21:33:43'),
(112, 1, 16, 'zwxx', 'xwxx', 0, '2024-10-05 21:33:43'),
(113, 1, 17, 'zwxx', 'xwxx', 0, '2024-10-05 21:33:43'),
(114, 1, 19, 'zwxx', 'xwxx', 1, '2024-10-05 21:33:43'),
(115, 1, 20, 'zwxx', 'xwxx', 0, '2024-10-05 21:33:43'),
(116, 1, 21, 'zwxx', 'xwxx', 0, '2024-10-05 21:33:43'),
(117, 1, 22, 'zwxx', 'xwxx', 0, '2024-10-05 21:33:43'),
(118, 1, 23, 'zwxx', 'xwxx', 0, '2024-10-05 21:33:43'),
(119, 1, 14, 'ddd', 'dddddd', 1, '2024-10-05 21:55:59'),
(120, 1, 1, 'qwx', 'wxwxwxwxw', 0, '2024-10-05 21:58:03'),
(121, 1, 2, 'qwx', 'wxwxwxwxw', 0, '2024-10-05 21:58:03'),
(122, 1, 3, 'qwx', 'wxwxwxwxw', 0, '2024-10-05 21:58:03'),
(123, 1, 4, 'qwx', 'wxwxwxwxw', 0, '2024-10-05 21:58:03'),
(124, 1, 5, 'qwx', 'wxwxwxwxw', 0, '2024-10-05 21:58:03'),
(125, 1, 6, 'qwx', 'wxwxwxwxw', 0, '2024-10-05 21:58:03'),
(126, 1, 7, 'qwx', 'wxwxwxwxw', 0, '2024-10-05 21:58:03'),
(127, 1, 8, 'qwx', 'wxwxwxwxw', 1, '2024-10-05 21:58:03'),
(128, 1, 9, 'qwx', 'wxwxwxwxw', 0, '2024-10-05 21:58:03'),
(129, 1, 10, 'qwx', 'wxwxwxwxw', 0, '2024-10-05 21:58:03'),
(130, 1, 11, 'qwx', 'wxwxwxwxw', 0, '2024-10-05 21:58:03'),
(131, 1, 12, 'qwx', 'wxwxwxwxw', 0, '2024-10-05 21:58:03'),
(132, 1, 13, 'qwx', 'wxwxwxwxw', 0, '2024-10-05 21:58:03'),
(133, 1, 14, 'qwx', 'wxwxwxwxw', 1, '2024-10-05 21:58:03'),
(134, 1, 15, 'qwx', 'wxwxwxwxw', 1, '2024-10-05 21:58:03'),
(135, 1, 16, 'qwx', 'wxwxwxwxw', 0, '2024-10-05 21:58:03'),
(136, 1, 17, 'qwx', 'wxwxwxwxw', 0, '2024-10-05 21:58:03'),
(137, 1, 19, 'qwx', 'wxwxwxwxw', 1, '2024-10-05 21:58:03'),
(138, 1, 20, 'qwx', 'wxwxwxwxw', 0, '2024-10-05 21:58:03'),
(139, 1, 21, 'qwx', 'wxwxwxwxw', 0, '2024-10-05 21:58:03'),
(140, 1, 22, 'qwx', 'wxwxwxwxw', 0, '2024-10-05 21:58:03'),
(141, 1, 23, 'qwx', 'wxwxwxwxw', 0, '2024-10-05 21:58:03');

-- --------------------------------------------------------

--
-- Table structure for table `post_list`
--

CREATE TABLE `post_list` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_list`
--

INSERT INTO `post_list` (`id`, `title`, `author`, `content`, `date_created`, `date_updated`) VALUES
(1, 'First Blog', 'Mehbuba Khan', 'Hi ,Everyone recenty i am join UIUOj ', '2024-09-27 19:46:02', '2024-09-27 19:46:02'),
(57, 'Meta Hacker Cup Round - 1 2024 ', 'Tarek Rahman', 'Hi everyone ,\r\nI\' am exited to share that i participate in Meta Hacker Cup Round 1 and solve  2 problem out of 5 problems. I secured and official rank of 2430.\r\nHere is the link of Tutorial of those three problem :\r\nhttps://docs.google.com/document/d/1355N6cPcjAaJlpBPFLdi4yl_YZymMNZjLzl0o4f0JG4/edit?usp=sharing\r\n', '2024-10-06 04:20:36', '2024-10-06 04:20:36'),
(58, '\"Meta Hacker Cup 2024: AI Takes the Stage Alongside World’s Best Programmers\"', 'Tarek Rahman', 'Meta Hacker Cup 2024, an annual competitive programming contest hosted by Meta (formerly Facebook), has returned with some exciting updates. The competition continues to challenge programmers around the world with algorithmic problems that require sharp problem-solving skills.\r\n\r\nThe 2024 edition introduces an AI track, where participants can explore how AI techniques fare against traditional human problem-solving. This AI track offers an intriguing opportunity for machine learning enthusiasts to test the capabilities of state-of-the-art AI models on tasks similar to those given to human competitors (\r\nCodeforces\r\n).\r\n\r\nIn addition to the AI track, the traditional structure of the competition remains, consisting of multiple online rounds leading to a final round where the best performers compete for the top spots. The prize pool is highly competitive, and participants are eagerly looking forward to the custom-designed Hacker Cup T-shirts, a beloved tradition among contestants (\r\nCodeforces\r\n).\r\n\r\nFor anyone interested in participating or learning more, joining the Meta Hacker Cup Discord community is recommended, where you can engage with other contestants and stay updated on contest announcements​(\r\nCodeforces\r\n).', '2024-10-06 04:22:11', '2024-10-06 04:22:11'),
(59, 'Meta Hacker Cup 2024 Schedule — Introducing the Meta Hacker Cup AI Track', 'Nafi Ahmed', 'Meta Hacker Cup 2024\r\nMeta Hacker Cup is back! We’re excited to announce our schedule for our 2024 season, kicking off on September 20th!\r\n\r\nPractice Round: Fri. September 20th, 10am Pacific (72 hours)*\r\nRound 1: Sat. October 5th, 10am Pacific (3 hours)\r\nRound 2: Sat. October 19th, 10am Pacific (3 hours)\r\nRound 3: Sat. November 2nd, 10am Pacific (3 hours)\r\nFinals: Sat. December 7th, 6am Pacific (4 hours)\r\n*While optional, we recommend you participate in the Practice Round to familiarize yourself with our submission system before Round 1, when time will be at a premium.\r\n\r\nThe contest will be held on the Meta Hacker Cup site. Registration will open July 24th.\r\n\r\nYou can expect familiar prizes in the human track, including T-Shirts, Elite T-Shirts, and cash prizes for finalists. We’ll announce more prize details closer to Round 2.\r\n\r\nIntroducing the Meta Hacker Cup AI Track\r\nFor the first time this year, we\'ll also be running an AI track. In it, instead of solving problems manually, contestants will create an autonomous code generation system before the start of the contest. Each contestant can compete either in the human track or the AI track, but not both.\r\n\r\nWe hope this will create an interesting benchmark for how well state-of-the-art machines are able to perform against the best programmers in the world on complex programming tasks. If you\'re interested in competing in the AI track, you can join our discord server to learn more.\r\n\r\nUpdate: Round 1 is now complete. We had a flood of submissions during the last few minutes during which everyone refreshed the scoreboard and we appear to have exceeded our number of allotted DB connections. We\'re looking at resolving the issue now.\r\n\r\nUpdate 2: Looks like we only had a small handful of people hit the limit. Connections all have recovered.', '2024-10-08 14:47:34', '2024-10-08 14:47:34');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `contest_name` varchar(4000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `problem_name` varchar(400) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `question` text NOT NULL,
  `answer` text DEFAULT NULL,
  `when_asked` timestamp NOT NULL DEFAULT current_timestamp(),
  `answered_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `party` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rapl_oj_contest`
--

CREATE TABLE `rapl_oj_contest` (
  `id` int(11) NOT NULL,
  `cname` varchar(4000) DEFAULT NULL,
  `start_at` datetime DEFAULT NULL,
  `end_at` datetime DEFAULT NULL,
  `date_on` date DEFAULT NULL,
  `owner` varchar(100) DEFAULT 'shawon'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rapl_oj_contest`
--

INSERT INTO `rapl_oj_contest` (`id`, `cname`, `start_at`, `end_at`, `date_on`, `owner`) VALUES
(1, 'UIU OJ Round 1(Div. 2)', '2024-08-02 01:30:00', '2024-08-07 14:50:00', '2024-08-02', 'tarek'),
(5, 'tarek round', '2024-09-30 13:10:00', '2024-11-22 15:10:00', '2024-09-30', 'MH'),
(10, 'uiu Round 10', '2024-09-10 13:00:00', '2024-11-21 14:45:00', '2024-09-10', 'jisan'),
(182, 'UIUOJ Programming Contest', '2024-10-08 14:05:00', '2024-10-08 18:00:00', '2024-10-07', 'Md. Tarek Hasan');

-- --------------------------------------------------------

--
-- Table structure for table `solve`
--

CREATE TABLE `solve` (
  `sname` varchar(100) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `pbname` varchar(100) DEFAULT NULL,
  `solved` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `sid` int(100) NOT NULL,
  `sname` varchar(100) DEFAULT NULL,
  `verdict` varchar(50) DEFAULT NULL,
  `pbname` varchar(100) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `point` decimal(10,2) DEFAULT NULL,
  `submission_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `submission`
--

INSERT INTO `submission` (`sid`, `sname`, `verdict`, `pbname`, `cid`, `status`, `point`, `submission_time`) VALUES
(8, 'tarek200', 'Accepted', 'Tarek Sum', 1, 1, 19.97, '2024-10-04 22:36:29'),
(9, 'tarek', 'Accepted', 'Tarek Sum', 1, 1, 19.95, '2024-10-04 22:36:29'),
(10, 'gg', 'Wrong Answer', 'sum hgfndzg', 10, 0, -5.00, '2024-10-04 22:36:29'),
(11, 'gg', 'Wrong Answer', 'sum hgfndzg', 10, 0, -5.00, '2024-10-04 22:36:29'),
(12, 'gg', 'Wrong Answer', 'sum hgfndzg', 10, 0, -5.00, '2024-10-04 22:36:29'),
(13, 'gg', 'Accepted', 'sum hgfndzg', 10, 1, 181.22, '2024-10-04 22:36:29'),
(14, 'Mehbuba Khan', 'Wrong Answer', 'sum hgfndzg', 10, 0, -5.00, '2024-10-04 22:36:29'),
(15, 'Mehbuba Khan', 'Compilation Error', 'sum hgfndzg', 10, 0, -5.00, '2024-10-04 22:36:29'),
(23, 'Mehbuba Khan', 'Wrong Answer', 'sum hgfndzg', 10, 0, -5.00, '2024-10-04 22:36:29'),
(26, 'Mehbuba Khan', 'Wrong Answer', 'sum hgfndzg', 10, 0, -5.00, '2024-10-04 22:36:29'),
(37, 'Mehbuba Khan', 'Compilation Error', 'sum hgfndzg', 10, 0, -5.00, '2024-10-04 22:36:29'),
(39, 'Mehbuba Khan', 'Compilation Error', 'sum hgfndzg', 10, 0, -5.00, '2024-10-04 22:36:29'),
(48, 'Mehbuba Khan', 'Wrong Answer', 'sum hgfndzg', 10, 0, -5.00, '2024-10-04 22:36:29'),
(50, 'Mehbuba Khan', 'Compilation Error', 'sum hgfndzg', 10, 0, -5.00, '2024-10-04 22:36:29'),
(51, 'Mehbuba Khan', 'Compilation Error', 'sum hgfndzg', 10, 0, -5.00, '2024-10-04 22:36:29'),
(52, 'Mehbuba Khan', 'Compilation Error', 'sum hgfndzg', 10, 0, -5.00, '2024-10-04 22:36:29'),
(53, 'Mehbuba Khan', 'Compilation Error', 'sum hgfndzg', 10, 0, -5.00, '2024-10-04 22:36:29'),
(61, 'Mehbuba Khan', 'Compilation Error', 'sum hgfndzg', 10, 0, -5.00, '2024-10-04 22:36:29'),
(62, 'Mehbuba Khan', 'Compilation Error', 'sum hgfndzg', 10, 0, -5.00, '2024-10-04 22:36:29'),
(64, 'Mehbuba Khan', 'Compilation Error', 'sum hgfndzg', 10, 0, -5.00, '2024-10-04 22:36:29'),
(65, 'Mehbuba Khan', 'Compilation Error', 'sum hgfndzg', 10, 0, -5.00, '2024-10-04 22:36:29'),
(66, 'Mehbuba Khan', 'Wrong Answer', 'sum hgfndzg', 10, 0, -5.00, '2024-10-04 22:36:29'),
(67, 'Tarek Rahman', 'Compilation Error', 'sum hgfndzg', 10, 0, -5.00, '2024-10-04 22:36:29'),
(68, 'Mehbuba Khan', 'Wrong Answer', 'sum hgfndzg', 10, 0, -5.00, '2024-10-04 22:36:29'),
(69, 'MH', 'Wrong Answer', 'A - A+B Again?', 5, 0, -5.00, '2024-10-04 22:36:29'),
(70, 'MH', 'Wrong Answer', 'A - A+B Again?', 5, 0, -5.00, '2024-10-04 22:36:29'),
(71, 'MH', 'Wrong Answer', 'A - A+B Again?', 5, 0, -5.00, '2024-10-04 22:36:29'),
(72, 'MH', 'Wrong Answer', 'A - A+B Again?', 5, 0, -5.00, '2024-10-04 22:36:29'),
(73, 'MH', 'Accepted', 'A - A+B Again?', 5, 1, 3.68, '2024-10-04 22:36:29'),
(74, 'MH', 'Accepted', 'Tarek Sum2', 5, 1, 1.77, '2024-10-04 22:36:29'),
(124, 'Tarek Rahman', 'Compilation Error', 'Tarek Sum2', 5, 0, -5.00, '2024-10-04 22:36:29'),
(125, 'Tarek Rahman', 'Compilation Error', 'Tarek Sum444', 5, 0, -5.00, '2024-10-04 22:36:29'),
(126, 'Tarek Rahman', 'Accepted', 'Tarek Sum2', 5, 1, 1.75, '2024-10-04 22:36:29'),
(127, 'Tarek Rahman', 'Accepted', 'A - A+B Again?', 5, 1, 1.75, '2024-10-04 22:36:29'),
(128, 'Tarek Rahman', 'Wrong Answer', 'A - SUM', 182, 0, -5.00, '2024-10-07 10:20:55'),
(129, 'Tarek Rahman', 'Wrong Answer', 'A - SUM', 182, 0, -5.00, '2024-10-07 10:21:10'),
(130, 'Tarek Rahman', 'Wrong Answer', 'A - SUM', 182, 0, -5.00, '2024-10-07 10:26:38'),
(131, 'Tarek Rahman', 'Wrong Answer', 'A - SUM', 182, 0, -5.00, '2024-10-07 10:27:20'),
(132, 'MH', 'Wrong Answer', 'A - SUM', 182, 0, -5.00, '2024-10-08 14:09:30'),
(133, 'MH', 'Wrong Answer', 'A - SUM', 182, 0, -5.00, '2024-10-08 14:11:41'),
(134, 'MH', 'Accepted', 'A - SUM', 182, 1, 96.21, '2024-10-08 14:13:54'),
(136, 'Nafi Ahmed', 'Accepted', 'A - SUM', 182, 1, 58.91, '2024-10-08 15:41:34');

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

CREATE TABLE `submissions` (
  `sid` int(11) NOT NULL,
  `sname` varchar(50) DEFAULT NULL,
  `verdict` varchar(50) DEFAULT NULL,
  `pbname` varchar(500) DEFAULT NULL,
  `time` float(10,2) DEFAULT 0.00,
  `submission_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `submissions`
--

INSERT INTO `submissions` (`sid`, `sname`, `verdict`, `pbname`, `time`, `submission_time`) VALUES
(1, 'tarek', 'Accepted', 'Tarek Sum', 0.08, '2024-10-04 22:36:34'),
(2, 'tarek', 'Accepted', 'Tarek Sum', 0.06, '2024-10-04 22:36:34'),
(3, 'tarek', 'Accepted', 'Tarek Sum', 0.06, '2024-10-04 22:36:34'),
(4, 'gg', 'Accepted', 'Tarek Sum', 0.09, '2024-10-04 22:36:34'),
(6, 'gg', 'Wrong Answer', 'Tarek Sum', 0.09, '2024-10-04 22:36:34'),
(7, 'jisan', 'Accepted', 'Tarek Sum', 0.07, '2024-10-04 22:36:34'),
(8, 'jisan', 'Compilation Error', 'Tarek Sum', 0.00, '2024-10-04 22:36:34'),
(9, 'jisan', 'Accepted', 'Tarek Sum', 0.11, '2024-10-04 22:36:34'),
(11, 'jisan', 'Wrong Answer', 'Tarek Sum', 0.10, '2024-10-04 22:36:34'),
(12, 'jisan', 'Wrong Answer', 'Tarek Sum', 0.10, '2024-10-04 22:36:34'),
(13, 'jisan', 'Wrong Answer', 'Tarek Sum', 0.08, '2024-10-04 22:36:34'),
(14, 'jisan', 'Accepted', 'Tarek Sum', 0.11, '2024-10-04 22:36:34'),
(15, 'jisan', 'Compilation Error', 'Tarek Sum', 0.00, '2024-10-04 22:36:34'),
(17, 'MH', 'Accepted', 'Tarek Sum', 0.25, '2024-10-04 22:36:34'),
(18, 'MH', 'Accepted', 'Tarek Sum', 0.06, '2024-10-04 22:36:34'),
(21, 'MH', 'Accepted', 'Tarek Sum', 0.11, '2024-10-04 22:36:34'),
(23, 'Mehbuba Khan', 'Compilation Error', 'Tarek Sum', 0.00, '2024-10-04 22:36:34'),
(24, 'Tarek Rahman', 'Accepted', 'Tarek Sum', 0.14, '2024-10-04 22:36:34'),
(34, 'Tarek Rahman', 'Accepted', 'Tarek Sum', 0.07, '2024-10-04 22:36:34'),
(36, 'Tarek Rahman', 'Accepted', 'Tarek Sum', 0.06, '2024-10-04 22:36:34'),
(42, 'Tarek Rahman', 'Accepted', 'Tarek Sum', 0.06, '2024-10-04 22:36:34'),
(44, 'Tarek Rahman', 'Accepted', 'Tarek Sum', 0.06, '2024-10-04 22:36:34'),
(45, 'Tarek Rahman', 'Accepted', 'Tarek Sum', 0.07, '2024-10-04 22:36:34'),
(47, 'Tarek Rahman', 'Accepted', 'Tarek Sum', 0.07, '2024-10-04 22:36:34'),
(49, 'Tarek Rahman', 'Accepted', 'Tarek Sum', 0.08, '2024-10-04 22:36:34'),
(50, 'Tarek Rahman', 'Compilation Error', 'Tarek Sum', 0.00, '2024-10-04 22:36:34'),
(51, 'Tarek Rahman', 'Compilation Error', 'Tarek Sum', 0.00, '2024-10-04 22:36:34'),
(52, 'Tarek Rahman', 'Compilation Error', 'Tarek Sum444', 0.00, '2024-10-04 22:36:34'),
(53, 'Mehbuba Khan', 'Accepted', 'Tarek Sum', 0.08, '2024-10-07 01:03:32'),
(55, 'Tarek Rahman', 'Accepted', 'Hasina Apa Come back', 0.08, '2024-10-08 13:50:08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(40) NOT NULL DEFAULT '',
  `pass` varchar(40) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'student',
  `email` varchar(100) NOT NULL DEFAULT '',
  `id` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `pass`, `status`, `email`, `id`, `created_at`) VALUES
('abc', '81dc9bdb52d04dc20036dbd8313ed055', 'unblocked', 'abc@bscse.uiu.ac.bd', 1, '2024-09-26 22:26:23'),
('gg', 'e10adc3949ba59abbe56e057f20f883e', 'Problem Setter', 'gg@bscse.uiu.ac.bd', 2, '2024-09-26 22:26:23'),
('jisan', 'b59c67bf196a4758191e42f76670ceba', 'Problem Setter', 'mjishan221342@bscse.uiu.ac.bd', 3, '2024-09-26 22:26:23'),
('mahim', 'e2fc714c4727ee9395f324cd2e7f331f', 'user', 'mhossen221359@bscse.uiu.ac.bd', 12, '2024-09-28 11:59:35'),
('Md. Tarek Hasan', '1a84f397e02ac24a39566fe1095a81ff', 'Teacher', 'tarek@cse.uiu.ac.bd', 19, '2024-10-04 16:00:09'),
('Mehbuba Khan', 'c5b4b89e78f2a2850f024e6a17b0a813', 'user', 'mkhan222189@bscse.uiu.ac.bd', 8, '2024-09-27 19:45:03'),
('MH', 'b59c67bf196a4758191e42f76670ceba', 'Student', 'mhossen2211359@bscse.uiu.ac.bd', 4, '2024-09-26 22:26:23'),
('mh123', 'e2fc714c4727ee9395f324cd2e7f331f', 'user', 'mhossen221359@bscse.uiu.ac.bd', 10, '2024-09-28 11:42:25'),
('mhossen', 'e2fc714c4727ee9395f324cd2e7f331f', 'user', 'mhossen221359@bscse.uiu.ac.bd', 9, '2024-09-28 11:33:35'),
('Nafi Ahmed', '1a84f397e02ac24a39566fe1095a81ff', 'user', 'nafi@bscse.uiu.ac.bd', 22, '2024-10-04 16:10:45'),
('parvez', 'e2fc714c4727ee9395f324cd2e7f331f', 'user', 'mhossen221359@bscse.uiu.ac.bd', 11, '2024-09-28 11:53:16'),
('rafsan', 'c20ad4d76fe97759aa27a0c99bff6710', 'Student', 'trahman221182@bscse.uiu.ac.bd', 5, '2024-09-26 22:26:23'),
('Rafsan Ahmed', '1a84f397e02ac24a39566fe1095a81ff', 'user', 'trahman221182@bscse.uiu.ac.bd', 16, '2024-10-04 15:47:28'),
('Rahadul Islam', '1a84f397e02ac24a39566fe1095a81ff', 'user', 'mjishan221342@bscse.uiu.ac.bd', 17, '2024-10-04 15:48:11'),
('Rakibul Islam', '1a84f397e02ac24a39566fe1095a81ff', 'user', 'mislam221362@bscse.uiu.ac.bd', 15, '2024-10-04 15:46:28'),
('Rasel Ahemd', '1a84f397e02ac24a39566fe1095a81ff', 'user', 'rasel@bscse.uiu.ac.bd', 20, '2024-10-04 16:10:03'),
('ratul1234', '81dc9bdb52d04dc20036dbd8313ed055', 'user', 'mhossen221359@bscse.uiu.ac.bd', 13, '2024-09-29 01:26:10'),
('Shafin Ahemd', '1a84f397e02ac24a39566fe1095a81ff', 'user', 'shafin@bscse.uiu.ac.bd', 23, '2024-10-04 16:13:14'),
('tarek', 'c4ca4238a0b923820dcc509a6f75849b', 'Student', 'tk750502@gmail.com', 6, '2024-09-26 22:26:23'),
('Tarek Rahman', 'f63559cf6a08ba10af68e0484c2ce7da', 'Headquarters', 'Rafsan@admin.uiuoj.com', 14, '2024-09-29 18:07:19'),
('tarek200', 'e10adc3949ba59abbe56e057f20f883e', 'Student', 'trahman221182@bscse.uiu.ac.bd', 7, '2024-09-26 22:26:23'),
('Tithi', '1a84f397e02ac24a39566fe1095a81ff', 'user', 'tithi@bscse.uiu.ac.bd', 21, '2024-10-04 16:10:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `FK_ann` (`id`);

--
-- Indexes for table `archieve`
--
ALTER TABLE `archieve`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ar` (`pbauthor`);

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`),
  ADD KEY `fk_to_user_id` (`from_user_id`);

--
-- Indexes for table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_cod` (`submit_name`);

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_co` (`submit_name`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `contest_requests`
--
ALTER TABLE `contest_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `element`
--
ALTER TABLE `element`
  ADD PRIMARY KEY (`pbid`),
  ADD UNIQUE KEY `pbname` (`pbname`),
  ADD UNIQUE KEY `pbname_2` (`pbname`),
  ADD UNIQUE KEY `pbname_3` (`pbname`),
  ADD KEY `FK_ele` (`pbauthor`);

--
-- Indexes for table `like_list`
--
ALTER TABLE `like_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`),
  ADD KEY `fk_id` (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `receiver_id` (`receiver_id`);

--
-- Indexes for table `post_list`
--
ALTER TABLE `post_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author` (`author`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_problem_name` (`problem_name`);

--
-- Indexes for table `rapl_oj_contest`
--
ALTER TABLE `rapl_oj_contest`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cname` (`cname`) USING HASH,
  ADD UNIQUE KEY `cname_2` (`cname`) USING HASH,
  ADD UNIQUE KEY `cname_3` (`cname`) USING HASH,
  ADD KEY `FK_rap` (`owner`);

--
-- Indexes for table `solve`
--
ALTER TABLE `solve`
  ADD KEY `cid` (`cid`),
  ADD KEY `FK_sol` (`sname`);

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `FK_sub` (`sname`);

--
-- Indexes for table `submissions`
--
ALTER TABLE `submissions`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `FK_su` (`sname`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `aid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `archieve`
--
ALTER TABLE `archieve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `code`
--
ALTER TABLE `code`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `contest_requests`
--
ALTER TABLE `contest_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `element`
--
ALTER TABLE `element`
  MODIFY `pbid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `like_list`
--
ALTER TABLE `like_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `post_list`
--
ALTER TABLE `post_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `rapl_oj_contest`
--
ALTER TABLE `rapl_oj_contest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `sid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `submissions`
--
ALTER TABLE `submissions`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcement`
--
ALTER TABLE `announcement`
  ADD CONSTRAINT `FK_ann` FOREIGN KEY (`id`) REFERENCES `rapl_oj_contest` (`id`);

--
-- Constraints for table `archieve`
--
ALTER TABLE `archieve`
  ADD CONSTRAINT `FK_ar` FOREIGN KEY (`pbauthor`) REFERENCES `user` (`name`);

--
-- Constraints for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD CONSTRAINT `fk_from_user_id` FOREIGN KEY (`from_user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `fk_to_user_id` FOREIGN KEY (`from_user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `code`
--
ALTER TABLE `code`
  ADD CONSTRAINT `FK_cod` FOREIGN KEY (`submit_name`) REFERENCES `user` (`name`);

--
-- Constraints for table `codes`
--
ALTER TABLE `codes`
  ADD CONSTRAINT `FK_co` FOREIGN KEY (`submit_name`) REFERENCES `user` (`name`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post_list` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contest_requests`
--
ALTER TABLE `contest_requests`
  ADD CONSTRAINT `contest_requests_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`name`);

--
-- Constraints for table `element`
--
ALTER TABLE `element`
  ADD CONSTRAINT `FK_ele` FOREIGN KEY (`pbauthor`) REFERENCES `user` (`name`);

--
-- Constraints for table `like_list`
--
ALTER TABLE `like_list`
  ADD CONSTRAINT `post_id_fk_ll` FOREIGN KEY (`post_id`) REFERENCES `post_list` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `login_details`
--
ALTER TABLE `login_details`
  ADD CONSTRAINT `fk_id` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `notifications_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `post_list`
--
ALTER TABLE `post_list`
  ADD CONSTRAINT `post_list_ibfk_1` FOREIGN KEY (`author`) REFERENCES `user` (`name`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `fk_problem_name` FOREIGN KEY (`problem_name`) REFERENCES `element` (`pbname`);

--
-- Constraints for table `rapl_oj_contest`
--
ALTER TABLE `rapl_oj_contest`
  ADD CONSTRAINT `FK_rap` FOREIGN KEY (`owner`) REFERENCES `user` (`name`);

--
-- Constraints for table `solve`
--
ALTER TABLE `solve`
  ADD CONSTRAINT `FK_sol` FOREIGN KEY (`sname`) REFERENCES `user` (`name`),
  ADD CONSTRAINT `solve_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `rapl_oj_contest` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `submission`
--
ALTER TABLE `submission`
  ADD CONSTRAINT `FK_sub` FOREIGN KEY (`sname`) REFERENCES `user` (`name`),
  ADD CONSTRAINT `submission_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `rapl_oj_contest` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `submissions`
--
ALTER TABLE `submissions`
  ADD CONSTRAINT `FK_su` FOREIGN KEY (`sname`) REFERENCES `user` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

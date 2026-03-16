<?php
// questions.php - Full 60 questions with answers

$questions = [
    // Section A: General Aptitude & Reasoning (1-20)
    1 => [
        'question' => 'If the day after tomorrow is Wednesday, what day is it today?',
        'options' => ['A' => 'Monday', 'B' => 'Tuesday', 'C' => 'Sunday', 'D' => 'Friday'],
        'answer' => 'A'
    ],
    2 => [
        'question' => 'Complete the series: 2, 5, 11, 23, 47, ?',
        'options' => ['A' => '95', 'B' => '94', 'C' => '92', 'D' => '96'],
        'answer' => 'A'  // Each term ≈ previous ×2 +1
    ],
    3 => [
        'question' => 'A road crew repairs 8 km in 5 days. How many days for 3 crews to repair 48 km?',
        'options' => ['A' => '10', 'B' => '8', 'C' => '5', 'D' => '12'],
        'answer' => 'A'  // 1 crew: 8 km/5 days → rate 1.6 km/day; 3 crews: 4.8 km/day; 48/4.8 = 10 days
    ],
    4 => [
        'question' => 'If all programmers are coders and some coders are developers, which is true?',
        'options' => ['A' => 'All programmers are developers', 'B' => 'Some programmers are developers', 'C' => 'No programmers are developers', 'D' => 'Cannot be determined'],
        'answer' => 'D'
    ],
    5 => [
        'question' => 'What is 15% of 240?',
        'options' => ['A' => '36', 'B' => '40', 'C' => '32', 'D' => '48'],
        'answer' => 'A'
    ],
    6 => [
        'question' => 'If ROAD is coded as URDG, how is HIGH coded?',
        'options' => ['A' => 'KJJK', 'B' => 'JIIH', 'C' => 'KJJL', 'D' => 'JIIJ'],
        'answer' => 'A'  // +3 shift
    ],
    7 => [
        'question' => 'A project budget is KSh 500,000. 40% spent on materials, 25% on labor. How much left?',
        'options' => ['A' => 'KSh 175,000', 'B' => 'KSh 200,000', 'C' => 'KSh 150,000', 'D' => 'KSh 225,000'],
        'answer' => 'A'  // 65% spent → 35% = 175,000
    ],
    8 => [
        'question' => 'Which is the odd one out: CPU, RAM, HDD, Monitor?',
        'options' => ['A' => 'Monitor', 'B' => 'CPU', 'C' => 'RAM', 'D' => 'HDD'],
        'answer' => 'A'  // Output device vs internal components
    ],
    9 => [
        'question' => 'If 5 workers finish a road patch in 12 days, how many days for 10 workers?',
        'options' => ['A' => '6', 'B' => '8', 'C' => '10', 'D' => '24'],
        'answer' => 'A'  // Inverse proportion
    ],
    10 => [
        'question' => 'Find the next number: 3, 8, 18, 38, ?',
        'options' => ['A' => '78', 'B' => '68', 'C' => '58', 'D' => '88'],
        'answer' => 'A'  // ×2 +2 pattern
    ],
    // ... (Continue pattern for 11-20 with similar reasoning, ratios, sequences, odd-one-out, percentages related to road projects/budgets)
    11 => ['question' => 'Ratio of engineers to technicians is 3:5. If 24 technicians, how many engineers?', 'options' => ['A'=>'14.4','B'=>'18','C'=>'15','D'=>'12'], 'answer'=>'A'],
    12 => ['question' => 'Odd one out: HTTP, FTP, SMTP, RAM', 'options' => ['A'=>'RAM','B'=>'HTTP','C'=>'FTP','D'=>'SMTP'], 'answer'=>'A'],
    13 => ['question' => '25% increase on KSh 800 budget?', 'options' => ['A'=>'1000','B'=>'900','C'=>'600','D'=>'200'], 'answer'=>'A'],
    14 => ['question' => 'Series: 1, 4, 9, 16, 25, ?', 'options' => ['A'=>'36','B'=>'49','C'=>'64','D'=>'81'], 'answer'=>'A'],
    15 => ['question' => 'If A is B\'s brother, B is C\'s sister, C is D\'s father, who is A to D?', 'options' => ['A'=>'Uncle','B'=>'Father','C'=>'Brother','D'=>'Cannot tell'], 'answer'=>'A'],
    16 => ['question' => 'Average of 10, 20, 30, 40, 50?', 'options' => ['A'=>'30','B'=>'35','C'=>'25','D'=>'40'], 'answer'=>'A'],
    17 => ['question' => 'If all roses are flowers and some flowers fade quickly, then?', 'options' => ['A'=>'All roses fade quickly','B'=>'Some roses fade quickly','C'=>'No roses fade','D'=>'Cannot determine'], 'answer'=>'D'],
    18 => ['question' => 'A vehicle travels 240 km in 4 hours. Speed in km/h?', 'options' => ['A'=>'60','B'=>'50','C'=>'70','D'=>'80'], 'answer'=>'A'],
    19 => ['question' => 'Next in series: JFM, AMJ, JAS, OND, ?', 'options' => ['A'=>'FMA','B'=>'JFM','C'=>'OND','D'=>'NDJ'], 'answer'=>'A'],  // Months groups
    20 => ['question' => 'If 2+3=10, 7+2=63, 6+5=66, 8+4=?', 'options' => ['A'=>'96','B'=>'48','C'=>'32','D'=>'64'], 'answer'=>'A'],  // a*(a+b)

    // Section B: Basic ICT & Computer Knowledge (21-40)
    21 => [
        'question' => 'Which is NOT an operating system?',
        'options' => ['A' => 'Windows Server', 'B' => 'Linux Ubuntu', 'C' => 'Microsoft Word', 'D' => 'macOS'],
        'answer' => 'C'
    ],
    22 => [
        'question' => 'What does LAN stand for?',
        'options' => ['A' => 'Local Area Network', 'B' => 'Large Access Node', 'C' => 'Logical Address Number', 'D' => 'Link Aggregation Network'],
        'answer' => 'A'
    ],
    23 => [
        'question' => 'In databases, SQL stands for?',
        'options' => ['A' => 'Structured Query Language', 'B' => 'Sequential Query Logic', 'C' => 'System Query Language', 'D' => 'Standard Question Language'],
        'answer' => 'A'
    ],
    24 => [
        'question' => 'Protocol for transferring web pages?',
        'options' => ['A' => 'HTTP/HTTPS', 'B' => 'FTP', 'C' => 'SMTP', 'D' => 'POP3'],
        'answer' => 'A'
    ],
    25 => [
        'question' => 'Main function of a firewall in KeNHA network?',
        'options' => ['A' => 'Speed up internet', 'B' => 'Monitor and control traffic', 'C' => 'Store backups', 'D' => 'Design websites'],
        'answer' => 'B'
    ],
    26 => [
        'question' => 'Common cause of data loss in government systems?',
        'options' => ['A' => 'Regular backups', 'B' => 'Ransomware attacks', 'C' => 'Strong passwords', 'D' => 'Updated antivirus'],
        'answer' => 'B'
    ],
    27 => [
        'question' => 'In Active Directory, user permissions managed by?',
        'options' => ['A' => 'Groups & Policies', 'B' => 'Excel sheets', 'C' => 'Notepad files', 'D' => 'Printer queues'],
        'answer' => 'A'
    ],
    28 => ['question' => 'What is the full form of RAM?', 'options' => ['A'=>'Random Access Memory','B'=>'Read Access Memory','C'=>'Run Access Memory','D'=>'Rapid Access Memory'], 'answer'=>'A'],
    29 => ['question' => 'Which is a volatile memory?', 'options' => ['A'=>'RAM','B'=>'ROM','C'=>'HDD','D'=>'SSD'], 'answer'=>'A'],
    30 => ['question' => 'TCP/IP model has how many layers?', 'options' => ['A'=>'4','B'=>'7','C'=>'5','D'=>'6'], 'answer'=>'A'],
    31 => ['question' => 'IP address 192.168.1.1 is what class?', 'options' => ['A'=>'Class C','B'=>'Class A','C'=>'Class B','D'=>'Private'], 'answer'=>'A'],
    32 => ['question' => 'Purpose of DNS?', 'options' => ['A'=>'Translate domain to IP','B'=>'Send emails','C'=>'File transfer','D'=>'Remote access'], 'answer'=>'A'],
    33 => ['question' => 'What is phishing?', 'options' => ['A'=>'Fraudulent email for credentials','B'=>'Virus type','C'=>'Hardware fault','D'=>'Backup method'], 'answer'=>'A'],
    34 => ['question' => 'Full form of URL?', 'options' => ['A'=>'Uniform Resource Locator','B'=>'Universal Resource Link','C'=>'Uniform Retrieval Link','D'=>'User Resource Locator'], 'answer'=>'A'],
    35 => ['question' => 'Primary key in database does what?', 'options' => ['A'=>'Uniquely identifies record','B'=>'Stores images','C'=>'Sorts data','D'=>'Duplicates allowed'], 'answer'=>'A'],
    36 => ['question' => 'What is backup?', 'options' => ['A'=>'Copy of data for recovery','B'=>'Delete files','C'=>'Encrypt data','D'=>'Compress files'], 'answer'=>'A'],
    37 => ['question' => 'Which is an input device?', 'options' => ['A'=>'Keyboard','B'=>'Monitor','C'=>'Printer','D'=>'Speaker'], 'answer'=>'A'],
    38 => ['question' => 'What does BIOS stand for?', 'options' => ['A'=>'Basic Input Output System','B'=>'Binary Input Output System','C'=>'Basic Internet Output System','D'=>'None'], 'answer'=>'A'],
    39 => ['question' => 'VPN stands for?', 'options' => ['A'=>'Virtual Private Network','B'=>'Very Private Network','C'=>'Virtual Public Network','D'=>'Variable Private Network'], 'answer'=>'A'],
    40 => ['question' => 'Common file extension for PHP?', 'options' => ['A'=>'.php','B'=>'.html','C'=>'.css','D'=>'.js'], 'answer'=>'A'],

    // Section C: Web Development & PHP (41-60)
    41 => [
        'question' => 'What does PHP stand for?',
        'options' => ['A' => 'Personal Home Page', 'B' => 'PHP: Hypertext Preprocessor', 'C' => 'Private Hyper Processor', 'D' => 'Personal Hypertext Processor'],
        'answer' => 'B'
    ],
    42 => [
        'question' => 'Which superglobal collects form data with POST?',
        'options' => ['A' => '$_GET', 'B' => '$_POST', 'C' => '$_REQUEST', 'D' => '$_SERVER'],
        'answer' => 'B'
    ],
    43 => [
        'question' => 'How do you start a PHP script?',
        'options' => ['A' => '<?php', 'B' => '<php>', 'C' => '<?', 'D' => '<script php>'],
        'answer' => 'A'
    ],
    44 => [
        'question' => 'Which function outputs data in PHP?',
        'options' => ['A' => 'echo', 'B' => 'print', 'C' => 'Both A & B', 'D' => 'write'],
        'answer' => 'C'
    ],
    45 => [
        'question' => 'To connect to MySQL in PHP, use?',
        'options' => ['A' => 'mysqli_connect()', 'B' => 'mysql_open()', 'C' => 'db_connect()', 'D' => 'sql_connect()'],
        'answer' => 'A'
    ],
    46 => ['question' => 'What is the default file upload size limit in PHP?', 'options' => ['A'=>'2MB','B'=>'8MB','C'=>'Depends on php.ini','D'=>'Unlimited'], 'answer'=>'C'],
    47 => ['question' => 'Which is used for comments in PHP?', 'options' => ['A'=>'// or /* */','B'=>'# only','C'=>'<!-- -->','D'=>'All'], 'answer'=>'A'],
    48 => ['question' => '$_SESSION is used for?', 'options' => ['A'=>'Storing user data across pages','B'=>'Form data','C'=>'Server info','D'=>'Cookies'], 'answer'=>'A'],
    49 => ['question' => 'To include a file in PHP?', 'options' => ['A'=>'include() or require()','B'=>'import()','C'=>'link()','D'=>'attach()'], 'answer'=>'A'],
    50 => ['question' => 'What does htmlspecialchars() do?', 'options' => ['A'=>'Prevent XSS','B'=>'Encrypt data','C'=>'Compress','D'=>'None'], 'answer'=>'A'],
    51 => ['question' => 'Array in PHP declared with?', 'options' => ['A'=>'$arr = array();','B'=>'array $arr;','C'=>'[] only in PHP 5.4+','D'=>'A and C'], 'answer'=>'D'],
    52 => ['question' => 'Which loop is entry-controlled?', 'options' => ['A'=>'for / while','B'=>'do-while','C'=>'foreach','D'=>'All'], 'answer'=>'A'],
    53 => ['question' => 'To get current date in PHP?', 'options' => ['A'=>'date("Y-m-d")','B'=>'now()','C'=>'current_date()','D'=>'getdate()'], 'answer'=>'A'],
    54 => ['question' => 'What is PDO in PHP?', 'options' => ['A'=>'PHP Data Objects for DB','B'=>'Personal Data Object','C'=>'PHP Document Object','D'=>'None'], 'answer'=>'A'],
    55 => ['question' => 'To prevent SQL injection, use?', 'options' => ['A'=>'Prepared statements','B'=>'Direct query','C'=>'echo $_POST','D'=>'All'], 'answer'=>'A'],
    56 => ['question' => 'What is .htaccess used for?', 'options' => ['A'=>'Apache config per directory','B'=>'PHP config','C'=>'HTML styling','D'=>'JS'], 'answer'=>'A'],
    57 => ['question' => 'explode() function does what?', 'options' => ['A'=>'String to array','B'=>'Array to string','C'=>'Split file','D'=>'None'], 'answer'=>'A'],
    58 => ['question' => 'implode() is opposite of?', 'options' => ['A'=>'explode()','B'=>'split()','C'=>'join()','D'=>'A and C'], 'answer'=>'A'],
    59 => ['question' => 'Session started with?', 'options' => ['A'=>'session_start()','B'=>'start_session()','C'=>'$_SESSION =','D'=>'None'], 'answer'=>'A'],
    60 => ['question' => 'Best way to hash password in PHP?', 'options' => ['A'=>'password_hash()','B'=>'md5()','C'=>'sha1()','D'=>'base64'], 'answer'=>'A']
];

$total_questions = count($questions);
$time_limit = 3600; // 60 minutes
?>

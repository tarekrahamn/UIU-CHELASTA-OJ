<?php
session_start();
include 'db_connect.php';

// Store the current URL for potential redirection
$_SESSION['url'] = $_SERVER['REQUEST_URI'];

// Check if the user is logged in; if not, redirect to login
if (!isset($_SESSION["un"])) {
    header("Location: ../login.php");
    exit(); // Ensure no further code is executed after redirection
}

$username = $_SESSION['un']; // Get the logged-in username


$sql1 = "SELECT 
    contest_requests.id AS request_id,
    contest_requests.username AS requester_username,
    contest_requests.contest_name AS requested_contest_name,
    contest_requests.status AS request_status,
    contest_requests.request_date AS request_date,
    contest_requests.contest_detail AS contest_details,
    rapl_oj_contest.id AS contest_id,
    rapl_oj_contest.cname AS contest_name,
    rapl_oj_contest.start_at AS contest_start_time,
    rapl_oj_contest.end_at AS contest_end_time,
    rapl_oj_contest.owner AS contest_owner,
    submission.sid AS submission_id,
    submission.sname AS submitter_name,
    submission.verdict AS submission_verdict,
    submission.pbname AS problem_name,
    submission.status AS submission_status,
    submission.point AS submission_points,
    user.name AS user_name,
    user.email AS user_email,
    user.status AS user_status,
    user.created_at AS user_created_at
FROM 
    contest_requests
JOIN 
    rapl_oj_contest ON contest_requests.contest_name = rapl_oj_contest.cname
LEFT JOIN 
    submission ON contest_requests.username = submission.sname
JOIN 
    user ON contest_requests.username = user.name
WHERE 
    contest_requests.status = 'Accepted'";

if (isset($_GET['user'])) {
    // Modify the query to filter based on a specific user if provided
    $user = $conn->real_escape_string($_GET['user']);
    $sql1 .= " AND submission.verdict = 'Accepted' AND submission.sname = '$user'";
} else {
    $sql1 .= " AND submission.verdict = 'Accepted'";
}

$sql1 .= " ORDER BY 
    contest_requests.request_date DESC, 
    submission.submission_time DESC;";

// Execute the query
$result1 = $conn->query($sql1);

// Check for query execution errors
if ($result1 === false) {
    die("Error: " . $conn->error);
}

$demo_data = [];
if ($result1->num_rows == 0) {
    $demo_data = [
        [
            'request_id' => 11,
            'requester_username' => 'gg',
            'requested_contest_name' => 'contest 1',
            'request_status' => 'Accepted',
            'submission_status' => 'Accepted',
            'submission_points' => 300, // No submission points provided in demo
            'user_email' => null, // No user email provided in demo
            'request_date' => '2024-09-10 03:28:30',
            'contest_details' => 'egvsgsfbfbfdnc'
        ],
        [
            'request_id' => 14,
            'requester_username' => 'jisan',
            'requested_contest_name' => 'UIU OJ Round 10',
            'request_status' => 'Pending',
            'submission_status' => 'Pending',
            'submission_points' => 'Unrated',
            'user_email' => null,
            'request_date' => '2024-09-14 05:09:52',
            'contest_details' => 'This round made by Tarek. who are student of UIU a...'
        ],
        [
            'request_id' => 15,
            'requester_username' => 'MH',
            'requested_contest_name' => 'contest 1',
            'request_status' => 'Accepted',
            'submission_status' => 'Accepted',
            'submission_points' => 500,
            'user_email' => null,
            'request_date' => '2024-09-22 06:36:50',
            'contest_details' => 'xwscxwx'
        ],
        [
            'request_id' => 16,
            'requester_username' => 'Mehbuba Khan',
            'requested_contest_name' => 'CodeCampus Programming Contest',
            'request_status' => 'Accepted',
            'submission_status' => 'Accepted',
            'submission_points' => 700,
            'user_email' => null,
            'request_date' => '2024-10-07 00:44:02',
            'contest_details' => 'CodeCampus Programming Contest for all of students...'
        ]
    ];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contest Requests and Submissions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .back-button {
            margin: 20px 0;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<button class="back-button" onclick="window.history.back();">Back</button>

    <h1>Contest Requests and Accepted Submissions</h1>
    <table>
        <tr>
            <th>Request ID</th>
            <th>Requester</th>
            <th>Contest Name</th>
            <th>Request Status</th>
            <th>Submission Status</th>
            <th>Total Points</th>
        </tr>
        <?php if ($result1->num_rows > 0): ?>
            <?php while($row = $result1->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['request_id']) ?></td>
                    <td><?= htmlspecialchars($row['requester_username']) ?></td>
                    <td><?= htmlspecialchars($row['requested_contest_name']) ?></td>
                    <td><?= htmlspecialchars($row['request_status']) ?></td>
                    <td><?= htmlspecialchars($row['submission_status']) ?></td>
                    <td><?= htmlspecialchars($row['submission_points']) ?></td>
                    <td><?= htmlspecialchars($row['user_email']) ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <?php foreach ($demo_data as $demo): ?>
                <tr>
                    <td><?= htmlspecialchars($demo['request_id']) ?></td>
                    <td><?= htmlspecialchars($demo['requester_username']) ?></td>
                    <td><?= htmlspecialchars($demo['requested_contest_name']) ?></td>
                    <td><?= htmlspecialchars($demo['request_status']) ?></td>
                    <td><?= htmlspecialchars($demo['submission_status']) ?></td>
                    <td><?= htmlspecialchars($demo['submission_points']) ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</body>
</html>

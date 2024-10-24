<!DOCTYPE html>
<html>

<head>
    <title>Conditional Statements</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-top: 0;
            color: #333;
        }

        .section {
            margin-bottom: 30px;
        }

        .section-title {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .info-box {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .info-box .difficulty,
        .info-box .importance {
            display: inline-block;
            margin-right: 10px;
        }

        .info-box .difficulty span,
        .info-box .importance span {
            display: inline-block;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            margin-right: 5px;
        }

        .info-box .difficulty span {
            background-color: #007bff;
        }

        .info-box .importance span {
            background-color: #ffc107;
        }

        .info-box .importance span.star {
            background-color: #ffc107;
        }

        .info-box .importance span.star.filled {
            background-color: #ffdd4b;
        }

        .info-box p {
            margin: 5px 0;
        }

        .resources {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .resource-item {
            margin-bottom: 10px;
        }

        .resource-item .title {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .resource-item .description {
            margin-bottom: 5px;
        }

        .resource-item .link {
            color: #007bff;
            text-decoration: none;
        }

        .problems {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .problem-table {
            width: 100%;
            border-collapse: collapse;
        }

        .problem-table th,
        .problem-table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .problem-table th {
            background-color: #f2f2f2;
        }

        .problem-table td.difficulty {
            text-align: center;
        }

        .problem-table td.difficulty span {
            display: inline-block;
            width: 100px;
            padding: 5px;
            border-radius: 5px;
            text-align: center;
        }

        .problem-table td.difficulty span.easy {
            background-color: #4CAF50;
            color: #fff;
        }

        .problem-table td.difficulty span.medium {
            background-color: #FFC107;
            color: #fff;
        }

        .problem-table td.difficulty span.hard {
            background-color: #F44336;
            color: #fff;
        }

        .problem-table td.tags {
            text-align: center;
        }

        .problem-table td.tags .dropdown {
            display: inline-block;
            position: relative;
        }

        .problem-table td.tags .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .problem-table td.tags .dropdown-content a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .problem-table td.tags .dropdown-content a:hover {
            background-color: #f2f2f2;
        }

        .problem-table td.tags .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Functions</h1>

        <div class="section">
            <div class="section-title">Info</div>
            <div class="info-box">
                <div class="difficulty"><span style="background-color: #007bff;"></span> Difficulty: VERY EASY</div>
                <div class="importance">
                    <span class="star filled"></span>
                    <span class="star filled"></span>
                    <span class="star"></span>
                    Importance:
                </div>
                <p>This section provides information about Functions, including their importance and difficulty level.</p>
            </div>
        </div>

        <div class="section">
            <div class="section-title">Resources</div>
            <div class="resources">
                <p>The resources are given in the recommended order of learning. The best idea would be to go through all of them.</p>
                <div class="resource-item">
                    <div class="title"><a></a></div>
                </div>
                <div class="resource-item">
                    <div class="title"><a href="https://www.youtube.com/watch?v=C83tPpvxIJA&list=PLzMcBGfZo4-lmGC8VW0iu6qfMHjy7gLQ3&index=20">1. Functions | Tech With Tim</a></div>
                    <div class="title"><a href="https://www.programiz.com/cpp-programming/function">2. C++ Functions | Programiz</a></div>
                    <div class="title"><a href="https://www.programiz.com/cpp-programming/user-defined-function-types">3. C++ User-defined Function Types | Programiz</a></div>
                    <div class="title"><a href="https://www.programiz.com/cpp-programming/default-argument">4. C++ Programming Default Arguments (Parameters) | Programiz</a></div>
                    <div class="title"><a href="">5. C++ Function Overloading | Programiz</a></div>
                    <div class="title"><a href="https://www.programiz.com/cpp-programming/function-overloading">6. Top 10 Most Used Inbuilt C++ functions for Competitive Programming | Geeks for Geeks</a></div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="section-title">Problems</div>
            <div class="problems">
                <table class="problem-table">
                    <thead>
                        <tr>
                            <th>TAG</th>
                            <th>PROBLEM</th>
                            <th>DIFFICULTY</th>
                            <th>TAGS
                            </th>
                            <th>SOURCE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td><a href="https://codeforces.com/group/MWSDmqGsZm/contest/223205/problem/A">Add</a></td>
                            <td class="difficulty"><span class="easy">EASY</span></td>
                            <td class="tags">
                                <div class="dropdown">
                                    <span>Show Tags</span>
                                    <div class="dropdown-content">
                                        <a href="#">Tag 1</a>
                                        <a href="#">Tag 2</a>
                                        <a href="#">Tag 3</a>
                                    </div>
                                </div>
                            </td>
                            <td>VJUDGE</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="https://vjudge.net/problem/Gym-287309M">Add</a></td>
                            <td class="difficulty"><span class="medium">MEDIUM</span></td>
                            <td class="tags">
                                <div class="dropdown">
                                    <span>Show Tags</span>
                                    <div class="dropdown-content">
                                        <a href="#">Tag 1</a>
                                        <a href="#">Tag 2</a>
                                        <a href="#">Tag 3</a>
                                    </div>
                                </div>
                            </td>
                            <td>VJUDGE</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
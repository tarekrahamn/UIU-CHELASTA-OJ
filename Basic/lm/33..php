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
        <h1>Binary Search</h1>

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
                <p>This section provides information about Binary Search, including their importance and difficulty level.</p>
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
                    <div class="title"><a href="https://www.youtube.com/watch?v=GU7DpgHINWQ&list=PLl0KD3g-oDOHpWRyyGBUJ9jmul0lUOD80&index=3">1. Binary Search tutorial | Errichto Algorithms</a></div>
                    <div class="title"><a href="https://codeforces.com/edu/course/2/lesson/6">2. Binary Search | EDU</a></div>
                    <div class="title"><a href="https://usaco.guide/silver/binary-search?lang=cpp">3. Binary Search | USACO Guide</a></div>
                    <div class="title"><a href="https://csacademy.com/lesson/binary_search">4. Binary Search | CSAcademy</a></div>
                    <div class="title"><a href="https://www.programiz.com/dsa/binary-search">5. Binary Search | Programiz</a></div>
                    <div class="title"><a href="https://www.youtube.com/watch?v=MFhxShGxHWc">6. Binary Search Algorithm in 100 Seconds | Fireship





                        </a></div>
                    <div class="title"><a href="https://youtu.be/FYBuOLKKqrw?si=TSRi_J0MB071-uyT">7. Binary Search In One Shot C++ [Hindi]





                        </a></div>
                    <div class="title"><a href="https://nor-blog.codeberg.page/posts/2021-11-07-binary-search/">8. Binary search and other "halving" methods | nor</a></div>
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
                            <td><a href="https://codeforces.com/edu/course/2/lesson/6/1/practice/contest/283911/problem/A">1. Binary Search</a></td>
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

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>

</html>
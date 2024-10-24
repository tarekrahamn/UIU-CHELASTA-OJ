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
        <h1>Data Types, Variables and Input Output</h1>

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
                <p>This section provides information about Data Types, Variables and Input Output, including their importance and difficulty level.</p>
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
                    <div class="title"><a href="https://www.youtube.com/watch?v=ckbfOdMhZls&list=PLzMcBGfZo4-lmGC8VW0iu6qfMHjy7gLQ3&index=3">1. C++ Program Structure | Tech With Tim</a></div>
                    <div class="title"><a href="https://www.youtube.com/watch?v=zgutFVxOlTY&list=PLzMcBGfZo4-lmGC8VW0iu6qfMHjy7gLQ3&index=5">2. Data Types and Variables | Tech With Tim</a></div>
                    <div class="title"><a href="https://www.youtube.com/watch?v=OA28SYILJv8&list=PLzMcBGfZo4-lmGC8VW0iu6qfMHjy7gLQ3&index=5">3. User Input and Constants | Tech With Tim</a></div>
                    <div class="title"><a href="https://www.programiz.com/cpp-programming/variables-literals">4. C++ Variables, Literals and Constants | Programiz</a></div>
                    <div class="title"><a href="https://www.programiz.com/cpp-programming/comments">5. C++ Comments | Programiz</a></div>
                    <div class="title"><a href="https://www.programiz.com/cpp-programming/data-types">6. C++ Data Types | Programiz</a></div>
                    <div class="title"><a href="https://www.programiz.com/cpp-programming/constants">7. C++ Constants | Programiz</a></div>
                    <div class="title"><a href="https://www.programiz.com/cpp-programming/input-output">8. C++ Basic Input/Output | Programiz</a></div>
                    <div class="title"><a href="https://usaco.guide/general/data-types?lang=cpp">9. Data Types | USACO Guide</a></div>
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
                            <td><a href="https://vjudge.net/problem/Gym-287306B">1. Basic Data Types</a></td>
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
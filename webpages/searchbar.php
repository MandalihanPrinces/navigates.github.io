<!DOCTYPE html>
<html>
<head>
    <title>Search Bar</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        .search-container {
            display: flex;
            align-items: center;
        }
        #searchInput {
            margin-right: 10px;
        }
    </style>
</head>
<body>

    <ul id="collegeList">
        <li>College of Business and Accountancy</li>
        <li>College of Health and Allied Sciences</li>
        <li>College of Arts and Social Sciences</li>
        <li>College of Engineering</li>
        <li>College of Environmental Sciences</li>
        <li>College of Information and Computing Sciences</li>
        <li>College of Industrial Technology</li>
        <li>College of Education</li>
        <li>College of Governance</li>
    </ul>

    <li>
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Search...">
            <button onclick="search()">Search</button>
        </div>
    </li>

    <script>
        function search() {
            var input, filter, ul, li, i, txtValue;
            input = document.getElementById('searchInput');
            filter = input.value.toUpperCase();
            ul = document.getElementById('collegeList');
            li = ul.getElementsByTagName('li');

            for (i = 0; i < li.length; i++) {
                txtValue = li[i].textContent || li[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = '';
                } else {
                    li[i].style.display = 'none';
                }
            }
        }
    </script>

</body>
</html>

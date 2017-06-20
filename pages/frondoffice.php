<?php
//session_start();
//include_once 'classes/connect.php';
//$_SESSION['first_name'];
//$_SESSION['user_ID'];
?>
<head>
    <link rel="stylesheet" href="v.css" type="text/css"/>
    <title>FO</title>
    <style>
    </style>
</head>
<body>
    <h1 align="center" id="h1">Страница на Деканата</h1>
    <div><?php echo "Здравейте доц. д-р: " . $_SESSION['first_name'] ?>
    </div>
    <div class="frondoffice" onclick="open_students()"><p>Справка за студент</p><p></p></div>
    <!--div class="frondoffice" onclick="insert_student()">Въведете студент</div>
    <div class="frondoffice" onclick="update_student()">Променете данни студент</div-->
    <div class="frondoffice" onclick="open_assessment()" style="disabled"><p>Справка за оценки</p><p></p></div>
    <div class="frondoffice" onclick="assessment_index()"><p>Въвеждане на оценки</p><p></p></div>
    <div class="frondoffice" >График за изпити по специалност</div>
    <div class="frondoffice" onclick="insert_specialities()">Въведете специалност</div>
    <div class="frondoffice"  >Променете специалност</p></div>

    <script>
        function open_students() {
            var winFeature =
                    'location=no,toolbar=no,menubar=no,scrollbars=yes,resizable=yes';
            window.open('pages/open_students.php', 'newwindow', 'width=700, height=450', winFeature);
        }
        function open_assessment() {
            var winFeature =
                    'location=no,toolbar=no,menubar=no,scrollbars=yes,resizable=yes';
            window.open('pages/OEopen_assessment.php', 'newwindow', 'width=700, height=450', winFeature);
        }
         function assessment_index() {
            var winFeature =
                    'location=no,toolbar=no,menubar=no,scrollbars=yes,resizable=yes';
            window.open('pages/assessment_index.php', 'newwindow', 'width=700, height=450', winFeature);
        }
        function insert_student() {
            var winFeature =
                    'location=no,toolbar=no,menubar=no,scrollbars=yes,resizable=yes';
            window.open('pages/insert_student.php', 'newwindow', 'width=700, height=450', winFeature);
        }
        function update_student() {
            window.open('pages/update_student.php', 'newwindow', 'width=700, height=450');
            return false;
        }
        function insert_specialities() {
            window.open('pages/insert_specialities.php', 'newwindow', 'width=700, height=450');
            return false;
        }
    </script>
</body>
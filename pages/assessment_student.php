<?php //session_start() ;?>
<div class="content-loader">

    <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
            <tr>
                <td hidden="true">ID</td>
                <td>Предмет</td>
                <td>Оценка</td>                
            </tr>
        </thead>
        <tbody>
            <?php
            require_once 'dbconfig.php';
            //$_SESSION['ID_user']=$iduser;

            $stmt = $db_con->prepare("SELECT  
users.ID_user,users.first_name,users.midle_name,users.sur_name,
subjects.id_subject,subjects.name_subject,
assessment.id_subjects,assessment.assessment
FROM  assessment
LEFT JOIN users
ON assessment.id_user=users.ID_user
LEFT JOIN subjects
ON assessment.id_subjects=subjects.id_subject
WHERE users.ID_user = '{$_SESSION['ID_user']}'");
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <tr>
                    <td hidden="true"><?php echo $row['ID_user']; ?></td>
                    <td><?php echo $row['name_subject']; ?></td><td><?php echo $row['assessment']; ?></td>
                    <!--td align="center">
                    <a id="<?php //echo $row['ID_user'];  ?>" class="edit-link" href="#" title="Edit">
                    <img src="edit.png" width="20px" />
        </a></td>
                    <!--td align="center"><a id="<?php // echo $row['emp_id'];  ?>" class="delete-link" href="#" title="Delete">
                    <img src="delete.png" width="20px" />
        </a></td-->
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

</div>

</div>
<?php
        require_once 'dbconfig.php';

$stmt = $db_con->prepare("SELECT subjects_specialities.id_specialities,subjects_specialities.id_subjects,
subjects.id_subject, subjects.name_subject,
specialities.id_speciality,specialities.speciality_name,
users.ID_user,users.id_specialities
FROM subjects_specialities
LEFT JOIN subjects
ON subjects_specialities.id_subjects=subjects.id_subject
LEFT JOIN specialities
ON subjects_specialities.id_specialities=specialities.id_speciality
LEFT JOIN users
ON specialities.id_speciality=users.id_specialities
WHERE specialities.id_speciality=8")
$stmt->execute();
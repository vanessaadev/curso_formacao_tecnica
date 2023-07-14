<!-- <php
    require_once('../../../config.php');


    $NomeUsuario = $_SESSION['USER']->firstname;
    require_login();
    global $CFG;
    global $DB;


    $IdCurso = $_GET['IdCurso'];


    $AtividadeAvaliativa = $DB->get_record_sql(
            'SELECT mdl_course_modules.* FROM mdl_course_modules WHERE mdl_course_modules.course = ? AND mdl_course_modules.idnumber = ?',
            [
                $IdCurso,
                'AA01'
            ]
    );
    $AtividadeAvaliativa = $AtividadeAvaliativa->id;
?> -->
<?php
    include ('../fpdf/fpdf.php');
    include ('../conexion.php');
    date_default_timezone_set("America/El_Salvador");
    session_start(); //Reanudando la sesión iniciada
    error_reporting(0); //Quitar errores cuando se finaliza la sesión
    $varsesion=$_SESSION['usuario'];
    $tipo=$_SESSION['tipo'];
    if ($varsesion==null || $varsesion==""){
        header("Location:../index.php"); //Enviar al login si no existe una sesión previamente creada
        die();
    }
    if ($tipo!=1){
        header("Location:../logout.php"); //Cerrar la sesión si trata de cambiarse de usuario
    }

    
    $id= base64_decode($_GET['id']);//Asignacion del valor de la variable $_GET a $id (Desencriptando la id)
    if($id!=NULL){
        $query = "SELECT * FROM pacientes WHERE id_paciente= ".$id;
        $result = mysqli_query($conexion, $query);
        $row = mysqli_fetch_array($result);
    }
    if ($row['id_paciente']==""){ //Comprobar si existe ese paciente con ese id
    ?>
        <div class="text-center col-12">
            <h1 class="text-center display-2 text-danger">Oops! Algo salió mal :(</h1>
            <img src="../assets/alumno.png" class="img-fluid" width="210px" alt="Image">
            <h1 class="text-center display-4">Paciente no encontrado</h1>
            <br><br>
            <a class="btn btn-primary btn-lg" href="pacientes.php">Volver</a>
        </div>
    <?php
    }
    else{ //Si existe el paciente se muestran los datos
    class PDF extends FPDF {
        
        function Header(){
            $this->Image('../assets/salud.png',10,10, 15);
            $this->SetFont('Arial','B',10);
            $this->Cell(70,15,utf8_decode("Clínicas San Benito"),0,0,'C');
            $this->Ln(2);
            $this->SetFont('Arial','',8);
            $this->Cell(70,20,utf8_decode("Desde siempre, tu mejor opción"),0,1,'C');
        }
        //Pie de página
        function Footer(){
        
            $this->SetFont('Arial','I',8);

            $this->SetY(-15);
                        
            $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
        }
    }
    $pdf = new PDF();
    $pdf->AddPage();
    //Enumeramos los pie de pagina
    $pdf->AliasNbPages();
    
    //Titulo del pdf
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(0,10,utf8_decode("Informe Médico del Paciente"),0,1,'C');
    

    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,utf8_decode("Nombre del paciente: "),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(50,10,utf8_decode("{$row['paciente_nombres']} {$row['paciente_paterno']}."),0,0,'C');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(15,10,utf8_decode("Sexo:"),0,0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(26,10,utf8_decode("{$row['paciente_sexo']}."),0,0,'C');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(18,10,utf8_decode("Fecha: "),0,0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(31,10,utf8_decode(date('d-M-Y')),'LR',1,'C');


    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(17,10,utf8_decode("Peso:"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(10,10,utf8_decode("{$row['paciente_peso']}."),0,0,'C');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,utf8_decode("Motivo de la consulta:"),0,0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0,10,utf8_decode("{$row['motivo_consulta']}."),'LR',1,'C');


    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(23,10,utf8_decode("Alergias:"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0,10,utf8_decode("{$row['alergias']}."),'R',1,'C');
    

    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(36,10,utf8_decode("Observaciones:"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0,10,utf8_decode("{$row['observaciones']}."),'R',1,'C');
    $pdf->Ln(10);

    $pdf->SetFont('Arial','IB',12);
    $pdf->Cell(0,10,utf8_decode("Enfermedades del paciente"),'LR',1,'L');

    // Listando las enfermedades del paciente
    ##########################################
    #La siguiente función nos ayudará a cambiar el valor de 1 por 'positivo', y 0 por 'negativo'
    ##########################################
    function validarEnfermedades($valor){
        if ($valor==1){
            return "Positivo";
        }
        else {
            return "Negativo";
        }
    }
    ##########################################
    #Esta hará lo mismo pero con las preguntas
    ##########################################
    function validarPreguntas($valor){
        if ($valor==1){
            return "Sí";
        }
        else {
            return "No";
        }
    }
    ##########################################
    #Función de vacunación
    ##########################################
    function vacunacion($valor){
        if (empty($valor) || $valor=="0000-00-00"){
            return "Pendiente";
        }
        else {
            $dt = new DateTime($valor);
            return $dt->format('d/m/Y');
        }
    }
    #############
    #Diabetes
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(24,10,utf8_decode("Diabetes:"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(22,10,utf8_decode(validarEnfermedades($row['diabetes'])),0,0,'C');

    #############
    #Cancer
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(20,10,utf8_decode("Cáncer:"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(22,10,utf8_decode(validarEnfermedades($row['cancer'])),0,0,'C');

    #############
    #Tuberculosis
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(30,10,utf8_decode("Tuberculosis:"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(22,10,utf8_decode(validarEnfermedades($row['tuberculosis'])),0,0,'C');

    #############
    #Hipertension
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(30,10,utf8_decode("Hipertensión:"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(20,10,utf8_decode(validarEnfermedades($row['hipertension'])),'R',1,'C');

    #############
    #Ingesta de Medicamentos
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(70,10,utf8_decode("¿Consume algún medicamento?"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    // }
    $pdf->Cell(10,10,utf8_decode(validarPreguntas($row['ingesta_medicamentos'])),0,0,'C');

    #############
    #Cirugias
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(95,10,utf8_decode("¿Ha sido sometido a cirugías anteriormente?"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0,10,utf8_decode(validarPreguntas($row['cirugias'])),'R',1,'C');

    #############
    #Enfermedades Sanguineas
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(53,10,utf8_decode("Enfermedad Sanguínea:"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(20,10,utf8_decode(validarEnfermedades($row['enfermedad_sangre'])),'R',0,'C');

    #############
    #transfusiones
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(100,10,utf8_decode("¿Ha sido sometido a transfusiones de sangre?"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0,10,utf8_decode(validarPreguntas($row['transfusiones'])),'R',1,'C');

    #############
    #Enfermedades Importantes
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(60,10,utf8_decode("Enfermedades Importantes:"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0,10,utf8_decode("{$row['enfermedades_importantes']}."),'R',1,'C');

    #############
    #Convulsiones
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(34,10,utf8_decode("Convulsiones:"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(22,10,utf8_decode(validarEnfermedades($row['convulsiones'])),'R',0,'C');

    #############
    #Ejercicio
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(45,10,utf8_decode("¿Realiza ejercicio?:"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(10,10,utf8_decode(validarPreguntas($row['realiza_ejercicio'])),'R',0,'C');

    #############
    #Denticion
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(25,10,utf8_decode("Denticion:"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0,10,utf8_decode(validarEnfermedades($row['denticion'])),'R',1,'C');
    $pdf->Ln(10);

    #############
    #Interrogatorio
    #############
    $pdf->SetFont('Arial','IB',12);
    $pdf->Cell(0,10,utf8_decode("Detalles del interrogatorio"),'LR',1,'L');
    $pdf->SetFont('Arial','U',12);
    $pdf->MultiCell(0,10,utf8_decode($row['interrogatorio']),0,'L',0,'J');
    $pdf->Ln(10);

    ##########################################
    #Detalle de vacunas del paciente
    ##########################################
    $pdf->SetFont('Arial','IB',12);
    $pdf->Cell(0,10,utf8_decode("Vacunación del paciente"),'LR',1,'L');

    #############
    #BCG
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(13,10,utf8_decode("BCG:"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(22,10,utf8_decode(vacunacion($row['bcg'])),'R',0,'C');

    #############
    #Hepatitis A1
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(29,10,utf8_decode("Hepatitis A1:"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(22,10,utf8_decode(vacunacion($row['hepatitis_a1'])),'R',0,'C');

    #############
    #Hepatitis A2
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(30,10,utf8_decode("Hepatitis A2:"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(22,10,utf8_decode(vacunacion($row['hepatitis_a2'])),'R',0,'C');
    
    #############
    #Hepatitis B1
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(30,10,utf8_decode("Hepatitis B1:"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(22,10,utf8_decode(vacunacion($row['hepatitis_b1'])),'R',1,'C');
    
    #############
    #Hepatitis B2
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(28,10,utf8_decode("Hepatitis B2:"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(30,10,utf8_decode(vacunacion($row['hepatitis_b2'])),'R',0,'C');
    
    #############
    #Hepatitis B3
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(35,10,utf8_decode("Hepatitis B3:"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(30,10,utf8_decode(vacunacion($row['hepatitis_b3'])),'R',0,'C');
    
    #############
    #Pentavalente 1
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(37,10,utf8_decode("Pentavalente 1:"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(30,10,utf8_decode(vacunacion($row['pentavalente_1'])),'R',1,'C');
    
    #############
    #Pentavalente 2
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(33,10,utf8_decode("Pentavalente 2:"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(22,10,utf8_decode(vacunacion($row['pentavalente_2'])),'R',0,'C');
   
    #############
    #Pentavalente 3
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(32,10,utf8_decode("Pentavalente 3:"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(20,10,utf8_decode(vacunacion($row['pentavalente_3'])),'R',0,'C');
    
    #############
    #DPT
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(12,10,utf8_decode("DPT:"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(22,10,utf8_decode(vacunacion($row['dpt'])),'R',0,'C');
    
    #############
    #Rotavirus 1
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(27,10,utf8_decode("Rotavirus 1:"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(22,10,utf8_decode(vacunacion($row['rotavirus_1'])),'R',1,'C');
    
    #############
    #Rotavirus 2
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(27,10,utf8_decode("Rotavirus 2:"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(28,10,utf8_decode(vacunacion($row['rotavirus_2'])),'R',0,'C');
    
    #############
    #Rotavirus 3
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(39,10,utf8_decode("Rotavirus 3:"),'L',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(28,10,utf8_decode(vacunacion($row['rotavirus_3'])),'R',0,'C');
    
    #############
    #Neumococica Conjugada 1
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(40,10,utf8_decode("Neumococica 1:"),'LR',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(28,10,utf8_decode(vacunacion($row['neumococica_1'])),'R',1,'C');
    
    #############
    #Neumococica Conjugada 2
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(35,10,utf8_decode("Neumococica 2:"),'LR',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(28,10,utf8_decode(vacunacion($row['neumococica_2'])),'R',0,'C');
    
    #############
    #Neumococica Conjugada 3
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(36,10,utf8_decode("Neumococica 3:"),'LR',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(28,10,utf8_decode(vacunacion($row['neumococica_3'])),'R',0,'C');
    
    #############
    #Neumococica Conjugada 4
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(35,10,utf8_decode("Neumococica 4:"),'LR',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(28,10,utf8_decode(vacunacion($row['neumococica_4'])),'R',1,'C');
    
    ##########################################
    #Cargando Pagina 2
    ##########################################
    $pdf->AddPage();
    #############
    #Meningococo 1
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(35,10,utf8_decode("Meningococo 1:"),'LR',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(28,10,utf8_decode(vacunacion($row['meningococo_1'])),'R',0,'C');
    
    #############
    #Meningococo 2
    #############
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(35,10,utf8_decode("Meningococo 2:"),'LR',0,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(28,10,utf8_decode(vacunacion($row['meningococo_2'])),'R',0,'C');

    $pdf->Output();
    }
?>
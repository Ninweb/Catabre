
<?php

    include('../modelo/pedido.php');
    include('../modelo/producto.php');
    include("../modelo/conexion.php");


    function modeloPedido($json,$db){        
        $idPedido = crearPedido($json,$db);
        return $idPedido;
    }

    function modeloProducto($json,$db){        
        crearProducto($json,$db);
    }

    $idContenedor=$_POST['id_contenedor'];
    $idCliente=$_POST['id_persona'];
    $codigo_pedido=$_POST['codigo_pedido'];
    $naviera=$_POST['naviera'];
    $destino=$_POST['destino'];
    $fechaSalida=$_POST['fecha_salida'];
    $fechaLlegada=$_POST['fecha_llegada'];

    $numeroPedidos = $_POST['hidden-number-pedido'];
    // $numeroPedidos = $_POST['hidden-number-pedido'];
    


    $jsonPedido =json_encode(array(
        "idContenedor"=>$idContenedor,
        "idCliente"=>$idCliente,
        "codigo_pedido"=>$codigo_pedido,
        "naviera"=>$naviera,
        "destino"=>$destino,
        "fechaSalida"=>$fechaSalida,
        "fechaLlegada"=>$fechaLlegada,
    ));
    
    $idPedido = modeloPedido($jsonPedido,$db);
 

    for($i = 0; $i < $numeroPedidos ; $i++ ){
        if ($i==0){
            $jsonProducto =json_encode(array(
                "idPedido"=>$idPedido,
                "presentacion"=>$_POST['presentacion'],
                "producto"=>$_POST['producto'],
                "especie"=>$_POST['especie'],
                "color"=>$_POST['color'],
                "peso"=>$_POST['peso'],
                "size"=>$_POST['size'],
                "master"=>$_POST['master'],
                "total"=>$_POST['total']
            ));
        }else{
            $jsonProducto =json_encode(array(
                "idPedido"=>$idPedido,
                "presentacion"=>$_POST['presentacion'.$i],
                "producto"=>$_POST['producto'.$i],
                "especie"=>$_POST['especie'.$i],
                "color"=>$_POST['color'.$i],
                "peso"=>$_POST['peso'.$i],
                "size"=>$_POST['size'.$i],
                "master"=>$_POST['master'.$i],
                "total"=>$_POST['total'.$i]
            ));
        }
        modeloProducto($jsonProducto,$db);
    }  

    $actualizacion= "UPDATE contenedor SET status='ocupado' Where id_contenedor='$idContenedor'";
    mysqli_query($db,$actualizacion);



     /*envio email*/

    include("../mail/class.phpmailer.php"); 
    include("../mail/class.smtp.php");

    $consulta_persona = mysqli_query($db, "SELECT * FROM persona,usuario WHERE persona.id_usuario=usuario.id_usuario AND  usuario.id_usuario='".$idCliente."'");
    $result=mysqli_fetch_array($consulta_persona);

    $email=$result['email'];
    $empresa=$result['empresa'];

    $tema="CATABRE N° DE PEDIDO";
    $mensaje=utf8_decode('<html>
                                  <head>
                                    <meta name="viewport" content="width=device-width" />
                                    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                                    <title>Contacto Sistema Catabre</title>
                                    <style>
                                      /* -------------------------------------
                                          GLOBAL RESETS
                                      ------------------------------------- */
                                      
                                      /*All the styling goes here*/
                                      
                                      img {
                                        border: none;
                                        -ms-interpolation-mode: bicubic;
                                        max-width: 100%; 
                                      }

                                      body {
                                        background-color: #f6f6f6;
                                        font-family: sans-serif;
                                        -webkit-font-smoothing: antialiased;
                                        font-size: 14px;
                                        line-height: 1.4;
                                        margin: 0;
                                        padding: 0;
                                        -ms-text-size-adjust: 100%;
                                        -webkit-text-size-adjust: 100%; 
                                      }

                                      table {
                                        border-collapse: separate;
                                        mso-table-lspace: 0pt;
                                        mso-table-rspace: 0pt;
                                        width: 100%; }
                                        table td {
                                          font-family: sans-serif;
                                          font-size: 14px;
                                          vertical-align: top; 
                                      }

                                      /* -------------------------------------
                                          BODY & CONTAINER
                                      ------------------------------------- */

                                      .body {
                                        background-color: #f6f6f6;
                                        width: 100%; 
                                      }

                                      /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
                                      .container {
                                        display: block;
                                        Margin: 0 auto !important;
                                        /* makes it centered */
                                        max-width: 580px;
                                        padding: 10px;
                                        width: 580px; 
                                      }

                                      /* This should also be a block element, so that it will fill 100% of the .container */
                                      .content {
                                        box-sizing: border-box;
                                        display: block;
                                        Margin: 0 auto;
                                        max-width: 580px;
                                        padding: 10px; 
                                      }

                                      /* -------------------------------------
                                          HEADER, FOOTER, MAIN
                                      ------------------------------------- */
                                      .main {
                                        background: #ffffff;
                                        border-radius: 3px;
                                        width: 100%; 
                                      }

                                      .wrapper {
                                        box-sizing: border-box;
                                        padding: 20px; 
                                      }

                                      .content-block {
                                        padding-bottom: 10px;
                                        padding-top: 10px;
                                      }

                                      .footer {
                                        clear: both;
                                        Margin-top: 10px;
                                        text-align: center;
                                        width: 100%; 
                                      }
                                        .footer td,
                                        .footer p,
                                        .footer span,
                                        .footer a {
                                          color: #999999;
                                          font-size: 12px;
                                          text-align: center; 
                                      }

                                      /* -------------------------------------
                                          TYPOGRAPHY
                                      ------------------------------------- */
                                      h1,
                                      h2,
                                      h3,
                                      h4 {
                                        color: #000000;
                                        font-family: sans-serif;
                                        font-weight: 400;
                                        line-height: 1.4;
                                        margin: 0;
                                        margin-bottom: 30px; 
                                      }

                                      h1 {
                                        font-size: 35px;
                                        font-weight: 300;
                                        text-align: center;
                                        text-transform: capitalize; 
                                      }

                                      p,
                                      ul,
                                      ol {
                                        font-family: sans-serif;
                                        font-size: 14px;
                                        font-weight: normal;
                                        margin: 0;
                                        margin-bottom: 15px; 
                                      }
                                        p li,
                                        ul li,
                                        ol li {
                                          list-style-position: inside;
                                          margin-left: 5px; 
                                      }

                                      a {
                                        color: #3498db;
                                        text-decoration: underline; 
                                      }

                                      /* -------------------------------------
                                          BUTTONS
                                      ------------------------------------- */
                                      .btn {
                                        box-sizing: border-box;
                                        width: 100%; }
                                        .btn > tbody > tr > td {
                                          padding-bottom: 15px; }
                                        .btn table {
                                          width: auto; 
                                      }
                                        .btn table td {
                                          background-color: #ffffff;
                                          border-radius: 5px;
                                          text-align: center; 
                                      }
                                        .btn a {
                                          background-color: #ffffff;
                                          border: solid 1px #3498db;
                                          border-radius: 5px;
                                          box-sizing: border-box;
                                          color: #3498db;
                                          cursor: pointer;
                                          display: inline-block;
                                          font-size: 14px;
                                          font-weight: bold;
                                          margin: 0;
                                          padding: 12px 25px;
                                          text-decoration: none;
                                          text-transform: capitalize; 
                                      }

                                      .btn-primary table td {
                                        background-color: #3498db; 
                                      }

                                      .btn-primary a {
                                        background-color: #3498db;
                                        border-color: #3498db;
                                        color: #ffffff; 
                                      }

                                      /* -------------------------------------
                                          OTHER STYLES THAT MIGHT BE USEFUL
                                      ------------------------------------- */
                                      .last {
                                        margin-bottom: 0; 
                                      }

                                      .first {
                                        margin-top: 0; 
                                      }

                                      .align-center {
                                        text-align: center; 
                                      }

                                      .align-right {
                                        text-align: right; 
                                      }

                                      .align-left {
                                        text-align: left; 
                                      }

                                      .clear {
                                        clear: both; 
                                      }

                                      .mt0 {
                                        margin-top: 0; 
                                      }

                                      .mb0 {
                                        margin-bottom: 0; 
                                      }

                                      .preheader {
                                        color: transparent;
                                        display: none;
                                        height: 0;
                                        max-height: 0;
                                        max-width: 0;
                                        opacity: 0;
                                        overflow: hidden;
                                        mso-hide: all;
                                        visibility: hidden;
                                        width: 0; 
                                      }

                                      .powered-by a {
                                        text-decoration: none; 
                                      }

                                      hr {
                                        border: 0;
                                        border-bottom: 1px solid #f6f6f6;
                                        Margin: 20px 0; 
                                      }

                                      /* -------------------------------------
                                          RESPONSIVE AND MOBILE FRIENDLY STYLES
                                      ------------------------------------- */
                                      @media only screen and (max-width: 620px) {
                                        table[class=body] h1 {
                                          font-size: 28px !important;
                                          margin-bottom: 10px !important; 
                                        }
                                        table[class=body] p,
                                        table[class=body] ul,
                                        table[class=body] ol,
                                        table[class=body] td,
                                        table[class=body] span,
                                        table[class=body] a {
                                          font-size: 16px !important; 
                                        }
                                        table[class=body] .wrapper,
                                        table[class=body] .article {
                                          padding: 10px !important; 
                                        }
                                        table[class=body] .content {
                                          padding: 0 !important; 
                                        }
                                        table[class=body] .container {
                                          padding: 0 !important;
                                          width: 100% !important; 
                                        }
                                        table[class=body] .main {
                                          border-left-width: 0 !important;
                                          border-radius: 0 !important;
                                          border-right-width: 0 !important; 
                                        }
                                        table[class=body] .btn table {
                                          width: 100% !important; 
                                        }
                                        table[class=body] .btn a {
                                          width: 100% !important; 
                                        }
                                        table[class=body] .img-responsive {
                                          height: auto !important;
                                          max-width: 100% !important;
                                          width: auto !important; 
                                        }
                                      }

                                      /* -------------------------------------
                                          PRESERVE THESE STYLES IN THE HEAD
                                      ------------------------------------- */
                                      @media all {
                                        .ExternalClass {
                                          width: 100%; 
                                        }
                                        .ExternalClass,
                                        .ExternalClass p,
                                        .ExternalClass span,
                                        .ExternalClass font,
                                        .ExternalClass td,
                                        .ExternalClass div {
                                          line-height: 100%; 
                                        }
                                        .apple-link a {
                                          color: inherit !important;
                                          font-family: inherit !important;
                                          font-size: inherit !important;
                                          font-weight: inherit !important;
                                          line-height: inherit !important;
                                          text-decoration: none !important; 
                                        }
                                        .btn-primary table td:hover {
                                          background-color: #34495e !important; 
                                        }
                                        .btn-primary a:hover {
                                          background-color: #34495e !important;
                                          border-color: #34495e !important; 
                                        } 
                                      }

                                    </style>
                                  </head>
                                    <body class="">
                                      <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
                                        <tr>
                                          <td>&nbsp;</td>
                                          <td class="container">
                                            <div class="content">

                                              <!-- START CENTERED WHITE CONTAINER -->
                                              
                                              <table role="presentation" class="main">

                                                <!-- START MAIN CONTENT AREA -->
                                                <tr>
                                                  <td class="wrapper">
                                                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                                      <tr>
                                                        <td>
                                                          <center><h2>EL SISTEMA CATABRE LE INFORMA</h2></center>
                                                          <center><h4><b>#PEDIDO: </b> '.$codigo_pedido.'</h4></center>
                                                        </td>
                                                      </tr>
                                                    </table>
                                                  </td>
                                                </tr>

                                              <!-- END MAIN CONTENT AREA -->
                                              </table>

                                            <!-- END CENTERED WHITE CONTAINER -->
                                            </div>
                                          </td>
                                          <td>&nbsp;</td>
                                        </tr>
                                      </table>
                                    </body>
                                  </html>');


                               // Requiere PHPMAILER para poder enviar el formulario desde el SMTP de google
                                    $mail=new PHPMailer();

                                    $mail->IsSMTP(); 
                                    $mail->SMTPAuth=true;
                                    $mail->Mailer="POP3"; 
                                    $mail->SMTPSecure='ssl'; 
                                    $mail->Host='mail.ninweb.net'; 
                                    $mail->Port=465; 
                                                  
                                    $mail->Username="prueba@ninweb.net"; 
                                    $mail->Password="7140730l"; 

                                    $mail->From="prueba@ninweb.net"; /*email catabre*/
                                    $mail->FromName="CATABRE"; 
                                    $mail->AddAddress($email);

                                    $mail->WordWrap=50; 
                                    $mail->IsHTML(true);  
                                    $mail->CharSet='UTF-8';
                                    $mail->Subject=$tema;
                                    $mail->Body=$mensaje; 
                                    $mail->AltBody=$mensaje;
                                    $mail->Send();
                                                                        
                                                         




    
    echo "<script>
    swal({ title: \"Guardado!\", text: \"Pedido en camino\", icon: \"success\"})
    .then(
            function(){ 
                console.log('entro');
                location.reload();
            }
        );
    </script>";
    echo "<script>document.getElementById('formulario').reset();</script>";

    mysqli_close($db);
    
?>
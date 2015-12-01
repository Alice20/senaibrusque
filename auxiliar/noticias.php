<?php

include_once '../Cadastro/dbconfig.php';

try {//Criação do objeto $conn - conexão
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //echo "Conectado ao banco $dbname em $host com sucesso.";
} catch (PDOException $pe) {
    die("Não foi possível se conectar ao banco $dbname :" . $pe->getMessage());
}


$linha = $conn->query("SELECT * FROM noticias");

<div class="row">

        foreach ($linha as $lista) {
    
     

              echo"  <div class='col-sm-6 col-md-4'>";
                echo"    <div class='thumbnail> ";                    
                  echo"      <div class='caption'>
                            <h3><center>echo</center></h3>
                            <hr>
                            <p><center>A partir do primeiro semestre de 2016, estudantes de Concórdia, Timbó e Rio do Sul poderão contar com novos cursos técnicos do SENAI, entidade da FIESC.</center></p>
                            <button type="button" class="btn btn-info btn-primary" data-toggle="modal" data-target="#myModal">Ler mais</button>

                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><center>Novos cursos em Concórdia, Timbó e Rio do Sul</center></h4>
                                        </div>
                                        <div class="modal-body">
                                            <p><center>A partir do primeiro semestre de 2016, estudantes de Concórdia, Timbó e Rio do Sul poderão contar com novos cursos técnicos do SENAI, entidade da FIESC. A oferta dessas formações foi aprovada em reunião do conselho regional do SENAI, realizada na última quinta-feira (19). Ao todo, 140 vagas serão oferecidas nestes cursos. 

                                                Em Concórdia, o SENAI passa a ter curso técnico em informática. No município de Timbó, a entidade oferecerá técnico em automação industrial. Já em Rio do Sul, atendendo a uma demanda identificada em painel do Programa de Desenvolvimento Industrial Catarinense, o SENAI passa a oferecer técnico em design de móveis. 

                                                Além destes cursos, o SENAI também tem inscrições abertas para outras formações técnicas presenciais e a distância, em todas as regiões do Estado. São mais de uma centena de opções em programas que permitem o acesso a carreiras industriais com maior índice de empregabilidade e com remuneração mais elevada que a média. As inscrições podem ser feitas no site www.sc.senai.br ou nas unidades da instituição. </center></p>
                                       
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                </div>
    
}
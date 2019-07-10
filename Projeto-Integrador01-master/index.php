<?php
include_once('header.php');
?>
<main>
    <div class="page-header">
        <h1>Ferr</h1>
        <h3>Aluguel de ferramentas, de forma fácil e 100% online.</h3>
    </div>
    <div>
        <div class="col-sm-2">
            <!-- <a href="#" class="list-group-item active">
                Cras justo odio
            </a> -->
            <!-- <h4>O que você precisa?</h4> -->
            <a href="#" class="list-group-item">Altura</a>
            <a href="#" class="list-group-item">Ambientes externos</a>
            <a href="#" class="list-group-item">Carpintaria</a>
            <a href="#" class="list-group-item">Demolição</a>
            <a href="#" class="list-group-item">Cortes</a>
            <a href="#" class="list-group-item">Geradores</a>
            <a href="#" class="list-group-item">Jardinagem</a>
            <a href="#" class="list-group-item">Limpeza</a>
            <a href="#" class="list-group-item">Lixamento</a>
            <a href="#" class="list-group-item">Polimento</a>
            <a href="#" class="list-group-item">Motobomba</a>
            <a href="#" class="list-group-item">Obra Grossa</a>
            <a href="#" class="list-group-item">Pintura</a>
            <a href="#" class="list-group-item">Solda</a>
        </div>

        <div id="myCarousel" class="col-sm-8" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="imagens/material.jpg" alt="Materiais de Construção">
                </div>

                <div class="item">
                    <img src="imagens/materiais2.png" alt="Materiais de Contrução">
                </div>

                <div class="item">
                    <img src="imagens/varejo.jpg" alt="Varejo de materiais">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- <h4></h4> -->
    <div class="row">
        <div class="col-xs-2" id="prop">
            <a href="#" class="thumbnail">
                <img src="imagens/andaime.jpg" alt="...">
            </a>
        </div>
        <div class="col-xs-2" id="prop">
            <a href="#" class="thumbnail">
                <img src="imagens/escada.jpg" alt="...">
            </a>
        </div>
        <div class="col-xs-2" id="prop">
            <a href="#" class="thumbnail">
                <img src="imagens/pincel.jpg" alt="...">
            </a>
        </div>
        <div class="col-xs-2" id="prop">
            <a href="#" class="thumbnail">
                <img src="imagens/andaime.jpg" alt="...">
            </a>
        </div>
        <div class="col-xs-2" id="prop">
            <a href="#" class="thumbnail">
                <img src="imagens/escada.jpg" alt="...">
            </a>
        </div>
        <div class="col-xs-2" id="prop">
            <a href="#" class="thumbnail">
                <img src="imagens/pincel.jpg" alt="...">
            </a>
        </div>
        
    </div>
</main>

<?php
include_once('footer.php');
?>
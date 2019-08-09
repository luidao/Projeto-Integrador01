<?php
include_once('header.php');
?>



<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="imagens/andaime.jpg" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="pg_produto.php">Andaime</a></h4>
                                <h5 class="media-heading"> by <a href="#"><strong>Leroy Merlim</strong></a></h5>
                                <span>Status: </span><span class="text-success"><strong>Em estoque</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="3">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>R$400.87</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>$1202.61</strong></td>
                        <td class="col-sm-1 col-md-1">
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remover
                        </button></td>
                    </tr>
                    <tr>
                        <td class="col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="imagens/pincel.jpg" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">Pincel</a></h4>
                                <h5 class="media-heading"> by <a href="#"><strong>Tigre</strong></a></h5>
                                <span>Status: </span><span class="text-success"><strong>Em estoque</strong></span>
                            </div>
                        </div></td>
                        <td class="col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="2">
                        </td>
                        <td class="col-md-1 text-center"><strong>R$24.99</strong></td>
                        <td class="col-md-1 text-center"><strong>R$49.98</strong></td>
                        <td class="col-md-1">
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remover
                        </button></td>
                    </tr>
                    <tr>
                        <td class="col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="imagens/escada.jpg" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">Escada</a></h4>
                                <h5 class="media-heading"> by <a href="#"><strong>Tigre</strong></a></h5>
                                <span>Status: </span><span class="text-success"><strong>Em estoque</strong></span>
                            </div>
                        </div></td>
                        <td class="col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="0">
                        </td>
                        <td class="col-md-1 text-center"><strong>R$214.99</strong></td>
                        <td class="col-md-1 text-center"><strong>R$00.00</strong></td>
                        <td class="col-md-1">
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remover
                        </button></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal<br>Estimated shipping</h5><h3>Total</h3></td>
                        <td class="text-right"><h5><strong>R$1,252.59<br>R$60.94</strong></h5><h3>$1,313.53</h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continuar Comprando
                        </button></td>
                        <td>
                        <button type="button" class="btn btn-success">
                            Finalizar Compra <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<?php
include_once('footer.php');
?>
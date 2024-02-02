<?php 
    include_once('templates/header.php')
?>

   <div class="container">
        <?php if(isset($msgPring) && $msgPring != ''):?>
            <p id="mensagem"><?=$msgPring?></p>
        <?php endif;?>


        <h1 id="main_title"> Minha agenda </h1>
        <?php if(count($contacts) > 0):?>
            <table class="table" id="contatos_tabela">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Actions</th>     
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($contacts as $contato):?>
                        <tr>
                            <td scope="row"><?=$contato["id"]?></td>
                            <td scope="row"><?=$contato["name"]?></td>
                            <td scope="row"><?=$contato["phone"]?></td>
                            <td class="actions">
                                <a class="view" href="show.php?id=<?=$contato["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
                                <a href="edit.php?id=<?=$contato["id"] ?>"><i class="far fa-edit edit-icon"></i></a>

                                <form class="btnform" method="post" action="config/processamento.php">
                                    <input type="hidden" name="type" value="delete">
                                    <input type="hidden" name="id" value="<?=$contato["id"] ?>">

                                    <button class="btn" type="submit"><i class="fas fa-times delete-icon"></i></button>

                                </form>

                               
                            </td>

                        </tr>

                    <?php endforeach;?>
                </tbody>
            </table>
        <?php else:?>
            <p class="lista_vazia">Ainda não há contatos na sua agenda! <a href="create.php">Clique aqui para adicionar contatos.</a></p>


        <?php endif;?>
           


   </div>




<?php 

    include_once('templates/footer.php');
?>






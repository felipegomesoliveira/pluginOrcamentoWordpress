<?php
/*
Plugin Name: Agendamento via Whatsapp
Author: Felipe Gomes
Description: Plugin criado para facilitar o contato de clientes em seu site.
Author URI: https://github.com/felipegomesoliveira
Version: 1.0.0
Text domain cadastro_de_clientes
*/

function orcamento_whatsapp () {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $produto = $_POST['prod'];

    $texto_whats = "Olá Meu nome é *" . $nome . "* desejo um orçamento para meu *" . $produto . "* meu email é * " . $email;

    $msg_whats = str_replace(' ', '%20', $texto_whats);

    $url_whats = "https://api.whatsapp.com/send?phone=5533998512327&text=$msg_whats"


    ?>

    <?php
        if(isset($_POST['submit'])){ ?>
            <script type="text/javascript">
                window.location = "<?php echo $url_whats; ?>"
            </script>

       <?php } ?>
    ?>

    <form action="" method="post">
        <label for=""> Nome </label>
        <input type="text" name="nome"/>

        <label for="">Email</label>
        <input type="text" name="email"/>

        <label for="">Qual Produto você deseja?</label>
        <select id="" name="prod">
            <option value="orcamento para site"> Orçamento para site </option>
            <option value="orcamento para app"> orçamento para app</option>
            <option value="orcamento banco de dados"> orçamento de banco de dados</option>
        </select>

        <input type="submit" name="submit" value="pedir orçamento"/>
    </form>
    

<?php
}
add_shortcode('orcamento', 'orcamento_whatsapp');
<?php
require_once ('variaveis.php');

require_once ('head.php');

require_once ('header.php');

?>
<div id="mostra_desafio">
<h2>Desafio Seox</h2>
<p># **Teste Wordpress Backend**</p>

<p>### Resumo dos testes:</p>

<p>1 teste prático e 1 desafio para identificarmos suas habilidades em WordPress, Javascript, PHP e APIs:</p>

    <p>1) Teste WordPress (PHP) + criação de script externo em qualquer linguagem de programação com conexão à REST API do WordPress.</p>

    <p>- **OBJETIVO**</p>
    <p> - [ ]  Instalar e configurar o WordPress com o Plugin WooCommerce, 
    desenvolver plugins, configurar e implementar uma solução externa que 
    consulte a Rest API do WooCommerce.</p>
    <p> - Dica: Todas as etapas deste teste possuem exemplos e documentação relacionada na web!</p>
    <p>- **SETUP**</p>
    <p> - [x]  Instalar wordpress e o plugin Woocommerce em ambiente para apresentação dos resultados em reunião (seja localhost ou web).</p>
    <p> - [x]  Cadastrar 5 produtos.</p>
    <p> - [ ]  Realizar 2 pedidos.</p>
    <p> - [x]  Criar uma página no WordPress com o título 'Pedido'.</p>
    <p>- **PLUGINS**</p>
    <p> - a) **Desenvolver um plugin que ao finalizar um pedido no Woocommerce:**</p>
    <p>   - [ ]  Deverá ser criado um metadata com o horário exato do "pagamento confirmado", ou seja, quando o status do pedido passou a ser "processing".</p>
    <p> - O dispositivo utilizado pelo cliente mobile ou desktop ($_SERVER['HTTP_USER_AGENT']).</p>
    <p>- b) **Desenvolver um plugin do wordpress que retorne:**</p>
    <p> - [ ]  Um shortcode [woocommerce-pedidos] = deverá renderizar uma table com os pedidos do woocommerce (número pedido, status, data, valor quantidade de itens, horário do pagamento confirmado).</p>
    <p> - [ ]  Um shortcode [woocommerce-top-itens] = deverá  renderizar uma table com os 5 itens mais vendidos no Woocommerce (id item, descrição, valor). (EXTERNAL FUNCTIONS).</p>
    <p> - [ ]  Criar uma página independente do Wordpress, utilizando uma tecnologia/framework distinta do Wordpress. Para esta escolha, considere que a página poderá vir a receber centenas de milhares de acessos simultâneos e justifique, em um comentário no arquivo principal do fonte, a escolha da tecnologia.</p>
    <p> - [ ]  Esta página, então, deverá se conectar com a REST API do Woocommerce e listar os produtos em um formato pronto de "shop page" que seja compatível com a escolha da tecnologia. Para construção desta página você deve aproveitar os códigos disponíveis em Documentações/APIs e as fontes bibliográficas deste conteúdo deverão ser listadas junto a justificativa da tecnologia.</p>
    <p>- **ENTREGÁVEL**</p>
    <p>- [ ]  1) Um arquivo compactado com os arquivos utilizados para criar a solução do problema apresentado.</p>
    <p>- [ ]  2) Disponibilizar as aplicações em ambiente online. Caso você não consiga um servidor gratuito, solicite para nós um ambiente para instalar as aplicações. **</p>

    <p> --- Uma alternativa é gravar a apresentação em localhost e enviar um vídeo!</p>

    <p>- [ ]  **Desafio** - MOSTRE-NOS SUA GANA - Implementar uma função não existente no wordpress, podendo ser criada em qualquer tecnologia e adaptada ao funcionamento e implantada dentro do wordpress.</p>

    <p>- **OBJETIVO**</p>
    <p>- Entender a função de bloqueio de edições simultâneas em posts no Wordpress.</p>
    <p>- [ ]  Para isso, crie dois usuários no wordpress, acesse o ambiente ADMIN de posts com dois navegadores diferentes, cada um com um usuário e tente editar um mesmo post com o mesmo usuário. O sistema vai bloquear.</p>
    <p>- [ ]  Clonar esta função para uma “options pages”. Em outras palavras, é preciso bloquear o acesso simultâneo à edição de uma options pages seguindo a mesma lógica do bloqueio de posts, inclusive mantendo a opção de “assumir controle”.</p>
    <p>- **SETUP**</p>
    <p>- [x]  Instale o plugin Advanced Custom Fields.</p>
    <p>- [ ]  Siga o passo-a-passo para criar uma options page. [https://www.advancedcustomfields.com/resources/options-page/](https://www.advancedcustomfields.com/resources/options-page/)</p>
    <p>- **PLUGIN**</p>
    <p>- [ ]  Utilize somente um plugin (uma pasta com o plugin) para gerar a funcionalidade. Não altere o core do Wordpress.</p>
    <p>- **ENTREGÁVEL**</p>
    <p>- [ ]  1) Um arquivo compactado com os arquivos utilizados para criar a solução do problema apresentado.</p>
    <p>- [ ]  2) Disponibilizar as aplicações em ambiente online. Caso você não consiga um servidor gratuito, solicite para nós um ambiente para instalar as aplicações. **</p>
    <p>--- Uma alternativa é gravar a apresentação em localhost e enviar um vídeo!</p>
</div>
<?php

require_once ('footer.php');
?>
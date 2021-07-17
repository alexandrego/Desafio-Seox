Desafio Seox
# **Teste Wordpress Backend**

### Resumo dos testes:

1 teste prático e 1 desafio para identificarmos suas habilidades em WordPress, Javascript, PHP e APIs:

1) Teste WordPress (PHP) + criação de script externo em qualquer linguagem de programação com conexão à REST API do WordPress.

- **OBJETIVO**
    - [ ]  Instalar e configurar o WordPress com o Plugin WooCommerce, 
    desenvolver plugins, configurar e implementar uma solução externa que 
    consulte a Rest API do WooCommerce.
    - Dica: Todas as etapas deste teste possuem exemplos e documentação relacionada na web!
- **SETUP**
    - [x]  Instalar wordpress e o plugin Woocommerce em ambiente para apresentação dos resultados em reunião (seja localhost ou web).
    - [x]  Cadastrar 5 produtos.
    - [ ]  Realizar 2 pedidos.
    - [ ]  Criar uma página no WordPress com o título 'Pedido'.
- **PLUGINS**
    - a) **Desenvolver um plugin que ao finalizar um pedido no Woocommerce:**
        - [ ]  Deverá ser criado um metadata com o horário exato do "pagamento confirmado", ou seja, quando o status do pedido passou a ser "processing".
        - O dispositivo utilizado pelo cliente mobile ou desktop ($_SERVER['HTTP_USER_AGENT']).
    - b) **Desenvolver um plugin do wordpress que retorne:**
        - [ ]  Um shortcode [woocommerce-pedidos] = deverá renderizar uma table com os pedidos do woocommerce (número pedido, status, data, valor quantidade de itens, horário do pagamento confirmado).
        - [ ]  Um shortcode [woocommerce-top-itens] = deverá  renderizar uma table com os 5 itens mais vendidos no Woocommerce (id item, descrição, valor). (EXTERNAL FUNCTIONS).
        - [ ]  Criar uma página independente do Wordpress, utilizando uma tecnologia/framework distinta do Wordpress. Para esta escolha, considere que a página poderá vir a receber centenas de milhares de acessos simultâneos e justifique, em um comentário no arquivo principal do fonte, a escolha da tecnologia.
        - [ ]  Esta página, então, deverá se conectar com a REST API do Woocommerce e listar os produtos em um formato pronto de "shop page" que seja compatível com a escolha da tecnologia. Para construção desta página você deve aproveitar os códigos disponíveis em Documentações/APIs e as fontes bibliográficas deste conteúdo deverão ser listadas justo a justificativa da tecnologia.
- **ENTREGÁVEL**
    - [ ]  1) Um arquivo compactado com os arquivos utilizados para criar a solução do problema apresentado.
    - [ ]  2) Disponibilizar as aplicações em ambiente online. Caso você não consiga um servidor gratuito, solicite para nós um ambiente para instalar as aplicações. **

        --- Uma alternativa é gravar a apresentação em localhost e enviar um vídeo!

    - [ ]  **Desafio** - MOSTRE-NOS SUA GANA - Implementar uma função não existente no wordpress, podendo ser criada em qualquer tecnologia e adaptada ao funcionamento e implantada dentro do wordpress.

- **OBJETIVO**
    - Entender a função de bloqueio de edições simultâneas em posts no Wordpress.
    - [ ]  Para isso, crie dois usuários no wordpress, acesse o ambiente ADMIN de posts com dois navegadores diferentes, cada um com um usuário e tente editar um mesmo post com o mesmo usuário. O sistema vai bloquear.
    - [ ]  Clonar esta função para uma “options pages”. Em outras palavras, é preciso bloquear o acesso simultâneo à edição de uma options pages seguindo a mesma lógica do bloqueio de posts, inclusive mantendo a opção de “assumir controle”.
- **SETUP**
    - [ ]  Instale o plugin Advanced Custom Fields.
    - [ ]  Siga o passo-a-passo para criar uma options page. [https://www.advancedcustomfields.com/resources/options-page/](https://www.advancedcustomfields.com/resources/options-page/)
- **PLUGIN**
    - [ ]  Utilize somente um plugin (uma pasta com o plugin) para gerar a funcionalidade. Não altere o core do Wordpress.
- **ENTREGÁVEL**
    - [ ]  1) Um arquivo compactado com os arquivos utilizados para criar a solução do problema apresentado.
    - [ ]  2) Disponibilizar as aplicações em ambiente online. Caso você não consiga um servidor gratuito, solicite para nós um ambiente para instalar as aplicações. **                                       --- Uma alternativa é gravar a apresentação em localhost e enviar um vídeo!
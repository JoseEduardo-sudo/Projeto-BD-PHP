Aluno: José Eduardo      Turma: INFO4M
Professor: Thiago
  
  
conexao.php:
Nesse arquivo é feita a conexão do sistema com o banco de dados. Primeiro são colocadas as informações necessárias, como o servidor, o usuário, a senha e o nome do banco. Depois, o new mysqli usa essas informações para tentar fazer a conexão. Também tem uma verificação com connect_error, que serve para descobrir se aconteceu algum problema nessa conexão. Então, a parte mais importante desse arquivo é justamente permitir que o PHP consiga acessar o banco de dados.

index.php;
Esse é o arquivo onde fica o sistema de login. Primeiro ele inclui o conexao.php, porque precisa da conexão com o banco para conseguir verificar o usuário. Depois, ele verifica se o e-mail e a senha foram preenchidos. Se algum dos dois estiver vazio, aparece uma mensagem pedindo para preencher. Quando os dados estão preenchidos, o sistema pega o e-mail e a senha enviados pelo formulário e faz uma consulta na tabela usuarios para procurar alguém com aqueles mesmos dados. Se encontrar exatamente um usuário, ele inicia uma sessão e guarda o ID e o nome dele. Depois disso, manda o usuário para o painel.php. Então, o mais importante aqui é a verificação dos dados no banco e a criação da sessão quando o login dá certo.

protect.php;
Esse arquivo serve para impedir que uma pessoa acesse o painel sem estar logada. Ele inicia a sessão, caso ainda não esteja iniciada, e depois verifica se existe um id dentro da sessão. Esse ID é colocado na sessão quando o login é realizado com sucesso. Então, se o ID não existir, o sistema entende que a pessoa não está logada e impede o acesso à página. A parte mais importante aqui é justamente essa verificação da $_SESSION['id'], porque é ela que faz a proteção do painel.

painel.php;
Esse arquivo é a página que aparece depois que o login dá certo. Logo no começo ele inclui o protect.php, então antes de mostrar o painel o sistema verifica se o usuário realmente está logado. Depois ele usa o $_SESSION["nome"] para pegar o nome que foi salvo durante o login e mostrar a mensagem de boas-vindas. Também tem o link para o logout.php, que é usado quando o usuário quer sair da conta.

logout.php:
Esse arquivo é responsável por fazer o usuário sair da conta. Primeiro ele verifica se a sessão está iniciada e, se necessário, inicia ela. Depois vem a parte mais importante, que é o session_destroy(). Ele serve para destruir a sessão que estava sendo usada pelo usuário. Como o sistema usa essa sessão para saber que a pessoa está logada, quando ela é destruída o usuário deixa de ter aquela sessão ativa. Depois disso, o header manda a pessoa de volta para o index.php, que é a tela de login.

Resumo:
No geral, esses arquivos trabalham juntos para fazer o sistema de login funcionar. O conexao.php conecta o PHP ao banco, o index.php verifica o e-mail e a senha e cria a sessão quando o login está correto, o protect.php verifica se a pessoa está logada, o painel.php mostra o conteúdo para o usuário e o logout.php encerra a sessão quando ele sai. A sessão acaba sendo uma das partes mais importantes do sistema, porque é através dela que o programa consegue saber se o usuário está logado e também identificar quem está usando o painel.

# ATIVIDADE DOCKER

A atividade em questão teve como objetivo implementar  um servidor web usando Docker.

##Para realizar a tarefa conforme solicitado foram utilizadas as seguintes ferramentas:


Postfix  - https://hub.docker.com/r/boky/postfix

Servidor de email de código aberto, para envio e recebimento de email.


ubuntu/bind9 - ubuntu/bind9 - Docker Image | Docker Hub

O BIND 9 fornece software para gerenciamento de DNS (Sistema de Nomes de Domínio), incluindo a definição autoritária de nomes de domínio para uma determinada zona DNS e a resolução recursiva de nomes de domínio para seus endereços IP. Além do próprio servidor DNS do BIND 9, esse contêiner também inclui ferramentas para executar consultas DNS e atualizações dinâmicas.

Nginx - nginx - Official Image | Docker Hub

O NGINX como proxy reverso atua como um intermediário para solicitações de usuários que buscam recursos de servidores web. Ele recebe as solicitações e as encaminha para o servidor de origem, agindo como uma camada de proteção e otimização. Isso melhora a segurança, pois o endereço IP do servidor de origem fica oculto, e aumenta o desempenho ao distribuir o tráfego de forma eficiente. Além disso, o NGINX pode lidar com funções adicionais, como balanceamento de carga e cache de conteúdo.

Dovecot - https://hub.docker.com/r/dovecot/dovecot/

O Dovecot é um servidor IMAP/POP3 que fornece serviços robustos e seguros de e-mail. Utilizando Dovecot, é possível configurar um servidor de e-mail eficiente para receber e armazenar mensagens eletrônicas. Com suporte a IMAP e POP3, o Dovecot garante a integridade e a segurança das mensagens, além de oferecer um desempenho excepcional.
Com o uso do Dovecot em um contêiner Docker, é possível aproveitar a portabilidade e a facilidade de gerenciamento que os contêineres oferecem, permitindo que o servidor de e-mail seja facilmente configurado, atualizado e escalado conforme necessário.

## O projeto atual conta com a seguinte estrutura de arquivos:


DOCKER02/
├── dns/
│   ├── zones/
│   │   └── db.mary.asa.br
│   └── named.conf
├── mail/
│   ├── dovecot/
│   │   ├── Dockerfile
│   │   └── dovecot.conf
│   ├── postfix/
│   │   └── main.cf
├── proxy/
│   └── nginx.conf
├── roundcube/
│   ├── db/
│   │   └── sqlite.db
│   └── config.inc.php
├── www/
│   ├── html/
│   │   └── index.html
│   └── nginx.conf
├── docker-compose.yml
└── teste.py


###EXPLICANDO A ESTRUTURA


A estrutura do meu projeto exibida na imagem é uma configuração de diversos serviços utilizando Docker. Vou descrever cada pasta e arquivo e explicar o que cada um faz, além do resultado final esperado dessa estrutura.


##DESCRIÇÃO DE CADA COMPONENTE:

dns/
zones/
db.mary.asa.br: Este arquivo é uma zona DNS que contém mapeamentos de nomes de domínio para endereços IP. É usado para definir a autoridade sobre um domínio específico.

named.conf: Arquivo de configuração principal para o serviço DNS, provavelmente BIND. Ele define as zonas e outros parâmetros de configuração necessários para o serviço DNS.

mail/
dovecot/
Dockerfile: Define como construir a imagem Docker para o Dovecot, que é um servidor de e-mail IMAP/POP3. Com o Dockerfile, posso especificar as dependências e configurações necessárias para o Dovecot.

dovecot.conf: Arquivo de configuração do Dovecot, onde defino os parâmetros de operação do servidor de e-mail, como autenticação e diretórios de correio.

postfix/
main.cf: Arquivo de configuração principal do Postfix, que é um servidor de envio de e-mails (SMTP). Este arquivo define parâmetros como o domínio do e-mail, portas, métodos de autenticação e outras opções.

proxy/
nginx.conf: Arquivo de configuração do Nginx, que é usado como um proxy reverso. O Nginx encaminha solicitações HTTP para os serviços corretos, como o servidor web ou o cliente de webmail.

roundcube/
db/
sqlite.db: Banco de dados SQLite usado pelo Roundcube para armazenar dados como contatos e preferências do usuário.

config.inc.php: Arquivo de configuração do Roundcube, que define como o Roundcube se conecta ao servidor de e-mail e outras configurações específicas, como a interface do usuário e plugins.

www/
html/
index.html: Página inicial do servidor web, que pode ser um arquivo estático servindo algum conteúdo básico ou uma página de boas-vindas.

nginx.conf: Arquivo de configuração do Nginx específico para o conteúdo web servido a partir da pasta www.

docker-compose.yml
Este é o arquivo de orquestração do Docker Compose que define como os vários serviços (DNS, mail, proxy, Roundcube, www) serão montados e configurados. Ele especifica quais imagens Docker usar, redes, volumes e variáveis de ambiente para cada serviço. Com o docker-compose.yml, posso facilmente iniciar, parar e gerenciar todos os serviços do projeto com comandos simples.

teste.py
Este é um script Python que pode ser usado para testes ou automação de tarefas específicas relacionadas ao projeto. Sua função exata não é clara apenas pela estrutura, mas pode incluir verificações de funcionalidade, testes de integração ou automação de configuração.

## RESULTADO FINAL DA ESTRUTURA:
Com essa estrutura, estou configurando um ambiente completo de serviços de internet utilizando contêineres Docker. O resultado final esperado é:

Serviço DNS: Um servidor DNS autoritário que resolve nomes de domínio para endereços IP usando BIND, garantindo que meus domínios sejam corretamente mapeados.

Servidor de E-mail: Um servidor de e-mail completo com Postfix para SMTP (envio de e-mails) e Dovecot para IMAP/POP3 (recebimento e leitura de e-mails), permitindo envio, recebimento e armazenamento seguro de e-mails.

Proxy Reverso: Um proxy reverso configurado com Nginx para encaminhar solicitações HTTP para os serviços corretos, melhorando a segurança e a eficiência das comunicações web.

Webmail: Um cliente de webmail Roundcube, que fornece uma interface de webmail acessível e funcional para os usuários.

Servidor Web: Um servidor web que serve conteúdo estático a partir da pasta www, permitindo que os usuários acessem páginas web e outros recursos estáticos.

Automação e Testes: Scripts Python e outros arquivos de configuração para automatizar testes e garantir que todos os serviços funcionem corretamente.

Essa configuração completa me permitirá operar um servidor de internet funcional, com resolução de DNS, envio e recebimento de e-mails, acesso a um cliente de webmail e servidor de conteúdo web estático.

Além disso, realizei a criação de uma máquina virtual service e testes com sucesso, garantindo que toda a infraestrutura esteja funcionando conforme o esperado.


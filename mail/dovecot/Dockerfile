FROM dovecot/dovecot:latest

# Adiciona o usuário postfix com um UID diferente
RUN adduser --system --group --uid 200 --disabled-login --disabled-password --home /var/spool/postfix --no-create-home postfix

# Cria o diretório necessário e ajusta as permissões
RUN mkdir -p /var/spool/postfix/private/ && chown -R postfix:postfix /var/spool/postfix

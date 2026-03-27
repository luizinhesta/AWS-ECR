# Lab PHP + RDS (EC2)

Este é o clone do site estático com backend PHP para o lab EC2 + RDS.

## Configuração rápida
1. Suba o banco com o script `db/schema.sql`.
2. Configure as variáveis de ambiente no servidor web ou use um arquivo `.env`.
   - `DB_HOST`
   - `DB_PORT`
   - `DB_NAME`
   - `DB_USER`
   - `DB_PASS`
3. Acesse `index.php` no navegador.

## Arquivo .env
- Use o `website-php/.env.example` como base e crie `website-php/.env`.
- O `.env` é lido automaticamente no `bootstrap.php`.

## Observações
- O script `db/schema.sql` inclui um usuário demo com senha em texto. Ao logar, o sistema atualiza para hash automaticamente.
- Ajuste o Security Group do RDS para aceitar conexão da sua instância EC2.
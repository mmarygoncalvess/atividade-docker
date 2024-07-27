import imaplib

# Configurações do servidor IMAP
IMAP_SERVER = 'mail.mary.asa.br'
IMAP_PORT = 143

# Credenciais do usuário
USERNAME = 'sales'
PASSWORD = '1234'  # Substitua 'yourpassword' pela senha correta

try:
    # Conectar ao servidor IMAP
    mail = imaplib.IMAP4(IMAP_SERVER, IMAP_PORT)
    mail.login(USERNAME, PASSWORD)
    print("Conexão IMAP bem-sucedida!")
    mail.logout()
except imaplib.IMAP4.error as e:
    print(f"Erro na conexão IMAP: {e}")
except Exception as e:
    print(f"Erro geral: {e}")

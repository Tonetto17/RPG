import smtplib
import random
import string
import cgi
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart

def generate_random_password(length=8):
    characters = string.ascii_letters + string.digits + string.punctuation
    return ''.join(random.choice(characters) for _ in range(length))

# Obter dados do formulário HTML (se estiver sendo usado)
recipient_email = None

# Verificar se o script está sendo executado como CGI
if "recipient_email" in cgi.FieldStorage():
    form = cgi.FieldStorage()
    recipient_email = form.getvalue("recipient_email")

# Configurações do servidor SMTP e informações de e-mail
smtp_server = "smtp.office365.com"
smtp_port =  587
sender_email = "RPGTi22@outlook.com"
sender_password = "B1e2r3l4i5m6"

# Gerar uma nova senha aleatória
new_password = generate_random_password()

# Corpo do e-mail
subject = "Recuperação de Senha"
message = f"Sua nova senha é: {new_password}"

try:
    # Iniciar conexão com o servidor SMTP
    server = smtplib.SMTP(smtp_server, smtp_port)
    server.starttls()
    
    # Fazer login na conta de e-mail do remetente
    server.login(sender_email, sender_password)
    
    # Criar o e-mail
    msg = MIMEMultipart()
    msg["From"] = sender_email
    msg["To"] = recipient_email
    msg["Subject"] = subject
    msg.attach(MIMEText(message, "plain", "utf-8"))  # Usando UTF-8 para a codificação
    
    # Enviar o e-mail
    server.sendmail(sender_email, recipient_email, msg.as_string())
    
    # Fechar a conexão com o servidor SMTP
    server.quit()
    
    print("E-mail enviado com sucesso!")
except Exception as e:
    print("Erro ao enviar o e-mail:", e)

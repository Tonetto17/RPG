<?php
// Obtenha a mensagem do usuário a partir do corpo da solicitação
$request = json_decode(file_get_contents('php://input'), true);
$userMessage = $request['message'];

// Configurações da API do ChatGPT
$apiKey = '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'; // chave de API do ChatGPT
$url = 'https://api.openai.com/v1/chat/completions'; // URL corrigida

// Dados para enviar para a API do ChatGPT
$data = array(
    'messages' => array(
        array('role' => 'system', 'content' => 'Você está conversando com um atendente virtual.'),
        array('role' => 'user', 'content' => $userMessage)
    ),
    'model' => 'davinci' // Adicione o parâmetro 'model' aqui
);

// Configurações da solicitação
$headers = array(
    'Content-Type: application/json',
    'Authorization: Bearer ' . $apiKey
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);
curl_close($ch);

if ($response === false) {
    // Manipule o erro aqui
} else {
    $response = json_decode($response, true);

    if (isset($response['choices']) && !empty($response['choices'])) {
        $assistantMessage = $response['choices'][0]['message']['content'];

        // Retorne a resposta da IA
        echo json_encode(array('message' => $assistantMessage));
    } else {
        // Debug: Exibir a resposta completa da API para diagnóstico
        echo json_encode(array('message' => 'Resposta da API do OpenAI não possui o formato esperado.', 'response' => $response));
    }
}
?>












<!DOCTYPE html>
<html>
<head>
    <title>Atendimento via IA</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Bem-vindo ao Atendimento via IA</h1>
    <div id="chat-container">
        <div id="chat"></div>
        <input type="text" id="user-input" placeholder="Digite sua pergunta...">
        <button onclick="sendMessage()">Enviar</button>
    </div>

    <script>
        function appendMessage(sender, message) {
            var chatDiv = document.getElementById("chat");
            var messageDiv = document.createElement("div");
            messageDiv.innerHTML = "<strong>" + sender + ":</strong> " + message;
            chatDiv.appendChild(messageDiv);
        }

        function sendMessage() {
            var userInput = document.getElementById("user-input");
            var userMessage = userInput.value;
            appendMessage("Você", userMessage);
            userInput.value = "";

            // Enviar a pergunta para o servidor PHP
            fetch('chatbot.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ message: userMessage })
            })
            .then(response => response.json())
            .then(data => {
                appendMessage("IA", data.message);
            })
            .catch(error => {
                console.error('Erro ao enviar mensagem:', error);
            });
        }
    </script>
</body>
</html>

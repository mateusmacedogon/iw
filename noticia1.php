<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carlinhos e seus Cavalos - CarlinhosNews</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, rgba(26, 0, 0, 0.95) 0%, rgba(0, 0, 0, 0.95) 100%),
                        url('https://images.unsplash.com/photo-1590667046085-6b5661c2fb1e?auto=format&fit=crop&w=1920') center/cover fixed;
            margin: 0;
            padding: 20px;
            min-height: 100vh;
            color: #ffffff;
            position: relative;
        }
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMjAiIGN5PSIyMCIgcj0iMSIgZmlsbD0icmdiYSgyNTUsMCwwLDAuMSkiLz48L3N2Zz4=');
            opacity: 0.5;
            pointer-events: none;
            z-index: 1;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: rgba(26, 0, 0, 0.8);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(255, 0, 0, 0.15);
            border: 1px solid rgba(255, 0, 0, 0.2);
            backdrop-filter: blur(8px);
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        h1 {
            color: #ff3333;
            font-size: 2.5em;
            font-weight: 600;
            text-shadow: 0 2px 4px rgba(255, 0, 0, 0.2);
            margin: 0 0 20px 0;
        }
        .date {
            color: #ffb3b3;
            font-size: 1.1em;
            margin-bottom: 30px;
        }
        .content {
            color: #ffb3b3;
            font-size: 1.2em;
            line-height: 1.8;
        }
        .news-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 12px;
            margin: 20px 0;
            border: 1px solid rgba(255, 0, 0, 0.2);
            box-shadow: 0 4px 20px rgba(255, 0, 0, 0.15);
        }
        .image-caption {
            color: #ff9999;
            text-align: center;
            font-size: 0.9em;
            margin-top: -15px;
            margin-bottom: 25px;
            font-style: italic;
        }
        .back-link {
            display: inline-block;
            margin-top: 30px;
            color: #ff6666;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        .back-link:hover {
            color: #ff3333;
        }
    </style>
</head>
<body>
    <div class="container">
        <article>
            <header class="header">
                <h1>Carlinhos Prevê: Em 2050 Seus Cavalos Terão Tecnologia Avançada</h1>
                <div class="date">4 de Setembro, 2025</div>
            </header>
            
            <div class="content">
                <img src="https://images.unsplash.com/photo-1534773728080-33d31da27ae5" alt="Cavalo com equipamento tecnológico" class="news-image">
                <div class="image-caption">Protótipo dos primeiros sensores sendo testados nos cavalos de Carlinhos</div>
                <p>Em uma revelação surpreendente, Carlinhos, conhecido criador de cavalos, compartilhou sua visão futurista para o ano de 2050. Durante uma entrevista exclusiva, ele detalhou seus planos revolucionários para integrar tecnologia de ponta em sua fazenda de cavalos.</p>
                
                <p>"Imaginem cavalos com chips cerebrais que podem se comunicar diretamente com seus donos", explicou Carlinhos, seus olhos brilhando de empolgação. "Em 2050, meus cavalos terão sensores avançados que monitorarão sua saúde em tempo real e até mesmo permitirão que eles entendam comandos complexos."</p>
                
                <p>A inovadora fazenda de Carlinhos já é conhecida por suas práticas únicas de criação, mas suas previsões para 2050 elevam ainda mais o nível de ambição. Ele trabalha em parceria com especialistas em tecnologia para desenvolver protótipos de equipamentos que, segundo ele, "revolucionarão a maneira como nos relacionamos com esses magníficos animais".</p>
                
                <p>Dalva, sua fiel administradora há mais de duas décadas, confirma que os planos já estão em andamento. "Carlinhos sempre foi visionário. Quando ele fala do futuro, a gente aprende a acreditar", afirma ela, enquanto supervisiona a instalação dos primeiros sensores experimentais.</p>
            </div>
            
            <a href="index.php" class="back-link">← Voltar para a página inicial</a>
        </article>
    </div>
</body>
</html>

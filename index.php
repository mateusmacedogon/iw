<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarlinhoNews - Suas melhores notícias</title>
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
        }
        .header {
            text-align: center;
            margin-bottom: 40px;
            padding: 20px;
            background: rgba(26, 0, 0, 0.8);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(255, 0, 0, 0.15);
            border: 1px solid rgba(255, 0, 0, 0.2);
            backdrop-filter: blur(8px);
        }
        h1 {
            color: #ff3333;
            font-size: 3em;
            font-weight: 600;
            text-shadow: 0 2px 4px rgba(255, 0, 0, 0.2);
            letter-spacing: 2px;
            margin: 0;
        }
        .subtitle {
            color: #ffb3b3;
            font-size: 1.2em;
            margin-top: 10px;
        }
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .news-card {
            background: rgba(26, 0, 0, 0.8);
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 4px 24px rgba(255, 0, 0, 0.15);
            border: 1px solid rgba(255, 0, 0, 0.2);
            backdrop-filter: blur(8px);
            transition: all 0.3s ease;
            text-decoration: none;
            display: block;
        }
        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(255, 0, 0, 0.25);
        }
        .news-title {
            color: #ff3333;
            font-size: 1.5em;
            margin-bottom: 15px;
            font-weight: 600;
        }
        .news-excerpt {
            color: #ffb3b3;
            font-size: 1.1em;
            line-height: 1.6;
            margin: 0;
        }
        .read-more {
            color: #ff6666;
            margin-top: 15px;
            display: inline-block;
            font-weight: 500;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>CarlinhosNews</h1>
            <div class="subtitle">Suas melhores notícias</div>
        </header>
        
        <div class="news-grid">
            <a href="noticia1.php" class="news-card">
                <h2 class="news-title">Carlinhos Prevê: Em 2050 Seus Cavalos Terão Tecnologia Avançada</h2>
                <p class="news-excerpt">Visionário criador de cavalos revela planos futuristas para sua fazenda. Tecnologia revolucionária promete transformar a relação entre humanos e cavalos...</p>
                <span class="read-more">Leia mais →</span>
            </a>
            
            <a href="noticia2.php" class="news-card">
                <h2 class="news-title">Dalva Conta os Segredos dos Bastidores com Carlinhos</h2>
                <p class="news-excerpt">Administradora revela histórias fascinantes sobre a rotina na fazenda e os preparativos para o projeto 2050...</p>
                <span class="read-more">Leia mais →</span>
            </a>

            <a href="noticia3.php" class="news-card">
                <h2 class="news-title">Cleide Descobre Ervas Raras no Matagal da Fazenda</h2>
                <p class="news-excerpt">Especialista em plantas medicinais encontra espécies únicas que podem complementar o tratamento tecnológico dos cavalos...</p>
                <span class="read-more">Leia mais →</span>
            </a>

            <a href="noticia4.php" class="news-card">
                <h2 class="news-title">Mistério no Matagal: Cleide e Dalva Encontram Antiga Tecnologia</h2>
                <p class="news-excerpt">Dupla faz descoberta surpreendente durante expedição de coleta de ervas. Carlinhos planeja criar museu na fazenda...</p>
                <span class="read-more">Leia mais →</span>
            </a>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dalva Revela Segredos - CarlinhosNews</title>
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
        .image-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin: 20px 0;
        }
        .image-grid img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 12px;
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
                <h1>Dalva Conta os Segredos dos Bastidores com Carlinhos</h1>
                <div class="date">4 de Setembro, 2025</div>
            </header>
            
            <div class="content">
                <img src="https://images.unsplash.com/photo-1553284965-83fd3e82fa5a" alt="Fazenda tecnológica com estábulos modernos" class="news-image">
                <div class="image-caption">Vista aérea da fazenda de Carlinhos com os novos estábulos tecnológicos</div>
                
                <div class="image-grid">
                    <img src="https://images.unsplash.com/photo-1566251037378-5e04e3bec343" alt="Monitoramento dos cavalos">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgPce1Lko_VYrfXsvR6Cxswa1wihKEjEWTfA&s" alt="Equipamentos de tecnologia equestre">
                <p>Em uma entrevista exclusiva, Dalva, a lendária parceira de trabalho de Carlinhos, revelou histórias fascinantes sobre os bastidores de sua convivência com os cavalos e as preparações para o grande projeto de 2050.</p>
                
                <p>"Tem dias que o Carlinhos chega aqui às 5 da manhã só para ficar observando os cavalos", conta Dalva, com um sorriso nostálgico. "Ele tem uma conexão especial com cada um deles, sabe o nome, a personalidade, os gostos... É impressionante!"</p>
                
                <p>Segundo Dalva, os preparativos para o projeto 2050 já estão mudando a rotina da fazenda. "Instalamos câmeras especiais em todos os estábulos, e Carlinhos passa horas analisando o comportamento dos cavalos. Ele diz que em 2050 vamos revolucionar o mundo equestre, e do jeito que ele é determinado, eu acredito!"</p>
                
                <p>A administradora também revelou que Carlinhos mantém um diário secreto onde anota todas as suas ideias para o futuro. "Ele já planejou tudo até 2050. Tem projetos que parecem coisa de filme de ficção científica, mas com o Carlinhos, a gente aprende que nada é impossível", finaliza Dalva, enquanto mostra os novos equipamentos tecnológicos recém-instalados na fazenda.</p>
            </div>
            
            <a href="index.php" class="back-link">← Voltar para a página inicial</a>
        </article>
    </div>
</body>
</html>

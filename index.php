<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SecMinds - Defesa Cibernética Inteligente</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; scroll-behavior: smooth; }
    body { font-family: 'Inter', sans-serif; background-color: #000; color: #fff; overflow-x: hidden; }

    header {
      background-color: #0a0a0a;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 999;
      border-bottom: 1px solid #1f1f1f;
    }
    header h1 { color: #00cc8c; font-size: 1.5rem; }
    nav a {
      color: #ccc;
      margin-left: 1.5rem;
      text-decoration: none;
      font-weight: 600;
      transition: color 0.3s;
    }
    nav a:hover { color: #00cc8c; }

    .hero {
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background: #000;
      text-align: center;
      padding: 2rem;
      position: relative;
      overflow: hidden;
    }
    .hero canvas {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 0;
      pointer-events: none;
    }
    .hero::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.85);
      z-index: 1;
    }
    .hero * {
      position: relative;
      z-index: 2;
    }
    .hero h2 {
      font-size: 3rem;
      margin-bottom: 1rem;
      color: #00cc8c;
      animation: glow 2s ease-in-out infinite alternate;
    }
    .hero p {
      font-size: 1.3rem;
      color: #bbb;
      max-width: 600px;
      margin-bottom: 2rem;
    }
    .hero button {
      background-color: #00cc8c;
      color: #000;
      padding: 0.8rem 2rem;
      font-size: 1rem;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .hero button:hover {
      background-color: #009f6b;
    }

    @keyframes glow {
      from {
        text-shadow: 0 0 5px #00cc8c, 0 0 10px #00cc8c;
      }
      to {
        text-shadow: 0 0 20px #00cc8c, 0 0 30px #00cc8c;
      }
    }

    .about, .blog, .contato {
      padding: 4rem 2rem;
      background-color: #0f0f0f;
      text-align: center;
    }
    .about h3, .blog h3, .contato h3 {
      font-size: 2rem;
      margin-bottom: 1rem;
      color: #00cc8c;
    }
    .about p, .blog p, .contato p {
      font-size: 1.1rem;
      color: #ccc;
      max-width: 700px;
      margin: 0 auto 1rem auto;
    }

    .whatsapp-btn {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: #25d366;
      color: white;
      border-radius: 50%;
      width: 60px;
      height: 60px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 30px;
      z-index: 999;
      box-shadow: 0 0 10px #25d366;
    }
    .whatsapp-btn:hover {
      background-color: #1ebd5a;
    }

    footer {
      text-align: center;
      padding: 2rem;
      background-color: #0a0a0a;
      border-top: 1px solid #1f1f1f;
      color: #888;
    }
    .hero button {
    background-color: #00cc8c;
    color: #000;
    padding: 0.8rem 2rem;
    font-size: 1rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    box-shadow: 0 0 10px #00cc8c, 0 0 20px #00cc8c;
    transition: all 0.3s ease-in-out;
  }
  .hero button:hover {
    background-color: #009f6b;
    box-shadow: 0 0 15px #00cc8c, 0 0 25px #00cc8c;
    transform: scale(1.05);
  }
  .box-flip {
    perspective: 1000px;
    display: inline-block;
    margin: 1rem;
  }
  .box-inner {
    width: 300px;
    height: 200px;
    transition: transform 0.6s;
    transform-style: preserve-3d;
    position: relative;
  }
  .box-flip:hover .box-inner {
    transform: rotateY(180deg);
  }
  .box-front, .box-back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #0a0a0a;
    border: 1px solid #00cc8c;
    color: #fff;
    border-radius: 10px;
  }
  .box-back {
    transform: rotateY(180deg);
    background: #00cc8c;
    color: #000;
  }
</style>
  <?php wp_head(); ?>
<style>
  .reveal {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s ease-out;
  }
  .reveal.visible {
    opacity: 1;
    transform: translateY(0);
  }
</style>
</head>
<body>
  <header>
    <h1>SecMinds</h1>
    <nav>
      <a href="#sobre-nos">Sobre Nós</a>
      <a href="#blog">Blog</a>
      <a href="#contato">Contato</a>
      <a href="solucoes.html">Soluções</a>
    </nav>
  </header>

  <section class="hero">
    <canvas id="matrix"></canvas>
    <h2>Defesa Cibernética Inteligente</h2>
    <p style="font-size: 1.3rem; color: #bbb; max-width: 600px; margin-bottom: 2rem;">Protegemos empresas com estratégias ofensivas, cloud security e treinamentos humanos. Experimente nosso diferencial.</p>
    <button onclick="location.href='contato.html'">Solicite um Diagnóstico</button>
  </section>

  <section class="about reveal" id="sobre-nos">
    <h3>Quem Somos</h3>
    <p>Mais de 10 anos de experiência em testes de intrusão, campanhas de phishing e análises cloud. Atuamos com foco no impacto e no resultado tangível.</p>
    <p>Trabalhamos com as tecnologias e metodologias mais modernas do mercado. Nosso time possui certificações reconhecidas e atua com transparência e agilidade.</p>
  </section>

  <section class="blog reveal" id="blog">
    <h3>Blog e Notícias</h3>
    <p>Confira nossos artigos sobre ataques recentes, zero-days, falhas em nuvem e como prevenir riscos cibernéticos. Conteúdo para decisores, técnicos e curiosos.</p>
    <p><a href="blog.html" style="color: #00cc8c; font-weight: bold;">Acessar o blog &rarr;</a></p>
  </section>

  <section class="contato reveal" id="contato">
    <h3>Fale com nosso time</h3>
    <p>Entre em contato para tirar dúvidas, entender nosso processo ou agendar um bate-papo.</p>
    <p>Email: <a href="mailto:secminds@outlook.com.br" style="color: #00cc8c;">secminds@outlook.com.br</a></p>
    <p>Celular: (11) 96312-1750</p>
  </section>

  <a href="https://wa.me/5511963121750" class="whatsapp-btn" title="Fale no WhatsApp" target="_blank">💬</a>

  

  <section class="about" id="solucoes">
    <h3 style="color:#00cc8c">Nossas Soluções</h3>
    <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:2rem; margin-top:2rem;">
      <div class="box-flip">
        <div class="box-inner">
          <div class="box-front" style="background-image: url('/mnt/data/50e33c94-024b-4907-b688-151598593253.png'); background-size: cover; background-position: center; font-weight: bold; font-size: 1.1rem; padding: 1rem; text-align: center;">Pentest Web & Infra</div>
          <div class="box-back">Simulação real de ataques para descobrir vulnerabilidades antes dos hackers.</div>
        </div>
      </div>
      <div class="box-flip">
        <div class="box-inner">
          <div class="box-front" style="background-image: url('/mnt/data/ef4c09ac-c9ba-47d3-9d36-dd65d4fc9698.png'); background-size: cover; background-position: center; font-weight: bold; font-size: 1.1rem; padding: 1rem; text-align: center;">Análise de Vulnerabilidades</div>
          <div class="box-back">Scans técnicos validados com relatório executivo para priorização dos riscos.</div>
        </div>
      </div>
      <div class="box-flip">
        <div class="box-inner">
          <div class="box-front" style="background-image: url('/mnt/data/955d7e9c-f167-41de-b5de-5386555b5039.png'); background-size: cover; background-position: center; font-weight: bold; font-size: 1.1rem; padding: 1rem; text-align: center;">Segurança em Nuvem</div>
          <div class="box-back">Validação de configurações e acesso em ambientes AWS, Azure e Google Cloud.</div>
        </div>
      </div>
      <div class="box-flip">
        <div class="box-inner">
          <div class="box-front" style="background-image: url('/mnt/data/f0be7a87-b130-4ee0-b8f0-d7a077f90801.png'); background-size: cover; background-position: center; font-weight: bold; font-size: 1.1rem; padding: 1rem; text-align: center;">Engenharia Social</div>
          <div class="box-back">Campanhas de phishing e conscientização para avaliar o fator humano.</div>
        </div>
      </div>
    </div>
  </section>

  <footer style="display: flex; flex-wrap: wrap; justify-content: space-around; background-color: #0a0a0a; padding: 2rem; border-top: 1px solid #1f1f1f;">
    <div>
      <h4 style="color: #00cc8c; margin-bottom: 0.5rem;">Links Úteis</h4>
      <p><a href="#" style="color: #ccc; text-decoration: none;">Home</a></p>
      <p><a href="#sobre-nos" style="color: #ccc; text-decoration: none;">Sobre nós</a></p>
      <p><a href="#blog" style="color: #ccc; text-decoration: none;">Blog</a></p>
      <p><a href="#contato" style="color: #ccc; text-decoration: none;">Contato</a></p>
    </div>
    <div>
      <h4 style="color: #00cc8c; margin-bottom: 0.5rem;">Contato</h4>
      <p>Email: secminds@outlook.com</p>
      <p>WhatsApp: (11) 96312-1750</p>
    </div>
    <div>
      <h4 style="color: #00cc8c; margin-bottom: 0.5rem;">Endereço</h4>
      <p>São Paulo - SP</p>
      <p>Brasil</p>
    </div>
    <div style="margin-top: 2rem; text-align: center; width: 100%;">
      <p style="color: #00cc8c; font-weight: bold;">&copy; 2025 SecMinds</p>
      <p style="color: #888">Todos os direitos reservados.</p>
    </div>
  </footer>

<script>
  window.addEventListener("load", () => {
    const canvas = document.getElementById("matrix");
    if (!canvas) return;
    const ctx = canvas.getContext("2d");
    canvas.height = window.innerHeight;
    canvas.width = window.innerWidth;

    const letters = "01";
    const fontSize = 16;
    const columns = Math.floor(canvas.width / fontSize);
    const drops = Array(columns).fill(1);

    function draw() {
      ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
      ctx.fillRect(0, 0, canvas.width, canvas.height);
      ctx.fillStyle = "#00cc8c";
      ctx.font = fontSize + "px monospace";

      for (let i = 0; i < drops.length; i++) {
        const text = letters.charAt(Math.floor(Math.random() * letters.length));
        ctx.fillText(text, i * fontSize, drops[i] * fontSize);
        if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
          drops[i] = 0;
        }
        drops[i]++;
      }
    }

    setInterval(draw, 33);

    window.addEventListener('resize', () => {
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
    });
  });
</script>
<script>
  // efeito sonoro ao digitar (só aplica se for reusado com typing)
  const playTypingSound = () => {
    const audio = new Audio('https://cdn.pixabay.com/download/audio/2022/10/24/audio_b6e29fce3e.mp3?filename=typewriter-key-4-113449.mp3');
    audio.volume = 0.2;
    audio.play();
  };
</script>
<script>
  function revealOnScroll() {
    const elements = document.querySelectorAll('.reveal');
    const windowHeight = window.innerHeight;
    elements.forEach(el => {
      const elementTop = el.getBoundingClientRect().top;
      if (elementTop < windowHeight - 100) {
        el.classList.add('visible');
      }
    });
  }
  window.addEventListener('scroll', revealOnScroll);
  window.addEventListener('load', revealOnScroll);
</script>

  <?php wp_footer(); ?>
</body>
</html>

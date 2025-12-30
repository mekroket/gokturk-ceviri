<?php
// Alphabet Data
$alphabet = [
    ['lat' => 'A/E', 'gok' => '𐰀'],
    ['lat' => 'I/İ', 'gok' => '𐰃'],
    ['lat' => 'O/U', 'gok' => '𐰆'],
    ['lat' => 'Ö/Ü', 'gok' => '𐰇'],
    ['lat' => 'B', 'gok' => '𐰉 / 𐰋'],
    ['lat' => 'D', 'gok' => '𐰑 / 𐰓'],
    ['lat' => 'G', 'gok' => '𐰍 / 𐰏'],
    ['lat' => 'K', 'gok' => '𐰴 / 𐰚'],
    ['lat' => 'L', 'gok' => '𐰞 / 𐰠'],
    ['lat' => 'N', 'gok' => '𐰣 / 𐰤'],
    ['lat' => 'R', 'gok' => '𐰺 / 𐰼'],
    ['lat' => 'S', 'gok' => '𐰽 / 𐰾'],
    ['lat' => 'T', 'gok' => '𐱃 / 𐱅'],
    ['lat' => 'Y', 'gok' => '𐰖 / 𐰘'],
    ['lat' => 'Ç', 'gok' => '𐰲'],
    ['lat' => 'M', 'gok' => '𐰢'],
    ['lat' => 'P', 'gok' => '𐰯'],
    ['lat' => 'Ş', 'gok' => '𐱁'],
    ['lat' => 'Z', 'gok' => '𐰔'],
];
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Göktürkçe Çeviri - Latin'den Göktürk Alfabesine Çevirici | Oğuz Kaan</title>

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Latin harfli Türkçe metinlerinizi anında Göktürkçe'ye (Orhun Alfabesi) çevirin. Büyük ünlü uyumuna dikkat eden akıllı çeviri aracı. Göktürk tarihi ve alfabesi hakkında bilgi edinin.">
    <meta name="keywords"
        content="göktürkçe çeviri, göktürkçe klavye, orhun alfabesi, göktürk alfabesi, türkçe göktürkçe çeviri, damgalar, eski türkçe, runik yazı, oğuz kaan">
    <meta name="author" content="Oğuz Kaan Ekin">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://gokturkce.oguzkaanekin.site/">
    <meta property="og:title" content="Göktürkçe Çeviri - Latin'den Göktürk Alfabesine">
    <meta property="og:description"
        content="Latin harfli Türkçe metinlerinizi anında Göktürkçe'ye (Orhun Alfabesi) çevirin. Tarihimize sahip çıkın.">
    <meta property="og:image" content="https://gokturkce.oguzkaanekin.site/assets/og-image.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://gokturkce.oguzkaanekin.site/">
    <meta property="twitter:title" content="Göktürkçe Çeviri - Latin'den Göktürk Alfabesine">
    <meta property="twitter:description"
        content="Latin harfli Türkçe metinlerinizi anında Göktürkçe'ye (Orhun Alfabesi) çevirin.">
    <meta property="twitter:image" content="https://gokturkce.oguzkaanekin.site/assets/og-image.jpg">

    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "Göktürkçe Çeviri Aracı",
      "url": "https://gokturkce.oguzkaanekin.site/",
      "description": "Latin harfli Türkçe metinleri Göktürk alfabesine (Orhun Yazıtları) çeviren ücretsiz online araç.",
      "applicationCategory": "UtilityApplication",
      "operatingSystem": "Any",
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "TRY"
      },
      "author": {
        "@type": "Person",
        "name": "Oğuz Kaan Ekin"
      }
    }
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Cinzel:wght@400;700&display=swap');

        @font-face {
            font-family: 'Orkhon';
            src: local('Segoe UI Historic'), local('Noto Sans Old Turkic'), local('Orkhon');
        }

        :root {
            --primary: #00ff9d;
            --secondary: #008f58;
            --accent: #ffb700;
            /* Gold for historical feel */
            --bg: #050505;
            --panel: rgba(0, 15, 10, 0.9);
            --border: #005f3a;
            --text-main: #e0e0e0;
        }

        body {
            background-color: var(--bg);
            color: var(--text-main);
            font-family: 'Cinzel', serif;
            /* More historical font for body text */
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* Rug Pattern Border (CSS Gradient) */
        .rug-border {
            width: 100%;
            height: 10px;
            background: repeating-linear-gradient(45deg,
                    var(--border),
                    var(--border) 10px,
                    var(--bg) 10px,
                    var(--bg) 20px);
            border-bottom: 2px solid var(--accent);
            box-shadow: 0 0 10px var(--accent);
        }

        .bg-effect {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                radial-gradient(circle at 50% 50%, rgba(0, 255, 157, 0.03) 0%, transparent 70%),
                url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgdmlld0JveD0iMCAwIDQwIDQwIiBmaWxsPSJub25lIiBzdHJva2U9IiMwMDVmM2EiIHN0cm9rZS1vcGFjaXR5PSIwLjEiPjxwYXRoIGQ9Ik0wIDQwTDQwIDBNMCAwTDQwIDQwIi8+PC9zdmc+');
            z-index: 0;
            pointer-events: none;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            text-align: center;
            position: relative;
            z-index: 1;
            padding: 2rem 0;
        }

        /* Header */
        .header-section {
            margin-bottom: 3rem;
            position: relative;
            padding: 2rem;
            border-bottom: 1px solid var(--border);
        }

        .wolf-icon {
            width: 100px;
            height: 100px;
            fill: var(--primary);
            filter: drop-shadow(0 0 15px var(--primary));
            margin-bottom: 1rem;
            animation: glow 3s infinite alternate;
        }

        @keyframes glow {
            from {
                filter: drop-shadow(0 0 10px var(--primary));
            }

            to {
                filter: drop-shadow(0 0 25px var(--primary));
            }
        }

        h1 {
            font-family: 'Orbitron', sans-serif;
            font-size: 4rem;
            margin: 0;
            color: var(--primary);
            text-shadow: 0 0 20px var(--secondary);
            letter-spacing: 5px;
        }

        .subtitle {
            font-size: 1.4rem;
            color: var(--accent);
            text-transform: uppercase;
            letter-spacing: 8px;
            margin-top: 0.5rem;
            font-weight: bold;
        }

        /* Info Sections */
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin-bottom: 3rem;
            text-align: left;
        }

        .info-card {
            background: rgba(0, 0, 0, 0.6);
            border: 1px solid var(--border);
            padding: 2rem;
            border-radius: 10px;
            position: relative;
            transition: transform 0.3s;
        }

        .info-card:hover {
            transform: translateY(-5px);
            border-color: var(--accent);
            box-shadow: 0 5px 15px rgba(255, 183, 0, 0.1);
        }

        .info-card h3 {
            color: var(--primary);
            font-family: 'Orbitron', sans-serif;
            border-bottom: 1px solid var(--secondary);
            padding-bottom: 0.5rem;
            margin-top: 0;
        }

        .info-card p {
            font-size: 1rem;
            color: #ccc;
        }

        /* Converter Box */
        .converter-box {
            background: var(--panel);
            border: 2px solid var(--primary);
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 0 40px rgba(0, 255, 157, 0.1);
            backdrop-filter: blur(10px);
            margin-bottom: 4rem;
            position: relative;
        }

        /* Runic Corners */
        .corner-decoration {
            position: absolute;
            width: 30px;
            height: 30px;
            border: 2px solid var(--accent);
            transition: all 0.3s;
        }

        .tl {
            top: 10px;
            left: 10px;
            border-right: none;
            border-bottom: none;
        }

        .tr {
            top: 10px;
            right: 10px;
            border-left: none;
            border-bottom: none;
        }

        .bl {
            bottom: 10px;
            left: 10px;
            border-right: none;
            border-top: none;
        }

        .br {
            bottom: 10px;
            right: 10px;
            border-left: none;
            border-top: none;
        }

        textarea {
            width: 100%;
            height: 150px;
            background: #080808;
            border: 1px solid var(--border);
            color: #fff;
            padding: 1.5rem;
            font-size: 1.4rem;
            border-radius: 8px;
            resize: vertical;
            margin-bottom: 1.5rem;
            font-family: 'Courier New', monospace;
            box-sizing: border-box;
        }

        textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 15px rgba(0, 255, 157, 0.2);
        }

        button {
            background: linear-gradient(45deg, var(--secondary), var(--primary));
            color: #000;
            border: none;
            padding: 1rem 4rem;
            font-size: 1.4rem;
            font-weight: bold;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 3px;
            box-shadow: 0 0 20px rgba(0, 255, 157, 0.4);
        }

        button:hover {
            transform: scale(1.05);
            box-shadow: 0 0 30px var(--primary);
            color: #fff;
        }

        .result-area {
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px dashed var(--border);
            display: none;
            /* Hidden by default */
            flex-direction: column;
            align-items: center;
            gap: 1.5rem;
            width: 100%;
        }

        .result-text {
            font-family: 'Orkhon', 'Segoe UI Historic', sans-serif;
            font-size: 4rem;
            color: #fff;
            text-shadow: 0 0 15px #fff, 0 0 30px var(--primary);
            direction: ltr;
            text-align: center;
            word-break: break-word;
            line-height: 1.4;
            width: 100%;
        }

        .copy-btn-styled {
            background: transparent !important;
            border: 1px solid var(--primary) !important;
            color: var(--primary) !important;
            padding: 0.8rem 2.5rem !important;
            font-size: 1.1rem !important;
            border-radius: 8px !important;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 2px;
            box-shadow: none !important;
            margin-top: 0 !important;
        }

        .copy-btn-styled:hover {
            background: rgba(0, 255, 157, 0.1) !important;
            box-shadow: 0 0 15px rgba(0, 255, 157, 0.3) !important;
            transform: translateY(-2px) !important;
            color: #fff !important;
        }

        .alphabet-section h2 {
            font-family: 'Orbitron', sans-serif;
            color: var(--accent);
            margin-bottom: 2rem;
            font-size: 2rem;
        }

        .alphabet-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(90px, 1fr));
            gap: 1rem;
        }

        .char-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid var(--border);
            padding: 0.8rem;
            border-radius: 5px;
            transition: all 0.2s;
        }

        .char-card:hover {
            background: var(--primary);
            color: #000;
            transform: scale(1.1);
            border-color: #fff;
        }

        .char-card:hover .lat-char {
            color: #000;
        }

        .gok-char {
            font-family: 'Orkhon', sans-serif;
            font-size: 1.8rem;
            display: block;
            margin-bottom: 0.2rem;
        }

        .lat-char {
            font-size: 0.9rem;
            color: var(--accent);
            font-weight: bold;
        }

        /* Footer */
        footer {
            margin-top: 5rem;
            padding: 2rem;
            border-top: 1px solid var(--border);
            color: #666;
            font-size: 0.9rem;
        }

        /* Music Button */
        .music-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgba(0, 0, 0, 0.7);
            border: 2px solid var(--primary);
            color: var(--primary);
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 1000;
            padding: 0;
            box-shadow: 0 0 15px rgba(0, 255, 157, 0.3);
            transition: all 0.3s ease;
        }

        .music-btn:hover {
            transform: scale(1.1);
            background: var(--primary);
            color: #000;
            box-shadow: 0 0 25px var(--primary);
        }

        .music-btn.muted {
            border-color: var(--accent);
            color: var(--accent);
            box-shadow: 0 0 15px rgba(255, 183, 0, 0.3);
        }

        @media (max-width: 768px) {
            .info-grid {
                grid-template-columns: 1fr;
            }

            h1 {
                font-size: 2.5rem;
            }

            .result-text {
                font-size: 3rem;
            }
        }
    </style>
</head>

<body>

    <div class="rug-border"></div>
    <div class="bg-effect"></div>

    <div class="container">
        <div class="header-section">
            <svg class="wolf-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12,2L4,5V11C4,16.55 7.4,21.74 12,23C16.6,21.74 20,16.55 20,11V5L12,2M12,4L18,6.25V11C18,15.5 15.42,19.5 12,20.6C8.58,19.5 6,15.5 6,11V6.25L12,4M12,7C10.9,7 10,7.9 10,9H14C14,7.9 13.1,7 12,7M10,10H8V12H10V10M16,10H14V12H16V10M12,13C10.67,13 9.5,13.8 9.1,15H14.9C14.5,13.8 13.33,13 12,13Z" />
            </svg>
            <h1>GÖKTÜRKÇE</h1>
            <div class="subtitle">Kök Tengri'nin Yazısı</div>
        </div>

        <!-- Informational Section -->
        <div class="info-grid">
            <div class="info-card">
                <h3>Göktürk Kağanlığı</h3>
                <p>
                    Göktürk Kağanlığı (552–744), Türk adını resmi devlet adı olarak kullanan ilk imparatorluktur.
                    Bumin Kağan tarafından kurulan devlet, Orta Asya'da hüküm sürmüş ve Türk tarihinin en parlak
                    dönemlerinden birını yaşatmıştır.
                    Kültürel mirasımızın en önemli taşları bu dönemde döşenmiştir.
                </p>
            </div>
            <div class="info-card">
                <h3>Orhun Yazıtları</h3>
                <p>
                    Türk tarihinin ilk yazılı belgeleri olan Orhun Yazıtları (Kül Tigin, Bilge Kağan ve Tonyukuk),
                    8. yüzyılda dikilmiştir. Bu taşlar, Türk milletine öğütler verir, devlet yönetimini anlatır ve
                    bağımsızlığın önemini vurgular. "Üstte mavi gök, altta yağız yer kılındıkta..."
                </p>
            </div>
            <div class="info-card">
                <h3>Alfabe Mantığı</h3>
                <p>
                    Göktürk alfabesi 38 harften oluşur. En önemli özelliği <strong>Büyük Ünlü Uyumu</strong>'na dayalı
                    olmasıdır.
                    Ünsüzler, yanındaki ünlünün "Kalın" (a, ı, o, u) veya "İnce" (e, i, ö, ü) oluşuna göre değişir.
                    Örneğin, "K" harfi ince ünlülerle 𐰚, kalın ünlülerle 𐰴 olarak yazılır.
                </p>
            </div>
            <div class="info-card">
                <h3>Yazım Yönü</h3>
                <p>
                    Göktürkçe, geleneksel olarak <strong>sağdan sola</strong> doğru yazılır ve okunur.
                    Kelimeler arasına genellikle iki nokta (:) konularak ayrılır. Bu sitedeki çevirici,
                    modern okuma kolaylığı için harfleri mantıksal sırada sunar.
                </p>
            </div>
        </div>

        <div class="converter-box">
            <div class="corner-decoration tl"></div>
            <div class="corner-decoration tr"></div>
            <div class="corner-decoration bl"></div>
            <div class="corner-decoration br"></div>

            <form id="converterForm" onsubmit="event.preventDefault(); convertText();">
                <textarea id="inputText" name="text"
                    placeholder="Metni buraya girin (Örn: Türk, Tanrı, Kut, Bilge)..."></textarea>
                <button type="submit">ÇEVİR</button>
            </form>

            <div class="result-area" id="resultArea">
                <div class="result-text" id="result"></div>
                <button class="copy-btn-styled" onclick="copyToClipboard()">Kopyala</button>
            </div>
        </div>

        <div class="alphabet-section">
            <h2>DAMGALAR (ALFABE)</h2>
            <div class="alphabet-grid">
                <?php foreach ($alphabet as $char): ?>
                    <div class="char-card">
                        <span class="gok-char"><?= $char['gok'] ?></span>
                        <span class="lat-char"><?= $char['lat'] ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <footer>
            <p>
                "Türk Oğuz Beyleri, milleti, işitin: Üstte gök çökmedikçe, altta yer delinmedikçe, senin ilini ve töreni
                kim bozabilir?"<br><br>
                Oğuz Kaan tarafından geliştirildi. | v2.0
            </p>
        </footer>
    </div>

    <audio id="bgMusic" loop>
        <source src="assets/turk_kani.mp3" type="audio/mpeg">
        Tarayıcınız ses elementini desteklemiyor.
    </audio>

    <button id="musicToggle" class="music-btn" onclick="toggleMusic()">
        🔊
    </button>

    <script>
        // Music Player Logic
        const audio = document.getElementById('bgMusic');
        const musicBtn = document.getElementById('musicToggle');
        let isPlaying = false;

        // Try to autoplay on load
        window.addEventListener('load', function () {
            audio.volume = 0.4; // Set volume to 40%
            const playPromise = audio.play();

            if (playPromise !== undefined) {
                playPromise.then(_ => {
                    isPlaying = true;
                    updateMusicIcon();
                }).catch(error => {
                    // Autoplay was prevented
                    console.log("Autoplay prevented by browser policy");
                    isPlaying = false;
                    updateMusicIcon();
                });
            }
        });

        function toggleMusic() {
            if (isPlaying) {
                audio.pause();
                isPlaying = false;
            } else {
                audio.play();
                isPlaying = true;
            }
            updateMusicIcon();
        }

        function updateMusicIcon() {
            if (isPlaying) {
                musicBtn.innerHTML = '🔊';
                musicBtn.classList.remove('muted');
            } else {
                musicBtn.innerHTML = '🔇';
                musicBtn.classList.add('muted');
            }
        }

        async function convertText() {
            const text = document.getElementById('inputText').value;
            if (!text) return;

            try {
                const response = await fetch('convert.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ text: text }),
                });

                const data = await response.json();

                if (data.success) {
                    document.getElementById('result').innerText = data.result;
                    document.getElementById('resultArea').style.display = 'flex'; // Show the result area
                } else {
                    console.error('Conversion failed:', data.message);
                    // Optionally display an error message to the user
                }
            } catch (error) {
                console.error('Error:', error);
                // Optionally display a network error message to the user
            }
        }

        function copyToClipboard() {
            const text = document.getElementById('result').innerText;
            navigator.clipboard.writeText(text).then(() => {
                alert('Kopyalandı!');
            }).catch(err => {
                console.error('Failed to copy text: ', err);
                alert('Kopyalama başarısız oldu.');
            });
        }
    </script>

</body>

</html>
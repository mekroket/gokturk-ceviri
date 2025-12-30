# 𐱅𐰇𐰼𐰚 - Göktürkçe Çeviri Kütüphanesi & Web Arayüzü

![Göktürkçe Banner](https://github.com/mekroket/gokturk-ceviri/blob/main/5.png)

> **"Üstte mavi gök, altta yağız yer kılındıkta..."**

Latin harfli Türkçe metinlerinizi, dilimizin bilinen en eski yazılı kaynağı olan **Göktürk (Orhun) Alfabesine** çeviren, büyük ünlü uyumuna dikkat eden akıllı bir PHP kütüphanesi ve modern web arayüzü.

## 🔗 Canlı Yayın
Projeyi anlık olarak buradan deneyebilirsiniz: **[gokturk.oguzkaanekin.site](https://gokturk.oguzkaanekin.site)**

## 🌟 Özellikler

*   **🧠 Akıllı Dönüşüm:** Sadece harf harf çeviri yapmaz; **Büyük Ünlü Uyumu** kurallarını (Kalın/İnce) analiz ederek doğru damgaları (runeleri) seçer.
*   **🔄 Çift Yönlü Çeviri:** Sadece Latin'den Göktürkçe'ye değil, Göktürkçe'den Latin'e de çeviri yapabilir. Göktürkçe metindeki ünsüz uyumuna bakarak doğru Latin ünlülerini tahmin eder.
*   **🎨 Cyber-Turkic Tasarım:** Tarihsel motifleri (Bozkurt, kilim desenleri) modern "Cyberpunk" estetiğiyle (Neon yeşil, cam efektleri) birleştiren eşsiz arayüz.
*   **🎵 Atmosferik Müzik:** Arkaplanda "Er Turan - Türk Kanı" parçası ile tam bir atmosfer sunar. (Otomatik sessizlik atlama ve döngü özelliği).
*   **⚡ Anlık Çeviri (AJAX):** Sayfa yenilenmeden, yazdığınız anda çeviri yapar.
*   **📱 Mobil Uyumlu:** Tüm cihazlarda kusursuz görünür.
*   **🔍 SEO & Paylaşım:** Google ve sosyal medya (Open Graph, Twitter Cards) için tam optimize edilmiştir.
*   **📋 Kopyala Yapıştır:** Tek tıkla çeviriyi panoya kopyalama.

## 🚀 Kurulum

Projeyi yerel sunucunuzda (XAMPP, WAMP, Docker vb.) çalıştırmak için:

1.  **Depoyu Klonlayın:**
    ```bash
    git clone https://github.com/mekroket/gokturk-ceviri.git
    cd gokturk-ceviri
    ```

2.  **Sunucuyu Başlatın:**
    Proje klasörünü web sunucunuzun kök dizinine (örn: `www` veya `htdocs`) taşıyın veya PHP'nin dahili sunucusunu kullanın:
    ```bash
    php -S localhost:8000
    ```

3.  **Tarayıcıda Açın:**
    `http://localhost:8000` adresine gidin.

## 💻 Kullanım (PHP Kütüphanesi)

Çeviri motorunu kendi PHP projelerinizde kullanabilirsiniz:

```php
require_once 'src/Converter.php';
use OguzKaan\Gokturk\Converter;

$cevirici = new Converter();

// Latin -> Göktürkçe
echo $cevirici->convert("Türk");  // Çıktı: 𐱅𐰇𐰼𐰚

// Göktürkçe -> Latin
echo $cevirici->reverseConvert("𐱅𐰇𐰼𐰚"); // Çıktı: türk
```

## 🌐 API Kullanımı

Proje, AJAX istekleri için basit bir JSON API sunar:

*   **Endpoint:** `POST /convert.php`
*   **Body:** `{"text": "𐱅𐰇𐰼𐰚", "direction": "gokturk-to-latin"}`
*   **Response:**
    ```json
    {
        "success": true,
        "result": "türk"
    }
    ```

## 📂 Proje Yapısı

```
gokturk-ceviri/
├── src/
│   └── Converter.php    # Ana çeviri mantığı (Class)
├── assets/
│   ├── turk_kani.mp3    # Arkaplan müziği
│   └── og-image.jpg     # Sosyal medya görseli
├── index.php            # Web arayüzü (Frontend)
├── convert.php          # API Endpoint
├── robots.txt           # SEO
└── sitemap.xml          # SEO
```

## 🤝 Katkıda Bulunma

1.  Bu depoyu "Fork"layın.
2.  Yeni bir dal (branch) oluşturun (`git checkout -b ozellik/YeniOzellik`).
3.  Değişikliklerinizi yapın ve commit'leyin (`git commit -m 'Yeni özellik eklendi'`).
4.  Dalınızı "Push"layın (`git push origin ozellik/YeniOzellik`).
5.  Bir "Pull Request" açın.

## 📜 Lisans

Bu proje [MIT Lisansı](LICENSE) ile lisanslanmıştır.

---

**Geliştirici:** [Oğuz Kaan Ekin](https://github.com/mekroket)

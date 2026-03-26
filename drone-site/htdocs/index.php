<?php
$products = require __DIR__ . '/myfolder/products.php';
$featured = array_slice($products, 0, 8, true);
?>
<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>北京飞行魔方科技有限公司 | 低空经济无人机与飞行平台</title>
  <meta name="description" content="北京飞行魔方科技有限公司成立于 2016 年，聚焦飞控、机体、AI 与云平台一体化研发，产品覆盖物流无人机、编队表演无人机、载人飞行器、应急消防无人机及低空飞行综合管理服务平台。">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
  <div class="container nav">
    <a class="brand brand-logo" href="index.php"><img src="assets/customer/logo.png" alt="飞行魔方 Logo"></a>
    <nav class="menu">
      <a href="about.php">公司介绍</a>
      <a href="products.php">产品中心</a>
      <a href="cases.php">应用案例</a>
      <a href="news.php">新闻资讯</a>
      <a href="#technology">技术优势</a>
      <a href="contact.php" class="cta">联系我们</a>
    </nav>
  </div>
</header>

<section class="hero hero-tall">
  <img class="hero-bg" src="assets/customer/homepage/home-hero.jpg" alt="飞行魔方无人机主视觉">
  <div class="container hero-content hero-single">
    <div class="hero-copy">
      <span class="eyebrow">Low-Altitude Economy · Logistics / Firefighting / Drone Show / eVTOL</span>
      <h1 class="hero-title">低空物流、消防、编队与载人平台的一体化产品体系</h1>
      <p>北京飞行魔方科技成立于 2016 年，聚焦飞控、机体、AI 与云平台一体化研发，产品覆盖物流无人机、应急消防无人机、编队表演平台、载人飞行器与低空飞行综合管理服务平台。</p>
      <div class="hero-actions">
        <a class="btn btn-primary" href="products.php">Explore Our Fleet</a>
        <a class="btn btn-secondary" href="#gallery">View Media</a>
      </div>
    </div>
  </div>
</section>

<section class="section section-tight hero-stats-wrap">
  <div class="container">
    <div class="hero-intro-panel">
      <div class="hero-intro-copy">
        <strong>物流无人机</strong>
        <span>覆盖 5kg 至 300kg 多级运载能力</span>
      </div>
      <div class="hero-intro-copy">
        <strong>应急消防</strong>
        <span>150kg 大载重消防投弹无人机平台</span>
      </div>
      <div class="hero-intro-copy">
        <strong>编队与载人</strong>
        <span>室外编队、室内编队与轻型载人展示平台</span>
      </div>
    </div>
    <div class="hero-stats-grid">
      <div class="metric"><div><strong>2016</strong><span>公司成立时间</span></div></div>
      <div class="metric"><div><strong>5kg-300kg</strong><span>物流无人机载重覆盖</span></div></div>
      <div class="metric"><div><strong>20+</strong><span>专利与软著</span></div></div>
      <div class="metric"><div><strong>飞控+机体+AI+云</strong><span>一体化研发能力</span></div></div>
    </div>
    <div class="logo-strip" style="margin-top:18px;">
      <span>智慧物流</span>
      <span>应急消防</span>
      <span>文旅演艺</span>
      <span>载人体验</span>
      <span>低空监管</span>
      <span>行业运营</span>
    </div>
  </div>
</section>

<section class="section" id="about">
  <div class="container showcase reverse-mobile">
    <div>
      <div class="section-header">
        <h2>以“飞控 + 机体 + AI + 云”构建面向低空场景的产品与服务能力</h2>
        <p>飞行魔方聚焦低空经济场景下的整机、系统和平台协同交付，网站内容以现有资料整理为基础，主要展示产品方向、应用场景与配套服务能力。</p>
      </div>
      <div class="dark-panel">
        <p>公司具备自研自适应 PID 算法和优化的 EKF 多传感器融合算法，拥有多旋翼、直升机、固定翼、eVTOL 等构型空气动力学与结构设计经验，并通过云原生微服务平台支撑批量调度控制、实时监测、空域合规校验与高清直播。</p>
        <ul class="feature-list">
          <li>物流无人机：覆盖 5kg、8kg、50kg、100kg、150kg、300kg 多级运载能力</li>
          <li>编队表演无人机：支持室内近场与室外大规模灯光编队演出</li>
          <li>载人飞行器：面向展示、体验和试验性低空飞行场景</li>
          <li>低空管理平台：支持飞行数据监管、任务规划、站点管理与二次开发</li>
        </ul>
        <div class="hero-actions">
          <a class="btn btn-secondary" href="about.php">查看更多公司介绍</a>
        </div>
      </div>
    </div>
    <div class="photo dramatic photo-toned"><img src="assets/customer/homepage/home-about.jpg" alt="飞行魔方物流无人机"></div>
  </div>
</section>

<section class="section dark-section" id="fleet">
  <div class="container">
    <div class="section-header centered">
      <span class="eyebrow">Our Fleet</span>
      <h2>核心产品矩阵</h2>
      <p>从轻型物流平台到重载运输系统，从消防装备到编队与载人展示平台，形成覆盖多场景的产品组合。</p>
    </div>
    <div class="grid grid-3 cards-lift">
      <?php foreach ($featured as $slug => $product): ?>
      <article class="card product-card product-card-large">
        <div class="product-image-wrap">
          <img src="<?= htmlspecialchars((isset($product['card_image']) ? $product['card_image'] : $product['image'])) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
        </div>
        <div class="card-body">
          <div class="product-meta">
            <span><?= htmlspecialchars($product['category']) ?></span>
            <span>载荷 <?= htmlspecialchars($product['payload']) ?></span>
            <span>续航 <?= htmlspecialchars($product['endurance']) ?></span>
          </div>
          <h3><?= htmlspecialchars($product['name']) ?></h3>
          <p><?= htmlspecialchars($product['summary']) ?></p>
          <ul class="feature-list compact">
            <?php foreach (array_slice($product['features'], 0, 3) as $feature): ?>
              <li><?= htmlspecialchars($feature) ?></li>
            <?php endforeach; ?>
          </ul>
          <a class="btn btn-secondary" href="product.php?slug=<?= urlencode($slug) ?>">进入详情页</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
    <div class="hero-actions" style="justify-content:center;margin-top:36px">
      <a class="btn btn-primary" href="products.php">查看全部产品</a>
    </div>
  </div>
</section>

<section class="section" id="technology">
  <div class="container">
    <div class="section-header centered">
      <span class="eyebrow">Why Magic Flight</span>
      <h2>核心能力</h2>
      <p>围绕飞控、机体、AI 与云平台，形成覆盖研发、交付与平台协同的综合能力。</p>
    </div>
    <div class="grid grid-3">
      <div class="dark-panel tall-panel">
        <h3>深耕飞控核心</h3>
        <p>自研自适应 PID 算法和 EKF 多传感器融合算法，可用于支持多机型飞行控制与复杂场景下的任务需求。</p>
      </div>
      <div class="dark-panel tall-panel">
        <h3>机载 AI 与边缘计算</h3>
        <p>集成异构 GPU，支持视觉 SLAM、目标识别与避障，并可结合轻量模型方案用于空中识别与任务辅助决策。</p>
      </div>
      <div class="dark-panel tall-panel">
        <h3>统一云端运营平台</h3>
        <p>基于云原生微服务架构，支持批量调度控制、实时检测、空域合规校验、高清直播与开放 API，对接企业业务系统。</p>
      </div>
    </div>
  </div>
</section>

<section class="section image-story">
  <div class="container showcase">
    <div class="photo cinematic photo-toned"><img src="assets/customer/homepage/home-story.jpg" alt="飞行魔方编队表演"></div>
    <div class="dark-panel story-panel">
      <span class="eyebrow">How We Deliver</span>
      <h2>从整机研发，到场景交付，再到持续运营支持</h2>
      <p>飞行魔方不仅提供单一产品，还围绕行业任务流程提供参数配置、系统平台、培训和运维支持，让无人机能力真正变成可执行的业务能力。</p>
      <div class="timeline">
        <div class="timeline-item"><strong>需求分析</strong><br>结合物流、消防、文旅、监管等应用场景匹配机型与任务流程。</div>
        <div class="timeline-item"><strong>方案交付</strong><br>整机、系统、平台与实施建议同步交付，降低项目落地门槛。</div>
        <div class="timeline-item"><strong>持续服务</strong><br>围绕运维、升级、任务优化和行业扩展进行长期支持。</div>
      </div>
    </div>
  </div>
</section>

<section class="section dark-section" id="gallery">
  <div class="container">
    <div class="section-header centered compact-header">
      <span class="eyebrow">In Pictures</span>
      <h2>核心影像</h2>
      <p>围绕消防、物流、编队与载人平台保留四类核心画面，让首页结构更接近专业无人机官网的展示方式。</p>
    </div>
    <div class="home-media-grid">
      <div class="media-feature media-fire photo-toned">
        <img src="assets/customer/homepage/home-fire.jpg" alt="应急消防无人机">
        <div class="media-caption"><strong>应急消防</strong><span>FC-F150pro 大载重消防投弹无人机场景图</span></div>
      </div>
      <div class="media-feature media-logistics photo-toned">
        <img src="assets/customer/homepage/home-logistics.jpg" alt="物流无人机">
        <div class="media-caption"><strong>物流运输</strong><span>150 公斤级物流无人机平台展示</span></div>
      </div>
      <div class="media-feature media-show photo-toned">
        <img src="assets/customer/homepage/home-show.jpg" alt="编队表演无人机">
        <div class="media-caption"><strong>编队演艺</strong><span>星幻编队无人机外场表演素材</span></div>
      </div>
      <div class="media-feature media-manned photo-toned">
        <img src="assets/customer/homepage/home-manned.jpg" alt="载人飞行器">
        <div class="media-caption"><strong>载人体验</strong><span>蛋壳飞行器展示素材</span></div>
      </div>
    </div>
    <div class="media-grid media-grid-videos">
      <div class="media-card">
        <video controls preload="metadata">
          <source src="assets/customer/logistics-150.mp4" type="video/mp4">
          您的浏览器暂不支持视频播放。
        </video>
        <p>FC-TS150 150 公斤物流无人机视频资料</p>
      </div>
      <div class="media-card">
        <video controls preload="metadata">
          <source src="assets/customer/manned.mp4" type="video/mp4">
          您的浏览器暂不支持视频播放。
        </video>
        <p>蛋壳飞行器视频资料</p>
      </div>
    </div>
  </div>
</section>

<section class="section testimonials">
  <div class="container">
    <div class="section-header centered">
      <span class="eyebrow">Qualifications</span>
      <h2>资质与项目经验</h2>
      <p>基于资料整理，目前已在网站中突出展示公司的核心能力与代表性资质方向。</p>
    </div>
    <div class="grid grid-3">
      <div class="card quote-card"><div class="card-body"><p>“公司拥有超 20 项专利与软著，具备从飞控、机体到整机量产的一体化研发能力。”</p><strong>— 研发与知识产权能力</strong></div></div>
      <div class="card quote-card"><div class="card-body"><p>“团队成员来自亿航、北航、清华、北邮等背景，参与过载人 eVTOL、低空经济示范、公安应急和跨海物流等重点项目。”</p><strong>— 项目与合规经验</strong></div></div>
      <div class="card quote-card"><div class="card-body"><p>“资料中展示了中关村高新技术企业、通航企业许可、无人驾驶航空器运营许可、成都大运会合作伙伴等方向。”</p><strong>— 企业资质与合作履历</strong></div></div>
    </div>
  </div>
</section>

<section class="section section-tight">
  <div class="container cta-banner giant-cta">
    <span class="eyebrow">Ready To Work Together?</span>
    <h2>获取产品资料、项目方案与定制化低空解决方案</h2>
    <p>如果你还要，我可以继续把 PDF / DOCX 里的更多参数表、视频展示区和下载入口做进正式页面。</p>
    <div class="hero-actions">
      <a class="btn btn-primary" href="contact.php">联系我们</a>
      <a class="btn btn-secondary" href="products.php">查看全部产品</a>
    </div>
  </div>
</section>

<section class="section" id="contact">
  <div class="container footer-grid">
    <div class="contact-card emphasis">
      <h2>联系我们</h2>
      <p>欢迎联系北京飞行魔方科技有限公司，获取产品资料、行业方案、合作支持与部署建议。</p>
      <p><strong>公司名称：</strong>北京飞行魔方科技有限公司</p>
      <p><strong>联系人：</strong>潘先生</p>
      <p><strong>联系电话：</strong>13671086911</p>
      <p><strong>联系邮箱：</strong>pxzleo@126.com</p>
      <p><strong>公司地址：</strong>北京市昌平区史各庄街道生命科学园路北清创意园4-1楼</p>
      <p><strong>主营方向：</strong>物流无人机、应急消防、编队表演、载人飞行器、低空飞行综合管理服务平台</p>
    </div>
    <div class="contact-card">
      <h3>快速导航</h3>
      <p><a href="about.php">公司介绍</a></p>
      <p><a href="products.php">产品中心</a></p>
      <p><a href="#technology">技术优势</a></p>
      <p><a href="#gallery">影像中心</a></p>
    </div>
    <div class="contact-card">
      <h3>当前已完成</h3>
      <p>公司名与介绍替换</p>
      <p>产品矩阵重建</p>
      <p>真实图片素材接入</p>
      <p>模板文案清理</p>
    </div>
  </div>
</section>


<section class="section section-tight">
  <div class="container">
    <div class="dark-panel">
      <h3>内容说明</h3>
      <p>本网站所载产品参数、图片、案例及相关介绍主要依据现有资料整理，仅供沟通参考，不构成性能承诺或正式交付标准。具体配置、功能、适用场景、服务内容及合作方式，请以双方正式沟通、测试结果及合同约定为准。</p>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="container footer-bottom">
    <div>© <?php echo date('Y'); ?> 北京飞行魔方科技有限公司</div>
    <div>Low-Altitude Logistics · Firefighting · Drone Show · eVTOL · Platform · flicube.com</div>
  </div>
</footer>
</body>
</html>

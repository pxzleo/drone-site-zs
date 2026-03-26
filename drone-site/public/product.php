<?php
$products = require __DIR__ . '/../data/products.php';
$slug = $_GET['slug'] ?? '';
$product = $products[$slug] ?? null;
if (!$product) {
    http_response_code(404);
}
?>
<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $product ? htmlspecialchars($product['name']) : '产品不存在' ?> | 北京飞行魔方科技有限公司</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
  <div class="container nav">
    <a class="brand" href="index.php">飞行魔方<small>BEIJING MAGIC FLIGHT TECH</small></a>
    <nav class="menu">
      <a href="index.php">首页</a>
      <a href="about.php">公司介绍</a>
      <a href="products.php">产品中心</a>
      <a href="cases.php">应用案例</a>
      <a href="news.php">新闻资讯</a>
      <a href="contact.php" class="cta">联系我们</a>
    </nav>
  </div>
</header>

<section class="page-hero">
  <div class="container">
    <?php if (!$product): ?>
      <div class="section-header">
        <div class="breadcrumb"><a href="index.php">首页</a> / 产品不存在</div>
        <h1>未找到对应产品</h1>
        <p>请返回产品中心重新选择。</p>
        <a class="btn btn-primary" href="products.php">返回产品中心</a>
      </div>
    <?php else: ?>
      <div class="breadcrumb"><a href="index.php">首页</a> / <a href="products.php">产品中心</a> / <?= htmlspecialchars($product['name']) ?></div>
      <div class="product-layout">
        <div class="photo"><img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>"></div>
        <div>
          <span class="eyebrow"><?= htmlspecialchars($product['category']) ?></span>
          <h1 class="detail-title"><?= htmlspecialchars($product['name']) ?></h1>
          <p style="font-size:18px;color:#d5e4f8"><?= htmlspecialchars($product['hero']) ?></p>
          <div class="product-meta" style="margin:22px 0 6px">
            <span>载荷 <?= htmlspecialchars($product['payload']) ?></span>
            <span>续航 <?= htmlspecialchars($product['endurance']) ?></span>
            <span>航程 <?= htmlspecialchars($product['range']) ?></span>
          </div>
          <p><?= htmlspecialchars($product['description']) ?></p>
          <div class="hero-actions">
            <a class="btn btn-primary" href="contact.php">获取报价</a>
            <a class="btn btn-secondary" href="products.php">查看更多产品</a>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>

<?php if ($product): ?>
<section class="section">
  <div class="container grid grid-2">
    <div class="dark-panel">
      <h2>产品特点</h2>
      <ul class="feature-list">
        <?php foreach ($product['features'] as $feature): ?>
          <li><?= htmlspecialchars($feature) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="dark-panel">
      <h2>核心参数</h2>
      <table class="spec-table">
        <?php foreach ($product['specs'] as $label => $value): ?>
        <tr>
          <th><?= htmlspecialchars($label) ?></th>
          <td><?= htmlspecialchars($value) ?></td>
        </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</section>

<section class="section dark-section">
  <div class="container grid grid-3">
    <div class="dark-panel tall-panel"><h3>适用场景</h3><p><?= htmlspecialchars($product['name']) ?> 适合根据具体产品方向应用于物流运输、应急消防、文旅演艺、载人展示、低空监管平台接入等场景，并支持按任务需求进行配置调整。</p></div>
    <div class="dark-panel tall-panel"><h3>任务扩展</h3><p>支持按行业需求搭载货舱、吊挂、光电、喊话、照明或定制任务模块，并支持接口与系统联动扩展。</p></div>
    <div class="dark-panel tall-panel"><h3>交付支持</h3><p>提供培训、维保、备件、现场支持与运营协同服务，帮助客户更高效地完成项目落地。</p></div>
  </div>
</section>

<section class="section">
  <div class="container showcase">
    <div class="photo"><img src="assets/images/gallery/gallery-2.webp" alt="<?= htmlspecialchars($product['name']) ?> 场景图"></div>
    <div class="dark-panel">
      <h2>方案说明</h2>
      <p><?= htmlspecialchars($product['name']) ?> 可根据项目预算、场景复杂度和任务频率形成标准版、增强版或定制版配置。对于行业客户，我们还可配套地面站、培训方案、巡检流程或运输作业方案，帮助形成完整交付。</p>
      <div class="timeline">
        <div class="timeline-item"><strong>标准部署</strong><br>适合常规场景，交付周期短，适于快速启动项目。</div>
        <div class="timeline-item"><strong>行业增强</strong><br>增加任务挂载、数据接口与更适合复杂场景的系统配置。</div>
        <div class="timeline-item"><strong>深度定制</strong><br>针对大型行业客户，支持软硬件联合定制与系统级联动。</div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container cta-banner">
    <h2>想了解 <?= htmlspecialchars($product['name']) ?> 的参数资料、配置清单和应用方案？</h2>
    <p>欢迎联系我们，获取详细资料、项目适配建议与产品方案。</p>
    <div class="hero-actions">
      <a class="btn btn-primary" href="contact.php">联系商务</a>
      <a class="btn btn-secondary" href="products.php">返回产品中心</a>
    </div>
  </div>
</section>
<?php endif; ?>

<footer class="footer">
  <div class="container footer-bottom">
    <div>© <?php echo date('Y'); ?> 北京飞行魔方科技有限公司</div>
    <div>产品详情页</div>
  </div>
</footer>
</body>
</html>

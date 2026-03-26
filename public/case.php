<?php
$cases = require __DIR__ . '/../data/cases.php';
$slug = $_GET['slug'] ?? '';
$case = $cases[$slug] ?? null;
if (!$case) {
    http_response_code(404);
}
?>
<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $case ? htmlspecialchars($case['title']) : '案例不存在' ?> | 北京飞行魔方科技有限公司</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
  <div class="container nav">
    <a class="brand brand-logo" href="index.php"><img src="assets/customer/logo.png" alt="飞行魔方 Logo"><span>飞行魔方<small>BEIJING MAGIC FLIGHT TECH</small></span></a>
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
    <?php if (!$case): ?>
      <div class="section-header">
        <div class="breadcrumb"><a href="index.php">首页</a> / 案例不存在</div>
        <h1>未找到对应案例</h1>
        <p>请返回应用案例页面重新选择。</p>
        <a class="btn btn-primary" href="cases.php">返回应用案例</a>
      </div>
    <?php else: ?>
      <div class="breadcrumb"><a href="index.php">首页</a> / <a href="cases.php">应用案例</a> / <?= htmlspecialchars($case['title']) ?></div>
      <div class="product-layout">
        <div class="photo"><img src="<?= htmlspecialchars($case['image']) ?>" alt="<?= htmlspecialchars($case['title']) ?>"></div>
        <div>
          <span class="eyebrow">Use Case Detail</span>
          <h1 class="detail-title"><?= htmlspecialchars($case['title']) ?></h1>
          <p style="font-size:18px;color:#d5e4f8"><?= htmlspecialchars($case['subtitle']) ?></p>
          <p><?= htmlspecialchars($case['summary']) ?></p>
          <div class="hero-actions">
            <a class="btn btn-primary" href="contact.php">咨询该方案</a>
            <a class="btn btn-secondary" href="cases.php">返回案例列表</a>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>

<?php if ($case): ?>
<section class="section">
  <div class="container grid grid-2">
    <div class="dark-panel">
      <h2>场景痛点</h2>
      <ul class="feature-list">
        <?php foreach ($case['pain_points'] as $item): ?>
          <li><?= htmlspecialchars($item) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="dark-panel">
      <h2>解决方案</h2>
      <p><?= htmlspecialchars($case['solution']) ?></p>
    </div>
  </div>
</section>

<section class="section dark-section">
  <div class="container grid grid-3">
    <div class="dark-panel tall-panel">
      <h3>适配产品</h3>
      <ul class="feature-list compact">
        <?php foreach ($case['products'] as $item): ?>
          <li><?= htmlspecialchars($item) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="dark-panel tall-panel">
      <h3>实施流程</h3>
      <ul class="feature-list compact">
        <?php foreach ($case['process'] as $item): ?>
          <li><?= htmlspecialchars($item) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="dark-panel tall-panel">
      <h3>交付内容</h3>
      <ul class="feature-list compact">
        <?php foreach ($case['deliverables'] as $item): ?>
          <li><?= htmlspecialchars($item) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<section class="section">
  <div class="container cta-banner">
    <h2>想进一步了解“<?= htmlspecialchars($case['title']) ?>”的具体配置与实施方式？</h2>
    <p>欢迎联系北京飞行魔方科技有限公司，获取详细资料、产品推荐与项目建议。</p>
    <div class="hero-actions">
      <a class="btn btn-primary" href="contact.php">联系潘先生</a>
      <a class="btn btn-secondary" href="products.php">查看产品中心</a>
    </div>
  </div>
</section>
<?php endif; ?>

<footer class="footer">
  <div class="container footer-bottom">
    <div>© <?php echo date('Y'); ?> 北京飞行魔方科技有限公司</div>
    <div>案例详情页 · flicube.com</div>
  </div>
</footer>
</body>
</html>

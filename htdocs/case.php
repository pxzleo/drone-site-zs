<?php
$cases = require __DIR__ . '/myfolder/cases.php';
$products = require __DIR__ . '/myfolder/products.php';
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
$case = isset($cases[$slug]) ? $cases[$slug] : null;
if (!$case) {
    http_response_code(404);
}
$productLinks = [
    'FC-130 小型物流无人机' => 'fc-130',
    'FC-0510 智能物流无人机' => 'fc-0510',
    'TF70 运输无人机' => 'tf70',
    'FC-5100N 100 公斤运输无人机' => 'fc-5100n',
    'FC-TS150 150 公斤物流无人机' => 'fc-ts150',
    'FC-TS300 300 公斤物流无人机' => 'fc-ts300',
    'FC-F150pro 大载重消防投弹无人机飞行平台' => 'fc-f150pro',
    '星幻编队无人机 V2.1' => 'xh-v21',
    '室内编队无人机' => 'indoor-show',
    '蛋壳飞行器' => 'eggcraft',
    '低空飞行综合管理服务平台' => 'uav-platform'
];
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
    <a class="brand brand-logo" href="index.php"><img src="assets/customer/logo.png" alt="飞行魔方 Logo"></a>
    <nav class="menu">
      <a href="index.php">首页</a>
      <a href="about.php">公司介绍</a>
      <a href="products.php">产品中心</a>
      <a href="cases.php">应用案例</a>
      <a href="news.php">新闻资讯</a>
      <a href="contact.php" class="cta">联系我们</a>
    </nav>
  </div>
  <div class="container mobile-nav-wrap">
    <nav class="mobile-menu">
      <a href="about.php">公司介绍</a>
      <a href="products.php">产品中心</a>
      <a href="cases.php">应用案例</a>
      <a href="news.php">新闻资讯</a>
      <a href="contact.php">联系我们</a>
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
          <span class="eyebrow">案例详情</span>
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
      <h2>资料中的场景背景</h2>
      <ul class="feature-list">
        <?php foreach ($case['pain_points'] as $item): ?>
          <li><?= htmlspecialchars($item) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="dark-panel">
      <h2>资料中的方案描述</h2>
      <p><?= htmlspecialchars($case['solution']) ?></p>
    </div>
  </div>
</section>

<section class="section dark-section">
  <div class="container grid grid-3">
    <div class="dark-panel tall-panel">
      <h3>对应产品</h3>
      <ul class="feature-list compact">
        <?php foreach ($case['products'] as $item): ?>
          <li>
            <?php if (isset($productLinks[$item])): ?>
              <a href="product.php?slug=<?= urlencode($productLinks[$item]) ?>"><?= htmlspecialchars($item) ?></a>
            <?php else: ?>
              <?= htmlspecialchars($item) ?>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="dark-panel tall-panel">
      <h3>资料中的实施流程</h3>
      <ul class="feature-list compact">
        <?php foreach ($case['process'] as $item): ?>
          <li><?= htmlspecialchars($item) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="dark-panel tall-panel">
      <h3>交付与系统能力</h3>
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
    <h2>想进一步了解“<?= htmlspecialchars($case['title']) ?>”对应产品和实施方式？</h2>
    <p>欢迎联系北京飞行魔方科技有限公司，获取资料、参数说明与项目建议。</p>
    <div class="hero-actions">
      <a class="btn btn-primary" href="contact.php">联系咨询</a>
      <a class="btn btn-secondary" href="products.php">查看产品中心</a>
    </div>
  </div>
</section>
<?php endif; ?>



<footer class="footer">
  <div class="container footer-bottom">
    <div>© <?php echo date('Y'); ?> 北京飞行魔方科技有限公司</div>
    <div>案例详情页</div>
  </div>
</footer>
</body>
</html>

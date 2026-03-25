<?php $products = require __DIR__ . '/../data/products.php'; ?>
<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>产品中心 | 北京飞行魔方科技有限公司</title>
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
    <div class="breadcrumb"><a href="index.php">首页</a> / 产品中心</div>
    <div class="section-header">
      <span class="eyebrow">Product Fleet</span>
      <h1>物流、消防、编队、载人飞行器与低空管理平台产品矩阵</h1>
      <p>已根据你提供的 PDF、DOCX、PPTX 与图片资料，整理出主要产品条目与独立详情页。</p>
    </div>
  </div>
</section>

<section class="section dark-section">
  <div class="container grid grid-3 cards-lift">
    <?php foreach ($products as $slug => $product): ?>
      <article class="card product-card product-card-large">
        <div class="product-image-wrap">
          <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
        </div>
        <div class="card-body">
          <div class="product-meta">
            <span><?= htmlspecialchars($product['category']) ?></span>
            <span><?= htmlspecialchars($product['payload']) ?></span>
            <span><?= htmlspecialchars($product['endurance']) ?></span>
          </div>
          <h3><?= htmlspecialchars($product['name']) ?></h3>
          <p><?= htmlspecialchars($product['summary']) ?></p>
          <a class="btn btn-secondary" href="product.php?slug=<?= urlencode($slug) ?>">查看详情</a>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<footer class="footer">
  <div class="container footer-bottom">
    <div>© <?php echo date('Y'); ?> 北京飞行魔方科技有限公司</div>
    <div>产品中心页</div>
  </div>
</footer>
</body>
</html>

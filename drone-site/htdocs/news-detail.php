<?php
$news = require __DIR__ . '/myfolder/news.php';
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
$item = isset($news[$slug]) ? $news[$slug] : null;
if (!$item) {
    http_response_code(404);
}
?>
<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $item ? htmlspecialchars($item['title']) : '资讯不存在' ?> | 北京飞行魔方科技有限公司</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
  <div class="container nav">
    <a class="brand brand-logo" href="index.php"><img src="assets/customer/logo.png" alt="飞行魔方 Logo"></a>
    <button class="mobile-menu-toggle" type="button" aria-expanded="false" aria-controls="mobile-menu-panel" aria-label="打开导航菜单">☰</button>
    <nav class="menu">
      <a href="index.php">首页</a>
      <a href="about.php">公司介绍</a>
      <a href="products.php">产品中心</a>
      <a href="cases.php">应用案例</a>
      <a href="news.php">新闻资讯</a>
      <a href="contact.php" class="cta">联系我们</a>
    </nav>
  </div>
  <div class="container mobile-nav-wrap" id="mobile-menu-panel">
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
    <?php if (!$item): ?>
      <div class="section-header">
        <div class="breadcrumb"><a href="index.php">首页</a> / 资讯不存在</div>
        <h1>未找到对应资讯</h1>
        <p>请返回新闻资讯页面重新选择。</p>
        <a class="btn btn-primary" href="news.php">返回新闻资讯</a>
      </div>
    <?php else: ?>
      <div class="breadcrumb"><a href="index.php">首页</a> / <a href="news.php">新闻资讯</a> / <?= htmlspecialchars($item['title']) ?></div>
      <div class="product-layout">
        <div class="photo"><img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['title']) ?>"></div>
        <div>
          <div class="eyebrow"><?= htmlspecialchars($item['date']) ?></div>
          <h1 class="detail-title"><?= htmlspecialchars($item['title']) ?></h1>
          <p style="font-size:18px;color:#d5e4f8"><?= htmlspecialchars($item['summary']) ?></p>
          <div class="hero-actions">
            <a class="btn btn-primary" href="contact.php">联系咨询</a>
            <a class="btn btn-secondary" href="news.php">返回资讯列表</a>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>

<?php if ($item): ?>
<section class="section">
  <div class="container">
    <div class="dark-panel">
      <h2>详细内容</h2>
      <?php foreach ($item['content'] as $paragraph): ?>
        <p><?= htmlspecialchars($paragraph) ?></p>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<footer class="footer"><div class="container footer-bottom"><div>© <?php echo date('Y'); ?> 北京飞行魔方科技有限公司</div><div>新闻详情页</div></div></footer>
<script>
(function(){
  var btn=document.querySelector('.mobile-menu-toggle');
  var panel=document.getElementById('mobile-menu-panel');
  if(!btn||!panel) return;
  btn.addEventListener('click',function(){
    var open=panel.classList.toggle('open');
    btn.setAttribute('aria-expanded', open ? 'true' : 'false');
    btn.textContent=open ? '✕' : '☰';
  });
})();
</script>
</body>
</html>

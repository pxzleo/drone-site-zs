<?php $products = require __DIR__ . '/myfolder/products.php'; ?>
<?php require __DIR__ . '/i18n.php'; ?>
<!doctype html>
<html lang="<?= $lang === 'zh' ? 'zh-CN' : 'en' ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars(t('产品中心 | 北京飞行魔方科技有限公司', 'Products | Beijing Flicube Technology')) ?></title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php render_header(); ?>
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
    <div class="breadcrumb"><a href="<?= url_with_lang('index.php') ?>"><?= htmlspecialchars(t('首页', 'Home')) ?></a> / <?= htmlspecialchars(t('产品中心', 'Products')) ?></div>
    <div class="section-header">
      <h1>物流、消防、编队、载人飞行器与低空管理平台产品矩阵</h1>
      <p>围绕物流、消防、编队、载人飞行器与低空管理平台等方向，集中展示公司主要产品与相关页面内容。</p>
    </div>
  </div>
</section>

<section class="section dark-section">
  <div class="container grid grid-3 cards-lift">
    <?php foreach ($products as $slug => $product): ?>
      <article class="card product-card product-card-large">
        <a href="<?= url_with_lang('product.php', ['slug' => $slug]) ?>" style="display:block;color:inherit;text-decoration:none;">
          <div class="product-image-wrap">
            <img src="<?= htmlspecialchars((isset($product['card_image']) ? $product['card_image'] : $product['image'])) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
          </div>
          <div class="card-body">
            <div class="product-meta">
              <span><?= htmlspecialchars($product['category']) ?></span>
              <span><?= htmlspecialchars($product['payload']) ?></span>
              <span><?= htmlspecialchars($product['endurance']) ?></span>
            </div>
            <h3><?= htmlspecialchars($product['name']) ?></h3>
            <p><?= htmlspecialchars($product['summary']) ?></p>
            <span class="btn btn-secondary">查看详情</span>
          </div>
        </a>
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

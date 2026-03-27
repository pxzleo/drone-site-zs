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
<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?= url_with_lang('index.php') ?>"><?= htmlspecialchars(t('首页', 'Home')) ?></a> / <?= htmlspecialchars(t('产品中心', 'Products')) ?></div>
    <div class="section-header">
      <h1><?= htmlspecialchars(t('物流、消防、编队、载人飞行器与低空管理平台产品矩阵', 'Product portfolio covering logistics, firefighting, drone shows, manned aircraft and low-altitude management platforms')) ?></h1>
      <p><?= htmlspecialchars(t('围绕物流、消防、编队、载人飞行器与低空管理平台等方向，集中展示公司主要产品与相关页面内容。', 'This page presents the company’s major products and related content across logistics, firefighting, drone performance, manned aircraft and low-altitude management platforms.')) ?></p>
    </div>
  </div>
</section>

<section class="section dark-section">
  <div class="container grid grid-3 cards-lift">
    <?php foreach ($products as $slug => $product): ?>
      <article class="card product-card product-card-large">
        <a href="<?= url_with_lang('product.php', ['slug' => $slug]) ?>" style="display:block;color:inherit;text-decoration:none;">
          <div class="product-image-wrap">
            <img src="<?= htmlspecialchars((isset($product['card_image']) ? $product['card_image'] : $product['image'])) ?>" alt="<?= htmlspecialchars(localized($product['name'])) ?>">
          </div>
          <div class="card-body">
            <div class="product-meta">
              <span><?= htmlspecialchars(localized($product['category'])) ?></span>
              <span><?= htmlspecialchars(localized($product['payload'])) ?></span>
              <span><?= htmlspecialchars(localized($product['endurance'])) ?></span>
            </div>
            <h3><?= htmlspecialchars(localized($product['name'])) ?></h3>
            <p><?= htmlspecialchars(localized($product['summary'])) ?></p>
            <span class="btn btn-secondary"><?= htmlspecialchars(t('查看详情', 'View Details')) ?></span>
          </div>
        </a>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<footer class="footer">
  <div class="container footer-bottom">
    <div>© <?php echo date('Y'); ?> <?= htmlspecialchars(t('北京飞行魔方科技有限公司', 'Beijing Flicube Technology Co., Ltd.')) ?></div>
    <div><?= htmlspecialchars(t('产品中心页', 'Products Page')) ?></div>
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

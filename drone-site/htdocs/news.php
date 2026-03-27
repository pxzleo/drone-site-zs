<?php $news = require __DIR__ . '/myfolder/news.php'; ?>
<?php require __DIR__ . '/i18n.php'; ?>
<!doctype html>
<html lang="<?= $lang === 'zh' ? 'zh-CN' : 'en' ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars(t('新闻资讯 | 北京飞行魔方科技有限公司', 'News | Beijing Flicube Technology')) ?></title>
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
    <div class="breadcrumb"><a href="<?= url_with_lang('index.php') ?>"><?= htmlspecialchars(t('首页', 'Home')) ?></a> / <?= htmlspecialchars(t('新闻资讯', 'News')) ?></div>
    <div class="section-header">
      <h1>产品动态与企业资讯</h1>
      <p>围绕公司产品、应用方向与企业相关信息，展示物流、应急、编队、载人及低空平台等业务内容。</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="media-grid" style="margin-bottom:28px;">
      <div class="media-card"><img src="assets/customer/logistics-100.png" alt="100 公斤无人机"><p>100 公斤级运输无人机</p></div>
      <div class="media-card"><img src="assets/customer/show-line3.png" alt="室内编队设计图"><p>室内编队设计图</p></div>
    </div>
    <div class="grid grid-3">
      <?php foreach ($news as $slug => $item): ?>
        <article class="card news-card">
          <a href="<?= url_with_lang('news-detail.php', ['slug' => $slug]) ?>" style="display:block;color:inherit;text-decoration:none;">
            <div class="card-body">
              <span class="news-date"><?= htmlspecialchars($item['date']) ?></span>
              <h3><?= htmlspecialchars($item['title']) ?></h3>
              <p><?= htmlspecialchars($item['summary']) ?></p>
              <div class="hero-actions" style="margin-top:18px;">
                <span class="btn btn-secondary">查看详情</span>
              </div>
            </div>
          </a>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>



<footer class="footer"><div class="container footer-bottom"><div>© <?php echo date('Y'); ?> 北京飞行魔方科技有限公司</div><div>新闻资讯页</div></div></footer>
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

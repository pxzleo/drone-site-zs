<?php $cases = require __DIR__ . '/myfolder/cases.php'; ?>
<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>应用案例 | 北京飞行魔方科技有限公司</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
  <div class="container nav">
    <a class="brand brand-logo" href="index.php"><img src="assets/customer/logo.png" alt="飞行魔方 Logo"></a>
    <button class="mobile-menu-toggle" type="button" aria-expanded="false" aria-controls="mobile-menu-panel" aria-label="打开导航菜单"><span></span><span></span><span></span></button>
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
    <div class="breadcrumb"><a href="index.php">首页</a> / 应用案例</div>
    <div class="section-header">
      <span class="eyebrow">应用案例</span>
      <h1>围绕真实低空场景构建产品与平台能力</h1>
      <p>从物流运输到应急消防，从文旅编队到载人展示，再到低空飞行综合管理平台，飞行魔方面向多行业提供解决方案。</p>
    </div>
  </div>
</section>

<section class="section dark-section">
  <div class="container grid grid-2">
    <?php foreach ($cases as $slug => $case): ?>
      <article class="card case-card">
        <img src="<?= htmlspecialchars($case['image']) ?>" alt="<?= htmlspecialchars($case['title']) ?>">
        <div class="card-body">
          <h3><?= htmlspecialchars($case['title']) ?></h3>
          <p><?= htmlspecialchars($case['summary']) ?></p>
          <div class="hero-actions" style="margin-top:18px;">
            <a class="btn btn-secondary" href="case.php?slug=<?= urlencode($slug) ?>">查看案例详情</a>
          </div>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>



<footer class="footer"><div class="container footer-bottom"><div>© <?php echo date('Y'); ?> 北京飞行魔方科技有限公司</div><div>应用案例页 · flicube.com</div></div></footer>
<script>
(function(){
  var btn=document.querySelector('.mobile-menu-toggle');
  var panel=document.getElementById('mobile-menu-panel');
  if(!btn||!panel) return;
  function setOpen(open){
    panel.classList.toggle('open', open);
    btn.classList.toggle('open', open);
    btn.setAttribute('aria-expanded', open ? 'true' : 'false');
  }
  btn.addEventListener('click',function(e){
    e.stopPropagation();
    setOpen(!panel.classList.contains('open'));
  });
  document.addEventListener('click',function(e){
    if(!panel.classList.contains('open')) return;
    if(panel.contains(e.target) || btn.contains(e.target)) return;
    setOpen(false);
  });
  panel.querySelectorAll('a').forEach(function(a){
    a.addEventListener('click',function(){ setOpen(false); });
  });
})();
</script>
</body>
</html>

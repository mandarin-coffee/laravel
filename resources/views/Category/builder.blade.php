<h3>Блог строителя</h3>
<div>
    <?php if(isset($news) && !empty($news) && is_array($news)): ?>
    <?php foreach($news as $n): ?>
    <div>
        <h2><a href="<?=route('admin.news.builder', ['id' => $n['id']])?>"><?=$n['title']?></a></h2>
        <p><?=$n['text']?></p>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
</div>

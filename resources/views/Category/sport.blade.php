<h2>Новости спорта</h2>
<div>
    <?php if(isset($news) && !empty($news) && is_array($news)): ?>
    <?php foreach($news as $n): ?>
    <div>
        <h3><a href="<?=route('category.news.sport', ['id' => $n['id']])?>"><?=$n['title']?></a></h3>
        <p><?=$n['text']?></p>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
</div>

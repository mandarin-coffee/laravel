<h3>Плюшки упрощающие жизнь</h3>
<div>
    <?php if(isset($news) && !empty($news) && is_array($news)): ?>
    <?php foreach($news as $n): ?>
    <div>
        <h2><a href="<?=route('category.news.lifehacks', ['id' => $n['id']])?>"><?=$n['title']?></a></h2>
        <p><?=$n['text']?></p>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
</div>

<nav>
    <h1>main</h1>
    <ul>
        <li><?php echo $this->Html->link('home', '/'); ?></li>
        <li><?php echo $this->Html->link('about', '/pages/about'); ?></li>
        <li><?php echo $this->Html->link('support', '/pages/support'); ?></li>
    </ul>
    <h2>demo pages &amp; tests</h2>
    <ul>
        <li><?php echo $this->Html->link('elements', '/pages/demo/elements'); ?></li>
        <li><?php echo $this->Html->link('cake', '/pages/demo/cake'); ?></li>
    </ul>
</nav>